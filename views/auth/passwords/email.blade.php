@extends('layouts.pelanggan')
@section('title','Lupa Password')
@section('content')
<div class="container-fluid mt-5 py-5 mb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Lupa Password?</h5>
                        <p class="mb-4">Silahkan masukan email anda untuk melakukan reset password melalui pesan email yang kami kirimkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 wow slideInUp" data-wow-delay="0.3s">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary w-100 py-2">Kirim Email</button>
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
