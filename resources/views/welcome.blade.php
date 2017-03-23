@extends('layouts.master')

@section('head')
    @parent
    <script src="https://unpkg.com/react@15/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@15/dist/react-dom.js"></script>
    <style>
        .livefeed .well{
            background-color: #FAFAFA;'rgba(231, 205, 232, 0.64) !important;
            position: relative;
            padding: 10px !important;
            margin: 0px !important;
            color: #2e3b4e;
            border-radius: 0px !important;
            -webkit-box-shadow: 2px 3px 12px 0px rgba(35, 8, 34, 0.27) !important;
            box-shadow: 2px 3px 12px 0px rgba(35, 8, 34, 0.27) !important;
        }

        .feedContainer{
            padding: 10px;
            'background-color: rgba(0, 0, 0, 0.17);
            border: solid 0px;
            border-radius: 3px;
        }
        .scroller{
            overflow-y: auto;
            height: 70%;
        }

        .scroller::-webkit-scrollbar{
            background-color: transparent;
            width: 0;
        }

        span.time-ago {
            float: right;
            line-height: 20px;
            color: #8A8A9A;
            font-size: x-small;
        }

        /*.scroller div:nth-of-type(odd){*/
            /*border-right: solid 5px #ae88ba;*/
        /*}*/
        /*.scroller div:nth-of-type(even){*/
            /*border-left: solid 5px rgb(196, 154, 190);*/
        /*}*/

        #views-list a{
            color: #41A6DB;
        }

        #views-list img{
            -webkit-box-shadow: 2px 3px 12px 0px rgba(35, 8, 34, 0.27) !important;
            box-shadow: 2px 3px 12px 0px rgba(35, 8, 34, 0.27) !important;
            margin-right: 5px;
        }

    </style>
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
                        <div class="header-content-inner livefeed">
                            <h1>FIT Future Careers,</h1>
                            <h2>the in-house recruitment program of the Faculty of Information Technology, University of Moratuwa !</h2>
                            <a href="#download" class="btn btn-outline btn-xl page-scroll">Start Now for Free!</a>

                        </div>

                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1 livefeed">

                    <div class="device-container">
                        <div class="feedContainer">
                            <div id="views-list" class="scroller">
                                @foreach($data as $key=>$prof_view)
                                <div class='well well-sm' style='width: 100%; min-height: 40px; z-index: {{count($data)-$key}}'>
                                    <img width='30px' height='30px' src='/logo/{{rand(0,29)}}.jpg'>
                                    <a target='_blank' href="{{route('students_view',['id'=>$prof_view->causer->user->name,'count'=>'false'])}}">{{$prof_view->causer->firstName}}'s</a> profile has been viewed
                                    <br><span class="time-ago"></span>
                                    <div style='clear:both'></div>
                                    <span class="times" hidden>{{$prof_view->created_at->toW3cString()}}</span>
                                </div>
                                @endforeach
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
                    <p>
                        INTECS was formed by a group of students from the IT Faculty in 2002 <br>
                        with the aim of building up awareness within the students of the Faculty <br>
                        about the field of Information Technology, and to expose undergraduates to unique opportunities
                        <br>
                        within the IT Industry of Sri Lanka and beyond. <br>
                    </p>
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
                return interval + " years ago";
            }else if(interval == 1){
                return interval + " year ago";
            }
            interval = Math.floor(seconds / 2592000);
            if (interval > 1) {
                return interval + " months ago";
            }else if(interval == 1){
                return interval + " month ago";
            }
            interval = Math.floor(seconds / 86400);
            if (interval > 1) {
                return interval + " hours ago";
            }else if(interval == 1){
                return interval + " hour ago";
            }
            interval = Math.floor(seconds / 3600);
            if (interval > 1) {
                return interval + " hours ago";
            }else if(interval == 1){
                return interval + " hour ago";
            }
            interval = Math.floor(seconds / 60);
            if (interval > 1) {
                return interval + " minutes ago";
            }else if(interval == 1){
                return interval + " minute ago";
            }
            return "just now";
        }

        function getRandomInt(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min)) + min;
        }


        timerefresh();


        var id = {{count($data)}}+1;


        var id = {{count($data)}}+1;

        window.Echo.channel('CFSite').listen('.profile_views', function (data) {

            var ago = timeSince(new Date(data.activity.time)); //2017-03-12T17:51:22+00:00

            var view = $("<div class='well well-sm' style='width: 100%; min-height: 60px'>").css("z-index", id)
                    .append($("<img width='30px' height='30px'>").attr('src','/logo/' + getRandomInt(0,29) + '.jpg'))
                    .append($("<a target='_blank'></a>").attr('href','/students/'+ data.activity.index+ '/false').text(data.activity.name + '\'s')).append(' profile has been viewed')
                    .append($("<br><span class='time-ago'></span>").text(ago))
                    .append("<div style='clear:both'></div>")
                    .append($("<span class='times' hidden></span>").text(data.activity.time));

            $('#views-list').prepend(view.css('opacity', 0)
                    .slideDown('fast')
                    .animate(
                            { opacity: 1 },
                            { queue: false, duration: 'slow' }
                    ));
            id++;
        });

        function timerefresh(){
            $('.times').each(function (index, value) {
                newtime = timeSince(new Date($(this).text()));
                agoElement = $(this).prev().prev();
                oldtime = agoElement.text();
                if(newtime !== oldtime){
                    agoElement.fadeTo( 500, 0 );
                    agoElement.text(newtime).fadeTo( 0, 0).fadeTo( 1000, 1 );
                }
            });
        }

        setInterval(function(){
            timerefresh();
        }, 1000*10);

    </script>
@endsection
