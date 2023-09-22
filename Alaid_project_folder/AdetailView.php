<style class="center">
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
<html>
<h1 align=center>ALUMNI DETAILS</h1>
<body>
<?php  
$database = "main"; 
$mysqli = mysqli_connect("localhost", "root", "", "main"); 
$query = "SELECT * FROM alumni_profile";

echo '<table border="1" cellspacing="2" cellpadding="10" class="center"> 
      <tr> 
          <td> <font face="Arial">NAME</font> </td> 
          <td> <font face="Arial">DEPARTMENT</font> </td> 
          <td> <font face="Arial">BATCH</font> </td> 
          <td> <font face="Arial">EMAIL</font> </td> 
          <td> <font face="Arial">MOBILE NUMBER</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $dept = $row["dept"];
        $batch = $row["batch"];
        $email = $row["email"];
        $mno = $row["mno"]; 

        echo '<tr> 
                  <td>'.$name.'</td> 
                  <td>'.$dept.'</td> 
                  <td>'.$batch.'</td> 
                  <td>'.$email.'</td> 
                  <td>'.$mno.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>
