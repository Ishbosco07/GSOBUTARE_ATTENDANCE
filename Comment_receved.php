
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
    <h2>comment of user</h2>
<table style="background-color:white">
    <th>
        <tr>
            <Td><b>No</b> </Td>

            <Td><b>FullName</b> </Td>
            <td><b>Email</b></td>
            <td><b>commentt</b></td>
            <td><b>Action</b></td>
          
        </tr>
    </th>
        <?php

         $sql="SELECT * FROM contact";
         $result=mysqli_query($conn,$sql);
         $resultCheck=mysqli_num_rows($result);

         if($resultCheck<1)
         {
             echo 'No Comment!';
         }
         elseif($resultCheck>0)
         {
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tr><td>'.$i.'</td>';
                echo '<td>'.$row["fullname"].'</td>';
              
                echo '<td>'.$row["email"].'</td>';
                echo '<td>'.$row["comment"].'</td>';
                echo '<td><a href="deletec.php?id='.$row['id'].'" class="delete">delete</a></td>';
                echo '</tr>';
                $i++;
            }
         }

        ?>
</body>
</html>