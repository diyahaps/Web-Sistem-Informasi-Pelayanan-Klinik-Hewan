@extends('layouts.admin')
@section('title','Data Vaksin | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-flask"></i> Data Vaksin</h1>
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
                                        <th>Jenis Hewan</th>
                                        <th>Qty tersedia</th>
                                        <th>Harga</th>
                                        <th>Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($vaksin as $data)                                 
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td><a href="{{ asset($data->foto_vaksin) }}" target="_target"><img src="{{ asset($data->foto_vaksin) }}" width="50px"></a></td>
                                        <td>{{ $data->kode_vaksin }}</td>
                                        <td>{{ $data->nama_vaksin }}</td>
                                        <td>{{ $data->jenis_hewan }}</td>
                                        <td>
                                            {{ $data->jumlah_vaksin }} 
                                        </td>
                                        <td>
                                            Rp. {{ number_format($data->harga_vaksin) }} 
                                        </td>
                                        <td>
                                            {{ date("d/m/Y", strtotime($data->tgl_expired)) }}
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('vaksin.edit', $data->id_vaksin) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" vaksin-id="{{ $data->id_vaksin }}" vaksin-nama="{{ $data->nama_vaksin }}" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></a>
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
            <form action="{{ route('vaksin.add') }}" method="POST" enctype="multipart/form-data">
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
                                <label>Kode Vaksin</label>
                                <input type="text" class="form-control @error('kode_vaksin') is-invalid @enderror" name="kode_vaksin" autocomplete="off">
                                @error('kode_vaksin')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Nama Vaksin</label>
                                <input type="text" class="form-control @error('nama_vaksin') is-invalid @enderror" name="nama_vaksin" autocomplete="off">
                                @error('nama_vaksin')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Jumlah Tersedia</label>
                                <input type="number" class="form-control @error('jumlah_vaksin') is-invalid @enderror" name="jumlah_vaksin" autocomplete="off">
                                @error('jumlah_vaksin')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
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
                                <label>Jenis Hewan</label>
                                <select name="jenis_hewan" class="form-control @error('jenis_hewan') is-invalid @enderror">
                                    <option value=" ">Pilihan</option>
                                    <option value="Kucing">Kucing</option>
                                    <option value="Anjing">Anjing</option>
                                </select>
                                @error('jenis_hewan')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control @error('harga_vaksin') is-invalid @enderror" name="harga_vaksin" autocomplete="off">
                                @error('harga_vaksin')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Foto Vaksin</label>
                                <input type="file" class="form-control @error('foto_vaksin') is-invalid @enderror" name="foto_vaksin" autocomplete="off">
                                @error('foto_vaksin')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Deskripsi/Keterangan Obat</label>
                                <textarea name="keterangan_vaksin" class="form-control @error('keterangan_vaksin') is-invalid @enderror" rows="4"></textarea>
                                @error('keterangan_vaksin')
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
            var id      = $(this).attr('vaksin-id');
            var nama    = $(this).attr('vaksin-nama');
            swal({
              title     : "Warning",
              text      : "Menghapus data vaksin "+nama+"!",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/vaksin_hapus/"+id+"";
              }
            });
        });
    </script>
@stop