<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-text" href="{{url('/')}}">Caramel<span>CMS</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{url('/auth/login')}}">Login</a></li>
                    <li><a href="{{url('/auth/register')}}">Register</a></li>
                @else
                    <li>
                        <a href="#">Hi, {{ Auth::user()->name }} <span class="caret"></span></a>
                    </li>
                    <li>
                        <a href="{{url('/admin/posts/index')}}">Posts</a>
                    </li>
                    <li>
                        <a href="{{url('/admin/settings/index')}}">Settings</a>
                    </li>
                    <li><a href="{{url('/auth/logout')}}">Logout</a></li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>