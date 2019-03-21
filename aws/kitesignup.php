<html>
<head>
<title> signup form</title>
<link rel="stylesheet" href="register.css">
</head>
<body>
<div class="login-page">
<div class="form">
	<form action="" method="post">
	<select name="type">
  <option value="1">KGCAS</option>
  <option value="2">KITE</option>
  <option value="3">IIM</option>
  <option value="4">CHS</option>
</select>
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
            $sql = "INSERT INTO signup(reg_no,email,pw,cpw,type) VALUES ('".$_POST['reg_no']."','".$_POST['email']."','".$_POST['pw']."','".$_POST['cpw']."','".$_POST['type']."')";
//print_r($sql);exit;
            if (mysqli_query($conn, $sql)) {
               //echo "New record created successfully";
			   header("location:kite_login.php");
         } else {
               //echo "Error: " . $sql . "" . mysqli_error($conn);
            }
           
         }
      ?>