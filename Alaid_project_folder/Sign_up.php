<?php

$conn = mysqli_connect('localhost','root','','main');

if(isset($_POST['submit'])){

   $uname = mysqli_real_escape_string($conn, $_POST['uname']);
   $psw = mysqli_real_escape_string($conn, $_POST['psw']);
   $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

   $select = " SELECT * FROM login WHERE uname = '$uname' and psw = '$psw' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($psw != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO login(uname, psw) VALUES('$uname','$psw')";
         mysqli_query($conn, $insert);
         header('Location:http://localhost/ALAID/index.html');
      }
   }

};

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Sign up Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form action="" method="post">
    <div class="center">
      <h1>Sign Up</h1>
      <form method="post">
	  <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <div class="txt_field">
          <input type="text" name="uname" required>
          <span></span>
          <label label for="uname">Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="psw" required>
          <span></span>
          <label label for="psw">Password</label>
        </div>
        <div class="txt_field">
            <input type="password" name="cpass" required>
            <span></span>
            <label label for="cpass">Re-enter Password</label>
          </div>
        <input type="submit" name="submit" value="Signup">
        <div class="login_link">
            <br></br>
          Already a member? <a href="index.html">login</a>
        </div>
      </form>
    </div>
</form>
  </body>
</html>
