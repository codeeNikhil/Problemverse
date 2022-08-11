


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProblemVerse</title>
    <link rel="icon" type="image/x-icon" href="/images/fav.png">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

      
        
</head>

<body>
<?php 
 session_start();
 

 require 'partials/navbar.php'; ?>
    <section class="main">

        <video autoplay muted loop class="backvideo">
            <source src="images/1_1.mp4" type="video/mp4">
        </video>

        <div class="maincontent">
            <h2 class="headingmain">Welcome to ProblemVerse </h2>
            <p class="paramain" id="P-change">Get Your all PC/laptop's Probem Solution in one place</p>

            <?php   
        
        
        
        if($_SESSION['loggedin']==true){
          
            echo "<a href='request.php'> <button class='btn'>Post a Query</button></a>";

        }else{
               echo "<a href='login.php'> <button class='btn'>Login</button></a>";
        }
?>













            


        </div>
        <!--        

    <div class="sideimage">
        
        <img src="/images/back.2.png" alt="" class="imageleft">
    </div>
-->


    </section>
    <section class="second">
        <div class="secondtitlehead">
            <h2 class="secondtitle">What We Do</h2>
        </div>

        <div class="partition">

            <div class="plates "  >
                <div class="headimg" >
                    <img src="images/hardware.JPG" alt="hardware" class="serviceimg" id="hard">
                    <h3 class="servicetitle">Hardware</h3>
                </div>
                <div class="parades" id="pone" >
                    
                    <p class="para" > Hardware failure ? dont worry we will fix it . All hardware related problem
                            soloution is here . just take a snap we will guild you !!</p>
                        </div>
                    </div>
                    
                    
                    <div class="plates " >
                        <div class="headimg" >
                            <img src="images/software.JPG" alt="software" class="serviceimg" id="soft">
                            <h3 class="servicetitle">Software</h3>
                            
                        </div>
                        <div class="parades" id="ptwo">
                            <p class="para" > Having software problem ? dont worry . We will resolve it , Any problem related
                                to OS / application software or drivers we will guide you !</p>
                                
                            </div>
                        </div>
                        
                        
                    <div class="plates " >
                        <div class="headimg" >
                            <img src="images/home.JPG" alt="homeservice" class="serviceimg" id="homerep">
                            <h3 class="servicetitle">Home Service</h3>
                            
                        </div>
                        <div class="parades" id="pthree" >
                        <p class="para" >Still not getting the soluiton Dont worry,Our
                            expert will fix your system at your home .In JUST 99 RS visting charge </p>

                    </div>
                    </div>

                </div>



            </div>
    </section>



    <section class="third">
        <img src="images/pick.JPG" alt="" class="thirdimg">
    </section>


    <section class="fourth" id="contactus">
        <h3 class="fourthtitle">Having doubt ? Contact Us</h3>
        <form action="index.php" method="post">

            <div class="query">
                
                <input type="name" class="text" id="name" name="name" placeholder="Enter Your name">
                <input type="email" class="text" id="email" name="email" placeholder="Enter Email ID">
                <input type="text" class="text" id="query" name="query" placeholder="Enter Query">
                
            </div>
            <?php
            $check=false;
            ?>
            <div class="tem">
                <button class="submitone " id="sumbitbtn">Submit</button>

            </div>
            <?php
            $check=true;
            ?>
        </form>
       
    

    </section>
    <footer class="footer">
        <p class="footerp"> Created By Nikhil in 2022</p>
    </footer>
</body>
<script src="js/script.js"></script>
<script>
  one=document.getElementById("hard");
  two=document.getElementById("soft");
  three=document.getElementById("homerep");
  pone=document.getElementById('pone');
  ptwo=document.getElementById('ptwo');
  pthree=document.getElementById('pthree');
  


one.addEventListener('mouseenter',()=>{
    
setTimeout(() => {
    
    pone.style.backgroundColor="rgb(80 190 191"
        pone.style.color="black"
        pone.style.borderRadius="10px"
        pone.style.fontSize="20px"
    }, 100);
    


})
one.addEventListener('mouseleave',()=>{
    
    pone.style.background="none"
    pone.style.color="white"
    
})


two.addEventListener('mouseenter',()=>{
    setTimeout(() => {
        
        ptwo.style.backgroundColor="rgb(80 190 191"
        ptwo.style.color="black"
        ptwo.style.borderRadius="10px"
        ptwo.style.fontSize="20px"
    }, 100);
    
})
two.addEventListener('mouseleave',()=>{
    
    ptwo.style.background="none"
    ptwo.style.color="white"
    
})


three.addEventListener('mouseenter',()=>{
    setTimeout(() => {
        
        pthree.style.backgroundColor="rgb(80 190 191"
    pthree.style.color="black"
    pthree.style.borderRadius="10px"
    pthree.style.fontSize="20px"
}, 100);
    
})
three.addEventListener('mouseleave',()=>{
    
    pthree.style.background="none"
    pthree.style.color="white"
    
})


</script>

</html>




<?php


//making mysql connection variable;

$server="localhost";
$root="root";
$password="";

//database connection;
$con=mysqli_connect($server,$root,$password);

if(!$con){
    die("failed".mysqli_connect_error());
 }

//get filled items
@$name=$_POST['name'];
@$email=$_POST['email'];
@$query=$_POST['query'];

//insert into database 
$sql="INSERT INTO `problemverse`.`doubt` (`name`, `email`, `query`, `time`) VALUES ('$name', '$email', '$query', current_timestamp());";


//execute
if($con->query($sql)==true){
   
}else {
   echo fail;
}

$con->close();
?>