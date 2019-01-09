<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- For Google -->
    <link rel="author" href="https://plus.google.com/+Scoopthemes">
    <link rel="publisher" href="https://plus.google.com/+Scoopthemes">

    <!-- Canonical -->
    <link rel="canonical" href="">

    <title>IMPex</title>

    <!-- Main Styles CSS -->
    <link href="/assets/css/main.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
@include('layouts.nav')

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            <li class="nav-brand">
                <a href="/">Dashboard</a>
            </li>
            <li><i class="fa fa-table"></i><a href="/kontak">Import Table</a></li>
            <li><i class="fa fa-table"></i><a href="/kontak">Eksport Table</a><li>
            <li><i class="fa fa-table"></i><a href="/home">Tambah Barang</a></li>
        </ul>
    </aside>
    @yield('content')
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script src="/assets/js/custom.js"></script>
</body>
</html>