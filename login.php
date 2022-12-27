<!DOCTYPE html>
<html>
	<head>
		<script
			src="https://kit.fontawesome.com/eb0c7390e2.js"
			crossorigin="anonymous"
		></script>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<link rel="stylesheet" href="./css/login.css" />
	</head>

	<body>
<?php

include_once 'nav-bar.php';

if (isset($_POST["submit"])) {

   $username = trim($_POST['username']);
   $pwd = trim($_POST['pwd']);

   require_once 'db.inc.php';

	function userExists($conn, $username, $email) {
		$sql = "SELECT * FROM organizer WHERE name = ? OR emailId = ?;";
		$stmt = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $username, $email);
		mysqli_stmt_execute($stmt);
		$resultData = mysqli_stmt_get_result($stmt);
		if ($row = mysqli_fetch_assoc($resultData)) {
			return $row;
		}
		else {
			$result = false;
			return $result;
		}
	}
	$userExists = userExists($conn, $username, $username);
   if ($userExists === false) {
      header("location: ./login.php?error=wronglogin");
      exit();
   }
   $storedPwd = $userExists["opwd"];
   if (!($storedPwd === $pwd)) {
      header("location: ./login.php?error=wronglogin");
      exit();
   } 
   else if ($storedPwd === $pwd) {
      $_SESSION["username"] = $userExists["name"];
      header("location: ./index.php");
   }
} 
?>
		<section class="login-form">
			<h2>Login</h2>
			<form action="" method="POST">
				<label class="fa fa-user"
					><input
						type="text"
						name="username"
						placeholder="Username/Email"
						autofocus
						required
				/></label>
				<label class="fa fa-key"
					><input type="password" name="pwd" placeholder="Password" required
				/></label>
				<button type="submit" name="submit">Login</button>
			</form>
			<?php 
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "wronglogin") {
						echo "<p>Incorrect login information!</p>";
					} else if ($_GET["error"] == "passwordsdontmatch") {
						echo "<p>Password doesn't match!</p>";
					} else if ($_GET["error"] == "stmtfailed") {
						echo "<p>Something went wrong, try again!</p>";
					}
				}
			?>
		</section>
	</body>
</html>
