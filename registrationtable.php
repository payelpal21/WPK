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
   
    
    <style>
    
        
.search input[id="serial"]
{
    margin-left:20px;
    padding:10px;
    float :right;
    margin-top: -60px;
    margin-right: 200px;
     border-radius: 5px;
    
}
    
    
    
    </style>
    
   
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
 <h1> Student Registration Records</h1>
 
        <div class="search">
<form action="search.php" method="post">
        
  <label for="roll"></label>
    <input type="text" id="roll" name="rollno" placeholder="Put your roll number..." required>
        
  <label for="serial"></label>   
<input type="text" id="serial" name="serialno" placeholder="Put your serial number.." required>  
    
<input type="submit" name="submit" value="search">    
         </form>
        
        </div>
             
    </body>
</html>









<?php 
include('database.php');

$query = "SELECT * FROM `studentregistration`";

$run = mysqli_query($link, $query);

if(mysqli_num_rows($run)<1)
{
  ?>

<script>
 alert('No data Found');

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
    <th>Serial No.</th>      
    <th>First Name</th>
    <th>Last Name</th>
    <th>Roll Number</th>
    <th>Father's Name</th>
    <th>Date of Birth</th>
    <th>Department</th>
    <th>Address</th>
    <th>Mobile Number</th>
    <th> Status</th>
  </tr>  
 
  <tr>
    <td><?php echo $data['class_serial'];?> </td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>
    <td><?php echo $data['roll']; ?></td>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['dob']; ?></td>
    <td><?php echo $data['dept']; ?></td>
    <td><?php echo $data['address']; ?></td>
    <td><?php echo $data['mobile']; ?></td>
    <td><?php echo $data['status']; ?></td>
    </tr>
    
    
    
    <!----------------button linking ------------------------------->
    
    
    
   <table>
<br>
       
       <tr>
    
           <td> <a href="updateinfo.php" target="_blank" style="text-decoration:none; background-color:green; padding:10px;color:white; border-radius:3px;">Update Data</a></td>
    
           <td> <a href="deletedata.php"  style="text-decoration:none; background-color:red; padding:10px;color:white; border-radius:3px;">Delete Data</a></td>
           
           
           
           <td> <a href="approvedata.php" style="text-decoration:none; background-color:green; padding:10px;color:white; border-radius:3px;">Approve Data</a></td>
           
           
           
           
           <td> <a href="rejectdata.php" style="text-decoration:none; background-color:red; padding:10px;color:white; border-radius:3px;">Reject Data</a></td>
       
       
       </tr>
    
    </table> 
    
    <br>
    
    
  
  
</table>


    

<?php

}




}

?>













