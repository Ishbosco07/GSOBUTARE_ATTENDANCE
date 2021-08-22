<?php
 $dbhost="localhost";
 $dbUserName="root";
 $dbpwd="";
 $dbName="student";
 $conn=mysqli_connect($dbhost,$dbUserName,$dbpwd,$dbName);
 $id=$_GET['id'];
?>

<html>
  <title>update</title>
  <head>

  </head>
  <body>
  
    <?php

         $sql="SELECT * FROM teachers where id='$id'" ;
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
              echo '<form method="POST" action="">
      
              <div class="label">
                      <label>Firstname</label>
                       <input type="text" name="firstname"value="'.$row["fname"].'"  placeholder="firstname..." style="height:30px;"/>
              </div>
              <div>
                       <label>Lastname</label>
                       <input type="text" name="lastname" value="'.$row["lname"].'"placeholder="lastname..." style="height:30px;"/>
                  
              </div>         <div>
              <label>Lastname</label>
              <input type="hidden" name="id" value="'.$row["id"].'"placeholder="lastname..." style="height:30px;"/>
         
     </div>
              <div>
                       <label>Email</label>
                       <input type="text" name="email"value="'.$row["email"].'" placeholder="email..." style="height:30px;"/>
                  
              </div>
              
                      <button type="submit" name="submit" class="button">update</button>
        
            </form>';
            }
         }
        ?>

        <?php
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $w="update teachers set fname='$firstname',lname='$lastname',email='$email' WHERE id=".$_GET['id'];
    $r=mysqli_query($conn,$w);
    if(!$r){
        echo "Update failled";
    }else{
        echo '<script>
        window.location="Teachers.php";
        </script>';
    }
 }
?>
  </body>
</html>