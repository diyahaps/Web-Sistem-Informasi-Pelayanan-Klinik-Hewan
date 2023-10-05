@extends('layouts.admin')
@section('title','Data Obat | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-edit"></i> Edit Data Obat</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('obat.index') }}">Data Obat</a></div>
            <div class="breadcrumb-item">Edit Data Obat</div>
          </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('obat.update', $obat->id_obat) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input type="text" class="form-control @error('kode_obat') is-invalid @enderror" name="kode_obat" value="{{ $obat->kode_obat }}" autocomplete="off">
                                            @error('kode_obat')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" value="{{ $obat->nama_obat }}" autocomplete="off">
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
                                                    <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ $obat->qty }}" autocomplete="off">
                                                    @error('qty')
                                                        <span class="invalid-feedback">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="satuan" class="form-control @error('satuan') is-invalid @enderror">
                                                        <option value=" ">Pilihan</option>
                                                        <option value="Butir" @if($obat->satuan == 'Butir') selected @endif>Butir</option>
                                                        <option value="Tablet" @if($obat->satuan == 'Tablet') selected @endif>Tablet</option>
                                                        <option value="Pcs" @if($obat->satuan == 'Pcs') selected @endif>Pcs</option>
                                                        <option value="Botol" @if($obat->satuan == 'Botol') selected @endif>Botol</option>
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
                                            <input type="date" class="form-control @error('tgl_expired') is-invalid @enderror" name="tgl_expired" value="{{ $obat->tgl_expired }}" autocomplete="off">
                                            @error('tgl_expired')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Foto Obat <span class="text-info">( Masukan foto baru, jika melakukan update foto obat)</span></label>
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
                                                <option value="Cair" @if($obat->jenis_obat == 'Cair') selected @endif>Cair</option>
                                                <option value="Tablet" @if($obat->jenis_obat == 'Tablet') selected @endif>Tablet</option>
                                                <option value="Kapsul" @if($obat->jenis_obat == 'Kapsul') selected @endif>Kapsul</option>
                                                <option value="Oles" @if($obat->jenis_obat == 'Oles') selected @endif>Oles</option>
                                                <option value="Tetes" @if($obat->jenis_obat == 'Tetes') selected @endif>Tetes</option>
                                                <option value="Suntik" @if($obat->jenis_obat == 'Suntik') selected @endif>Suntik</option>
                                            </select>
                                            @error('jenis_obat')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $obat->harga }}" autocomplete="off">
                                            @error('harga')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Deskripsi/Keterangan Obat</label>
                                            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="4" value="{{ $obat->keterangan }}">{{ $obat->keterangan }}</textarea>
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
        </div>
    </div>
</section>
@endsection