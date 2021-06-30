<?php

session_start();
//connecction to database

$db=mysqli_connect("localhost","root","","user");

if(isset($_POST['login_bt']))
{
	$Username=$_POST['username1'];	
	$password=$_POST['password1'];
	
	// to database
	$sql="SELECT * FROM sign_up WHERE Username='$Username' AND Password='$password'";
	$result=mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result)==1)
	{
		header("location:postHome.php");
    }
      else
	  {
  ?>
     <script type="text/javascript">
		  alert("Username or Password is Invalid");
	</script>
				  <?php  
	  }		  
	
}



?>