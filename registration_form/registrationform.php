<?php
	
$servername = "localhost";
$username = "quintana_aceuser";
$password = "acepassword2020";
$dbname = "quintana_acedb";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$useremail = $_POST['email'];
$emergencycontact = $_POST['emergencycontact'];
$male = $_POST['male'];
$female = $_POST['female'];
$nonbinary = $_POST['nonbinary'];
$role = $_POST['role'];
$longcourse = $_POST['longcourse'];
$olympic = $_POST['olympic'];
$tenk = $_POST['tenk'];
$halfmarathon = $_POST['halfmarathon'];
$sprint = $_POST['sprint'];
$try = $_POST['try'];
$splash = $_POST['splash'];
$specialaccom = $_POST['specialaccom'];


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Thank You!  ";


$sql = "
  INSERT INTO registrationform (firstname, lastname, age, email, emergencycontact, male, female, nonbinary, role, longcourse, olympic, tenk, halfmarathon, sprint, try, splash, specialaccom) VALUES ('$firstname', '$lastname', '$age', '$useremail', '$emergencycontact', '$male', '$female', '$nonbinary', '$role', '$longcourse', '$olympic', '$tenk', '$halfmarathon', '$sprint', '$try', '$splash', '$specialaccom');";


if ($conn->query($sql) === TRUE) {
    echo "Your record was created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
