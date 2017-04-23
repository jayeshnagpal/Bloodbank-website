<head>
    <!--<link rel="stylesheet" type="text/css" href="css/home.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <style>
        .donate{
            padding: 1%;
            margin: 4%;
            float: left;
        }
        .button {
            float: right;
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
</head>
<div class="row">
    <h4>Details of Reciever</h4>
<div class="donate col-8">
    <form>
        <input type="text" id="first_name"  placeholder="First name" class="name">
        <input type="text" id="last_name"  placeholder="last name" class="name">
        <input type="text" id="contact"  placeholder="Contact" class="name">
        <label style="font-size: medium">Birthdate:</label><input name="birth" type="date" class="name" style="max-width: 200px">
        <br><input type="submit" value="Submit" class="button">

    </form>
</div>
    </div>
