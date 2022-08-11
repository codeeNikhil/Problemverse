

<nav class="navbar">
      <div class="navleft">
            <a class="navbrand" href="index.php"> <i class="fa fa-fast-forward"></i> ProblemVerse </a>
        </div>
        <ul class="nav-list">
        <?php   
       
       if($_SESSION['loggedin']==true){
         
           echo " <li class='list'><a href='indexlog.php'>Home</a></li>";

       }else{
              echo "<li class='list'><a href='indexlog.php'>Home</a></li>";
       }
?>
      
            
            <li class="list serve"><a href="request.php">Request</a></li>
            <li class="list abo"><a href="about.php">About</a></li>
            
            
            <?php   
       
        if($_SESSION['loggedin']==true){
          
            echo "<li class='list def'><a href='logout.php'>Logout</a></li>";

        }else{
               echo "<li class='list def'><a href='login.php'>Login </a></li>";
        }
?>

           
        </ul>
        
        <div class="time">
            <p id="day">Mon</p>
            <p id="hour">12 </p>
            <div id="blink">:</div>
            <p id="minute">60</p>
        </div>

    </nav>