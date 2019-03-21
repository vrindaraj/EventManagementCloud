<html>
<head>
<title> LOGIN </title>
<link rel="stylesheet" type="text/css" href="signup.css">
<body>
<div class="loginbox">
<img src="avatar1.png" class="avatar">
<h1> FACULTY LOGIN </h1>

<form action="" method="post">
<p>Username</p>
<input type="text" name="uname" placeholder="Enter uname" required>
<p>Password</p>
<input type="password" name="pw" placeholder="Enter password" required>
<input type = "submit" value ="submit" name = "submit"/>
</form>

<a href="facultySignup.php">Don't have an account?</a><br>

</div>
</body> 
</head>
</html>


 <?php
         include 'db_connect.php';
		 if(isset($_POST['submit'])){
			$uname = $_POST['uname'];
			$pw = $_POST['pw'];
         
         $sql = "SELECT reg_no,pw FROM faclogin where reg_no= '$uname' and pw='$pw' and type =1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:casfacpub.php");
         } else {
            echo "0 results";
         }

	 $sql = "SELECT reg_no,pw FROM faclogin where reg_no = '$uname' and pw='$pw' and type =2";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:kitefacpub.php");
         } else {
            echo "0 results";
         }

 	$sql = "SELECT reg_no,pw FROM faclogin where reg_no = '$uname' and pw='$pw' and type =3";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:iimfacpub.php");
         } else {
            echo "0 results";
         }

 	$sql = "SELECT reg_no,pw FROM faclogin where reg_no = '$uname' and pw='$pw' and type =4";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:chsfacpub.php");
         } else {
            echo "0 results";
         }
        }

      ?>








