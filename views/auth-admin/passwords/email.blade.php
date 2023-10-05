@extends('layouts.auth-admin')
@section('title','Admin Reset Password')
@section('content')

<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
    <div class="login-brand">
        <img src="{{ asset('img') }}/logo_engil.png" alt="logo" width="200">
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h4>Admin Reset Password</h4>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.password.email') }}">
                @csrf
                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Email</label>
                    </div>
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

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-lg btn-round btn-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5 text-muted text-center">
        Kembali ke halaman <a href="{{  route('admin.login') }}">Admin Login</a>
    </div>
</div>
@endsection
