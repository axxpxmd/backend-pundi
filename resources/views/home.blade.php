@if (Auth::user()->role_id == 2)
@extends('layouts.app')

@section('content')
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
            @include('pages.dashboard.page1')
            <!-- Page 2 -->
            @include('pages.dashboard.page2')
        </div>

    </div>
</div>
@endsection
@else
@include('masterPages.error')
@endif
