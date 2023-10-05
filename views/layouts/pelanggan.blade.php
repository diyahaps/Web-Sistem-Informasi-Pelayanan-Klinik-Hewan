<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Engil Pet Vet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('template_pelanggan') }}/img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template_pelanggan') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('template_pelanggan') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('template_pelanggan') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="{{ asset('template_pelanggan') }}/lib/twentytwenty/twentytwenty.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template_pelanggan') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('template_pelanggan') }}/css/style.css" rel="stylesheet">
    <style>
		.validate-form label{
			color: red;
			font-size: 12px;
		}
    </style>
</head>
<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Buka: Senin - Sabtu : 08.00 s.d 16.00 WIB, Minggu : 08.00 s.d 14.00 WIB </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>engilpetvet@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>0852-3300-1091</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><img src="{{ asset('img') }}/logo_engil.png" alt=""></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="{{ route('site.index') }}" class="nav-item nav-link">Pelayanan</a>
                @guest
                @else
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('data.riwayat.pelanggan') }}" class="dropdown-item">Riwayat Reservasi</a>
                            <a href="{{ route('data.hewan.pelanggan') }}" class="dropdown-item">Data Hewan</a>
                        </div>
                    </div>
                @endguest
            </div>
            @guest
                <a href="{{ route('login') }}" class="btn btn-warning py-2 px-4 ms-3"><i class="fa fa-sign-in-alt"></i> Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3"><i class="fa fa-user-friends"></i> Daftar</a>
            @else
                <a href="/user/logout" class="btn btn-danger py-2 px-4 ms-3"><i class="fa fa-sign-out-alt"></i> Logout</a>
            @endguest
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -10px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Main Menu</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="/pelayanan"><i class="bi bi-arrow-right text-primary me-2"></i>Pelayanan</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h3 class="text-white mb-4">Informasi</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Karang RT 02/ RW 06, Plawikan, Jogonalan, Klaten, Klaten, Central Java, Indonesia 57452</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>engilpetvet@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0852-3300-1091</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Media Sosial Kami</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/Engil-Pet-Vet-107130710979317/posts/"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://id.linkedin.com/in/nimas-hapsari-03a06988"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.instagram.com/engilpetvet/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Engil Pet Vet</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/twentytwenty/jquery.event.move.js"></script>
    <script src="{{ asset('template_pelanggan') }}/lib/twentytwenty/jquery.twentytwenty.js"></script>

    <script src="{{ asset('template_admin') }}/modules/datatables/datatables.min.js"></script>
    <script src="{{ asset('template_admin') }}/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable();
        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('sweetAlert')
    
    <!-- Template Javascript -->
    <script src="{{ asset('template_pelanggan') }}/js/main.js"></script>
    @yield('jsReservasi')
    <script type="text/javascript">
        $("input:checkbox").on('click', function() {
            var $box = $(this);
            if ($box.is(":checked")) {
                var group = "input:checkbox[name='" + $box.attr("name") + "']";
                $(group).prop("checked", false);
                $box.prop("checked", true);
            } else {
                $box.prop("checked", false);
            }
        });
        $('#onBaru').on('click', function() {
            var $box = $(this);
            if ($box.is(":checked")) {
                $('#hewanBaru').show();
                $('#hewanData').hide();
                $(".cekHewanId").prop('checked',false);
            }else{
                $('#hewanBaru').hide();
                $('#hewanData').hide();
            }
        });
        $('#onData').on('click', function() {
            var $box = $(this);
            if ($box.is(":checked")) {
                $('#hewanData').show();
                $('#hewanBaru').hide();
                $('input[name="nama_hewan"]').val('');  
                $('select[name="jenis_kelamin_hewan"]').val('');
                $('input[name="jenis_hewan"]').val('');
                $('input[name="ras_hewan"]').val('');
                $('input[name="umur"]').val('');
                $('input[name="foto_hewan"]').val('');  
                $('textarea[name="riwayat_penyakit"]').val('');  
            }else{
                $('#hewanBaru').hide();
                $('#hewanData').hide();
            }
        });
    </script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
    </script>
</body>
</html>