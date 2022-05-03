<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Property Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>
	<main>
		<h2 class="center">Property Register</h2>
		<p class="center">Please fill out this form to register your property.</p>
		<form action="handle_register.php" method="POST">
			<table>
				<tr>
					<td class="center">Location:</td>
					<td><input class="right" type="text" name="location" placeholder="Location" required></td>
				</tr>
				<tr>
					<td class="center">Address:</td>
					<td><input class="right" type="text" name="address" placeholder="Address" required></td>
				</tr>
				<tr>
					<td class="center">Area:</td>
					<td><input class="right" type="text" name="area"  placeholder="Area" required></td>
				</tr>
				<tr>
					<td class="center">Number of Bedrooms:</td>
					<td><input class="right" type="text" name="bedroom" placeholder="Number of Bedrooms" required></td>
				</tr>
				<tr>
					<td class="center">Number of Bathrooms:</td>
					<td><input class="right" type="text" name="bathroom" placeholder="Number of Bathrooms" required></td>
				</tr>
				<tr>
					<td class="center">Backyard:</td>
					<td><input class="right" type="text" name="backyard" placeholder="Is Backyard available?" required></td>
				</tr>
				<tr>
					<td class="center">Parking:</td>
					<td><input class="right" type="text" name="parking" placeholder="Is Parking available?" required></td>
				</tr>
				<tr>
					<td class="center">Near by:</td>
					<td><input class="right" type="text" name="nearby" placeholder="Near By" required></td>
				</tr>
				<tr>
					<td class="center">Main Road:</td>
					<td><input class="right" type="text" name="mainroad" placeholder="Main Road" required></td>
				</tr>
				<tr>
					<td class="center">Value:</td>
					<td><input class="right" type="text" name="value" placeholder="Value" required></td>
				</tr>
				<tr>
					<td class="submit" colspan="2">
						<input class="submit" type="submit" name="submit" value="Register"></input>
					</td>
				</tr>
			</table>
		</form>
		<br>
	</main>
</body>
</html>