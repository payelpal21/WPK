
<?php 

include ("database.php");


if(isset($_POST['login']))
{
   $Uname = $_POST['uname'];
   $pass = $_POST['psw'];

   $query = " SELECT * FROM adminuser WHERE username = '$Uname' and  password = '$pass' " ;

   $data = mysqli_query($link,$query);

   $total = mysqli_num_rows($data);

   if($total < 1)
   {
         ?>
       <script> 
       alert('username or password not matched'); 
       window.open('adminlogin.php','_self');
   </script>

   <?php 
   }

   else
   {
    
      $result = mysqli_fetch_assoc($data);

      $Id = $result['id'];

      

      $_SESSION['id'] = $Id;  
      header('location:admindashboard.php');
    
   }
}

?>