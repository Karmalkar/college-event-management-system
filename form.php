<?php

// Initialize the session
session_start();
 
include("config.php");
include("functions.php");
    $user_data = check_login($con);
 
   $name = $user_data['user_name'];
   echo $name; 
  
 
   $query = "SELECT * FROM users where user_name ='$name'";
   $result = mysqli_query($con, $query);
   
   $row = mysqli_fetch_array($result);
      $user_id =$row["user_id"];

	
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $full_name = $_POST['full_name'];
  $ename = $_POST['ename'];
  

  

    //save to database 
 
    $query = "insert into reg_events (user_id,full_name,date,ename) 
    values ('$user_id','$full_name' ,CURRENT_DATE(),'$ename')";

    mysqli_query($con, $query);
    session_unset(); 
}	

?>



<!-- demo form-->

<form method="post">
  <label for="fname">Full Name:</label>
  <input type="text" id="full_name" name="full_name" ><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" ><br><br>
  <label for="ename">event  name:</label>
  <input type="text" id="ename" name="ename" value="eureka"><br><br>
  <input type="submit" value="Submit">
</form>
