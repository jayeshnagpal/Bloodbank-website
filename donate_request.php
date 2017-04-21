<head>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <style>
        .donate{
            border: solid;
            border-width: 1px;
            padding: 1%;
            margin: 4%;
            float: left;
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
            max-width: 250px;
            width: 100%;
        }

    </style>
</head>

<div class="donate col-5">
    <form>
        <h4>Donation</h4>

        <input type="text" name="firstname"  placeholder="First name">
        <input type="text" name="lastname"  placeholder="Last name" >
        <input type="text" name="contact"  placeholder="Contact" >
        <input type="email" name="email" placeholder="Email id"
        <label>Birthdate:</label><input name="birth" type="date" >
        <input type="submit" value="Submit" class="button">

    </form>
</div>
<div class="donate col-5">
    <form>
        <h4>Details of Reciever</h4>
        <input type="text" name="first name"  placeholder="First name">
        <input type="text" name="first name"  placeholder="last name">
        <input type="text" name="first name"  placeholder="Contact">
        <label>Birthdate:</label><input name="birth" type="date">
        <input type="submit" value="Submit" class="button">

    </form>
</div>
