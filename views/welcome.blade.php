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

    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-4 wow zoomIn card" data-wow-delay="0.1s" style="background-color: #06a3da;">
                    <div class="d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Jam Operasional</h3>
                        <br>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Senin - Sabtu</h6>
                            <p class="mb-0"> 08:00 - 16:30</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Minggu</h6>
                            <p class="mb-0"> 08:00 - 15:00</p>
                        </div>
                        <br>
                        <a class="btn btn-light" href="{{ route('reservasi') }}">Reservasi</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn card" data-wow-delay="0.3s" style="background-color: #091e3e;">
                    <div class="d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Melayani</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Pemeriksaan</h6>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Vaksinasi</h6>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Penitipan Hewan</h6>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Grooming</h6>
                        </div>
                        <a class="btn btn-light" href="{{ route('reservasi') }}">Reservasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->

<!-- About Start -->
<div class="container-fluid mb-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Tentang Kami</h5>
                </div>
                <h4 class="text-body fst-italic mb-4">Engil Pet Vet Klaten</h4>
                <p class="mb-4">Kami percaya bahwa setiap hewan memiliki kesempatan yang sama untuk mendapatkan pelayanan kesehatan yang terbaik, demi mewujudkan kesejahteraan hewan. Karena bagi mereka, kitalah seumur hidupnya.</p>
                <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i> Dokter Hewan Terpercaya</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i> Pelayanan Cepat</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Solusi Terbaik</h5>
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

    <!--Contact-->
    <section class="section-padding" id="contact">
    <div class="container" >
    <h1 class="display-5 mb-0 text-center mb-5">Contact</h1>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15814.490948792365!2d110.5650507!3d-7.7235637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed2097833a73b6a2!2sEngil%20Pet%20Vet!5e0!3m2!1sid!2sid!4v1674054732608!5m2!1sid!2sid" width="80%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </center>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h3 class="post-subheading"> Contact</h3>
                <a href="tel:+62-852-3300-1091" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight text-white" 
                jslog="56037; track:impression,click" data-tracking-element-type="3" itemprop="telephone" dir="ltr">Contact Now</a>
                <p></p><p>0852-3300-1091 </p>          
            </div>
            <div class="col-md-3">
                <h3 class="post-subheading"> Address</h3>
                <a href="https://www.google.com/maps/dir//Engil+Pet+Vet/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e7a45770db14f8b:0xed2097833a73b6a2!2m2!1d110.56504269999999!2d-7.7236297" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight text-white" 
                jslog="56039; track:impression,click" data-tracking-element-type="6">Get Directions</a>  
                <p></p><p>Karang, RT 02/06, Karak, Plawikan, Kec. Jogonalan, Kabupaten Klaten, Jawa Tengah 57452</p>
                <p></p>    
            </div>
        </div>

    </div>
    </section>
    <!--End Contact--->

@endsection
