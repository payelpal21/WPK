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
 <h3> Please fill up the registration form if you are not apply for your registration otherwise you can check status of your registration by clicking status button.</h3>        
        </marquee>  
        

        <h4> Student Registration Form</h4>
        

        
<a href="regstatus.php" style="font-size:30px;text-decoration:none;background-color:white; padding: 10px; border-radius:15px; float:right; border-style:groove; margin-top:-52px;"> Check Status</a>    

        
        <br><br>
  <div class="container">
  <form action="registration.php" method="post">
      
      <!-- class serial number -->
      
     <label for="sl">Serial No.</label> <span style="color:red">*</span>
    <input type="text" id="sl" name="serialno" placeholder="Put your serial no.." required> 
      
      
      
<!-- first name -->      
    <label for="fname">First Name</label> <span style="color:red">*</span>
    <input type="text" id="fname" name="firstname" placeholder="Put your first name" required>

      
 <!-- last name -->     
    <label for="lname">Last Name</label><span style="color:red">*</span>
    <input type="text" id="lname" name="lastname" placeholder="Put your last name.." required>

 <!-- roll number -->
      
 <label for="roll">Roll Number</label><span style="color:red">*</span>
    <input type="text" id="roll" name="rollno" placeholder="Put your roll number.." required>  

<!-- father's name -->
      
<label for="father">Father's Name</label><span style="color:red">*</span>
    <input type="text" id="father" name="fathername" placeholder="Put your father name.." required>      

<!-- date of birth -->
      
<label for="dob">Date of birth</label><span style="color:red">*</span>
    <input type="date" id="dob" name="DOB" placeholder="Put your Date of birth.." required>   

      <!-- department -->
      
<label for="dept">Department</label><span style="color:red">*</span>
    <input type="text" id="dept" name="department" placeholder="Put your department name.." required>      
      
 <!-- address-->
      
      
<label for="add">Address</label><span style="color:red">*</span><br>
    <textarea rows="10" cols="67" id="add" name="comment" required>
    
      </textarea>   
      

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
    
    $Se = $_POST['serialno'];
    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $roll_no = $_POST['rollno'];
    $father_name = $_POST['fathername'];
    $date_of_birth = $_POST['DOB'];
    $Department = $_POST['department'];
    $address = $_POST['comment'];
    $phone = $_POST['mobileno'];
    
    
    
    
    $qry = " INSERT INTO `studentregistration`( `class_serial`, `firstname`, `lastname`, `roll`, `fname`, `dob`, `dept`, `address`, `mobile`) VALUES ('$Se','$Firstname','$Lastname',' $roll_no','$father_name','$date_of_birth','$Department',' $address','$phone') ";
    
    
    
    
    $run = mysqli_query($link,$qry);
    
    if($run == true)
    {
        ?>
         
<script>
    
    window.alert('Data inserted successfully');
    
</script>

<?php
    }
    
    
    
}







?>





