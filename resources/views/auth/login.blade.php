@extends('layouts/master-without_nav')
@section('title') @lang('translation.Sign_In') @endsection
@section('content')

    

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-white"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-lg-10">
                        <div class="py-5">
                            <div class="card auth-cover-card overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="auth-img">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-lg-6">
                                        <div
                                            class="p-4 p-lg-5 bg-primary h-100 d-flex align-items-center justify-content-center">
                                            <div class="w-100">
                                                <div class="mb-4 mb-md-5">
                                                    <a href="{{ URL::asset('index') }}" class="d-block auth-logo">
                                                        <img src="assets/images/logo-light.png" alt="">
                                                    </a>
                                                </div>

                                                <div class="text-white-50 mb-4">
                                                    <h5 class="text-white">Welcome Back !</h5>
                                                    <p>Sign in to continue to Dashonic.</p>
                                                </div>
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <div class="form-floating form-floating-custom mb-3">

                                                        <input id="input-username" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email"
                                                            value="{{ old('email', 'admin@pichforest.com') }}"
                                                            placeholder="Enter Email">
                                                        <label for="input-username">Email</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-users-alt"></i>
                                                        </div>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input id="input-password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="password"
                                                            value="{{ old('password', '123456') }}"
                                                            autocomplete="current-password">
                                                        <label for="input-password">Password</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-padlock"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-check form-check-info text-white-50 font-size-16">
                                                        <input class="form-check-input bg-soft-primary" type="checkbox"
                                                            id="remember-check">
                                                        <label class="form-check-label font-size-14" for="remember-check">
                                                            Remember me
                                                        </label>
                                                    </div>

                                                    <div class="mt-3">
                                                        <button class="btn btn-info w-100" type="submit">Log In</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <a href="{{ route('password.request') }}"
                                                            class="text-white-50 text-decoration-underline">Forgot your
                                                            password?</a>
                                                    </div>
                                                </form><!-- end form -->
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end card -->
                            <div class="mt-5 text-center text-muted">
                                <p>Don't have an account ? <a href="{{ URL::asset('register') }}"
                                        class="fw-medium text-decoration-underline"> Signup </a></p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Dashonic. Crafted with <i class="mdi mdi-heart text-danger"></i> by Pichforest
                            </p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather-icons.min.js"></script>
@endsection
