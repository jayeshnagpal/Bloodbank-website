<head><style>
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
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
<div class="login">

    <div class="row">
    <div class="err" id="add_err"></div>
    <div class="my-form col-6">
        <h4>Login</h4>
    <form action="./" method="post" id="login_form">
        <input type="email" placeholder="Email-id" name="email" required/>
        <input type="password" placeholder="Password" name="password" required/>
        <input type="submit"  style="float: none;" value="Login" id="login" class="button"/>
    </form>
    </div>
        <div class="col-6 my-form">
            <h4>SignUp</h4>
            <form method="post" action="signup_action.php">
                <input type="text" name="fname" placeholder="First Name" class="name" required>
                <input type="text" name="lname" placeholder="Last Name" class="name" required>
                <input type="email" placeholder="Email-id" name="email" style="max-width: 300px" required/>
                <input type="password" placeholder="Password" name="password" style="max-width: 300px" required/>

                <input type="submit" value="Signup" class="button" style="float: none;">

            </form>

        </div>
    </div>

</div>
</body>