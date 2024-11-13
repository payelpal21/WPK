




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
        

        <h4> Student  Transfer Approval  Form</h4>
        
        
        <br><br>
  <div class="container">
  <form action="transferapprove.php" method="post" autocomplete="off">
      
     
      
      
      
      
      <!-- class registration  number -->
      
     <label for="reg"> Do you want to Approve the transfer ?<br> Enter the Registration No.</label> <span style="color:red">*</span>
    <input type="text" id="reg" name="regno" placeholder="Put your registration no..">
      
     <label for="app"> Approve </label> 
      <input type="checkbox" id="app" name="accept" value="Approve" required>
 
  <br>
   
      <input type="reset" value="Reset">
      
       <input type="submit" name="register" value="Approve">
  </form>
</div>
 
       
    </body>
</html>


<?php



if(isset($_POST['register']))
{
    include('database.php');
    
    $Re = $_POST['regno'];
    $Approve = $_POST['accept'];
   
    
    
    
    
   $query = " UPDATE `transfer` SET `registration`='$Re',`status`='$Approve' WHERE `registration`='$Re' ";
    
    
    
    $run = mysqli_query($link,$query);
    
   
    
    if($run == true)
    {
     
        ?>
         
<script>
    alert('Transfer Approved successfully');
    window.open('transfertable.php','_self');
</script>

<?php

     
    }
    
    
    
}







?>















