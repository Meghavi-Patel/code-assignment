<?php
	include "mydb.php";
	#registration detaila
	
		$uname = $_POST['username'];
		$pass = $_POST['password'];
	
		$query    = $conn->query("SELECT * FROM `registration` WHERE uname='$uname'
                     AND pass='" . md5($pass) . "'");
		
        if ($image->num_rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: userHistory.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
?>