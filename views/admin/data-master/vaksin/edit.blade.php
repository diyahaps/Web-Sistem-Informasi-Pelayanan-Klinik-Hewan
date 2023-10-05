@extends('layouts.admin')
@section('title','Data Vaksin | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-edit"></i> Edit Data Vaksin</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('vaksin.index') }}">Data Vaksin</a></div>
            <div class="breadcrumb-item">Edit Data Vaksin</div>
          </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('vaksin.update', $vaksin->id_vaksin) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                
                                <div class="section">
                                    <div class="section-body">
                                        <h2 class="section-title">Data Vaksin</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kode Vaksin</label>
                                            <input type="text" class="form-control @error('kode_vaksin') is-invalid @enderror" name="kode_vaksin" value="{{ $vaksin->kode_vaksin }}" autocomplete="off">
                                            @error('kode_vaksin')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Nama Vaksin</label>
                                            <input type="text" class="form-control @error('nama_vaksin') is-invalid @enderror" name="nama_vaksin" value="{{ $vaksin->nama_vaksin }}" autocomplete="off">
                                            @error('nama_vaksin')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Jumlah Tersedia</label>
                                            <input type="number" class="form-control @error('jumlah_vaksin') is-invalid @enderror" name="jumlah_vaksin" value="{{ $vaksin->jumlah_vaksin }}" autocomplete="off">
                                            @error('jumlah_vaksin')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Tanggal Expired</label>
                                            <input type="date" class="form-control @error('tgl_expired') is-invalid @enderror" name="tgl_expired" value="{{ $vaksin->tgl_expired }}" autocomplete="off">
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
                                                <option value="Kucing" @if($vaksin->jenis_hewan == 'Kucing') selected @endif>Kucing</option>
                                                <option value="Anjing" @if($vaksin->jenis_hewan == 'Anjing') selected @endif>Anjing</option>
                                            </select>
                                            @error('jenis_hewan')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control @error('harga_vaksin') is-invalid @enderror" name="harga_vaksin" value="{{ $vaksin->harga_vaksin }}" autocomplete="off">
                                            @error('harga_vaksin')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Foto Vaksin <span class="text-info">( Masukan foto baru, jika melakukan update foto vaksin)</span></label>
                                            <input type="file" class="form-control" name="foto_vaksin" autocomplete="off">
                                        </div> 
                                        <div class="form-group">
                                            <label>Deskripsi/Keterangan Vaksin</label>
                                            <textarea name="keterangan_vaksin" class="form-control @error('keterangan_vaksin') is-invalid @enderror" rows="4" value="{{ $vaksin->keterangan_vaksin }}">{{ $vaksin->keterangan_vaksin }}</textarea>
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
        </div>
    </div>
</section>
@endsection