<?php

?>
<!DOCTYPE HTML>
<html>
<head>
<title>My Night Life | Create Artist Profile</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
    <style>
		* {
		  box-sizing: border-box;
		}

		body {
		  background-color: #f1f1f1;
		}

		#regForm {
		  background-color: #ffffff;
		  margin: 100px auto;
		  font-family: Raleway;
		  padding: 40px;
		  width: 70%;
		  min-width: 300px;
		}

		h1 {
		  text-align: center;  
		}

		input {
		  padding: 10px;
		  width: 100%;
		  font-size: 17px;
		  font-family: Raleway;
		  border: 1px solid #aaaaaa;
		}

		/* Mark input boxes that gets an error on validation: */
		input.invalid {
		  background-color: #ffdddd;
		}

		/* Hide all steps by default: */
		.tab {
		  display: none;
		}

		button {
		  background-color: #4CAF50;
		  color: #ffffff;
		  border: none;
		  padding: 10px 20px;
		  font-size: 17px;
		  font-family: Raleway;
		  cursor: pointer;
		}

		button:hover {
		  opacity: 0.8;
		}

		#prevBtn {
		  background-color: #bbbbbb;
		}

		/* Make circles that indicate the steps of the form: */
		.step {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbbbbb;
		  border: none;  
		  border-radius: 50%;
		  display: inline-block;
		  opacity: 0.5;
		}

		.step.active {
		  opacity: 1;
		}

		/* Mark the steps that are finished and valid: */
		.step.finish {
		  background-color: #4CAF50;
		}
</style>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My night life is an online paltform which helps inform people of recent events around you." />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<div class="header">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="index.php">Home</a></li>
						    	<li><a href="rooms.html">Rooms</a></li>
						    	<li><a href="news.html">News</a></li>
						    	<li><a href="gallery.html">Gallery</a></li>
						    	<li class="active"><a href="404.html">Blog</a></li>
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>	
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-4 header_right">
	    		      <div id="loginContainer"><a href="#" id="loginButton"><img src="images/login.png"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" method="post" action="login/login.php">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="username" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						                 <span><a href="forgot-password.php">Forgot your password?</a></span>
							      </form>
				              </div>
			             </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
   </div>
   
   
   <div class="page-not-found">
   
   
   
	 <div class="container">
			<!--<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Register Artist</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>-->
            
            
            <div class="row success">
                
                
                
                <?php if(isset($_GET['err'])){ ?>
					<div class="alert alert-danger text-center"><?php echo '<br>'.$_GET['err']; ?></div>
					<?php } ?>
					<?php if(isset($_GET['success'])){ ?>
					<div class="alert alert-success text-center"><?php echo '<br>'.$_GET['success']; ?></div>
					<?php } ?>
                
            
            
            </div>
            
            
			<div class="row">
				<!-- contact form -->
				
				<h2 class="text-center">Create Artist Profile</h2><hr>
				
				
                <form id="regForm" method="post" action="" enctype="multipart/form-data">
                  
                  <!-- One "tab" for each step in the form: -->
                  <div class="tab">
                      <h2 class="text-center">Artist</h2><br>

                      <div class="form-group">
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                             </div>
                        <p><input type="text" placeholder="Artist Name..." oninput="this.className = ''" name="fname" class="form-control" required></p>
                        </div>
                     </div>
                      
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                             </div>
                         <select name="gender" class="form-control">
                            <option value="">-- Select Gender -- </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select> 
                        </div>
                    </div>
                      
                      <div class="form-group">
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-pencil"></i>
                             </div>
                            <p><textarea type="text" placeholder="About me..." oninput="this.className = ''" name="about_me" class="form-control" required></textarea></p>
                        </div>
                     </div>
                      
                      <div class="form-group">
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-image"></i>
                             </div>
                        <input type="file" placeholder="Artist Picture..." oninput="this.className = ''" name="file" class="form-control" required>
                            
                        </div>
                          <span>Upload your Profile Picture here</span>
                     </div>
    
                  </div>
                  <div class="tab">
                      <h2 class="text-center">Contact Info</h2><br>
                      
                      <div class="form-group">
                        
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                             </div>
                        <p><input placeholder="E-mail..." type="email" oninput="this.className = ''" name="email" class="form-control"></p>
                        </div>
                     </div>
                      
                      <div class="form-group">
                        
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                             </div>
                        <p><input placeholder="Phone..." type="tel" maxlength="10" oninput="this.className = ''" name="phone" class="form-control"></p>
                        </div>
                     </div>
                      
                    </div>
                  <div class="tab">
                    <h2 class="text-center">Genre</h2><br>
                    
                    <div class="form-group">
                        <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-music"></i>
                             </div>
                        <p><input placeholder="Genre..." type="text" oninput="this.className = ''" name="genre" class="form-control"></p>
                        </div>
                     </div>  
                </div>
                    
                  <div class="tab">Login Info:
                    <p><input placeholder="Username..." oninput="this.className = ''" name="username" type="text"></p>
                    <p><input placeholder="Password..." oninput="this.className = ''" name="password" type="password"></p>
                    <p><input placeholder="Confirm Password..." oninput="this.className = ''" name="confirm" type="password"></p>  
                  </div>
                  <div style="overflow:auto;">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      <button type="button" id="nextBtn" name="artist_reg" onclick="nextPrev(1)">Next</button>
                    </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>
                </form>
                
                
			</div>	
            
            
            
		</div>
	 
	 
	 
   </div>
   
   
   
   
   <div class="footer">
   	<div class="container">
   	 <div class="footer_top">
   	   <h3>Subscribe to our newsletter</h3>
   	   <form>
		<span>
			<i><img src="images/mail.png" alt=""></i>
		    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
		    <div class="clearfix"> </div>
		</span>			 	    
	   </form>
	  </div>
	  <div class="footer_grids">
	     <div class="footer-grid">
			<h4>Ipsum Quis</h4>
			<ul class="list1">
				<li><a href="contact.html">Contact</a></li>
				<li><a href="#">Mirum est</a></li>
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
			</ul>
		  </div>
		  <div class="footer-grid">
			<h4>Quis Ipsum</h4>
			<ul class="list1">
				<li><a href="#">Placerat facer</a></li>
				<li><a href="#">Claritatem</a></li>
				<li><a href="#">Sollemnes </a></li>
				<li><a href="#">Claritas</a></li>
				<li><a href="#">Mirum est</a></li>
			</ul>
		  </div>
		  <div class="footer-grid last_grid">
			<h4>Follow Us</h4>
			<ul class="footer_social">
			  <li><a href=""> <i class="fb"> </i> </a></li>
			  <li><a href=""><i class="tw"> </i> </a></li>
			  <li><a href=""><i class="google"> </i> </a></li>
			  <li><a href=""><i class="u_tube"> </i> </a></li>
		 	</ul>
		 	<div class="copy" id="contact">
              <p> &copy; 2016 Hotel Deluxe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	        </div>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
      </div>
   </div>
   <script type="text/javascript" src="js/multi-step.js"></script>
   <script type="text/javascript">
    var success = "<?php echo @$_GET['success']; ?>";
        
        if(success != ''){
            $("#regForm").fadeOut(1000);
        }
    
    </script>
</body>
</html>		