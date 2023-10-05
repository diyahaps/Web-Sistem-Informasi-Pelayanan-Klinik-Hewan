@extends('layouts.admin')
@section('title','Data Kandang | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-recycle"></i> Data Kandang</h1>
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
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>Foto</th>
                                        <th>Kode</th>
                                        <th>Ukuran (P, L, T)</th>
                                        <th>Kandang Hewan</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Jumlah Tersedia</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($kandang as $data)                                 
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td>
                                            <a href="{{ asset($data->foto_kandang) }}" target="_blank">
                                                <img src="{{ asset($data->foto_kandang) }}" alt="" width="50px">
                                            </a>
                                        </td>
                                        <td>
                                            <b>{{ $data->kode_kandang }}</b>
                                        </td>
                                        <td>{{ $data->ukuran_kandang }} ( {{ $data->panjang }}, {{ $data->lebar }}, {{ $data->tinggi }} )</td>
                                        <td>{{ $data->kandang_hewan }}</td>
                                        <td>
                                            Rp. {{ number_format($data->biaya_per_hari) }} /hari
                                        </td>
                                        <td>
                                            @if($data->status == "Tersedia")
                                                <div class="badge badge-success">{{ $data->status }}</div>
                                            @else
                                                <div class="badge badge-danger">{{ $data->status }}</div>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $data->jumlah_tersedia }} Box</td>
                                        <td class="text-center">
                                            <a href="{{ route('kandang.edit', $data->id_kandang) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="#" kandang-id="{{ $data->id_kandang }}" kandang-kode="{{ $data->kode_kandang }}" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></a>
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
            <form action="{{ route('kandang.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                    <div class="section">
                        <div class="section-body">
                            <h2 class="section-title">Data Kandang</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Kandang</label>
                                <input type="text" class="form-control @error('kode_kandang') is-invalid @enderror" name="kode_kandang" autocomplete="off">
                                @error('kode_kandang')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Ukuran Kndang</label>
                                <select name="ukuran_kandang" class="form-control @error('ukuran_kandang') is-invalid @enderror">
                                    <option value=" ">Pilihan</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                    <option value="Extra Large">Extra Large</option>
                                </select>
                                @error('ukuran_kandang')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Panjang (cm)</label>
                                <input type="number" class="form-control @error('panjang') is-invalid @enderror" name="panjang" autocomplete="off">
                                @error('panjang')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Lebar (cm)</label>
                                <input type="number" class="form-control @error('lebar') is-invalid @enderror" name="lebar" autocomplete="off">
                                @error('lebar')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Tinggi (cm)</label>
                                <input type="number" class="form-control @error('tinggi') is-invalid @enderror" name="tinggi" autocomplete="off">
                                @error('tinggi')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Foto Kandang</label>
                                <input type="file" class="form-control @error('foto_kandang') is-invalid @enderror" name="foto_kandang" autocomplete="off">
                                @error('foto_kandang')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Biaya per hari</label>
                                <input type="number" class="form-control @error('biaya_per_hari') is-invalid @enderror" name="biaya_per_hari" autocomplete="off">
                                @error('biaya_per_hari')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Kandang Hewan</label>
                                <select name="kandang_hewan" class="form-control @error('kandang_hewan') is-invalid @enderror">
                                    <option value=" ">Pilihan</option>
                                    <option value="Anjing">Anjing</option>
                                    <option value="Kucing">Kucing</option>
                                </select>
                                @error('kandang_hewan')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value=" ">Pilihan</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>  
                            <div class="form-group">
                                <label>Jumlah Tersedia</label>
                                <input type="number" class="form-control @error('jumlah_tersedia') is-invalid @enderror" name="jumlah_tersedia" autocomplete="off">
                                @error('jumlah_tersedia')
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
            var id      = $(this).attr('kandang-id');
            var nama    = $(this).attr('kandang-kode');
            swal({
              title     : "Warning",
              text      : "Menghapus data kandang "+nama+"!",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/admin/kandang_hapus/"+id+"";
              }
            });
        });
    </script>
@stop