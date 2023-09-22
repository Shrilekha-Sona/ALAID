<?php
$link = mysqli_connect("localhost", "root", "", "main");
$uname = $_POST['uname'];  
$psw = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $uname = stripcslashes($uname);  
        $psw = stripcslashes($psw);  
        $uname = mysqli_real_escape_string($link, $uname);  
        $psw = mysqli_real_escape_string($link, $psw);  
      
        $sql = "select * from login where uname = '$uname' and psw = '$psw'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1 && mysqli_query($link, $sql)){  
            header('Location:http://localhost/ALAID/HomePage.html');
        }  
        else{  
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
        }     
// Close connection
mysqli_close($link);

	
?>