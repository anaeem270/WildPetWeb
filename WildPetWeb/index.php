<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign up/web.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Main Page</title>
        <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-sm navbar-dark" style="background-color:purple">
	 <div class="container">
 
  <a class="navbar-brand" href="#">
    <img src="images/thewildvetlogo.png" alt="logo" style="width:100px;">
  </a>
  

  <ul class="navbar-nav"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 
    <li class="nav-item">
      <a class="nav-link" href ="profile.html"> <i class="material-icons" style="font-size: 30px;" style="margin-right: 60px;">perm_identity</i> Profile</a></li> </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href = "pets.html"> <i class="material-icons" style="font-size: 30px;" style="margin-right: 60px;">pets</i>Pets</a></li></a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  href="reminder.html"> <i class="material-icons" style="font-size: 30px;" style="margin-right: 60px;">notifications</i>Reminder</a></li>
    </li>
	<li class="nav-item">
      <a class="nav-link"href = "support.html"> <i class="material-icons" style="font-size: 30px;" style="margin-right: 60px;">support_agent</i>Support</a></li>
    </li>
	<li class="nav-item">
      <a class="nav-link" href = "#"> <i class="material-icons" style="font-size: 30px;" style="margin-right: 60px;">settings</i>Settings</a></li>
    </li>
	<li class="nav-item">
      <a class="nav-link" href = "logout.php"> <i class="material-icons" style="font-size: 30px;" style="margin-right: 60px;">logout</i>Signout</a></li>
    </li>
	</div>

  </ul>
</nav>	 

</div>
	</header>
	<main>
						<h1 style="text-align: center;">Welcome Client</h1>
						<br>
		<article>
			<section>
				<style>
					
					.grid-container {
	  display: grid;
	  grid-template-columns: auto auto auto auto;
	   height: 400px;
	  align-content: center;
	  justify-content: space-evenly;
	
	}
					</style>
	<div class="grid-container">
		<div class="grid-item">	<p style="text-align: center;">Profile</p>
			<img src="images/profile.png" width = 200px; height = 200px; style="margin-left: 50px;">
			<i class="material-icons" style="font-size: 90px; text-align: center; margin-left: 50px;"></i>
			<br>
			<p style="text-align: left; margin-left: 20px;">Name:</p>
			<p style="text-align: left; margin-left: 20px;">Age:</p>
			<p style="text-align: left; margin-left: 20px;">Email:</p></div>
		<div class="grid-item">									<p style="text-align: center;">My Pets</p>
			<br>
			<img src="images/dog1.jpg" width = 300px; height = auto;>
			<p style="text-align: left;margin-left: 10px">Pet Name:</p>
			<p style="text-align: left;margin-left: 10px">Breed:</p></div>
		<div class="grid-item"><p style="text-align: center;">Upcoming Appointments</p>
			<br>
			<img src="images/dog2.jpg" width = 300px; height = auto;>
			<p style="text-align: left;margin-left: 10px">Pet Name:</p>
			<p style="text-align: left;margin-left: 10px">Due in 1 Week</p>
			<p style="text-align: left;margin-left: 10px">Service Type: Vaccination</p></div>
	
	  </div>
			<!-----	<aside>
				

				</aside>
								<aside 1>
					

				</aside 1>

												<aside 2>
					
				</aside 2>----->

			</section>
		</article>

	</main>
	<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
	<footer>
		
	</footer>
</body>
</html>