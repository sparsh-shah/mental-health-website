<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "smile");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$genders = mysqli_real_escape_string($link, $_REQUEST['genders']);
$problem = mysqli_real_escape_string($link, $_REQUEST['problem']);
// Attempt insert query execution
$sql = "INSERT INTO details (name, email, age, genders, phone, problem) VALUES ('$name','$email','$age','$genders','$phone','$problem')";
if(mysqli_query($link, $sql)){
    echo "Your Details Have been Submitted. They will remain confidential.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
