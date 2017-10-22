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
					<img src="<?php echo base_url('img/slider1_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" "height:auto;">
				  </div>

				  <div class="item">
					<img src="<?php echo base_url('img/slider3_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" "height:auto;">
				  </div>
				
				  <div class="item">
					<img src="<?php echo base_url('img/slider5_home.jpg') ?>" alt="welcome to philippines" style="width:100%;" "height:auto;">
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
								<a class = "btn" style = "border: 1px solid;"  href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; echo '&viewtype=0'; ?>">Explore</a>
							</div>
					</div>
					
					<div class="col-md-6 hero">
							<img src="<?php echo base_url('img/h_histo.jpg') ?>" alt="Explore" style="width: 100%;  height: auto;">
							<div class="hero-text">
								<h1>HISTORY</h1>
								<p>Learn our Historical Heritage</p>
								<a class = "btn" style = "border: 1px solid;" href="<?php echo base_url('Pilipinas/history/');?>">Explore More</a>
							</div>
					</div>
				</div>		
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

	<div class = "row"  >
		<div class="col-xs-1"></div>
		<div class="col-xs-10" id = "topdestiheader"style = "background-image: url('<?php echo base_url('img/destiheader.jpg') ?>'); color: white;	">
			<a  href="<?php echo base_url('Pilipinas/travel/');?>">
			<div class="col-xs-10"> 
				<h2> Editor's Pick !</h2>
				</div>
				<div class="col-xs-2" style = "margin-top: 20px;">
					
				</div>
			</a>
		</div>
		<div class="col-xs-1"></div>
	</div>

		
<style>		
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

</style>

<script>

function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
			
	<div class="col-md-1"></div>
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
	
		<div class = "col-md-5">
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
		<div class = "col-md-3 text-center">
			<h6>CONTACT INFORMATION</h6>
			<center><div id="juan"><img src = "<?php echo base_url('img/locate.png') ?>" alt="Address" width = "12%" height="12%"> &nbsp; Pili-Pinas <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ayala Boulevard, <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ermita Manila</div>
			<div id="juan"><img src = "<?php echo base_url('img/mobile.png') ?>" alt="Phone" width = "12%" height="12%">(+63) 9152987364</div>
			<div id="juan"><img src = "<?php echo base_url('img/mail.png') ?>" alt="Mail" width = "12%" height="12%">pili_pinas@gmail.com</div>
			</center>
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>QUICK LINKS</h6>
			<center><div id="qlinks"><a href= "<?php echo base_url('Pilipinas');?>"><h4>Home</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/explore');?>"><h4>Explore</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/history');?>"><h4>History</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/about');?>"><h4>About</h4></a></div>
			<center>
		</div>
		
	</div>	
	
	
	

</div>