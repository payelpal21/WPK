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
 <h1> Student Library Record</h1>
 
       <div class="search">
<form action="Librarysearch.php" method="post">
        
  <label for="roll"></label>
    <input type="text" id="roll" name="rollno" placeholder="Put your roll number..." required>
        
  <label for="reg"></label>   
<input type="text" id="reg" name="regno" placeholder="Put your registration no.." required>  
    
<input type="submit" name="ananya" value="search">    
         </form>
        
        </div>
        
        
             
    </body>
</html>


<?php

if(isset($_POST['ananya']))
{
    include('database.php');
    
    
    $university_roll = $_POST['rollno'];

    $college_reg = $_POST['regno'];
    
    
    
$send = " SELECT * FROM `applynewcard` WHERE roll = '$university_roll' and registration = '$college_reg' ";
    

    
    $receive = mysqli_query($link, $send);
    
    
    if(mysqli_num_rows($receive)<1)
    {
     ?>

<script>

    window.alert('No data found');
    window.open('Library.php', '_self');

</script>



<?php
    }
    
    else
    {
    
   
    while($data = mysqli_fetch_array($receive))
    {
        
       
        
        ?>

<table id="customers">
      <tr>
     
      
     <th> ID No.</th>     
    <th>Name</th>
    <th>Stream</th>
    <th>Roll Number</th>
    <th>Registration Number</th>
    <th>No. of card issue</th>
    <th>Library card No.</th>
    <th> Status</th>    
         
    
  </tr>  
 <tr>
   
  <td><?php echo $data['ID'];?> </td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['stream']; ?></td>
    <td><?php echo $data['roll']; ?></td>
    <td><?php echo $data['registration']; ?></td>
    <td><?php echo $data['card_issue']; ?></td>
    <td><?php echo $data['cardno']; ?></td>
    <td><?php echo $data['status']; ?></td>
      
    </tr>
  
   <table>
    <br>
       
       <tr>
    
         <td> <a href="libupdate.php" style="text-decoration:none; background-color:green; padding:10px;color:white; border-radius:3px;">Updata Data</a></td>
           
           
            <td> <a href="libdelete.php" style="text-decoration:none; background-color:red; padding:10px;color:white; border-radius:3px;">Delete Data</a></td>
           
           
           <td> <a href="libapprove.php" style="text-decoration:none; background-color:green; padding:10px;color:white; border-radius:3px;">Approve Data</a></td>
           
           
           
           
           <td> <a href="libreject.php" style="text-decoration:none; background-color:red; padding:10px;color:white; border-radius:3px;">Reject Data</a></td>
       
       
       </tr>
    
    </table> 
    
    <br><br>
  
</table>


    









<?php
        
        
        
    }
    
   
}


    





}



?>












