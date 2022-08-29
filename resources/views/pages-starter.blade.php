@extends('layouts/master-layout')
@section('title') @lang('translation.Starter_Page') @endsection

@section('content')
    

    <!-- Begin page -->

    <!-- start page title -->
    @component('components.breadcrumb')
        @slot('li_1')
        Utility @endslot
        @slot('title')Starter Page @endslot
    @endcomponent
    <!-- end page title -->



@endsection
