$(window).on('ajaxErrorMessage', function(event, message)
{
    $('#errors').html(message);
    event.preventDefault();
})