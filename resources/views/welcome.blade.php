<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/dist/css/bootstrap-material-design.css"/>
        <!-- Styles -->

    </head>
    <body>
        <div>
            <h1 class="header" >
                <img style="display: inline" src="/img/mora_logo.png" class="img-responsive">
                FIT Careers
            </h1>

            <div class="navbar navbar-default" style="background-color: #333333">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="javascript:void(0)">Active</a></li>
                            <li><a href="javascript:void(0)">Link</a></li>
                            <li class="dropdown">
                                <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Action</a></li>
                                    <li><a href="javascript:void(0)">Another action</a></li>
                                    <li><a href="javascript:void(0)">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Dropdown header</li>
                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                    <li><a href="javascript:void(0)">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control col-sm-8" placeholder="Search">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/login"><i class="fa fa-graduation-cap"></i> Student Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <script src="/bower_components/jquery/dist/jquery.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="/dist/js/ripples.js"></script>
        <script src="/dist/js/material.js"></script>
    <script>
        $.material.init();
    </script>
    </body>
</html>
