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

                                        @if (\Illuminate\Support\Facades\Storage::disk('local')->has(\Illuminate\Support\Str::upper(Auth::user()->name)  . '.jpg'))

                                                <img src="{{ route('profile.image', ['filename' => \Illuminate\Support\Str::upper(Auth::user()->name) . '.jpg']) }}" alt="" class="img-responsive">

                                        @else
                                                <img src="/img/default-user.png" class="img-responsive">
                                        @endif

                                    </div>

                                    <div class="col-md-5 col-md-offset-1" style="margin-top: 50px;">
                                        <h5><strong>First Name: </strong></h5><p id="firstName">{{ $profileDetails->firstName}} </p>
                                        <h5><strong>Last Name: </strong></h5><p id="lastName">{{ $profileDetails->lastName}} </p>
                                        <h5><strong>Phone Number: </strong></h5> <p id="phone">{{ $profileDetails->phone }}</p>
                                        <h5><strong>Degree: </strong></h5> <p id="degree">{{ $profileDetails->degree }}</p>
                                        <h5><strong>LinkedIn: </strong></h5> <p id="linkedin"><a href="{{ $profileDetails->linkedinLink  }}">{{ $profileDetails->linkedinLink }}</a></p>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><strong>Profile</strong></h5>
                                    <p id="objective">{{ $profileDetails->objective }}</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5><strong>Technical Skills</strong></h5>
                                    <p id="techs">{{ $profileDetails->techs }}</p>
                                </div>
                            </div>
                        @else
                            <h3>Please update your profile details!</h3>
                        @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="post-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="#">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName-modal" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstName">
                            <small id="emailHelp" class="form-text text-muted">Your first name will be shared publicly.</small>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName-modal" aria-describedby="emailHelp" placeholder="Enter email" name="lastName">
                            <small id="emailHelp" class="form-text text-muted">Your last name will be shared publicly</small>
                        </div>

                        <div class="form-group">
                            <label for="phoneNo">Phone NO.</label>
                            <input type="text" class="form-control" id="phone-modal" aria-describedby="emailHelp" placeholder="Enter Phone Number" name="phone">
                            <small id="emailHelp" class="form-text text-muted">phone number will be shared publicly</small>
                        </div>

                        <div class="form-group">
                            <label for="linkedinLink">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin-modal" aria-describedby="emailHelp" placeholder="Enter Link" name="linkedin">
                            <small id="emailHelp" class="form-text text-muted">Link will be shared publicly</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Degree</label>
                            <select class="form-control" id="degree-modal" name="degree">
                                <option value="IT">BSc(Hons) IT</option>
                                <option value="ITM">BSc(Hons) ITM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="objective">Profile/Objective</label>
                            <textarea class="form-control" id="objective-modal" rows="3" name="objective"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="techskills">Technical Skills</label>
                            <textarea class="form-control" id="techskills-modal" rows="3" name="techskills"></textarea>
                        </div>
                        <div class="col-md-offset-11">
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
