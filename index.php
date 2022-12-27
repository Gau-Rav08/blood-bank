
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Blood Bank</title>
		<link rel="stylesheet" href="./css/index.css" />
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
	</head>
	<body>
<?php include_once 'nav-bar.php';?>
		<main>
			<section class="title">
				<div class="t-main">
					<h2>Blood Bank</h2>
					<h3>Help someone, Donate blood, Save life</h3>
					<h4>
						By donating blood with Blood Bank, many lives are saved and hope is
						given to many others. Blood donors give such patients a second
						chance of life.
					</h4>
				</div>
				<img src="./img/blood.png" class="blood-img" />
			</section>
			<h1 class="don">Total Blood Donor Registered With Us</h1>
			<section class="dis-don">
<?php

include_once 'db.inc.php';

$sql = 'SELECT bloodgroup, COUNT(donorid) AS count FROM donor GROUP BY bloodgroup;';
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$a_n = $a_p = $ab_n = $ab_p = $b_n = $b_p = $o_n = $o_p = 0;
while ($row1 = mysqli_fetch_assoc($result)){
	if($row1['bloodgroup']=='A+ve'){
		$a_p = $row1['count'];
	}
	if($row1['bloodgroup']=='A-ve'){
		$a_n = $row1['count'];
	}
	if($row1['bloodgroup']=='AB+ve'){
		$ab_p = $row1['count'];
	}
	if($row1['bloodgroup']=='AB-ve'){
		$ab_n = $row1['count'];
	}
	if($row1['bloodgroup']=='B+ve'){
		$b_p = $row1['count'];
	}
	if($row1['bloodgroup']=='B-ve'){
		$b_n = $row1['count'];
	}
	if($row1['bloodgroup']=='O+ve'){
		$o_p = $row1['count'];
	}
	if($row1['bloodgroup']=='O-ve'){
		$o_n = $row1['count'];
	}
}


$check = "Check whether we have the blood type available";

if (isset($_POST["submit"])) {
	$bg = $_POST['bloodgroup'];
	if ($bg == "none") {
		$check = "Check whether we have the blood type available";
	} else {
		$sql2 = "SELECT COUNT(sampleid) AS count FROM stock WHERE bloodgroup = ? ;";
		$stmt2 = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt2, $sql2);
		mysqli_stmt_bind_param($stmt2, "s", $bg);
		mysqli_stmt_execute($stmt2);
		$result2 = mysqli_stmt_get_result($stmt2);
		$check = "Blood type $bg is unfortunately not Available";
		if ($result2) {
			$check = "Blood type $bg is fortunately Available";
		}
	}
} else {
	$check = "Check whether we have the blood type available";
}

?>
				<div class="don-card">
					<h2 class="b-grp">A-</h2>
					<p><?php echo $a_n; ?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">A+</h2>
					<p><?php echo $a_p; ?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">AB-</h2>
					<p><?php echo $ab_n; ?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">AB+</h2>
					<p><?php echo $ab_p;?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">B-</h2>
					<p><?php echo $b_n; ?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">B+</h2>
					<p><?php echo $b_p; ?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">O-</h2>
					<p><?php echo $o_n; ?></p>
				</div>
				<div class="don-card">
					<h2 class="b-grp">O+</h2>
					<p><?php echo $o_p; ?></p>
				</div>
			</section>
			<section class="be-donor">
				<img src="./img/donate.jpg" class="donate-img" />
				<div class="donor">
					<h1>Why should you donate blood?</h1>
					<p>
						Our Nation requires 4 crore Units of Blood while only 40 lakh units
						are available, Every two seconds someone needs Blood. There is no
						substitute for Human Blood. It cannot be manufactured.
					</p>
					<p>
						Blood donation is an extremely noble deed, yet there is a scarcity
						of regular donors across India. We focus on creating & expanding a
						virtual army of blood donating volunteers who could be searched and
						contacted by family / care givers of a patient in times of need.
					</p>
					<a href="donor-register.php" class="donor-btn">BE A DONOR</a>
				</div>
			</section>
			<section class="avail">
				<div class="check">
					<form method="post" action="">
					<select id="bloodgroup" name="bloodgroup">
						<option value="none">Blood Type</option>
                	<option value="A+ve">A+ve</option>
                	<option value="A-ve">A-ve</option>
                	<option value="B+ve">B+ve</option>
                	<option value="B-ve">B-ve</option>
                	<option value="O+ve">O+ve</option>
                	<option value="O-ve">O-ve</option>
               	<option value="AB+ve">AB+ve</option>
						<option value="AB-ve">AB-ve</option>
					</select>
					<input type="submit" class="check-btn" value="Check" name="submit"></input>
					</form>
					</div>
				<div class="show-avail">
					<h1><?php echo $check; ?></h1>
				</div>
			</section>
		</main>
		<footer>
			<h2>Contact Us</h2>
			<p>
				<i class="fa fa-map-marker" aria-hidden="true"></i> Mumbai- 400066,
				Maharashtra, India
			</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> +91 9998889999</p>
			<p><i class="fa fa-envelope-o" aria-hidden="true"> bloodbank.com</i></p>
		</footer>
	</body>
</html>
