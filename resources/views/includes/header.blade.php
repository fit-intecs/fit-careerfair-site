<?
use \Illuminate\Routing;
?>
<div class="container">
<h1 class="header" >
    <img style="display: inline" src="/img/mora_logo.png" class="img-responsive">
    FIT Careers
</h1>
</div>
{{--<div class="navbar navbar-default" style="background-color: #333333">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
        {{--</div>--}}
        {{--<div class="navbar-collapse collapse navbar-responsive-collapse">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li class="{{ Route::is('root') ? 'active' : '' }}"><a href="/">Home</a></li>--}}
                {{--<li class="{{ Route::is('companies') ? 'active' : '' }}"><a href="#">Companies</a></li>--}}
                {{--<li class="{{ Route::is('students') ? 'active' : '' }}"><a href="/students">Students</a></li>--}}
            {{--</ul>--}}
            {{--<form class="navbar-form navbar-left">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-lg-12">--}}
                        {{--<i class="fa fa-search"></i>--}}
                        {{--<input type="text" class="form-control col-sm-8" placeholder="Search">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--@if (Route::has('login'))--}}

                    {{--@if (Auth::check())--}}
                        {{--<li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="fa fa-graduation-cap"></i> Dashboard</a></li>--}}
                    {{--@else--}}
                        {{--<li class="{{ Route::is('login') ? 'active' : '' }}"><a href="{{ url('/login') }}"><i class="fa fa-graduation-cap"></i> Login</a></li>--}}
                    {{--@endif--}}

                {{--@endif--}}

            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            {{--<a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>--}}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Route::is('root') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li {{ !Route::is('root') ? "style=display:none": ""}}>
                    <a class="page-scroll" href="#download">abot ITFac</a>
                </li>
                <li {{ !Route::is('root') ? "style=display:none": ""}}>
                    <a class="page-scroll" href="#features">about IIntecs</a>
                </li>
                {{--<li {{ !Route::is('root') ? "style=display:none": ""}}>--}}
                    {{--<a class="page-scroll" href="#contact">awards and acivements</a>--}}
                {{--</li>--}}
                {{--<li {{ !Route::is('root') ? "style=display:none": ""}}>--}}
                    {{--<a class="page-scroll" href="#contact">our sponsors</a>--}}
                </li>
            </ul>
            <form class="navbar-form navbar-left" {{ !Route::is('students') ? "style=display:none": ""}}>
                <div class="row">
                    <div class="col-lg-12">
                        <i class="fa fa-search"></i>
                        <input type="text" id="q" style="width:30vw;" class="form-control col-sm-8" placeholder="Search">
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Route::is('companies') ? 'active' : '' }}"><a href="/companies">Companies</a></li>
                <li class="{{ Route::is('students') ? 'active' : '' }}"><a href="/students">Students</a></li>
                @if (Route::has('login'))

                    @if (Auth::check())
                        <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="fa fa-graduation-cap"></i> Dashboard</a></li>
                    @else
                        <li class="{{ Route::is('login') ? 'active' : '' }}"><a href="{{ url('/login') }}"><i class="fa fa-graduation-cap"></i> Login</a></li>
                    @endif

                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

