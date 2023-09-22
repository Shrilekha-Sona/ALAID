<style class="center">
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
<html>
<h1 align=center>BOOK DETAILS</h1>
<body>
<?php  
$database = "main"; 
$mysqli = mysqli_connect("localhost", "root", "", "main"); 
$query = "SELECT * FROM book_details";

echo '<table border="1" cellspacing="2" cellpadding="10" class="center"> 
      <tr> 
          <td> <font face="Arial">SEMESTER</font> </td> 
          <td> <font face="Arial">COURSE NAME</font> </td> 
          <td> <font face="Arial">BOOK NAME</font> </td> 
          <td> <font face="Arial">AUTHOR NAME</font> </td> 
          <td> <font face="Arial">EDITION</font> </td>
		  <td> <font face="Arial">COPIES</font> </td>
		  <td> <font face="Arial">TYPE OF COPY</font> </td>
		  <td> <font face="Arial">AVAILABILITY</font> </td>
		  <td> <font face="Arial">EMAIL</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $semester = $row["semester"];
        $cname = $row["cname"];
        $bname = $row["bname"];
        $aname = $row["aname"];
        $edition = $row["edition"]; 
		$copies = $row["copies"]; 
		$toc = $row["toc"]; 
		$avail = $row["avail"];
		$email = $row["email"];

        echo '<tr> 
                  <td>'.$semester.'</td> 
                  <td>'.$cname.'</td> 
                  <td>'.$bname.'</td> 
                  <td>'.$aname.'</td> 
                  <td>'.$edition.'</td> 
				  <td>'.$copies.'</td> 
				  <td>'.$toc.'</td> 
				  <td>'.$avail.'</td> 
				  <td>'.$email.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>