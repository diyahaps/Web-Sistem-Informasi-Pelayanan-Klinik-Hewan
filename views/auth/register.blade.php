@extends('layouts.pelanggan')
@section('title','Daftar')
@section('content')
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Daftar Akun</h5>
                        <p class="mb-4">Silahkan untuk mengisi data pribadi dan data login untuk melanjutkan pendaftaran akun.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <b>Data Pribadi</b>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror border-0 bg-light" placeholder="Nama Lengkap" style="height: 55px;" autocomplete="off" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="number" name="no_hp" value="{{ old('no_hp') }}" class="form-control @error('no_hp') is-invalid @enderror border-0 bg-light" placeholder="Nomor Hp" style="height: 55px;" autocomplete="off">
                                    @error('no_hp')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <select name="jenis_kelamin" class="form-select @error('agama') is-invalid @enderror bg-light border-0" style="height: 55px;">
                                        <option value=""> Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <select name="agama" class="form-select @error('agama') is-invalid @enderror bg-light border-0" style="height: 55px;">
                                        <option value=""> Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    @error('agama')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="form-control @error('tempat_lahir') is-invalid @enderror border-0 bg-light" placeholder="Tempat Lahir" style="height: 55px;" autocomplete="off">
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control @error('tanggal_lahir') is-invalid @enderror border-0 bg-light" placeholder="Tanggal Lahir" style="height: 55px;" autocomplete="off">
                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="alamat_lengkap" class="form-control @error('alamat_lengkap') is-invalid @enderror border-0 bg-light" rows="4" placeholder="Alamat Lengkap"></textarea>
                                @error('alamat_lengkap')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <b>Data Login</b>
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror border-0 bg-light" placeholder="Email" style="height: 55px;" autocomplete="off" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror border-0 bg-light" placeholder="Password" style="height: 55px;" autocomplete="off">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="password" name="password_confirmation" class="form-control border-0 bg-light" placeholder="Konfirmasi Password" style="height: 55px;" autocomplete="off">
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary w-100 py-2">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
