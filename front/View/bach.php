

<?php
//server connection
$servername = "localhost";
$username = "root";
//
$password = "";
$dbname = "gymdb";
//
$p_name = $_POST['name'];
$p_email = $_POST['email'];
$p_phone = $_POST['phone'];
$p_message = $_POST['message'];





//  


// hello

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="insert into feedback (name,email,phone,message) values ('".$p_name."','".$p_email."','".$p_phone."','".$p_message."')";

if ($conn->query($sql) === TRUE) {

  //header("Location: index.php");
 
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>