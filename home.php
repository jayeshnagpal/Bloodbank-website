<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hompage</title>
    <link rel="stylesheet" type="text/css" href="css/home.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">


</head>
<body>
<!-- Navigation Bar
<nav>
    <ul class="navig">
        <li><a href="#main" >Home</a></li>
        <li><a href="#news">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
        <li class="right"><a href="#home">BloodBank</a> </li>
    </ul>
</nav>
-->

<?php
include "navigation.php"
?>

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
        <div class="sub">Comments and Feedback of the donars.</div>
    </div>
</div>
<div class="row">
    <div class="col-3 content1">
        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
    </div>
    <div class="col-3 content1">
        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
    </div>
    <div class="col-3 content1">
        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
    </div>
    <div class="col-3 content1">
        <div class="card-panel teal">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
    </div>
</div>
</div>
<div id="session">
    <?php
    if(!isset($_Session))
    include 'login.html';

    ?>
</div>
<div id="about">
<?php
include 'foot.php'
?>
</div>
</body>
</html>