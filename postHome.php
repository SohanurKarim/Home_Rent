<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	   <title>TO-LET</title>
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/findHome.css" rel="stylesheet">
	   <link rel="icon" type="icon/images" href="images/search-homepage.png" />
	   <script type="text/javascript" src="js/ShowHide.js"></script>

</head>
<body>
	
	<!--Start coding for Navbar Menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar1">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" id="navbar-brand1"><h1><b>TO-LET.COM</b></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">  
          <div class="form-group">
              <ul class="nav navbar-nav navbar-right" id="navbar-nav1">
                <li><a href="#"><span class="glyphicon glyphicon-list-alt"><text>Post</text></span></a></li>
               <li><a href="#" ><span class="glyphicon glyphicon-edit" id="myBtn1" ><text>EditPost</text></span></a></li>
               <li><a href=""><span class="glyphicon glyphicon-trash"><text>DeletePost</text></span></a></li>
              <li><a href="logout_server.php"><span class="glyphicon glyphicon-log-out" id="myBtn"><text>LogOut</text></span></a></li>
             </ul>  
          </div>         
          </form>
        </div>		
      </div>
    </nav><!--End of navbar -->
	
	
	
   
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
			
			 <!--Start Tags -->
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
			  
			   <!-- A_little_about_us -->
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
			
			<!-- Get in touch -->
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
  
  
  
  
  
  <!--Add Script portion -->
 	 <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
	 
   <!--Start coding for java script --> 
  <script>
  
  //start coding  modal for signUp and log-in
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
  //start coding  modal for location map
       $(document).ready(function(){
    $("#Locations_map").click(function(){	    
        $("#myModal3").modal();		
    });
  });
  
       $(document).ready(function(){
    $("#Locations_map1").click(function(){	    
        $("#myModal3").modal();		
    });
  });
  //code for show more and less...
  	$('body').on('click', '#area_show_more', function(e){
		$('#area_show_more_div').php("<a style='color: #02A6D8; cursor:pointer;' id='area_show_less'>Less... </a>");
		$('.area_div').slideDown('slow');
	});
	
	$('body').on('click', '#area_show_less', function(e){
		$('#area_show_more_div').php("<a style='color: #02A6D8; cursor:pointer;' id='area_show_more'>More... </a>");
		$('.area_div').slideUp('slow');
		$('html, body').animate({
            scrollTop: $("#area_list_name_div").offset().top
        }, 2000);
	});
  </script>
	
	
	
	


	
</body>
</html>