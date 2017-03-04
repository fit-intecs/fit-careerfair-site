@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Profile</div>

                <div class="panel-body">
                    @if($profileDetails)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-5">

                                        <h3>{{ $profileDetails->firstName . " " . $profileDetails->lastName}}</h3>

                                        @if (\Illuminate\Support\Facades\Storage::disk('local')->has(Auth::user()->name  . '.jpg'))
                                            {{--<section class="row new-post">--}}

                                                <img src="{{ route('profile.image', ['filename' => Auth::user()->name . '.jpg']) }}" alt="" class="img-responsive">

                                            {{--</section>--}}
                                        @elseif (!\Illuminate\Support\Facades\Storage::disk('local')->has(Auth::user()->name . '.jpg'))

                                                <img src="{{ route('profile.image', ['filename' => 'annony' . '-' . '0' . '.jpg']) }}" alt="" class="img-responsive">
                                        @endif

                                         {{--<img src="#" style="border: 1px solid #778899; height: 200px; width: 200px;">--}}
                                    </div>
                                    <div class="col-md-5 col-md-offset-1" style="margin-top: 50px;">
                                        <h5><strong>Full Name: </strong></h5> <p>{{ $profileDetails->firstName . " " . $profileDetails->lastName}}</p>
                                        <h5><strong>Phone Number: </strong></h5> <p>{{ $profileDetails->phone }}</p>
                                        <h5><strong>Degree: </strong></h5> <p>{{ $profileDetails->degree }}</p>
                                        <h5><strong>LinkedIn: </strong></h5> <p><a href="{{ $profileDetails->linkedinLink  }}">{{ $profileDetails->linkedinLink }}</a></p>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><strong>Profile</strong></h5>
                                    <p>{{ $profileDetails->objective }}</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><strong>Technical Skills</strong></h5>
                                    <p>{{ $profileDetails->techs }}</p>
                                </div>
                            </div>
                        @else
                            <h3>Please update your profile details!</h3>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
