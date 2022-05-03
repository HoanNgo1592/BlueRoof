<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Terms</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>
	<main>
		<h2 class="center">Terms and Policies</h2>
		<p class="center">Please read our terms and policies carefully.</p>
		<div class="dashboard">
			<ol>
				<li>Your information is secured.</li>
				<li>For each business, we take 5% of the property's value from the seller.</li>
			</ol>
			Thank you for your business!
		</div>
		<br>
	</main>
</body>
</html>