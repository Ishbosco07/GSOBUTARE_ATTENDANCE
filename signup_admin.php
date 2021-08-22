<?php
$dbhost="localhost";
$dbUserName="root";
$dbpwd="";
$dbName="student";
$conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    if(empty($fname) || empty($lname) || empty($email) || empty($pwd))
    {
        echo 'Please input all information!';
        exit();
    }
    else
    {
        $pwd_hash=password_hash($pwd,PASSWORD_DEFAULT);
        $sql="INSERT INTO admin(fname,lname,email,pswd) VALUES('$fname','$lname','$email','$pwd_hash');";
        mysqli_query($conn,$sql);
        echo "DONE";
    }
}

?>