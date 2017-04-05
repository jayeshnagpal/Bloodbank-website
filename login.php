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
    .recents{
        float:left;
        padding-left: 10%;
        font-size: small;
        font-family: "Bell MT";
        color: #353535;
    }
</style>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
<div class="login">

    <div class="row">

    <div class="my-form col-4">
        <h4>Login</h4>
    <form action="login_action.php" method="post">
        <input type="email" placeholder="Email-id" name="email" required/>
        <input type="password" placeholder="Password" name="password" required/>
        <input type="submit"  style="float: none;" value="Login" class="button"/>
        <a href="signup.php" style="float: right">Sign-up here >></a>
    </form>
    </div>
        <div class="col-8 recents">
            <h4>Recent Requests</h4>
            <?php
            include 'requests.php'
            ?>

        </div>
    </div>

</div>
</body>