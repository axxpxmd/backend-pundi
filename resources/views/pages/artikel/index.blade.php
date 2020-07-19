@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <div class="ml-2 mr-2">
            @include('masterPages.alerts')
            <!-- Content -->
            @if ($section == 'artikelTerverifikasi')
            <div class="card">
                <h6 class="card-header primary-color"><i class="fa fa-file"></i><span class="ml-2">Artikel Terverifikasi</span></h6>
                <div class="card-body">
                    @include('pages.artikel.tableTerverifikasi')
                </div>
            </div>
            @elseif($section == 'artikelBelumTerverifikasi')
            <div class="card">
                <h6 class="card-header primary-color"><i class="fa fa-file"></i><span class="ml-2">Artikel Belum Terverifikasi</span></h6>
                <div class="card-body">
                    @include('pages.artikel.tableBelumTerverifikasi')
                </div>
            </div>
            @elseif($section == 'isi')
            <div class="container-fluid col-md-8">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
                    @if ($artikel->status == 0)
                    <div class="row">
                        <button class="btn btn-secondary mr-4" type="button" onclick="history.back();">Back</button>
                        <form action="{{ route('master-artikel.isi.publishArtikel', 'post='.$artikel->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <button class="btn btn-primary mr-3" >Publish</button>
                        </form>
                    </div>
                    @endif
                    <button class="btn btn-primary mr-3" >Edit</button>
                </div>
                <div class="card p-3" >
                    @include('pages.artikel.isi')
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
