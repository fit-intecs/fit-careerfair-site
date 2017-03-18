@extends('layouts.app')

@section('header')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-tokenfield.css') }}">
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">

@endsection

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
                        {{--<textarea class="form-control" id="techskills" rows="3" name="techskills"></textarea>--}}
                        <input type="text" class="form-control" id="tokenfield" name="techskills" value="Java,C#.NET, Python" />

                    </div>

                    <div class="form-group" >
                        <label for="techskills">Experience</label>
                        {{--<textarea class="form-control" id="techskills" rows="3" name="techskills"></textarea>--}}
                        <a class="" id="exp-remove" style="float: right; color: palevioletred; margin-left: 10px;"><span>-</span>Remove</a>
                        <a class="" id="exp-add" style="float: right;color:cornflowerblue;"><span>+</span>Add</a>


                        <div class="exp-section">
                            <ul class="exp-list">


                            </ul>

                        </div>
                    </div>

                    <div class="form-group" >
                        <label for="techskills">Achievements</label>
                        <a class="" id="ach-remove" style="float: right; color: palevioletred; margin-left: 10px;"><span>-</span>Remove</a>
                        <a class="" id="ach-add" style="float: right;color:cornflowerblue;"><span>+</span>Add</a>


                        <div class="ach-section">
                            <ul class="ach-list">


                            </ul>

                        </div>
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


    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ URL::to('js/bootstrap-tokenfield.js') }}"></script>

    <script>
        $('#tokenfield').tokenfield({
            autocomplete: {
                source: ['Java', 'C#.NET', 'Python', 'Laravel', 'Spring'],
                delay: 100
            },
            showAutocompleteOnFocus: true
        })
    </script>
    
    <script>

        $('#exp-add').on('click', function () {

            count = $('.exp-section ul').children().length+1;

            $('.exp-section .exp-list').append('<li><div class="control-group" id="control-group' + count + '"><label class="control-label" for="experience' + count + '">Experience' + count +
            '</label><div class="controls' + count + '"><textarea class="form-control" id="objective" rows="3" name="objective"></textarea></div></div></li>');

        });

        $('#exp-remove').on('click', function () {

//            count = $('.exp-section ul').children().length;
            $('.exp-section ul li:last').remove();
        });

        $('#ach-add').on('click', function () {

            count = $('.ach-section ul').children().length+1;

            $('.ach-section .ach-list').append('<li><div class="control-group" id="control-group' + count + '"><label class="control-label" for="achievements' + count + '">Achievement' + count +
            '</label><div class="controls' + count + '"><textarea class="form-control" id="objective" rows="3" name="objective"></textarea></div></div></li>');

        });

        $('#ach-remove').on('click', function () {

//          count = $('.exp-section ul').children().length;
            $('.ach-section ul li:last').remove();
        });

    </script>
@endsection