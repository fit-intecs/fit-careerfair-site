@extends('layouts.master')

@section('content')

    <div class="modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="fa fa-graduation-cap"></i></h4>
                </div>
                <div class="modal-body">
                    <img src="/img/ajaxloading.gif" class="loading-img" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="panel panel-default">
        <div id="student" class="panel-body">
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

                                <p class="list-group-item-text text-justify">{{$student->objective}}

                                </p>
                                @foreach(explode(",", $student->techs) as $tech)
                                    <span style="margin-bottom: 10px" class="label label-default">{{$tech}}</span>
                                @endforeach
                                <button type="button" style="color: #00b0ff; float: right" onclick="viewProfile('{{$student->index}}');" class="btn btn-raised btn-xs">read more</button>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                    </div>
                @endforeach
            </div>
            <div style="padding-left: 20px">{{ $students->links() }}</div>
        </div>
    </div>

</div>
    <script>

    </script>
@endsection

@section('scripts')
@parent
{{--<script src="/js/jquery.jscroll.min.js"></script>--}}
    <script>
        function viewProfile(index){
            $('.modal').modal('show');
            $('.modal-body').html('<img src="/img/ajaxloading.gif" class="loading-img" alt="">');
            $.ajax({
                url: "/students/"+index,
                type: 'GET',
                success: function(res) {
                    $('.modal-body').html(res);
                    console.log(res);
                }
            });
        }
///students/

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
