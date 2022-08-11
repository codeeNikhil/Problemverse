<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    require 'partials/_connect.php';
    
    //variables

    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassowrd=$_POST["cpassword"];
    $recovery=$_POST["recovery"];
    

    //check for userexists or not 
    $sqll="Select * from user where username='$username';";    //sql query for fetch data of username
    $res=mysqli_query($con,$sqll);
    
    
    $num=mysqli_num_rows($res);
    if($num==0){

    






    if($password==$cpassowrd){
        $hashpass=password_hash($password,PASSWORD_DEFAULT);
        
        $sql="INSERT INTO `user` (`username`, `password`, `Recovery`) VALUES ('$username', '$hashpass', '$recovery');";
        $result=mysqli_query($con,$sql);
        if($result){
            echo"
            <script>
            alert('account created successfully');
            </script> 
            ";

           header("location:login.php");


        }else{
            echo"
            <script>
            alert('error try again');
            </script> 
            ";
        }
    }else{
        echo "not matched";
    }


}else{
    echo"
            <script>
            alert('Account already exits');
            </script> 
            ";
}
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-ProblemVerse</title>
    <link rel="icon" type="image/x-icon" href="/images/fav.png">
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="css/stylerequest.css">
    
</head>

<body>
<nav class="navbar">
      <div class="navleft">
            <a class="navbrand" href="index.php"> <i class="fa fa-fast-forward"></i> ProblemVerse </a>
        </div>
        <ul class="nav-list">
            <li class="list"><a href="index.php">Home</a></li>
           
        </ul>
        
        <div class="time">
            <p id="day">Mon </p>
            <p id="hour">12 </p>
            <div id="blink">:</div>
            <p id="minute">60</p>
        </div>
    </nav>

<section class="loginform">
  
    
    <div class="formcontainer ">
         <h2 class="heading">Create new account</h2>
        <form action="signup.php" method="POST" class="from userform">
        
        <div >
            <label for="username" class="lablelog">Username :</label>
            <input type="text" class="log onee " id="username"  name="username" aria-describedby="emailHelp">
         
         <br>
         <label for="password" class="lablelog">Password :</label>
         <input type="password" class="log onee" id="password" name="password">
         <br>
         
         <label for="password" class="lablelog">Retype Password :</label>
         <input type="password" class="log" id="password" name="cpassword">
         <br>
        
            <label for="recovery" class="lablelog">Recovery Text :</label>
            <input type="text" class="log two" id="password" name="recovery">
        </div>
       
        
        <button type="submit" class="submitlog">Create Account</button>
        
    </form>
    

     </div>

</section>



<footer class="footer">
        <p class="footerp"> Created By Nikhil in 2022</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>