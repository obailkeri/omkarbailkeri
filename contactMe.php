<?php
    $result1="";
    $result2="";
    if(isset($_POST['submit']))
    {
        $email = "agenta1b2@gmail.com";
        $name = "Me";
        $body = '<h4>Name : '.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Message : '.$_POST['message'].'</h4>';
        $subject = 'Form Submitted By: '.$_POST['name'];

        $headers = array(
            'Authorization: Bearer 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',
            'Content-Type: application/json'
        );

        $data = array(
            "personalizations" => array(
                array(
                    "to" => array(
                        array(
                            "email" => $email,
                            "name" => $name
                        )
                    )
                )
            ),
            "from" => array(
                "email" => "agenta1b2@gmail.com"
            ),
            "subject" => $subject,
            "content" => array(
                array(
                    "type" => "text/html",
                    "value" => $body
                )
            )
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);    
        echo $response;

        if($response) {
            $result2="Something went wrong. Please try again.";
            $result1="";
        }
        else {
            $result1="Thanks ".$_POST['name']." for contacting.";
            $result2="";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156052110-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-156052110-1');
    </script>

    <title>Contact Me - I m Omkar Bailkeri</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="I m Omkar Bailkeri. My website includes My Work as Web Developer and Designer. I have created cool snippets using html, css, bootstrap, jquery and javascript.">

    <!-- CDN links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/logo.png">

    <style type="text/css">

@keyframes slideInFromTop {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}

@keyframes slideInFromBottom {
  0% {
    transform: translateY(30%);
  }
  100% {
    transform: translateY(0);
  }
}

html {
    min-height: 100%;
    width: 100%;
    scroll-behavior: smooth;
    overflow-x: hidden;
}

body {
    background-color: #eeeeee;
    color: #000 !important;
    width: 100% !important;
    overflow-x: hidden;
    font-family: Bookman Old Style;
    padding-right: 0px !important;
}

a {
    color: inherit;
    text-decoration: none !important;
}

a:hover {
    color: inherit;
}

button {
    box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.5);
}

button:hover {
    box-shadow: none;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

/*Logo icon*/
.icon {
    width: 45px;
    height: 45px;
    border-radius: 10px;
    box-shadow: 2px 4px 8px #000;
    transition: 1.2s;
}

.icon:hover {
    transform: scale(1.1);
    transition: 1.2s;
}

/*Navbar*/
.navbar {
    z-index: 99;
    position: fixed !important;
    width: 100%;
    padding: 30px 20px 20px;
    transition: 0.8s;
    box-shadow: 1px 1px 4px grey;
    animation: 1s ease-out 0s 1 slideInFromTop;
}

.navbar-toggler-icon {
    color: #000 !important;
}

.sticky {
    position: fixed !important;
    background: #fff !important;
    width: 100%;
    top: 0;
    padding: 10px;
    transition: 0.8s;
}

.navbar-white {
    background-color: rgba(255, 255, 255, 0.9);
    color: #000 !important;
    transition: 0.8s;
}

.nav-item.active, .nav-item.active:hover {
    font-weight: bold;
    border-bottom: 3px solid #000;
    transition: 0.8s;
}

.nav-item {
    font-weight: normal;
    border-bottom: none;
    transition: 0.6s;
    font-size: 18px;
}

.nav-item:hover {
    transform: scale(1.1);
    transition: 0.6s;
}

/*Section 1*/
#sec1 {
    background: url("images/bg3-0.jpg");
    background-attachment: fixed;
    background-position: bottom center;
    background-size: 100% 100%;
    z-index: -10;
    height: 330px;
    width: auto;
    padding-top: 160px;
    color: #fff;
}

#sec1 h1 {
    font-size: 40px;
    transition: 0.8s;
}

#sec1 h1:hover {
    transform: scale(1.1);
    transition: 0.8s;
}

#sec2 {
    color: #000;
}

.screenshot {
    border-radius: 20px;
    box-shadow: 2px 4px 6px grey;
    transition: 0.8s;
}

.screenshot:hover {
    transform: scale(1.05);
    transition: 0.8s;
    cursor: pointer;
}

#last-section {
    background-image: url("images/bg-4.jpg");
    background-attachment: fixed;
    background-position: center;
    background-size: 100% 100vh;
    width: 100%;
    color: #fff;
}

.copyright {
    background-color: #000;
}

@media screen and (max-width: 1070px) {
    #sec2 {
        background: url("images/bg3-2.jpg");
        background-attachment: fixed;
        background-size: auto 100% !important;
        background-position: bottom center;
        z-index: -10;
    }
}

@media screen and (max-width: 700px) {

    .navbar {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .nav-item.active, .nav-item.active:hover {
        font-weight: bold;
        border-bottom: none;
        transition: 0.8s;
    }

    .nav-item:hover {
        font-weight: bold;
        transform: none;
        transition: 0s;
    }

    #sec1 {
        background: url("images/bg3-0.jpg");
        background-attachment: fixed;
        background-position: bottom left;
        background-size: auto 100%;
        z-index: -10;
        height: 330px;
        width: auto;
        padding-top: 160px;
        color: #fff;
    }
}

@media screen and (max-width: 400px) {
    #full-name {
        display: none;
    }
}

.slideBottom {
    animation: 1s ease-out 0s 1 slideInFromBottom;
}

.hideme {
    opacity:0;
}

#sec2 {
    background: url("images/bg3-2.jpg");
    background-attachment: fixed;
    background-position: bottom center;
    background-size: 100%;
    z-index: -10;
    width: auto;
}

#sec2 .block {
    background-color: rgba(255,255,255,0.7);
}

input.form-control, textarea.form-control {
    background: #eee;
    color: #000;
    margin: 40px 0px;
}

textarea {
    height: 150px;
}

#overlay{
  position:fixed;
  z-index:99999;
  top:0;
  left:0;
  bottom:0;
  right:0;
  background:rgba(0,0,0,0.95);
  transition: 1s 0.4s;
}
#box {
    background: none;
    position: relative;
    width: 60%;
    height: 100%;
    margin-left: auto;
    margin-right: auto;
}
#progress{
  height:5px;
  background:#fff;
  position:absolute;
  border-radius: 50px;
  width:0;                /* will be increased by JS */
  top:50%;
}
#progstat{
  font-size:0.7em;
  letter-spacing: 3px;
  position:absolute;
  top:50%;
  margin-top:-40px;
  width:100%;
  text-align:center;
  color:#fff;
}

    </style>

</head>

<body>

<div id="overlay">
    <div id="box">
        <div id="progstat"></div>
        <div id="progress"></div>
    </div>
</div>

<nav id="navbar-id" class="navbar navbar-expand-md navbar-white">
    <!-- Navbar Brand -->
    <a href="index.html" class="navbar-brand ml-3">
        <div class="row">
            <img src="images/ob.png" class="icon mx-3">
            <i class="mt-2"><b id="full-name">Omkar Bailkeri</b></i>
        </div>
    </a>
    <!-- Toggle Icon -->
    <button class="navbar-toggler text-secondary" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto mr-4 pt-3 pt-sm-0">
            <a href="index.html" class="nav-item nav-link mx-3">About Me</a>
            <a href="myWork.html" class="nav-item nav-link mx-3">My Work</a>
            <a href="contactMe.php" class="nav-item nav-link mx-3 active">Contact Me</a>
        </div>
    </div>
</nav>

<div class="mainFocus">
    <!-- Intro Section -->
    <div id="sec1" class="">
        <div class="container text-center slideBottom">
            <p class="">... Feel free to contact me through any means ...</p>
            <h1 class="row justify-content-center"><span class="d-none d-md-block">...</span> Contact Me <span class="d-none d-md-block">...</span></h1>
        </div>
    </div>

    <div id="sec2" class="">
        <div class="container p-3">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-md-7 col-sm-10 col-12 block px-5 text-center">
                    <h4 class="text-muted mt-4"><span class="text-dark fa fa-lightbulb-o mr-2"></span> Have something on your mind? </h4>
                    <h5 class="text-muted mb-3">Let's discuss and make something awesome!</h5>
                    <h6 class="mt-5 mb-3"><span class="fa fa-whatsapp mr-3"></span>+91 7774047389</h6>
                    <h6 class="mb-5"><span class="fa fa-envelope mr-3"></span>bailkeri.omkar@gmail.com</h6>
                </div>
            </div>
        </div>
        <h6 class="text-center text-muted my-4">OR</h6>
        <div class="container text-center p-3">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-md-7 col-sm-10 col-12 block px-5">
                    <h3 class="mt-4 text-muted mb-2">Leave a message</h3>
                    <h6 class="text-center text-success"><?= $result1; ?></h6>
                    <h6 class="text-center text-danger"><?= $result2; ?></h6>
                    <form id="contact-form" method="post" action="">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        <input type="email" name="email" class="form-control" placeholder="Your Email Id" required="">
                        <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                        <button name="submit" type="submit" class="btn btn-dark submit mb-5" value="SEND MESSAGE">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="anchor" id="a5"></div>
<footer id="last-section">
    <div class="row justify-content-left p-5">
        <div class="col-md-6 text-left hideme">
            <p style="font-size: 35px;">Omkar Bailkeri</p>
            <p class="mb-2 mt-3"><span class="fa fa-envelope mr-2"></span> bailkeri.omkar@gmail.com</p>
            <p class="mb-2"><span class="fa fa-phone ml-1 mr-2"></span> +91 7774047389</p>
            <a href="contactMe.php"><button class="btn btn-light mt-3"><b>SEND MESSAGE</b></button></a>
        </div>
        <div class="col-md-3 text-left mt-4 hideme">
            <p style="font-size: 26px;">... Links ...</p>
            <p class="text-sm pl-4"><a href="index.html#a2">About Me</a></p>
            <p class="text-sm pl-4"><a href="index.html#a3">Work Exeprience</a></p>
            <p class="text-sm pl-4"><a href="index.html#a4">Projects</a></p>
        </div>
        <div class="col-md-3 text-left mt-4 hideme">
            <p style="font-size: 26px;">... Social ...</p>
            <a class="pl-2" href="https://in.linkedin.com/in/omkar-bailkeri-6786ab47"><span class="mr-3 fa fa-linkedin"></span></a>
            <a class="pl-2" href="https://www.facebook.com/omkar.bailkeri"><span class="mx-3 fa fa-facebook"></span></a>
            <a class="pl-2" href="https://twitter.com/omkar_bailkeri"><span class="mx-3 fa fa-twitter"></span></a>
        </div>
    </div>
    <div class="row justify-content-center copyright">
        <p class="my-3">COPYRIGHT &copy 2020 All Rights Reserved</p>
    </div>
</footer>

<!-- Js CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

<script type="text/javascript">

;(function(){
  function id(v){ return document.getElementById(v); }
  function loadbar() {
    var ovrl = id("overlay"),
        prog = id("progress"),
        stat = id("progstat"),
        img = document.images,
        c = 0,
        tot = img.length;
    if(tot == 0) return doneLoading();

    function imgLoaded(){
      c += 1;
      var perc = ((100/tot*c) << 0) +"%";
      prog.style.width = perc;
      stat.innerHTML = "Loading "+ perc;
      if(c===tot) return doneLoading();
    }
    function doneLoading(){
      ovrl.style.opacity = 0;
      setTimeout(function(){ 
        ovrl.style.display = "none";
      }, 1200);
    }
    for(var i=0; i<tot; i++) {
      var tImg     = new Image();
      tImg.onload  = imgLoaded;
      tImg.onerror = imgLoaded;
      tImg.src     = img[i].src;
    }    
  }
  document.addEventListener('DOMContentLoaded', loadbar, false);
}());

$(document).ready(function(){

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar-id");

function myFunction() {
    if (window.pageYOffset >= 10) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

    /* Every time the window is scrolled ... */
    $(window).scroll( function() {
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var top_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            var top_of_window = $(window).scrollTop();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window >= top_of_object && bottom_of_object >= top_of_window){
                $(this).addClass("slideBottom");
                $(this).removeClass("hideme");
            }
            
        }); 
    
    });

    $(window).on('load', function() {
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var top_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            var top_of_window = $(window).scrollTop();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window >= top_of_object && bottom_of_object >= top_of_window){
                $(this).addClass("slideBottom");
                $(this).removeClass("hideme");
            }
            
        }); 
    
    });

});

</script>

</body>
</html>
