<?php  
$database = "main"; 
$mysqli = mysqli_connect("localhost", "root", "", "main"); 
$query = "SELECT * FROM book_details";

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `book_details` WHERE CONCAT(`semester`, `cname`, `bname`, `aname`, `edition`, `copies`, `toc`, `avail`,`email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `book_details`";
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
        <title>BOOK SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post">
		
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
                    <th>semester</th>
                    <th>cname</th>
                    <th>bname</th>
                    <th>aname</th>
					<th>edition</th>
					<th>copies</th>
					<th>toc</th>
					<th>avail</th>
					<th>email</th>
					
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['semester'];?></td>
                    <td><?php echo $row['cname'];?></td>
                    <td><?php echo $row['bname'];?></td>
                    <td><?php echo $row['aname'];?></td>
					<td><?php echo $row['edition'];?></td>
					<td><?php echo $row['copies'];?></td>
					<td><?php echo $row['toc'];?></td>
					<td><?php echo $row['avail'];?></td>
					<td><?php echo $row['email'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
