@extends('layouts.dokter')
@section('title','Pemeriksaan Details | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>
            <a href="{{ route('dokter.pemeriksaan.index') }}"><i class="fa fa-arrow-left"></i></a> Pemeriksaan Details
        </h1>
        <div class="section-header-button">
            @if($reservasi->status_reservasi == "Menunggu pembayaran")
                <div class="badge badge-primary">{{ $reservasi->status_reservasi }}</div>
            @elseif($reservasi->status_reservasi == "On proses")
                <div class="badge badge-info">{{ $reservasi->status_reservasi }}</div>
            @else
                <div class="badge badge-success">{{ $reservasi->status_reservasi }}</div>
            @endif
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dokter.pemeriksaan.index') }}">Pemeriksaan</a></div>
            <div class="breadcrumb-item">Pemeriksaan Details</div>
        </div>
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
                                <div class="float-right font-weight-bold text-muted">{{ $reservasi->jenis_grooming }}</div>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <b>Rekam Medis</b> 
                        @if($reservasi->status_reservasi == "On proses")
                            <a href="#" data-toggle="modal" data-target="#add_rekam_medis" class="btn btn-info ml-3"><i class="fa fa-plus-circle"></i> Tambah</a>
                        @endif
                        @if($status_rekam_medis != 0)
                            <a href="{{ route('dokter.rekam.medis', $reservasi->id_reservasi) }}" target="_blank" class="btn btn-primary ml-3"><i class="fa fa-print"></i> Cetak Rekam Medis</a>
                        @endif
                        </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table-3">
                            <thead>
                                <th>No</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Dokter</th>
                                <th>Anamnesa, Gejala Klinis dan Keterangan Lain</th>
                                <th>Diagnosa, DDx dan Treatment</th>
                                @if($reservasi->status_reservasi == "On proses")
                                    <th>Opsi</th>
                                @endif
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
                                        @if($reservasi->status_reservasi == "On proses")
                                            <td>
                                                <a href="{{ route('dokter.edit.rekam-medis', $data->id_rekam_medis) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" medis-id="{{ $data->id_rekam_medis }}" class="btn btn-icon btn-danger removed"><i class="fa fa-trash"></i></a>
                                            </td>
                                        @endif
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
                        @if($reservasi->status_reservasi == "On proses")
                            <a href="#" data-toggle="modal" data-target="#add_obat" class="btn btn-info ml-3"><i class="fa fa-medkit"></i> Add obat</a> 
                        @endif
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
                                @if($reservasi->status_reservasi == "On proses")
                                    <th>Opsi</th>
                                @endif
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
                                        @if($reservasi->status_reservasi == "On proses")
                                            <td>
                                                <a href="{{ route('dokter.edit.detail', $data->id_reservasi_detail) }}" class="btn btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                                <a href="#" detail-id="{{ $data->id_reservasi_detail }}" detail-nama="{{ $data->nama_obat }}" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        @endif
                                    </tr>
                                @php
                                    $no++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-5">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <div class="mb-3 mt-3">
                                    <label for="">Total Biaya</label>
                                    @if(!empty($reservasi->total_biaya))
                                        <h4>Rp. {{ number_format($reservasi->total_biaya) }}</h4>  
                                    @else
                                        <h4>Rp. 0</h4>
                                    @endif
                                </div>
                                @if($reservasi->status_reservasi == "On proses")
                                    @if(!empty($reservasi->total_biaya))
                                        @if($status_rekam_medis != 0)
                                            <button reservasi-id="{{ $reservasi->id_reservasi }}" class="btn btn-primary mt-3 lanjut">Lanjut ke pembayaran <i class="fa fa-arrow-right"></i> </button>
                                        @else
                                            <button class="btn btn-secondary mt-3">Lanjut ke pembayaran <i class="fa fa-arrow-right" disabled></i> </button>
                                        @endif
                                    @else
                                        <button class="btn btn-secondary mt-3">Lanjut ke pembayaran <i class="fa fa-arrow-right" disabled></i> </button>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="add_obat">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"><i class="fa fa-plus-circle"></i> Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="table-2">
                    <thead>                                 
                        <tr class="text-center">
                            <th width="5%">Opsi</th>
                            <th>Foto</th>
                            <th>Informasi</th>
                            <th>Harga / Satuan</th>
                            <th>Qty tersedia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($obat as $data)                                 
                        <tr>
                            <td class="text-center">
                                <a href="#" data-toggle="modal" data-target="#add_qty{{ $data->id_obat }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> </a>
                            </td>
                            <td>
                                <img src="{{ asset($data->foto_obat) }}" width="50px">
                            </td>
                            <td>
                                <b>{{ $data->kode_obat }} - {{ $data->nama_obat }}</b> <br>
                                <b>Jenis : {{ $data->jenis_obat }}</b> <br>
                                <b>Expired : {{ date("d/m/Y", strtotime($data->tgl_expired)) }}</b>
                            </td>
                            <td>
                                Rp. {{ number_format($data->harga) }} / {{ $data->satuan }}
                            </td>
                            <td>
                                {{ $data->qty }} {{ $data->satuan }}
                            </td>
                        </tr>
                        <div class="modal fade" tabindex="-1" role="dialog" id="add_qty{{ $data->id_obat }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary">Konfirmasi jumlah QTY</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="text-danger">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('dokter.add.obat') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="reservasi_id" value="{{ $reservasi->id_reservasi }}">
                                        <input type="hidden" name="obat_id" value="{{ $data->id_obat }}">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Jumlah QTY</label>
                                                <input type="number" class="form-control" name="jumlah_qty" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Aturan Pakai</label>
                                                <textarea name="aturan_pakai" class="form-control" cols="30" rows="10" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>                 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="add_rekam_medis">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary"><i class="fa fa-plus-circle"></i> Tambah Rekam Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <form action="{{ route('dokter.simpan.rekam-medis') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="reservasi_id" value="{{ $reservasi->id_reservasi }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Anamnesa, Gejala Klinis dan Keterangan Lain</label>
                        <textarea name="rekam_medis" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Diagnosa, DDx dan Treatment</label>
                        <textarea name="diagnosa" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('sweetAlert')
    <script type="text/javascript">
        $('.delete').click(function()
        {
            var id      = $(this).attr('detail-id');
            var nama    = $(this).attr('detail-nama');
            swal({
              title     : "Warning",
              text      : "Menghapus data obat "+nama+"!",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/dokter/hapus_obat_reservasi/"+id+"";
              }
            });
        });
        $('.removed').click(function()
        {
            var id      = $(this).attr('medis-id');
            swal({
              title     : "Warning",
              text      : "Apakah anda akan menghapus rekam medis ini?",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/dokter/hapus_rekam_medis/"+id+"";
              }
            });
        });
        $('.lanjut').click(function()
        {
            var id      = $(this).attr('reservasi-id');
            swal({
              title     : "Warning",
              text      : "Apakah anda akan melanjutkan ke pembayaran?",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/dokter/lanjut_bayar/"+id+"";
              }
            });
        });
    </script>
@stop