@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <!-- Begin Page -->
        @if ($section == 'index')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Master Artikel</h1>
                </div>
                <div class="card p-3">
                    @include('pages.artikel.table')
                </div>
            </div>
        @elseif($section == 'isi')
            <div class="container-fluid col-md-8">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
                </div>
                <div class="card p-3">
                    @include('pages.artikel.isi')
                </div>
            </div>
        @endif
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
