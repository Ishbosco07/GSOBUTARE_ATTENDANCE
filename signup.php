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
    $class=$_POST['class'];
    $age=$_POST['age'];

    if(empty($fname) || empty($lname) || empty($class) || empty($age))
    {
        echo 'Please input all information!';
        exit();
    }
    else
    {
        $sql="INSERT INTO students(fname,lname,class,age) VALUES('$fname','$lname','$class','$age');";
        mysqli_query($conn,$sql);
        echo '<script>
        window.location="admin.php";
        </script>';
}
}
 
?>