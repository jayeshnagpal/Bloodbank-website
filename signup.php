<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<style>
    .signup{
        max-width: 60%;
        padding-left: 2%;
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
</style>

<div class="signup">
    <form method="post" action="signup_action">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="submit" value="Signup" class="button">


    </form>
</div>
