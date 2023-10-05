<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cetak Rekam Medis | Engil Pet Vet</title>
    <link rel="shortcut icon" href="{{ asset('img') }}/logo_engil.png">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body onload="window.print();" style="background: #fff">
    <div class="container mt-5">
        <div class="row">
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
        </div>
        <hr style="border: 2px solid #000;">
        <h4>
            <b>KARTU REKAM MEDIS</b>
        </h4>
        <i>Nomor Kartu : {{ $reservasi->kode_reservasi }}</i>
        <div class="row mt-3">
            <div class="col-md-6">
                <b>Data Pelanggan</b>
                <table style="width: 100%;">
                    <tr>
                        <td width="20%">Nama Pemilik</td>
                        <td width="30%">: {{ $reservasi->name }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Email</td>
                        <td width="30%">: {{ $reservasi->email }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Nomor HP</td>
                        <td width="30%">: {{ $reservasi->no_hp }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Alamat</td>
                        <td width="30%">: {{ $reservasi->alamat_lengkap }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <b>Data Hewan</b>
                <table style="width: 100%;">
                    <tr>
                        <td width="20%">Nama Hewan</td>
                        <td width="30%">: {{ $reservasi->nama_hewan }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Jenis Hewan</td>
                        <td width="30%">: {{ $reservasi->jenis_hewan }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Jantan/Betina</td>
                        <td width="30%">: {{ $reservasi->jenis_kelamin_hewan }}</td>
                    </tr>
                    <tr>
                        <td width="20%">Umur</td>
                        <td width="30%">: {{ $reservasi->umur }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <b>Hasil Rekam Medis</b>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <th>No.</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Dokter</th>
                        <th>Anamnesa, Gejala Klinis dan Keterangan Lain </th>
                        <th>Diagnosa, DDx dan Treatment</th>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($rekam_medis as $data)  
                        <tr>
                            <td>{{ $no }}.</td>
                            <td class="text-center">{{ date("d F Y", strtotime($reservasi->tgl_booking)) }}</td>
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
        <div class="row mt-3">
            <div class="col-md-12">
                <b>Data Obat</b>
                <table class="table table-bordered">
                    <thead>
                        <th>No.</th>
                        <th>Nama Obat </th>
                        <th>Jenis Obat</th>
                        <th>jumlah</th>
                        <th>Aturan Pakai</th>
                    </thead>
                    <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($detail_reservasi as $data)     
                        <tr>
                            <td>{{ $no }}.</td>
                            <td>{{ $data->nama_obat }}</td>
                            <td>{{ $data->jenis_obat }}</td>
                            <td>{{ $data->jumlah_beli }} {{ $data->satuan }}</td>
                            <td>{{ $data->aturan_pakai }}</td>
                        </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <b>Yogyakarta, {{ date("d F Y", strtotime($reservasi->tgl_booking)) }}</b> <br>
                <b>Dokter</b>
                <br>
                <br>
                <br>
                <br>
                <br>
                <b>{{ Auth::user()->nama_dokter }}</b>
            </div>
        </div>
    </div>

</body>
</html>