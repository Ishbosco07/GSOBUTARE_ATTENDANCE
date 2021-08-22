<style>
    .class {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 5px 5px;
  font-weight:bold;
  text-decoration: none;
  font-size: 17px;
  background-color:red;
    }
    </style>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="classtyle.css">
    <link rel="stylesheet" href="drop.css">
 
</head>
<body>
	
    <header>
        <nav>
            <div class="navigation-tab">


                <ul>
                    <li><a href="index.php">Home</a></li>
                   <li><a href="ClassA.php">Classe</a></li>
                  
                   <li><a href="admin.php">Admin</a></li>
                   <div class="dropdown">
                     <button class="dropbtn">Register</button>
                        <div class="dropdown-content">
                    <?php
                       if(isset($_SESSION['admin_email']))
                       {
                           echo '<li><a href="register.php">Register Students</a></li>
                           <li><a href="register_admin.html">Register_admin</a></li>
                           <li><a href="register-teacher.php">Register Teacher</a></li>';
                       }
                    ?>
                    </div>
                     </div>
                     <li><a href="Teachers.php">Teacher</a></li>
                     <li><a href="comment_receved.php">Comment</a></li>
                    <li><a href="logout.php">Log out</a></li>
                
                    
    
                </ul>
            </div>
        </nav>
    </header>
    <section class="classes">

    <ul>
        <li><a href="class_attent.php?class=S1">Sinior 1</a></li>
        <li><a href="class_attent.php?class=S2">Sinior 2</a></li>
        <li><a href="class_attent.php?class=S3">Sinior 3</a></li>
        <li><a href="class_attent.php?class=S4">Sinior 4</a></li>
        <li><a href="class_attent.php?class=S5">Sinior 5</a></li>
        <li><a href="class_attent.php?class=S6">Sinior 6</a></li>
    
    </ul>

        <div id="listofclasses">
         <h1>Ordinary Level</h1>
 
            <ol>
                <li><a href="s1.php">Senior One</a></li>
                <li><a href="s2.php">Senior Two</a></li>
                <li><a href="s3.php">Senior Three</a></li>
            </ol>
        </div>
    </section>
   <section class="classes">
  
  
       <div id="listofclasses">
        <h1>Advanced Level</h1>

           <ol>
               <li><a href="s4.php"> Senior four</a></li>
               <li><a href="s5.php"> Senior five</a></li>
               <li><a href="s6.php"> Senior six</a></li>
           </ol>
       </div>

<footer>
    <h3>About Us</h3>
   <p><i class="fas fa-envelope-open"></i>E-mail: EmailAddress@mail.com<br></p> 
   <p>Phone Number: +250 78 6563 234</p> 

</footer>
</body>
</html>