@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <!-- Begin Page -->
        <div class="container-fluid">
            @if ($role == 'user')
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">User</h1>
                </div>
                <div class="card p-3">
                    <button class="btn btn-info col-md-1 mb-3"><a href="" class="text-white text-decoration-none">Tambah Data</a></button>
                    @include('masterPages.table_user')
                </div>
            @else
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Admin</h1>
                </div>
                <div class="card p-3">
                    <button class="btn btn-info col-md-1 mb-3"><a href="" class="text-white text-decoration-none">Tambah Data</a></button>
                    @include('masterPages.table_admin')
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
