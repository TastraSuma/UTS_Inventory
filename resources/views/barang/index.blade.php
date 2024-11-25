@extends('welcome')

@section('title', 'Data Barang')

@section('content')
    <h1>Barang Data</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
                <tr>
                    <td>{{ $item['kode'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>{{ $item['harga'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
