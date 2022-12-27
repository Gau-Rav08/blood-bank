<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Camp</title>
		<style>
			* {
				margin: 0;
				padding: 0;
			}
			.campform {
				width: 520px;
				box-sizing: border-box;
				box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
				padding: 60px 30px;
				box-sizing: border-box;
				margin: 0 auto;
				border-left: 2px solid black;
				border-right: 2px solid black;
				background: rgba(0, 0, 0, 0.8);
			}
			label {
				font-size: 21px;
				color: white;
			}
			.submit {
				background-color: white;
				color: black;
				border: 2px solid black;
				padding: 12px 20px;
				border-radius: 4px;
				cursor: pointer;
				text-align: center;
				height: 50px;
				width: 450px;
				font-size: 20px;
				border-radius: 16px;
			}
			.submit:hover {
				background-color: red;
				color: white;
				text-align: center;
				height: 50px;
				width: 450px;
				border-radius: 16px;
			}
			input {
				background-color: lavender;
				border: 1.5px solid black;
				color: black;
				border-radius: 5px;
				font-size: 15px;
			}
			textarea {
				background-color: lavender;
				border: 1.5px solid black;
				color: black;
				border-radius: 11px;
				font-size: 15px;
			}
		</style>
	</head>
	<body class="campbody">
<?php include_once 'nav-bar.php'; ?>
		<div class="campform">
			<form action="" method="POST">
				<h1
					style="
						text-align: center;
						color: white;
						border-left: 1px solid #000; ;
					"
				>
					Camp Setup
				</h1>
				<br />
				<hr />
				<br /><br />
				<label for="address"><b>Camp Address:</b></label
				><br /><br />
				<textarea
					id="address"
					name="address"
					placeholder=" Write address over here.."
					style="height: 100px; width: 300px"
				></textarea
				><br /><br /><br />

				<label for="description"><b>Description:</b></label
				><br /><br />
				<textarea
					id="description"
					name="description"
					placeholder=" Write  description over here.."
					style="height: 100px; width: 300px"
				></textarea
				><br /><br /><br />

				<label for="date"><b>Date:</b></label
				><br /><br />
				<textarea
					id="date"
					name="date"
					placeholder="Timeperiod"
					style="height: 30px; width: 350px"
				></textarea
				><br /><br /><br />

				<label for="starttime"><b>Start time:</b></label
				><br /><br />
				<input
					type="time"
					name="starttime"
					id="starttime"
					required
				/><br /><br /><br />

				<label for="endtime"><b>End Time:</b></label
				><br /><br />
				<input
					type="time"
					name="endtime"
					id="endtime"
					required
				/><br /><br /><br />

				<input class="submit" type="submit" value="submit" />
			</form>
			<br /><br /><br />
		</div>
	</body>
</html>
