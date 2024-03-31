<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | QRC - Provider </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & Dashboard " name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo.png') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="{{ route('admin.dashboard') }}" class="auth-logo">
                                <img src="{{ asset('backend/assets/images/logo.png') }}" height="200" width="200"
                                    class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('backend/assets/images/logo.png') }}" height="30"
                                    class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="{{ route('provider.login') }}" method="POST">
                            @csrf
                            @if ($errors->has('loginError'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('loginError') }}
                                </div>
                            @endif
                            @if ($errors->has('status'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" id="inputEmailAddress" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control border-end-0"
                                        id="inputChoosePassword" placeholder="Enter Password" required
                                        autocomplete="false">
                                </div>
                            </div>

                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-danger w-100 waves-effect waves-light" type="submit">Log
                                        In</button>

                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>