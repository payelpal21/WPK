
<?php 


session_start();

 if($_SESSION['id'])
 {
 	
 }

 else
 {
 	header('location:adminlogin.php');
 }





?>


<!-- admin dash board -->
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
        
<h1> WELCOME TO ADMIN DASHBOARD </h1>   
    
<div class="dash">       
<a href="end.php">Logout</a>        
        
        </div> 
        
 <form action="registrationtable.php" method="post" target="_blank">
        
   <button type="submit" name="btn1"> Student Registration </button>     
        
        </form>       
        
 <!------------------------------------------------------------------------ --->
        
   <form action="transfertable.php" method="post" target="_blank">
        
   <button type="submit" name="btn2" class="student"> Student Transfer </button>     
        
        </form>      
        
  <!------------------------------------------------------------>  
        
        <form action="admincalendar.php" method="post" target="_blank">
        
   <button type="submit" name="btn3"> College Notice</button>     
        
        </form>       
        
 <!---------------------------------------------------------------------->
        
        <form action="Library.php" method="post" target="_blank">
        
   <button type="submit" name="btn4"> Library Card </button>     
        
        </form>       
        
<!--------------------------------------------------------------------------------->     
         
        
<!--------------------------------------------------------------------->
        
        
        <form action="addadmin.php" method="post" target="_blank" >
        
   <button type="submit" name="btn10"> Add admin </button>     
        
        </form>
        
    
          <form action="adimissionsection.php" method="post" target="_blank" >
        
   <button type="submit" name="btn12">Student Details</button>     
        
        </form>
        
    
    </body>
</html>

<?php 

include('database.php');

if(isset($_POST['btn1']))
{
    header('location:registrationtable.php');
}

if(isset($_POST['btn2']))
{
    header('location:transfertable.php');
}

if(isset($_POST['btn10']))
{
    header('location:addadmin.php');
}

if(isset($_POST['btn4']))
{
    header('location:Library.php');
}

if(isset($_POST['btn3']))
{
    header('location:adminnotice.php');
}

if(isset($_POST['btn12']))
{
    header('location:adimissionsection.php');
}


?>









