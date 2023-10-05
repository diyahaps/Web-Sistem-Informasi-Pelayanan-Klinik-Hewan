@extends('layouts.pelanggan')
@section('title','Home')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('template_pelanggan') }}/img/carousel_1.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Praktek Dokter Hewan</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Perawatan terbaik untuk teman berbulu Anda</h1>
                        <a href="{{ route('reservasi') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Reservasi Sekarang!</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('template_pelanggan') }}/img/carousel_2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Praktek Dokter Hewan</h5>
                        <h4 class="display-1 text-white mb-md-4 animated zoomIn">Hewan Sehat Hewan Ceria</h4>
                        <a href="{{ route('reservasi') }}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Reservasi Sekarang!</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid mb-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Tentang Kami</h5>
                </div>
                <p class="mb-4">Engil Pet Vet melayani Pemeriksaan Hewan, Vaksinasi, Grooming dan Penitipan (Anjing & Kucing), dokter hewan panggilan atau bisa langsung datang ke tempat praktik. Menerima konsultasi (gratis), Silahkan melakukan reservasi sekarang.</p>
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Pemeriksaan</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Vaksinasi</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Grooming</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Penitipan</h5>
                    </div>
                </div>
                <a href="{{ route('reservasi') }}" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Reservasi Sekarang!</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/dokter.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
