<?php
    session_start();
    if(true){
        if(isset($_GET['class'])){
            $conn = mysqli_connect('localhost', 'root', '', 'student');
            $class_list = array('S1', 'S2', 'S3', 'S4', 'S5', 'S6');
            $class_name = $_GET['class'];

            if(in_array($class_name, $class_list) && $conn){
                $sql = "SELECT * FROM students WHERE class = '$class_name'";
                $result = mysqli_query($conn, $sql);
                $stud_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $attended_stud = array();

                foreach($stud_list as $student){
                    $stud_id = (int)$student['id'];
                    echo "<br>";
                    $sql1 = "SELECT * FROM attendance WHERE student_id = $stud_id";
                    $result1 = mysqli_query($conn, $sql1);
                    $att = mysqli_fetch_assoc($result1);
                    print_r($att);
                }
            }
            else{
                header('Location: classe.php');
            }

        }
        else{
            echo "no class";
            //header('Location: classe.php');
        }
    }
    else{
        header('Location: index.php');
    }

?>