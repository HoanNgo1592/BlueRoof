<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handle Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>

	<main>
		<?php
			$username=$_POST['username'];
			$password=$_POST['password'];
			$confirm_password=$_POST['confirm_password'];
			$fullname=$_POST['fullname'];
			$birthday=$_POST['birthday'];
			$email=$_POST['email'];
			$type=$_POST['type'];
			if ($password==$confirm_password) {
				$person_info=array();

				//split lines in a file to elements in an array
				$person_info=file("users.txt");
				$person_num=count($person_info);
				//split informations in a line to elements in an array
				for($i=0;$i<$person_num;$i++){
					$person=array();
					$person=explode("#",$person_info[$i]);
					// $person[0]=username
					// $person[1]=password
					// $person[2]=fullname
					// $person[3]=birthday
					// $person[4]=email
					// $person[5]=type
					if ($username==$person[0]) {
						echo "<div class=\"dashboard\">
							<img class=\"logo\" src=\"images/house1.png\"><br>
							<p>This username is already exists</p><br>
							<p>Please <a href=\"signup.php\">try again</a>.</p>
						</div>";
					}
				}
				$_SESSION['username']=$_POST['username'];
				$_SESSION['password']=$_POST['password'];
							
				$users=array();
				$users=array_merge($users,array($username,$password));
							
				//Store user's information to users.txt
				$file=fopen("users.txt", "a");
				$content="$username#$password#$fullname#$birthday#$email#$type\n";
				fwrite($file, $content);
							
				echo "<div class=\"dashboard\">
							<img class=\"logo\" src=\"images/house1.png\"><br>
							<h3>Welcome to BlueRoof, $username!</h3>
							<p>You have signed up successfully.<br></p>
							<a href=\"login.php\">Log In</a>
						</div>";	
				
			} else {
				echo "<div class=\"dashboard\">
							<img class=\"logo\" src=\"images/house1.png\"><br>
							<span style='color:red'>Re-confirm your password.<br>Please <a href=\"signup.php\">try again</a>.
						</div>";
			}
		?>
		

	</main>
</body>
</html>