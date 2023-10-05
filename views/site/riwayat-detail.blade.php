@extends('layouts.pelanggan')
@section('title','Riwayat Details')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Riwayat Details</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Riwayat Details</a>
        </div>
    </div>
</div>
<div class="container mt-5" style="margin-bottom: 125px;">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Riwayat Details</h5>
            </div>
            <p class="mb-4">Data riwayat reservasi ini berdasarkan transaksi yang dilakukan oleh masing-masing pelanggan.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Informasi Antrian
                </div>
                <div class="card-body text-center">
                    <h1>{{ $reservasi->nomor_antrian }}</h1>
                    <p>Tanggal {{ date("d F Y", strtotime($reservasi->tgl_booking)) }}, {{ $reservasi->jam_booking }} WIB</p>
                    <span class="text-info">{{ $reservasi->status_reservasi }}</span>
                </div>
                
                @if($reservasi->status_reservasi == "Booking")
                    <div class="card-footer text-center">
                        <a href="#" reservasi-id="{{ $reservasi->id_reservasi }}" reservasi-nama="{{ $reservasi->kode_reservasi }}" class="btn btn-danger mt-3 mb-3 batal"><i class="fa fa-times"></i> Batal</a>
                    </div>
                @endif
                @if($reservasi->status_reservasi == "Menunggu pembayaran")
                    <div class="card-footer text-center">
                        @if($pembayaran == null)
                            <form class="form-horizontal checkout-form" onsubmit="return submitForm();">
                                <input type="hidden" name="reservasi_id" id="reservasi_id" value="{{ $reservasi->id_reservasi }}">
                                <input type="hidden" name="total_pembayaran" id="total_pembayaran" value="{{ $reservasi->total_biaya }}">
                                <button id="submit" class="btn btn-warning mt-3 mb-3">Bayar Sekarang!</button>
                            </form>
                        @else
                            <button class="btn btn-success mt-3 mb-3" onclick="snap.pay('{{ $pembayaran->snap_token }}')">Selesaikan pembayaran!</button>
                        @endif
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <b>Data Hewan</b>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset($reservasi->foto_hewan) }}" width="200px">
                        </div>
                    </div>
                    <table class="table table-bordered" style="width: 100%;">
                        <tr>
                            <td width="30%">Nama Hewan</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->nama_hewan }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Kelamin Hewan</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->jenis_kelamin_hewan }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Jenis Hewan</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->jenis_hewan }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Ras Hewan</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->ras_hewan }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Umur Hewan</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->umur }}</td>
                        </tr>
                    </table>
                    <p class="mt-3"><b>Details Reservasi</b></p>
                    <table class="table table-bordered mt-2" style="width: 100%;">
                        <tr>
                            <td width="30%">Kode Reservasi</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->kode_reservasi }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Tanggal Reservasi</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ date("d F Y", strtotime($reservasi->tgl_reservasi)) }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Kategori Reservasi</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->kategori_reservasi }}</td>
                        </tr>

                        @if($reservasi->kategori_reservasi == "Grooming")
                        <tr>
                            <td width="30%">Jenis Grooming</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $jgrooming }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Total Biaya</td>
                            <td class="text-center" width="5%">:</td>
                            <td>Rp. {{ number_format($bgrooming) }}</td>
                        </tr>
                        @endif

                        @if($reservasi->kategori_reservasi == "Penitipan")
                        <tr>
                            <td width="30%">Tanggal Mulai</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ date("d F Y", strtotime($reservasi->tgl_mulai)) }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Tanggal Selesai</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ date("d F Y", strtotime($reservasi->tgl_selesai)) }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Durasi</td>
                            <td class="text-center" width="5%">:</td>
                            <td>{{ $reservasi->durasi }} hari</td>
                        </tr>
                        <tr>
                            <td width="30%">Biaya per hari</td>
                            <td class="text-center" width="5%">:</td>
                            <td>Rp. {{ number_format($biaya_per_hari) }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Total Biaya</td>
                            <td class="text-center" width="5%">:</td>
                            <td>Rp. {{ number_format($biaya_per_hari*$reservasi->durasi) }}</td>
                        </tr>
                        @endif
                    </table>

                    @if($reservasi->kategori_reservasi == "Pemeriksaan")
                        @if($cekjumlah != 0)
                            <b class="mt-3">Data Obat</b>
                            <table class="table">
                                <thead>
                                    <th>Foto</th>
                                    <th>Informasi</th>
                                    <th>Qty</th>
                                    <th>Biaya</th>
                                    <th>Aturan Pakai</th>
                                </thead>
                                <tbody>
                                    @foreach ($detail_reservasi as $data)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($data->foto_obat) }}" width="50px">
                                            </td>
                                            <td>
                                                <b>{{ $data->kode_obat }} - {{ $data->nama_obat }}</b> <br>
                                                <b>Jenis : {{ $data->jenis_obat }}</b> <br>
                                                <b>Expired : {{ date("d/m/Y", strtotime($data->tgl_expired)) }}</b>
                                            </td>
                                            <td>{{ $data->jumlah_beli }} {{ $data->satuan }}</td>
                                            <td>Rp. {{ number_format($data->jumlah_harga) }} </td>
                                            <td>{{ $data->aturan_pakai }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    @endif

                    @if($reservasi->kategori_reservasi == "Vaksinasi")
                        @if($reservasi->vaksin_id != NULL)
                            <b class="mt-3">Data Vaksin</b>
                            <div class="media mt-3">
                                <img src="{{ asset($vaksin2->foto_vaksin) }}" class="mr-3" width="200px">
                                <div class="media-body">
                                    <h5 class="mt-2">{{ $vaksin2->nama_vaksin }}</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Untuk hewan : {{ $vaksin2->jenis_hewan }}</li>
                                        <li class="list-group-item">Qty : 1 Vaksin</li>
                                        <li class="list-group-item">Total Biaya : Rp. {{ number_format($vaksin2->harga_vaksin) }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>

<script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}">
</script>

<script>
function submitForm() {
    // Kirim request ajax
    console.log("ya");
    $.post("{{ route('pembayaran.lunas') }}",
    {
        _method             : 'POST',
        _token              : '{{ csrf_token() }}',
        reservasi_id        : $('input#reservasi_id').val(),
        total_pembayaran    : $('input#total_pembayaran').val(),
    },
    function (data, status) {
        snap.pay(data.snap_token, {
            // Optional
            onSuccess: function (result) {
                window.location.href = "http://127.0.0.1:8000/riwayat_reservasi";
            },
            // Optional
            onPending: function (result) {
                window.location.href = "http://127.0.0.1:8000/riwayat_reservasi";
            },
            // Optional
            onError: function (result) {
                window.location.href="http://127.0.0.1:8000/riwayat_reservasi";
            }
        });
    });
    return false;
}
</script>
@endsection
@section('sweetAlert')
    <script type="text/javascript">
        $('.batal').click(function()
        {
            var id      = $(this).attr('reservasi-id');
            var nama    = $(this).attr('reservasi-nama');
            swal({
              title     : "Warning",
              text      : "Apakah reservasi "+nama+" akan dibatalkan?",
              icon      : "warning",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/reservasi_batal/"+id+"/post";
              }
            });
        });
    </script>
@stop