<html>
<head>
    <title>@yield('title')</title>
    <!-- Fonts -->
    <!-- Material Design fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/dist/css/bootstrap-material-design.css"/>
    <link rel="stylesheet" type="text/css" href="/dist/css/ripples.css"/>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::to('/css/main.css') }}">
</head>
<body>
<div>

    @include('includes.header')


    <div class="container">
        @yield('content')
    </div>

</div>
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/dist/js/ripples.js"></script>
<script src="/dist/js/material.js"></script>
<script>
    $.material.init();
</script>
</body>
</html>