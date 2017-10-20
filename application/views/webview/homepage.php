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
								<a class = "btn" style = "border: 1px solid;" href="<?php echo base_url('Pilipinas/travel/');?>">Explore More</a>
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
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[2]['place_id'] ; ?>" >						
							<img class="rig-img" src="<?php echo base_url($topdesti[2]['thumbs'])?> " >
							<span class="rig-overlay"><?php echo $topdesti[2]['name'];?></span>
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
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[9]['name'];?></span>
						<div class="caption">
							<h3 class=""> 20 Reviews <img src="<?php echo base_url('img/mark.png') ?>" alt="location" style="width:30px;" "height:30px;"> </h3> 
							<img src="<?php echo base_url('img/4star.png') ?>" alt="Featured" style="width:100%;" "height:auto;">
					    </div>	 
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[6]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[6]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[6]['name'];?></span>
						<div class="caption">
							<h3 class=""> 15 Reviews <img src="<?php echo base_url('img/mark.png') ?>" alt="location" style="width:30px;" "height:30px;"> </h3> 
							<img src="<?php echo base_url('img/3star.png') ?>" alt="Featured" style="width:100%;" "height:auto;">
						</div>	 
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[11]['place_id'] ;?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[11]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
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
	
<div class="row">	
	<div class="col-md-1"></div>
		<div class = "col-md-10	">
			<div class="row">
			  <div class="column">
				<img src="img1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
			  </div>
			  <div class="column">
				<img src="img2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
			  </div>
			  <div class="column">
				<img src="img3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
			  </div>
			  <div class="column">
				<img src="img4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
			  </div>
			</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img/cebu.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img/cebu.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img/cebu.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img/cebu.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>


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
