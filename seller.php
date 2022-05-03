<?php
	session_start();
	$username=$_SESSION['username'];

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once("common.php");
		common_header();
	?>
	<main>
		<?php
			echo "<h2 class=\"center\">Seller Dashboard</h2>
						<p class=\"center\">Here are your properties.</p>
				<div class=\"dashboard\">
						<img class=\"logo\" src=\"images/house1.png\"><br>
						<h3>Welcome to BlueRoof, $username!</h3>
						<table>
							<tr>
								<td>
									<button class=\"add\" onclick=\"location.href = 'property_register.php';\"></button><br>
									Add property
								</td>
							</tr>";
			$properties=array();//username#location#address#area#bedroom#bathroom#backyard#parking#nearby#mainroad#value#tax
			$properties=file("properties.txt");
			$properties_num=count($properties);
			$count=0;
			for ($i=0; $i < $properties_num; $i++) { 
				$property=array();
				$property=explode("#",$properties[$i]);
				// $property[0]=username
				// $property[1]=location
				// $property[2]=address
				// $property[3]=area
				// $property[4]=bedroom
				// $property[5]=bathroom
				// $property[6]=backyard
				// $property[7]=parking
				// $property[8]=nearby
				// $property[9]=mainroad
				// $property[10]=value

				if ($username==$property[0]) {//property registered
					$count+=1;
					$tax=(int)$property[10]*7/100;
					echo "<tr>
								<td class=\"frame\">
									Location: $property[1]<br>
									Address: $property[2]<br>
									Area: $property[3]<br>
									Bedroom: $property[4]<br>
									Bathroom: $property[5]<br>
									Backyard: $property[6]<br>
									Parking: $property[7]<br>
									Near by: $property[8]<br>
									Main road: $property[9]<br>
									Value: \$$property[10]<br>
									Tax: \$$tax
								</td>
							</tr>";
				}
			}
			echo "</table>
					</div>";
			
		?>
		<br>
	</main>
</body>
</html>