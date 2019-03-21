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
    <h2>Publish Events</h2>
    
  </div>
    <div class="column">
      <form action="" method="post">
        <label for="pname">Publisher name</label>
        <input type="text" id="pname" name="pname" placeholder="Your name..">
        <label for="ename">Event Name</label>
        <input type="text" id="lname" name="ename" placeholder="event name..">
        <label for="Event_type">Event type</label>
        <select id="Event_type" name="etype">
          <option value="Workshop">Workshop</option>
          <option value="Symposium">Technical Symposium</option>
          <option value="Conferences">Conferences</option>
          <option value="Paper Presentations">Paper Presentations</option>
          <option value="Hackathon">Hackathon</option>
          <option value="Hackathon">Seminars</option>
          <option value="Hackathon">Placements</option>
        </select>
        <label for="Description">Description</label>
        <textarea id="Description" name="description" placeholder="Write something.." style="height:280px"></textarea>
        <label for="Registration_date:">Registration Date:</label>
        <input type="date" name = "reg_date" value="Registration_date" placeholder="">
        <label for="Start_date">Start Date:</label>
        <input type="date" name="s_date" value="Start_date" placeholder="">
        <label for="End_date">End Date:</label>
        <input type="date" name ="e_date" value="End_date" placeholder="">
        <input type = "submit" value ="Publish" name = "submit"/>
<input type="submit" value="Get Student Details" name="submit"/>


	
	
      </form>
    </div>
  </div>
</div>

</body>
</html>
 <?php
         include 'db_connect.php';
		 if(isset($_POST['submit'])){
			$pname = $_POST['pname'];
			$ename= $_POST['ename'];
$etype = $_POST['etype'];
$description = $_POST['description'];
$reg_date= $_POST['reg_date'];
$s_date= $_POST['s_date'];
$e_date= $_POST['e_date'];
$sql = "INSERT INTO facpubiim (pname,ename,etype,description,reg_date,s_date,e_date) VALUES ('$pname','$ename','$etype','$description','$reg_date','$s_date','$e_date')";
//print_r($sql);exit;
            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
			  // header("location:kite_login.php");
         } else {
               //echo "Error: " . $sql . "" . mysqli_error($conn);
            }
           


	
        }
      ?>





