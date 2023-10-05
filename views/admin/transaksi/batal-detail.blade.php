@extends('layouts.admin')
@section('title','Reservasi Batal Details | Engil Pet Vet')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>
            <a href="{{ route('reservasi.batal') }}"><i class="fa fa-arrow-left"></i></a> Reservasi Batal Details
        </h1>
        <div class="section-header-button">
            @if($reservasi->status_reservasi == "Batal")
                <div class="badge badge-danger">{{ $reservasi->status_reservasi }}</div>
            @elseif($reservasi->status_reservasi == "On proses")
                <div class="badge badge-info">{{ $reservasi->status_reservasi }}</div>
            @else
                <div class="badge badge-warning">{{ $reservasi->status_reservasi }}</div>
            @endif
        </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('reservasi.batal') }}">Reservasi</a></div>
            <div class="breadcrumb-item active"><a href="{{ route('reservasi.batal.detail', $reservasi->id_reservasi) }}">Reservasi Batal Details</a></div>
            <div class="breadcrumb-item">{{ $reservasi->kategori_reservasi }}</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="pricing pricing-highlight">
                    <div class="pricing-title">
                        Nomor Antrian
                    </div>
                    <div class="pricing-padding">
                        <div class="pricing-price">
                            <div>{{ $reservasi->nomor_antrian }}</div>
                            <div>Tanggal {{ date("d F Y", strtotime($reservasi->tgl_booking)) }}, {{ $reservasi->jam_booking }} WIB</div>
                        </div>
                        <hr>
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
                        @elseif($reservasi->kategori_reservasi == "Penitipan")
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">{{ date("d F Y", strtotime($reservasi->tgl_mulai)) }}</div>
                                <div class="text-small text-left font-weight-bold mb-1">Tgl Mulai</div>                      
                            </div>
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">{{ date("d F Y", strtotime($reservasi->tgl_selesai)) }}</div>
                                <div class="text-small text-left font-weight-bold mb-1">Tgl Selesai</div>                      
                            </div>
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">{{ $durasi }} hari</div>
                                <div class="text-small text-left font-weight-bold mb-1">Durasi</div>                      
                            </div>
                            <div class="mb-2">
                                <div class="float-right font-weight-bold text-muted">Rp. {{ number_format($reservasi->total_biaya) }}</div>
                                <div class="text-small text-left font-weight-bold mb-1">Total Biaya</div>                      
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
                    @if($reservasi->status_reservasi == "Booking")
                        <a href="#" reservasi-id="{{ $reservasi->id_reservasi }}" reservasi-nama="{{ $reservasi->kode_reservasi }}" class="btn btn-danger mb-3 batal"><i class="fa fa-times"></i> Batal</a>
                        <a href="#" reservasi-id="{{ $reservasi->id_reservasi }}" reservasi-nama="{{ $reservasi->kode_reservasi }}" class="btn btn-info mb-3 konfirmasi">Konfirmasi <i class="fa fa-arrow-circle-right"></i></a>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card profile-widget">
                    <div class="profile-widget-header">                     
                        <img alt="image" src="{{ asset('template_admin') }}/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-value">{{ $reservasi->name }}</div>
                                <div class="profile-widget-item-label">Alamat : {{ $reservasi->alamat_lengkap }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-value">Status Akun</div>
                                <div class="profile-widget-item-label text-success">Aktif</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description pb-0">
                        <div class="row">
                            <label class="col-4">Nama Lengkap</label>
                            <div class="col-8">
                              : {{ $reservasi->name }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-4">Email</label>
                            <div class="col-8">
                              : {{ $reservasi->email }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-4">Nomor Hp</label>
                            <div class="col-8">
                              : {{ $reservasi->no_hp }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-4">Tempat, Tgl Lahir</label>
                            <div class="col-8">
                              : {{ $reservasi->tempat_lahir }}, {{ date("d F Y", strtotime($reservasi->tanggal_lahir)) }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-4">Jenis Kelamin</label>
                            <div class="col-8">
                              : {{ $reservasi->jenis_kelamin }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-4">Agama</label>
                            <div class="col-8">
                              : {{ $reservasi->agama }}
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-4">Alamat Lengkap</label>
                            <div class="col-8">
                              : {{ $reservasi->alamat_lengkap }}
                            </div>
                        </div>
                    </div>
                  </div>
                <h2 class="section-title">Informasi Hewan</h2>
                <div class="card author-box card-primary">
                    <div class="card-body">
                        <div class="author-box-left">
                            <img alt="image" src="{{ asset($reservasi->foto_hewan) }}" class="rounded-circle author-box-picture">
                        </div>
                        <div class="author-box-details">
                            <div class="row">
                                <label class="col-4">Nama Hewan</label>
                                <div class="col-8">
                                  : {{ $reservasi->nama_hewan }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Jenis Hewan</label>
                                <div class="col-8">
                                  : {{ $reservasi->jenis_hewan }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Ras Hewan</label>
                                <div class="col-8">
                                  : {{ $reservasi->ras_hewan }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Jenis Kelamin Hewan</label>
                                <div class="col-8">
                                  : {{ $reservasi->jenis_kelamin_hewan }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Umur</label>
                                <div class="col-8">
                                  : {{ $reservasi->umur }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Riwayat Penyakit</label>
                                <div class="col-8">
                                  : {{ $reservasi->riwayat_penyakit }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
