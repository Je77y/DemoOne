<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin - @yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <base href="{{ asset('') }}" target="_blank, _self, _parent, _top">
    <!--  Bootstrap core CSS     -->
    <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Animation library for notifications   -->
    <link href="backend/assets/css/animate.min.css" rel="stylesheet" />
    <!--  Light Bootstrap Table core CSS    -->
    <link href="backend/assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="backend/assets/css/demo.css" rel="stylesheet" />
    <!--  Your CSS -->
    @yield('css')
    <!--  Fonts and icons     -->
    <link href="backend/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="backend/assets/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        @include('backend/layout/header')

        <div class="main-panel">
            @include('backend/layout/menu')

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                Home
                            </a>
                            </li>
                            <li>
                                <a href="#">
                                Company
                            </a>
                            </li>
                            <li>
                                <a href="#">
                                Portfolio
                            </a>
                            </li>
                            <li>
                                <a href="#">
                               Blog
                            </a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
            </footer>
        </div>
    </div>
</body>
<!-- Ckeditor  -->
<script src="ckeditor/ckeditor.js"></script>
<!--   Core JS Files   -->
<script src="backend/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="backend/assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="backend/assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="backend/assets/js/bootstrap-notify.js"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="backend/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="backend/assets/js/demo.js"></script>
<!-- My JS -->
@yield('script')

</html>