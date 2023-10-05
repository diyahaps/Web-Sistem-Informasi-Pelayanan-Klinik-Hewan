@extends('layouts.pelanggan')
@section('title','Data Hewan')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Data Hewan</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Data Hewan</a>
        </div>
    </div>
</div>
<div class="container mt-5" style="margin-bottom: 125px;">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Data Hewan</h5>
            </div>
            <p class="mb-4">Data hewan ini adalah data hewan yang dimiliki oleh pelanggan.</p>
        </div>
        <div class="col-md-12">
            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#tambah">
                <i class="fa fa-plus-circle"></i> Tambah
            </button>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive mt-3">
                        @if (session('sukses'))
                            <div class="alert alert-success">
                                {{ session('sukses') }}
                            </div>
                        @endif
                        <table id="datatables" class="table table-striped">
                            <thead class="text-center">
                                <th>No</th>
                                <th style="min-width: 100x;">Foto Hewan</th>
                                <th style="min-width: 100x;">Nama Hewan</th>
                                <th style="min-width: 100x;">Jenis Hewan</th>
                                <th style="min-width: 100x;">Ras Hewan</th>
                                <th style="min-width: 100x;">Umur</th>
                                <th style="min-width: 100x;">Jantan/Betina</th>
                                <th style="min-width: 100px;">Riwayat Penyakit</th>
                                <th style="min-width: 100px;">Aksi</th>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($hewan as $data)
                                <tr class="text-center">
                                    <td>{{ $no }}.</td>
                                    <td><img src="{{ asset($data->foto_hewan) }}" width="50px"></td>
                                    <td>{{ $data->nama_hewan }}</td>
                                    <td>{{ $data->jenis_hewan }}</td>
                                    <td>{{ $data->ras_hewan }}</td>
                                    <td>{{ $data->umur }}</td>
                                    <td>{{ $data->jenis_kelamin_hewan }}</td>
                                    <td>{{ $data->riwayat_penyakit }}</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit{{ $data->id_hewan }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="#" hewan-id="{{ $data->id_hewan }}" hewan-nama="{{ $data->nama_hewan }}" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                                    <!-- Modal Edit-->
                                    <div class="modal fade" id="edit{{ $data->id_hewan }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id=""><i class="fa fa-edit"></i> Update Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('data.hewan.update', $data->id_hewan) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group row py-2">
                                                            <label class="col-sm-4 col-form-label">Nama Hewan</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <input type="text" name="nama_hewan" value="{{ $data->nama_hewan }}" class="form-control @error('nama_hewan') is-invalid @enderror" autocomplete="off">
                                                                @error('nama_hewan')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row py-2">
                                                            <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <select name="jenis_kelamin_hewan" class="form-control @error('jenis_kelamin_hewan') is-invalid @enderror">
                                                                    <option value="">Pilihan</option>
                                                                    <option value="Jantan" @if($data->jenis_kelamin_hewan == 'Jantan') selected @endif>Jantan</option>
                                                                    <option value="Betina" @if($data->jenis_kelamin_hewan == 'Betina') selected @endif>Betina</option>
                                                                </select>
                                                                @error('jenis_kelamin_hewan')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row py-2">
                                                            <label class="col-sm-4 col-form-label">Jenis Hewan</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <input type="text" name="jenis_hewan" value="{{ $data->jenis_hewan }}" class="form-control @error('jenis_hewan') is-invalid @enderror" autocomplete="off">
                                                                @error('jenis_hewan')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row py-2">
                                                            <label class="col-sm-4 col-form-label">Ras Hewan</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <input type="text" name="ras_hewan" value="{{ $data->ras_hewan }}" class="form-control @error('ras_hewan') is-invalid @enderror" autocomplete="off">
                                                                @error('ras_hewan')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row py-2">
                                                            <label class="col-sm-4 col-form-label">Umur Hewan</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <input type="text" name="umur" value="{{ $data->umur }}" class="form-control @error('umur') is-invalid @enderror" autocomplete="off">
                                                                @error('umur')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row py-2 mb-2">
                                                            <label class="col-sm-4 col-form-label">Foto Hewan</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <input type="file" name="foto_hewan" class="form-control @error('foto_hewan') is-invalid @enderror" autocomplete="off">
                                                                <small class="text-info">( Masukan foto baru, jika mau update )</small>
                                                                @error('foto_hewan')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0 row">
                                                            <label class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                                            <div class="col-sm-8 validate-form">
                                                                <textarea type="text" name="riwayat_penyakit" class="form-control @error('riwayat_penyakit') is-invalid @enderror">{{ $data->riwayat_penyakit }}</textarea>
                                                                @error('riwayat_penyakit')
                                                                    <span class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary submitAddHewan">Save changes</button>
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
    </div>
</div>
<!-- Modal Tambah-->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-circle"></i> Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formAddHewan" action="{{ route('data.hewan.post') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Nama Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="nama_hewan" class="form-control @error('nama_hewan') is-invalid @enderror" autocomplete="off">
                            @error('nama_hewan')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8 validate-form">
                            <select name="jenis_kelamin_hewan" class="form-control @error('jenis_kelamin_hewan') is-invalid @enderror">
                                <option value="">Pilihan</option>
                                <option value="Jantan">Jantan</option>
                                <option value="Betina">Betina</option>
                            </select>
                            @error('jenis_kelamin_hewan')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Jenis Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="jenis_hewan" class="form-control @error('jenis_hewan') is-invalid @enderror" autocomplete="off">
                            @error('jenis_hewan')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Ras Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="ras_hewan" class="form-control @error('ras_hewan') is-invalid @enderror" autocomplete="off">
                            @error('ras_hewan')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Umur Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" autocomplete="off">
                            @error('umur')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row py-2 mb-2">
                        <label class="col-sm-4 col-form-label">Foto Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="file" name="foto_hewan" class="form-control @error('foto_hewan') is-invalid @enderror" autocomplete="off">
                            @error('foto_hewan')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-0 row">
                        <label class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                        <div class="col-sm-8 validate-form">
                            <textarea type="text" name="riwayat_penyakit" class="form-control @error('riwayat_penyakit') is-invalid @enderror"></textarea>
                            @error('riwayat_penyakit')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitAddHewan">Save changes</button>
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
            var id      = $(this).attr('hewan-id');
            var nama    = $(this).attr('hewan-nama');
            swal({
              title     : "Informasi",
              text      : "Apakah anda akan menghapus data hewan "+nama+"!",
              icon      : "info",
              buttons   : true,
              dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/data_hewan_hapus/"+id+"";
              }
            });
        });
    </script>
@stop