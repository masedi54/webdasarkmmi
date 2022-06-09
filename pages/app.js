$(document).ready(function() {

    $('#game-form').on({

        submit: function(event) {

            var formData = {
                value: $("#guess-value").val()
            };

            $.ajax({
                method: 'POST',
                url: "api/guess.php",
                data: formData,
                dataType: "json",
                encode: true
            }).done(function(data) {
                $("#guess-value").val('');
                if (data.result) {
                    $('#hint-box').html('Congrats, your guess is true!');
                } else {
                    $('#hint-box').html(data.hint);
                }
            }).fail(function(data) {
                $("form").html(
                    '<div class="alert alertdanger">Could not reach server, please try again later.</div>'
                );
            });
            event.preventDefault();
        }

    });

    setTimeout(() => {
        $('#get-update').trigger('click');
    }, 1000);

});