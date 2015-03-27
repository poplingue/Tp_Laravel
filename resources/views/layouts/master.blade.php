<html>
    <head>
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{url('css/global.css')}}"/>
        <link rel="stylesheet" href="{{url('css/style.css')}}"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-inverse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            @if(Auth::guest())
                            <li>
                                <a href="{{url('auth/login')}}">Login</a>
                            </li>
                            @endif
                            @if(!Auth::guest())
                                <li>
                                    <a href="{{url('/')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{url('/auth/logout')}}">Logout</a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                    @yield('answer')
                </div>
        </div>
    </body>
</html>