
<div class="container-fluid">
    <div class="row">
        @if($profileDetails)
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="row" style="margin-left: 10px;">
                        <h3><div id="firstName">{{ $profileDetails->firstName }}</div> <div id="lastName"> {{$profileDetails->lastName}}</div></h3>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body" style="width: 100%; height: 0; padding-bottom: 100%; overflow: hidden; display: table-row">
                                @if (\Illuminate\Support\Facades\Storage::disk('local')->has($profileDetails->index  . '.jpg'))
                                    <img src="{{ route('profile.image', ['filename' => $profileDetails->index . '.jpg']) }}" alt="" class="img-responsive">
                                @else
                                    <img src="/img/default-user.png" class="img-responsive" style="margin: auto">
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="col-md-7 col-md-offset-1" style="margin-top: 70px;">

                        <div class="panel panel-default" style="margin: 20px; padding: 5px;">
                            <div class="panel-body">
                                {{--<div><strong>First Name: </strong></div><p style="font-size: 1em" id="firstName">{{ $profileDetails->firstName}} </p>--}}
                                {{--<div><strong>Last Name: </strong></div><p style="font-size: 1em" id="lastName">{{ $profileDetails->lastName}} </p>--}}
                                <div><strong>Phone Number: </strong></div> <p style="font-size: 1em" id="phone">{{ $profileDetails->phone }}</p>
                                <div><strong>Degree: </strong></div> <p style="font-size: 1em" id="degree">{{ $profileDetails->degree }}</p>
                                <div><strong>LinkedIn: </strong></div> <p style="font-size: 1em" id="linkedin"><a href="{{ $profileDetails->linkedinLink  }}">{{ $profileDetails->linkedinLink }}</a></p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5><strong>Profile</strong></h5>

                    <div class="panel panel-default" style="margin: 20px; padding: 5px;">
                        <div class="panel-body">
                            <p class="text-justify" style="font-size: 1em" id="objective">{{ $profileDetails->objective }}</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5><strong>Technical Skills</strong></h5>
                    {{--<p id="techs">{{ $profileDetails->techs }}</p>--}}
                    <div class="panel panel-default" style="margin: 20px; padding: 5px;">
                        <div class="panel-body">
                            @foreach(explode(",", $profileDetails->techs) as $tech)
                                <span style="margin-bottom: 10px" class="label label-default">{{$tech}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5><strong>Experience</strong></h5>
                    {{--<p id="techs">{{ $profileDetails->techs }}</p>--}}
                    <div class="panel panel-default" style="margin: 20px; padding: 5px;">
                        <div class="panel-body">
                        <p style="font-size: 1em" id="exp">not yet</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5><strong>Achievements</strong></h5>
                    {{--<p id="techs">{{ $profileDetails->techs }}</p>--}}
                    <div class="panel panel-default" style="margin: 20px; padding: 5px;">
                        <div class="panel-body">
                        <p style="font-size: 1em" id="achieve">not yet</p>
                    </div>
                    </div>
                </div>
            </div>
        @else
            <h3>Details not available !</h3>
        @endif
    </div>
</div>