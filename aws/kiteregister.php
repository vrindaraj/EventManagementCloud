<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: darkgrey;
  background-image: url(paper.jpg);
}

* {
  box-sizing: border-box;
}

/* Style inputs */

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  outline: none;
  border: none;
}

input[type=date] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 20px;
  text-align: center;
  border: none;
  cursor: default;
  outline: none;
  font-size: 20px;
  
}

button :hover {
  background-color: darkgreen;
  
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
  border: none;
  
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two 
columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Registration Form</h2>
    
  </div>
    <div class="column">
      <form action="#">
        <label for="student name">Student name</label>
        <input type="text" id="student name" name="sname" placeholder="Your name..">
 <label for=" class">Class</label>
        <input type="text" id="class" name="Class" placeholder="Your class..">

        <label for="ename">Event Name</label>
        <input type="text" id="lname" name="ename" placeholder="event name..">
        <label for="Event_type">Event type</label>
        <select id="Event_type" name="Event type">
         <option value="Workshop">Workshop</option>
          <option value="Symposium">Technical Symposium</option>
          <option value="Conferences">Conferences</option>
          <option value="Paper Presentations">Paper Presentations</option>
            <option value="Hackathon">Hackathon</option>
          <option value="Hackathon">Seminars</option>
          <option value="Hackathon">Placements</option>
        </select>
<label for="venue">Venue</label>
        <input type="text" id="venue" name="venue" placeholder="enter event  location">
        
        <label for="Registration_date:">Registration Date:</label>
        <input type="date" value="reg_date" placeholder="">
        <label for="Start_date">Start Date:</label>
        <input type="date" value="s_date" placeholder="">
        <label for="End_date">End Date:</label>
        <input type="date" value="e_date" placeholder="">
        <input type = "submit" value ="submit" name = "REGISTER"/>
      </form>
    </div>
  </div>
</div>

</body>
</html>
<?php
         include 'db_connect.php';
		 if(isset($_POST['submit'])){
			$reg_no = $_POST['pname'];
			$pw = $_POST['ename'];
$pw = $_POST['etype'];
$pw = $_POST['venue'];
$pw = $_POST['reg_date'];
$pw = $_POST['s_date'];
$pw = $_POST['e_date'];




         
         $sql = "SELECT pname,ename,etype,venue,reg_date,s_date,e_date FROM regicas (where pname = '$pname' and ename='$ename'etype = '$etype' and venue='$venue'reg_date = '$reg_date' and s_date='$s_date'e_date = '$e_date'  and type =1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:kiteregister.php");
         } else {
            echo "0 results";
         }

	 
         $sql = "SELECT pname,ename,etype,venue,desription,reg_date,s_date,e_dateFROM regikite (where pname = '$pname' and ename='$ename'etype = '$etype' and venue='$venue'reg_date = '$reg_date' and s_date='$s_date'e_date = '$e_date'  and type =2";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:kiteregister.php");
         } else {
            echo "0 results";
         }

 	 
         $sql = "SELECT pname,ename,etype,desription,reg_date,s_date,e_date FROM regiiim (where pname = '$pname' and ename='$ename'etype = '$etype' and venue='$description'reg_date = '$reg_date' and s_date='$s_date'e_date = '$e_date'  and type =3";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:kiteregister.php");
         } else {
            echo "0 results";
         }

 	 
         $sql = "SELECT pname,ename,etype,desription,reg_date,s_date,e_date FROM regichs (where pname = '$pname' and ename='$ename'etype = '$etype' and venue='$venue'reg_date = '$reg_date' and s_date='$s_date'e_date = '$e_date'  and type =4";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            header("location:kiteregister.php");
         } else {
            echo "0 results";
         }
        }
      ?>







