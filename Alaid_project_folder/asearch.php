<?php  
$database = "main"; 
$mysqli = mysqli_connect("localhost", "root", "", "main"); 
$query = "SELECT * FROM alumni_profile";

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `alumni_profile` WHERE CONCAT(`name`, `dept`, `batch`, `email`, `mno`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `alumni_profile`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "main");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<style class="center">
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
<!DOCTYPE html>
<html>
    <head>
        <title>ALUMNI SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="asearch.php" method="post">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class="search-box">
		<input class="search-txt" type="text" name="valueToSearch" placeholder="Type to search" font-size=20>
		<i style="font-size:24px" class="fa">&#xf002;</i>
		<a class="search-btn" href="#"></a>
		</div>
            <!-- <input type="text" name="valueToSearch" placeholder="Value To Search">--><br><br>
            <input type="submit" name="search" value="SEARCH"><br><br>
            
            <table border="1" cellspacing="2" cellpadding="10" class="center">
                <tr>
                    <th>name</th>
                    <th>dept</th>
                    <th>batch</th>
					<th>email</th>
					<th>mno</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['dept'];?></td>
                    <td><?php echo $row['batch'];?></td>
                    <td><?php echo $row['email'];?></td>
					<td><?php echo $row['mno'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
