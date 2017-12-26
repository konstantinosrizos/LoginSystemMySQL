<?php  
session_start();//session starts here  
  
?> 

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Daily UI 001 Sign Up Form</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="signupSection">
  <div class="info">
    <h2>Login-Logout using PHP & MySQL</h2>
    <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
    <p>The Future Is Here</p>
  </div>
  <form action="login.php" method="POST" class="signupForm" name="signupform">
    <h2>Log In</h2>
    <ul class="noBullet">
    <!--  <li>
        <label for="email"></label>
        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="" required/>
      </li>-->
      <li>
        <label for="username"></label>
        <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="" required/>
      </li>
      <li>
        <label for="password"></label>
        <input type="password" class="inputFields" id="password" name="password" placeholder="Password" value="" oninput="return passwordValidation(this.value)" required/>
      </li>
      <li id="center-btn">
        <input type="submit" id="join-btn" name="join" alt="Join" value="Log In">
        <input type="button" id="join-btn" name="join" alt="Join" value="Create Account" onclick="window.location='registration.php';">
      </li>
    </ul>
  </form>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>

<?php  
  
include("db_conection.php");  
  
if(isset($_POST['join']))  
{  
    $user_name=$_POST['username'];  
    $user_pass=$_POST['password'];  
  
  
    $run=mysqli_query($dbcon,"select * from users WHERE user_name='$user_name'AND user_pass='$user_pass'");  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
        $_SESSION['username']=$user_name;//here session is used and value of $user_name store in $_SESSION.  

    }  
    else  
    {  
      echo "<script>alert('Username or password is incorrect!')</script>";  
    }  
}  
?>  