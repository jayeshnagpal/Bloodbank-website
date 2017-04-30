<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hompage</title>
    <link rel="stylesheet" type="text/css" href="css/home.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="a donor,become a blood donor,
becoming a blood donor,becoming a blood donor,blood donor registry,donor donation,
donor register">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body>
<?php
include "navigation.php "
?>
<main>
<div id = "center">

<!-- Images below navigation bar -->
<div class="row" style="height: 20%; padding-top: 70px;">
    <div class="col-4 content" >
        <img src="images/image2.jpg" width="100%" height="auto">
    </div>
    <div class="col-4 content" id="img2">
        <img src="images/image2.jpg" width="100%" height="auto">
    </div>
    <div class="col-4 content" id="img2">
        <img src="images/image2.jpg" width="100%" height="auto">
    </div>

</div>

<!-- Comments and Feedback -->'
<hr style="opacity: 0.5; margin:0">
<div class="row" style="margin-top: 0">
    <div class="col-12">
        <div class="sub">Comments and Feedback of the donors.</div>
    </div>
</div>
<div class="row">
    <div class="col-3 content1">
        <div class="card-panel teal">
            <article><span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span></article>
        </div>
    </div>
    <div class="col-3 content1">
        <div class="card-panel teal">
            <article><span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span></article>
        </div>
    </div>
    <div class="col-3 content1">
        <div class="card-panel teal">
          <article><span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span></article>
        </div>
    </div>
    <div class="col-3 content1">
        <div class="card-panel teal">
            <article><span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
             </span></article>
        </div>
    </div>
</div>
</div>
</main>
<div id="session" >
    <?php
    if(empty($_SESSION))
        include 'login_signup.php';
    else{
        <<<Tag
    <form>
        <input type="text" placeholder="Your Comments">
        <input type="submit"> 
    </form>
Tag;
        include "donate_request.php";
    }
    ?>
</div>
<div id="about">
<?php
include 'foot.php';
?>
</div>
</body>
</html>