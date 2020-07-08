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
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   
</head>

<body id="page-top">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid" style="margin-top: 15%">
                <!-- 404 Error Text -->
                <div class="text-center">
                    <div class="error mx-auto" data-text="404">404</div>
                    <p class="lead text-gray-800 mb-4">Page Not Found</p>
                    <p class="text-gray-500 mb-3">Sorry, the page you are looking for could not be found.</p>
                    <button class="btn btn-outline-primary" type="button" onclick="history.back();">Back</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
