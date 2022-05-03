<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>
	<main>
		<h2 class="center">Log In</h2>
		<p class="center">Please fill out this form to log in to your account.</p>
		<form action="handle_login.php" method="POST">
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
					<td class="submit" colspan="2">
						<input class="submit" id="signup" type="submit" name="submit" value="Log In"></input>
					</td>
				</tr>
			</table>
		</form>
		<br>
	</main>
</body>
</html>