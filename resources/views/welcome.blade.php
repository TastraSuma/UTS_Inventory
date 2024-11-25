<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SADS')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="sidebar">
        <h2>Sidebar</h2>
        <!-- Update the href links to match your application structure -->
        <a href="{{ url('/user') }}">User</a>
        <a href="{{ url('/kategori') }}">Kategori Barang</a>
        <a href="{{ url('/barang') }}">Barang</a>
        <a href="{{ url('/laporan') }}">Laporan</a>
    </div>

    <div class="content">
        @yield('content', 'Welcome to the Inventory Management System!')
    </div>
</body>

</html>
