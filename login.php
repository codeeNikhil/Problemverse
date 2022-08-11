


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Problemverse</title>
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

    <?php
   
if($_SERVER['REQUEST_METHOD']=="POST"){

    include 'partials/_connect.php';     //include alag se file me rakha hua code 
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    
    
    
    $sql="Select * from user where username='$username';";    //sql query for fetch data of username
    $result=mysqli_query($con,$sql);
    
    
    $num=mysqli_num_rows($result);
    if($num==1){                                            // fir count of username 1 ha to execute 
        while($raw=mysqli_fetch_assoc($result)){         //function to fetch one by one row
            if(password_verify($password,$raw['password'])){    //check password with hashing 
                
                
                session_start();
               $_SESSION['loggedin']=true;
              
               $_SESSION['username']=$username;
               header("location: indexlog.php");
             }else{
                $_SESSION['loggedin']=false;
              
             }

           }
        }else{
           
           header("location:signup.php");
        }        

}

?>




<section class="loginform">
   <div class="container">
    <img src="images/download.png" alt="" class="loginlogo">
   </div>
 
    <div class="formcontainer ">
         <h2 class="heading">Login to your account</h2>
        <form action="login.php" method="POST" class="form userform">
        
        <div >
            <label for="username" class="lablelog">Username :</label>
            <input type="text" class="log" id="username"  name="username"aria-describedby="emailHelp">
         
        </div>
        <div class>
            <label for="password" class="lablelog">Password :</label>
            <input type="password" class="log" id="password" name="password">
        </div>
       
        <button type="submit" class="submitlog">Login</button>
    </form>
    
<div class="signup">
  <h4 class="account">Not having an account ?</h4>
    <a href="signup.php"><button type="submit" class="submitlog">Sign-Up</button>  </a>
</div>
     </div>

</section>



<footer class="footer">
        <p class="footerp"> Created By Nikhil in 2022</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>