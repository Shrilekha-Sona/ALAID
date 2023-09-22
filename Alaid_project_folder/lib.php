<?php
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "main");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mno = mysqli_real_escape_string($link, $_REQUEST['mno']);
// Attempt insert query execution
$sql = "INSERT INTO lib_profile (name,email,mno) VALUES ('$name','$email','$mno')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header('Location:http://localhost/ALAID/LdetailView.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>