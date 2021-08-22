<?php
session_start();
$dbhost="localhost";
$dbUserName="root";
$dbpwd="";
$dbName="x";
$conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);

$sql=mysqli_query(insert INTO "students(attendance) values ('$_POST[attend]'");
?>