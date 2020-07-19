@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <div class="ml-2 mr-2">
            @include('masterPages.alerts')
            <!-- Content -->
            @if ($section == 'user')
            <div class="card">
                <h6 class="card-header primary-color">
                    <i class="fa fa-user"></i><span class="ml-2">Akun User</span> 
                </h6>
                <div class="card-body">
                    @include('pages.masterUser.table_user')
                </div>
            </div>
            @elseif($section == 'admin')
            <div class="card">
                <h6 class="card-header primary-color">
                    <i class="fa fa-user-secret"></i><span class="ml-2">Akun Admin</span> 
                </h6>
                <div class="card-body">
                    @include('pages.masterUser.table_admin')
                </div>
            </div>
            @elseif($section == 'tambah')
            <div class="card">
                <h6 class="card-header primary-color"><i class="fa fa-user-plus"></i><span class="ml-2">Tambah User</span></h6>
                <div class="card-body">
                    @include('pages.masterUser.tambah')
                </div>
            </div>
            @else
            <div class="card">
                <h6 class="card-header primary-color">
                    <i class="fa fa-user-edit"></i><span class="ml-2">Edit User</span> 
                </h6>
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
