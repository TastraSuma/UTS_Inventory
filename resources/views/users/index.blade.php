@extends('welcome')

@section('title', 'User Management')

@section('content')
    <h1>User Data</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
