@extends('layouts.admin')
@section('title','Reservasi Selesai Details | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>
            <a href="{{ route('reservasi.selesai') }}"><i class="fa fa-arrow-left"></i></a> Reservasi Selesai Details
        </h1>
        <div class="section-header-button">
            <div class="badge badge-success">{{ $reservasi->status_reservasi }}</div>
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('reservasi.selesai') }}">Reservasi</a></div>
            <div class="breadcrumb-item active"><a href="{{ route('reservasi.selesai.detail', $reservasi->id_reservasi) }}">Reservasi Selesai Details</a></div>
            <div class="breadcrumb-item">{{ $reservasi->kategori_reservasi }}</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        Informasi Reservasi
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->kode_reservasi }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Kode</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->kategori_reservasi }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Kategori</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->status_reservasi }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Status</div>                      
                        </div>
                        @if($reservasi->kategori_reservasi == "Grooming")
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">{{ $grooming->jenis_grooming }}</div>
                                <div class="text-small text-left font-weight-bold mb-1">Jenis Grooming</div>                      
                            </div>
                        @elseif($reservasi->kategori_reservasi == "Vaksinasi")
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">{{ $reservasi->status_vaksin }}</div>
                                <div class="text-small text-left font-weight-bold mb-1">Status Vaksin</div>                      
                            </div>
                        @endif
                        <div class="mb-2">
                            <div class="text-small text-left font-weight-bold mb-1">Keterangan</div> 
                            <textarea class="form-control" readonly>{{ $reservasi->keterangan }}</textarea>                     
                        </div>
                        <hr>
                        @if($pembayaran == null)
                            <div class="mt-2 mb-2">
                                <div class="float-right font-weight-bold text-muted">Belum Bayar</div>
                                <div class="text-small text-left font-weight-bold mb-1">Status Pembayaran</div>                      
                            </div>
                        @else
                            <div class="mt-2 mb-2">
                                <div class="float-right font-weight-bold text-muted">{{ date("d F Y", strtotime($pembayaran->tgl_pembayaran)) }}</div>
                                <div class="text-small text-left font-weight-bold mb-1">Tgl Pembayaran</div>                      
                            </div>
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">
                                    @if($pembayaran->status_pembayaran == "pending")
                                        <b class="text-warning">{{ $pembayaran->status_pembayaran }}</b>
                                    @elseif($pembayaran->status_pembayaran == "success")
                                        <b class="text-success">{{ $pembayaran->status_pembayaran }}</b>
                                    @elseif($pembayaran->status_pembayaran == "expired")
                                        <b class="text-danger">{{ $pembayaran->status_pembayaran }}</b>
                                    @endif
                                </div>
                                <div class="text-small text-left font-weight-bold mb-1">Status Pembayaran</div>                      
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        Informasi Pelanggan
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->name }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Nama</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->email }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Email</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->no_hp }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">No Hp</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->agama }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Agama</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->jenis_kelamin }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Jenis Kelamin</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->tempat_lahir }}, {{ $reservasi->tanggal_lahir }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">TTL</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="text-small text-left font-weight-bold mb-1">Alamat Lengkap</div> 
                            <textarea class="form-control" readonly>{{ $reservasi->alamat_lengkap }}</textarea>                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-header">
                        Informasi Hewan
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->nama_hewan }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Nama Hewan</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->jenis_kelamin_hewan }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Jenis Kelamin</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->jenis_hewan }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Jenis Hewan</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->ras_hewan }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Ras Hewan</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="float-right font-weight-bold text-muted">{{ $reservasi->umur }}</div>
                            <div class="text-small text-left font-weight-bold mb-1">Umur</div>                      
                        </div>
                        <div class="mb-2">
                            <div class="text-small text-left font-weight-bold mb-1">Riwayat Penyakit</div> 
                            <textarea class="form-control" readonly>{{ $reservasi->riwayat_penyakit }}</textarea>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($reservasi->kategori_reservasi == "Pemeriksaan")
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <b>Rekam Medis</b> 
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-3">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Dokter</th>
                                    <th>Anamnesa, Gejala Klinis dan Keterangan Lain</th>
                                    <th>Diagnosa, DDx dan Treatment</th>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($rekam_medis as $data)
                                        <tr>
                                            <td>{{ $no }}.</td>
                                            <td>{{ date("d F Y", strtotime($reservasi->tgl_booking)) }}</td>
                                            <td>{{ $data->nama_dokter }}</td>
                                            <td>{{ $data->rekam_medis }}</td>
                                            <td>{{ $data->diagnosa }}</td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <b>Details Reservasi</b> 
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Info Obat</th>
                                    <th>Qty tersedia</th>
                                    <th>Harga / Satuan</th>
                                    <th>QTY Pesanan</th>
                                    <th>Biaya</th>
                                    <th>Aturan Pakai</th>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($detail_reservasi as $data)
                                        <tr>
                                            <td>{{ $no }}.</td>
                                            <td>
                                                <img src="{{ asset($data->foto_obat) }}" width="50px">
                                            </td>
                                            <td>
                                                <b>{{ $data->kode_obat }} - {{ $data->nama_obat }}</b> <br>
                                                <b>Jenis : {{ $data->jenis_obat }}</b> <br>
                                                <b>Expired : {{ date("d/m/Y", strtotime($data->tgl_expired)) }}</b>
                                            </td>
                                            <td>
                                                {{ $data->qty }} {{ $data->satuan }}
                                            </td>
                                            <td>
                                                Rp. {{ number_format($data->harga) }} / {{ $data->satuan }}
                                            </td>
                                            <td>{{ $data->jumlah_beli }} {{ $data->satuan }}</td>
                                            <td>Rp. {{ number_format($data->jumlah_harga) }} </td>
                                            <td>{{ $data->aturan_pakai }}</td>
                                        </tr>
                                    @php
                                        $no++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-md-9 text-left" style="margin-top: 105px;">
                                    <a href="{{ route('reservasi.selesai.cetak-invoice', $reservasi->id_reservasi) }}" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak Invoice</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mt-3">
                                        <label for="">Total Biaya</label>
                                        @if(!empty($reservasi->total_biaya))
                                            <h4>Rp. {{ number_format($reservasi->total_biaya) }}</h4>  
                                        @else
                                            <h4>Rp. 0</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($reservasi->kategori_reservasi == "Vaksinasi")
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <b>Rekam Medis</b> 
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-3">
                                <thead>
                                    <th>No</th>
                                    <th>Tanggal Vaksin</th>
                                    <th>Dokter</th>
                                    <th>Keterangan Lain</th>
                                    <th>Diagnosa (jika ada)</th>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($rekam_medis as $data)
                                        <tr>
                                            <td>{{ $no }}.</td>
                                            <td>{{ date("d F Y", strtotime($reservasi->tgl_booking)) }}</td>
                                            <td>{{ $data->nama_dokter }}</td>
                                            <td>{{ $data->rekam_medis }}</td>
                                            <td>{{ $data->diagnosa }}</td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <b>Data Vaksin</b> 
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-3">
                                <thead>
                                    <th>Foto</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Jenis Hewan</th>
                                    <th>Qty Pesanan</th>
                                    <th>Harga</th>
                                    <th>Expired</th>
                                </thead>
                                <tbody>
                                    @if($reservasi->vaksin_id != null)                               
                                        <tr>
                                            <td><img src="{{ asset($vaksin2->foto_vaksin) }}" width="50px"></td>
                                            <td>{{ $vaksin2->kode_vaksin }}</td>
                                            <td>{{ $vaksin2->nama_vaksin }}</td>
                                            <td>{{ $vaksin2->jenis_hewan }}</td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Rp. {{ number_format($vaksin2->harga_vaksin) }} 
                                            </td>
                                            <td>
                                                {{ date("d/m/Y", strtotime($vaksin2->tgl_expired)) }}
                                            </td>
                                        </tr>
                                    @else
                                        <tr class="text-center">
                                            <td colspan="7">Data Vaksin belum ditambahkan <a href="#" data-toggle="modal" data-target="#add_vaksin" class="text-info ml-3"><i class="fa fa-plus-circle"></i> Tambahkan Vaksin</a></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-md-9 text-left" style="margin-top: 105px;">
                                    <a href="{{ route('reservasi.selesai.cetak-invoice', $reservasi->id_reservasi) }}" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak Invoice</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mt-3">
                                        <label for="">Total Biaya</label>
                                        @if(!empty($reservasi->total_biaya))
                                            <h4>Rp. {{ number_format($reservasi->total_biaya) }}</h4>  
                                        @else
                                            <h4>Rp. 0</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($reservasi->kategori_reservasi == "Penitipan")
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <b>Data Penitipan & Kandang</b> 
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-3">
                                <thead>
                                    <th>No.</th>
                                    <th>Tanggal Booking</th>
                                    <th>Kategori</th>
                                    <th>Ukuran Kandang</th>
                                    <th>Biaya (hari)</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Durasi</th>
                                    <th>Biaya</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>{{ date("d F Y", strtotime($reservasi->tgl_booking)) }}</td>
                                        <td>{{ $reservasi->kategori_reservasi }}</td>
                                        <td>{{ $kandang->ukuran_kandang }}</td>
                                        <td>Rp. {{ number_format($kandang->biaya_per_hari) }}</td>
                                        <td>{{ date("d F Y", strtotime($reservasi->tgl_mulai)) }}</td>
                                        <td>{{ date("d F Y", strtotime($reservasi->tgl_selesai)) }}</td>
                                        <td>{{ $reservasi->durasi }} hari</td>
                                        <td>Rp. {{ number_format($reservasi->total_biaya) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-md-9 text-left" style="margin-top: 105px;">
                                    <a href="{{ route('reservasi.selesai.cetak-invoice', $reservasi->id_reservasi) }}" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak Invoice</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mt-3">
                                        <label for="">Total Biaya</label>
                                        @if(!empty($reservasi->total_biaya))
                                            <h4>Rp. {{ number_format($reservasi->total_biaya) }}</h4>  
                                        @else
                                            <h4>Rp. 0</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($reservasi->kategori_reservasi == "Grooming")
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <b>Data Grooming</b> 
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table-3">
                                <thead>
                                    <th>No.</th>
                                    <th>Tanggal Grooming</th>
                                    <th>Kategori</th>
                                    <th>Jenis Hewan</th>
                                    <th>Jenis Grooming</th>
                                    <th>Biaya Grooming</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>{{ date("d F Y", strtotime($reservasi->tgl_booking)) }}</td>
                                        <td>{{ $reservasi->kategori_reservasi }}</td>
                                        <td>{{ $grooming->jenis_hewan }}</td>
                                        <td>{{ $grooming->jenis_grooming }}</td>
                                        <td>Rp. {{ number_format($reservasi->total_biaya) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mt-5">
                                <div class="col-md-9 text-left" style="margin-top: 105px;">
                                    <a href="{{ route('reservasi.selesai.cetak-invoice', $reservasi->id_reservasi) }}" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Cetak Invoice</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 mt-3">
                                        <label for="">Total Biaya</label>
                                        @if(!empty($reservasi->total_biaya))
                                            <h4>Rp. {{ number_format($reservasi->total_biaya) }}</h4>  
                                        @else
                                            <h4>Rp. 0</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
