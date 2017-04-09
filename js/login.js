
$(document).ready(function(){
    $("#add_err").css('display', 'none', 'important');
    $("login").click(function () {
        email = $("#email").val();
        password = $("#password").val();

        $ajax({
            type: "POST",
            url: "login_action.php",
            data: "email="+username+"&pasword="+password,
            success: function(html) {
                if (html == 'true') {
                    //$("#add_err").html("right username or password");
                    window.location = "dashboard.php";
                }
                else {
                    $("#add_err").css('display', 'inline', 'important');
                    $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
                }
            },
            beforeSend:function()
            {
                $("#add_err").css('display', 'inline', 'important');
                $("#add_err").html("<img src='images/ajax-loader.gif' /> Loading...")
            }
        });
        return false;

        })
});