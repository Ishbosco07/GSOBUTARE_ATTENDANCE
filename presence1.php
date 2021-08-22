<?php

    session_start();
    $dbhost="localhost";
    $dbUserName="root";
    $dbpwd="";
    $dbName="student";
    $conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);

    $sql="SELECT* FROM students WHERE class='S2'";
    $result=mysqli_query($conn,$sql);
    $present = array();

    for($j=24; $j<(count($_POST) - 1); $j++)
    {
        $present[$j] = ($_POST["present_" . ($j+1)]);
    }

    $i=0;
    while($row=mysqli_fetch_assoc($result))
    {
        $student_id = (int)$row['id'];
        $time=date("d/m/Y",time());
        $my_present = $present[$i];
        $sql="INSERT INTO attendance(student_id, attendance_status ,date_created) 
        VALUES($student_id, '$my_present', '$time');";
        if (mysqli_query($conn,$sql)){            
            echo "student of id " .$student_id. " attendance inserted successful <br>";
        }
        else{
            echo "fail to insert student attendance! student id: " .$student_id. "<br>";
        }
        $i++;
    }

?>