@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <!-- Begin Page -->
        <div class="container-fluid">
            <!-- Alerts Success-->
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-md-5" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif  
            <!-- Alerts Error -->
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show col-md-5">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Whoops Error!</strong>&nbsp;
                    <span>You have {{ $errors->count() }} error</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($section == 'user')
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Akun User</h1>
                </div>
                <div class="card p-3">
                    <button class="btn btn-info col-md-1 mb-3"><a href="{{ route('master-user.tambah') }}" class="text-white text-decoration-none">Tambah Data</a></button>
                    @include('pages.masterUser.table_user')
                </div>
            @elseif($section == 'admin')
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Akun Admin</h1>
                </div>
                <div class="card p-3">
                    <button class="btn btn-info col-md-1 mb-3"><a href="{{ route('master-user.tambah') }}" class="text-white text-decoration-none">Tambah Data</a></button>
                    @include('pages.masterUser.table_admin')
                </div>
            @elseif($section == 'tambah')
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
                </div>
                <div class="card p-3">
                    @include('pages.masterUser.tambah')
                </div>  
            @else
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
                </div>
                <div class="card p-3">
                    @include('pages.masterUser.edit')
                </div>  
            @endif
        </div>
    </div>
</div>

@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
