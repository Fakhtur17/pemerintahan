@extends('layouts.auth')

@section('title','Login Admin')

@section('content')

<section class="login-page">

    <div class="login-card">

        <img src="{{ asset('assets/images/logo/logo.png') }}" width="90">

        <h2>Kecamatan Brebes</h2>

        <p> Halaman Login Administrator</p>

        <form method="POST" action="{{ route('login.authenticate') }}">

            @csrf

            <div class="input-group-custom">
                <i class="fa-solid fa-envelope"></i>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    placeholder="Email"
                    required>
            </div>

            <div class="input-group-custom mb-4">
                <i class="fa-solid fa-lock"></i>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Password"
                    required>
            </div>

            <button class="theme-btn w-100">
                Login
            </button>

        </form>

        <p class="footer-note">&copy; {{ date('Y') }} Pemerintah Kabupaten Brebes</p>

    </div>

</section>

<style>
    body {
        margin: 0;
        min-height: 100vh;
        background: linear-gradient(135deg, rgba(15, 37, 87, .82), rgba(37, 99, 235, .75)),
        url('{{ asset("assets/images/bg-brebes.jpg") }}') center center / cover no-repeat fixed;
        overflow-x: hidden;
    }

    .login-page {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    .login-card {
        width: 430px;
        max-width: 100%;
        background: rgba(255, 255, 255, .97);
        backdrop-filter: blur(6px);
        border-radius: 22px;
        padding: 45px 40px;
        text-align: center;
        box-shadow: 0 30px 70px rgba(0, 0, 0, .35);
        border: 1px solid rgba(255, 255, 255, .4);
    }

    .login-card img {
        margin-bottom: 18px;
    }

    .login-card h2 {
        font-size: 26px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 4px;
    }

    .login-card p {
        color: #64748b;
        margin-bottom: 30px;
        font-size: 14px;
    }

    .input-group-custom {
        position: relative;
        margin-bottom: 16px;
    }

    .input-group-custom i {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: #94a3b8;
        font-size: 15px;
    }

    .form-control {
        height: 54px;
        width: 100%;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        padding-left: 45px;
        font-size: 14px;
        transition: .2s;
    }

    .form-control:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, .15);
    }

    .theme-btn {
        width: 100%;
        height: 52px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, #1d4ed8, #2563eb);
        color: #fff;
        font-weight: 600;
        letter-spacing: .3px;
        cursor: pointer;
        transition: .2s;
    }

    .theme-btn:hover {
        background: linear-gradient(135deg, #1e40af, #1d4ed8);
        transform: translateY(-1px);
        box-shadow: 0 10px 20px rgba(29, 78, 216, .25);
    }

    .footer-note {
        margin-top: 25px !important;
        margin-bottom: 0 !important;
        font-size: 12px !important;
        color: #94a3b8 !important;
    }
</style>

@endsection