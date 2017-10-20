<!-- Homepage -->
	  
	 
		 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						 <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas"></a>
						</div>
				
				
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; ?>">Explore</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li class="active" ><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
			    </ul> 
						  
				 <ul class = "nav navbar-nav pull-right " style = "margin-top: -10px;">
						  <li  id="search-bar"> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "" placeholder = "Search places" style ="color: black"/> 
									<button type="submit" class="search" ><span class="glyphicon glyphicon-search"></span></button>
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
	<div class = "row text-center" id = "about2">
	
		<div class = "col-md-6">
			<br />
			<img src="<?php echo base_url('img/main.jpg') ?>" alt="" style="width:100%; padding-bottom:20px;">
		</div>
	
		<div class = "col-md-6">
			<h1> ABOUT US </h1>
			<h3>PILIPINAS serves as an online tourist hub showcasing detailed information about the country’s heritage, culture, and natural landmarks.</h3>
									  
			<p>This website will also promote local businesses by advertising their products and services for free; like local-made souvenirs and local travel guides.
								
				Pili-Pinas is a website that aims to attract Locals and International Tourists who wish to travel around The Philippines.
				It also aims to advocate local businessmen in promoting Filipino-pride goods and services.</p>
		</div>
	</div>
	<div class = "row">
		<div class = "col-md-6">
		<br />
			<img src="<?php echo base_url('img/featured_1.jpg') ?>" alt="" style="width:60%; padding-bottom:20px; padding-left:5px; ">
		</div>

		<div class = "col-md-6">
			<h1>PILIPINAS</h1>
			<p>has the following features:
					<ul>
						<li>One-stop interactive detailed website for locating the country’s tourist destinations</li>
						<li>List and galleries of places categorized accordingly</li>
						<li>Suggestion based on filters chosen by the users</li>
						<li>Integrated local travel guide offers</li>
						<li>Voting for popularity and experience</li>
						<li>Reviews that will help in suggestion for future development</li>
						<li>Advertisements for local products</li>
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
	<div class = "row" id = "footer">
	
		<div class = "col-md-6">
			<h4> DISCOVER MORE </h4>
			<p style="padding-left: 10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
			Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
			
		</div>
		<div class = "col-md-2">
			<h4> GET CONNECTED </h4>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" width = "15%" class="img-responsive" alt="Facebook"><p>&nbsp;Like us on Facebook</p></a></div>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" width = "15%" class="img-responsive" alt="Twitter"><p>&nbsp;Follow us on Twitter</p></a></div>
			
		</div>
		<div class = "col-md-2">
			<h4> CONTACT INFORMATION </h4>
			<div id="juan"><img src = "<?php echo base_url('img/locate.png') ?>" width = "13%" class="img-responsive" alt="Address">Pili-Pinas</div>
			<div id="juan">Ayala Boulevard, <br />Ermita Manila</div>
			<div id="juan"><img src = "<?php echo base_url('img/mobile.png') ?>" width = "13%" class="img-responsive" alt="Phone">(+63) 9152987364</div>
			<div id="juan"><img src = "<?php echo base_url('img/mail.png') ?>" width = "13%" class="img-responsive" alt="Mail">pili_pinas@gmail.com</div>
		
		</div>
		
		<div class = "col-md-2">
			<h4> QUICK LINKS </h4>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas');?>">Home</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/explore');?>">Explore</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/history');?>">History</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/about');?>">About</a></div>
		</div>
		
	</div>
	
	<div class="">
	</div>