<!-- Homepage -->
	  
	 
	 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
							<img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Los Angeles">
						
						</div>
						
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Pilipinas/home/');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History
							<li  class="active" ><a href="<?php echo base_url('Pilipinas/about/');?>">About				
			    </ul>   
				 <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"/> 
									<input type="submit" value="Search" />
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	<div class = "container-fluid" style = "background-image: url('img/background')">	

	<div class = "row">
	<br />
	<br />
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li> 
		  <li data-target="#myCarousel" data-slide-to="3"></li>
		  <li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style = "box-shadow: 0px 2px 35px black;">
		  <div class="item active">
			<img src="<?php echo base_url('img/slider_1.jpg') ?>" alt="welcome to philippines" style="width:100%;">
		  </div>

		  <div class="item">
			<img src="<?php echo base_url('img/slider_2.jpg') ?>" alt="" style="width:100%;">
		  </div>
		
		  <div class="item">
			<img src="<?php echo base_url('img/slider_3.jpg') ?>" alt="" style="width:100%;">
		  </div>
		  
		  <div class="item">
			<img src="<?php echo base_url('img/slider_4.jpg') ?>" alt="" style="width:100%;">
		  </div>
		  
		  <div class="item">
			<img src="<?php echo base_url('img/slider_5.jpg') ?>" alt="" style="width:100%;">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	<div class = "row text-center" id ="embed">
	
		<div class = "col-md-6">
			<br />
			<img src="<?php echo base_url('img/main.jpg') ?>" alt="" style="width:100%;">
		</div>
	
		<div class = "col-md-6">
			<h1> ABOUT US </h1>
			<h3>PILIPINAS serves as an online tourist hub showcasing detailed information about the country’s heritage, culture, and natural landmarks.</h3>
									  
			<p>This website will also promote local businesses by advertising their products and services for free; like local-made souvenirs and local travel guides.
								
				Pili-Pinas is a website that aims to attract Locals and International Tourists who wish to travel around The Philippines.
				It also aims to advocate local businessmen in promoting Filipino-pride goods and services.</p>
				<br />
				<br />
		</div>
	</div>
	<div class = "row">
		<div class = "col-md-6">
		<br />
			<img src="<?php echo base_url('img/featured_1.jpg') ?>" alt="" style="width:60%;">
			<img src="<?php echo base_url('img/featured_3.jpg') ?>" alt="" style="width:60%;">
		</div>

		<div class = "col-md-6">
			<h1>PILIPINAS</h1>
			<p>has the following features:
					<ul>
						<li>One-stop interactive detailed website for locating all Philippine’s tourist destinations</li>
						<li>List and galleries of places categorized accordingly</li>
						<li>Suggestion based on filters chosen by the tourist</li>
						<li>Integrated local travel guide offers</li>
						<li>Voting for popularity and experience</li>
						<li>Reviews that will help in suggestion for future development of that place</li>
						<li>Advertisement for local products on it’s respective places</li>
						<li>Estimated minimum budget needed for visiting the spot</li>
					</ul>
			
			</p>
		</div>
	</div>


	
 <!-- end ng content-->
	
	<div class = "row text-center" id ="embed">
	<br />
		<div class = "col-md-6">
			<!-- embed -->
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/ADNgEHFDYzo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class = "col-md-6">
			<h1> Discover more with videos</h1>
			<h3> It's 7,107 times more fun in the Philippines. Watch the official Philippine Department of Tourism AVP  to find out why.</h3>
			<a href = "https://www.youtube.com/user/morefunph" > Tourism Philippines</a>
		</div>
	</div>
	
	
	
	
	
	<!-- footer -->
	<div class = "row text-center" id = "footer">
		<div class = "col-md-4">
			 <img src = "<?php echo base_url('img/logo.png') ?>" width = "100%" class="img-responsive" alt="Los Angeles">
		</div>
		<div class = "col-md-2 text-center">
			<h3> FOLLOW US ON</h3>
			<a href = ""> Twitter</a>
			<a href = ""> Facebook  </a>
			
		</div>
		<div class = "col-md-2">
			<h3> CONTACT US </h3>
			<h4> 09152987364</h4>
			<h4> pili_pinas@gmail.com</h4>
			<h4> TUP Manila</h4>
		</div>
		<div class = "col-md-2">
			<h3> ABOUT US</h3>
			<h4> Sitemap</h4>
			<h4> Privacy Policy</h4>
			<h4> Terms and Conditions</h4>
		</div>
		<div class = "col-md-2">
		</div>
	</div>
	
	<div class = "row text-center" id ="ARR">
		<h3> All Rights Reserved 2017<h3>
	</div>

	

</div>