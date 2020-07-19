@if (Auth::user()->role_id == 2)
@extends('layouts.app')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        @include('masterPages.top-bar')
        <div class="container-fluid">
            <!-- Card 1 -->
            @include('pages.dashboard.card1')
            <!-- Card 2 -->
            @include('pages.dashboard.card2')
        </div>
    </div>
</div>
@endsection
@else
@include('masterPages.error404')
@endif
