function login_check() {
    var lg_email_id_val = document.getElementById("lg_email_id").value;
    var lg_password_id_val = document.getElementById("lg_password_id").value;
    document.getElementById("login_err_lbl").innerHTML = "";
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (lg_email_id_val == "") {
        document.getElementById("login_submit").innerHTML = "login";
        document.getElementById("login_err_lbl").innerHTML = "Email is required !";
        document.getElementById("login_loading_bar").classList.remove("progress");

    } else if (lg_email_id_val.match(mailformat)) {
        if (lg_password_id_val == "") {
            document.getElementById("login_submit").innerHTML = "login";
            document.getElementById("login_err_lbl").innerHTML = "Password is required !";
            document.getElementById("login_loading_bar").classList.remove("progress");
        } else {
            $.ajax({
                type: 'POST',
                url: 'Controllers/php_login.php?login=true',
                data: $("#login_form").serialize(),
                dataType: "JSON",
                beforeSend: function() {
                    $("#login_submit").html("Wait........");
                    $(".show-progress").addClass('progress');
                    $("#login_submit").attr("disabled", true);
                },
                success: function(feedback) {
                    console.log(feedback);
                    if (feedback['error'] == 'success') {
                        location = feedback['msg'];
                    } else if (feedback['error'] == 'error') {

                        $("#login_err_lbl").html(feedback['msg']);
                        $(".show-progress").removeClass('progress');
                        $("#login_submit").html("login");
                        $("#login_submit").attr("disabled", false);

                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }

            })
        }
    } else {
        document.getElementById("login_submit").innerHTML = "login";
        document.getElementById("login_err_lbl").innerHTML = "Invalid Email !";
        document.getElementById("login_loading_bar").classList.remove("progress");
    }

}


function clr_err() {
    document.getElementById("login_err_lbl").innerHTML = "";
}

function redirect_register() {
    window.location.replace("registration.php");
}