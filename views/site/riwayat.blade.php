@extends('layouts.pelanggan')
@section('title','Riwayat Reservasi')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Riwayat Reservasi</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Riwayat Reservasi</a>
        </div>
    </div>
</div>
<div class="container mt-5" style="margin-bottom: 125px;">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Riwayat Reservasi</h5>
            </div>
            <p class="mb-4">Data riwayat reservasi ini berdasarkan transaksi yang telah anda lakukan.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive mt-3">
                        @if (session('sukses'))
                            <div class="alert alert-success">
                                {{ session('sukses') }}
                            </div>
                        @endif
                        <table id="datatables" class="table table-striped">
                            <thead class="text-center text-white bg-info">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Antrian</th>
                                <th>Pelanggan</th>
                                <th>Hewan</th>
                                <th>Tgl Reservasi</th>
                                <th>Tgl & Jam Booking</th>
                                <th>Kategori</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($reservasi as $data)
                                <tr class="text-center">
                                    <td>{{ $no }}.</td>
                                    <td>
                                        <a href="{{ route('data.riwayat.detail', $data->id_reservasi) }}">{{ $data->kode_reservasi }}</a>
                                    </td>
                                    <td class="text-center"><span class="btn btn-secondary text-dark">{{ $data->nomor_antrian }}</span></td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->nama_hewan }} ({{ $data->jenis_hewan }})</td>
                                    <td>{{ date("d F Y", strtotime($data->tgl_reservasi)) }}</td>
                                    <td>{{ date("d F Y", strtotime($data->tgl_booking)) }}, {{ $data->jam_booking }}</td>
                                    <td>{{ $data->kategori_reservasi }}</td>
                                    <td>
                                        @if($data->status_reservasi == "Batal")
                                            <div class="text-danger">{{ $data->status_reservasi }}</div>
                                        @elseif($data->status_reservasi == "On proses")
                                            <div class="text-info">{{ $data->status_reservasi }}</div>
                                        @elseif($data->status_reservasi == "Menunggu pembayaran")
                                            <div class="text-dark">{{ $data->status_reservasi }}</div>
                                        @elseif($data->status_reservasi == "Selesai")
                                            <div class="text-success">{{ $data->status_reservasi }}</div>
                                        @else
                                            <div class="text-warning">{{ $data->status_reservasi }}</div>
                                        @endif
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
@endsection