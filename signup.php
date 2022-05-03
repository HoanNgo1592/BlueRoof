<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>
	<main>
		<h2 class="center">Sign Up</h2>
		<p class="center">Please fill out this form to create an account.</p>
		<form action="handle_signup.php" method="POST">
			<table>
				<tr>
					<td class="center"><img src="images/username.png"></td>
					<td><input class="right" id="username" type="text" name="username" placeholder="Username" required></td>
				</tr>
				<tr>
					<td class="center"><img src="images/password.png"></td>
					<td><input class="right" id="password" type="password" name="password"  placeholder="Password" required></td>
				</tr>
				<tr>
					<td class="center"><img src="images/confirm_password.png"></td>
					<td><input class="right" id="confirm_password" type="password" name="confirm_password" placeholder="Confirm Password" required></td>
				</tr>
				<tr>
					<td class="center"><img src="images/full_name.png"></td>
					<td><input class="right" id="full_name" type="text" name="fullname" placeholder="Full Name" required></td>
				</tr>
				<tr>
					<td class="center"><img src="images/birthday.png"></td>
					<td><input class="right" id="birthday" type="text" name="birthday" placeholder="Date of Birth" required onblur="(this.type='text')" onfocus="(this.type='date') "></td>
				</tr>
				<tr>
					<td class="center"><img src="images/email.png"></td>
					<td><input class="right" id="email" type="text" name="email" placeholder="Email" required></td>
				</tr>
				<tr>
					<td class="center">
						<img src="images/buyer.png">  <img src="images/seller.png">
					</td>
					<td>
						<input class="type" id="type" type="radio" name="type" value="0">
						<label for="buyer">Buyer</label><br>
						<input class="type" id="type" type="radio" name="type" value="1">
						<label for="seller">Seller</label>
					</td>
				</tr>
				<tr>
					<td class="terms" colspan="2">
						By creating an account, you agree to our <a href="terms.php">Terms and Policies</a>.
					</td>
				</tr>
				<tr>
					<td class="submit" colspan="2">
						<input class="submit" id="signup" type="submit" name="submit" value="Sign Up"></input>
					</td>
				</tr>
			</table>
		</form>
		<br>
	</main>
</body>
</html>