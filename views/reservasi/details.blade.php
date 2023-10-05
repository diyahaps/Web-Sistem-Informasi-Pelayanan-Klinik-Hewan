@extends('layouts.pelanggan')
@section('title','Reservasi Details')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Reservasi Details</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Reservasi Details</a>
        </div>
    </div>
</div>
<div class="container mt-5" style="margin-bottom: 125px;">
    <div class="row">
        <form action="{{ route('reservasi.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id_user }}">
            <input type="hidden" name="hewan_id" value="{{ $hewan->id_hewan }}">
            <input type="hidden" name="kandang_id" value="{{ $id_kandang }}">
            <input type="hidden" name="grooming_id" value="{{ $id_grooming }}">
            <div class="col-md-12">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Reservasi Details</h5>
                </div>
                <p class="mb-4">Silahkan cek dahulu data dibawah ini, sebelum melakukan pengajuan reservasi.</p>
                </div>
                <div class="card px-3 py-3">
                    <div class="alert alert-info">
                        <b>Informasi</b>
                        <ol>
                            <li>Untuk reservasi Pemeriksaan dan Vaksinasi informasi biaya akan muncul pada saat pembayaran ke admin.</li>
                            <li>Reservasi Penitipan dan Grooming biaya yang dikeluarkan akan dapat dilihat oleh pelanggan.</li>
                        </ol>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <td colspan="3"><b>Data Hewan</b></td>
                            <td colspan="3"><b>Data Reservasi</b></td>
                        </tr>
                        <tr>
                            <td width="15%;">Nama Hewan</td>
                            <td width="5%">:</td>
                            <td width="30%">{{ $hewan->nama_hewan }}</td>
                            <td width="15%;">Kategori Reservasi</td>
                            <td width="5%">:</td>
                            <td width="30%">
                                {{ $kategori_reservasi }}
                                <input type="hidden" name="kategori_reservasi" value="{{ $kategori_reservasi }}">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%;">Jenis Hewan</td>
                            <td width="5%">:</td>
                            <td width="30%">{{ $hewan->jenis_hewan }}</td>
                            <td width="15%;">Tgl Reservasi</td>
                            <td width="5%">:</td>
                            <td width="30%">
                                {{ date("d/m/Y", strtotime($tgl_sekarang)) }}
                                <input type="hidden" name="tgl_sekarang" value="{{ $tgl_sekarang }}">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%;">Jantan/Betina</td>
                            <td width="5%">:</td>
                            <td width="30%">{{ $hewan->jenis_kelamin_hewan }}</td>
                            <td width="15%;">Tgl & Jam Booking</td>
                            <td width="5%">:</td>
                            <td width="30%">
                                {{ date("d/m/Y H:i", strtotime($waktu_booking)) }}
                                <input type="hidden" name="waktu_booking" value="{{ $waktu_booking }}">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%;">Ras Hewan</td>
                            <td width="5%">:</td>
                            <td width="30%">{{ $hewan->ras_hewan }}</td>
                            <td width="15%;">Keterangan</td>
                            <td width="5%">:</td>
                            <td width="30%">
                                {{ $keterangan }}
                                <input type="hidden" name="keterangan" value="{{ $keterangan }}">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%;">Umur</td>
                            <td width="5%">:</td>
                            <td width="30%">{{ $hewan->umur }}</td>

                            @if($kategori_reservasi == "Grooming")
                                <td width="15%;">Jenis Grooming</td>
                                <td width="5%">:</td>
                                <td width="30%">{{ $jenis_grooming }}</td>
                            @elseif($kategori_reservasi == "Penitipan")
                                <td width="20%;">Tgl Mulai - Selesai (Total hari)</td>
                                <td width="5%">:</td>
                                <td width="25%">{{ $mulai }} - {{ $selesai }} ({{ $durasi }} hari)
                                    <input type="hidden" name="tgl_mulai" value="{{ $mulai }}">
                                    <input type="hidden" name="tgl_selesai" value="{{ $selesai }}">
                                    <input type="hidden" name="durasi" value="{{ $durasi }}">
                                </td>
                            @elseif($kategori_reservasi == "Vaksinasi")
                                <td width="15%;">Status Vaksin</td>
                                <td width="5%">:</td>
                                <td width="30%">
                                    {{ $status_vaksin }}
                                    <input type="hidden" name="status_vaksin" value="{{ $status_vaksin }}">
                                </td>
                            @endif

                        </tr>
                        <tr>
                            <td width="15%;">Riwayat Penyakit</td>
                            <td width="5%">:</td>
                            <td width="30%">{{ $hewan->riwayat_penyakit }}</td>

                            @if($kategori_reservasi == "Grooming")
                                <td width="15%;">Total Biaya</td>
                                <td width="5%">:</td>
                                <td width="30%">Rp. {{ number_format($biaya_grooming) }}
                                    <input type="hidden" name="biaya_grooming" value="{{ $biaya_grooming }}">
                                </td>
                            @elseif($kategori_reservasi == "Penitipan")
                                <td width="15%;">Ukuran (Biaya per hari)</td>
                                <td width="5%">:</td>
                                <td width="30%">{{ $ukuran_kandang }} (Rp. {{ number_format($biaya_per_hari) }})</td>
                            @endif
                        </tr>
                        <tr>
                            <td width="15%;">Foto Hewan</td>
                            <td width="5%">:</td>
                            <td width="30%"><a href="{{ $hewan->foto_hewan }}" target="_target"><img src="{{ $hewan->foto_hewan }}" width="50px"></a> </td>
                            
                            @if($kategori_reservasi == "Penitipan")
                                <td width="15%;">Total Biaya</td>
                                <td width="5%">:</td>
                                <td width="30%">Rp. {{ number_format($total_biaya) }}
                                    <input type="hidden" name="total_biaya" value="{{ $total_biaya }}">
                                </td>
                            @endif

                        </tr>
                    </table>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <a href="{{ route('reservasi') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                            <button class="btn btn-primary">Ajukan Reservasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection