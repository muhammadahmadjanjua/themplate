<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Recover Password | Dashonic - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>

    

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
                                                    <a href="../index" class="d-block auth-logo">
                                                        <img src="{{ URL::asset('assets/images/logo-light.png') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="text-white-50 mb-4">
                                                    <h5 class="text-white">Reset Password</h5>
                                                    <p>Re-Password with Dashonic.</p>
                                                </div>
                                                <div class="alert alert-success text-center mb-4" role="alert">
                                                    Enter your Email and instructions will be sent to you!
                                                </div>
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf

                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input id="input-email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}"
                                                            autocomplete="email" placeholder="Email" autofocus>

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

                                                    <div class="mt-3">
                                                        <button type="submit" class="btn btn-info w-100">
                                                            {{ __('Send Password Reset Link') }}
                                                        </button>
                                                    </div>
                                                </form><!-- end form -->
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end card -->
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
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/feather-icons/feather-icons.min.js') }}"></script>

</body>

</html>
