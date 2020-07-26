<html>
	<head>
		<title>Navigus | code-assignment</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
<?php 
include "mydb.php";
$time = $conn->query('UPDATE `registration` SET `last_sctivity` = now()');
$image = $conn->query('SELECT  uploadimg FROM `registration`');
$uname = $conn->query('SELECT uname FROM `registration');


?>
		<div id="profile">
			<h2>Welcome to coding test assignment!!!</h2>
			<div class="row-span-1">
			<?php if($image->num_rows > 0){
				while($row = $conn->fetch_assoc()){
					$imageURL = 'uploads/'.$row["file_name"]; ?>
				<img src=".<?php echo $imageURL ?>." class="avatar">
				<?php }?>
			<?php }?>
				<div class="overlay"><?php echo $uname ?></div>
			</div>
			<div>
				<p><?php echo $uname ?></p>
				<p><?php echo $time ?></p>
			</div>
			<div><p><a href="logout.php" class="login-button">Logout</a></p></div>
		</div>	
	</body>
</html>