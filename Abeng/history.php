<!-- Homepage -->

<style>	  
.modal::before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: -2500%;
}

.target {
  display: block;
  left: 0;
  position: fixed;
  top: 0;
  width: 0;
  height: 0;
  visibility: hidden;
  pointer-events: none;
 }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 100;
  text-align: center;
  display: none;
  /* Fallback for legacy browsers */
  background-color: rgba(0,0,0,0.6);
}

.content {
   text-align: left;
   display: inline-block;
   background-color: #b13e12;
   box-sizing: border-box;
   color: white;
   position: relative;
   width: 85%;
   height: 80%;
   padding: 20px;
 }

 .modal > .content .close-btn {
    position: absolute;
    top: 18px;
    right: 18px;
    width: 15px;
    height: 15px;
    color: white;
    font-size: 18px;
    text-decoration: none;
 }

 /* Behaviour on legacy browsers */
.target:target + .modal {
    display: block;
}

/* Fallback for IE8 */
.modal.is-expanded {
   display: block;
}
.modal.is-expanded > .content {
  top: 50%;
  margin-top: -45px;
}


/* Behavior on modern browsers */
:root .modal {
  display: block;
  background-color: transparent;
  transition: transform 0.3s cubic-bezier(0.5, -0.5, 0.5, 1.5);
  transform-origin: center center;
  transform: scale(0, 0);
}
:root .modal > .content {
  box-shadow: 0 5px 20px rgba(0,0,0,0.5);
}
:root .target:target + .modal {
  transform: scale(1, 1);
}
</style>	  
	 
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
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel </a></li>
							<li  style = "border-radius: 0px 30px 0px 30px; background-color: gray;"><a href="<?php echo base_url('Pilipinas/history/');?>">History </a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About	</a></li>			
			    </ul> 
						  
				 <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"style ="color: black"/> 
									<input  style = "border-radius: 30px 0px 30px 0px; background-color: #fc9292;" type="submit" value=" Search " />
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

<div class ="row">
	<br />
<div class = "col-md-6">
<br />
	<div class="row text-center" >
	<h1 style="color:#C92E2E;">CHOOSE YOUR ISLAND</h1>
	<h4 style="color:#b9b5b5;">The Philippines consists of 3 different islands (luzviminda): Luzon, Visayas and Mindanao. <br />Find out the Historical Landmarks located on each island.</h4>
	<br /><br />
	<input type="button" class="btn btn-danger" id="bt" value="Luzon" onclick="showLuz()" />
	<input type="button" class="btn btn-danger" id="bt" value="Visayas" onclick="showVi()" />
	<input type="button" class="btn btn-danger" id="bt" value="Mindanao" onclick="showMin()" />

	<br/>
		<br /><br />
		<div>
				<div id="phh" class="answer_list" >
						<h1 style="color:#C92E2E;">Philippines</h1>
						<h4 style="color:#b9b5b5;">Located in Southeast Asia, known as Pearl of the Orient Sea. Philippines has the world largerst diversity in Asia.</h4>
				</div>
				<div id="Luzonn"  style="display:none;" class="answer_list" >
						<h1 style="color:#C92E2E;">Luzon</h1>
						<h4 style="color:#b9b5b5;">Located in the northern region of the archipelago, it is the economic and political center of the nation, being home to the country's capital city, Manila. </h4>
				</div>
				<div id="Visayass"  style="display:none;" class="answer_list" >
						<h1 style="color:#C92E2E;">Visayas</h1>
						<h4 style="color:#b9b5b5;">Located in the middle part of the country. It consists of several islands, primarily surrounding the Visayan Sea.</h4>
				</div>
				<div id="Mindanaoo"  style="display:none;" class="answer_list" >
						<h1 style="color:#C92E2E;">Mindanao</h1>
						<h4 style="color:#b9b5b5;">Located in the lower part of the country. It is the second largest island in the Philippines. </h4>
				</div>
		</div>

		</div>
	
</div>

	<div class = "col-md-6">
	<div class="row text-center" >
	<div id="ph" class="answer_list" >
	<img id="fade" src="<?php echo  base_url('img/phhh.png') ?> " style="width:60%;">
	
	</div>
	
	<div id="Luzon"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="luz" id="fade">
		<img src="<?php echo  base_url('img/luzonh.png')?>" style="width:60%">
	  </div>
	  <div class="luz" id="fade">
		<img src="<?php echo  base_url('img/luzonhh.png')?>" style="width:60%">
	  </div>
	  <div id="l"  style="display:none;">
		<img id="fade" src="<?php echo  base_url('img/luzonhhh.png')?>" style="width:60%">
	  </div>
	  
	
		
	  <div id="lu" style="display:none; position: absolute; top: 0; right: 0;  height: 100%;">
		<button name="search" value="rizal" style="width:10%; top: 40%; left: 13%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<a href="#about"><img id="fade"  src="<?php echo  base_url('img/mark.png')?>" style="width: 120%;"></a>
		</button> <!-- rizals-->
		<button name="search" value="crisologo" style="width:10%; top: 74.5%; right: 14%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<a href="#about"><img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"></a> <!-- PLAZA CUARTEL // PALAWAn -->
		</button>
		<button name="search" value="corregidor" style="width:10%; top: 40.8%; right: 11.5%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
				<a href="#about"><img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"></a><!-- Corregidor Island, -->
		</button>
	  
	  </div>
	  </div>
	  </div>

	
	<div id="Visayas"  style="display:none; position: relative;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="vis" id="fade">
		<img src= "<?php echo  base_url('img/visayash.png')?>" style="width:60%">
	  </div>
	  <div class="vis" id="fade">
		<img src="<?php echo  base_url('img/visayashh.png')?>" style="width:60%">
	  </div>
	  <div id="v" style="display:none; ">
		<img id="fade" src="<?php echo  base_url('img/visayashhh.png')?>" style="width:60%;">
	</div>
	
	<form action="luzondb.php" method="post">
	<div id="vi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<button type="submit" name="search" value="fortsanpedro" style="width:10%; top: 47%; left: 11.8%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Fort San Pedro//Plaza Independencia, Cebu City -->
		</button>
		<button type="submit" name="search" value="leytelanding" style="width:10%; top: 38%; left: 13%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Leyte Landing Memorial National Park// PALO, LEYTE -->
		</button>
		<button type="submit" name="search" value="limasawa" style="width:10%; top: 50%; left: 5%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  LIMASAWA (FIRST CATHOLIC MASS IN PH)// LIMASAWA, SOUTHERN LEYTE -->
		</button>
	</div>
	</form>
	</div>
	</div>
	
	<div id="Mindanao"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="min" id="fade">
		<img src="<?php echo  base_url('img/mindanaoh.png')?>" style="width:60%">
	  </div>
	  <div class="min" id="fade">
		<img src="<?php echo  base_url('img/mindanaohh.png')?>" style="width:60%">
	  </div>
	  <div id="m" style="display:none;">
		<img id="fade" src="<?php echo  base_url('img/mindanaohhh.png')?>" style="width:60%">
	  </div>
	  
	 <form action="luzondb.php" method="post">
	 <div id="mi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<button type="submit" name="search" value="capesanagustin" style="width:10%; top: 49.9%; left: 36.8%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Cape San Agustin//Mati, Davao Oriental -->
		</button>
		<button type="submit" name="search" value="rizalshrine" style="width:10%; top: 37%; right: -5%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Rizal Shrine// Dapitan -->
		</button>
		<button type="submit" name="search" value="fortpikit" style="width:10%; top: 48%; left: 2%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Fort Pikit// Dapitan -->
		</button>
	  </div>
	</form>
	</div>
	</div>
	
	</div>
	</div>
	<br />
	<br />
	<br />
</div> <!-- end ng content-->


		<span id="start" class="target"><!-- Hidden anchor to close all modals --></span>
		<span id="about" class="target"><!-- Hidden anchor to open adjesting modal container--></span>
		<div class="modal">
		  <div class="content vertical-align-middle">
			<h2>About</h2>
			<article>Lorem ipsum</article>
			<a class="close-btn" href="#start">X</a>
		  </div>
		</div>




	
	

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
