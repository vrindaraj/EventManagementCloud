<!DOCTYPE html>
<html>
<link rel="stylesheet" href="responsivetop.css">
<link rel="stylesheet" href="responsivetop.js">

<div class="topnav" id="myTopnav">

  <div class="dropdown">
    <button class="dropbtn">Events
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Workshops</a>
      <a href="#">Seminars</a>
       <a href="#">Hackathons</a>
       <a href="#">Placements</a>
       <a href="#">Paper Presentation</a>
       <a href="#">Technical Symposium</a>
       <a href="#">Cultural Fests</a>
    </div>
  </div>
  
<a href="kite_login.php" >Publish Events</a>
<a href="fac_login.php">FACULTY LOGIN</a>
</div>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <p></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Publisher Name</th>
       <th>Event Name</th>
     <th>Event Type</th>
     <th>Description</th>
     <th>Register Date</th>
   <th>Start Date</th>
   <th>End Date</th>
<th>Register</th>
      </tr>
    </thead>
    <tbody>
<?php
include 'db_connect.php';
     $sql = 'SELECT * FROM pub';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>" . $row["pname"]. "</td>";
echo "<td>" . $row["ename"]. "</td>";
echo "<td>" . $row["etype"]. "</td>";
echo "<td>" . $row["description"]. "</td>";
echo "<td>" . $row["reg_date"]. "</td>";
echo "<td>" . $row["s_date"]. "</td>";
echo "<td>" . $row["e_date"]. "</td>";
 echo "<td><a href=kiteregister.php>Register</a></td></tr>";           }
         } ?>
    
</tbody>
  </table>
</div>

</body>
</html>

