
<!DOCTYPE html>
<html lang="en">

<head>
@include('user/layout.head')
    
</head>

<body>

    <!-- Navigation -->
    @include('user/layout.header')

    <!-- Main Content -->
    @section('main-content')

    @show
    
    <!-- Footer -->
    @include('user/layout.footer')
    <!--footer -->

    <!-- jQuery -->
    <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('user/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('user/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('user/js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('user/js/clean-blog.min.js')}}"></script>

</body>

</html>
