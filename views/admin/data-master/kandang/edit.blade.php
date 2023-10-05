@extends('layouts.admin')
@section('title','Data Kandang | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-edit"></i> Edit Data Kandang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('obat.index') }}">Data Kandang</a></div>
            <div class="breadcrumb-item">Edit Data Kandang</div>
          </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('kandang.update', $kandang->id_kandang) }}" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" class="form-control @error('kode_kandang') is-invalid @enderror" name="kode_kandang" value="{{ $kandang->kode_kandang }}" autocomplete="off">
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
                                                <option value="Medium" @if($kandang->ukuran_kandang == 'Medium') selected @endif>Medium</option>
                                                <option value="Large" @if($kandang->ukuran_kandang == 'Large') selected @endif>Large</option>
                                                <option value="Extra Large" @if($kandang->ukuran_kandang == 'Extra Large') selected @endif>Extra Large</option>
                                            </select>
                                            @error('ukuran_kandang')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Panjang (cm)</label>
                                            <input type="number" class="form-control @error('panjang') is-invalid @enderror" name="panjang" value="{{ $kandang->panjang }}" autocomplete="off">
                                            @error('panjang')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Lebar (cm)</label>
                                            <input type="number" class="form-control @error('lebar') is-invalid @enderror" name="lebar" value="{{ $kandang->lebar }}" autocomplete="off">
                                            @error('lebar')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Tinggi (cm)</label>
                                            <input type="number" class="form-control @error('tinggi') is-invalid @enderror" name="tinggi" value="{{ $kandang->tinggi }}" autocomplete="off">
                                            @error('tinggi')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Foto Kandang <span class="text-info">( Masukan foto baru, jika melakukan update foto kandang)</span></label>
                                            <input type="file" class="form-control @error('foto_kandang') is-invalid @enderror" name="foto_kandang" autocomplete="off">
                                            @error('foto_kandang')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Biaya per hari</label>
                                            <input type="number" class="form-control @error('biaya_per_hari') is-invalid @enderror" name="biaya_per_hari" value="{{ $kandang->biaya_per_hari }}" autocomplete="off">
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
                                                <option value="Anjing" @if($kandang->kandang_hewan == 'Anjing') selected @endif>Anjing</option>
                                                <option value="Kucing" @if($kandang->kandang_hewan == 'Kucing') selected @endif>Kucing</option>
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
                                                <option value="Tersedia" @if($kandang->status == 'Tersedia') selected @endif>Tersedia</option>
                                                <option value="Tidak Tersedia" @if($kandang->status == 'Tidak Tersedia') selected @endif>Tidak Tersedia</option>
                                            </select>
                                            @error('status')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Jumlah Tersedia</label>
                                            <input type="number" class="form-control @error('jumlah_tersedia') is-invalid @enderror" name="jumlah_tersedia" value="{{ $kandang->jumlah_tersedia }}" autocomplete="off">
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
        </div>
    </div>
</section>
@endsection