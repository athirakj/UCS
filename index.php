<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" /><!-- gallery css file -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="w3layouts-banner">
<div class="container">
<nav class="navbar navbar-default">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a class="navbar-brand" href="#">EDUCATION</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#index.html" class="page-scroll">Home</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#services" class="page-scroll">Gallery</a></li>
		<li><a href="#contact" class="page-scroll">Contact</a></li>
		<form class="navbar-form navbar-left">
       <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_login">
  Login
</button> 
		
		 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Signup
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">     
          <div class="modal-body" align="center">
            <form action="#" method="post">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <input type="text" name="Name" placeholder="Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password"  name="password" placeholder="Password" required>
			   <input type="password"  name="password" placeholder="Confirm Password" required>
              <input type="submit" value="SignUp">
              </form>
          </div>          
        </div>      
    </div>
  </div>
  
  <!--login-->
  <div class="modal fade" id="myModal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">     
          <div class="modal-body" align="center">
            <form action="#" method="post">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password"  name="password" placeholder="Password" required>
              <input type="submit" value="Login">
              </form>
          </div>          
        </div>      
    </div>
  </div>
<!--end login-->
     </form>
     </ul>
     
        </div><!-- /.navbar-collapse -->
  
</nav>
		<div class="w3l_banner_info">
		
				<section class="slider">
					<div class="flexslider">
				
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Education Is Life</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Never Stop Learning</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Learning Never Ends</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
					
					
			</div>	
				
	</div>
</div>
<!-- //banner -->


<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/simpleLightbox.js"></script>
<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>


</body>
</html>