<?php
session_start();
$minutesBeforeSessionExpire=1;
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*60))) {
    session_unset();     // unset $_SESSION   
    session_destroy();   // destroy session data  
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity
$dbhost="localhost";
$dbUserName="root";
$dbpwd="";
$dbName="student";
$conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);

$email=$_POST['email'];
$pwd=$_POST['password'];

$sql="SELECT * FROM teachers WHERE email='$email';";
$result= mysqli_query($conn,$sql);
$resultCheck= mysqli_num_rows($result);
if($resultCheck<1)
{
    header("Location:index.php?error=email");
    exit();
}
elseif($resultCheck>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        if(password_verify($pwd,$row['pwd']))
        {
            if(isset($_SESSION['user_email']) || isset($_SESSION['admin_email']))
            {
                header("Location:index.php?error=logged");
                exit();
            }
            else
            {
                $_SESSION['user_email']=$row['email'];
                header("Location:classe.php");
                exit();
            }
        }
        else
        {
            header("Location:index.php?error=password");
            exit();
        }
    }
}
?>