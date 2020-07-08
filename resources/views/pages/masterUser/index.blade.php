@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
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
            <!-- Content -->
            @if ($section == 'user')
            <div class="card mt-2">
                <h5 class="card-header bg-aqua"><i class="fa fa-user mr-3"></i>Akun User </h5>
                <div class="card-body">
                    @include('pages.masterUser.table_user')
                </div>
            </div>
            @elseif($section == 'admin')
            <div class="card mt-2">
                <h5 class="card-header"><i class="fa fa-user-secret mr-3"></i>Akun Admin</h5>
                <div class="card-body">
                    @include('pages.masterUser.table_admin')
                </div>
            </div>
            @elseif($section == 'tambah')
            <div class="card mt-2">
                <h5 class="card-header"><i class="fa fa-user-plus m-l-16"></i><span class="ml-2">Tambah User</span></h5>
                <div class="card-body">
                    @include('pages.masterUser.tambah')
                </div>
            </div>
            @else
            <div class="card mt-2">
                <h5 class="card-header"><i class="fa fa-user-edit m-l-16"></i><span class="ml-2">Edit User</span></h5>
                <div class="card-body">
                    @include('pages.masterUser.edit')
                </div>
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
            $('#dataTable').DataTable();
        } );
    </script>
@endsection
