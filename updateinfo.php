




<html>
<head>


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
 <h3> Women's Polytechnic Kolkata ( <?php echo Date('D-M-Y');  ;?> )</h3>        
        </marquee>  
        

        <h4> Student Update  Form</h4>
        
        
        <br><br>
  <div class="container">
  <form action="updateinfo.php" method="post">
      
     
      
      
      
      
      <!-- class serial number -->
      
     <label for="sl">Serial No.</label> <span style="color:red">*</span>
    <input type="text" id="sl" name="serialno" placeholder="Put your serial number" >
      
      
      
<!-- first name -->      
    <label for="fname">First Name</label> <span style="color:red">*</span>
    <input type="text" id="fname" name="firstname" placeholder="Put your first name" required>

      
 <!-- last name -->     
    <label for="lname">Last Name</label><span style="color:red">*</span>
    <input type="text" id="lname" name="lastname" placeholder="Put your last name.." required>

 <!-- roll number -->
      
 <label for="roll">Roll Number</label><span style="color:red">*</span>
    <input type="number" id="roll" name="rollno" placeholder="Put your roll number.." required>  

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
    
    
    
    
   $query = " UPDATE `studentregistration` SET `class_serial`='$Se',`firstname`=' $Firstname',`lastname`='$Lastname',`roll`='$roll_no',`fname`=' $father_name',`dob`='$date_of_birth',`dept`='$Department',`address`='$address',`mobile`='$phone' WHERE `class_serial`='$Se' ";
    
    
    
    $run = mysqli_query($link,$query);
    
   
    
    if($run == true)
    {
        ?>
         
<script>
    window.alert('Data updated successfully');
    window.open('registrationtable.php','_self');
</script>

<?php

       
    }
    
    
    
}







?>















