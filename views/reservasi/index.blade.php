@extends('layouts.pelanggan')
@section('title','Reservasi')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Reservasi</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('reservasi') }}" class="h4 text-white">Reservasi</a>
        </div>
    </div>
</div>
<div class="container mt-5" style="margin-bottom: 85px;">
    <div class="row">
        <div class="col-md-3">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Reservasi</h5>
            </div>
            <p class="mb-4">Anda dapat melakukan reservasi secara online disini, silahkan reservasi sesuai kebutuhan hewan anda.</p>
            <div class="row g-3">
                <div class="col-sm-12 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Grooming</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Pemeriksaan</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Penitipan</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Vaksinasi</h5>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <form id="dataForm" action="{{ route('reservasi.info.detail') }}" method="get" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        @endif
                        @if (session('sukses'))
                            <div class="alert alert-success">
                                {{ session('sukses') }}
                            </div>
                        @endif
                        <b class="py-3">Data Hewan</b>
                        <br>
                        <button type="button" class="btn btn-warning mt-4 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-plus-circle"></i> Tambah
                        </button>
                        <table id="datatables" class="table table-hover">
                            <thead class="text-center">
                                <th>Pilihan</th>
                                <th>Foto Hewan</th>
                                <th>Nama Hewan</th>
                                <th>Jenis Hewan</th>
                                <th>Ras Hewan</th>
                                <th>Umur</th>
                                <th>Jantan/Betina</th>
                            </thead>
                            <tbody>
                                @foreach($hewan as $data)
                                <tr class="text-center validate-form">
                                    <td>
                                        <input type="checkbox" class="form-check-input cekHewanId" name="hewan_id" value="{{ $data->id_hewan }}">
                                    </td>
                                    <td><img src="{{ asset($data->foto_hewan) }}" width="50px"></td>
                                    <td>{{ $data->nama_hewan }}</td>
                                    <td>{{ $data->jenis_hewan }}</td>
                                    <td>{{ $data->ras_hewan }}</td>
                                    <td>{{ $data->umur }}</td>
                                    <td>{{ $data->jenis_kelamin_hewan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <b>Detail Reservasi</b>
                        <br>
                        <div class="form-group row py-2">
                            <label class="col-sm-3 col-form-label">Kategori Reservasi</label>
                            <div class="col-sm-9 validate-form">
                                <select id="kategori" name="kategori_reservasi" class="form-control">
                                    <option value="">Pilihan</option>
                                    <option value="Grooming">Grooming</option>
                                    <option value="Pemeriksaan">Pemeriksaan</option>
                                    <option value="Penitipan">Penitipan</option>
                                    <option value="Vaksinasi">Vaksinasi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-3">
                            <label class="col-sm-3 col-form-label">Tgl & jam booking</label>
                            <div class="col-sm-9 validate-form">
                                <div class="form-group">
                                    <div class="input-group date" id="datetime" data-target-input="nearest">
                                        <input type="text" name="waktu_booking" class="form-control datetimepicker-input" data-target="#datetime"/>
                                        <div class="input-group-append" data-target="#datetime" data-toggle="datetimepicker">
                                            <div class="input-group-text" style="height: 38px;"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="jenisGrooming" style="display: none;">
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Jenis Grooming</label>
                                <div class="col-sm-9 validate-form">
                                    <select name="jenis_grooming" class="form-control">
                                        <option value="">Pilihan</option>
                                        @foreach($grooming as $data)
                                            <option value="{{ $data->id_grooming }}">{{ $data->jenis_grooming }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Total Biaya</label>
                                <div class="col-sm-9 validate-form">
                                    <input type="text" class="form-control" name="total_biaya" readonly>
                                </div>
                            </div>
                        </section>
                        <section id="ukuranKandang" style="display: none;">
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Tanggal Mulai</label>
                                <div class="col-sm-9 validate-form">
                                    <div class="form-group">
                                        <div class="input-group date" id="tgl_mulai" data-target-input="nearest">
                                            <input type="text" name="tgl_mulai" class="form-control datetimepicker-input" data-target="#datetime"/>
                                            <div class="input-group-append" data-target="#tgl_mulai" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 38px;"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Tanggal Selesai</label>
                                <div class="col-sm-9 validate-form">
                                    <div class="form-group">
                                        <div class="input-group date" id="tgl_selesai" data-target-input="nearest">
                                            <input type="text" name="tgl_selesai" class="form-control datetimepicker-input" data-target="#datetime"/>
                                            <div class="input-group-append" data-target="#tgl_selesai" data-toggle="datetimepicker">
                                                <div class="input-group-text" style="height: 38px;"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Untuk Hewan</label>
                                <div class="col-sm-9 validate-form">
                                    <select name="kandang_hewan" class="form-control">
                                        <option value="">Pilihan</option>
                                        @foreach($kandang as $data)
                                            <option value="{{ $data->kandang_hewan }}">{{ $data->kandang_hewan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Ukuran Kandang</label>
                                <div class="col-sm-9 validate-form">
                                    <select name="ukuran_kandang" class="form-control">
                                        <option value="">Pilihan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row py-2">
                                <label class="col-sm-3 col-form-label">Biaya per hari </label>
                                <div class="col-sm-9 validate-form">
                                    <input type="text" class="form-control" name="biaya_per_hari" readonly>
                                </div>
                            </div>
                        </section>

                        <div id="statusVaksin" class="form-group row py-2" style="display: none;">
                            <label class="col-sm-3 col-form-label">Status Vaksin</label>
                            <div class="col-sm-9 validate-form">
                                <select name="status_vaksin" class="form-control">
                                    <option value="">Pilihan</option>
                                    <option value="Sudah pernah">Sudah pernah</option>
                                    <option value="Belum pernah">Belum pernah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-2 mb-0 row">
                            <label class="col-sm-3 col-form-label">Keterangan/Keluhan</label>
                            <div class="col-sm-9 validate-form">
                                <textarea type="text" name="keterangan" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary submit mt-3">Selanjutnya <i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-circle"></i> Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formAddHewan" action="{{ route('tambah.hewan') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Nama Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="nama_hewan" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8 validate-form">
                            <select name="jenis_kelamin_hewan" class="form-control">
                                <option value="">Pilihan</option>
                                <option value="Jantan">Jantan</option>
                                <option value="Betina">Betina</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Jenis Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="jenis_hewan" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Ras Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="ras_hewan" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <label class="col-sm-4 col-form-label">Umur Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="text" name="umur" class="form-control @error('umur') is-invalid @enderror" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row py-2 mb-2">
                        <label class="col-sm-4 col-form-label">Foto Hewan</label>
                        <div class="col-sm-8 validate-form">
                            <input type="file" name="foto_hewan" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group mb-0 row">
                        <label class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                        <div class="col-sm-8 validate-form">
                            <textarea type="text" name="riwayat_penyakit" class="form-control"></textarea>
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
@section('jsReservasi')
<script type="text/javascript">
    $(document).on('change', '#kategori', function () {
        if($('#kategori').val() == "Grooming"){
            $('#jenisGrooming').show();
            $('#ukuranKandang').hide();
            $('#statusVaksin').hide();
        }else if($('#kategori').val() == "Pemeriksaan"){
            $('#jenisGrooming').hide();
            $('#ukuranKandang').hide();
            $('#statusVaksin').hide();
        }else if($('#kategori').val() == "Penitipan"){
            $('#jenisGrooming').hide();
            $('#ukuranKandang').show();
            $('#statusVaksin').hide();
        }else if($('#kategori').val() == "Vaksinasi"){
            $('#jenisGrooming').hide();
            $('#ukuranKandang').hide();
            $('#statusVaksin').show();


        }else{
            $('#jenisGrooming').hide();
            $('#ukuranKandang').hide();
            $('#statusVaksin').hide();
        }        
        $('select[name="kandang_hewan"]').on('change', function() {
            let kandangId = $(this).val();
            if (kandangId) {
                jQuery.ajax({
                    url     :'/kandang/'+kandangId+'/info',
                    type    :"GET",
                    dataType:"json",
                    success:function(data) {
                        $('select[name="ukuran_kandang"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="ukuran_kandang"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    },
                });
            } else {
                $('select[name="ukuran_kandang"]').empty();
            }
        });

        $('select[name="ukuran_kandang"]').on('change', function() {
            let sizeKandang = $(this).val();
            if (sizeKandang) {
                jQuery.ajax({
                    url     :'/kandang/'+sizeKandang+'/size',
                    type    :"GET",
                    dataType:"json",
                    success:function(data) {
                        $('input[name="biaya_per_hari"]').empty();
                        $.each(data, function (key, value) {
                            $('input[name="biaya_per_hari"]').val(value);
                        });
                    },
                });
            } else {
                $('input[name="biaya_per_hari"]').val('');
            }
        });

        $('select[name="jenis_grooming"]').on('change', function() {
            let groomingId = $(this).val();
            if (groomingId) {
                jQuery.ajax({
                    url     :'/grooming/'+groomingId+'/info',
                    type    :"GET",
                    dataType:"json",
                    success:function(data) {
                        $('input[name="total_biaya"]').empty();
                        $.each(data, function (key, value) {
                            $('input[name="total_biaya"]').val(key);
                        });
                    },
                });
            } else {
                $('input[name="total_biaya"]').val('');
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".submit").click(function(){
            var form 		    = $("#dataForm");
            form.validate({
                rules: {
                    hewan_id            : { required: true,},
                    kategori_reservasi  : { required: true,},
                    waktu_booking       : { required: true,},
                    jenis_grooming      : { required: true,},
                    tgl_mulai           : { required: true,},
                    tgl_selesai         : { required: true,},
                    ukuran_kandang      : { required: true,},
                    status_vaksin       : { required: true,},
                    keterangan          : { required: true,},
                },
                messages: {
                    hewan_id            : { required: '<i class="fa fa-info-circle"></i>',},
                    kategori_reservasi  : { required: '<i class="fa fa-info-circle"></i>',},
                    waktu_booking       : { required: '<i class="fa fa-info-circle"></i>',},
                    jenis_grooming      : { required: '<i class="fa fa-info-circle"></i>',},
                    tgl_mulai           : { required: '<i class="fa fa-info-circle"></i>',},
                    tgl_selesai         : { required: '<i class="fa fa-info-circle"></i>',},
                    status_vaksin       : { required: '<i class="fa fa-info-circle"></i>',},
                    ukuran_kandang      : { required: '<i class="fa fa-info-circle"></i>',},
                    status_vaksin       : { required: '<i class="fa fa-info-circle"></i>',},
                    keterangan          : { required: '<i class="fa fa-info-circle"></i>',},
                }
            })
            
            if(form.valid() != true){
                console.log("Tidak");
            }
            if(form.valid() == true){
                console.log("Ya");
                if (confirm("Apakah anda akan melanjutkan?") == true) {
                    $("#dataForm").submit();
                }
            }
        });
    });
    $(document).ready(function(){
        $(".submitAddHewan").click(function(){
            var form 		    = $("#formAddHewan");
            form.validate({
                rules: {
                    nama_hewan          : { required: true,},
                    jenis_kelamin_hewan : { required: true,},
                    jenis_hewan         : { required: true,},
                    ras_hewan           : { required: true,},
                    umur                : { required: true,},
                    foto_hewan          : { required: true,},
                    riwayat_penyakit    : { required: true,},
                },
                messages: {
                    nama_hewan          : { required: '<i class="fa fa-info-circle"></i>',},
                    jenis_kelamin_hewan : { required: '<i class="fa fa-info-circle"></i>',},
                    jenis_hewan         : { required: '<i class="fa fa-info-circle"></i>',},
                    ras_hewan           : { required: '<i class="fa fa-info-circle"></i>',},
                    umur                : { required: '<i class="fa fa-info-circle"></i>',},
                    foto_hewan          : { required: '<i class="fa fa-info-circle"></i>',},
                    riwayat_penyakit    : { required: '<i class="fa fa-info-circle"></i>',},
                }
            })
            
            if(form.valid() != true){
                alert("Silahkan lengkapi data dengan benar.");
            }
            if(form.valid() == true){
                console.log("Ya");
                if (confirm("Apakah anda akan melanjutkan?") == true) {
                    $("#formAddHewan").submit();
                }
            }
        });
    });
</script>
@endsection