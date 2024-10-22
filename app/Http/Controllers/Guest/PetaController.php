<?php

namespace App\Http\Controllers\Guest;

use App\Models\KasusHiv;
use App\Models\SuhuIspa;
use App\Models\HotspotHiv;
use App\Models\FaskesPdpHiv;
use Illuminate\Http\Request;
use App\Models\TunaSusilaHiv;
use App\Models\CurahHujanIspa;
use App\Models\KelembapanIspa;
use App\Models\DataPenyakitDbd;
use App\Models\DataPenyakitIspa;
use App\Models\WilayahRentanHiv;
use App\Models\PendudukMiskinHiv;
use App\Models\FaktorLingkunganDbd;
use App\Http\Controllers\Controller;
use App\Models\KepadatanPendudukDbd;
use App\Models\KepadatanPendudukIspa;
use App\Models\LokasiRawanTunaSusilaHiv;
use App\Models\PendudukPriaProduktivHiv;

class PetaController extends Controller
{

    public function index()
    {
        $kelurahanDbd = DataPenyakitDbd::pluck('kelurahan')->merge(
            FaktorLingkunganDbd::pluck('kelurahan')
        )->merge(
            KepadatanPendudukDbd::pluck('kelurahan')
        )->unique()->values();

        $kecamatanIspa = DataPenyakitIspa::pluck('kecamatan')->merge(
            CurahHujanIspa::pluck('kecamatan')
        )->merge(
            KelembapanIspa::pluck('kecamatan')
        )->merge(
            KepadatanPendudukIspa::pluck('kecamatan')
        )->merge(
            SuhuIspa::pluck('kecamatan')
        )->unique()->values();

        $kecamatanHiv = FaskesPdpHiv::pluck('kecamatan')->merge(
            HotspotHiv::pluck('kecamatan')
        )->merge(
            KasusHiv::pluck('kecamatan')
        )->merge(
            LokasiRawanTunaSusilaHiv::pluck('kecamatan')
        )->merge(
            PendudukMiskinHiv::pluck('kecamatan')
        )->merge(
            PendudukPriaProduktivHiv::pluck('kecamatan')
        )->merge(
            TunaSusilaHiv::pluck('kecamatan')
        )->merge(
            WilayahRentanHiv::pluck('kecamatan')
        )->unique()->values();

        return view('layouts.peta', [
            'wilayahDbd' => $kelurahanDbd,
            'wilayahIspa' => $kecamatanIspa,
            'wilayahHiv' => $kecamatanHiv
        ]);
    }

    public function filterPeta(Request $request)
    {
        $tahun = $request->input('tahun');
        $bulan = $request->input('bulan');
        $jenisPenyakit = $request->input('jenis_penyakit');
        $jenisParameter = $request->input('jenis_parameter');

        $filteredData = [];

        if ($jenisPenyakit == 'DBD') {
            switch ($jenisParameter) {
                case 'kasus_dbd':
                    $filteredData = DataPenyakitDbd::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'kelembapan':
                case 'curah_hujan':
                case 'suhu':
                    $filteredData = FaktorLingkunganDbd::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'kepadatan_penduduk':
                    $filteredData = KepadatanPendudukDbd::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
            }
        } elseif ($jenisPenyakit == 'ISPA') {
            switch ($jenisParameter) {
                case 'kasus_ispa':
                    $filteredData = DataPenyakitIspa::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'curah_hujan':
                    $filteredData = CurahHujanIspa::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'kelembapan':
                    $filteredData = KelembapanIspa::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'suhu':
                    $filteredData = SuhuIspa::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'kepadatan_penduduk':
                    $filteredData = KepadatanPendudukIspa::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
            }
        } elseif ($jenisPenyakit == 'HIV') {
            switch ($jenisParameter) {
                case 'kasus_hiv':
                    $filteredData = KasusHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'tuna_susila':
                    $filteredData = TunaSusilaHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'penduduk_miskin':
                    $filteredData = PendudukMiskinHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'hotspot':
                    $filteredData = HotspotHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'lokasi_rawan_tuna_susila':
                    $filteredData = LokasiRawanTunaSusilaHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'penduduk_lakilaki_usia_produktif':
                    $filteredData = PendudukPriaProduktivHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'wilayah_rentan_hiv':
                    $filteredData = WilayahRentanHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
                case 'faskes_hiv':
                    $filteredData = FaskesPdpHiv::whereYear('tanggal', $tahun)
                        ->whereMonth('tanggal', $bulan)
                        ->get();
                    break;
            }
        }

        return response()->json($filteredData);
    }
}
