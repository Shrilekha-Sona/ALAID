<?php
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "main");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$dept = mysqli_real_escape_string($link, $_REQUEST['dept']);
$batch = mysqli_real_escape_string($link, $_REQUEST['batch']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mno = mysqli_real_escape_string($link, $_REQUEST['mno']);
// Attempt insert query execution
$sql = "INSERT INTO alumni_profile (name,dept,batch,email,mno) VALUES ('$name','$dept','$batch','$email','$mno')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header('Location:http://localhost/ALAID/AdetailView.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>