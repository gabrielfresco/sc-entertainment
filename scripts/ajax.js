$("#contactform").submit(function (e) {
    var form = $(this);
    var url = form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function (data) {
            $("#messagesent").css("display", "block");
            $('#contactform').trigger("reset");
        },
        error: function (err) {
            $("#message-error").css("display", "block");
        }
    });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});