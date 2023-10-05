@extends('layouts.admin')
@section('title','Cetak Laporan | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-print"></i> Cetak Laporan</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix mb-3"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Tanggal Mulai</label>
                                <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" placeholder="Tanggal Mulai">
                            </div>
                            <div class="col-md-6">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" placeholder="Tanggal Selesai">
                            </div>
                        </div>
                        <br>
    
                        <a href="" onclick="this.href='/admin/laporan/'+document.getElementById('tgl_mulai').value+'/'+document.getElementById('tgl_selesai').value" 
                        target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Cetak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection