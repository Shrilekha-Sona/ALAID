<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "main");

$avail = mysqli_real_escape_string($conn, $_POST['avail']);
$bname = mysqli_real_escape_string($conn, $_POST['bname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE book_details SET avail='$avail' WHERE email='$email' AND bname='$bname'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
