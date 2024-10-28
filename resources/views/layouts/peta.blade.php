<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GISHA">
    <meta name="author" content="GISHA">

    <title>GISHA - PETA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dist/dropify.min.css') }}">

    <!-- Inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo1/style2.css') }}">

    <!-- CKEditor 5 -->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css" />

    <link rel="shortcut icon" href="{{ asset('assets/images/logogisha.png') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Leaflet Maps CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">

    <!-- OpenLayers -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v10.2.1/ol.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box !important;
        }

        .main-wrapper .page-wrapper {
            width: 100% !important;
            margin-left: 0 !important;
        }

        .sidebar-brand {
            color: #D95639 !important;
        }

        .sidebar-body {
            margin: 20px !important;
            background-color: #D95639 !important;
            border-radius: 15px !important;
            max-height: 80vh;
            overflow-y: scroll;
        }

        .sidebar-body::-webkit-scrollbar {
            width: 0;
            /* Hide scrollbar for Chrome, Safari, and Opera */
        }

        .sidebar-body {
            -ms-overflow-style: none;
            /* Hide scrollbar for Internet Explorer and Edge */
            scrollbar-width: none;
            /* Hide scrollbar for Firefox */
        }

        .sidebar .sidebar-header {
            width: 340px !important;
            border-right: none !important;
        }

        .tombol-terapkan {
            width: 100% !important;
            border: none !important;
            border-radius: 5px !important;
            padding: 5px !important;
        }

        .tombol-terapkan:hover {
            background-color: #d97666 !important;
            color: white !important;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-change-transparency {
            width: 100% !important;
            border: none !important;
            border-radius: 5px !important;
            padding: 5px !important;
        }

        .btn-change-transparency:hover {
            background-color: #d97666 !important;
            color: white !important;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .legenda-icon {
            /* width: 12px;
            height: 12px; */
            margin-right: 5px;
        }

        .nav-link.active {
            color: #D95639 !important;
        }

        .nav-link:hover {
            color: #D95639 !important;
        }

        #map {
            height: 100%;
            width: 100%;
        }

        .ol-popup {
            position: absolute;
            background-color: white;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #cccccc;
            bottom: 12px;
            left: -50px;
            min-width: 280px;
        }

        .ol-popup:after,
        .ol-popup:before {
            top: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .ol-popup:after {
            border-top-color: white;
            border-width: 10px;
            left: 48px;
            margin-left: -10px;
        }

        .ol-popup:before {
            border-top-color: #cccccc;
            border-width: 11px;
            left: 48px;
            margin-left: -11px;
        }

        .ol-popup-closer {
            text-decoration: none;
            position: absolute;
            top: 2px;
            right: 8px;
        }

        .ol-popup-closer:after {
            content: "✖";
        }

        .page-content {
            padding: 0 !important;
            margin: 0;
        }

        .ol-control {
            right: auto !important;
            top: auto !important;
            left: 340px !important;
        }


        .ol-zoom {
            top: 70px !important;
            display: flex;
            flex-direction: column;
            background-color: transparent !important;
        }

        .ol-zoom .ol-zoom-in {
            margin-bottom: 10px;
        }

        .ol-full-screen {
            top: 30px !important;
        }

        .ol-scale-line {
            right: 10px !important;
            top: auto !important;
            left: auto !important;
        }

        .ol-control button {
            background-color: #D95639 !important;
            color: white !important;
            border: none !important;
            border-radius: 5px !important;
            font-size: 20px !important;
        }

        .ol-control button:active {
            background-color: #B2452B !important;
        }

        .ol-mouse-position {
            position: absolute;
            top: 470px !important;
            bottom: auto !important;
            right: 400px !important;
            left: auto;
            background-color: rgba(210, 209, 209, 0.806);
            /* Latar belakang transparan */
            color: black !important;
            /* Warna teks putih */
            padding: 10px 20px !important;
            border-radius: 10px;
            font-size: 12px;
            z-index: 1000;
        }

        .menu-button {
            position: fixed;
            top: 140px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #D95639;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Agar selalu di depan */
            display: flex;
            justify-content: center;
            align-items: center;

            @media (min-width: 768px) {
                display: none;
            }
        }

        .menu-button:hover {
            background-color: #B2452B;
            /* Warna saat hover */
        }

        .menu-button i {
            font-size: 24px;
            /* Ukuran ikon */
        }

        .screenshot-button {
            position: fixed;
            top: 80px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #D95639;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Agar selalu di depan */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .screenshot-button:hover {
            background-color: #B2452B;
            /* Warna saat hover */
        }

        .screenshot-button i {
            font-size: 24px;
            /* Ukuran ikon */
        }

        .map-theme-selector {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
        }

        .map-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            color: #D95639;
            font-weight: bold;
            text-align: center;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 5px;
        }

        .map-option-content {
            display: flex;
            flex-direction: row;
            gap: 10xp;
        }

        .map-option img {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .map-option label {
            display: flex;
            align-items: center;
            padding: 10px;
            width: 100%;
            color: white;
            font-size: 14px;
        }

        .map-option input[type="radio"] {
            margin-right: 10px;
            accent-color: #D95639;
        }

        .map-option input[type="radio"]:checked+label {
            background-color: #f4f4f4af;
        }
    </style>

    @yield('css')

</head>

<body>
    <div class="main-wrapper">
        {{-- SIDEBAR --}}
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('home') }}" class="sidebar-brand">
                    GISHA
                </a>
            </div>
            <div class="sidebar-body" id="sidebar-body">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#filters" role="button"
                            aria-expanded="false" aria-controls="filters">
                            <i class="link-icon text-white" data-feather="filter"></i>
                            <span class="link-title text-white">Filter</span>
                            <i class="link-arrow text-white" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="filters">
                            <form id="filter-form">
                                <ul class="nav sub-menu">
                                    <li class="nav-item">
                                        <div class="mb-3">
                                            <select class="form-select form-select-sm" id="tahun" name="tahun">
                                                <option selected disabled>Pilih Tahun</option>
                                                <!-- Loop for years -->
                                                @for ($year = date('Y'); $year >= 2000; $year--)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </li>
<<<<<<< HEAD
                                    <li class="nav-item">
=======
                                    <!--<li class="nav-item">
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                        <div class="mb-3">
                                            <select class="form-select form-select-sm" id="bulan" name="bulan">
                                                <option selected disabled>Pilih Bulan</option>
                                                @foreach (range(1, 12) as $month)
                                                    <option value="{{ $month }}">
                                                        {{ DateTime::createFromFormat('!m', $month)->format('F') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
<<<<<<< HEAD
                                    </li>
=======
                                    </li>-->
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                    <li class="nav-item">
                                        <div class="mb-3">
                                            <select class="form-select form-select-sm" id="jenisPenyakit"
                                                name="jenisPenyakit">
                                                <option selected disabled>Pilih Jenis Penyakit</option>
                                                <!--<option value="DBD">DBD</option>
                                                <option value="ISPA">ISPA</option>-->
                                                <option value="HIV">HIV</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="mb-3">
                                            <select class="form-select form-select-sm" id="jenisParameter"
                                                name="jenisParameter">
                                                <option selected disabled>Pilih Jenis Parameter</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="col-md-12">
                                            <button type="button" class="tombol-terapkan"
                                                id="submit-filter">Terapkan</button>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </li>

<<<<<<< HEAD
                    <li class="nav-item">
=======
                    <!--<li class="nav-item">
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                        <a class="nav-link" data-bs-toggle="collapse" href="#transparansi" role="button"
                            aria-expanded="false" aria-controls="transparansi">
                            <i class="link-icon text-white" data-feather="sliders"></i>
                            <span class="link-title text-white">Transparansi</span>
                            <i class="link-arrow text-white" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="transparansi">
                            <ul class="nav sub-menu">
                                <li class="nav-item" id="btn-set-transparency-nav">
                                    <button type="button" class="btn-change-transparency mt-2"
                                        id="btn-set-transparency">Set
                                        data transparansi</button>
                                </li>

                                <li class="nav-item " id="transparency-panel">
                                    <div>
                                        <div>
                                            <div class="text-white">
                                                <p id="transparency-data1-label">Data 1</p>
                                                <div style="display: flex; gap: 8px;">
                                                    <input type="range" min="0" max="100"
                                                        value="0" step="1" id="transparency-range-data1">
                                                    <p id="transparency-data1-value">0%</p>
                                                </div>
                                            </div>

                                            <div class="text-white">
                                                <p id="transparency-data2-label">Data 2</p>
                                                <div style="display: flex; gap: 8px;">
                                                    <input type="range" min="0" max="100"
                                                        value="0" step="1" id="transparency-range-data2">
                                                    <p id="transparency-data2-value">0%</p>
                                                </div>
                                            </div>

                                            <button type="button" class="btn-change-transparency mt-2"
                                                id="btn-edit-transparansi">Ubah data transparansi</button>
                                            <button type="button" class="tombol-terapkan mt-2"
                                                id="btn-edit-transparency-value">Terapkan</button>
                                        </div>
                                </li>

                                <form id="transparency-form">
                                    <ul class="nav sub-menu">
                                        {{-- DATA 1 --}}
                                        <p class="text-white mb-2">Data 1</p>
                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="tahun-data1"
                                                    name="tahun-data1">
<<<<<<< HEAD
                                                    <option selected disabled>Pilih Tahun</option>
                                                    <!-- Loop for years -->
                                                    @for ($year = date('Y'); $year >= 2000; $year--)
=======
                                                    <option selected disabled>Pilih Tahun</option>-->
                                                    <!-- Loop for years -->
                                                   <!-- @for ($year = date('Y'); $year >= 2000; $year--)
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                                        <option value="{{ $year }}">
                                                            {{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="bulan-data1"
                                                    name="bulan-data1">
                                                    <option selected disabled>Pilih Bulan</option>
                                                    @foreach (range(1, 12) as $month)
                                                        <option value="{{ $month }}">
                                                            {{ DateTime::createFromFormat('!m', $month)->format('F') }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="jenisPenyakit-data1"
                                                    name="jenisPenyakit-data1">
<<<<<<< HEAD
                                                    <option selected disabled>Pilih Jenis Penyakit</option>
                                                    <!--<option value="DBD">DBD</option>
                                                    <option value="ISPA">ISPA</option>-->
                                                    <option value="HIV">HIV</option>
=======
                                                    <option selected disabled>Pilih Jenis Penyakit</option>-->
                                                    <!--<option value="DBD">DBD</option>
                                                    <option value="ISPA">ISPA</option>-->
                                                    <!--<option value="HIV">HIV</option>
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                                </select>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="jenisParameter-data1"
                                                    name="jenisParameter-data1">
                                                    <option selected disabled>Pilih Jenis Parameter</option>
                                                </select>
                                            </div>
                                        </li>

                                        {{-- DATA 2 --}}
                                        <p class="text-white mb-2">Data 2</p>
                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="tahun-data2"
                                                    name="tahun-data2">
<<<<<<< HEAD
                                                    <option selected disabled>Pilih Tahun</option>
                                                    <!-- Loop for years -->
                                                    @for ($year = date('Y'); $year >= 2000; $year--)
=======
                                                    <option selected disabled>Pilih Tahun</option>-->
                                                    <!-- Loop for years -->
                                                   <!-- @for ($year = date('Y'); $year >= 2000; $year--)
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                                        <option value="{{ $year }}">
                                                            {{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="bulan-data2"
                                                    name="bulan-data2">
                                                    <option selected disabled>Pilih Bulan</option>
                                                    @foreach (range(1, 12) as $month)
                                                        <option value="{{ $month }}">
                                                            {{ DateTime::createFromFormat('!m', $month)->format('F') }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="jenisPenyakit-data2"
                                                    name="jenisPenyakit-data2">
<<<<<<< HEAD
                                                    <option selected disabled>Pilih Jenis Penyakit</option>
                                                    <!--<option value="DBD">DBD</option>
                                                    <option value="ISPA">ISPA</option>-->
                                                    <option value="HIV">HIV</option>
=======
                                                    <option selected disabled>Pilih Jenis Penyakit</option>-->
                                                    <!--<option value="DBD">DBD</option>
                                                    <option value="ISPA">ISPA</option>-->
                                                    <!--<option value="HIV">HIV</option>
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                                </select>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="mb-3">
                                                <select class="form-select form-select-sm" id="jenisParameter-data2"
                                                    name="jenisParameter-data2">
                                                    <option selected disabled>Pilih Jenis Parameter</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="col-md-12">
                                                <button type="button" class="tombol-terapkan"
                                                    id="btn-save-edit-transparency">Simpan</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>

                            </ul>
                        </div>
<<<<<<< HEAD
                    </li>
=======
                    </li>-->
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#legenda" role="button"
                            aria-expanded="false" aria-controls="legenda">
                            <i class="link-icon text-white" data-feather="flag"></i>
                            <span class="link-title text-white">Legenda</span>
                            <i class="link-arrow text-white" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="legenda">
                            <ul class="nav sub-menu">
                                <li class="nav-item text-white">
                                    <div id="legenda-list">
                                        <p class="text-white">Legenda ini akan tampil berdasarkan filter / transparansi
                                            yang
                                            Anda
                                            terapkan</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#basemap" role="button"
                            aria-expanded="false" aria-controls="basemap">
                            <i class="link-icon text-white" data-feather="map"></i>
                            <span class="link-title text-white">Basemap</span>
                            <i class="link-arrow text-white" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="basemap">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <div class="map-theme-selector">

                                        <!-- World Imagery Map -->
                                        <div class="map-option">
                                            <label for="imagery">
                                                <img src="{{ asset('./assets/images/map1.png') }}"
                                                    alt="World Imagery Map">
                                            </label>
                                            <div class="map-option-content">
                                                <input type="radio" id="imagery" name="map-theme"
                                                    value="imagery" onclick="switchMapTheme(this.value)">
                                                <p>World Imagery Map</p>
                                            </div>
                                        </div>

                                        <!-- World Street Map -->
                                        <div class="map-option">
                                            <label for="street">
                                                <img src="{{ asset('./assets/images/map2.png') }}"
                                                    alt="World Street Map">
                                            </label>
                                            <div class="map-option-content">
                                                <input type="radio" id="street" name="map-theme" value="street"
                                                    onclick="switchMapTheme(this.value)">
                                                <p>World Street Map</p>
                                            </div>
                                        </div>

                                        <!-- Open Street Map -->
                                        <div class="map-option">
                                            <label for="osm">
                                                <img src="{{ asset('./assets/images/map3.png') }}"
                                                    alt="Open Street Map">
                                            </label>
                                            <div class="map-option-content">
                                                <input type="radio" id="osm" name="map-theme" value="osm"
                                                    onclick="switchMapTheme(this.value)">
                                                <p>Open Street Map</p>
                                            </div>
                                        </div>

                                        <!-- Esri World Map -->
                                        <div class="map-option">
                                            <label for="esri">
                                                <img src="{{ asset('./assets/images/map4.png') }}"
                                                    alt="Esri World Map">
                                            </label>
                                            <div class="map-option-content">
                                                <input type="radio" id="esri" name="map-theme" value="esri"
                                                    onclick="switchMapTheme(this.value)" checked>
                                                <p>Esri World Map</p>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#deskripsi" role="button"
                            aria-expanded="false" aria-controls="deskripsi">
                            <i class="link-icon text-white" data-feather="book-open"></i>
                            <span class="link-title text-white">Deskripsi Peta</span>
                            <i class="link-arrow text-white" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="deskripsi">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <p id="deskripsi-wilayah" class="text-white">Deskripsi ini akan tampil berdasarkan
                                        filter /
                                        transparansi yang Anda terapkan</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- <!-- Sidebar -->
        @include('components.peta.sidebar') --}}

        {{-- HEADER --}}
        <div class="page-wrapper">

            <!-- Navbar -->
            @include('components.peta.header')
            {{-- @include('components.landingPage.navbar') --}}

            {{-- CONTENT --}}
            <div class="page-content">
                <div id="popup" class="ol-popup">
                    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                    <div id="popup-content"></div>
                </div>
                <div id="map"></div>
                <button id="screenshot-btn" class="screenshot-button">
                    <i class="bi bi-camera"></i>
                </button>
                <button id="menu-btn" class="menu-button">
                    <i class="bi bi-list"></i>
                </button>

            </div>


            <!-- Main Content -->
            {{-- @yield('content') --}}

            <!-- Footer -->
            {{-- @include('components.admin.footer') --}}

        </div>
    </div>

    <!-- jQuery harus di-load terlebih dahulu -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap Bundle JS (includes Popper.js for dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icons Initialization -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js') }}"></script>

    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard-light.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>

    <!-- Leaflet (peta) JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>

    {{-- Map Data  --}}
    <script src="{{ asset('assets/js/mapData.js') }}"></script>

    <!-- OpenLayers -->
    <script src="https://cdn.jsdelivr.net/npm/ol@v10.2.1/dist/ol.js"></script>
    <script>
        const container = document.getElementById('popup');
        const content = document.getElementById('popup-content');
        const closer = document.getElementById('popup-closer');

        const overlay = new ol.Overlay({
            element: container,
            autoPan: {
                animation: {
                    duration: 250,
                },
            },
        });

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };

        var view = new ol.View({
            center: ol.proj.fromLonLat([110.342824000063541, -7.893371777085597]),
            zoom: 11.5
        });

        // Inisialisasi peta menggunakan OpenLayers
        var osmLayer = new ol.layer.Tile({
            source: new ol.source.OSM()
        });

        var map = new ol.Map({
            target: 'map',
            layers: [osmLayer],
            view: view,
            controls: [
                new ol.control.Zoom(),
                new ol.control.Attribution(),
                new ol.control.FullScreen(),
                new ol.control.ScaleLine()
            ],
            overlays: [overlay]
        });

        /**
         * Build popup view
         * @param {Array<Object<string, string>>} data
         * @requires data must be an array of object that contains key and value
         */
        function buildPopupView(data) {
            if (!Array.isArray(data) || data.length === 0) {
                return;
            }
            if (!data.every(item => typeof item === 'object' && item !== null && Object.keys(item).length === 2)) {
                return;
            }

            const table = document.createElement("table");
            table.className = "table table-striped table-bordered";

            const tbody = document.createElement("tbody");
            data.forEach(item => {
                const tr = document.createElement("tr");
                const th = document.createElement("th");
                const td = document.createElement("td");

                th.textContent = item.key.charAt(0).toUpperCase() + item.key.slice(1);
                td.textContent = item.value;

                tr.appendChild(th);
                tr.appendChild(td);
                tbody.appendChild(tr);
            });
            table.appendChild(tbody);

            return table.outerHTML;
        }

        map.on('singleclick', function(evt) {
            map.forEachFeatureAtPixel(evt.pixel, function(feature) {
                if (!feature) {
                    overlay.setPosition(undefined);
                    closer.blur();
                    return
                };

                const data = Object.entries(feature.values_).filter(([key]) => !['geometry', 'tingkat_ka']
                    .includes(key)).map(([key, value]) => ({
                    key,
                    value
                }));

                content.innerHTML = buildPopupView(data);
                overlay.setPosition(evt.coordinate);
            });
        });

        function resetMap() {
            map.getLayers().getArray().splice(1).forEach(layer => map.removeLayer(layer));
        }

        function switchMapTheme(theme) {
            var newLayer;

            if (theme === 'imagery') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.XYZ({
                        url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
                        attributions: '© Esri'
                    })
                });
            } else if (theme === 'street') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.XYZ({
                        url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}',
                        attributions: '© Esri'
                    })
                });
            } else if (theme === 'osm') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.OSM()
                });
            } else if (theme === 'esri') {
                newLayer = new ol.layer.Tile({
                    source: new ol.source.XYZ({
                        url: 'https://services.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}',
                        attributions: '© Esri'
                    })
                });
            }

            map.getLayers().setAt(0, newLayer);
        }

        // function for handling `legenda`
        // legendItems must be an array of object with property 'disease' and 'parameter'
        function showMapLegends(legendItems) {
            $('#legenda-list').empty();

            // check if legendItems is an array of object and every item has property 'disease' and 'parameter'
            if (!Array.isArray(legendItems) || !legendItems.every(item => item.disease && item.parameter)) {
                return;
            }

            // set is used to remove duplicates data
            const legendItemsSet = new Set();
            legendItems.forEach((item) => {
                const key = `${item.disease}-${item.parameter}`;
                if (!legendItemsSet.has(key)) {
                    legendItemsSet.add(key);

                    const options = mapData[item.disease].options
                    const selectedOption = options.find(option => option.value === item.parameter);
                    const parameterText = selectedOption.text ?? ''
                    const legends = selectedOption.legends
                    if (legends === undefined) {
                        return;
                    }

                    const legendItemElement = document.createElement('div');
                    legendItemElement.classList.add('mb-3');
                    legendItemElement.innerHTML = `
                                        <p>${item.disease} - ${parameterText}</p>
                                        ${Object.entries(legends).map(([key, value]) => `<p><i class="bi bi-square-fill legenda-icon" style="color: ${value}"></i><span>${key.charAt(0).toUpperCase() + key.slice(1)}</span></p>`).join('')}
                                    `;
                    $('#legenda-list').append(legendItemElement);
                }
            });
        }

        function setMapDescriptionTo(text) {
            $('#deskripsi-wilayah').text(text);
        }

        $('#submit-filter').click(function() {
            var tahun = $('#tahun').val();
            var bulan = $('#bulan').val();
            var jenisPenyakit = $('#jenisPenyakit').val();
            var jenisParameter = $('#jenisParameter').val();
            var wilayah = $('#wilayah').val();

<<<<<<< HEAD
            if (!tahun || !bulan || !jenisPenyakit || !jenisParameter) {
=======
            if (!tahun /*|| !bulan*/ || !jenisPenyakit || !jenisParameter) {
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                toastr.warning('Mohon lengkapi semua filter.');
                return;
            }
            toastr.info('Sedang memuat data...');

            // show map legends
            const mapLegendParams = [{
                disease: jenisPenyakit,
                parameter: jenisParameter
            }]
            showMapLegends(mapLegendParams);

            const parameterText = mapData[jenisPenyakit].options.find(option => option.value === jenisParameter)
                .text ?? '';
            setMapDescriptionTo(
<<<<<<< HEAD
                `Data ${jenisPenyakit} berdasarkan ${parameterText} Bulan ${monthMapping[parseInt(bulan)]} Tahun ${tahun} `
=======
                `Data ${jenisPenyakit} berdasarkan ${parameterText} Tahun ${tahun} `
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
            );

            $.ajax({
                url: '{{ route('peta.filter') }}',
                method: 'GET',
                data: {
                    tahun: tahun,
                    bulan: bulan,
                    jenis_penyakit: jenisPenyakit,
                    jenis_parameter: jenisParameter
                },
                success: function(response) {
                    resetMap()

                    if (!response || response.length === 0) {
                        toastr.warning('Data tidak ditemukan.');
                        return;
                    }

                    var vectorSource = new ol.source.Vector({
                        features: []
                    });

                    response.forEach(function(item) {
                        const feature = new ol.format.GeoJSON().readFeature({
                            'type': 'Feature',
                            'geometry': JSON.parse(item.geometry)
                        }, {
                            dataProjection: 'EPSG:4326',
                            featureProjection: 'EPSG:3857'
                        })

                        if (jenisPenyakit === 'DBD') {
                            switch (jenisParameter) {
                                case 'kasus_dbd':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kasus', item.kasus);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kepadatan', item.kepadatan);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_suhu);
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kelembapan', item.kelembapan);
                                    feature.set('tingkat_ka', item.tingkat_ka_kelembapan);
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('curah hujan', item.curah_hujan);
                                    feature.set('tingkat_ka', item.tingkat_ka_curah_hujan);
                                    break;
                            }
                        } else if (jenisPenyakit === 'ISPA') {
                            switch (jenisParameter) {
                                case 'kasus_ispa':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('jumlah ispa penderita', item
                                        .jumlah_ispa_penderita)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai kepadatan penduduk', item.kpdt_bps)
                                    feature.set('kelas', item.kelas_kpdt)
                                    feature.set('tingkat_ka', item.kelas_kpdt)
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai suhu', item.suhu)
                                    feature.set('kelas', item.kelas_suhu)
                                    feature.set('tingkat_ka', item.kelas_suhu)
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelembapan', item.kelembapan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('curah hujan', item.ch)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                            }
                        } else if (jenisPenyakit === 'HIV') {
                            switch (jenisParameter) {
                                case 'kasus_hiv':
                                    feature.set('kecamatan', item.kecamatan)
<<<<<<< HEAD
                                    feature.set('kasus', item.ha_kasus)
=======
                                    /*feature.set('kasus', item.ha_kasus)*/
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                    feature.set('kelas', item.kelas_hiv)
                                    feature.set('tingkat_ka', item.kelas_hiv)
                                    break;
                                case 'tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
<<<<<<< HEAD
                                    feature.set('tuna susila', item.tn_susila)
=======
                                    /*feature.set('tuna susila', item.tn_susila)*/
>>>>>>> 7dece0e7cff45e63df7afa7096f2267d873674fa
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'penduduk_miskin':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'hotspot':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'lokasi_rawan_tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('lok_pros', item.lok_pros)
                                    feature.set('tingkat_ka', item.lok_pros)
                                    break;
                                case 'penduduk_lakilaki_usia_produktif':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'wilayah_rentan_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'faskes_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('faskes', item.faskes_pdp)
                                    break;
                            }
                        }

                        vectorSource.addFeature(feature);
                    })

                    const newVectorLayer = new ol.layer.Vector({
                        source: vectorSource,
                        style: function(feature) {
                            if (jenisParameter === 'faskes_hiv') {
                                return new ol.style.Style({
                                    image: new ol.style.Icon({
                                        src: 'assets/images/hospital-marker-icon.png',
                                        anchor: [0.5, 1],
                                        scale: 0.05,
                                    })
                                })
                            }

                            let fillColor = 'rgba(0, 0, 0, 0.6)';
                            const tingkatKa = feature.get('tingkat_ka').toLowerCase();

                            // get legends 
                            const options = mapData[jenisPenyakit].options
                            const selectedOptions = options.find((option) => option
                                .value === jenisParameter);

                            if (!selectedOptions) return;
                            const legends = selectedOptions.legends
                            fillColor = legends[tingkatKa] ?? 'rgba(0, 0, 0, 0.6)';

                            return new ol.style.Style({
                                fill: new ol.style.Fill({
                                    color: fillColor
                                }),
                                stroke: new ol.style.Stroke({
                                    color: '#333',
                                    width: 1
                                })
                            });
                        }
                    });

                    map.addLayer(newVectorLayer);

                    toastr.success('Data berhasil dimuat!');
                },
                error: function() {
                    toastr.error('Gagal memuat data.');
                }
            });
        });
    </script>

    <script>
        document.getElementById("screenshot-btn").addEventListener("click", function() {
            html2canvas(document.body).then(function(canvas) {
                var link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'screenshot.png';
                link.click()
            });
        });
    </script>

    <script>
        const mediaQuery = window.matchMedia("(max-width: 640px)");
        mediaQuery.addListener(function(mediaQuery) {
            if (mediaQuery.matches) {
                document.getElementById("sidebar-body").style.display = "none";
            } else {
                document.getElementById("sidebar-body").style.display = "block";
            }
        });

        document.getElementById("menu-btn").addEventListener("click", function() {
            if (document.getElementById("sidebar-body").style.display === "none") {
                document.getElementById("sidebar-body").style.display = "block";
            } else {
                document.getElementById("sidebar-body").style.display = "none";
            }
        });
    </script>

    @stack('script')

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

    <!-- CKEditor 5 -->
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
            }
        }
    </script>


    {{-- Script for handling `Jenis Parameter` dropdown options --}}
    <script>
        function handleJenisParameterDropdownOption(dropdownPenyakitId, dropdownParameterId) {
            const dropdownParameterOption = document.getElementById(dropdownParameterId);
            document.getElementById(dropdownPenyakitId).addEventListener('change', function() {
                // clear previous options
                const length = dropdownParameterOption.options.length;
                for (i = length - 1; i >= 1; i--) {
                    dropdownParameterOption.options[i] = null;
                }

                const selectedOption = this.selectedOptions[0].value;

                const selectedOptionData = mapData[this.value];
                if (!selectedOptionData) {
                    return;
                }

                for (const option of selectedOptionData.options) {
                    const optionElement = document.createElement('option');
                    optionElement.value = option.value;
                    optionElement.text = option.text;
                    dropdownParameterOption.appendChild(optionElement);
                }
            });
        }

        handleJenisParameterDropdownOption('jenisPenyakit', 'jenisParameter');
        handleJenisParameterDropdownOption('jenisPenyakit-data1', 'jenisParameter-data1');
        handleJenisParameterDropdownOption('jenisPenyakit-data2', 'jenisParameter-data2');
    </script>

    {{-- Script for handling `transparansi` --}}
    <script>
        // Update the label of the transparency range input for data 1
        $('#transparency-range-data1').on('input', function() {
            $('#transparency-data1-value').text(this.value + '%');
        });
        // Update the label of the transparency range input for data 2
        $('#transparency-range-data2').on('input', function() {
            $('#transparency-data2-value').text(this.value + '%');
        });

        $('#transparency-form').hide();
        $('#transparency-panel').hide();

        $('#btn-set-transparency').click(function() {
            // hide the `Set Data Transparansi` button
            $('#btn-set-transparency-nav').hide();
            // show the transparency-form
            $('#transparency-form').show();
        })

        $('#btn-save-edit-transparency').click(function() {
            var tahunData1 = $('#tahun-data1').val();
            var bulanData1 = $('#bulan-data1').val();
            var jenisPenyakitData1 = $('#jenisPenyakit-data1').val();
            var jenisParameterData1 = $('#jenisParameter-data1').val();
            var tahunData2 = $('#tahun-data2').val();
            var bulanData2 = $('#bulan-data2').val();
            var jenisPenyakitData2 = $('#jenisPenyakit-data2').val();
            var jenisParameterData2 = $('#jenisParameter-data2').val();

            // // check if all data is filled
            if (!tahunData1 || !bulanData1 || !jenisPenyakitData1 || !jenisParameterData1 || !tahunData2 || !
                bulanData2 || !jenisPenyakitData2 || !jenisParameterData2) {
                toastr.warning('Mohon lengkapi semua data.');
                return;
            }
            // hide the form
            $('#transparency-form').hide();
            // show the panel
            $('#transparency-panel').show();

            toastr.info('Sedang memuat data...');

            const mapData1 = mapData[jenisPenyakitData1].options.find(option => option.value ===
                jenisParameterData1);
            const mapData2 = mapData[jenisPenyakitData2].options.find(option => option.value ===
                jenisParameterData2);

            const labelData1 =
                `${jenisPenyakitData1}-${mapData1.text}, Bulan ${monthMapping[parseInt(bulanData1)]} Tahun ${tahunData1}`
            $('#transparency-data1-label').text(labelData1);

            const labelData2 =
                `${jenisPenyakitData2}-${mapData2.text}, Bulan ${monthMapping[parseInt(bulanData2)]} Tahun ${tahunData2}`
            $('#transparency-data2-label').text(labelData2);

            const mapLegendParams = [{
                    disease: jenisPenyakitData1,
                    parameter: jenisParameterData1
                },
                {
                    disease: jenisPenyakitData2,
                    parameter: jenisParameterData2
                }
            ]
            showMapLegends(mapLegendParams);

            const textData1 =
                `${jenisPenyakitData1} berdasarkan ${mapData1.text} pada Bulan ${monthMapping[parseInt(bulanData1)]} Tahun ${tahunData1}`
            const textData2 =
                `${jenisPenyakitData2} berdasarkan ${mapData2.text} pada Bulan ${monthMapping[parseInt(bulanData2)]} Tahun ${tahunData2}`
            setMapDescriptionTo(
                `Data perbandingan ${textData1} dengan ${textData2}.`
            );
            resetMap()

            // handle data 1
            $.ajax({
                url: '{{ route('peta.filter') }}',
                method: 'GET',
                data: {
                    tahun: tahunData1,
                    bulan: bulanData1,
                    jenis_penyakit: jenisPenyakitData1,
                    jenis_parameter: jenisParameterData1
                },
                success: function(response) {
                    if (!response || response.length === 0) {
                        toastr.warning('Data tidak ditemukan.');
                        return;
                    }

                    var vectorSource = new ol.source.Vector({
                        features: []
                    });

                    response.forEach(function(item) {
                        const feature = new ol.format.GeoJSON().readFeature({
                            'type': 'Feature',
                            'geometry': JSON.parse(item.geometry)
                        }, {
                            dataProjection: 'EPSG:4326',
                            featureProjection: 'EPSG:3857'
                        })

                        if (jenisPenyakitData1 === 'DBD') {
                            switch (jenisParameterData1) {
                                case 'kasus_dbd':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kasus', item.kasus);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kepadatan', item.kepadatan);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_suhu);
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kelembapan', item.kelembapan);
                                    feature.set('tingkat_ka', item.tingkat_ka_kelembapan);
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('curah hujan', item.curah_hujan);
                                    feature.set('tingkat_ka', item.tingkat_ka_curah_hujan);
                                    break;
                            }
                        } else if (jenisPenyakitData1 === 'ISPA') {
                            switch (jenisParameterData1) {
                                case 'kasus_ispa':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('jumlah ispa penderita', item
                                        .jumlah_ispa_penderita)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai kepadatan penduduk', item.kpdt_bps)
                                    feature.set('kelas', item.kelas_kpdt)
                                    feature.set('tingkat_ka', item.kelas_kpdt)
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai suhu', item.suhu)
                                    feature.set('kelas', item.kelas_suhu)
                                    feature.set('tingkat_ka', item.kelas_suhu)
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelembapan', item.kelembapan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('curah hujan', item.ch)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                            }
                        } else if (jenisPenyakitData1 === 'HIV') {
                            switch (jenisParameterData1) {
                                case 'kasus_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kasus', item.ha_kasus)
                                    feature.set('kelas', item.kelas_hiv)
                                    feature.set('tingkat_ka', item.kelas_hiv)
                                    break;
                                case 'tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('tuna susila', item.tn_susila)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'penduduk_miskin':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'hotspot':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'lokasi_rawan_tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('lok_pros', item.lok_pros)
                                    feature.set('tingkat_ka', item.lok_pros)
                                    break;
                                case 'penduduk_lakilaki_usia_produktif':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'wilayah_rentan_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'faskes_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('faskes', item.faskes_pdp)
                                    break;
                            }
                        }

                        vectorSource.addFeature(feature);
                    })

                    var newVectorLayer = new ol.layer.Vector({
                        source: vectorSource,
                        style: function(feature) {
                            if (jenisParameterData1 === 'faskes_hiv') {
                                return new ol.style.Style({
                                    image: new ol.style.Icon({
                                        src: 'assets/images/hospital-marker-icon.png',
                                        anchor: [0.5, 1],
                                        scale: 0.05,
                                    })
                                })
                            }

                            let fillColor = 'rgba(0, 0, 0, 0.6)';
                            const tingkatKa = feature.get('tingkat_ka').toLowerCase();

                            // get legends 
                            const options = mapData[jenisPenyakitData1].options
                            const selectedOptions = options.find((option) => option
                                .value === jenisParameterData1);

                            if (!selectedOptions) return;
                            const legends = selectedOptions.legends
                            fillColor = legends[tingkatKa] ?? 'rgba(0, 0, 0, 0.6)';

                            return new ol.style.Style({
                                fill: new ol.style.Fill({
                                    color: fillColor
                                }),
                                stroke: new ol.style.Stroke({
                                    color: '#333',
                                    width: 1
                                })
                            });
                        }
                    });

                    map.addLayer(newVectorLayer);
                },
                error: function() {
                    toastr.error('Gagal memuat data.');
                }
            });

            // handle data 2
            $.ajax({
                url: '{{ route('peta.filter') }}',
                method: 'GET',
                data: {
                    tahun: tahunData2,
                    bulan: bulanData2,
                    jenis_penyakit: jenisPenyakitData2,
                    jenis_parameter: jenisParameterData2
                },
                success: function(response) {
                    if (!response || response.length === 0) {
                        toastr.warning('Data tidak ditemukan.');
                        return;
                    }

                    var vectorSource = new ol.source.Vector({
                        features: []
                    });

                    response.forEach(function(item) {
                        const feature = new ol.format.GeoJSON().readFeature({
                            'type': 'Feature',
                            'geometry': JSON.parse(item.geometry)
                        }, {
                            dataProjection: 'EPSG:4326',
                            featureProjection: 'EPSG:3857'
                        })

                        if (jenisPenyakitData2 === 'DBD') {
                            switch (jenisParameterData2) {
                                case 'kasus_dbd':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kasus', item.kasus);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kepadatan', item.kepadatan);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_suhu);
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kelembapan', item.kelembapan);
                                    feature.set('tingkat_ka', item.tingkat_ka_kelembapan);
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('curah hujan', item.curah_hujan);
                                    feature.set('tingkat_ka', item.tingkat_ka_curah_hujan);
                                    break;
                            }
                        } else if (jenisPenyakitData2 === 'ISPA') {
                            switch (jenisParameterData2) {
                                case 'kasus_ispa':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('jumlah ispa penderita', item
                                        .jumlah_ispa_penderita)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai kepadatan penduduk', item.kpdt_bps)
                                    feature.set('kelas', item.kelas_kpdt)
                                    feature.set('tingkat_ka', item.kelas_kpdt)
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai suhu', item.suhu)
                                    feature.set('kelas', item.kelas_suhu)
                                    feature.set('tingkat_ka', item.kelas_suhu)
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelembapan', item.kelembapan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('curah hujan', item.ch)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                            }
                        } else if (jenisPenyakitData2 === 'HIV') {
                            switch (jenisParameterData2) {
                                case 'kasus_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kasus', item.ha_kasus)
                                    feature.set('kelas', item.kelas_hiv)
                                    feature.set('tingkat_ka', item.kelas_hiv)
                                    break;
                                case 'tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('tuna susila', item.tn_susila)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'penduduk_miskin':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'hotspot':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'lokasi_rawan_tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('lok_pros', item.lok_pros)
                                    feature.set('tingkat_ka', item.lok_pros)
                                    break;
                                case 'penduduk_lakilaki_usia_produktif':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'wilayah_rentan_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'faskes_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('faskes', item.faskes_pdp)
                                    break;
                            }
                        }

                        vectorSource.addFeature(feature);
                    })

                    var newVectorLayer = new ol.layer.Vector({
                        source: vectorSource,
                        style: function(feature) {
                            if (jenisParameterData2 === 'faskes_hiv') {
                                return new ol.style.Style({
                                    image: new ol.style.Icon({
                                        src: 'assets/images/hospital-marker-icon.png',
                                        anchor: [0.5, 1],
                                        scale: 0.05,
                                    })
                                })
                            }

                            let fillColor = 'rgba(0, 0, 0, 0.6)';
                            const tingkatKa = feature.get('tingkat_ka').toLowerCase();

                            // get legends 
                            const options = mapData[jenisPenyakitData2].options
                            const selectedOptions = options.find((option) => option
                                .value === jenisParameterData2);

                            if (!selectedOptions) return;
                            const legends = selectedOptions.legends
                            fillColor = legends[tingkatKa] ?? 'rgba(0, 0, 0, 0.6)';

                            return new ol.style.Style({
                                fill: new ol.style.Fill({
                                    color: fillColor
                                }),
                                stroke: new ol.style.Stroke({
                                    color: '#333',
                                    width: 1
                                })
                            });
                        }
                    });

                    map.addLayer(newVectorLayer);
                },
                error: function() {
                    toastr.error('Gagal memuat data.');
                }
            });
            toastr.success('Data berhasil dimuat!');
        });


        $('#btn-edit-transparency-value').click(function() {
            var tahunData1 = $('#tahun-data1').val();
            var bulanData1 = $('#bulan-data1').val();
            var jenisPenyakitData1 = $('#jenisPenyakit-data1').val();
            var jenisParameterData1 = $('#jenisParameter-data1').val();
            var tahunData2 = $('#tahun-data2').val();
            var bulanData2 = $('#bulan-data2').val();
            var jenisPenyakitData2 = $('#jenisPenyakit-data2').val();
            var jenisParameterData2 = $('#jenisParameter-data2').val();
            var transparencyRangeData1 = $('#transparency-range-data1').val();
            var transparencyRangeData2 = $('#transparency-range-data2').val();

            resetMap()

            toastr.info('Sedang memuat data...');

            // handle data 1
            $.ajax({
                url: '{{ route('peta.filter') }}',
                method: 'GET',
                data: {
                    tahun: tahunData1,
                    bulan: bulanData1,
                    jenis_penyakit: jenisPenyakitData1,
                    jenis_parameter: jenisParameterData1
                },
                success: function(response) {
                    if (!response || response.length === 0) {
                        toastr.warning('Data tidak ditemukan.');
                        return;
                    }

                    var vectorSource = new ol.source.Vector({
                        features: []
                    });

                    response.forEach(function(item) {
                        const feature = new ol.format.GeoJSON().readFeature({
                            'type': 'Feature',
                            'geometry': JSON.parse(item.geometry)
                        }, {
                            dataProjection: 'EPSG:4326',
                            featureProjection: 'EPSG:3857'
                        })

                        if (jenisPenyakitData1 === 'DBD') {
                            switch (jenisParameterData1) {
                                case 'kasus_dbd':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kasus', item.kasus);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kepadatan', item.kepadatan);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_suhu);
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_kelembapan);
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_curah_hujan);
                                    break;
                            }
                        } else if (jenisPenyakitData1 === 'ISPA') {
                            switch (jenisParameterData1) {
                                case 'kasus_ispa':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('jumlah ispa penderita', item
                                        .jumlah_ispa_penderita)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai kepadatan penduduk', item.kpdt_bps)
                                    feature.set('kelas', item.kelas_kpdt)
                                    feature.set('tingkat_ka', item.kelas_kpdt)
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai suhu', item.suhu)
                                    feature.set('kelas', item.kelas_suhu)
                                    feature.set('tingkat_ka', item.kelas_suhu)
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelembapan', item.kelembapan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('curah hujan', item.ch)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                            }
                        } else if (jenisPenyakitData1 === 'HIV') {
                            switch (jenisParameterData1) {
                                case 'kasus_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kasus', item.ha_kasus)
                                    feature.set('kelas', item.kelas_hiv)
                                    feature.set('tingkat_ka', item.kelas_hiv)
                                    break;
                                case 'tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('tuna susila', item.tn_susila)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'penduduk_miskin':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'hotspot':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'lokasi_rawan_tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('lok_pros', item.lok_pros)
                                    feature.set('tingkat_ka', item.lok_pros)
                                    break;
                                case 'penduduk_lakilaki_usia_produktif':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'wilayah_rentan_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'faskes_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('faskes', item.faskes_pdp)
                                    break;
                            }
                        }

                        vectorSource.addFeature(feature);
                    })

                    var newVectorLayer = new ol.layer.Vector({
                        source: vectorSource,
                        style: function(feature) {
                            if (jenisParameterData1 === 'faskes_hiv') {
                                return new ol.style.Style({
                                    image: new ol.style.Icon({
                                        src: 'assets/images/hospital-marker-icon.png',
                                        anchor: [0.5, 1],
                                        scale: 0.05,
                                        opacity: ((100 -
                                                transparencyRangeData1
                                            ) /
                                            100).toFixed(1),
                                    })
                                })
                            }

                            let fillColor = 'rgba(0, 0, 0, 0.6)';
                            const tingkatKa = feature.get('tingkat_ka').toLowerCase();

                            // get legends 
                            const options = mapData[jenisPenyakitData1].options
                            const selectedOptions = options.find((option) => option
                                .value === jenisParameterData1);

                            if (!selectedOptions) return;
                            alpha = ((100 - transparencyRangeData1) /
                                    100)
                                .toFixed(
                                    1)

                            const legends = selectedOptions.legends

                            fillColor =
                                `rgba(${legends[tingkatKa].substring(4, legends[tingkatKa].length-1)}, ${alpha})` ??
                                'rgba(0, 0, 0, 0.6)';

                            return new ol.style.Style({
                                fill: new ol.style.Fill({
                                    color: fillColor
                                }),
                                stroke: new ol.style.Stroke({
                                    color: `rgba(0, 0, 0, ${alpha})`,
                                    width: 1
                                })
                            });
                        }
                    });

                    map.addLayer(newVectorLayer);
                },
                error: function() {
                    toastr.error('Gagal memuat data.');
                }
            });

            // handle data 2
            $.ajax({
                url: '{{ route('peta.filter') }}',
                method: 'GET',
                data: {
                    tahun: tahunData2,
                    bulan: bulanData2,
                    jenis_penyakit: jenisPenyakitData2,
                    jenis_parameter: jenisParameterData2
                },
                success: function(response) {
                    if (!response || response.length === 0) {
                        toastr.warning('Data tidak ditemukan.');
                        return;
                    }

                    var vectorSource = new ol.source.Vector({
                        features: []
                    });

                    response.forEach(function(item) {
                        const feature = new ol.format.GeoJSON().readFeature({
                            'type': 'Feature',
                            'geometry': JSON.parse(item.geometry)
                        }, {
                            dataProjection: 'EPSG:4326',
                            featureProjection: 'EPSG:3857'
                        })

                        if (jenisPenyakitData2 === 'DBD') {
                            switch (jenisParameterData2) {
                                case 'kasus_dbd':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kasus', item.kasus);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('kepadatan', item.kepadatan);
                                    feature.set('tingkat_ka', item.tingkat_ka);
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_suhu);
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_kelembapan);
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan);
                                    feature.set('kelurahan', item.kelurahan);
                                    feature.set('suhu', item.suhu);
                                    feature.set('tingkat_ka', item.tingkat_ka_curah_hujan);
                                    break;
                            }
                        } else if (jenisPenyakitData2 === 'ISPA') {
                            switch (jenisParameterData2) {
                                case 'kasus_ispa':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('jumlah ispa penderita', item
                                        .jumlah_ispa_penderita)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'kepadatan_penduduk':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai kepadatan penduduk', item.kpdt_bps)
                                    feature.set('kelas', item.kelas_kpdt)
                                    feature.set('tingkat_ka', item.kelas_kpdt)
                                    break;
                                case 'suhu':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('nilai suhu', item.suhu)
                                    feature.set('kelas', item.kelas_suhu)
                                    feature.set('tingkat_ka', item.kelas_suhu)
                                    break;
                                case 'kelembapan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelembapan', item.kelembapan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'curah_hujan':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('curah hujan', item.ch)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                            }
                        } else if (jenisPenyakitData2 === 'HIV') {
                            switch (jenisParameterData2) {
                                case 'kasus_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kasus', item.ha_kasus)
                                    feature.set('kelas', item.kelas_hiv)
                                    feature.set('tingkat_ka', item.kelas_hiv)
                                    break;
                                case 'tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('tuna susila', item.tn_susila)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'penduduk_miskin':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'hotspot':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'lokasi_rawan_tuna_susila':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('lok_pros', item.lok_pros)
                                    feature.set('tingkat_ka', item.lok_pros)
                                    break;
                                case 'penduduk_lakilaki_usia_produktif':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'wilayah_rentan_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('kelas', item.kelas)
                                    feature.set('tingkat_ka', item.kelas)
                                    break;
                                case 'faskes_hiv':
                                    feature.set('kecamatan', item.kecamatan)
                                    feature.set('faskes', item.faskes_pdp)
                                    break;
                            }
                        }

                        vectorSource.addFeature(feature);
                    })

                    var newVectorLayer = new ol.layer.Vector({
                        source: vectorSource,
                        style: function(feature) {
                            if (jenisParameterData2 === 'faskes_hiv') {
                                return new ol.style.Style({
                                    image: new ol.style.Icon({
                                        src: 'assets/images/hospital-marker-icon.png',
                                        anchor: [0.5, 1],
                                        scale: 0.05,
                                        opacity: ((100 -
                                                transparencyRangeData2
                                            ) /
                                            100).toFixed(1),
                                    })
                                })
                            }

                            let fillColor = 'rgba(0, 0, 0, 0.6)';
                            const tingkatKa = feature.get('tingkat_ka').toLowerCase();

                            // get legends 
                            const options = mapData[jenisPenyakitData2].options
                            const selectedOptions = options.find((option) => option
                                .value === jenisParameterData2);

                            if (!selectedOptions) return;
                            alpha = ((100 - transparencyRangeData2) /
                                    100)
                                .toFixed(
                                    1)

                            const legends = selectedOptions.legends

                            fillColor =
                                `rgba(${legends[tingkatKa].substring(4, legends[tingkatKa].length-1)}, ${alpha})` ??
                                'rgba(0, 0, 0, 0.6)';

                            return new ol.style.Style({
                                fill: new ol.style.Fill({
                                    color: fillColor
                                }),
                                stroke: new ol.style.Stroke({
                                    color: `rgba(0, 0, 0, ${alpha})`,
                                    width: 1
                                })
                            });
                        }
                    });

                    map.addLayer(newVectorLayer);
                },
                error: function() {
                    toastr.error('Gagal memuat data.');
                }
            });
            toastr.success('Data berhasil dimuat!');
        })

        $('#btn-edit-transparansi').click(function() {
            // show the form
            $('#transparency-form').show();
            // hide the panel
            $('#transparency-panel').hide();
        })
    </script>
</body>


</html>
