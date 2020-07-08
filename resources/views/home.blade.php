@if (Auth::user()->role_id == 2)
@extends('layouts.app')

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <!-- Card 1 -->
            @include('pages.dashboard.card1')
            <!-- Page 2 -->
            @include('pages.dashboard.card2')
        </div>

    </div>
</div>
@endsection
@else
@include('masterPages.error')
@endif
