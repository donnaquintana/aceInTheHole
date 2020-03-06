<?php
	
$servername = "localhost";
$username = "quintana_aceuser";
$password = "acepassword2020";
$dbname = "quintana_acedb";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$useremail = $_POST['email'];

$athlete = $_POST['athlete'];
$volunteer = $_POST['volunteer'];
$interested = $_POST['interested'];
$usercomment = $_POST['comment'];


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Thank You!  ";


$sql = "
  INSERT INTO contactform (firstname, lastname, email, athlete, volunteer, interested, comment) VALUES ('$firstname', '$lastname', '$useremail', '$athlete', '$volunteer', '$interested', '$usercomment');";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
