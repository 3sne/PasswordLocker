$(document).ready(function() {
    // $("#search_button").keyup(function(event) {
    //     if (event.keyCode === 13) {
    //         $("#search_button").click();
    //     }
    // });

    $("#search_button").on("click", function(){
        var uname = $("#un").val();
        var pass =  $("#ps").val();

        if(uname == '' | pass == '') {
            $("#error_div").empty();
            $("#error_div").append('<p "style=color red;"> Empty fields not allowed </p>');
            return;
        }

        $.ajax({
            url: 'back-end/login-script.php',
            data: ({
                'uname': uname,
                'pass': pass
            }),
            method: 'POST',
            success: function(data) {
                $("#error_div").empty();
                if(data != 'success') {
                    $("#error_div").append('<p>' + data + '</p>');
                    return; 
                }
                console.log(data);
                window.open('dashboard.php','_self');
            }
        });

    });

    $("#signup_button").on("click", function(){
        var uname = $("#un").val();
        var pass =  $("#ps").val();

        if(uname == '' | pass == '') {
            $("#error_div").empty();
            $("#error_div").append('<p "style=color red;"> Can\'t Sign up with nothing -.- </p>');
            return;
        }


        if (pass.length <= 6) {
            $("#error_div").empty();
            $("#error_div").append('<p> Password must be atleast 7 characters </p>');
            return;
        }

        if (pass.length >=48) {
            $("#error_div").empty();
            $("#error_div").append('<p> Password Too Long </p>');
            return;
        }

        $.ajax({
            url: 'back-end/signup-script.php',
            data: ({
                'uname': uname,
                'pass': pass
            }),
            method: 'POST',
            success: function(data) {
                $("#error_div").empty();
                if(data != 'success') {
                    $("#ps").val('');
                    $("#error_div").append('<p>' + data + '</p>');
                    return;
                }
                $("#error_div").append('<p style="color: #048DDE;">Sign Up Complete! Login to continue </p>');
                $("#ps").val('');
                console.log(data);
            }
        });

    });
});
