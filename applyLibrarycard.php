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
     <link rel="stylesheet" type="text/css" href="css/dashboard.css"> 
   
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
 <h3> Please apply the library card . If you already applied it to check status by check your library card button otherwise you apply the library card by apply for new button</h3>        
        </marquee>  
        
        
   
        <h4> Apply Library Card</h4>
        
        
   <!---------------button apply for library card----------------------------->     
        
        
        
 <form action="applyfornew.php" method="post" target="_blank">
        
   <button type="submit" name="btn1"> Apply for New</button>     
        
        </form>       
        
 <!------------------------------------------------------------------------ --->
        
   <form action="libstatus.php" method="post" target="_blank">
        
   <button type="submit" name="btn2" class="student"> Check Your Library Card</button>     
        
        </form>      
  
        
        
        
        
        
    
    </body>
</html>

<?php 

include('database.php');

if(isset($_POST['btn1']))
{
    header('location:applyfornew.php');
}

if(isset($_POST['btn2']))
{
    header('location:libstatus.php');
}





?>
