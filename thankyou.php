

<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$subj    = $conn->real_escape_string($_POST['phone']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into tt(name,email,phone,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>