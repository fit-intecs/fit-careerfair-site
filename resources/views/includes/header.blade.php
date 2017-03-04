<header>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    @if (Route::has('login'))

                            @if (Auth::check())
                               <li><a href="{{ url('/home') }}">Home</a></li>
                            @else
                                <li><a href="{{ url('/login') }}">Companies</a></li>

                                <li><a href="{{ url('/login') }}">Students</a></li>

                                <li><a href="{{ url('/login') }}">Student Login</a></li>

                            @endif

                    @endif
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>


</header>