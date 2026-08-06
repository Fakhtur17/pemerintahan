@extends('layouts.auth')

@section('title','Login Admin')

@section('content')

<section class="login-page">

    <div class="login-card">

        <img src="{{ asset('assets/images/logo/logo.png') }}" width="90">

        <h2>PPID Kabupaten Brebes</h2>

        <p>Login Administrator</p>

        <form method="POST" action="{{ route('login.authenticate') }}">

            @csrf

            <input
                type="email"
                class="form-control mb-3"
                name="email"
                placeholder="Email">

            <input
                type="password"
                class="form-control mb-4"
                name="password"
                placeholder="Password">

            <button class="theme-btn w-100">
                Login
            </button>

        </form>

    </div>

</section>

<style>

body{

    background:linear-gradient(135deg,#1d4ed8,#2563eb,#60a5fa);
    height:100vh;
    overflow:hidden;

}

.login-page{

    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;

}

.login-card{

    width:430px;
    background:white;
    border-radius:20px;
    padding:45px;
    text-align:center;
    box-shadow:0 25px 60px rgba(0,0,0,.15);

}

.login-card img{

    margin-bottom:20px;

}

.login-card h2{

    font-size:28px;
    margin-bottom:5px;

}

.login-card p{

    color:#666;
    margin-bottom:30px;

}

.form-control{

    height:55px;
    border-radius:12px;

}

.theme-btn{

    width:100%;
    border-radius:12px;

}

</style>

@endsection