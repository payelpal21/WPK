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
    
 
    <marquee width="100%" height="0px" direction="left" behavior="scroll" scrollamount="5"  onmouseover="this.stop();" onmouseout="this.start();">
 <h3> Please fill up the transfer form if your are not continue to this college.If you already applied it please check the status by check status button </h3>        
        </marquee>  
        

        <h4> Student Transfer Form</h4>
        

        
<a href="transferstatus.php" style="font-size:30px;text-decoration:none;background-color:white; padding: 10px; border-radius:15px; float:right; border-style:groove; margin-top:-52px;"> Check Status</a>    

        
        <br><br>
  <div class="container">
  <form action="studenttransfer.php" method="post">
      
<!-- first name -->      
    <label for="fname">Name</label> <span style="color:red">*</span>
    <input type="text" id="fname" name="firstname" placeholder="Put your name here.." required>

      
       <!-- department -->
      
<label for="dept">Department</label><span style="color:red">*</span>
    <input type="text" id="dept" name="department" placeholder="Put your department name.." required>  
    
     <!-- registration number -->
      
<label for="reg">Registration No.</label><span style="color:red">*</span>
    <input type="text" id="reg" name="regno" placeholder="Put your registration no.." required>       
      
      
 

 <!-- roll number -->
      
 <label for="roll">Roll Number</label><span style="color:red">*</span>
    <input type="text" id="roll" name="rollno" placeholder="Put your roll number.." required>  

<!-- college name -->
      
<label for="clg">To Which College</label><span style="color:red">*</span>
    <input type="text" id="clg" name="clgname" placeholder="Put your college name where you transfer" required>      


<!-- father's name -->
      
   <label for="father">Father's Name</label><span style="color:red">*</span>
    <input type="text" id="father" name="fathername" placeholder="Put your father's name here.." required>    
         
      
 

      <!-- mobile number -->
      
      
      <label for="phone">Mobile Number</label><span style="color:red">*</span>
    <input type="tel" id="phone" name="mobileno" placeholder="Put your mobile number.." maxlength="10" required>
      
      
  
   
      <input type="reset" value="Reset">
      
       <input type="submit" name="register" value="Submit">
  </form>
</div>
 
       
    </body>
</html>



<?php 

if(isset($_POST['register']))
{
    include('database.php');
    
    $fname = $_POST['firstname'];
   $Department = $_POST['department'];
    $Regno = $_POST['regno'];
    $roll_no = $_POST['rollno'];
    
    $college_name = $_POST['clgname'];
    $father_name = $_POST['fathername'];
    $phone = $_POST['mobileno'];
 
    

    
$query = "INSERT INTO `transfer`(`name`, `dept`, `registration`, `roll`, `clgname`, `fname`, `mobile`) VALUES ('$fname','$Department','$Regno','$roll_no','$college_name','$father_name','$phone') "; 
    
    
    
    
    
  $run = mysqli_query($link, $query);
    
    
    if($run == true )
    {
        ?>

<script>
  alert('Data successfully uploaded');
</script>


    <?php
        
        
    }
    
    
    
}










?>




















