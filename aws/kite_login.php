<html>
<head>
<title> LOGIN </title>
<link rel="stylesheet" type="text/css" href="signup.css">
<body>
<div class="loginbox">
<img src="avatar1.png" class="avatar">
<h1> STUDENT LOGIN </h1>

<form action="" method="post">
<p> Regno</p>
<input type="text" name="reg_no" placeholder="Enter regno" required>
<p>Password</p>
<input type="password" name="pw" placeholder="Enter password" required>
<input type = "submit" value ="submit" name = "submit"/>
</form>

<a href="kitesignup.php">Don't have an account?</a><br>

</div>
</body> 
</head>
</html>


 <?php
         include 'db_connect.php';
		 if(isset($_POST['submit'])){
			$reg_no = $_POST['reg_no'];
			$pw = $_POST['pw'];
         
         $sql = "SELECT reg_no,pw FROM signup where reg_no= '$reg_no' and pw='$pw' and type =1";
         $result = mysqli_query($conn, $sql);
//print_r($sql);exit;
         if (mysqli_num_rows($result) > 0) {
            header("location:studpubcas.php");
         } else {
            echo "0 results";
         }

	 $sql = "SELECT reg_no,pw FROM signup where reg_no = '$reg_no' and pw='$pw' and type =2";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:studpubkite.php");
         } else {
            echo "0 results";
         }

 	$sql = "SELECT reg_no,pw FROM signup where reg_no= '$reg_no' and pw='$pw' and type =3";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:studpubiim.php");
         } else {
            echo "0 results";
         }

 	$sql = "SELECT reg_no,pw FROM signup where reg_no= '$reg_no' and pw='$pw' and type =4";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:studpubchs.php");
         } else {
            echo "0 results";
         }
        }
      ?>








