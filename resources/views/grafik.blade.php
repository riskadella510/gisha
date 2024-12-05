@extends('layouts.landingpage')
@section('title', 'GISHA - GRAFIK')

@section('content')
    <div id="filter"
        class="fixed right-10 border border-slate-200 z-30 top-20 rounded w-fit h-fit p-4 bg-white drop-shadow-md hidden">
        <h1>Filter</h1>
        <div class="flex space-x-4">
            <div id="filter-tahun">
                <h1>Tahun</h1>
            </div>
            <div id="filter-bulan">
                <h1>Bulan</h1>
            </div>
        </div>
    </div>
    <div class="flex mt-20 z-10 overflow-auto">
        @include('components.grafik.sideBarGraph')
        <div class="">
            <h1 id="title" class="font-bold text-2xl mb-4">Grafik Terbaru</h1>
            <div class="flex space-x-2">
                <div style="width: 100vh; height: calc(100vh - 10rem)"
                    class="p-4 bg-white overflow-auto drop-shadow-lg rounded border border-slate-200">
                    <canvas id="chart" class="pb-7 overflow-auto"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        const tableName = {!! json_encode($tableName) !!}.toString().split('\\')[2];
        const allData = {!! json_encode($allData) !!};
    
        // Hitung tahun sebelumnya
        const lastYear = (new Date().getFullYear() - 1).toString();
    
        // Filter data untuk tahun sebelumnya
        const dataLastYear = allData.filter(item => item.tanggal.split('-')[0] === lastYear);
    
        // Debug data
        console.log('Last Year:', lastYear);
        console.log('Data Last Year:', dataLastYear);
    
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    
        // Ambil data x dan y untuk grafik
        const yValuesLastYear = dataLastYear.map(item => 
            tableName === 'KasusHiv' ? item.ha_kasus : 
            tableName === 'HotspotHiv' ? item.ha_kasus : 
            tableName === 'PendudukMiskinHiv' ? item.pdd_miskin : 
            tableName === 'TunaSusilaHiv' ? item.tn_susila : 
            tableName === 'PendudukPriaProduktivHiv' ? item.pdd_lk_pro : 
            tableName === 'WilayahRentanHiv' ? item.nilai_wr : 
            tableName === 'CurahHujanIspa' ? item.curah_hujan : 
            tableName === 'DataPenyakitIspa' ? item.jumlah_ispa_penderita : 
            tableName === 'KelembapanIspa' ? item.kelembapan : 
            tableName === 'KepadatanPendudukIspa' ? item.kpdt_bps : 
            tableName === 'SuhuIspa' ? item.suhu : 
            tableName === 'DataPenyakitDbd' ? item.kasus : 
            tableName === 'FaktorLingkunganDbd' ? item.suhu : 
            tableName === 'KepadatanPendudukDbd' ? item.kepadatan : 'tidak ada data'
        );
    
        const xValuesLastYear = dataLastYear.map(item => 
            tableName === 'DataPenyakitDbd' || tableName === 'FaktorLingkunganDbd' || tableName === 'KepadatanPendudukDbd' ? 
            item.kelurahan : item.kecamatan
        );
    
        // Debug xValues dan yValues
        console.log('xValues Last Year:', xValuesLastYear);
        console.log('yValues Last Year:', yValuesLastYear);
    
        const ctx = document.getElementById('chart').getContext('2d');
        const currentChart = new Chart(ctx, {
    type: 'bar', // atau 'pie', tergantung kebutuhan
    data: {
        labels: xValuesLastYear.length !== 0 ? xValuesLastYear : ['Tidak Ada Data'],
        datasets: [{
            backgroundColor: xValuesLastYear.map(() => getRandomColor()),
            data: yValuesLastYear.length !== 0 ? yValuesLastYear : [1]
        }]
    },
    options: {
        layout: {
            padding: {
                top: 10,
                bottom: 8,
                left: 20,
                right: 20
            }
        },
        legend: {
            display: false
        },
        title: {
            display: true,
            text: `Data Kasus HIV/AIDS Tahun ${lastYear}`,
            fontSize: 18
        },
        responsive: true,
        maintainAspectRatio: false,
        animation: {
            duration: 1000,
            easing: 'easeOutBounce'
        },
        tooltips: {
            enabled: false // Nonaktifkan tooltip
        }
    }
});

    </script>    
@endsection
