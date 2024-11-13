




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
        

        <h4> Notice Board</h4>
        
        
        <br><br>
  <div class="container">
  <form action="admincalendar.php" method="post"  enctype="multipart/form-data">

      
    
      <label for=""> Upload Notice file </label><span style="color:red">*</span>
      <input type="file" name="pdf" value="" required>
      <br>
      <input type="reset" value="Reset">
      <input type="submit" name="submit" value="Upload">
        
  </form>
</div>
 
       
    </body>
</html>

<?php

include 'database.php';

if(isset($_POST['submit']))
{
    
   
    
    $store = $_FILES['pdf']['name'];
    $type = $_FILES['pdf']['type'];
    $size = $_FILES['pdf']['size'];
    $tmp_loc = $_FILES['pdf']['tmp_name'];
    $targetfile = "calendar/".$store;
    
    
    
    
    
    move_uploaded_file($tmp_loc, $targetfile);
    
    $sql = " INSERT INTO `notice`(`filename`) VALUES ('$store') ";
    
    $qry = mysqli_query($link, $sql);
    
    
    if($qry == true)
    {
        
        ?>
<script>

        window.alert('Notice uploaded successfully');

</script>


<?php
    }
    
    
    
    
    
    
    
}








?>










