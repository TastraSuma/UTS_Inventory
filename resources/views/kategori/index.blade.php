@extends('welcome')

@section('title', 'Kategori Barang')

@section('content')
    <h1>Kategori Barang</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category['nama'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
