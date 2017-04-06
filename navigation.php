<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

    body {
        margin: 0;
    }

    ul.navi {
         list-style-type: none;
         margin: 0;
         overflow: hidden;
         width: 100%;
         background-color: #4b4b4b;
        position: fixed;
        font-size: large;
    }

    ul.navi li {
        float: left;
        padding-left: 30px;
        display: inline;
    }

    ul.navi li a {
        display: block;
        color: white;
        text-align: center;
        padding: 20px 20px 20px 20px;
        text-decoration: none;
    }

    ul.navi li a:hover:not(.active) {
        background-color: #222222;
    }


    @media screen and (max-width: 745px){
        ul.navi{position:relative; font-size: small;}
        ul.navi li {float: none; padding: 5px 5px 5px 5px;}
    }

</style>
<script src="jq/js1.js"></script>
<ul class="navi">
    <li><a href="#center" >Home</a></li>
    <?php
    if(isset($_Session) == false)
        echo <<<TAG
<li><a href="#session">Login/Signup</a></li>
TAG;
    ?>

    <li><a href="#request_donate">Request/Donate</a></li>
    <li><a href="#session">Near-by</a></li>
    <li><a href="#about">About</a></li>
</ul>
