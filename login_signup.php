
<head>
    <style>
    .my-form{
        float: left;
        width: 60%;
        padding-left: 2%;
    }
    .login{
        padding-bottom: 5%;
        font-family: "Palatino Linotype";
    }
    .button {

        display: inline-block;
        border-radius: 4px;
        background-color: #00a092;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: small;
        padding: 15px;
        width: 25%;

    }

    .name{
        font-size: large;
        max-width: 300px;
        width: 100%;
    }


</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <script src="js/login.js"></script>
</head>

<body>
<div class="login">

    <div class="row">
    <div class="my-form col-6">
        <h4>Login</h4>
    <form method="post" id="login_form">
        <input type="email" placeholder="Email-id" name="email" id="email" required/>
        <input type="password" placeholder="Password" name="password" id="password" required/>
        <input type="submit"  style="float: none;" value="Login" id="login" class="button"/>
    </form>
        <p id="output" style="float: right"></p>
    </div>
        <div class="col-6 my-form">
            <h4>SignUp</h4>
            <form method="post" id="signup_form">
                <input type="text" id="fname" placeholder="First Name" class="name" required>
                <input type="text" id="lname" placeholder="Last Name" class="name" required>
                <input type="email" placeholder="Email-id" id="emailid" style="max-width: 300px" required/>
                <input type="password" placeholder="Password" id="pass" style="max-width: 300px" required/>

                <input type="submit" value="Signup" class="button" style="float: none;" id="signup">

            </form>

        </div>
    </div>

</div>
</body>