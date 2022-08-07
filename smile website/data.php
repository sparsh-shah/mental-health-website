<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width:100%;
color:#E24E42;                               
font-family: monospace;
font-size: 25px;
border:1px solid black;
}
th {
background-color: #E24E42;
color: white;
text-align: center;
border:1px solid black;
}
td {
	border:1px solid black;
	text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Date & Time</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Gender</th>
<th>Phone</th>
<th>Problem</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "smile");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,time_date,name,email,age,genders,phone,problem FROM details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["time_date"] . "</td><td>". $row["name"]. "</td><td>" .$row['email']. "</td><td>" .$row['age']. "</td><td>" .$row['genders']."</td><td>" .$row['phone']. "</td><td>" . $row["problem"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>