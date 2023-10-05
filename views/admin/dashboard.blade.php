@extends('layouts.admin')
@section('title','Dashboard | Engil Pet Vet')
@section('content')
<section class="section">
  <div class="section-header">
      <h1>Dashboard</h1>
  </div>
  <div class="section-body">
      <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-secondary">
                <i class="far fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Admin</h4>
                </div>
                <div class="card-body">
                  {{ $admin->count() }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-success text-white">
                <i class="fa fa-user-md" style="font-size: 24px;"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Dokter</h4>
                </div>
                <div class="card-body">
                  {{ $dokter->count() }}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning text-white">
                <i class="fa fa-users" style="font-size: 24px;"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Pelanggan</h4>
                </div>
                <div class="card-body">
                  {{ $pelanggan->count() }}
                </div>
              </div>
            </div>
          </div>                
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h4>Invoices</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive table-invoice">
                <table id="table-1" class="table table-striped">
                  <thead>
                    <th>Kode Reservasi</th>
                    <th>Pelanggan</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Total Biaya</th>
                    <th>Opsi</th>
                  </thead>
                  <tbody>
                    @foreach($pembayaran as $data)
                    <tr>
                      <td>{{ $data->kode_reservasi }}</td>
                      <td class="font-weight-600">{{ $data->name }}</td>
                      <td class="font-weight-600">{{ $data->kategori_reservasi }}</td>
                      <td>
                        @if($data->status_pembayaran == "success")
                          <div class="badge badge-success">{{ $data->status_pembayaran }}</div>
                        @elseif($data->status_pembayaran == "pending")
                          <div class="badge badge-warning">{{ $data->status_pembayaran }}</div>
                        @else
                          <div class="badge badge-danger">{{ $data->status_pembayaran }}</div>
                        @endif
                      </td>
                      <td>
                        Rp. {{ number_format($data->total_biaya) }}
                      </td>
                      <td>
                          @if($data->status_pembayaran == "success")
                            <a href="{{ route('reservasi.selesai.cetak-invoice', $data->reservasi_id) }}" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Invoice</a>
                          @else
                          <button class="btn btn-secondary"><i class="fa fa-print"></i> Invoice</button>
                          @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-hero">
            <div class="card-header">
              <div class="card-icon">
                <i class="far fa-question-circle"></i>
              </div>
              <h4>{{ $reservasi->count() }}</h4>
              <div class="card-description">Pelanggan melakukan reservasi, menunggu kedatangan.</div>
            </div>
            <div class="card-body p-0">
              <div class="tickets-list">
                @foreach($reservasi as $data)
                <a href="#" class="ticket-item">
                  <div class="ticket-title">
                    <h4>{{ $data->kode_reservasi }} - {{ $data->kategori_reservasi }}</h4>
                  </div>
                  <div class="ticket-info">
                    <div>{{ $data->name }}</div>
                    <div class="bullet"></div>
                    <div class="text-primary">Kedatangan {{ date("d F Y", strtotime($data->tgl_booking)) }} Pukul {{ date("H:i", strtotime($data->jam_booking)) }}</div>
                  </div>
                </a>
                @endforeach
                <a href="{{ route('reservasi.index') }}" class="ticket-item ticket-more">
                  View All <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
