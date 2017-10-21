<!-- Homepage -->
	  
	  <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas" /></a>
						</div>
				
				
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; ?>">Explore</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
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
	
<div class = "container-fluid" style = "background-image: url('img/background');">	

	<div class = "row">
		<div class = "col-md-1"> </div>
		<div class = "col-md-10">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			  
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
	
				
				  <li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				  <div class="item active">
					<img style = "height: auto;" src="<?php echo base_url('img/slider_5_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" />
				  </div>


				
				  <div class="item">
					<img style = "height: auto;" src="<?php echo base_url('img/slider_3_home.jpg') ?>" alt="" style="width:100%;" />
				  </div>
				  
				  <div class="item">
					<img style = "height: auto;" src="<?php echo base_url('img/slider_1_home.jpg') ?>" alt="" style="width:100%;" />
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
		<div class = "col-md-1"> </div>
	</div>
	
	
	
	<!-- top destination -->
	
	<div class = "row" >
		<div class="col-md-1"></div>
		<div class = "col-md-10	">
		<ul id="rig"  >
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[1]['place_id'] ; ?>" >						
							<img class="rig-img" src="<?php echo base_url('img/1place/1200x800/'.$topdesti[1]['image']);?> " >
							<span class="rig-overlay"><?php echo $topdesti[1]['name'];?></span>
							<span class="rig-text"><?php echo $topdesti[1]['name'];?></span>
							 
						</a>
					</li>
					
					
					
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[2]['place_id'] ; ?>">
							<img class="rig-img" src="<?php echo base_url('img/1place/1200x800/'.$topdesti[2]['image']);?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[2]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[3]['place_id'] ; ?>">
							<img class="rig-img" src="<?php echo base_url('img/1place/1200x800/'.$topdesti[3]['image']);?>">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[3]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[4]['place_id'] ;?>">
							<img class="rig-img" src="<?php echo base_url('img/1place/1200x800/'.$topdesti[4]['image']);?>">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[4]['name'];?></span>
							
						</a>
					</li>
					
				
				</ul>
				</div>
			<div class="col-md-1"></div>
	</div>
	
	<div class = "row"  >
		<div class="col-xs-1"></div>
		<div class="col-xs-10" id = "topdestiheader"style = "background-image: url('<?php echo base_url('img/destiheader.jpg') ?>'); color: white;	">
			<a  href="<?php echo base_url('Pilipinas/travel/');?>">
			<div class="col-xs-10"> 
				<h2> Philippines Top Tourist Destinations !</h2>
				</div>
				<div class="col-xs-2" style = "margin-top: 20px;">
					<a class = "btn" style = "border: 1px solid;" href="<?php echo base_url('Pilipinas/travel/');?>">Explore More</a>
				</div>
			</a>
		</div>
		<div class="col-xs-1"></div>
	</div>

	
	
	
	
	
	<div class = "row text-center" id ="embed" >
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