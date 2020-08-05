<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('layout.master')
@section('content')
    <div class="container">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col" colspan="2"></th>
    </tr>
    </thead>
    <tbody>
        @forelse($users as $key => $user)
            <tr>
                <td> {{$key +1}}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                @if($user['role_id'] === \App\Http\Controllers\RoleInterface::ADMIN)
                    {{'A4dmin'}}
                    @elseif($user['role_id'] === \App\Http\Controllers\RoleInterface::USER)
                    {{'User'}}
                    @endif
                </td>
                <td><a href="{{Route('users.showDetail', $user['id'])}}" class="btn btn-primary">Edit</a> </td>
                <td><a href="" class="btn btn-primary">Delete</a> </td>
            </tr>
        @empty
            <tr><td>No data</td></tr>
        @endforelse
    </tbody>
</table>
    </div>
@endsection
</body>
</html>
