
<style>
    .delete {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 2px 7px;
  font-weight:bold;
  text-decoration: none;
  font-size: 17px;
  background-color:red;
}
.view {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 2px 7px;
  font-weight:bold;
  text-decoration: none;
  font-size: 17px;
  background-color:green;
}
.update {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 2px 7px;
  font-weight:bold;
  text-decoration: none;
  font-size: 17px;
  background-color:blue;
}
    </style>
<?php
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
                    <li><a href="logout.php">Log out</a></li>
    
                </ul>
            </div>
        </nav>
    </header>
    <h2>List of Teachers</h2>
<table  style="background-color:white">
    <th>
        <tr>
            <Td><b>No</b> </Td>

            <Td><b>First Name</b> </Td>
            <td><b>Last Name</b></td>
            <td><b>Email</b></td>
            <th colspan="3">Action</th>
        </tr>
    </th>
        <?php

         $sql="SELECT * FROM teachers";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);

         if($resultCheck<1)
         {
             echo 'No Teachers  registered!';
         }
         elseif($resultCheck>0)
         {
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tr><td>'.$row["id"].'</td>';
                echo '<td>'.$row["fname"].'</td>';
                echo '<td>'.$row["lname"].'</td>';
                echo '<td>'.$row["email"].'</td>';
                echo '<td><a href="delete.php?id='.$row['id'].'" class="delete">delete</a></td>';
                echo '<td><a href="update.php?id='.$row['id'].'" class="update">update</a></td>';
                echo '<td><a href="view.php?id='.$row['id'].'" class="view"">view</a></td>';
                echo '</tr>';
                $i++;
            }
         }

        ?>
</table>
<footer>
    <h3>About Us</h3>
   <p><i class="fas fa-envelope-open"></i>E-mail: EmailAddress@mail.com<br></p> 
   <p>Phone Number: +250 78 6563 234</p> 

</footer>
</body>
</html>