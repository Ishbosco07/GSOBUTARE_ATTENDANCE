<?php
session_start();

if(isset($_SESSION['user_email']) || isset($_SESSION['admin_email']))
{
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit();
}
else
{
    header("Location:index.php");
    exit();
}

?>