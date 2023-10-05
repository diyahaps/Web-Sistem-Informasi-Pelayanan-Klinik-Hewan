@extends('layouts.pelanggan')
@section('title','Pelayanan')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Pelayanan</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('site.index') }}" class="h4 text-white">Pelayanan</a>
        </div>
    </div>
</div>
<!-- Pricing Start -->
<div class="container-fluid mb-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Pelayanan Kami</h5>
                    <h1 class="display-5 mb-0">Kesehatan hewan anda menjadi tujuan kami</h1>
                </div>
                <p class="mb-4">Anda dapat melakukan reservasi secara online disini, silahkan reservasi sesuai kebutuhan hewan anda.</p>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="{{ asset('img') }}/grooming_bg.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h2 class="text-primary m-0"><i class="fa fa-paw"></i></h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Grooming</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Grooming Sehat</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Groming Kutu</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Dan Lainnya</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('reservasi') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Reservasi!</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="{{ asset('img') }}/periksa_bg.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h2 class="text-primary m-0"><i class="fa fa-stethoscope"></i></h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Pemeriksaan</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Penyakit Dalam</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Penyakit Luar</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Dan Lainnya</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('reservasi') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Reservasi!</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="{{ asset('img') }}/kandang_bg.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h2 class="text-primary m-0"><i class="fa fa-recycle"></i></h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Penitipan</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Kandang Anjing</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Kandang Kucing</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Ukuran M, L & XL</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('reservasi') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Reservasi!</a>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="{{ asset('img') }}/vaksin_bg.jpg" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h2 class="text-primary m-0"><i class="fa fa-flask"></i></h2>
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Vaksinasi</h4>
                            <hr class="text-primary w-50 mx-auto mt-0">
                            <div class="d-flex justify-content-between mb-3"><span>Bordetella Bronchiseptica</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Distemper Anjing</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Dan Lainnya</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="{{ route('reservasi') }}" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Reservasi!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing End -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                    @foreach ($grooming as $item)
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{ asset($item->foto_grooming) }}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0" style="font-size: 18px;">Rp. {{ number_format($item->biaya_grooming) }}</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>{{ $item->jenis_grooming }}</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3" style="text-align: justify">
                                    <span>{{ $item->keterangan_grooming }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Grooming</h5>
                    <h1 class="display-5 mb-0" style="font-size: 27px;">Rp. {{ number_format($minGrooming) }} - Rp. {{ number_format($maxGrooming) }}</h1>
                </div>
                <p class="mb-4">Daftar biaya grooming berdasarkan jenis dan hewan grooming.</p>
                <a href="{{ route('reservasi') }}" class="btn btn-primary mt-4 wow zoomIn" data-wow-delay="0.6s">Reservasi Sekarang!</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Vaksin</h5>
                    <h1 class="display-5 mb-0" style="font-size: 27px;">Rp. {{ number_format($minVaksin) }} - Rp. {{ number_format($maxVaksin) }}</h1>
                </div>
                <p class="mb-4">Daftar biaya vaksin.</p>
                <a href="{{ route('reservasi') }}" class="btn btn-primary mt-4 wow zoomIn" data-wow-delay="0.6s">Reservasi Sekarang!</a>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                    @foreach ($vaksin as $item)
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{ asset($item->foto_vaksin) }}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0" style="font-size: 18px;">Rp. {{ number_format($item->harga_vaksin) }}</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>{{ $item->nama_vaksin }}</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3" style="text-align: justify">
                                    <span>{{ $item->keterangan_vaksin }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                    @foreach ($kandang as $item)
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{ asset($item->foto_kandang) }}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0" style="font-size: 18px;">Rp. {{ number_format($item->biaya_per_hari) }}</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Tersedia {{ $item->jumlah_tersedia }} Box</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3" style="text-align: justify">
                                    <table class="table">
                                        <tr>
                                            <td>Untuk hewan</td>
                                            <td><b>{{ $item->kandang_hewan }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Ukuran</td>
                                            <td><b>{{ $item->ukuran_kandang }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang</td>
                                            <td><b>{{ $item->panjang }}</b> cm</td>
                                        </tr>
                                        <tr>
                                            <td>Lebar</td>
                                            <td><b>{{ $item->lebar }}</b> cm</td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi</td>
                                            <td><b>{{ $item->tinggi }}</b> cm</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Penitipan</h5>
                    <h1 class="display-5 mb-0" style="font-size: 27px;">Rp. {{ number_format($minKandang) }} - Rp. {{ number_format($maxKandang) }}</h1>
                </div>
                <p class="mb-4">Daftar biaya sewa kandang/penitipan hewan perharinya.</p>
                <a href="{{ route('reservasi') }}" class="btn btn-primary mt-4 wow zoomIn" data-wow-delay="0.6s">Reservasi Sekarang!</a>
            </div>
        </div>
    </div>
</div>



@endsection