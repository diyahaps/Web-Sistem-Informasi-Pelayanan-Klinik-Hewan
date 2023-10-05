@extends('layouts.dokter')
@section('title','Edit Rekam Medis | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Edit Rekam Medis </h1>
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
                <form action="{{ route('dokter.rekam-medis.update', $rekam_medis->id_rekam_medis) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="reservasi_id" value="{{ $rekam_medis->reservasi_id }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Anamnesa, Gejala Klinis dan Keterangan Lain</label>
                            <textarea name="rekam_medis" class="form-control" cols="30" rows="10">{{ $rekam_medis->rekam_medis }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Diagnosa, DDx dan Treatment</label>
                            <textarea name="diagnosa" class="form-control" cols="30" rows="10">{{ $rekam_medis->diagnosa }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        @if($reservasi->kategori_reservasi == "Pemeriksaan")
                            <a href="{{ route('dokter.pemeriksaan.details', $rekam_medis->reservasi_id) }}" class="btn btn-dark">Kembali</a>
                        @else
                            <a href="{{ route('dokter.vaksinasi.details', $rekam_medis->reservasi_id) }}" class="btn btn-dark">Kembali</a>
                        @endif
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection