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
  <link rel="stylesheet" type="text/css" href ="css/jexpo_table.css"> 
  <link rel="stylesheet" type="text/css" href ="css/searchbox.css"> 
  <link rel="stylesheet" type="text/css" href ="css/updata.css"> 
   

    
   
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
 <h1> Student Transfer Status</h1>
 
        <div class="search">
<form action="transferstatus.php" method="post" autocomplete="off">
        
  <label for="roll"></label>
    <input type="text" id="roll" name="rollno" placeholder="Put your roll number..." required>
        
  <label for="reg"></label>   
<input type="text" id="reg" name="regno" placeholder="Put your registration number.." required>  
    
<input type="submit" name="submit" value="search">    
         </form>
        
        </div>
        
        
             
    </body>
</html>


<?php

if(isset($_POST['submit']))
{
    include('database.php');
    
    
    
    $Regno = $_POST['regno'];
    $Roll = $_POST['rollno'];
    
    
    
$query = "SELECT * FROM `transfer` WHERE `registration`= '$Regno' and roll= '$Roll' "; 
    
    
$run = mysqli_query($link,$query);
    
    
    if(mysqli_num_rows($run)<1)
    {
     ?>

<script>

  alert('No data found');
    window.open('studenttransfer.php', '_self');

</script>



<?php
    }
    
    else
    {
    
   
    while($data = mysqli_fetch_array($run))
    {
        
       
        
        ?>

<table id="customers">
      <tr>
     
        
    <th>Name</th>      
    <th>Department</th>
    <th>Registration</th>
    <th>Roll No.</th>
    <th>Name of the Transfer college</th>
    <th>Father's Name</th>
    <th>Mobile Number</th>
    <th> Status</th>
         
    
  </tr>  
 
  <tr>
      
    
    <td><?php echo $data['name'];?> </td>
    <td><?php echo $data['dept']; ?></td>
    <td><?php echo $data['registration']; ?></td>
    
    <td><?php echo $data['roll']; ?></td>
    <td><?php echo $data['clgname']; ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['mobile']; ?></td>
    <td><?php echo $data['status']; ?></td>
         
       
       
       
    </tr>
  
  
</table>


    









<?php
        
        
        
    }
    
   
}


    





}



?>












