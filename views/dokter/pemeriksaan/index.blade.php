@extends('layouts.dokter')
@section('title','Pemeriksaan | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1><i class="fa fa-stethoscope"></i> Pemeriksaan</h1>
    </div>
    <div class="section-body">  
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
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
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th>Kode</th>
                                        <th>Antrian</th>
                                        <th>Pelanggan</th>
                                        <th>Hewan</th>
                                        <th>Tgl Reservasi</th>
                                        <th>Tgl & Jam Booking</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($reservasi as $data)                                 
                                    <tr>
                                        <td>{{ $no }}.</td>
                                        <td>
                                            <a href="{{ route('dokter.pemeriksaan.details', $data->id_reservasi) }}">{{ $data->kode_reservasi }}</a>
                                        </td>
                                        <td class="text-center"><span class="btn btn-secondary text-dark">{{ $data->nomor_antrian }}</span></td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->nama_hewan }} ({{ $data->jenis_hewan }})</td>
                                        <td>{{ date("d F Y", strtotime($data->tgl_reservasi)) }}</td>
                                        <td>{{ date("d F Y", strtotime($data->tgl_booking)) }}, {{ $data->jam_booking }}</td>
                                        <td>{{ $data->kategori_reservasi }}</td>
                                        <td>
                                            @if($data->status_reservasi == "Menunggu pembayaran")
                                                <div class="badge badge-primary">{{ $data->status_reservasi }}</div>
                                            @elseif($data->status_reservasi == "On proses")
                                                <div class="badge badge-info">{{ $data->status_reservasi }}</div>
                                            @else
                                                <div class="badge badge-success">{{ $data->status_reservasi }}</div>
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
</section>
@endsection