<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>

	<main>
		<div>
			<img class="house1" src="images/house1.png">
			<b>Project description:</b><br>
			In this project, I build a website for a real estate company - <a href="index.php"><span>BlueRoof</span></a>.<br>This website allows users to buy or sell their properties by collecting information from sellers and their properties, then showing the data to buyers and letting them interact to each other through a built-in messenger.
		</div>

		<div>
			<img class="house2" src="images/house2.png">
			<br><b>What does BlueRoof do?</b><br>
			<a href="index.php"><span>BlueRoof</span></a> is a company providing a real estate agency to our customers, who is either buying a new property or selling one.
			<br><br><b>Why us?</b><br>
			<a href="index.php"><span>BlueRoof</span></a> provides a fast response to your needs 
		</div>
	</main>
</body>
</html>