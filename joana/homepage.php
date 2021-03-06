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
							<li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; echo '&viewtype=0'; ?>">Explore</a></li>
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
				  <li data-target="#myCarousel" data-slide-to="2"></li> 
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				  <div class="item active">
					<img src="<?php echo base_url('img/slider_1_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" "height:auto;">
				  </div>

				  <div class="item">
					<img src="<?php echo base_url('img/slider_3_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" "height:auto;">
				  </div>
				
				  <div class="item">
					<img src="<?php echo base_url('img/slider_5_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" "height:auto;">
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
				<div class="row">
					<div class="col-md-6 hero">
							<img src="<?php echo base_url('img/h_travel.jpg') ?>" alt="Explore" style="width: 100%; height: auto;" >
							<div class="hero-text">
								<h1>EXPLORE</h1>
								<p>Explore Philippine's Paradise</p>
								<a class = "btn" style = "border: 1px solid;" href="<?php echo base_url('Pilipinas/travel/');?>">See More</a>
							</div>
					</div>
					
					<div class="col-md-6 hero">
							<img src="<?php echo base_url('img/h_histo.jpg') ?>" alt="Explore" style="width: 100%;  height: auto;">
							<div class="hero-text">
								<h1>HISTORY</h1>
								<p>Learn our Historical Heritage</p>
								<a class = "btn" style = "border: 1px solid;" href="<?php echo base_url('Pilipinas/history/');?>">See More</a>
							</div>
					</div>
				</div>		
		</div>
			<div class="col-md-1"></div>
	</div>
	
	
	<div class = "row"  >
		<div class="col-xs-1"></div>
		<div class="col-xs-10" id = "topdestiheader"style =" background-color: gray;  color: white;	">
			<a  href="<?php echo base_url('Pilipinas/travel/');?>">
			<div class="col-xs-10"> 
				<h2> Philippines Top Tourist Destinations !</h2>
				</div>
				<div class="col-xs-2" style = "margin-top: 20px;">
				
				</div>
			</a>
		</div>
		<div class="col-xs-1"></div>
	</div>

<div class="row">	
	<div class="col-md-1"></div>
		<div class = "col-md-10	">
			<ul id="rig">
				<div class="thumbnail">
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[2]['place_id'] ; ?>" >						
							<img class="rig-img" src="<?php echo base_url($topdesti[2]['thumbs'])?> " >
							<span class="rig-text"><?php echo $topdesti[2]['name'];?></span>
						<div class="caption">
							<h3 class=""> 25 Reviews <img src="<?php echo base_url('img/mark.png') ?>" alt="location" style="width:30px;" "height:30px;"></h3> 
							<img src="<?php echo base_url('img/5star.png') ?>" alt="Featured" style="width:100%;" "height:auto;">
					    </div>	 
						</a>
					</li>
					
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[9]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[9]['thumbs']) ?> ">
							<span class="rig-text"><?php echo $topdesti[9]['name'];?></span>
						<div class="caption">
							<h3 class=""> 20 Reviews <img src="<?php echo base_url('img/mark.png') ?>" alt="location" style="width:30px;" "height:30px;"> </h3> 
							<img src="<?php echo base_url('img/4star.png') ?>" alt="Featured" style="width:100%;" "height:auto;">
					    </div>	 
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[7]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[7]['thumbs']) ?> ">
							<span class="rig-text"><?php echo $topdesti[7]['name'];?></span>
						<div class="caption">
							<h3 class=""> 15 Reviews <img src="<?php echo base_url('img/mark.png') ?>" alt="location" style="width:30px;" "height:30px;"> </h3> 
							<img src="<?php echo base_url('img/3star.png') ?>" alt="Featured" style="width:100%;" "height:auto;">
						</div>	 
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[11]['place_id'] ;?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[11]['thumbs']) ?> ">
							<span class="rig-text"><?php echo $topdesti[11]['name'];?></span>
						<div class="caption">
							<h3 class=""> 10 Reviews <img src="<?php echo base_url('img/mark.png') ?>" alt="location" style="width:30px;" "height:30px;"> </h3> 
							<img src="<?php echo base_url('img/2star.png') ?>" alt="Featured" style="width:100%;" "height:auto;">
					    </div>	 
						</a>
					</li>
				</div>
			</ul>
				
		</div>
			<div class="col-md-1"></div>
</div>

	<div class = "row"  >
		<div class="col-xs-1"></div>
		<div class="col-xs-10" id = "topdestiheader"style = "background-color: gray; color: white;	">
			<a  href="<?php echo base_url('Pilipinas/travel/');?>">
			<div class="col-xs-10"> 
				<h2> Editor's Pick !</h2>
				</div>
				<div class="col-xs-2" style = "margin-top: 20px;"></div>
			</a>
		</div>
		<div class="col-xs-1"></div>
	</div>

		
		
		<div class="row">
			<div class="col-xs-1"></div>
				<div class = "col-md-10	">	
				
					<div class="row">
						
						<div class="slideshow-container">
							<div class="col-md-12">
								  <div class="mySlides active">
									<div class="numbertext">1 / 3</div>
									<img src="<?php  echo base_url('img/h_histo.jpg') ?> " style="width:100%; height: auto;">
									<div class="text">Caption Text</div>
								  </div>
			
								  <div class="mySlides">
									<div class="numbertext">2 / 3</div>
									<img src="<?php  echo base_url('img/h_travel.jpg') ?> " style="width:100%; height: auto;">
									<div class="text">Caption Two</div>
								  </div>
							
								  <div class="mySlides">
									<div class="numbertext">3 / 3</div>
									<img src="<?php  echo base_url('img/h_histo.jpg') ?> "style="width:100%; height: auto;">
									<div class="text">Caption Three</div>
								  </div>
							
								  
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a> 
							</div>
						</div>

						<div style="text-align:center">
							  <span class="dot" onclick="currentSlide(1)"></span> 
							  <span class="dot" onclick="currentSlide(2)"></span> 
							  <span class="dot" onclick="currentSlide(3)"></span> 
							</div> 
							
					</div>
				</div>
			<div class="col-xs-1"></div>
		
		</div>	
	
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="col-md-12">
				<div class="slideshow-container">
					<div class="photobanner">
						<img class="first" src="<?php echo base_url($topdesti[1]['thumbs'])?>" alt="" />
						<img src="<?php echo base_url($topdesti[1]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[2]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[3]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[4]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[5]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[6]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[7]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[8]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[9]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[10]['thumbs'])?> " >
						<img src="<?php echo base_url($topdesti[11]['thumbs'])?> " >
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
<style>
	* {margin: 0; padding: 0;}
 
body {
	<!-- src: http://subtlepatterns.com/?p=1045 -->
	background: url('dark_geometric.png');
}
 
#container {
	width: 1000px;
	overflow: hidden;
	margin: 50px auto;
	background: white;
}
 
/*keyframe animations*/
.first {
	-webkit-animation: bannermove 30s linear infinite;
	   -moz-animation: bannermove 30s linear infinite;
	    -ms-animation: bannermove 30s linear infinite;
	     -o-animation: bannermove 30s linear infinite;
	        animation: bannermove 30s linear infinite;
}
 
@keyframes "bannermove" {
 0% {
    margin-left: 0px;
 }
 100% {
    margin-left: -2125px;
 }
 
}
 
@-moz-keyframes bannermove {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -2125px;
 }
 
}
 
@-webkit-keyframes "bannermove" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -2125px;
 }
 
}
 
@-ms-keyframes "bannermove" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -2125px;
 }
 
}
 
@-o-keyframes "bannermove" {
 0% {
   margin-left: 0px;
 }
 100% {
   margin-left: -2125px;
 }
 
}

.photobanner {
	height: 233px;
	width: 3550px;
	margin-bottom: 80px;
}
 
.photobanner img {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
}
 
.photobanner img:hover {
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-o-transform: scale(1.1);
	-ms-transform: scale(1.1);
	transform: scale(1.1);
	cursor: pointer;
 
	-webkit-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
	box-shadow: 0px 3px 5px rgba(0,0,0,0.2);
}
	</style>
	
	
	
	
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
	<div class = "row text-center" id = "foooter" style="background-color:#bcbcbc; color: black;">
		<div class = "col-md-4" align="center">
			 <img src = "<?php echo base_url('img/logo.png') ?>" width = "60%" class="img-responsive" alt="Los Angeles" align="center">
		</div>
		<div class = "col-md-2">
		</div>

		<div class = "col-md-2 text-center">
			<h3> FOLLOW US ON</h3>
		<center> <img src = "<?php echo base_url('img/fbicon1.jpg') ?>" width = "20%" class="img-responsive" alt="Los Angeles"></center>
			
		</div>
		<div class = "col-md-2">
			<h3> CONTACT US </h3>
			<h4> 09152987364</h4>
			<h4> pili_pinas@gmail.com</h4>
			<h4> TUP Manila</h4>
		</div>
		<div class = "col-md-2">
			<h3> QUICK LINKS</h3>
			<h4> <a href=""> Travel</a><br /></h4>
			<h4><a href=""> History</a><br /><h4>
			<h4><a href=""> About</a><br /></h4>
		</div>
		</div>	
	
	<div class = "row text-center" class ="ARR" style="background-color:#000000;" >
		<h3> All Rights Reserved 2017<h3>
	</div>
	

</div>