function Validate() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}








$(document).ready(function () {
    $("#type").change(function () {
        var type = $("#type").val();

        if (type == 7) {
            $("#url").hide(1000);
            $("#upload_video").show(1000);
        }

        if (type == 6) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 5) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 4) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 3) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 2) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 1) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }

    });

    $(window).on('load', function () {
        var type = $("#type").val();

        if (type == 6) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 5) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 4) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 3) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 2) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 1) {
            $("#url").show(1000);
            $("#upload_video").hide(1000);
        }
        if (type == 7) {
            $("#url").hide(1000);
            $("#upload_video").show(1000);
        }
    });

});



