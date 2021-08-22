<?php
session_start();
$dbhost="localhost";
$dbUserName="root";
$dbpwd="";
$dbName="student";
$conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);
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
    <h2>List of students in Senior Four</h2>
    <form action="presence1.php" method="POST">
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

         $sql="SELECT * FROM students WHERE class='S4';";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);

         if($resultCheck<1)
         {
             echo 'No S4 students registered!';
         }
         elseif($resultCheck>0)
         {
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tr><td>'.$i.'</td>';
                echo '<td>'.$row["fname"].'</td>';
                echo '<td>'.$row["lname"].'</td>';
                echo '<td>'.$row["class"].'</td>';
             //   echo $row['id'] . "<br>";
                echo '<td><input type="radio" name="present_'.$row['id'].'" style="width:20px" value="present"></td>';
                echo '<td><input type="radio" name="present_'.$row['id'].'" style="width:20px" value="absent" checked></td>';
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