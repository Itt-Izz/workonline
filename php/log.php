<?php
session_start(); 
require_once("connection.php");

$name=$_POST['name'];
$pass=$_POST['password'];

$result = $con -> query("select * from worker WHERE uname= '$name' and password='$pass'");
$row = $result->fetch_assoc();
 if($row > 0) { 
    $_SESSION['name'] = $row['uname'];
	$_SESSION['id'] = $row['w_id'];
    header("Location: ../index.php");        
        }else{
     echo "Invalid username or password";
     header('Location: ../login.php?error');
     mysqli_close($con); 
}?>
