<?php
$database = "main";
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "main");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
// Escape user inputs for security
$feel = mysqli_real_escape_string($link, $_REQUEST['feel']);
$fb = mysqli_real_escape_string($link, $_REQUEST['fb']);
// Attempt insert query execution
$sql = "INSERT INTO rating (feel, fb) VALUES ('$feel','$fb')";
if(mysqli_query($link, $sql)){
    echo "Thanks for your feedback!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>