@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <!-- Alerts Success-->
        <div class="container-fluid">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center col-md-3 container" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif  
            <!-- Alerts Error -->
            @if (count($errors) > 0)
            <div class="alert alert-danger m-t-30 col-md-6">
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
            @if ($section == 'index')
            <div class="card">
                <h5 class="card-header primary-color"><i class="fa fa-file"></i><span class="ml-2">Artikel Terverifikasi</span></h5>
                <div class="card-body">
                    @include('pages.artikel.table')
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
