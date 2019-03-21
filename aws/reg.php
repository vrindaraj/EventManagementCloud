<html>
<head>
<title> signup form</title>
<link rel="stylesheet" href="register.css">
</head>
<body>
<div class="login-page">
<div class="form">
	<form action="" method="post">
	<form class="signup form">
	<input type="text" name="reg_no" placeholder="Regno" required >
	<input type="email" name="email" placeholder="email id" required>
	<input type="password" name="pw" placeholder="password" required>
	<input type="password" name="cpw" placeholder="confirm password" required>
	<input type = "submit" value ="submit" name = "submit"/>
	
	</form>
	</div>
	</div>
</html>

<?php
         if(isset($_POST["submit"])){
            include 'db_connect.php';
            $sql = "INSERT INTO signup (reg_no,email,pw,cpw) VALUES ('".$_POST['reg_no']."','".$_POST['email']."','".$_POST['pw']."','".$_POST['cpw']."')";
//print_r($sql);exit;
            if (mysqli_query($conn, $sql)) {
               //echo "New record created successfully";
			   header("location:kite_login.php");
         } else {
            } else {
               //echo "Error: " . $sql . "" . mysqli_error($conn);
            }
           
         }
      ?>