@extends('layouts.master')

@section('content')
<div class="container">
    <div id="student" class="well well-sm">
        <div style="text-align: right; padding-right: 20px">{{ $students->links() }}</div>
        <div id="student-list" class="list-group">
            @foreach($students as $student)
                <div class="item">
                    <div class="list-group-item">
                        <div class="row-picture">
                            <img class="circle" src="{{$student->img}}" alt="icon">
                        </div>
                        <div class="row-content">
                            <h4 style="font-weight: 500;" class="list-group-item-heading">{{$student->firstName}} {{$student->lastName}}</h4>

                            <p class="list-group-item-text">{{$student->objective}}

                            </p>
                            @foreach(explode(",", $student->techs) as $tech)
                                <span class="label label-default">{{$tech}}</span>
                            @endforeach
                                <a style="color: #00b0ff; float: right" href="javascript:void(0)" class="btn btn-raised btn-xs">read more</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>
            @endforeach
        </div>
        <div style="padding-left: 20px">{{ $students->links() }}</div>
    </div>
</div>
    <script>

    </script>
@endsection

@section('scripts')
@parent
{{--<script src="/js/jquery.jscroll.min.js"></script>--}}
    <script>
//        $('#student').jscroll({
//            loadingHtml: '<img src="/img/ajaxloading.gif" alt="Loading" /> Loading...',
//            padding: 20,
//            nextSelector: '#student>.pagination>li:last',
//            contentSelector: '#student-list div.item',
//            debug:true
//        });

//        (function(){
//
//            var loading_options = {
//                finishedMsg: "<div class='end-msg'>Congratulations! You've reached the end of the internet</div>",
//                msgText: "<div class='center'>Loading...</div>",
//                img: "../img/ajaxloading.gif"
//            };
//
//            $('#student-list').infinitescroll({
//                loading : loading_options,
//                navSelector : "#student .pagination",
//                nextSelector : "#student .pagination li.active + li a",
//                itemSelector : "#items div.item"
//            });
//        })();
    </script>
@endsection
