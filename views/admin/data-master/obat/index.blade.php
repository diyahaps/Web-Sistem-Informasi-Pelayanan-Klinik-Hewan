@extends('layouts.admin')
@section('title','Data Obat | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-medkit"></i> Data Obat</h1>
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
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Qty tersedia</th>
                                        <th>Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($obat as $data)                                 
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td>
                                            <a href="{{ asset($data->foto_obat) }}" target="_blank">
                                                <img src="{{ asset($data->foto_obat) }}" alt="" width="50px">
                                            </a>
                                        </td>
                                        <td>{{ $data->kode_obat }}</td>
                                        <td>{{ $data->nama_obat }}</td>
                                        <td>{{ $data->jenis_obat }}</td>
                                        <td>
                                            Rp. {{ number_format($data->harga) }} / {{ $data->satuan }}
                                        </td>
                                        <td>
                                            {{ $data->qty }} {{ $data->satuan }}
                                        </td>
                                        <td>
                                            {{ date("d/m/Y", strtotime($data->tgl_expired)) }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('obat.edit', $data->id_obat) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" obat-id="{{ $data->id_obat }}" obat-nama="{{ $data->nama_obat }}" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></a>
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
            <form action="{{ route('obat.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                    <div class="section">
                        <div class="section-body">
                            <h2 class="section-title">Data Obat</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Obat</label>
                                <input type="text" class="form-control @error('kode_obat') is-invalid @enderror" name="kode_obat" autocomplete="off">
                                @error('kode_obat')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Nama Obat</label>
                                <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" autocomplete="off">
                                @error('nama_obat')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Jumlah Tersedia</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" autocomplete="off">
                                        @error('qty')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <select name="satuan" class="form-control @error('satuan') is-invalid @enderror">
                                            <option value=" ">Pilihan</option>
                                            <option value="Butir">Butir</option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Pcs">Pcs</option>
                                            <option value="Botol">Botol</option>
                                        </select>
                                        @error('satuan')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label>Tanggal Expired</label>
                                <input type="date" class="form-control @error('tgl_expired') is-invalid @enderror" name="tgl_expired" autocomplete="off">
                                @error('tgl_expired')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Foto Obat</label>
                                <input type="file" class="form-control @error('foto_obat') is-invalid @enderror" name="foto_obat" autocomplete="off">
                                @error('foto_obat')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Jenis Obat</label>
                                <select name="jenis_obat" class="form-control @error('jenis_obat') is-invalid @enderror">
                                    <option value=" ">Pilihan</option>
                                    <option value="Cair">Cair</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Kapsul">Kapsul</option>
                                    <option value="Oles">Oles</option>
                                    <option value="Tetes">Tetes</option>
                                    <option value="Suntik">Suntik</option>
                                </select>
                                @error('jenis_obat')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" autocomplete="off">
                                @error('harga')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Deskripsi/Keterangan Obat</label>
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="4"></textarea>
                                @error('keterangan')
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
            var id      = $(this).attr('obat-id');
            var nama    = $(this).attr('obat-nama');
            swal({
              title     : "Warning",
              text      : "Menghapus data obat "+nama+"!",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/obat_hapus/"+id+"";
              }
            });
        });
    </script>
@stop