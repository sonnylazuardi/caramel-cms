<!DOCTYPE html>
<html lang="en">

@include ('header')

<body ng-app="CaramelApp">

    <div ng-controller="AppCtrl">

        @include('nav')

        @include('page-header')

        <!-- Main Content -->
        <div class="container">
    		@yield('content')
        </div>

        <hr>

        @include('footer')

        <!-- jQuery -->
        <script src="{{asset('js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <!--<script src="{{asset('js/clean-blog.js')}}"></script>-->

    </div>

</body>

</html>