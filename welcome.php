<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
include 'partials/_dbconnect.php';
 require 'partials/nav.php';
 $sql = "Select * from wall";
 $result = mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result)){  
 $flag= $row["flag"];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Security</title>
   <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="welcom.css" >
     <link rel="stylesheet" href="led.css" > 
     <link href="./vanilla-calendar.min.css" rel="stylesheet">
		<script src="./vanilla-calendar.min.js"></script>

		

  
 </head>
</html>

