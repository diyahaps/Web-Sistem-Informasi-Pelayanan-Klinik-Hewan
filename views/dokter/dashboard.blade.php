@extends('layouts.dokter')
@section('title','Dashboard | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary text-white">
                  <i class="fa fa-stethoscope" style="font-size: 24px;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pemeriksaan</h4>
                  </div>
                  <div class="card-body">
                    {{ $pemeriksaan->count() }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger text-white">
                  <i class="fa fa-flask" style="font-size: 24px;"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Vaksinasi</h4>
                  </div>
                  <div class="card-body">
                    {{ $vaksinasi->count() }}
                  </div>
                </div>
              </div>
            </div>           
        </div>
    </div>
</section>
@endsection