<?php
    $dbhost="localhost";
    $dbUserName="root";
    $dbpwd="";
    $dbName="student";
    $conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);
    $sql = "DELETE FROM students WHERE id =".$_GET['id'];
    $result=mysqli_query($conn,$sql);
    $row = mysqli_query($conn, $sql);
    if(!$result)
{
	   echo "Failed ".mysqli_error($conn);
   }else{
	   echo "User deleted successfly";
   }
       
   
?>