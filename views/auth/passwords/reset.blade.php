@extends('layouts.pelanggan')
@section('title','Reset Password')
@section('content')
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Reset Password</h5>
                        <p class="mb-4">Silahkan masukan password baru dan konfirmasi password baru untuk melanjutkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="email" name="email" value="{{ $email ?? old('email') }}" class="form-control @error('email') is-invalid @enderror border-0 bg-light px-4" placeholder="Email" style="height: 55px;" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror border-0 bg-light px-4" placeholder="Password Baru" style="height: 55px;" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="password" name="password_confirmation" class="form-control border-0 bg-light px-4" placeholder="Konfirmasi Password Baru" style="height: 55px;" required autocomplete="new-password">
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary w-100 py-2">Reset Password</button>
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
