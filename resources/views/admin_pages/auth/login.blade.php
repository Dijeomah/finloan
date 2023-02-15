<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/login.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Feb 2023 22:16:36 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin_assets/images/favicon/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon/favicon.png')}}" type="image/x-icon">
    <title>Tivo - Premium Admin Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/feather-icon.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('admin_assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/responsive.css')}}">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo" href="../dashboard.blade.php">
                            <img class="img-fluid for-light" src="{{asset('admin_assets/images/logo/logo2.png')}}"
                                 alt="looginpage">
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('post.login') }}">
                            @csrf
                            <h4 class="text-center">Sign in to account</h4>
                            <p class="text-center">Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="email@domain.com"
                                       required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required
                                           placeholder="*********">
                                    <div class="show-hide">
                                        <span class="show"></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label class="text-muted" for="checkbox1">Remember password</label>
                                </div>
{{--                                <a class="link" href="forget-password.html">Forgot password?</a>--}}
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>
{{--                            <div class="login-social-title">--}}
{{--                                <h6>Or Sign in with </h6>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <ul class="login-social">--}}
{{--                                    <li><a href="https://www.linkedin.com/" target="_blank"><i--}}
{{--                                                data-feather="linkedin"></i></a></li>--}}
{{--                                    <li><a href="https://twitter.com/" target="_blank"><i--}}
{{--                                                data-feather="twitter"></i></a></li>--}}
{{--                                    <li><a href="https://www.facebook.com/" target="_blank"><i--}}
{{--                                                data-feather="facebook"></i></a></li>--}}
{{--                                    <li><a href="https://www.instagram.com/" target="_blank"><i--}}
{{--                                                data-feather="instagram"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('admin_assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('admin_assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('admin_assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="{{asset('admin_assets/js/config.js')}}"></script>
    <!-- Template js-->
    <script src="{{asset('admin_assets/js/script.js')}}"></script>
    <!-- login js-->
</div>
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/login.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Feb 2023 22:16:36 GMT -->
</html>
