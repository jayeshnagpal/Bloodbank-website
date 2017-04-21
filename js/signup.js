
$(document).ready(function(){

    // alert("hello");
    $('#login').click( function () {
        // alert("hello");
        var email = $('#email').val();
        var password = $('#password').val();
        if(email != '' && password != ''){
            $.ajax({
                url:"login_action.php",
                method : "POST",
                data :{email:email, password:password},
                success: function (data) {
                    if(data ==='false')
                        alert("incorrect input");
                    else
                    {

                        location.reload();
                    }
                }
            });
        }
        else{
            alert("Both feilds are requuired");
        }
    });

    $('#logout').click(function () {
        var action = "logout";

        $.ajax({

            url: "login_action.php",
            method:"POST",
            data:{action:action},
            success:function () {
                location.reload();
                //alert("Hle");
            }
        });
    });
});



