@extends('layouts.admin')
@section('title','Data Admin | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-user"></i> Data Admin</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
                <div class="card mt-3">
                    <div class="card-body">
                    
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                    </button>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Roles</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($admin as $data)                                 
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td>{{ $data->nama_admin }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->tempat_lahir }}, {{ date("d F Y", strtotime($data->tanggal_lahir)) }}</td>
                                        <td>
                                            @if($data->roles == "Superadmin")
                                                <b class="text-primary">{{ $data->roles }}</b>
                                            @else
                                                <b class="text-warning">{{ $data->roles }}</b>
                                            @endif
                                        </td>
                                        <td>
                                            @if($data->status == "Aktif")
                                                <div class="badge badge-success">{{ $data->status }}</div>
                                            @else
                                                <div class="badge badge-danger">{{ $data->status }}</div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.edit', $data->id_admin) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" admin-id="{{ $data->id_admin }}" admin-nama="{{ $data->nama_admin }}" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    
                                    @php
                                        $no++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal tambah data -->
<div class="modal fade" tabindex="-1" role="dialog" id="tambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"><i class="fa fa-plus-circle"></i> Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.add') }}" method="POST" enctype="multipart/form-data">
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
                                <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" name="nama_admin" autocomplete="off">
                                @error('nama_admin')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" autocomplete="off">
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
                                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" autocomplete="off">
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" autocomplete="off">
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
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
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
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <textarea name="alamat_lengkap" class="form-control @error('alamat_lengkap') is-invalid @enderror" rows="4"></textarea>
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
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off">
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
                                    <option value="Admin">Admin</option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="Superadmin">Superadmin</option>
                                </select>
                                @error('roles')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off">
                                @error('password')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror" name="konfirmasi_password" autocomplete="off">
                                @error('konfirmasi_password')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('sweetAlert')
    <script type="text/javascript">
        $('.delete').click(function()
        {
            var id      = $(this).attr('admin-id');
            var nama    = $(this).attr('admin-nama');
            swal({
              title     : "Warning",
              text      : "Menghapus data admin "+nama+"!",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/admin_hapus/"+id+"";
              }
            });
        });
    </script>
@stop