@extends('layouts.master')

@section('head')
    @parent
@endsection

@section('header')
    @parent
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">
@show

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>New Age is an app landing page that will help you beautifully showcase your new mobile app, or anything else!</h1>
                            <a href="#download" class="btn btn-outline btn-xl page-scroll">Start Now for Free!</a>
                            <p id="power">
                                1
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen" style="background-color: #d0a4c0; overflow-y: scroll">
                                    <div id="views-list" class="list-group">
                                        <div>
                                            <div class="list-group-item">
                                                <div class="row-picture">
                                                    <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                                                </div>
                                                <div class="row-content">
                                                    <h4 class="list-group-item-heading">Tile with avatar</h4>

                                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus</p>
                                                </div>
                                            </div>
                                            <div class="list-group-separator"></div>
                                        </div>

                                    </div>
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    {{--<img src="img/demo-screen-1.jpg" class="img-responsive" alt="">--}}
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Discover what all the buzz is about!</h2>
                    <p>Our app is available on any mobile device! Download now to get started!</p>
                    <div class="badges">
                        <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                        <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Unlimited Features, Unlimited Fun</h2>
                        <p class="text-muted">Check out what you can do with this app theme!</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>Device Mockups</h3>
                                    <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-camera text-primary"></i>
                                    <h3>Flexible Use</h3>
                                    <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-present text-primary"></i>
                                    <h3>Free to Use</h3>
                                    <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-lock-open text-primary"></i>
                                    <h3>Open Source</h3>
                                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop waiting.<br>Start building.</h2>
                <a href="#contact" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>We <i class="fa fa-heart"></i> new friends!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2016 Start Bootstrap. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>
@endsection

@section('scripts')
    @parent
    <script>

        function timeSince(date) {

            var seconds = Math.floor((new Date() - date) / 1000);

            var interval = Math.floor(seconds / 31536000);

            if (interval > 1) {
                return interval + " years";
            }
            interval = Math.floor(seconds / 2592000);
            if (interval > 1) {
                return interval + " months";
            }
            interval = Math.floor(seconds / 86400);
            if (interval > 1) {
                return interval + " days";
            }
            interval = Math.floor(seconds / 3600);
            if (interval > 1) {
                return interval + " hours";
            }
            interval = Math.floor(seconds / 60);
            if (interval > 1) {
                return interval + " minutes";
            }
            return Math.floor(seconds) + " seconds";
        }

        function View(time,name,img) {
            this.time = time;
            this.name = name;
            this.img = img;
        }

        var views = [];

        window.Echo.channel('CFSite').listen('.profile_views', function (data) {
            console.log(data.activity);
            views.push(new View(data.activity.time,data.activity.name,data.activity.img));

            console.log(views);

            var ago = timeSince(new Date(data.activity.time));
            var html = $("<div>")
                        .append($("<div class='list-group-item'>")
                            .append($("<div class='row-picture'>")
                                .append("<img class='circle' src='http://lorempixel.com/56/56/people/' alt='icon'>")
                                    )
                            .append($("<div class='row-content'>")
                            .append($("<h4 class='list-group-item-heading'></h4>").text(data.activity.name))
                            .append($("<p class='list-group-item-text'></p>").text('Profile has benn viewed '))
                            .append($("<p class='text-sm-left'></p>").text(ago + ' ago'))
                            )
            ).append("<div class='list-group-separator'>");







//            $('<div/>', {
//                id: 'foo',
//                href: 'http://google.com',
//                title: data.activity.name,
//                rel: 'external',
//                text: 'Go to Google!'
//            }).appendTo('#views-list');



            $('#views-list').prepend(html.hide().fadeIn(1000));
        });



    </script>
@endsection