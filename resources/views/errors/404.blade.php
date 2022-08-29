@extends('layouts/master-without_nav')
@section('content')

<div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-white"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center py-5">
                        <h1 class="display-1 fw-normal error-text">4<img
                                src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" class="avatar-lg h-auto mx-2">4
                        </h1>
                        <h4 class="text-uppercase text-muted">Opps, page not found</h4>
                        <div class="mt-5 text-center">
                            <a class="btn btn-primary" href="{{ URL::asset('index') }}">Back to Dashboard</a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

@endsection
