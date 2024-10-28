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
        // Menggabungkan kelurahan dan kecamatan dari berbagai model
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

        // Filter untuk penyakit DBD
        if ($jenisPenyakit == 'DBD') {
            switch ($jenisParameter) {
                case 'kasus_dbd':
                    $query = DataPenyakitDbd::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
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
                    $query = FaktorLingkunganDbd::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'kepadatan_penduduk':
                    $query = KepadatanPendudukDbd::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
            }
        }
        // Filter untuk penyakit ISPA
        elseif ($jenisPenyakit == 'ISPA') {
            switch ($jenisParameter) {
                case 'kasus_ispa':
                    $query = DataPenyakitIspa::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'curah_hujan':
                    $query = CurahHujanIspa::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'kelembapan':
                    $query = KelembapanIspa::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'suhu':
                    $query = SuhuIspa::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'kepadatan_penduduk':
                    $query = KepadatanPendudukIspa::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
            }
        }
        // Filter untuk penyakit HIV
        elseif ($jenisPenyakit == 'HIV') {
            switch ($jenisParameter) {
                case 'kasus_hiv':
                    $query = KasusHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'tuna_susila':
                    $query = TunaSusilaHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'penduduk_miskin':
                    $query = PendudukMiskinHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'hotspot':
                    $query = HotspotHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'lokasi_rawan_tuna_susila':
                    $query = LokasiRawanTunaSusilaHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'penduduk_lakilaki_usia_produktif':
                    $query = PendudukPriaProduktivHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'wilayah_rentan_hiv':
                    $query = WilayahRentanHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
                case 'faskes_hiv':
                    $query = FaskesPdpHiv::whereYear('tanggal', $tahun);
                    if ($bulan) {
                        $query->whereMonth('tanggal', $bulan);
                    }
                    $filteredData = $query->get();
                    break;
            }
        }

        return response()->json($filteredData);
    }
}
