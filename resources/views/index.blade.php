@extends('layouts/master-layout')
@section('title') @lang('translation.Dashboard') @endsection

@section('css')
    <link href="{{ URL::asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- Begin page -->

    <!-- start page title -->
    @component('components.breadcrumb')
        @slot('li_1') Dashonic @endslot
        @slot('title') Sales @endslot
    @endcomponent
    <!-- end page title -->

@endsection
@section('script')
<script>
    sessionStorage.setItem("is_visited", "layout-direction-ltr");
</script>
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/dashboard-sales.init.js') }}"></script>

@endsection