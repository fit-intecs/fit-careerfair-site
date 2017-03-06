<?
use \Illuminate\Routing;
?>
<div class="container">
<h1 class="header" >
    <img style="display: inline" src="/img/mora_logo.png" class="img-responsive">
    FIT Careers
</h1>
</div>
<div class="navbar navbar-default" style="background-color: #333333">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Route::is('root') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Route::is('companies') ? 'active' : '' }}"><a href="#">Companies</a></li>
                <li class="{{ Route::is('students') ? 'active' : '' }}"><a href="/students">Students</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="row">
                    <div class="col-lg-12">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control col-sm-8" placeholder="Search">
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))

                    @if (Auth::check())
                        <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="fa fa-graduation-cap"></i> Dashboard</a></li>
                    @else
                        <li class="{{ Route::is('login') ? 'active' : '' }}"><a href="{{ url('/login') }}"><i class="fa fa-graduation-cap"></i> Login</a></li>
                    @endif

                @endif

            </ul>
        </div>
    </div>
</div>

