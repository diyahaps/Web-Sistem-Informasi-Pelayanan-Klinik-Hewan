<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Engil Pet Vet | Cetak Laporan</title>

    <link rel="shortcut icon" href="{{ asset('img') }}/logo_engil.png">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body onload="window.print();" style="background: #fff">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('img') }}/logo_engil.png" alt="logo" width="300">
            </div>
            <div class="col-md-8 text-center">
                <h1>ENGIL PET VET</h1>
                Alamat : Karang RT 02/ RW 06, Plawikan, Jogonalan, Klaten, Klaten, Central Java, Indonesia 57452 <br>
                Nomor HP : 0852-3300-1091
            </div>
        </div>
        <hr style="border: 2px solid #000;">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered mt-3">
                    <tr>
                        <th>No</th>
                        <th>Kode Reservasi</th>
                        <th>Tanggal Reservasi</th>
                        <th>Tanggal dan Jam Booking</th>
                        <th>Kategori</th>
                        <th>Status Pembayaran</th>
                        <th>Sub Total</th>
                    </tr>
                    <tbody>
                        @php
                            $no = 1;
                            $harga_total = 0;
                        @endphp
                        @foreach ($reservasi as $data)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $data->kode_reservasi }}</td>
                            <td>{{ date("d/m/Y", strtotime($data->tgl_reservasi)) }}</td>
                            <td>{{ date("d/m/Y", strtotime($data->tgl_booking)) }} {{ date("H:i", strtotime($data->jam_booking)) }}</td>
                            <td>{{ $data->kategori_reservasi }}</td>
                            <td class="text-success">Lunas</td>
                            <td>Rp. {{ number_format($data->total_biaya) }}</td>
                        </tr>
                        @php
                            $no++;
                            $harga_total += $data->total_biaya;
                        @endphp
                        @endforeach
                        <tr>
                            <th colspan="6" class="text-center">Total Pemasukan dari tanggal {{ date("d/m/Y", strtotime($tgl_mulai)) }} sampai tanggal {{ date("d/m/Y", strtotime($tgl_selesai)) }}</th>
                            <td>Rp. {{ number_format($harga_total) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <b>Yogyakarta, {{ date("d F Y", strtotime($tgl_sekarang)) }}</b> <br>
                <b>Admin</b>
                <br>
                <br>
                <br>
                <br>
                <br>
                <b>{{ Auth::user()->nama_admin }}</b>
            </div>
        </div>
    </div>

</body>
</html>