@extends('layouts/master-without_nav')
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
                                                        <img src="{{ URL::asset('assets/images/logo-light.png') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="text-white-50 mb-4">
                                                    <h5 class="text-white">Register Account</h5>
                                                    <p>Get your free Dashonic account now.</p>
                                                </div>
                                                <form method="POST" action="{{ route('register') }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input id="input-email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" autocomplete="off"
                                                            placeholder="Email">

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="input-email">Email</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-envelope-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" autocomplete="off"
                                                            placeholder="Username">

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="input-username">Username</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-users-alt"></i>
                                                        </div>
                                                    </div>


                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input id="input-password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="floatingPassword">Password</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-padlock"></i>
                                                        </div>
                                                    </div>

                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input id="input-password" type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password_confirmation" placeholder="confirm-Password">

                                                        @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label for="floatingPassword">Password</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-padlock"></i>
                                                        </div>
                                                    </div>

                                                    <div class="text-white-50">
                                                        <p>By registering you agree to the Dashonic <a href="#"
                                                                class="text-white">Terms of Use</a></p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-info w-100" type="submit">Register</button>
                                                    </div>
                                                </form><!-- end form -->
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                            </div><!-- end card-->
                            <div class="mt-5 text-center text-muted">
                                <p>Already have an account ? <a href="{{ URL::asset('login') }}"
                                        class="fw-medium text-decoration-underline"> Signin </a></p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-muted p-4">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Dashonic. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            Pichforest</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/feather-icons/feather-icons.min.js') }}"></script>
@endsection
