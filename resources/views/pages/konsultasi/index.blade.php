@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <div class="ml-2 mr-2">
            @include('masterPages.alerts')
            <!-- Content -->
            @if ($section == 'pertanyaan')
            <div class="card">
                <h6 class="card-header primary-color">
                    <i class="fa fa-question-circle"></i><span class="ml-2">Pertanyaan</span> 
                </h6>
                <div class="card-body">
                    @include('pages.konsultasi.tablePertanyaan')
                </div>
            </div>
            @elseif($section == 'isiPertanyaan')
            @include('pages.konsultasi.isiPertanyaan')
            @elseif($section == 'konsultasi')
            <div class="card">
                <h6 class="card-header primary-color">
                    <i class="fa fa-file-alt"></i><span class="ml-2">Konsultasi</span> 
                </h6>
                <div class="card-body">
                    @include('pages.konsultasi.tableKonsultasi')
                </div>
            </div>
            @elseif($section == 'isiKonsultasi')
            @include('pages.konsultasi.isiKonsultasi')
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
