<?php
session_start();
$error="";
if(isset($_GET['error']))
{
    $error=$_GET['error'];
}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<script>
        //hidding and viewing password
        function myfunction(){
            var x= document.getElementById("myinput");
            var y= document.getElementById("hide1");
            var z= document.getElementById("hide2");

            if(x.type == 'password'){
                x.type="text";
                y.style.display= "block";
                z.style.display = "none";
            }
            else{
                x.type="password";
                y.style.display= "none";
                z.style.display = "block";  
            }
        }
    </script>
	<header>
	<nav>
        <div class="navigation-tab">
			
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Log out</a></li>
              
                
            </ul>
			
        </div>
    </nav>
		<h1>G.S.O. Butare attendence Systems</h1>
		</header>
	<div class="row">
  <div class="column" style="background-color:null">
    <h2> <section id="side-bar2">
        <div class="container">
        <h1>log In</h1>
        <form action="loginA.php" method="POST"> 
       
        <div class="label2">
                <label style="color: white;">Email address</label>
                 <input type="text" name="email" placeholder="enter your email..." style="height:30px;" required>
        </div>
        <div>
                 <label for="psw"style="color: white;">PASSWORD</label>
			 <input type="password" name="pwd"placeholder="enter your password..." style="height:30px;" required>
			<span class="eye" onclick="myfunction()">
			<svg id="hide1"aria-hidden="true" focusable="false" data-prefix="fas" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
                <svg id="hide2"aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye-slash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M634 471L36 3.51A16 16 0 0 0 13.51 6l-10 12.49A16 16 0 0 0 6 41l598 467.49a16 16 0 0 0 22.49-2.49l10-12.49A16 16 0 0 0 634 471zM296.79 146.47l134.79 105.38C429.36 191.91 380.48 144 320 144a112.26 112.26 0 0 0-23.21 2.47zm46.42 219.07L208.42 260.16C210.65 320.09 259.53 368 320 368a113 113 0 0 0 23.21-2.46zM320 112c98.65 0 189.09 55 237.93 144a285.53 285.53 0 0 1-44 60.2l37.74 29.5a333.7 333.7 0 0 0 52.9-75.11 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64c-36.7 0-71.71 7-104.63 18.81l46.41 36.29c18.94-4.3 38.34-7.1 58.22-7.1zm0 288c-98.65 0-189.08-55-237.93-144a285.47 285.47 0 0 1 44.05-60.19l-37.74-29.5a333.6 333.6 0 0 0-52.89 75.1 32.35 32.35 0 0 0 0 29.19C89.72 376.41 197.08 448 320 448c36.7 0 71.71-7.05 104.63-18.81l-46.41-36.28C359.28 397.2 339.89 400 320 400z"></path></svg>
				</span>
                
        </div>
        
                <button type="submit" name="submit" class="button_1">Log In</button>
                <div class="container"style="backgroundcolor:#eee">
           <label style="margin-left:0px;color: white;">
               <input type="checkbox"checked="checked"name="remember">Remember me
           </label>
      
       <span class="psw"><a href="#">Forgot password?</a></span>
       </div class>
        </form>
        <?php

        if($error=="password")
        {
            echo '<label style="color:red">Wrong password!</label>';
        }
        elseif($error=="email")
        {
            echo '<label style="color:red">Wrong email!</label>';
        }
        elseif($error=="logged")
           {
               echo '<label style="color:red">Already logged in!</label>';
           }
     ?>
        </div>
</body>
</html>
