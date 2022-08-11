


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProblemVerse</title>
    <link rel="icon" type="image/x-icon" href="images/fav.png">
    <link rel="stylesheet" href="css/stylerequest.css">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
    .serve{
        box-shadow: 0 2px 7px 2px rgb(234 0 255);
        border-radius: 2rem;
    }
   </style>
</head>
<body>
<?php 
session_start();
$show=2;
   if($_SESSION['loggedin']==false){
    header('location:login.php');
    

   }else{
       require 'partials/navbar.php'; 
       require 'partials/_connect.php';
       if($_SERVER['REQUEST_METHOD']=="POST"){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['number'];
        $system=$_POST['select-device'];
        $os=$_POST['select-os'];
        $desc=$_POST['desc'];
        $home=$_POST['homere'];
        $address=$_POST['address'];





$sql="INSERT INTO `problemVerse`.`request` (`name`, `email`, `phone`, `system`, `os`, `query`, `home`, `address`, `dt`) VALUES ('$name', '$email', '$phone', '$system', '$os', '$desc', '$home', '$address', current_timestamp());";
$result=mysqli_query($con,$sql);


if($result){
    $show=1;
    
}else{
    echo"
    <script>
    alert('Try again later');
    </script> 
    ";
   
}

       }
   }


?>
  
        <section class="post" id="posting">
          
            
            <h3 class="posthead">Post Your Query Here </h3>
            <form action="request.php" method="post" class="form" >

              
                    <input type="text" class="field" name="name" id="text" placeholder="Enter Your Name">
                    <input type="email" class="field" name="email" id="email" placeholder="Enter Your Email-id">
                    <input type="number" class="field" name="number" id="number" placeholder="Enter Your Phone Number along with country code">
                   
                    <div class="select field">
                        <label for="device-type" class="label ">Choose your System:</label>
                        <select name="select-device" id="device-type">
                            <option value="Desktop">Desktop</option>
                            <option value="laptop">Laptop</option>
                            <option value="tablet">Tablet</option>
                            
                        </select>
                        <label for="ostype" class="label ">Operating System:</label>
                        <select name="select-os" id="device-type">
                            <option value="Android">Windows</option>
                          <option value="IOS">Mac</option>
                          <option value="linux">Linux</option>
                          
                        </select>
                    </div>

                     <input type="textarea"  class="field area" id="area"  name="desc" placeholder="Describe Your Error">       

                     
                     <div class="radiobtn field">                       
                        <label for="radio" class="label ">Repair at home (₹99 only) :</label>
                        
                       <input type="radio" id="yess" name="homere" value="Yes" class="radioo">
                       <label for="homerepair" class="radioo">Yes</label><br>
                       <input type="radio" id="noo" name="homere" value="No" class="radioo ">
                       <label for="homerepair" class="radioo">No</label><br>
                    </div>
                    <input type="address" class="field" id="addresss" name="address" placeholder="Enter Your Address (Currently we operates in rewari only)">
                    
                    
                    <button class="submit"  id="postbtn">Submit</button>
                    
                    <button class="submit" id="paybtn">Make Payment and Submit</button>
                </form>
                
                
            </section>
            


        
        <footer class="footer"> <p class="footerp"> Created By Nikhil in 2022</p></footer>
</body>
<script src="js/script.js"></script>
<?php
           
              if($show==1){
                echo" <script>
                
                display();
                
                </script>";
              }
            ?>
<script>
    address=document.getElementById("addresss");
    on=document.getElementById("yess")
    off=document.getElementById("noo")
    mainbtn=document.getElementById("postbtn")
    pay=document.getElementById("paybtn")
    
   
    
    on.addEventListener('click',()=>{

      address.style.display="block"
      pay.style.display="block"
      mainbtn.style.display="none"
      
      
    })
    off.addEventListener('click',()=>{
        
       
        address.style.display="none"
        mainbtn.style.display="block"
        pay.style.display="none"

    })      
    
</script>
</html>



<?php

/*
//server variable;
$server="localhost";
$root="root";
$password="";

//data base connection
$con=mysqli_connect($server,$root,$password);



*/
?>