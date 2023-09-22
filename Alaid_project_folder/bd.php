<?php
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "main");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect " . mysqli_connect_error());
}
 
// Escape user inputs for security
$semester = mysqli_real_escape_string($link, $_REQUEST['semester']);
$cname = mysqli_real_escape_string($link, $_REQUEST['cname']);
$bname = mysqli_real_escape_string($link, $_REQUEST['bname']);
$aname = mysqli_real_escape_string($link, $_REQUEST['aname']);
$edition = mysqli_real_escape_string($link, $_REQUEST['edition']);
$copies = mysqli_real_escape_string($link, $_REQUEST['copies']);
$toc = mysqli_real_escape_string($link, $_REQUEST['toc']);
$avail = mysqli_real_escape_string($link, $_REQUEST['avail']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
// Attempt insert query execution
$sql = "INSERT INTO book_details (semester, cname, bname, aname, edition, copies, toc, avail, email) VALUES ('$semester','$cname','$bname','$aname','$edition','$copies','$toc','$avail','$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
	header('Location:http://localhost/ALAID/BdetailView.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>