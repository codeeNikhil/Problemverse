<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProblemVerse</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="css/styleabout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
    .abo{
        box-shadow: 0 2px 7px 2px rgb(234 0 255);
        border-radius: 2rem;
    }
   </style>
</head>
<body>
    
<?php 
session_start();
require 'partials/navbar.php'; ?>


        <section class="about-main">

            <p class="aboutpara">This Website is created by Nikhil under the guidence of Rohit sir . This is Final project of <span class="highlight"> PHP Web Development   </span>  program at  <span class="highlight"> Haryana Institue of Public Adminstration</span></p>
            <h3 class="technology">Technologies used in this Development</h3>
            <div class="picslogo">
                <img src="../images/html.png" alt="html" class="logoimg htmlimg">
                <img src="../images/php.png" alt="html" class="logoimg">
                <img src="../images/sql.png" alt="html" class="logoimg">
            </div>

        </section>

        
        <footer class="footer"> <p class="footerp"> Created By Nikhil in 2022</p></footer>
</body>
<script src="js/script.js"></script>
</html>