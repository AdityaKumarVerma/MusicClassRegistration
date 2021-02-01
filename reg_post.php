<!DOCTYPE html>
<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: perpetua;
  font-size: 22px;
}

.bg {
  background-image: url("music_vinyl.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.text-block {
  position: absolute;
  left: 20px;
  top: 110px;
  height: 60%;
  width: 45%;
  background-color:#804000;
  color: black;
  padding-left: 30px;
  padding-right: 30px;
  opacity: 0.6;
  border-radius: 30px;
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
</style>
</head>
<body>
	<?php
	include 'conect_est.php';

	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$instrument = $_POST['instrument'];
	$day = $_POST['day'];
	foreach($day as $day1)
	{
		$day .= $day1.", ";
	}
	$start = $_POST['start'];
	$comments = $_POST['comments'];
	?>

<div class="bg"><div>
  <div class="text-block">
    <?php
		echo "<h3>Your Entered Details :</h3>";
		echo "<b>Name :</b> ".$name."<br>";
		echo "<b>Date Of Birth : </b>".$dob."<br>";
		echo "<b>Phone Number : </b>".$name."<br>";
		echo "<b>Email : </b>".$email."<br>";
		echo "<b>Selected Instrument :</b> ".$instrument."<br>";
		echo "<b>Selected Days :</b> ".$day."<br>";
		echo "<b>Start Date : </b>".$start."<br>";
		echo "<b>Comments : </b>".$comments."<br>";

		if (isset($_POST['submit']))
		{
			$sql = "INSERT INTO students (name, dob, phone, email, instrument,day , start, comments) VALUES ('$name','$dob','$phone','$email','$instrument','$day','$start','$comments')";

			if(mysqli_query($conn, $sql)) 
 			{ 
    			echo "<br>"; 
    			echo "<br>"; 
    			echo 'You are Registered Successfully.'; 
  				echo "<br>"; 

 			} 
 			else 
 			{ 
  				echo "Not Inserted". $sql . " " . mysqli_error($conn);
   			} 

		}
		include 'close.php';
		
	?>

  </div>
</div>

</body>
</html>