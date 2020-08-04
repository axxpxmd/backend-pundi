<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tittle -->
    <link rel="icon" href="{{ asset('images/logo-round.png') }}" type="image/x-icon">
    <title>PUNDI</title>

    <!-- CSS -->
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body id="page-top">
    <main>
        <div id="wrapper">
            <!-- Sidebar -->
            @if (Auth::user()->role_id == 2)
                @include('masterPages.sidebar')
            @endif
            @yield('content')
        </div>  
    </main>
</body>
    <script src="{{ asset('./assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('./assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('./assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('./assets/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('./assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('./assets/js/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>
    @yield('script')
</html>
