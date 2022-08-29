@extends('layouts/master-layout-horizontal')
@section('title') @lang('translation.Horizontal') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Apps @endslot
        @slot('title')Horizontal @endslot
    @endcomponent
    <!-- end page title -->

@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/dashboard-sales.init.js') }}"></script>
@endsection
