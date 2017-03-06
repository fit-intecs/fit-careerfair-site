@extends('layouts.app')

@section('content')
    @include('includes.message-box')

    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">My Profile Settings</h3>
                </div>
                <div class="panel-body">
                <form method="post" action="{{ route('postProfileDetails') }}">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstName">
                    <small id="emailHelp" class="form-text text-muted">Your first name will be shared publicly.</small>
                </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" aria-describedby="emailHelp" placeholder="Enter email" name="lastName">
                        <small id="emailHelp" class="form-text text-muted">Your last name will be shared publicly</small>
                    </div>

                    <div class="form-group">
                        <label for="phoneNo">Phone NO.</label>
                        <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number" name="phone">
                        <small id="emailHelp" class="form-text text-muted">phone number will be shared publicly</small>
                    </div>

                    <div class="form-group">
                        <label for="linkedinLink">LinkedIn</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Link" name="linkedin">
                        <small id="emailHelp" class="form-text text-muted">Link will be shared publicly</small>
                    </div>
                <div class="form-group">
                    <label for="exampleSelect1">Degree</label>
                    <select class="form-control" id="exampleSelect1" name="degree">
                        <option value="IT">BSc(Hons) IT</option>
                        <option value="ITM">BSc(Hons) ITM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="objective">Profile/Objective</label>
                    <textarea class="form-control" id="objective" rows="3" name="objective"></textarea>
                </div>
                    <div class="form-group">
                        <label for="techskills">Technical Skills</label>
                        <textarea class="form-control" id="techskills" rows="3" name="techskills"></textarea>
                    </div>

                <div class="col-md-offset-11">
                <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </div>
            </form>

                </div>
            </div>
        </div>
    </div>

@endsection