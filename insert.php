<?php

$link = mysqli_connect("localhost", "root", "", "x");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 else{

$first_name = mysqli_real_escape_string($link, $_REQUEST['first']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['email']);
$comment = mysqli_real_escape_string($link, $_REQUEST['commentt']);

$sql = "INSERT INTO contact (fullname, email,comment) VALUES ('$first_name', '$last_name','$comment')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    
}
}
// Close connection
mysqli_close($link);
?>