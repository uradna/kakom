<!DOCTYPE html>
<html class="menuitem-active" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} - Arsip Kominfo </title>
    {{-- icon --}}
    <link rel="shortcut icon" href="{{ asset('img/kom.png') }}">

    <!-- css -->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <script src="{{ asset('js/vendor.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}" />

    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false,"leftSidebarCondensed":@mobile true @elsemobile false @endmobile,"leftSidebarScrollable":false,"darkMode":false,"showRightSidebarOnStart": false}'>


    <div class="wrapper">
        <div class="leftside-menu menuitem-active">

            <!-- LOGO -->
            <a href="/" class="logo text-center">
                <span class="logo-lg">
                    <img src="{{ asset('img/logo.png') }}" alt="" height="20">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('img/logo_sm.png') }}" alt="" height="20">
                </span>
            </a>
            @include('layouts.navigation')
        </div>

        <div class="content-page">
            <div class="content">

                @include('layouts.topbar')

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    {{ $breadcrumb }}
                                </div>
                                <h4 class="page-title">{{ $header }}</h4>
                            </div>
                        </div>
                    </div>
                    {{ $slot }}
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2022 @ andaru.kominfo.ponorogo
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                Arsip Surat Dinas Komunikasi Kabupaten Ponorogo
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <!-- js -->
    {{-- <script src="{{ asset('js/vendor.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
