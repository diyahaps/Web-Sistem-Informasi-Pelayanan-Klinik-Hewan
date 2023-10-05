@extends('layouts.pelanggan')
@section('title','Login')
@section('content')
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Login Pelanggan</h5>
                        <p class="mb-4">Silahkan login dahulu agar dapat melakukan reservasi online. Apabila belum mempunyai akun, silahkan <a href="{{ route('register') }}">Klik disini</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 wow slideInUp" data-wow-delay="0.3s">
                @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror border-0 bg-light px-4" placeholder="Email" style="height: 55px;" autocomplete="off" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror border-0 bg-light px-4" placeholder="Password" style="height: 55px;" autocomplete="off">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning w-100 py-2">Login</button>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-link" href="{{ route('auth.activate.resend') }}">
                                        Resend Aktivasi Email
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
