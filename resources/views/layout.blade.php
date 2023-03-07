<!DOCTYPE html>
<html class="loading" lang="{{ app()->getLocale() }}" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('website/favicons/apple-touch-icon-57x57.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('website/favicons/apple-touch-icon-60x60.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('website/favicons/apple-touch-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('website/favicons/apple-touch-icon-76x76.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('website/favicons/apple-touch-icon-114x114.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('website/favicons/apple-touch-icon-120x120.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('website/favicons/apple-touch-icon-144x144.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('website/favicons/apple-touch-icon-152x152.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('website/favicons/favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{ asset('website/favicons/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('website/favicons/favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/png" href="{{ asset('website/favicons/favicon-128.png') }}" sizes="128x128"/>
    <link rel="icon" type="image/png" href="{{ asset('website/favicons/favicon-196x196.png') }}" sizes="196x196"/>
    <meta name="application-name" content="afea"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="{{ asset('website/favicons/mstile-144x144.png') }}"/>
    <meta name="msapplication-square70x70logo" content="{{ asset('website/favicons/mstile-70x70.png') }}"/>
    <meta name="msapplication-square150x150logo" content="{{ asset('website/favicons/mstile-150x150.png') }}"/>
    <meta name="msapplication-wide310x150logo" content="{{ asset('website/favicons/mstile-310x150.png') }}"/>
    <meta name="msapplication-square310x310logo" content="{{ asset('website/favicons/mstile-310x310.png') }}"/>
    <meta name="theme-color" content="#000">

    <title>@yield('title', 'AFEA')</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/vendors/css/extensions/toastr.css') }}">
    @yield('vendor-css')
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/app-assets/css/plugins/extensions/toastr.min.css') }}">
    @yield('page-css')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frest/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns navbar-sticky footer-static"
      data-open="click"
      data-menu="vertical-menu-modern"
      data-col="2-columns">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed  menu-accordion menu-shadow menu-light" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('questions.index') }}">
                    <h2 class="brand-text mb-0 p-0">AFEA</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                    <i class="toggle-icon bx-disc font-medium-4 d-none d-xl-block primary bx" data-ticon="bx-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class="{{ (Route::is('questions.index') || Route::is('questions.create') || Route::is('questions.edit')) ? 'active' : null }} nav-item">
                <a href="{{ route('questions.index') }}">
                    <i class='bx bxs-vial'></i>
                    <span class="menu-title">Questions</span>
                </a>
            </li>
            <li class="{{ Route::is('exam.index') ? 'active' : null }} nav-item">
                <a href="{{ route('exam.index') }}">
                    <i class='bx bxs-vial'></i>
                    <span class="menu-title">Exam</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<div class="app-content content">
    @yield('content')
</div>
<!-- END: Content-->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0">
        <span class="float-left d-inline-block">{{ now()->year }} &copy; Sabuhi Talibli</span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script type="text/javascript">
    let APP_URL = '{{ asset('/') }}';
</script>
<script src="{{ asset('frest/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('frest/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
@yield('page-vendor-js')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('frest/app-assets/js/scripts/configs/vertical-menu-light.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/js/core/app-menu.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/js/core/app.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/js/scripts/components.min.js') }}"></script>
<script src="{{ asset('frest/app-assets/js/scripts/footer.min.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script type="text/javascript">

    $(document).ready(function () {
        let type = '{{ session('toast-type') }}';
        switch (type) {
            case 'info':
                toastr.info("{{ session('message') }}", 'Info');
                break;
            case 'warning':
                toastr.warning("{{ session('message') }}", 'Warning');
                break;
            case 'success':
                toastr.success("{{ session('message') }}", 'Success');
                break;
            case 'error':
                toastr.error("{{ session('message') }}", 'Error');
                break;
        }
    });
</script>
@yield('page-js')
<!-- END: Page JS-->

<!-- BEGIN: Custom JS-->
<script src="{{ asset('frest/assets/js/scripts.js') }}"></script>
<!-- END: Custom JS-->

</body>
<!-- END: Body-->

</html>
