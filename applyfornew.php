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
        
  <h4> Apply for New  Library Card </h4>      
        
        
<!-------------------apply library card form -------------------------->
        
        <div class="container">
  <form action="applyfornew.php" method="post">
      
<!--  name -->      
    <label for="fname">Enter full Name</label> <span style="color:red">*</span>
    <input type="text" id="fname" name="firstname" placeholder="Put your  name...." required>

      
 <!-- stream name -->     
    <label for="trade">Stream</label><span style="color:red">*</span>
    <input type="text" id="trade" name="tno" placeholder="Put your stream name.." required>



<!-- Serial number -->
      
<label for="sno">Roll No.</label><span style="color:red">*</span>
    <input type="text" id="sno" name="rollno" placeholder="Put your Serial No..." required>      


      <!-- Registration number -->
      
<label for="rno">Registration No.</label><span style="color:red">*</span>
    <input type="text" id="rno" name="regno" placeholder="Put your registration No. ..." required>      
      
   
      <input type="reset" value="Reset">
      
       <input type="submit" name="accept" value="Submit">
  </form>
</div>     
    </body>
</html>


<?php



if(isset($_POST['accept']))
{
    include('database.php');
    
    $FirstName = $_POST['firstname'];
    
    $trade = $_POST['tno'];
    
    $university_roll  = $_POST['rollno'];
    
    $college_Regno = $_POST['regno'];
    
   
    
$insert = " INSERT INTO `applynewcard`(`name`, `stream`, `roll`, `registration`) VALUES ('$FirstName','$trade','$university_roll','$college_Regno') ";  
    
    
    $check = mysqli_query($link, $insert);
    
    
    
    
    
    if($check == true)
    {
        ?>
         
<script>
    window.alert('Data inserted successfully');
</script>

<?php
    }
    
    
    
    
    
    
    
    
    
}




?>







