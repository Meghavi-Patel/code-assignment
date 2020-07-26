<!DOCTYPE html>
<html>
	<head>
		<title>Navigus | code-assignment</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="login">
			<h2>Login Form</h2>
			<form action="" method="post" name="login_1" id="login_1">
				<label>Username :</label>
				<input id="username" name="username" placeholder="emailid" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="**********" type="password"><br><br>
				<input name="submit" type="submit" value=" Login " id="login_2">
			</form>
		</div>
	</body>
	<footer>
		<script type="text/javascript">
			$(document).ready(function(){
				
				$("#login_1").on('submit', function(e){
					var formData = $('#login_1').serialize();
					e.preventDefault();
					$.ajax({
						type: 'POST',
						url: 'login.php',
						dataType: 'json',
						data: formData,
						success: function(response) {
							console.log(data);
							console.log("hello");
								//window.location.href = "/code-assignment/userHistory.php";
						}
					});
				});
			});
			
		</script>
	</footer>
</html>
