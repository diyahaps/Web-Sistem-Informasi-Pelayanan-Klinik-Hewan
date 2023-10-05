@extends('layouts.admin')
@section('title','Data Grooming | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-paw"></i> Data Grooming</h1>
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
                                        <th>Foto</th>
                                        <th>Jenis Grooming</th>
                                        <th>Jenis Hewan</th>
                                        <th>Biaya Grooming</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($grooming as $data)                                 
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td><img src="{{ asset($data->foto_grooming) }}" width="50px"></td>
                                        <td>{{ $data->jenis_grooming }}</td>
                                        <td>{{ $data->jenis_hewan }}</td>
                                        <td>
                                            Rp. {{ number_format($data->biaya_grooming) }} 
                                        </td>
                                        <td>{{ $data->keterangan_grooming }}</td>
                                        <td>
                                            {{ $data->status_grooming }} 
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('grooming.edit', $data->id_grooming) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" grooming-id="{{ $data->id_grooming }}" grooming-nama="{{ $data->jenis_grooming }}" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" tabindex="-1" role="dialog" id="tambah">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"><i class="fa fa-plus-circle"></i> Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <form action="{{ route('grooming.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                    <div class="section">
                        <div class="section-body">
                            <h2 class="section-title">Data Grooming</h2>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto Grooming</label>
                                <input type="file" class="form-control @error('foto_grooming') is-invalid @enderror" name="foto_grooming" autocomplete="off">
                                @error('foto_grooming')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Jenis Grooming</label>
                                <input type="text" class="form-control @error('jenis_grooming') is-invalid @enderror" name="jenis_grooming" autocomplete="off">
                                @error('jenis_grooming')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Jenis Hewan</label>
                                <input type="text" class="form-control @error('jenis_hewan') is-invalid @enderror" name="jenis_hewan" autocomplete="off">
                                @error('jenis_hewan')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>       
                            
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status_grooming" class="form-control @error('status_grooming') is-invalid @enderror">
                                    <option value=" ">Pilihan</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non Aktif">Non Aktif</option>
                                </select>
                                @error('status_grooming')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Biaya Grooming</label>
                                <input type="number" class="form-control @error('biaya_grooming') is-invalid @enderror" name="biaya_grooming" autocomplete="off">
                                @error('biaya_grooming')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Deskripsi/Keterangan Grooming</label>
                                <textarea name="keterangan_grooming" class="form-control @error('keterangan_grooming') is-invalid @enderror" rows="4"></textarea>
                                @error('keterangan_grooming')
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
            var id      = $(this).attr('grooming-id');
            var nama    = $(this).attr('grooming-nama');
            swal({
              title     : "Warning",
              text      : "Menghapus Data Grooming "+nama+"!",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/grooming_hapus/"+id+"";
              }
            });
        });
    </script>
@stop