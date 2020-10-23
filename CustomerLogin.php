<?php
session_start();
ini_set('arg_separator.output',';');
?>
<!DOCTYPE html>

<head>
  <title>LETS PARTY</title>
  <meta content="charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Home.css">
  <link rel="stylesheet" href="Icons CSS/css/all.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="Scripts/jquery.min.js"></script>
  <script src="Scripts/popper.min.js"></script>
  <script src="Scripts/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#" >
   LETS PARTY
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
   <span class="navbar-toggle-icon"> </span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsiblenavbar">
   <ul class="navbar-nav ">
    <li class="nav-item">
       <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i><b> HOME</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-info-circle"></i><b> ABOUT US</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ProductList.php"><i class="fas fa-glass-cheers"></i><b> ORDER DRINKS </b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="CustomerLogin.php"><i class="fa fa-fw fa-user"></i><b>CUSTOMER PORTAL</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="EmployeeLogin.php"><i class="fas fa-user-tie"></i><b>EMPLOYEE PORTAL</b></a>
    </li>
   </ul>
   </div>
<?php 
//LOGIN OPTIONS
if (isset($_SESSION['user']))
{
	if($_SESSION['user'] == 'admin')
	{
echo '<div class="dropdown">
  <button class="dropbtn">'.$_SESSION['user'].'</button>
  <div class="dropdown-content">
  <a href="Profile.php">My Profile</a>
  <a href="admin.php">Customers List</a>
  <a href="process-visitor-form.php?logout=yes">logout</a>
  </div>
</div>';
   }
   else{
	 echo '<div class="dropdown">
     <button class="dropbtn">'.$_SESSION['user'].'</button>
     <div class="dropdown-content">
     <a href="Profile.php">My Profile</a>
     <a href="#">My Orders</a>
     <a href="process-visitor-form.php?logout=yes">logout</a>
     </div>
     </div>';
    }
}
?>
  
</nav>
 <div class="Link">
 <a class="Head" href="#First" alt="LOGIN"> LOGIN </a>
 <a class="Head" href="#Second" alt="SIGN UP"> SIGN UP </a>
 </div>
<!-- LOGIN SECTION -->
<div class="container"id="First" style="display:none">
<form action="process-visitor-form.php" method="post">
    <input type="text" placeholder="Customer UserName" name="userName" id="userName" size=30 required>
    <input type="password" placeholder="Password" name="password" id="password" size=30 required>
    <input type="submit" value="Login" name="login">
    <p class="psw">Forgot <a href="#">password?</a></p>
</form>
</div>
<!-- SIGN UP SECTION -->
<div class="container" id="Second" style="display:none">
  <form name="registration" action="process-visitor-form.php" method="post">
    <label for="name"><b>Name</b>
    <input type="text" placeholder="Name" name="name" id="name" size=30 required autofocus />
    </label>
    <label for="email"><b>E-Mail</b>
    <input type="email" placeholder="E-mail" name="email" id="email" size=30 required>
    </label>
    <label for="userName"><b>User Name</b>
    <input type="text" placeholder="User Name" name="userName" id="userName" size=30 required />
    </label>
    <label for="gender"><b>Gender</b>&nbsp; &nbsp;
    <input type="radio" name="gender" value="Male">Male &nbsp;
    <input type="radio" name="gender" value="Female">Female
    </label>
    <br>
    <br>
    <label for="password"><b>Password</b>
    <input type="password" placeholder="Password" name="password" id="password" size=30 required />
    </label>
    <label for="password2"><b>Confirm Password</b>
    <input type="password" placeholder="Repeat Password" name="password2" id="password2" size=30 required onblur="check()" />
    </label>
    <label for="address"><b>Address</b>
    <input type="text" placeholder="Address" name="address" id="address" size=40 />
    </label>
    <label for="phoneNumber"><b>Contact</b>
    <input type="number" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" size=50 required />
    </label>
    <label for="postcode"><b>Postal Code</b>
    <input type="text" placeholder="POST CODE" name="postcode" id="postcode" pattern="^(([A-Z][0-9]{1,2})|(([A-Z][A-HJ-Y][0-9]{1,2})|(([A-Z][0-9][A-Z])|([A-Z][A-HJ-Y][0-9]?[A-Z])))) [0-9][A-Z]{2}$" size=30 />
    </label>

    <p><b>By creating an account you agree to our <a href="#">Terms&Conditions.</a></b></p>
    <input name="submit" type="submit" value="Create" />
    <input name="cancel" type="button" value="Cancel">
  </form>
</div>
<script type="text/javascript">function check() {
 if(document.registration.password.value != document.registration.password2.value) {
            alert('Password Mismatch! Please retype the correct password.');
        }
    }
</script>
</body>	
<br>
<br>
<br>
<br>
<!-- FOOTER SECTION -->
<footer class="footer-division">
  <div class="footer-left">
   <h3>ADDRESS</h3>
   <p><i class="fa fa-map-marker"></i> 10 Colinton Rd, Edinburgh EH10 5DT</p>
  </div>
  <div class="footer-center">
   <h3>CONTACT US</h3>
   <p><i class='fas fa-phone' ></i>  0845 260 6040</p>
   <p><i class='fas fa-clock'></i>   10 AM - 10 PM </p>
   <p><i class='fas fa-envelope'></i> <a href="#" style="color: black;"> drinkstocelebrate@drinksc.com</a></p>
  </div>
  <div class="footer-right">
   <h3>STAY CONNECTED </h3>
   <p>Get recent updates about our services , our process, offers etc.</p>
   <div class="social">
    <a href="#"  class="fa fa-facebook fa-2x"></a>
    <a href="#"  class="fa fa-google-plus fa-2x"></a>
    <a href="#"  class="fa fa-twitter fa-2x"></a>
    <a href="#"  class="fa fa-instagram fa-2x"></a>
   </div>
  </div>
  <p class="copyright">© DRINKS TO CELEBRATE 2018</p>  
</footer>
</html>