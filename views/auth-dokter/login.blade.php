@extends('layouts.auth-admin')
@section('title','Dokter Login')
@section('content')
<div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
    <div class="login-brand">
        <img src="{{ asset('img') }}/logo_engil.png" alt="logo" width="200">
    </div>
    <div class="card card-primary">
        <div class="row m-0">
        <div class="col-12 col-md-12 col-lg-5 p-0">
            <div class="card-header text-center">
                <h4>Dokter Login</h4>
            </div>
            <div class="card-body">
                @if (session('danger'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{ session('danger') }}
                        </div>
                    </div>
                @endif
                <form method="POST" action="{{ route('dokter.login.post') }}">
                    @csrf
                    <div class="form-group floating-addon">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group floating-addon">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-lock fa-xs"></i>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-round btn-lg btn-primary">
                            <i class="fa fa-sign-in"></i> Login
                        </button>
                    </div>
                </form>
            </div>  
        </div>
        <div class="col-12 col-md-12 col-lg-7 p-0 text-center">
            <img src="{{ asset('img') }}/dkt_bg.png" alt="" width="55%">
        </div>
        </div>
    </div>
</div>
@endsection
