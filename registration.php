<!DOCTYPE html>
<html>
	<head>
		<title>Navigus |code-assignment</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="login">
			<h2>Registration Form</h2>
			<form action="" name="registrationForm" id="registrationForm" method="post" enctype="multipart/form-data">
				<label>User Name :</label>
				<input id="uname" name="uname"  placeholder="First name" type="text">
				<label>Date of Birth :</label>
				<input id="dob" name="dob" placeholder="Date of Birth" type="date">
				<label>Email ID :</label>
				<input id="email" name="email" placeholder="Email ID" type="email">
				<label>Phone No :</label>
				<input id="phone" name="phone" placeholder="Phone No." type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password">
				<label>Address :</label>
				<input id="address" name="address" placeholder="Address" type="text">
				<label>Upload Image :</label>
				<input id="img" name="img" placeholder="Upload Image" type="file"><br><br>
				<input name="submit" type="submit" id ="sub" value="Register">
			</form>
		</div>
	</body>
	<footer>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#registrationForm").on('submit', function(e){
					e.preventDefault();
					 $.ajax({
						type: 'POST',
						url: 'myphp.php',
						dataType: 'json',
						data: new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
						success: function(response) {
								//window.location.href = "/code-assignment/userHistory.php";
						}
					 });
					 
				});
			});
		</script>
	</footer>
</html>

