<!-- about -->
	  
		<!-- icon -->
		 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						 <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas"></a>
						</div>
				
			<!-- upper -->	
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; ?>">Explore</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li class="active" ><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
			    </ul> 
				

				<!-- search -->
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

<!-- main pic for about -->
	<div class = "row" style="margin-top: 20px;">
		  <div class="item"> <img src="<?php echo base_url('img/slider_3_travel.jpg') ?>" alt="" style="width:100%;">  </div>  
	</div>
	
	<!-- for info -->
	
	<div class ="row text-center" id ="abouttop">
		<div class = "col-md-6">
			<img src="<?php echo base_url('img/main.jpg') ?>" alt="" style="width:100%; padding-bottom:20px; padding-top: 20px;">
		</div>
	
		<div class = "col-md-6">
			<h1> ABOUT US </h1>
			<h3>PILIPINAS serves as an online tourist hub showcasing detailed information about the country’s heritage, culture, and natural landmarks.</h3>
									  
			<p>This website will also promote local businesses by advertising their products and services for free; like local-made souvenirs and local travel guides.
								
				Pili-Pinas is a website that aims to attract Locals and International Tourists who wish to travel around The Philippines.
				It also aims to advocate local businessmen in promoting Filipino-pride goods and services.</p>
		</div>
	</div>
	
	<!-- 2nd layer -->
	<div class = "row" id ="abouttop">
		<div class = "col-md-6">
			<img src="<?php echo base_url('img/featured_1.jpg') ?>" alt="" style="width:100%; padding-bottom:20px; padding-top: 20px; padding-left:5px;">
		</div>

		<div class = "col-md-6" style="padding-bottom:20px; padding-top: 20px;">
			<h2>PILI-PINAS</h2>
			provides the following features:
					<ul>
						<li>One-stop interactive detailed website for locating the country’s tourist destinations</li>
						<li>List and galleries of places categorized accordingly</li>
						<li>Suggestion based on filters chosen by the users</li>
						<li>Integrated local travel guide offers</li>
						<li>Voting for popularity and experience</li>
						<li>Reviews that will help in suggestion for future development</li>
						<li>Advertisements for local products</li>
					</ul>
		</div>
	</div>

	
	<div class = "row text-center" id ="embed">
	<br />
		<div class = "col-md-6">
			<!-- embed -->
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/ADNgEHFDYzo" frameborder="0" allowfullscreen style="padding-bottom:20px;"></iframe>
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
			<h6>DISCOVER MORE</h6>
			<div id="p">Pili-Pinas serves as an online tourist hub that showcase detailed information about the country’s heritage, 
			culture, and natural landmarks. It also provides advertising of local products, reviews and suggestions from users,
			as well as listed places to visit.</div>
			
		</div>
		
		<div class = "col-md-2">
			<h6>GET CONNECTED</h6>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" alt="Facebook">&nbsp;Like us on Facebook</a></div>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" alt="Twitter">&nbsp;Follow us on Twitter</a></div>
			
		</div>
		<div class = "col-md-2">
			<h6>CONTACT INFORMATION</h6>
			<div id="juan"><img src = "<?php echo base_url('img/locate.png') ?>" alt="Address" width = "12%" height="12%">Pili-Pinas <br />Ayala Boulevard, <br />Ermita Manila</div>
			<div id="juan"><img src = "<?php echo base_url('img/mobile.png') ?>" alt="Phone" width = "12%" height="12%">(+63) 9152987364</div>
			<div id="juan"><img src = "<?php echo base_url('img/mail.png') ?>" alt="Mail" width = "12%" height="12%">pili_pinas@gmail.com</div>
		
		</div>
		
		<div class = "col-md-2">
			<h6>QUICK LINKS</h6>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas');?>">Home</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/explore');?>">Explore</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/history');?>">History</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/about');?>">About</a></div>
		</div>
		
	</div>
	
	<div class="row text-center" id="ARR">
		<h6>All Rights Reserved 2017<h6>
	</div>
</div>