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
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search" target = "_blank">	
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
					<div class="hero-image">
					  <div class="hero-text">
						<h1>I am John Doe</h1>
						<p>And I'm a Photographer</p>
						<button>Hire me</button>
					  </div>
					</div>
					
					<div class="hero-image">
					  <div class="hero-text">
						<h1>I am John Doe</h1>
						<p>And I'm a Photographer</p>
						<button>Hire me</button>
					  </div>
					</div>
				</div>		
		</div>
			<div class="col-md-1"></div>
	</div>
	
	
	<div class = "row"  >
		<div id = "topdestiheader"style =" background-color: gray;  color: white; margin-left: 9.5%; width: 81%; height: 30%;">
			<a  href="<?php echo base_url('Pilipinas/travel/');?>">
				<h2> Philippines Top Tourist Destinations !</h2>
			</a>
		</div>
	</div>

<div class="row" >	
	<div class="col-md-1"></div>
		<div class = "col-md-10	" style =" background-color: gray;">
			<ul id="rig">
				<div class="thumbnail">
					<li class = "text-left">
								<a class="rig-cell" href="<?php echo base_url('Pilipinas/details'); echo '?place_id='.$topdesti[1]['place_id']; ?>">
									<div class="thumbnail">
									<?php echo '<img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$topdesti[1]['image']);echo' "> '; ?>
										<div class="caption post-content">
											
											<?php
											
											echo '<h5><b><img src="'; echo base_url('img/mark.png'); echo'" alt="location" style="width:30px;" "height:30px;">'; echo $topdesti[1]['name']; echo '</b></h5> ';
										
											if(round($topdesti[1]["rating"])== 0){
												echo '   <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
											}
											if(round($topdesti[1]['rating'])== 1){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
											}
											if(round($topdesti[1]['rating'])== 2){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
											}
											if(round($topdesti[1]['rating'])== 3){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
											}
											if(round($topdesti[1]['rating'])== 4){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
											}
											if(round($topdesti[1]['rating'])== 5){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
											}

											echo'
											<h5> '; echo $topdesti[1]['vote']; echo ' reviews </h5>
											<h6> Locality: '; echo $topdesti[1]['locality']; echo '</h6>
											<h6> Province: '; echo $topdesti[1]['province']; echo '</h6>
											<h6> Region: '; echo $topdesti[1]['region']; echo '</h6>
											
											
										</div>
									</div>
									
									
									<span class="rig-overlay"></span>
									<span class="rig-text">'; echo $topdesti[1]['name']; echo ' </span>
									';
											?>
								</a>
					</li>
					
					<li class = "text-left">
								<a class="rig-cell" href="<?php echo base_url('Pilipinas/details'); echo '?place_id='.$topdesti[2]['place_id']; ?>">
									<div class="thumbnail">
									<?php echo '<img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$topdesti[2]['image']);echo' "> '; ?>
										<div class="caption post-content">
											
											<?php
											
											echo '<h5><b><img src="'; echo base_url('img/mark.png'); echo'" alt="location" style="width:30px;" "height:30px;">'; echo $topdesti[2]['name']; echo '</b></h5> ';
										
											if(round($topdesti[2]["rating"])== 0){
												echo '   <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
											}
											if(round($topdesti[2]['rating'])== 1){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
											}
											if(round($topdesti[2]['rating'])== 2){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
											}
											if(round($topdesti[2]['rating'])== 3){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
											}
											if(round($topdesti[2]['rating'])== 4){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
											}
											if(round($topdesti[2]['rating'])== 5){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
											}

											echo'
											<h5> '; echo $topdesti[2]['vote']; echo ' reviews </h5>
											<h6> Locality: '; echo $topdesti[2]['locality']; echo '</h6>
											<h6> Province: '; echo $topdesti[2]['province']; echo '</h6>
											<h6> Region: '; echo $topdesti[2]['region']; echo '</h6>
											
											
										</div>
									</div>
									
									
									<span class="rig-overlay"></span>
									<span class="rig-text">'; echo $topdesti[1]['name']; echo ' </span>
									';
											?>
								</a>
					</li>
					<li class = "text-left">
								<a class="rig-cell" href="<?php echo base_url('Pilipinas/details'); echo '?place_id='.$topdesti[3]['place_id']; ?>">
									<div class="thumbnail">
									<?php echo '<img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$topdesti[3]['image']);echo' "> '; ?>
										<div class="caption post-content">
											
											<?php
											
											echo '<h5><b><img src="'; echo base_url('img/mark.png'); echo'" alt="location" style="width:30px;" "height:30px;">'; echo $topdesti[3]['name']; echo '</b></h5> ';
										
											if(round($topdesti[3]["rating"])== 0){
												echo '   <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
											}
											if(round($topdesti[3]['rating'])== 1){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
											}
											if(round($topdesti[3]['rating'])== 2){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
											}
											if(round($topdesti[3]['rating'])== 3){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
											}
											if(round($topdesti[3]['rating'])== 4){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
											}
											if(round($topdesti[3]['rating'])== 5){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
											}

											echo'
											<h5> '; echo $topdesti[3]['vote']; echo ' reviews </h5>
											<h6> Locality: '; echo $topdesti[3]['locality']; echo '</h6>
											<h6> Province: '; echo $topdesti[3]['province']; echo '</h6>
											<h6> Region: '; echo $topdesti[3]['region']; echo '</h6>
											
											
										</div>
									</div>
									
									
									<span class="rig-overlay"></span>
									<span class="rig-text">'; echo $topdesti[1]['name']; echo ' </span>
									';
											?>
								</a>
					</li>
					<li class = "text-left">
								<a class="rig-cell" href="<?php echo base_url('Pilipinas/details'); echo '?place_id='.$topdesti[4]['place_id']; ?>">
									<div class="thumbnail">
									<?php echo '<img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$topdesti[4]['image']);echo' "> '; ?>
										<div class="caption post-content">
											
											<?php
											
											echo '<h5><b><img src="'; echo base_url('img/mark.png'); echo'" alt="location" style="width:30px;" "height:30px;">'; echo $topdesti[4]['name']; echo '</b></h5> ';
										
											if(round($topdesti[4]["rating"])== 0){
												echo '   <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
											}
											if(round($topdesti[4]['rating'])== 1){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
											}
											if(round($topdesti[4]['rating'])== 2){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
											}
											if(round($topdesti[4]['rating'])== 3){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
											}
											if(round($topdesti[4]['rating'])== 4){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
											}
											if(round($topdesti[4]['rating'])== 5){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
											}

											echo'
											<h5> '; echo $topdesti[4]['vote']; echo ' reviews </h5>
											<h6> Locality: '; echo $topdesti[4]['locality']; echo '</h6>
											<h6> Province: '; echo $topdesti[4]['province']; echo '</h6>
											<h6> Region: '; echo $topdesti[4]['region']; echo '</h6>
											
											
										</div>
									</div>
									
									
									<span class="rig-overlay"></span>
									<span class="rig-text">'; echo $topdesti[1]['name']; echo ' </span>
									';
											?>
								</a>
					</li>
				</div>
			</ul>
				
		</div>
			<div class="col-md-1"></div>
</div>
</br>
</br>
	<div class = "row"  >
		<div id = "topdestiheader" style = " margin-left: 9.5%; background-color: #bcbcbc; color: white; width: 81%; height: 30%;">
			<a  href="<?php echo base_url('Pilipinas/travel/');?>">
				<h2> &nbsp;&nbsp;&nbsp;Editor's Pick !</h2>
				</a>
		</div>
		
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
			<div id="inside">
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
#inside {
	width: 100%;
	overflow: hidden;

}
 
/*keyframe animations*/
.first {
	-webkit-animation: bannermove 50s linear infinite;
	   -moz-animation: bannermove 50s linear infinite;
	    -ms-animation: bannermove 50s linear infinite;
	     -o-animation: bannermove 50s linear infinite;
	        animation: bannermove 50s linear infinite;
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



/* The hero image */
.hero-image {
    /* The image used */
    background-image: url("photographer.jpg");

    /* Set a specific height */
    height: 50%;

    /* Position and center the image to scale nicely on all screens */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Place text in the middle of the image */
.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
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