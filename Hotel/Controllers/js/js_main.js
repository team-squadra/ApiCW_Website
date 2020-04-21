function loadingprofile() {
    var hotel_pool_input_val = document.getElementById("hotel_pool_input").value;
    var hotel_parking_input_val = document.getElementById("hotel_parking_input").value;
    var hotel_spa_input_val = document.getElementById("hotel_spa_input").value;
    var hotel_bar_input_val = document.getElementById("hotel_bar_input").value;
    var hotel_wifi_input_val = document.getElementById("hotel_wifi_input").value;

    toggle_hotel_pool(hotel_pool_input_val);
    toggle_hotel_parking(hotel_parking_input_val);
    toggle_hotel_spa(hotel_spa_input_val);
    toggle_hotel_bar(hotel_bar_input_val);
    toggle_hotel_wifi(hotel_wifi_input_val);

}


function toggle_hotel_pool(xx) {
    if (xx == 1) {
        document.getElementById("pool_ava").style.display = "inline";
        document.getElementById("pool_notava").style.display = "none";
        document.getElementById("hotel_pool_input").value = 1;
    } else {
        document.getElementById("pool_ava").style.display = "none";
        document.getElementById("pool_notava").style.display = "inline";
        document.getElementById("hotel_pool_input").value = 0;
    }
}

function toggle_hotel_parking(xx) {
    if (xx == 1) {
        document.getElementById("parking_ava").style.display = "inline";
        document.getElementById("parking_notava").style.display = "none";
        document.getElementById("hotel_parking_input").value = 1;
    } else {
        document.getElementById("parking_ava").style.display = "none";
        document.getElementById("parking_notava").style.display = "inline";
        document.getElementById("hotel_parking_input").value = 0;
    }
}

function toggle_hotel_spa(xx) {
    if (xx == 1) {
        document.getElementById("spa_ava").style.display = "inline";
        document.getElementById("spa_notava").style.display = "none";
        document.getElementById("hotel_spa_input").value = 1;
    } else {
        document.getElementById("spa_ava").style.display = "none";
        document.getElementById("spa_notava").style.display = "inline";
        document.getElementById("hotel_spa_input").value = 0;
    }
}

function toggle_hotel_bar(xx) {
    if (xx == 1) {
        document.getElementById("bar_ava").style.display = "inline";
        document.getElementById("bar_notava").style.display = "none";
        document.getElementById("hotel_bar_input").value = 1;
    } else {
        document.getElementById("bar_ava").style.display = "none";
        document.getElementById("bar_notava").style.display = "inline";
        document.getElementById("hotel_bar_input").value = 0;
    }
}

function toggle_hotel_wifi(xx) {
    if (xx == 1) {
        document.getElementById("wifi_ava").style.display = "inline";
        document.getElementById("wifi_notava").style.display = "none";
        document.getElementById("hotel_wifi_input").value = 1;
    } else {
        document.getElementById("wifi_ava").style.display = "none";
        document.getElementById("wifi_notava").style.display = "inline";
        document.getElementById("hotel_wifi_input").value = 0;
    }
}

function switch_to_edit() {
    document.getElementById("profile_details_view").style.display = "none";
    document.getElementById("profile_details_input").style.display = "block";
}

function switch_to_profileview() {
    document.getElementById("profile_details_view").style.display = "block";
    document.getElementById("profile_details_input").style.display = "none";
}

function get_img_name() {
    var hotel_image_input = document.getElementById("hotel_image_input").value;
    var name = hotel_image_input.split("fakepath")[1];
    document.getElementById("img_input_val").innerHTML = "<p style='font-size: 10px;'>" + name + "</p>";
}

function loadbar() {
    document.getElementById("close_btn").style.display = "none";
    document.getElementById("update_loading_bar").classList.add("progress");
}

toggle_icons(1);
toggle_icons(2);
toggle_icons(3);
toggle_icons(4);
toggle_icons(5);
toggle_icons(6);
toggle_icons(7);

function toggle_icons(xx) {
    if (xx == 1) {
        var tt = document.getElementById("air_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("air_ico_view").style.backgroundColor = "gray";
            document.getElementById("air_ico_val_id").value = "0";
        } else {
            document.getElementById("air_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("air_ico_val_id").value = "1";
        }
    } else if (xx == 2) {
        var tt = document.getElementById("tv_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("tv_ico_view").style.backgroundColor = "gray";
            document.getElementById("tv_ico_val_id").value = "0";
        } else {
            document.getElementById("tv_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("tv_ico_val_id").value = "1";
        }
    } else if (xx == 3) {
        var tt = document.getElementById("bar_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("bar_ico_view").style.backgroundColor = "gray";
            document.getElementById("bar_ico_val_id").value = "0";
        } else {
            document.getElementById("bar_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("bar_ico_val_id").value = "1";
        }
    } else if (xx == 4) {
        var tt = document.getElementById("wardrobe_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("wardrobe_ico_view").style.backgroundColor = "gray";
            document.getElementById("wardrobe_ico_val_id").value = "0";
        } else {
            document.getElementById("wardrobe_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("wardrobe_ico_val_id").value = "1";
        }
    } else if (xx == 5) {
        var tt = document.getElementById("safe_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("safe_ico_view").style.backgroundColor = "gray";
            document.getElementById("safe_ico_val_id").value = "0";
        } else {
            document.getElementById("safe_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("safe_ico_val_id").value = "1";
        }
    } else if (xx == 6) {
        var tt = document.getElementById("sound_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("sound_ico_view").style.backgroundColor = "gray";
            document.getElementById("sound_ico_val_id").value = "0";
        } else {
            document.getElementById("sound_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("sound_ico_val_id").value = "1";
        }
    } else if (xx == 7) {
        var tt = document.getElementById("bathroom_ico_val_id").value;
        if (tt == 1) {
            document.getElementById("bathroom_ico_view").style.backgroundColor = "gray";
            document.getElementById("bathroom_ico_val_id").value = "0";
        } else {
            document.getElementById("bathroom_ico_view").style.backgroundColor = "mediumseagreen";
            document.getElementById("bathroom_ico_val_id").value = "1";
        }
    } else {

    }
}


function adaroom_load() {
    var r_id_id_val = document.getElementById("r_id_id").value;
    var r_type_id_val = document.getElementById("r_type_id").value;
    var r_capacity_id_val = document.getElementById("r_capacity_id").value;
    var r_price_id_val = document.getElementById("r_price_id").value;
    var r_view_id_val = document.getElementById("r_view_id").value;

    if (r_id_id_val != "" && r_type_id_val != "" && r_capacity_id_val != "" && r_price_id_val != "" && r_view_id_val != "") {
        document.getElementById("adaroom_loading_bar").classList.add("progress");
    } else {
        document.getElementById("adaroom_loading_bar").classList.remove("progress");
    }
}

function switchDiv(xx) {

    if (xx == 1) {
        document.getElementById("addRoomBtn").style.display = "none";
        document.getElementById("addRoomDiv").style.display = "block";
    } else {
        document.getElementById("addRoomBtn").style.display = "inline";
        document.getElementById("addRoomDiv").style.display = "none";
    }

}