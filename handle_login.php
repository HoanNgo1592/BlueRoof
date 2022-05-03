<?php
	session_start();
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	$login_username=$_SESSION['username'];
	$login_password=$_SESSION['password'];
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

		if ($person[0]==$_SESSION['username']) {
			$_SESSION['type']=$person[5];
		}
	}

	function existUser(){
		$person_info=array();

		//split lines in a file to elements in an array
		$person_info=file("users.txt");
		$person_num=count($person_info);
		//split informations in a line to elements in an array
		for($i=0;$i<$person_num;$i++){
			$person=array();
			$person=explode("#",$person_info[$i]);

			if ($_POST['username']==$person[0]&&$_POST['password']==$person[1]) {
				$_SESSION['type']=$person[5];
				return true;
			}else{
				return false;
			}
		}
	}

	function validLogIn($login_username,$login_password){
		if(isset($_POST['username'])&&isset($_POST['password'])){
			if(($login_username==$_POST['username']&&$login_password==$_POST['password'])||(existUser())){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handle Log In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>

	<main>
		<?php
			if (validLogIn($login_username,$login_password)) {
				if($_SESSION['type']==0){
					echo "<div class=\"dashboard\">
							<img class=\"logo\" src=\"images/house1.png\"><br>
							<h3>Welcome to BlueRoof, $login_username!</h3>
							<p>You have logged in successfully.<br></p>
							<a href=\"buyer.php\">Explore as a Buyer</a>
						</div>";
				}
				if ($_SESSION['type']==1) {
					echo "<div class=\"dashboard\">
							<img class=\"logo\" src=\"images/house1.png\"><br>
							<h3>Welcome to BlueRoof, $login_username!</h3>
							<p>You have logged in successfully.<br></p>
							<a href=\"seller.php\">Explore as a Seller</a>
						</div>";	
				}
				
			} else{
				echo "<span style='color:red'>Invalid Log In Details</span><br><p>We're sorry! You submitted invalid log in information. Please <a href=\"login.php\">try again</a>.";
			}

		?>
		
	</main>
</body>
</html>