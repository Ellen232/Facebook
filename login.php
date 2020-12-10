
<!DOCTYPE html>
<html> 
<head> 
    <link href="style.css" type="text/css" rel="stylesheet"/> 

</head> 

<div id="header_wrapper"> 
    <div id="header"> 
        <li id="sitename">
        <a href="">facebook</a>
        </li> 

        <form action="login.php" method="post"> 
            <form action="facebook.php" method="post"> 
        
   <button type="submit" name="login">Logout</button>
        <div id="div2"> 
        
                                              
</div> 
</div>
    
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "dbFacebook";
        
        $connect = mysqli_connect($servername,$username,$password,$databasename);

    if (isset($_POST['LogIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query    = "SELECT * FROM `tblfacebook` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connect, $query);
        $rows = mysqli_num_rows($result);
        if ($rows==1){
            echo "<div class='form'>
                  <h3>Data does not exist</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>"; 
        }elseif($rows==0){
            echo "<div class='form'>
                  <h1>Welcome</h1><br/>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?> 
   
<div id="wrapper"> 
        <div id="div1">                         
        <p><span class="text">Connect with friends and the <br> world around you on Facebook.</span></p> 
        <br>
        <br>
        <img src="image/image1.png">
        <br>
        <p> &nbsp; See photos and updates <span class="description">from friends in News Feed.</span></p> 
        <br>
        <br>
        <img src="image/image2.png">
        <br>
        <p> &nbsp; Share what's new <span class="description">in your life on your timeline.</span></p> 
        <br>
        <br>
        <img src="image/image3.png">
        <br>
        <p> &nbsp; Find more <span class="description"> of what you're looking for with Facebook Search.</span></p> 
        </div> 
        <div id="div2">
        <br>
        <br>
        <p><span class="text">Log into Facebook</span></p>
        </br>
        <li>Email or Phone<br>
        <input type="text" name="email" required></li> 
        <li>Password<br><input type="password" name="password" required>
        <br>
        <a href="">Forgot account?</a>
        </li> 
        <li>
            <button type="submit" name="LogIn">Log In</button>
        </li>   
        </div>
            </form> 
  </form>
<?php
    }
?>
</body>
</html>
