@extends('welcome')

@section('title', 'Laporan Penerimaan Barang')

@section('content')
    <h1>Laporan Penerimaan Barang</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $report)
                <tr>
                    <td>{{ $report['kode_barang'] }}</td>
                    <td>{{ $report['nama_barang'] }}</td>
                    <td>{{ $report['kategori'] }}</td>
                    <td>{{ $report['tanggal'] }}</td>
                    <td>{{ $report['jumlah'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
