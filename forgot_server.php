<?php


//connecction to database

$db=mysqli_connect("localhost","root","","user");

if(isset($_POST['forgot_bt']))
{
	$Username=$_POST['username2'];	
	$password2=$_POST['password2'];
	$password3=$_POST['password3'];
	
	// to database
	if($password2==$password3)
	{ 
      $sql="UPDATE sign_up set Password='$password2' where Username='$Username'";
	  mysqli_query($db,$sql);
		header("location:postHome.php");
	}

      else
	  {
  ?>
     <script type="text/javascript">
		  alert("Password are not match!");
	</script>
				  <?php  
	  }		  
	
}



?>