@extends('layouts.admin')
@section('title','Data Admin | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-edit"></i> Edit Data Admin</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Data Admin</a></div>
            <div class="breadcrumb-item">Edit Data Admin</div>
          </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('admin.update', $admin->id_admin) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                
                                <div class="section">
                                    <div class="section-body">
                                        <h2 class="section-title">Data Pribadi</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" name="nama_admin" value="{{ $admin->nama_admin }}" autocomplete="off">
                                            @error('nama_admin')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $admin->no_hp }}" autocomplete="off">
                                            @error('no_hp')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Tempat, Tanggal Lahir</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $admin->tempat_lahir }}" autocomplete="off">
                                                    @error('tempat_lahir')
                                                        <span class="invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $admin->tanggal_lahir }}" autocomplete="off">
                                                    @error('tanggal_lahir')
                                                        <span class="invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                                <option value=" ">Pilihan</option>
                                                <option value="Pria" @if($admin->jenis_kelamin == 'Pria') selected @endif>Pria</option>
                                                <option value="Wanita" @if($admin->jenis_kelamin == 'Wanita') selected @endif>Wanita</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama" class="form-control @error('agama') is-invalid @enderror">
                                                <option value=" ">Pilihan</option>
                                                <option value="Islam" @if($admin->agama == 'Islam') selected @endif>Islam</option>
                                                <option value="Kristen" @if($admin->agama == 'Kristen') selected @endif>Kristen</option>
                                                <option value="Katolik" @if($admin->agama == 'Katolik') selected @endif>Katolik</option>
                                                <option value="Hindu" @if($admin->agama == 'Hindu') selected @endif>Hindu</option>
                                                <option value="Budha" @if($admin->agama == 'Budha') selected @endif>Budha</option>
                                                <option value="Konghucu" @if($admin->agama == 'Konghucu') selected @endif>Konghucu</option>
                                            </select>
                                            @error('agama')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option value=" ">Pilihan</option>
                                                <option value="Aktif" @if($admin->status == 'Aktif') selected @endif>Aktif</option>
                                                <option value="Non Aktif" @if($admin->status == 'Non Aktif') selected @endif>Non Aktif</option>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <textarea name="alamat_lengkap" class="form-control" value="{{ $admin->alamat_lengkap }}" rows="4">{{ $admin->alamat_lengkap }}</textarea>
                                            @error('alamat_lengkap')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>   
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section">
                                            <div class="section-body">
                                                <h2 class="section-title">Data Login</h2>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $admin->email }}" autocomplete="off">
                                            @error('email')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Roles</label>
                                            <select name="roles" class="form-control @error('roles') is-invalid @enderror">
                                                <option value=" ">Pilihan</option>
                                                <option value="Admin" @if($admin->roles == 'Admin') selected @endif>Admin</option>
                                                <option value="Karyawan" @if($admin->roles == 'Karyawan') selected @endif>Karyawan</option>
                                                <option value="Superadmin" @if($admin->roles == 'Superadmin') selected @endif>Superadmin</option>
                                            </select>
                                            @error('roles')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password Baru (Jika akan diupdate)" autocomplete="off">
                                            @error('password')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>   
                                    </div>
                                </div>                  
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection