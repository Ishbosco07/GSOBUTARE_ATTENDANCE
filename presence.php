<?php
    session_start();
    if(isset($_POST['submit'])){
        $dbhost="localhost";
        $dbUserName="root";
        $dbpwd="";
        $dbName="student";
        $conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);
        if(isset($_GET['class'])){
            $class_name = $_GET['class'];
            $class_list = array('S1', 'S2', 'S3', 'S4', 'S5', 'S6');

            if(!in_array($class_name, $class_list)){
                header('Location: classe.php');
            }

            $sql="SELECT* FROM students WHERE class='$class_name'";
            $result=mysqli_query($conn,$sql);
            $present = array();
            

            for($j=0; $j<(count($_POST) - 1); $j++){
                $present[$j] = ($_POST["present_" . ($j+1)]);
            }

            $i=0;
            while($row=mysqli_fetch_assoc($result)){
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
        }

        /**/
    }
    else{
        header('location: classe.php');
    }


?> 