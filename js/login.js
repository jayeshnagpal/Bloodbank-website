
$(document).ready(function(){

    // alert("hello");
    $('#login').click( function () {
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
            alert("Both feilds are required");
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
            }
        });
    });

    $('#signup').click( function () {
        alert("success");
        var emailid = $('#emailid').val();
        var pass = $('#pass').val();
        var fname = $('#fname').val();
        var lname = $('#lname').val();

        if(emailid != '' && pass != '' && fname!=''){
            alert("success 1");
            $.ajax({
                url:"signup_action.php",
                method : "POST",
                data :{emailid:emailid, pass:pass, lname:lname, fname:fname },
                success: function (data) {
                    alert(emailid);
                    if(data =='false')
                        alert("Email Already Exists");
                    else
                    {
                        location.href = "signup_action.php";
                    }
                }
            });
        }
        else{
            alert("All fields are required");
        }
    });
});



