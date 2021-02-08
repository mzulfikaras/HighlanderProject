<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel = "icon" href ="{{asset('assets/user/images/Trademark-Logo.png')}}" type = "image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>@yield('title')</title>

<!-- Bootstrap core CSS -->
<link href="{{asset('assets/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{asset('assets/user/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/user/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/user/css/owl.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('user.layouts.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->

    @yield('modal')

    @yield('main')


    @include('user.layouts.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('assets/user/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('assets/user/js/custom.js')}}"></script>
    <script src="{{asset('assets/user/js/owl.js')}}"></script>

    @yield('js')

</body>
</html>
