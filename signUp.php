<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	   <title>TO-LET</title>
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="signUp.css" rel="stylesheet">
       <link rel="icon" type="icon/images" href="images/search-homepage.png" />
</head>
<body>
         <!--Start coding for Background Image -->
 <div class="jumbotron" id="jumbotron1">
    <div class="container"> 
	         <div class="col-lg-4"></div>
		    <div class="col-lg-4 box1" >                
					<h2>Sign Up</h2>
					<form action="Sign_server.php" method="POST">
					 
						<div class="inputBox">
						  <input type="text" name="username" required/>
						  <label for="">Username</label>
						</div>
						
						<div class="inputBox">
						  <input type="text" name="phone" required pattern="^[0-9]+"/>
						  <label for="">Phone number</label>
						</div>
						
						<div class="inputBox">
						  <input type="email" name="email" required/>
						  <label for="">Email address</label>
						</div>
						
						<div class="inputBox">
						  <input type="text" name="national_id" required pattern="^[0-9]+"/>
						  <label for="">National id number</label>
						</div>
						
						<div class="inputBox">
						  <input type="password" name="password" required/>
						  <label for="">Password</label>
						</div>
						<div class="col-lg-12">
								<input type="submit" class="btn btn-success btn-block" name="register_bt" value="Submit"/>
								</form>
						</div>

					 
					
					    <div class=" col-lg-12  le">
							 <p>Alrady a member?</p>
							 <a href="#"><span class="" id="myBtn"><text>Login</text></span></a>
							 
					    </div>
					 
					   <!-- <div class="col-lg-12  help1">
							   <a href="#">Help</a><a href="#" id="myBtn"> Login</a>
							   <a href="#">Service</a>
							   <a href="#">Term</a>
							   
					    </div>	--> 
				  
			   
				
            </div>
			
			<div class="col-lg-4"></div>
			
			
		</div>
    </div>
 </div><!--End of Background image -->

<!--Start coding for Modal -->
  <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">    
       <!-- Modal content-->
        <div class="modal-content">
	  
           <div class="modal-header" style="padding:35px 50px;">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
           </div>
		
        <div class="modal-body" style="padding:40px 50px;">
		
          <form role="form" action="login_server.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="username1" placeholder="Username" required/>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password1" placeholder="Enter password" required/>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" name="login_bt" id="log_btn"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
		  
        </div>
		
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="signUp.php">Sign Up</a></p>
          <p>Forgot  <a href="#"><span class="" id="myBtn1">Password?</span></a></p>
        </div>
      </div>      
    </div>
  </div><!--End of modal --> 
  
  
  <!--Start coding for Modal2 -->
  <div class="modal fade" id="myModal2" role="dialog">
     <div class="modal-dialog">    
       <!-- Modal content-->
        <div class="modal-content">
	  
           <div class="modal-header" style="padding:35px 50px;">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
           </div>
		
        <div class="modal-body" style="padding:40px 50px;">
		
          <form role="form" action="forgot_server.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" name="username2" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password2" placeholder="Enter new password" required>
            </div>
			
			 <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
              <input type="password" class="form-control" id="psw" name="password3" placeholder="Confirm password" required>
            </div>
			
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" id="log_btn" name="forgot_bt"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
		  
        </div>
		
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Go back<a href="index.php"> Home</a></p>
          
        </div>
      </div>      
    </div>
  </div><!--End of modal --> 
  
  
   <!--Add Script portion -->
 	 <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	 
   <!--Start coding for java script --> 
  <script>
  $(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();		
    });
  });

    $(document).ready(function(){
    $("#myBtn1").click(function(){	    
        $("#myModal2").modal();
		$("#myModal").hide();
    });
  });

	  
  </script>
  
	
</body>
</html>