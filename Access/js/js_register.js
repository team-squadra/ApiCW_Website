function h_register_check() {

    var h_reg_uname_val_id = document.getElementById("h_reg_uname_id").value;
    var h_reg_email_val_id = document.getElementById("h_reg_email_id").value;
    var h_reg_pass_val_id = document.getElementById("h_reg_pass_id").value;
    var h_reg_conpass_val_id = document.getElementById("h_reg_conpass_id").value;

    var atr_register_loading_bar = document.getElementById("register_loading_bar");
    var atr_register_err_lbl = document.getElementById("h_register_err_lbl");
    var atr_register_submit = document.getElementById("h_register_submit");

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    atr_register_err_lbl.innerHTML = ""; //clr err


    if (h_reg_uname_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Hotel Username is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (h_reg_email_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Email is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (h_reg_email_val_id.match(mailformat)) {

        if (h_reg_pass_val_id == "") {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Password is required !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (h_reg_conpass_val_id == "") {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Confirm your password !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (h_reg_conpass_val_id != h_reg_pass_val_id) {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Password Mismatch !";
            document.getElementById("h_reg_pass_id").value = "";
            document.getElementById("h_reg_conpass_id").value = "";
            atr_register_loading_bar.classList.remove("progress");

        } else {

            $.ajax({
                type: 'POST',
                url: 'Controllers/php_registration.php?registration_hotel=true',
                data: $("#register_form").serialize(),
                dataType: "JSON",
                beforeSend: function() {
                    $("#h_register_submit").html("Wait........");
                    $(".show-progress").addClass('progress');
                    $("#h_register_submit").attr("disabled", true);
                },
                success: function(feedback) {
                    console.log(feedback);
                    if (feedback['error'] == 'success') {
                        //Registration successful !
                        var r = confirm(
                            'Registration successful !\n\n' +
                            "Login now ? "
                        );
                        if (r == true) {
                            location = feedback['msg'];
                        } else {
                            location.reload();
                        }

                    } else if (feedback['error'] == 'error') {

                        $("#h_register_err_lbl").html(feedback['msg']);
                        $(".show-progress").removeClass('progress');
                        $("#h_register_submit").html("signup");
                        $("#h_register_submit").attr("disabled", false);

                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })

        }

    } else {
        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Invalid Email !";
        atr_register_loading_bar.classList.remove("progress");
    }



}


function u_register_check() {

    var u_reg_uname_val_id = document.getElementById("u_reg_uname_id").value;
    var u_reg_phone_val_id = document.getElementById("u_reg_phone_id").value;
    var u_reg_email_val_id = document.getElementById("u_reg_email_id").value;
    var u_reg_pass_val_id = document.getElementById("u_reg_pass_id").value;
    var u_reg_conpass_val_id = document.getElementById("u_reg_conpass_id").value;

    var atr_register_loading_bar = document.getElementById("register_loading_bar");
    var atr_register_err_lbl = document.getElementById("u_register_err_lbl");
    var atr_register_submit = document.getElementById("u_register_submit");

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    atr_register_err_lbl.innerHTML = ""; //clr err


    if (u_reg_uname_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "User Name is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (u_reg_phone_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Phone number is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (u_reg_email_val_id == "") {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Email is required !";
        atr_register_loading_bar.classList.remove("progress");

    } else if (u_reg_email_val_id.match(mailformat)) {

        if (u_reg_pass_val_id == "") {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Password is required !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (u_reg_conpass_val_id == "") {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Confirm your password !";
            atr_register_loading_bar.classList.remove("progress");

        } else if (u_reg_conpass_val_id != u_reg_pass_val_id) {

            atr_register_submit.innerHTML = "Sign up";
            atr_register_err_lbl.innerHTML = "Password Mismatch !";
            document.getElementById("u_reg_pass_id").value = "";
            document.getElementById("u_reg_conpass_id").value = "";
            atr_register_loading_bar.classList.remove("progress");

        } else {

            $.ajax({
                type: 'POST',
                url: 'Controllers/php_registration.php?registration_user=true',
                data: $("#register_form").serialize(),
                dataType: "JSON",
                beforeSend: function() {
                    $("#u_register_submit").html("Wait........");
                    $(".show-progress").addClass('progress');
                    $("#u_register_submit").attr("disabled", true);
                },
                success: function(feedback) {
                    console.log(feedback);
                    if (feedback['error'] == 'success') {
                        //Registration successful !
                        var r = confirm(
                            'Registration successful !\n\n' +
                            "Login now ? "
                        );
                        if (r == true) {
                            location = feedback['msg'];
                        } else {
                            location.reload();
                        }

                    } else if (feedback['error'] == 'error') {

                        $("#u_register_err_lbl").html(feedback['msg']);
                        $(".show-progress").removeClass('progress');
                        $("#u_register_submit").html("signup");
                        $("#u_register_submit").attr("disabled", false);

                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })

        }

    } else {

        atr_register_submit.innerHTML = "Sign up";
        atr_register_err_lbl.innerHTML = "Invalid Email !";
        atr_register_loading_bar.classList.remove("progress");
    }



}

function reg_as_user() {
    document.getElementById("nav_div").style.display = "none";
    document.getElementById("user_reg_div").style.display = "";
    document.getElementById("hotel_reg_div").style.display = "none";
}

function reg_as_hotel() {
    document.getElementById("nav_div").style.display = "none";
    document.getElementById("user_reg_div").style.display = "none";
    document.getElementById("hotel_reg_div").style.display = "";
}

function clr_err() {
    document.getElementById("u_register_err_lbl").innerHTML = "";
    document.getElementById("h_register_err_lbl").innerHTML = "";
}

function redirect_login() {
    window.location.replace("login.php");
}