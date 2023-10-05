@extends('layouts.dokter')
@section('title','Edit Qty dan Aturan Pakai | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Qty dan Aturan Pakai </h1>
    </div>
    <div class="section-body">
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
        @if (session('warning'))
            <div class="alert alert-warning alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ session('warning') }}
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dokter.update.detail', $detail_reservasi->id_reservasi_detail) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="obat_id" value="{{ $detail_reservasi->obat_id }}">
                    <input type="hidden" name="reservasi_id" value="{{ $detail_reservasi->reservasi_id }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Jumlah QTY</label>
                            <input type="number" class="form-control" name="jumlah_beli" value="{{ $detail_reservasi->jumlah_beli }}" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Aturan Pakai</label>
                            <textarea name="aturan_pakai" class="form-control" cols="30" rows="10" required>{{ $detail_reservasi->aturan_pakai }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('dokter.pemeriksaan.details', $detail_reservasi->reservasi_id) }}" class="btn btn-dark">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection