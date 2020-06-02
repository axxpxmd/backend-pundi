@extends('layouts.app')

@section('content')

<!-- Sidebar -->
@include('masterPages.sidebar')

<!-- Main Content -->
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <!-- Begin Page -->
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <!-- Page 1 -->
            @include('dashboard.page1')
            <!-- Page 2 -->
            @include('dashboard.page2');
            {{-- @include('masterPages.table') --}}
        </div>

    </div>
</div>

@endsection
