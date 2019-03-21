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
<a href="responsivekite.php">Back</a>
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
      </tr>
    </thead>
    <tbody>
<?php
include 'db_connect.php';
     $sql = 'SELECT * FROM kitefacpub';
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>" . $row["pname"]. "</td>";
echo "<td>" . $row["ename"]. "</td>";
echo "<td>" . $row["etype"]. "</td>";
echo "<td>" . $row["description"]. "</td>";
echo "<td>" . $row["reg_date"]. "</td>";
echo "<td>" . $row["s_date"]. "</td>";
echo "<td>" . $row["e_date"]. "</td></tr>";
            }
         } ?>
    
</tbody>
  </table>
</div>

</body>
</html>

