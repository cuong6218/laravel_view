{{--@extends('layouts.app')--}}
@include('greeting')
@section('title', 'Page Title')
@section('sidebar')
    @parent
    <p>This is append to the master sidebar.</p>
@endsection
@section('content')
    <p>This is my body content.</p>
@endsection
