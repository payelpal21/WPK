<!DOCTYPE html>
<html lang="en">
<head>

  <!-- set meta data -->

  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width , initial-scale=1">
  <meta name ="description" content="Women's Polytechnic Kolkata , womens polytechnic kolkata, women's polytechnic kolkata">
  <meta name="keyword" content="wpk , WPK , womens polytechnic kolkata" >


  <!-- style sheet -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/fontimage.css">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">    
  <link rel="stylesheet" type="text/css" href="css/style.css">    
   
    <title></title>
    
    </head>
    <body>
        
        
<!-- start header --->
        
 
	<div class="topnav">
  <a href="#" title="Facebook" style="font-size:20px; background-color: #4267B2; font-family: monospace;">F</a>
  <a href="#"title="Linkedin" style="font-size:20px; background-color:#0072b1; font-family: monospace;">in</a>
  <a href="#" title="Google" style="font-size:20px; background-color: #db4a39; font-family: monospace;">G+</a>
  <a href="#" title="Twitter" style="font-size:20px; background-color:  #00acee; font-family: monospace;">t </a>


  <!-- phone calling number  -->

   
   <p id="number">033-224848</p>


   <!-- phone calling logo -->


   <img src="image/phone.png" alt="phone image" width="30px" height="30px">



<address>
  1/1/2 Gariahat road,Jodhpur Park, Kolkata, 700048

</address>
  

</div> 
  
        <h4> Add New Admin </h4>   
<br><br>
        
         <div class="container">
  <form action="addadmin.php" method="post">
      
<!-- user name -->      
    <label for="fname">User Name</label> <span style="color:red">*</span>
    <input type="text" id="fname" name="firstname" placeholder="Put user name.." required>

      
       
  <!-- password -->      
    <label for="pswd">Password</label> <span style="color:red">*</span>
    <input type="text" id="pswd" name="pass" placeholder="Put user passcode.." required>    
 


   
      <input type="reset" value="Reset">
      
       <input type="submit" name="register" value="Submit">
  </form>
</div>
 
        
          
        
    </body></html>

<?php

if(isset($_POST['register']))
{
    include('database.php');
    
   $Name = $_POST['firstname'];
   
    $Pass = $_POST['pass'];

    
 
$query = " INSERT INTO `adminuser`(`username`,`password`) VALUES ('$Name','$Pass') "; 
    
    
    
     $run = mysqli_query($link,$query);
    
    if($run == true)
    {
        ?>
         
<script>
    alert('Add admin successfully');
</script>

<?php
    }
    
    
    
    
    
    
    
    
    
}




?>









