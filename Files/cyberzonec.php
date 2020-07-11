<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		margin-top: 20vh;
  		
  	}
  	table{
  		border: 3px solid black;
  	}
  	table tr th{
  		text-align: center;
  	}
  	h1{
  		margin-bottom: 5vh;
  		text-align: center;
  	}
  </style>
</head>
<body>

<?php



$conn = new mysqli("localhost", "root", "", "cyberzonec");

if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  echo "<h1>Employee Data at Cyberzonec</h1>
  		<div class='container '>

  		<table class='table table-hover table-bordered text-center '>
  			<tr>
  				<th>Employee No</th>
  				<th>Name</th>
  				<th>Department ID</th>
  				<th>Employee Grade</th>
  				<th>Contact No</th>
  				<th>Manager ID</th>
  			</tr>";

  while($row = $result->fetch_assoc())
  {
    echo "<tr>
    		<td>".$row["emp_no"]."</td>
    		<td>".$row["name"]."</td>
    		<td>".$row["dept_id"]."</td>
    		<td>".$row["emp_grade"]."</td>
    		<td>".$row["contact_no"]."</td>
    		<td>".$row["manager_id"]."</td>
    	 </tr>";
  }
  echo "</table>
  		</div>";
} 
else 
{
  echo "0 results";
}
$conn->close();
?>

</body>
</html>