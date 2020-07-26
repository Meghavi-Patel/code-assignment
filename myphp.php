<?php
	include "mydb.php";
	#registration detaila
	
		$uname = $_POST['uname'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass = $_POST['password'];
		$address = $_POST['address'];
		$create_datetime = date("Y-m-d H:i:s");
		
		#age calulation
		$today = date("Y-m-d");
		$diff = date_diff(date_create($dob), date_create($today));
		$age = $diff->format('%y'); 
	 
		$targetDir = "uploads/";
		$img = basename($_FILES["img"]["name"]);
		$targetFilePath = $targetDir . $img;
		echo $targetFilePath;die;
		move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);

		if($uname != NULL && $dob !=NULL && $age != Null && $phone != NULL && $pass !=null && $address != NULL && 
			$img != NULL && $email !=NULL && $create_datetime != NULL){

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  echo "<div class='form'><h3>Invalid email format</h3><br/></div>";
			}

			if(!preg_match("/^[0-9]{2}[0-9]{4}[0-9]{4}$/", $phone)) {
					echo "<div class='form'><h3>Invalid phone number</h3><br/></div>";
			}

			$insert = $conn->query("INSERT INTO  registration(uname,dob,age,phone,pass,address,uploadimg,emailid,create_datetime) 
			VALUES ('".$uname."','".$dob."','".$age."','".$phone."','".md5($pass)."',
			'".$address."','".$img['tmp_name']."','".$email."','".$create_datetime."')"); 
						 
			if ($insert) {
				echo "<div class='form'>
					  <h3>You are registered successfully.</h3><br/>
					  <p class='link'>Click here to <a href='userHistory.php'>Dashbord</a></p>
					  </div>";
			} else {
				
				echo "<div class='form'>
					  <h3>Required fields are missing.</h3><br/>
					  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
					  </div>";
			}
		}
		else{
			echo "<div class='form'>
					  <h3>Required fields are missing.</h3><br/>
					  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
					  </div>";
			}
?>	