<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>common.php</title>
</head>
<body>
	<?php
		function common_header(){
			echo "<div class=\"banner\">
						<div class=\"banner-top\">
							<a href=\"index.php\">Project 4 - BlueRoof - by Hoan Ngo</a>
						</div>
						<div class=\"banner-bottom\">
							<div class=\"welcome\">
								Welcome to BlueRoof!
							</div>
						</div>
					</div>";
			echo "<div class=\"menubar\">
						<a class=\"menuitems\" href=\"index.php\">Home</a>
						<a class=\"menuitems\" href=\"signup.php\">Sign Up</a>
						<a class=\"menuitems\" href=\"login.php\">Log In</a>
					</div>";
		}
	?>
</body>
</html>