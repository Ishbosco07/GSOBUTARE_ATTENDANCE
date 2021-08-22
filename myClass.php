<?php
    session_start();
    if(isset($_SESSION['user_email'])){
        if(isset($_GET['class'])){
            $conn = mysqli_connect('localhost', 'root', '', 'student');
            $class_list = array('S1', 'S2', 'S3', 'S4', 'S5', 'S6');
            $class_name = $_GET['class'];

            if(in_array($class_name, $class_list) && $conn){
                $sql = "SELECT * FROM students WHERE class = '$class_name'";
                $result = mysqli_query($conn, $sql);
                $stud_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            else{
                header('Location: classe.php');
            }

        }
        else{
            header('Location: classe.php');
        }
    }
    else{
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="cascad.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="navigation-tab">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Classe.php">Classe</a></li>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="contact.html">Contact</a></li>
                    <li><a href="logout.php">Log out</a></li>
    
                </ul>
            </div>
        </nav>
    </header>
    <h2>List of students in Senior <?php echo (int) filter_var($class_name, FILTER_SANITIZE_NUMBER_INT); ?></h2>
    <form action="presence.php?class=<?php echo $class_name ?>" method="POST">
<table style="background-color:white">
    <th>
        <tr>
            <Td><b>No</b> </Td>

            <Td><b>First Name</b> </Td>
            <td><b>Last Name</b></td>
            <td><b>Class</b></td>
            <td><b>Present</b></td>
            <td><b>absent</b></td>
        </tr>
    </th>
        <?php
            if(count($stud_list) < 1){
                echo 'No students registered!';
            }
            elseif(count($stud_list) > 0){
                $i=1;
                foreach($stud_list as $student){
                    echo '<tr><td>'.$i.'</td>';
                    echo '<td>'.$student["fname"].'</td>';
                    echo '<td>'.$student["lname"].'</td>';
                    echo '<td>'.$student["class"].'</td>';
                //   echo $student['id'] . "<br>";
                    echo '<td><input type="radio" name="present_'.$i.'" style="width:20px" value="present"></td>';
                    echo '<td><input type="radio" name="present_'.$i.'" style="width:20px" value="absent" checked></td>';
                    echo '</tr>';
                    $i++;
                }
            }

        ?>
</table>
    <button type="submit" name="submit">SUBMIT</button>
    </form>
    <footer>
    <h3>About Us</h3>
   <p><i class="fas fa-envelope-open"></i>E-mail: EmailAddress@mail.com<br></p> 
   <p>Phone Number: +250 78 6563 234</p> 

</footer>
</body>
</html>