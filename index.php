<!DOCTYPE html>
<html lang="en">
  <head>
    <title >TO-LET</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">	
    <link href="index.css" rel="stylesheet">
	<link rel="icon" type="icon/images" href="images/search-homepage.png" />
  </head>

  <body>   
	 
	<!--Start coding for Navbar Menu bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar1">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" id="navbar-brand1"><h1><b>TO-LET.COM</b></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">  
          <div class="form-group">
              <ul class="nav navbar-nav navbar-right" id="navbar-nav1">
                <li><a href="findHome.php"><span class="glyphicon glyphicon-search"><text>FindHome</text></span></a></li>
               <li><a href="#" ><span class="glyphicon glyphicon-list-alt" id="myBtn1" ><text>PostHome</text></span></a></li>
               <li><a href="signUp.php"><span class="glyphicon glyphicon-user"><text>SignUp</text></span></a></li>
              <li><a href="#"><span class="glyphicon glyphicon-log-in" id="myBtn"><text>Login</text></span></a></li>
             </ul>  
          </div>         
          </form>
        </div>		
      </div>
    </nav><!--End of navbar -->
	

  <!--Start coding for Modal1 -->
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
          <p>Forgot <a href="#"><span class="" id="myBtn2">Password?</span></a></p>
        </div>
      </div>      
    </div>
  </div><!--End of modal1 --> 
  
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
          
		  <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
			
			 <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Confirm password">
            </div>
			
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" id="log_btn"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
		  
        </div>
		
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Go back<a href="index.php"> Home</a></p>
          
        </div>
      </div>      
    </div>
  </div><!--End of modal2 --> 
	

    <!--Start coding for Big Image -->
    <div class="jumbotron" id="jumbotron1">
      <div class="container"> 
	    <div class="row">
		 <div class="col-md-12 jumbotron">
           <h1><strong>Welcome to our web site</strong></h1><br />
           <p> This website will help you to find best ideal home your needs. <br /> Also it will help for the home owner to rent their home.</p>
           </div>
		 </div>
      </div>
    </div><!--End of Big image -->

	<!--Start coding for Renter -->
    <div class="container-fluid" id="container">
	<div class="container">
      <p>Check Some Comment from our User</p>
	     
      <div class="row">
        <div class="col-md-6" id="col-md-6">
          <div class="customDiv">
		  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  
        <!-- Indicators -->
       <ol class="carousel-indicators">
     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

     <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
	  <div class="mySlides" >
				  <img src="images/p0.jpg" alt="photo" />
				    <div class="comment_info">
				       <h4>Sohanur Karim</h4>
				      <p>Monafer Mor, Rajshahi</p>
				    </div>
				   <div class="comment_text">
				     <p> Hi <br />I'm Sohanur I'm an engineer I have been working all day for my work. I had to change my home last month. I was very worried about it. At that moment I hear about this website and find a house I like, sitting in the house. It helped me a lot, without any hassle to get home to my liking. I wish this website is good. 		           
				    </p>
             </div>				   
		</div>
    </div>
	
    <div class="item">
        <div class="mySlides" >
			 <img src="images/p1.jpg" alt="photo" />
				<div class="comment_info">
				 <h4>Muntha Ahamed</h4>		
				  <p>Saheb Bazar, Rajshahi</p>
			    </div>
			 <div class="comment_text">
			 <p>Hi <br />I'm Muntha I'm an engineer I have been working all day for my work. I had to change my home last month. I was very worried about it. At that moment I hear about this website and find a house I like, sitting in the house. It helped me a lot, without any hassle to get home to my liking. I wish this website is good. 		
			 </p>
            </div>				   
		</div>
    </div>	
	
    <div class="item">
			<div class="mySlides" >
				  <img src="images/p3.PNG" alt="photo" />
				  <div class="comment_info"><h4>Saida Hossian</h4>
				   <p>Kazla, Rajshahi</p>
				   </div>
				   <div class="comment_text"><p> Hi <br />I'm Saida I'm an engineer I have been working all day for my work. I had to change my home last month. I was very worried about it. At that moment I hear about this website and find a house I like, sitting in the house. It helped me a lot, without any hassle to get home to my liking. I wish this website is good. 		                   </p>
                 </div>				   
				</div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		  </div>
        </div>
		
		<!--second half -->
        <div class="col-md-6">
            <h2>Find your dream house today</h2>
		     <p>Over 1000+ people find their home</p><br />
		    <a href="">Find your best home for free</a>
       </div>        
        </div>
       </div> 
	</div><!-- /End container -->
	
	
	<!-- Start coding for how to work user -->
	<div class="container-fluid" id="container-fluid">	 
	   <p>How it works for User</p>
	  
	    <div class="col-md-4">	       
		    <div class="comment1">
             <img src="images/c1.PNG" alt="icon" />
		     <h3>Post your home requirements</h3>
		     <p>After clicking on find home you will have a list of home which home owner listed. There can be thousands of home listed. Check detail for the home like how many rooms you need, location etc. </p>
		 </div>
		</div>
		
		
	    <div class="col-md-4">
		 <div class="comment2">
          <img src="images/c2.PNG" alt="icon" />
		  <h3>Get the maximum 5 best home details</h3>
		  <p>Check detail for Home as your requirement with your best rent price. If detail matched with your requirement you can choose this home you rent.</p>
		 </div>
		</div>
		
	    <div class="col-md-4">
		   <div class="comment3">
          <img src="images/c3.PNG" alt="icon" />
		  <h3>Contact with Owner</h3> 
		 <p>After you get your best home then you can contact with home owner for making a deal and future discussion. </p>
		 </div>
		</div>
	  </div><!--End container -->
	
	<!--Start coding for Owner -->
    <div class="container-fluid" id="container">
	<div class="container">
      <p>Check Some Comment from Home owner</p>
	     
      <div class="row">
        <div class="col-md-6" id="col-md-6">
          <div class="customDiv">
		  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  
        <!-- Indicators -->
       <ol class="carousel-indicators">
     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

     <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
	  <div class="mySlides" >
				  <img src="images/pp1.PNG" alt="photo" />
				    <div class="comment_info">
				       <h4>Benzir Ahmed</h4>
				      <p>Saheb Bazar, Rajshahi</p>
				    </div>
				   <div class="comment_text">
				     <p> Hi <br /> I am Benzir Ahmed. I used to post a poster on the walls of many walls to scatter my house which was somehow irritating to me. I heard this site and I advertised my house. I got the tenant for my home very easily. I wish the site is good. 		           
				    </p>
             </div>				   
		</div>
    </div>
	
    <div class="item">
        <div class="mySlides" >
			 <img src="images/sd.jpg" alt="photo" />
				<div class="comment_info">
				 <h4>Shamima Ahamed</h4>		
				  <p>Saheb Bazar, Rajshahi</p>
			    </div>
			 <div class="comment_text">
			 <p>Hi <br />I am benzir Ahmed. I used to post a poster on the walls of many walls to scatter my house which was somehow irritating to me. I heard this site and I advertised my house. I got the tenant for my home very easily. I wish the site is good. 		
			 </p>
            </div>				   
		</div>
    </div>	
	
    <div class="item">
			<div class="mySlides" >
				  <img src="images/p3.PNG" alt="photo" />
				  <div class="comment_info"><h4>Sazzad Hossian</h4>
				   <p>Kazla, Rajshahi</p>
				   </div>
				   <div class="comment_text"><p> Hi <br />I am benzir Ahmed. I used to post a poster on the walls of many walls to scatter my house which was somehow irritating to me. I heard this site and I advertised my house. I got the tenant for my home very easily. I wish the site is good.                   </p>
                 </div>				   
				</div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		  </div>
        </div>
		
		<!--second half -->
        <div class="col-md-6">
            <h2>Are you a home Owner! <br /> Post your Home detail for rent</h2>
		     <p>There are 1000+ people searching for home</p><br />
		    <a href="">Post your Home</a>
          </div>        
        </div>
       </div> 
	</div><!-- /End container -->
	
	<!-- Start coding for how to work user -->
	<div class="container-fluid" id="container-fluid">	 
	   <p>How it works for the owner</p>
	  
	    <div class="col-md-4">	       
		    <div class="comment1">
             <img src="images/c4.PNG" alt="icon" />
		     <h3>Create a free Account</h3>
		     <p>Make your profile in minutes. Post your home, Add your preferred locations, number of rooms, kitchen, bathrooms, expected rent and more. </p>
		 </div>
		</div>
		
		
	    <div class="col-md-4">
		 <div class="comment1">
          <img src="images/c5.PNG" alt="icon" />
		  <h3>Get free rent alerts</h3>
		  <p>Get updated rent alerts via SMS, Email or phone call by tenant To your given contact information.</p>
		 </div>
		</div>
		
	    <div class="col-md-4">
		   <div class="comment2">
          <img src="images/c2.PNG" alt="icon" />
		  <h3>Make the Deal</h3> 
		 <p>After Contact meke the final deal with the tenant. </p>
		 </div>
		</div>
	  </div><!--End container -->
	  
	  
	  <!--Start coding for footer image add 
  	<div class="container-fluid" id="container-fluid0">
         <div class="container">
           <div class="row">
		   
	         <div class="col-lg-3 col-md-3 col-sm-3">
		       <img src="images/logo_pic_1.jpg" >
			 </div>
				
			<div class="col-lg-3 col-md-3 col-sm-3">
		       <img src="images/logo_pic_2.jpg">
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3" id="img3">
		      <img src="images/logo_pic_3.jpg">
			</div>			
			
			<div class=" col-md-3 col-sm-3 col-lg-3" id="img4">
		      <img src="images/logo_pic_4.jpg" >
			</div>
			
			</div>  
		</div>
   </div> End container -->
   
   	  <!--Start coding for footer image add -->
        <div class="container-fluid" id="container-fluid0">
          <div class="container" id="img_container">
            <div class="row">	         
		      <img class="img1" src="images/logo_pic_1.jpg" >			
		        <img class="img2" src="images/logo_pic_2.jpg">		
		         <img class="img3" src="images/logo_pic_3.jpg">			
		          <img class="img4" src="images/logo_pic_4.jpg" >			
			</div>  
		</div>
   </div><!--End container -->

    	  
		  <!--Start coding for footer content -->
  	  <div class="container-fluid" id="container-fluid1"> 
	     <div class="col-lg-3 col-md-3 col-sm-3">
		     <div class="Popular_post">                   
                    <h2>Populr Post</h2><br>
                    <p>
                     This Website is very easy to find home<br>
                    This site helps to communicat <br>
                    to the woner and renter. <br>
                    <img src="images/clock.png">
                    <i>22-January 2018</i>
                    </p>                    
                </div>				
			</div>
			
			 <div class="col-lg-3 col-md-3 col-sm-3">
			   <div class="Tags">                    
                        <h2>Tags</h2><br>
                        <p>
                       Find your best Home, <br />
					   Find your ideal home, <br />
					   Find home, rent a home,<br />
					   Rent home for office use, <br />
					   Rent home for bank,<br />
					   Find home in Rajshahi,<br />
					   Find home in Dhaka,<br />
					   Rent 3 room home etc.
                        </p>
                </div>
			</div>
			  
			<div class="col-lg-3 col-md-3 col-sm-3">
			  <div class="A_little_about_us">
                    <h2>A little about us</h2><br>
                    <p>This website will help you to <br />
					find your best home for rent and to <br />
					find tenant for you home (if you are <br />
					a owner).Please feel free to contact with us <br />
					if you have and suggestion or complain or <br />
					if you need any help from us.
                    </p>
                </div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3">
			   <div class="Get_in_touch">
                    <h2>Get in touch</h2><br>
                    <p>
                        This Website is very easy for <br>
                        Woner and Renter so that they <br>
                         communicat each ohter, However any <br>
                        problem occuer then.Contact with us...<br>
                        ever since.<br>
                        <img src="images/map.png">
                        Rajshahi, Bangladesh<br>
                        <img src="images/emailbox.png">
                        sohanur.vu5.cse5@gmail.com<br>
                        <img src="images/calling.png">
                        01942-420535
                    </p>
                </div>
			</div>
			  
      </div><!--End container -->
	
			  <!--Start coding for footer content -->
  	  <div class="container-fluid" id="container-fluid2">
          	  
			              <div class="box">
                <h2> <strong>CONTACT US</strong></h2>
                
            </div>
			 
             
			<!-- <div class="col-lg-3"></div>
			 <div class="col-lg-3"></div>-->
			  
			 
            <div class="contact_member">
                <ul>
                    <li>
                        <img src="images/wify.png">
                    </li>
                    <li>
                        <img src="images/facebook.png">
                    </li>
                    <li>
                        <img src="images/twter.png">
                    </li>
                    <li>
                        <img src="images/linking.png">
                    </li>
                </ul>
            </div>
			  
	  </div><!--End container -->
	
			<!--Start coding for back to top button -->
			  <a id="topBtn"  onclick="goTop()" title="go to top" href="#jumbotron1">
				<img src="images/white_up.png"class="topUp" alt="topIcon" /></a>

	

	
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
        $("#myModal").modal();
    });
  });
     $(document).ready(function(){
    $("#myBtn2").click(function(){	    
        $("#myModal2").modal();
		$("#myModal").hide();
    });
  });
  //Code for  to scroll to top
 
	  $(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      $('#topBtn').fadeIn();
	    } else {
	      $('#topBtn').fadeOut();
	    }
	  });
	   
	  //Click event to scroll to top

	  $('#topBtn').click(function(){
	  		$('html, body').animate({scrollTop : 0},800);
	  		return false;
	  });

	  
  </script>

  </body>
</html>
