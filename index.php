<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
	<script>
function myFunction() {
  alert("Contact:+91 987654342, Email:WT@gmail.com");
}
</script>

<header>
	
<nav>
	<div class="logo"> <h1 style="font-size: 20px;"> WOXSEN TRAVELS </h1> </div>
	<div class="menu">
		<a href="#" style="font-size: ">Home</a>
		<a href="book.html">Bookings</a>
		<a href="table.html">about</a>
		<a href="#" onclick="myFunction()">contact</a>
	</div>
</nav>

	<main>
		<section>
			<h3>Welcome To India</h3>
			<h1>DO COME & VISIT <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
			<p>"Travel before you run out of time"</p>
		</section>
	</main>


</header>

</body>
</html>