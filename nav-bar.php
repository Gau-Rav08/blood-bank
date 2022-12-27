<?php session_start();?>
<style>
*{
   margin: 0%;
	padding: 0%;
   box-sizing: border-box;
   font-family: Arial, Helvetica, sans-serif;
}
#main-nav {
	font-family: Arial, Helvetica, sans-serif;
	display: flex;
	align-items: center;
	background-color: rgb(39, 42, 61);
	padding: 2.5vh 5%;
	color: white;
}
.nav-a {
   text-decoration: none;
	text-align: center;
	padding: 10px;
	font-size: 1rem;
	font-weight: bold;
	color: white;
	border-bottom: 2px solid rgb(223, 7, 7);
}
.login-btn {
	background-color: rgb(223, 7, 7);
	padding: 10px 20px;
	border-radius: 10px;
	margin-left: 20px;
}
.logo {
	display: flex;
	align-items: center;
	justify-content: flex-start;
	font-size: 0.7rem;
	font-weight: bold;
}
.icon-img {
	height: 50px;
}
.logo-h1 {
	margin-left: 12px;
}
.contact-top {
	margin-left: auto;
	margin-right: 2%;
	display: flex;
	align-items: center;
}
.contact-top i {
	font-size: 1.9rem;
	margin-right: 10px;
}
.cont-h1 {
	font-size: 1.1rem;
}
</style>   
<header id="main-nav">
	<div class="logo">
		<a href="index.php"><img src="./img/bloodicon.png" class="icon-img" /></a>
		<h1 class="logo-h1">Blood Bank</h1>
	</div>
	<div class="contact-top">
   	<i class="fa fa-phone" aria-hidden="true"></i>
	   <h1 class="cont-h1">Call: +91 9998889999</h1>
	</div>
	<a class="nav-a" style="text-decoration: none; color:white;" href="camp.php">Camps</a>
   <?php
   if (isset($_SESSION["username"])) {
      echo '<a style="text-decoration: none; color:white;" class="nav-a" href="camp-add.php">Add Camp</a>';
		echo '<a style="text-decoration: none; color:white;" class="nav-a" href="donortable.php">Donors</a>';
		echo '<a style="text-decoration: none; color:white;" class="nav-a" href="bloodstock.php">Stock</a>';
      echo '<a style="text-decoration: none; color:white;" href="logout.inc.php" class="login-btn">Logout</a>';
   }
   else {
      echo '<a style="text-decoration: none; color:white;" href="login.php" class="login-btn">Login</a>';
   }
?>
</header>