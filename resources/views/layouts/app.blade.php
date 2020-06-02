<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('images/logo-round.png') }}" type="image/x-icon">
    <title>PUNDI</title>

    <!-- CSS -->
    @yield('css')
    {{-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body id="page-top">
    <!-- Preloader -->
    {{-- @include('masterPages.preloader') --}}

    <main>
        <!-- Page Wrapper -->
        <div id="wrapper">
            @yield('content')
        </div>  
    </main>
</body>

    @yield('script')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('./assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('./assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('./assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="{{ asset('./assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('./assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('./assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('./assets/js/demo/chart-pie-demo.js') }}"></script>
    
</html>
