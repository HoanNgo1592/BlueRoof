<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handle Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>

	<main>
		<div class="dashboard">
			<h2 class="center">Property Register</h2>
			<p class="center">You have registered your property successfully.</p>
			<a href="seller.php">Back to Properties</a>
		</div>
		<?php
			$username=$_SESSION['username'];
			$location=$_POST['location'];
			$address=$_POST['address'];
			$area=$_POST['area'];
			$bedroom=$_POST['bedroom'];
			$bathroom=$_POST['bathroom'];
			$backyard=$_POST['backyard'];
			$parking=$_POST['parking'];
			$nearby=$_POST['nearby'];
			$mainroad=$_POST['mainroad'];
			$value=$_POST['value'];

			$file=fopen("properties.txt", "a");
			$content="$username#$location#$address#$area#$bedroom#$bathroom#$backyard#$parking#$nearby#$mainroad#$value\n";
			fwrite($file, $content);


		?>
		

	</main>
</body>
</html>