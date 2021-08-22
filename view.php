<?php
   $dbhost="localhost";
   $dbUserName="root";
   $dbpwd="";
   $dbName="student";
   $conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);
   
   $sql = "SELECT * FROM teachers WHERE id =".$_GET['id'];
   
   $result=mysqli_query($conn,$sql);
   $row = mysqli_query($conn, $sql);
   if(!$result){
	   echo "Failed";
   }
   while($row=mysqli_fetch_assoc($result)){
	   echo "teacher id: ".$row["id"]."<br/>";
	   echo "teacher fname: ".$row["fname"]."<br/>";
	   echo "teacherlname: ".$row["lname"]."<br/>";
       echo "teacher email: ".$row["email"]."<br/>";
   }
   
?>