<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('template_admin') }}/modules/bootstrap-social/bootstrap-social.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="shortcut icon" href="{{ asset('img') }}/logo_engil.png">
    <link rel="stylesheet" href="{{ asset('template_admin') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('template_admin') }}/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>
<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('template_admin') }}/modules/jquery.min.js"></script>
    <script src="{{ asset('template_admin') }}/modules/popper.js"></script>
    <script src="{{ asset('template_admin') }}/modules/tooltip.js"></script>
    <script src="{{ asset('template_admin') }}/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('template_admin') }}/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('template_admin') }}/modules/moment.min.js"></script>
    <script src="{{ asset('template_admin') }}/js/stisla.js"></script>
    
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
    
    <!-- Template JS File -->
    <script src="{{ asset('template_admin') }}/js/scripts.js"></script>
    <script src="{{ asset('template_admin') }}/js/custom.js"></script>
</body>
</html>