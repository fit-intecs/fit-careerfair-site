@extends('layouts.master')

@section('head')
    @parent
    <style>
        .list-group-item em{
            font-style: normal;
            color: #ffbe18;
        }
        .ais-infinite-hits--showmore button{
            border-radius: 5px;
            border: solid 1px #8c8a8a;
            box-shadow: none;
            background-color: #ffbe62;
        }
        .highlight { background-color: yellow }
    </style>
@endsection

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

<div class="container" style="padding-top: 72px">
    <div class="panel panel-default">
        <div id="student" class="panel-body">
            {{--<div style="text-align: right; padding-right: 20px">{{ $students->links() }}</div>--}}
            <div id="student-list" class="list-group">
                @foreach($students as $student)
                    <div class="item">
                        <div class="list-group-item">
                            <div class="row-picture">
                                <img class="circle" src="profilepics/{{$student->profile_img}}" alt="icon">
                            </div>
                            <div class="row-content">
                                <h4 style="font-weight: 500;" class="list-group-item-heading">{{$student->firstName}} {{$student->lastName}}</h4>

                                <p class="list-group-item-text text-justify">{{$student->objective}}</p>
                                @foreach(explode(",", $student->techs) as $tech)
                                    <span style="margin-bottom: 10px" class="label label-default">{{$tech}}</span>
                                @endforeach
                                <a style="color: #00b0ff; float: right" onclick="viewProfile('{{$student->index}}');" class="btn btn-raised btn-xs">read more</a>
                            </div>
                        </div>
                        <div class="list-group-separator"></div>
                    </div>
                @endforeach
            </div>

            {{--<div style="padding-left: 20px">{{ $students->links() }}</div>--}}
        </div>
    </div>

</div>
    <script>

    </script>
@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
<script>
    jQuery.fn.highlight=function(c){function e(b,c){var d=0;if(3==b.nodeType){var a=b.data.toUpperCase().indexOf(c),a=a-(b.data.substr(0,a).toUpperCase().length-b.data.substr(0,a).length);if(0<=a){d=document.createElement("span");d.className="highlight";a=b.splitText(a);a.splitText(c.length);var f=a.cloneNode(!0);d.appendChild(f);a.parentNode.replaceChild(d,a);d=1}}else if(1==b.nodeType&&b.childNodes&&!/(script|style)/i.test(b.tagName))for(a=0;a<b.childNodes.length;++a)a+=e(b.childNodes[a],c);return d} return this.length&&c&&c.length?this.each(function(){e(this,c.toUpperCase())}):this};jQuery.fn.removeHighlight=function(){return this.find("span.highlight").each(function(){this.parentNode.firstChild.nodeName;with(this.parentNode)replaceChild(this.firstChild,this),normalize()}).end()};
</script>

{{--<script src="/js/jquery.jscroll.min.js"></script>--}}
    <script>



        var hitTemplate =
                '<div class="item">' +
                '<div class="list-group-item">' +
                '<div class="row-picture">' +
                '<img class="circle" src="profilepics/\{\{\{profile_img\}\}\}" alt="icon">' +
                '</div>' +
                '<div class="row-content">' +
                '<h4 style="font-weight: 500;" class="list-group-item-heading">\{\{\{firstName\}\}\} \{\{\{lastName\}\}\}</h4>' +
                '<p class="list-group-item-text text-justify">\{\{\{objective\}\}\}</p>' +
                '<span style="margin-bottom: 10px" class="label label-default">' + '\{\{\{techs\}\}\}</span>' +
                '<a style="color: #00b0ff; float: right" onclick="viewProfile(\'\{\{index\}\}\');" class="btn btn-raised btn-xs">read more</a>' +
                '</div>' +
                '</div>' +
                '<div class="list-group-separator"></div>' +
                '</div>';

        //stdSearch
        $('#q').bind('input',function(){
            var resultObj = $('#student-list');
            $.ajax({
                type: 'GET',
                url: '{{route('stdSearch')}}',
                data: { q: this.value },
                searchQuery:this.value,
                resultObj: this.resultObj,
                dataType:'json',
                success: function (json) {
                    //document.write(json["data"]);
                    let dataObj = json.data;
                    console.log(dataObj);

                    resultObj.html('');
                    dataObj.forEach(function(element) {
                        let output = Mustache.render(hitTemplate, element);
                        $('#student-list').append(output);

                    });
                    resultObj.highlight(this.searchQuery);
                    console.log(dataObj);
                }
            });
        });


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


        // Original JavaScript code by Chirp Internet: www.chirp.com.au
        // Please acknowledge use of this code by including this header.


    </script>
@endsection
