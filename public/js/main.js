var postId=0;
var postBodyElement= null;

/*
* edit menu click action
* */

$('.edit').on('click', function(event)
{
    event.preventDefault();
    var firstName = $('#firstName').html();
    var lastName = $('#lastName').html();
    var phone = $('#phone').html();
    var degree = $('#degree').html();
    var linkedin = $('#linkedin').text();
    var objective = $('#objective').html();
    var techs = $('#techs').html();

    $('#firstName-modal').val(firstName);
    $('#lastName-modal').val(lastName);
    $('#phone-modal').val(phone);
    $('#degree-modal').val(degree);
    $('#linkedin-modal').val(linkedin);
    $('#objective-modal').val(objective);
    $('#techskills-modal').val(techs);

    $('#edit-modal').modal();

});