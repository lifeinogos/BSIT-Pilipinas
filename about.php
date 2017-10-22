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
							<li class="active" ><a href="<?php echo base_url('Pilipinas/about/');?>">About</a></li>	
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
	  </div>
		</div>
		<div class="row">
			
		
			<div class="pimg2">
			<div class="ptext">
				<span class="border">
						IMAGE TWO TEXT
					</span>
			</div>
			</div>	
			<section class="section section-dark">
			<h2> PILIPINAS!</h2>
			<h3>
				PILIPINAS serves as an online tourist hub showcasing detailed information about the country’s heritage, culture, and natural landmarks.</h3>
				</h3>
			</section>
		
			<div class="pimg3">
			<div class="ptext">
				<span class="border">
						IMAGE THREE TEXT
					</span>
			</div>
			</div>	
			<section class="section section-dark">
			<h2> TRAVEL</h2>
			<h3>
					Pilipinas  has the following features:
					<br />
					One-stop interactive detailed website for locating all Philippine’s tourist destinations</li>
					<br />List and galleries of places categorized accordingly
					<br />Suggestion based on filters chosen by the tourist
					<br />Integrated local travel guide offers
					
					
			</h3>
			</section>
			
			<div class="pimg4">
			<div class="ptext">
				<span class="border">
						IMAGE TWO TEXT
					</span>
			</div>
			</div>

			<section class="section section-dark">
			<h2> HISTORY</h2>
			<h3>
				Users can do the following in the website:
				<br />
				Voting for popularity and experience
				<br />Reviews that will help in suggestion for future development of that place</li>
				<br />Share their own experiences and destinations.
				<br />Give additional informations about the places 
				<br />Upload their own photos and additional destinations.
				
			</h3>
			</section>

			<div class="pimg2">
			<div class="ptext">
				<span class="border">
						IMAGE TWO TEXT
					</span>
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
			<h6>DISCOVER MORE</h6>
			<div id="p">Pili-Pinas serves as an online tourist hub that showcase detailed information about the country’s heritage, 
			culture, and natural landmarks. It also provides advertising of local products, reviews and suggestions from users,
			as well as listed places to visit.
			<br />
			</div>
			<h3>All Right Reserved 2017</h3>
			
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>GET CONNECTED</h6>
			<center><div id="juan"><a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" alt="Facebook">&nbsp;Like us on Facebook</a></div>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" alt="Twitter">&nbsp;Follow us on Twitter</a></div>
			</center>
		</div>
		<div class = "col-md-2 text-center">
			<h6>CONTACT INFORMATION</h6>
			<center><div id="juan"><img src = "<?php echo base_url('img/locate.png') ?>" alt="Address" width = "12%" height="12%"> &nbsp; Pili-Pinas <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ayala Boulevard, <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ermita Manila</div>
			<div id="juan"><img src = "<?php echo base_url('img/mobile.png') ?>" alt="Phone" width = "12%" height="12%">(+63) 9152987364</div>
			<div id="juan"><img src = "<?php echo base_url('img/mail.png') ?>" alt="Mail" width = "12%" height="12%">pili_pinas@gmail.com</div>
			</center>
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>QUICK LINKS</h6>
			<center><div id="qlinks"><a href= "<?php echo base_url('Pilipinas');?>">Home</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/explore');?>">Explore</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/history');?>">History</a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/about');?>">About</a></div>
			<center>
		</div>
		
	</div>
	
	

	</div>