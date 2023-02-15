<!DOCTYPE html>
<html lang="en">
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

    {{--    Datatable--}}

    @if(request()->is('admin/loans'))
        <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/datatables.css')}}">
    @endif
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/vector-map.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('admin_assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/responsive.css')}}">
</head>
<body onload="startTime()">
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Search Tivo .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                    class="sr-only">Loading...</span></div>
                            <i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                </div>
                <div class="logo-header-main">
                    <a href="index.html"><img class="img-fluid for-light img-100"
                                              src="{{asset('admin_assets/images/logo/logo2.png')}}"
                                              alt="">
                        <img class="img-fluid for-dark"
                             src="{{asset('admin_assets/images/logo/logo.png')}}"
                             alt="">
                    </a>
                </div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">

            </div>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="right-header ps-0">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text mobile-search"><i
                                            class="fa fa-search"></i></span></div>
                                <input class="form-control" type="text" placeholder="Search Here........">
                            </div>
                        </div>
                    </li>
                    <li class="serchinput">
                        <div class="serchbox"><i data-feather="search"></i></div>
                        <div class="form-group search-form">
                            <input type="text" placeholder="Search here...">
                        </div>
                    </li>
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"></i></div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li><i data-feather="bell"> </i>
                                <h6 class="f-18 mb-0">Notitications</h6>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="order-history.html">Delivery processing </a><span
                                                class="pull-right">6 hr</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="cart.html">Order Complete</a><span class="pull-right">3 hr</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="invoice-template.html">Tickets Generated</a><span
                                                class="pull-right">1 hr</span></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><i data-feather="send"></i></div>
                                    <div class="flex-grow-1">
                                        <p><a href="email_inbox.html">Delivery Complete</a><span class="pull-right">45 min</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="message"><i data-feather="message-square"></i></div>
                        <ul class="message-dropdown onhover-show-div">
                            <li><i data-feather="message-square"> </i>
                                <h6 class="f-18 mb-0">Messages</h6>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{asset('admin_assets/images/user/3.jpg')}}" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="email_inbox.html">Emay Walter</a></h5>
                                        <p>Do you want to go see movie?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{asset('admin_assets/images/user/6.jpg')}}" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                                        <p>Thank you for rating us.</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-start">
                                    <div class="message-img bg-light-primary"><img
                                            src="{{asset('admin_assets/images/user/10.jpg')}}" alt=""></div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                                        <p>What`s the project report update?</p>
                                    </div>
                                    <div class="notification-right"><i data-feather="x"></i></div>
                                </div>
                            </li>
                            <li><a class="btn btn-primary" href="email_inbox.html">Check Messages</a></li>
                        </ul>
                    </li>
                    <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i
                                data-feather="maximize-2"></i></a></li>
                    <li class="language-nav">
                        <div class="translate_wrapper">
                            <div class="current_lang">
                                <div class="lang"><i data-feather="globe"></i></div>
                            </div>
                            <div class="more_lang">
                                <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                                        class="lang-txt">English<span> (US)</span></span></div>
                                <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                        class="lang-txt">Deutsch</span></div>
                                <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                        class="lang-txt">Espa&ntilde;ol</span></div>
                                <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                        class="lang-txt">Fran&ccedil;ais</span></div>
                                <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                        class="lang-txt">Portugu&ecirc;s<span> (BR)</span></span></div>
                                <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                        class="lang-txt">&#x7B80;&#x4F53;&#x4E2D;&#x6587;</span></div>
                                <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                        class="lang-txt">&#x644;&#x639;&#x631;&#x628;&#x64A;&#x629; <span> (ae)</span></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown">
                        <div class="account-user"><i data-feather="user"></i></div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><i data-feather="user"></i><span>Account</span></a></li>
                            <li><a href="email_inbox.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                            <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a>
                            </li>
                            <li><a href="auth/login.blade.php"><i data-feather="log-in"> </i><span>Log in</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-airplay m-0">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                    </div>
                    <div class="ProfileCard-details">
                        {{--                        <div class="ProfileCard-realName">{{name}}</div>--}}
                        <div class="ProfileCard-realName">Drame Success</div>
                    </div>
                </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template">
                <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down,
                    yikes!
                </div></script>
        </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('admin_pages.include.sidebar')
        <!-- Page Sidebar Ends-->

{{--        {{$slot}}--}}

        @yield('view')
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-0 footer-left">
                        <p class="mb-0">Copyright © 2023 Tivo. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 p-0 footer-right">
                        <p class="mb-0">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
                    </div>
                </div>
            </div>
        </footer>
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
<script src="{{asset('admin_assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('admin_assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('admin_assets/js/config.js')}}"></script>
<script src="{{asset('admin_assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('admin_assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('admin_assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('admin_assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('admin_assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('admin_assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('admin_assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('admin_assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('admin_assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-au-mill.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-in-mill.js')}}"></script>
<script src="{{asset('admin_assets/js/vector-map/map/jquery-jvectormap-asia-mill.js')}}"></script>
<script src="{{asset('admin_assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('admin_assets/js/notify/index.js')}}"></script>
<script src="{{asset('admin_assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('admin_assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('admin_assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('admin_assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('admin_assets/js/typeahead-search/typeahead-custom.js')}}"></script>

{{--Datatable--}}
@if(request()->is('admin/loans'))
    <script src="{{asset('admin_assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endif

<!-- Template js-->
<script src="{{asset('admin_assets/js/script.js')}}"></script>
<script src="{{asset('admin_assets/js/theme-customizer/customizer.js')}}"></script>
<!-- login js-->
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/dashboard.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Feb 2023 22:14:00 GMT -->
</html>

