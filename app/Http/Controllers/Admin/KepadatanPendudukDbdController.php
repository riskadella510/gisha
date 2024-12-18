<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KepadatanPendudukDbd;
use Illuminate\Support\Facades\Storage;

class KepadatanPendudukDbdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $KepadatanPendudukDbd = KepadatanPendudukDbd::paginate(10); // Ambil data kelurahan dengan pagination
        return view('pages.admin.DBD.kepadatanPenduduk.index', compact('KepadatanPendudukDbd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.DBD.kepadatanPenduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filePath = $request->file('file')->getRealPath();
        $jsonContent = file_get_contents($filePath);
        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Invalid JSON format'], 400);
        }

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $banner = $request->file('gambar');
            $banner->storeAs('public/kepadatanPendudukDbd/', $banner->hashName());
            $gambar = $banner->hashName();
        }

        foreach ($data['features'] as $feature) {
            KepadatanPendudukDbd::create([
                'geometry' => json_encode($feature['geometry']),
                'kecamatan' => $feature['properties']['KECAMATAN'],
                'jumlah penduduk' => $feature['properties']['jml_pddk'],
                'kelas' => $feature['properties']['kelas_kpdt'],
                'operator' => $request->operator,
                'tanggal' => $request->tanggal,
                'gambar' => $gambar,
            ]);
        }

        return redirect()->route('admin.kepadatan-penduduk-dbd.index')->with('success', 'Data Berhasil Disimpan!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepadatanPendudukDbd $kepadatanPendudukDbd)
    {
         return view('pages.admin.DBD.kepadatanPenduduk.edit', compact('kepadatanPendudukDbd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kepadatanPendudukDbd = KepadatanPendudukDbd::findOrFail($id);

        $request->validate([
            'geometry' => 'required|json',
        ]);

        $kepadatanPendudukDbd->update([
            'kecamatan' => $request->input('kecamatan'),
            'jumlah penduduk' => $request->input('jml_pddk'),
            'kelas' => $request->input('kelas_pddk'),
            'geometry' => $request->input('geometry'),
        ]);

        return redirect()->route('admin.kepadatan-penduduk-dbd.index')->with('success', 'Kepadatan Penduduk DBD berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kepadatanPendudukDbd = KepadatanPendudukDbd::findOrFail($id);
        $allKepadatanPendudukDbd = KepadatanPendudukDbd::where('tanggal', $kepadatanPendudukDbd->tanggal)->get();
        if ($allKepadatanPendudukDbd->count() === 1 && $kepadatanPendudukDbd->gambar) {
            Storage::delete('public/kepadatanPendudukDbd/' . $kepadatanPendudukDbd->gambar);
        }
        // Hapus data dataPenyakitDbd
        $kepadatanPendudukDbd->delete();
        return redirect()->route('admin.kepadatan-penduduk-dbd.index')->with('success', 'Data Penyakit DBD berhasil dihapus!');
    }
}
