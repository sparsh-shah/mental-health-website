<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "smile");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$genders = $_POST["gender"];
$problem = $_POST["problem"];
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
