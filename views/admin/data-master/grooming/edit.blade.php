@extends('layouts.admin')
@section('title','Data Grooming | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-edit"></i> Edit Data Grooming</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('grooming.index') }}">Data Grooming</a></div>
            <div class="breadcrumb-item">Edit Data Grooming</div>
          </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="{{ route('grooming.update', $grooming->id_grooming) }}" method="POST" enctype="multipart/form-data">
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
                                            <label>Foto Grooming <span class="text-info">(Masukan foto baru, jika akan mengubah)</span></label>
                                            <input type="file" class="form-control" name="foto_grooming" autocomplete="off">
                                        </div> 
                                        <div class="form-group">
                                            <label>Jenis Grooming</label>
                                            <input type="text" class="form-control @error('jenis_grooming') is-invalid @enderror" value="{{ $grooming->jenis_grooming }}" name="jenis_grooming" autocomplete="off">
                                            @error('jenis_grooming')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>  
                                        <div class="form-group">
                                            <label>Jenis Hewan</label>
                                            <input type="text" class="form-control @error('jenis_hewan') is-invalid @enderror" value="{{ $grooming->jenis_hewan }}" name="jenis_hewan" autocomplete="off">
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
                                                <option value="Aktif" @if($grooming->status_grooming == 'Aktif') selected @endif>Aktif</option>
                                                <option value="Non Aktif" @if($grooming->status_grooming == 'Non Aktif') selected @endif>Non Aktif</option>
                                            </select>
                                            @error('status_grooming')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya Grooming</label>
                                            <input type="number" class="form-control @error('biaya_grooming') is-invalid @enderror" value="{{ $grooming->biaya_grooming }}" name="biaya_grooming" autocomplete="off">
                                            @error('biaya_grooming')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label>Deskripsi/Keterangan Grooming</label>
                                            <textarea name="keterangan_grooming" class="form-control @error('keterangan_grooming') is-invalid @enderror" rows="4">{{ $grooming->keterangan_grooming }}</textarea>
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
        </div>
    </div>
</section>
@endsection