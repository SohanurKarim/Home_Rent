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
          <a class="navbar-brand" href="index.php" id="navbar-brand1"><h1><b>TO-LET.COM</b></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">  
          <div class="form-group">
              <ul class="nav navbar-nav navbar-right" id="navbar-nav1">
                <li><a href="#"><span class="glyphicon glyphicon-search"><text>FindHome</text></span></a></li>
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
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" id="log_btn"><span class="glyphicon glyphicon-off"></span> Login</button>
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
  
  
  
    <!--Start coding for Main container -->
     <div class="container" id="container"  style="padding-top: 70px;"> 
       <div class="row">
	   
						 
						 <!--Right search bar -->
							 <div id="filter_div" class="col-lg-4 col-md-4 col-sm-12" >
								<div class="panel panel-primary">
								  <div class="panel-body">
									<div class="row">
									   <div class="serch_titele">
										 <span class="glyphicon glyphicon-search"><text class="text">Search</text></span>
									   </div>
									   
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group" style="padding-left: 0px;padding-right: 0px;">
										  <div class="select_label">
											<select id="city" class="form-control">
											 <option value="1">--Select City--</option>										
											 <option value="5">Rajshahi</option>
											  <option value="2">Dhaka</option>
											 <option value="4">Chittagong</option>											 
											 <option value="6">Sylhet</option>
											 <option value="7">Khulna</option>
											 <option value="8">Rangpur</option>
											 <option value="9">Barisal</option>
											 <option value="10">Mymensingh</option>
											 <option value="11">Narayanganj</option>
											 <option value="12">Savar</option>
											</select>
										 </div>
										</div>
									</div><!--End of selection code -->
									
	<div id="location_show" class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 10px; padding-right: 0px;">
		<div class="form-group" style="padding-left: 0px;padding-right: 0px;">
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding-left: 0px;padding-right: 0px;">
					<label id="area_list_name_div"> Locations </label>
			</div>
							 
		<div class="col-xs-6 col-md-6" style="float: left; text-align: left; padding-left: 0px;">
						    
							<div class="styled-input-single">
							  <input id="locations_317" class="locations styled" type="checkbox" value="317" name="locations[]">
		                       <label class="input-label-checkbox" title="Aam Chattar" data-toggle="tooltip" for="locations_317"> Aam Chattar 
							   </label>
		                    </div>
							
						<div class="styled-input-single">
						<input id="locations_327" class="locations styled" type="checkbox" value="327" name="locations[]">
						<label class="input-label-checkbox" title="Aambagan" data-toggle="tooltip" for="locations_327"> Aambagan </label>
						</div>
						
						<div class="styled-input-single" id="Ashrayan">
						<input id="locations_351" class="locations styled" type="checkbox" value="351" name="locations[]">
						<label class="input-label-checkbox" title="Ashrayan Project" data-toggle="tooltip" for="locations_351"> Ashrayan Project </label>
						</div>
						
						<div class="123" style="text-align: right; padding-left: 0px;"> </div>
						
		        <div class="area_div" style="padding-left: 0px; display: none;">
				   
		            <div class="styled-input-single">
						<input id="locations_331" class="locations styled" type="checkbox" value="331" name="locations[]">
						<label class="input-label-checkbox" title="Baharampur" data-toggle="tooltip" for="locations_331"> Baharampur </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_348" class="locations styled" type="checkbox" value="348" name="locations[]">
						<label class="input-label-checkbox" title="Basuri" data-toggle="tooltip" for="locations_348"> Basuri </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_365" class="locations styled" type="checkbox" value="365" name="locations[]">
						<label class="input-label-checkbox" title="Binodpur" data-toggle="tooltip" for="locations_365"> Binodpur </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_328" class="locations styled" type="checkbox" value="328" name="locations[]">
					    <label class="input-label-checkbox" title="Bornali Mor" data-toggle="tooltip" for="locations_328"> Bornali Mor </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_338" class="locations styled" type="checkbox" value="338" name="locations[]">
						<label class="input-label-checkbox" title="Bosepara" data-toggle="tooltip" for="locations_338"> Bosepara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_367" class="locations styled" type="checkbox" value="367" name="locations[]">
						<label class="input-label-checkbox" title="Budhpara" data-toggle="tooltip" for="locations_367"> Budhpara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_345" class="locations styled" type="checkbox" value="345" name="locations[]">
						<label class="input-label-checkbox" title="Bullanpara" data-toggle="tooltip" for="locations_345"> Bullanpara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_322" class="locations styled" type="checkbox" value="322" name="locations[]">
						<label class="input-label-checkbox" title="Choto Bongram" data-toggle="tooltip" for="locations_322"> Choto Bongram </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_364" class="locations styled" type="checkbox" value="364" name="locations[]">
						<label class="input-label-checkbox" title="Chowddopai" data-toggle="tooltip" for="locations_364"> Chowddopai </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_344" class="locations styled" type="checkbox" value="344" name="locations[]">
						<label class="input-label-checkbox" title="Court Station" data-toggle="tooltip" for="locations_344"> Court Station </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_360" class="locations styled" type="checkbox" value="360" name="locations[]">
						<label class="input-label-checkbox" title="Daharampur" data-toggle="tooltip" for="locations_360"> Daharampur </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_361" class="locations styled" type="checkbox" value="361" name="locations[]">
						<label class="input-label-checkbox" title="Dashmari" data-toggle="tooltip" for="locations_361"> Dashmari </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_339" class="locations styled" type="checkbox" value="339" name="locations[]">
						<label class="input-label-checkbox" title="Dorga Para" data-toggle="tooltip" for="locations_339"> Dorga Para </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_346" class="locations styled" type="checkbox" value="346" name="locations[]">
						<label class="input-label-checkbox" title="Haragram" data-toggle="tooltip" for="locations_346"> Haragram </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_325" class="locations styled" type="checkbox" value="325" name="locations[]">
						<label class="input-label-checkbox" title="Hazrapukur" data-toggle="tooltip" for="locations_325"> Hazrapukur </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_355" class="locations styled" type="checkbox" value="355" name="locations[]">
						<label class="input-label-checkbox" title="Horogram" data-toggle="tooltip" for="locations_355"> Horogram </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_350" class="locations styled" type="checkbox" value="350" name="locations[]">
						<label class="input-label-checkbox" title="Horogram Notunpara" data-toggle="tooltip" for="locations_350"> Horogram Notunpara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_329" class="locations styled" type="checkbox" value="329" name="locations[]">
						<label class="input-label-checkbox" title="Kadirganj" data-toggle="tooltip" for="locations_329"> Kadirganj </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_781" class="locations styled" type="checkbox" value="781" name="locations[]">
						<label class="input-label-checkbox" title="Katakhali" data-toggle="tooltip" for="locations_781"> Katakhali </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_357" class="locations styled" type="checkbox" value="357" name="locations[]">
						<label class="input-label-checkbox" title="Kathalbaria" data-toggle="tooltip" for="locations_357"> Kathalbaria </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_359" class="locations styled" type="checkbox" value="359" name="locations[]">
						<label class="input-label-checkbox" title="Kazla" data-toggle="tooltip" for="locations_359"> Kazla </label>
				    </div>
					
					<div class="styled-input-single">
						<input id="locations_362" class="locations styled" type="checkbox" value="362" name="locations[]">
						<label class="input-label-checkbox" title="Khojapur" data-toggle="tooltip" for="locations_362"> Khojapur </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_341" class="locations styled" type="checkbox" value="341" name="locations[]">
						<label class="input-label-checkbox" title="Luxmipur Mor" data-toggle="tooltip" for="locations_341"> Luxmipur Mor </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_366" class="locations styled" type="checkbox" value="366" name="locations[]">
						<label class="input-label-checkbox" title="Meher Chandi " data-toggle="tooltip" for="locations_366"> Meher Chandi </label>
					</div>
					
					  <div style="text-align: right; padding-left: 0px;"> </div>
				</div>
		</div>
		
				<div class="col-xs-6 col-md-6" style="float: left; text-align: left; padding-left: 0px;">
					<div class="styled-input-single">
						<input id="locations_340" class="locations styled" type="checkbox" value="340" name="locations[]">
						<label class="input-label-checkbox" title="Methor Para" data-toggle="tooltip" for="locations_340"> Methor Para </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_332" class="locations styled" type="checkbox" value="332" name="locations[]">
						<label class="input-label-checkbox" title="Mirer Tek" data-toggle="tooltip" for="locations_332"> Mirer Tek </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_347" class="locations styled" type="checkbox" value="347" name="locations[]">
						<label class="input-label-checkbox" title="Mollapara" data-toggle="tooltip" for="locations_347"> Mollapara </label>
					</div>
					
					<div id="area_show_more_div" style="text-align: right; padding-left: 0px;">
					<a id="area_show_more" style="color: #02A6D8; cursor:pointer;">More...</a>
					</div>
					
					<div class="area_div" style="padding-left: 0px; display: none;">
							<div class="styled-input-single">
								<input id="locations_349" class="locations styled" type="checkbox" value="349" name="locations[]">
							<label class="input-label-checkbox" title="Munshipara" data-toggle="tooltip" for="locations_349"> Munshipara </label>
						</div>
						
					<div class="styled-input-single">
						<input id="locations_354" class="locations styled" type="checkbox" value="354" name="locations[]">
						<label class="input-label-checkbox" title="Nagar Para" data-toggle="tooltip" for="locations_354"> Nagar Para </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_326" class="locations styled" type="checkbox" value="326" name="locations[]">
						<label class="input-label-checkbox" title="Padma Residential Area" data-toggle="tooltip" for="locations_326"> Padma Residential</label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_343" class="locations styled" type="checkbox" value="343" name="locations[]">
						<label class="input-label-checkbox" title="Raj Para" data-toggle="tooltip" for="locations_343"> Raj Para </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_368" class="locations styled" type="checkbox" value="368" name="locations[]">
						<label class="input-label-checkbox" title="Rajshahi University Area" data-toggle="tooltip" for="locations_368"> Rajshahi Universit.. </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_334" class="locations styled" type="checkbox" value="334" name="locations[]">
						<label class="input-label-checkbox" title="Rani Bazar" data-toggle="tooltip" for="locations_334"> Rani Bazar </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_356" class="locations styled" type="checkbox" value="356" name="locations[]">
						<label class="input-label-checkbox" title="Raypara" data-toggle="tooltip" for="locations_356"> Raypara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_358" class="locations styled" type="checkbox" value="358" name="locations[]">
						<label class="input-label-checkbox" title="RUET Area" data-toggle="tooltip" for="locations_358"> RUET Area </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_333" class="locations styled" type="checkbox" value="333" name="locations[]">
						<label class="input-label-checkbox" title="Sadhur Mor" data-toggle="tooltip" for="locations_333"> Sadhur Mor </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_337" class="locations styled" type="checkbox" value="337" name="locations[]">
						<label class="input-label-checkbox" title="Sagarpara" data-toggle="tooltip" for="locations_337"> Sagarpara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_784" class="locations styled" type="checkbox" value="784" name="locations[]">
						<label class="input-label-checkbox" title="Salbagan" data-toggle="tooltip" for="locations_784"> Salbagan </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_363" class="locations styled" type="checkbox" value="363" name="locations[]">
						<label class="input-label-checkbox" title="Satbaria" data-toggle="tooltip" for="locations_363"> Satbaria </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_321" class="locations styled" type="checkbox" value="321" name="locations[]">
						<label class="input-label-checkbox" title="Shah Makhdum" data-toggle="tooltip" for="locations_321"> Shah Makhdum </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_370" class="locations styled" type="checkbox" value="370" name="locations[]">
						<label class="input-label-checkbox" title="Shaheb Bazar" data-toggle="tooltip" for="locations_370"> Shaheb Bazar </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_353" class="locations styled" type="checkbox" value="353" name="locations[]">
						<label class="input-label-checkbox" title="Sheikpara" data-toggle="tooltip" for="locations_353"> Sheikpara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_320" class="locations styled" type="checkbox" value="320" name="locations[]">
						<label class="input-label-checkbox" title="Shilinda" data-toggle="tooltip" for="locations_320"> Shilinda </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_369" class="locations styled" type="checkbox" value="369" name="locations[]">
						<label class="input-label-checkbox" title="Shiroil Colony" data-toggle="tooltip" for="locations_369"> Shiroil Colony </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_323" class="locations styled" type="checkbox" value="323" name="locations[]">
						<label class="input-label-checkbox" title="Sopura" data-toggle="tooltip" for="locations_323"> Sopura </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_319" class="locations styled" type="checkbox" value="319" name="locations[]">
						<label class="input-label-checkbox" title="Sufi Nagar" data-toggle="tooltip" for="locations_319"> Sufi Nagar </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_336" class="locations styled" type="checkbox" value="336" name="locations[]">
						<label class="input-label-checkbox" title="Sultanabad" data-toggle="tooltip" for="locations_336"> Sultanabad </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_330" class="locations styled" type="checkbox" value="330" name="locations[]">
						<label class="input-label-checkbox" title="Terakhadia" data-toggle="tooltip" for="locations_330"> Terakhadia </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_352" class="locations styled" type="checkbox" value="352" name="locations[]">
						<label class="input-label-checkbox" title="Thakurpara" data-toggle="tooltip" for="locations_352"> Thakurpara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_335" class="locations styled" type="checkbox" value="335" name="locations[]">
						<label class="input-label-checkbox" title="Tikapara" data-toggle="tooltip" for="locations_335"> Tikapara </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_324" class="locations styled" type="checkbox" value="324" name="locations[]">
						<label class="input-label-checkbox" title="Uposhohor" data-toggle="tooltip" for="locations_324"> Uposhohor </label>
					</div>
					
					<div class="styled-input-single">
						<input id="locations_342" class="locations styled" type="checkbox" value="342" name="locations[]">
						<label class="input-label-checkbox" title="Vata Para" data-toggle="tooltip" for="locations_342"> Vata Para </label>
					</div>
					
					<div id="area_show_more_div" style="text-align: right; padding-left: 0px;">
					<a id="area_show_less" style="color: #02A6D8; cursor:pointer;">Less...</a>
					</div>
			   </div>
		</div>
	</div>			
</div>

			</div>
		</div>				  
	</div>
</div><!--End of location code--->
	

		
		<!--Right container -->
                  <div class="col-lg-8 col-md-8 col-sm-12" id="col-md-8">
				  
				  <!--post1 -->
				  <div class="panel panel-primary" style="margin-bottom: 25px !important; border: 0; ">
						  <div class="panel-body" style="padding: 28px 19px 28px 30px;">
						    <div class="row" style="position: relative;">
								<div class="col-md-12 col-sm-12">
									<p style="font-size: 13px !important; opacity: 0.7;  margin: 0 !important;">Job ID -  0001</p>

									<p style="font-size: 20px; font-weight: bold; margin: 0 !important;">Need a Renter for Home</p>
								   
								    <div class="img_right_tooltip">
		                              <img src="images/c8.jpg" alt="icon"  />		   
		                               <span class="img_right_tooltip_cont">	   
		                                 <div class="in_tol"><a href=""><img src="images/facebook.png" alt="" /></a></div>
		                                  <div class="in_tol1"><a href=""><img src="images/google_icon.png" alt="" /></a></div>
		                                 <div class="in_tol2"><a href=""><img src="images/linking.png" alt="" /></a></div>		   
		                                 </span>		   
		                            </div>
								
									<div class="row" style="font-size: 13px !important; margin: 7px 0 0 0;">
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
											<span style="font-weight: bold; color: #009abb;">Category : </span>Home/Office										</div>
										
										
										 
										
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Room : </span>4 
										</div>
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Marital status: </span> Married									</div>

										<!--<div class="col-md-12 col-sm-12" style="padding-left: 0px;margin-top: 8px;">
											<span style="font-weight: bold; font-size: 12px;"> </span>
										</div>-->
									
									</div>
								</div>
								
								<div class="col-md-9 col-sm-12">								
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 0px !important;"><span style="font-weight: bold;">Rent : </span>5000 Tk,
									<span style="font-weight: 600;color: #212121;"></span></p>

									 
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 8px !important;">
									<span style="font-weight: bold;">Phone:</span>+8801942420535</p>	
																		
									<p style="padding-top: 7px; padding-bottom: 7px; font-size: 14px !important; font-weight: normal;">
										<i class="glyphicon glyphicon-map-marker" style="color: #fff; width: 30px; height: 30px; border-radius: 50%; background: #009abb; text-align: center; vertical-align: middle; line-height: 30px; font-size: 17px;"></i> Monafer Mor, Rajshahi									</p>
									<p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>For detail Please contact with onwer.</p>
								</div>
								<div class="col-md-3 col-sm-12 footer" style="padding-left: 0px;">
									
					                <div class=" apply" style="padding-right: 0px;">
					                	
					                	<a class="btn default-btn  applyJobSignInButton " data-job_id="8654" style="padding: 3px 12px" type="button" id="Locations_map"> Map</a>
					                	<br /><br />
					                	
					                	<p class="" style="font-size: 12px; opacity: 0.7;">Posted on 8th February, 2018</p>
					                </div>
								</div>

						
							</div>
						  </div>
					  </div>
		          
				  <!--post2 -->
				  <div class="panel panel-primary" style="margin-bottom: 25px !important; border: 0; ">
						  <div class="panel-body" style="padding: 28px 19px 28px 30px;">
						    <div class="row" style="position: relative;">
								<div class="col-md-12 col-sm-12">
									<p style="font-size: 13px !important; opacity: 0.7;  margin: 0 !important;">Job ID -  0001</p>

									<p style="font-size: 20px; font-weight: bold; margin: 0 !important;">Need a Renter for Home</p>
								   
								    <div class="img_right_tooltip">
		                              <img src="images/c8.jpg" alt="icon"  />		   
		                               <span class="img_right_tooltip_cont">	   
		                                 <div class="in_tol"><a href=""><img src="images/facebook.png" alt="" /></a></div>
		                                  <div class="in_tol1"><a href=""><img src="images/google_icon.png" alt="" /></a></div>
		                                 <div class="in_tol2"><a href=""><img src="images/linking.png" alt="" /></a></div>		   
		                                 </span>		   
		                            </div>
								
									<div class="row" style="font-size: 13px !important; margin: 7px 0 0 0;">
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
											<span style="font-weight: bold; color: #009abb;">Category : </span>Home/Office										</div>
										
										
										 
										
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Room : </span>4 
										</div>
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Marital status: </span> Married									</div>

										<!--<div class="col-md-12 col-sm-12" style="padding-left: 0px;margin-top: 8px;">
											<span style="font-weight: bold; font-size: 12px;"> </span>
										</div>-->
									
									</div>
								</div>
								
								<div class="col-md-9 col-sm-12">								
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 0px !important;"><span style="font-weight: bold;">Rent : </span>5000 Tk,
									<span style="font-weight: 600;color: #212121;"></span></p>

									 
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 8px !important;">
									<span style="font-weight: bold;">Phone:</span>+8801942420535</p>	
																		
									<p style="padding-top: 7px; padding-bottom: 7px; font-size: 14px !important; font-weight: normal;">
										<i class="glyphicon glyphicon-map-marker" style="color: #fff; width: 30px; height: 30px; border-radius: 50%; background: #009abb; text-align: center; vertical-align: middle; line-height: 30px; font-size: 17px;"></i> Monafer Mor, Rajshahi									</p>
									<p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>For detail Please contact with onwer.</p>
								</div>
								<div class="col-md-3 col-sm-12 footer" style="padding-left: 0px;">
									
					                <div class=" apply" style="padding-right: 0px;">
					                	
					                	<a class="btn default-btn  applyJobSignInButton " data-job_id="8654" style="padding: 3px 12px" type="button" id="Locations_map1"> Map</a>
					                	<br /><br />
					                	
					                	<p class="" style="font-size: 12px; opacity: 0.7;">Posted on 8th February, 2018</p>
					                </div>
								</div>

						
							</div>
						  </div>
					  </div>
					  
					  
					   <!--post3 -->
				  <div class="panel panel-primary" style="margin-bottom: 25px !important; border: 0; ">
						  <div class="panel-body" style="padding: 28px 19px 28px 30px;">
						    <div class="row" style="position: relative;">
								<div class="col-md-12 col-sm-12">
									<p style="font-size: 13px !important; opacity: 0.7;  margin: 0 !important;">Job ID -  0001</p>

									<p style="font-size: 20px; font-weight: bold; margin: 0 !important;">Need a Renter for Home</p>
								   
								    <div class="img_right_tooltip">
		                              <img src="images/c8.jpg" alt="icon"  />		   
		                               <span class="img_right_tooltip_cont">	   
		                                 <div class="in_tol"><a href=""><img src="images/facebook.png" alt="" /></a></div>
		                                  <div class="in_tol1"><a href=""><img src="images/google_icon.png" alt="" /></a></div>
		                                 <div class="in_tol2"><a href=""><img src="images/linking.png" alt="" /></a></div>		   
		                                 </span>		   
		                            </div>
								
									<div class="row" style="font-size: 13px !important; margin: 7px 0 0 0;">
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
											<span style="font-weight: bold; color: #009abb;">Category : </span>Home/Office										</div>
										
										
										 
										
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Room : </span>4 
										</div>
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Marital status: </span> Married									</div>

										<!--<div class="col-md-12 col-sm-12" style="padding-left: 0px;margin-top: 8px;">
											<span style="font-weight: bold; font-size: 12px;"> </span>
										</div>-->
									
									</div>
								</div>
								
								<div class="col-md-9 col-sm-12">								
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 0px !important;"><span style="font-weight: bold;">Rent : </span>5000 Tk,
									<span style="font-weight: 600;color: #212121;"></span></p>

									 
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 8px !important;">
									<span style="font-weight: bold;">Phone:</span>+8801942420535</p>	
																		
									<p style="padding-top: 7px; padding-bottom: 7px; font-size: 14px !important; font-weight: normal;">
										<i class="glyphicon glyphicon-map-marker" style="color: #fff; width: 30px; height: 30px; border-radius: 50%; background: #009abb; text-align: center; vertical-align: middle; line-height: 30px; font-size: 17px;"></i> Monafer Mor, Rajshahi									</p>
									<p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>For detail Please contact with onwer.</p>
								</div>
								<div class="col-md-3 col-sm-12 footer" style="padding-left: 0px;">
									
					                <div class=" apply" style="padding-right: 0px;">
					                	
					                	<a class="btn default-btn  applyJobSignInButton " data-job_id="8654" style="padding: 3px 12px" type="button" id="Locations_map"> Map</a>
					                	<br /><br />
					                	
					                	<p class="" style="font-size: 12px; opacity: 0.7;">Posted on 8th February, 2018</p>
					                </div>
								</div>						
							</div>
						  </div>
					  </div>
					  
					   <!--post4 -->
				  <div class="panel panel-primary" style="margin-bottom: 25px !important; border: 0; ">
						  <div class="panel-body" style="padding: 28px 19px 28px 30px;">
						    <div class="row" style="position: relative;">
								<div class="col-md-12 col-sm-12">
									<p style="font-size: 13px !important; opacity: 0.7;  margin: 0 !important;">Job ID -  0001</p>

									<p style="font-size: 20px; font-weight: bold; margin: 0 !important;">Need a Renter for Home</p>
								   
								    <div class="img_right_tooltip">
		                              <img src="images/c8.jpg" alt="icon"  />		   
		                               <span class="img_right_tooltip_cont">	   
		                                 <div class="in_tol"><a href=""><img src="images/facebook.png" alt="" /></a></div>
		                                  <div class="in_tol1"><a href=""><img src="images/google_icon.png" alt="" /></a></div>
		                                 <div class="in_tol2"><a href=""><img src="images/linking.png" alt="" /></a></div>		   
		                                 </span>		   
		                            </div>
								
									<div class="row" style="font-size: 13px !important; margin: 7px 0 0 0;">
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
											<span style="font-weight: bold; color: #009abb;">Category : </span>Home/Office										</div>
										
										
										 
										
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Room : </span>4 
										</div>
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Marital status: </span> Married									</div>

										<!--<div class="col-md-12 col-sm-12" style="padding-left: 0px;margin-top: 8px;">
											<span style="font-weight: bold; font-size: 12px;"> </span>
										</div>-->
									
									</div>
								</div>
								
								<div class="col-md-9 col-sm-12">								
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 0px !important;"><span style="font-weight: bold;">Rent : </span>5000 Tk,
									<span style="font-weight: 600;color: #212121;"></span></p>

									 
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 8px !important;">
									<span style="font-weight: bold;">Phone:</span>+8801942420535</p>	
																		
									<p style="padding-top: 7px; padding-bottom: 7px; font-size: 14px !important; font-weight: normal;">
										<i class="glyphicon glyphicon-map-marker" style="color: #fff; width: 30px; height: 30px; border-radius: 50%; background: #009abb; text-align: center; vertical-align: middle; line-height: 30px; font-size: 17px;"></i> Monafer Mor, Rajshahi									</p>
									<p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>For detail Please contact with onwer.</p>
								</div>
								<div class="col-md-3 col-sm-12 footer" style="padding-left: 0px;">									
					                <div class=" apply" style="padding-right: 0px;">                						                
					                	<a class="btn default-btn  applyJobSignInButton " data-job_id="8654" style="padding: 3px 12px" type="button" id="Locations_map"> Map</a>
					                	<br /><br />					                	
					                	<p class="" style="font-size: 12px; opacity: 0.7;">Posted on 8th February, 2018</p>
					                </div>
								</div>						
							</div>
						  </div>
					  </div>
					  
					   <!--post5 -->
				  <div class="panel panel-primary" style="margin-bottom: 25px !important; border: 0; ">
						  <div class="panel-body" style="padding: 28px 19px 28px 30px;">
						    <div class="row" style="position: relative;">
								<div class="col-md-12 col-sm-12">
									<p style="font-size: 13px !important; opacity: 0.7;  margin: 0 !important;">Job ID -  0001</p>

									<p style="font-size: 20px; font-weight: bold; margin: 0 !important;">Need a Renter for Home</p>
								   
								    <div class="img_right_tooltip">
		                              <img src="images/c8.jpg" alt="icon"  />		   
		                               <span class="img_right_tooltip_cont">	   
		                                 <div class="in_tol"><a href=""><img src="images/facebook.png" alt="" /></a></div>
		                                  <div class="in_tol1"><a href=""><img src="images/google_icon.png" alt="" /></a></div>
		                                 <div class="in_tol2"><a href=""><img src="images/linking.png" alt="" /></a></div>		   
		                                 </span>		   
		                            </div>
								
									<div class="row" style="font-size: 13px !important; margin: 7px 0 0 0;">
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
											<span style="font-weight: bold; color: #009abb;">Category : </span>Home/Office										</div>
										
										
										 
										
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Room : </span>4 
										</div>
										<div class="col-md-3 col-sm-12" style="padding-left: 0px;">
											<span style="font-weight: bold; color: #009abb;">Marital status: </span> Married									</div>

										<!--<div class="col-md-12 col-sm-12" style="padding-left: 0px;margin-top: 8px;">
											<span style="font-weight: bold; font-size: 12px;"> </span>
										</div>-->
									
									</div>
								</div>
								
								<div class="col-md-9 col-sm-12">								
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 0px !important;"><span style="font-weight: bold;">Rent : </span>5000 Tk,
									<span style="font-weight: 600;color: #212121;"></span></p>

									 
									<p style="font-size: 12px !important; margin-top: 0px !important; margin-bottom: 8px !important;">
									<span style="font-weight: bold;">Phone:</span>+8801942420535</p>	
																		
									<p style="padding-top: 7px; padding-bottom: 7px; font-size: 14px !important; font-weight: normal;">
										<i class="glyphicon glyphicon-map-marker" style="color: #fff; width: 30px; height: 30px; border-radius: 50%; background: #009abb; text-align: center; vertical-align: middle; line-height: 30px; font-size: 17px;"></i> Monafer Mor, Rajshahi									</p>
									<p style="font-size: 12px !important; opacity: 0.7;"><span style="">Other Requirements - </span>For detail Please contact with onwer.</p>
								</div>
								<div class="col-md-3 col-sm-12 footer" style="padding-left: 0px;">
									
					                <div class=" apply" style="padding-right: 0px;">
					                	
					                	<a class="btn default-btn  applyJobSignInButton " data-job_id="8654" style="padding: 3px 12px" type="button" id="Locations_map"> Map</a>
					                	<br /><br />
					                	
					                	<p class="" style="font-size: 12px; opacity: 0.7;">Posted on 8th February, 2018</p>
					                </div>
								</div>						
							</div>
						  </div>
					  </div> <!--End of post -->
					  
					  
					  <!--Start coding for counting page-->
					<div class="container" id="container_count"  style="padding-top: 30px;"> 
                      <div class="row">	
                         <div lass="col-lg-4 col-md-4 col-sm-12" >					  
						 <div class="Page_count"> 	   
							 <div class="center">
							   <div class="count_num">
								 <a href="">&laquo;</a>
								 <a href=""class="active">1</a>
								 <a href="" class="disabled" >2</a>
								 <a href="" class="disabled">3</a>
								 <a href="#" class="disabled">4</a>
								<a href="#"class="disabled">5</a>
								<a href="#"class="disabled">6</a>
								<a href="">&raquo;</a>
								</div>
							 </div>
						</div>
					  </div>
					</div>
					</div>
		</div>		
	   </div>
    </div><!--End of Container -->  


   <!--start coding for Locations Map -->
       <!--Locations Map1-->
  <div class="modal fade" id="myModal3" role="dialog">
     <div class="modal-dialog">    
       <!-- Modal content-->
        <div class="modal-content">	  
           <div class="modal-header" style="padding:10px 20px 5px 0px;">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4><span class="glyphicon glyphicon-map-marker"></span> Locations</h4>
			   </div>		
             <div class="modal-body" style="padding:10px 10px;">
	             <div class="form-group" id="Locations_Mmodal_footer">  
         
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7268.870590188245!2d88.6191535!3d24.3661562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefcfa492f8a5%3A0x86161b622aa0e97a!2sMR+Student+Hostel!5e0!3m2!1sen!2sbd!4v1518203509775" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
		     </div>
		
        <div class="modal-footer">      
          <p><a href="#" data-dismiss="modal">Go back</a></p>          
        </div>
		
      </div>      
    </div>
  </div><!--End of Locations Map1  --> 
   <!--Ending for Locations Map -->
     
  
  
  

  
  
  
  
  
  
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