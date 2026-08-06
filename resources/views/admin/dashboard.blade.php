@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <h2>Dashboard Admin PPID</h2>

    <hr>

    <h5>Selamat Datang</h5>

    <p>{{ Auth::user()->name }}</p>

</div>

@endsection