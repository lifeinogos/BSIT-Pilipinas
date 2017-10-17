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
							<li  class="active" ><a href="<?php echo base_url('Pilipinas/history/');?>">History
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About				
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
	  
	  <form action="luzondb.php" method="GET">
	  <div id="lu" style="display:none; position: absolute; top: 0; right: 0;  height: 100%;">
		<button type="submit"  name="search" value="rizal" style="width:10%; top: 40%; left: 14%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<img id="fade"  src="<?php echo  base_url('img/mark.png')?>" style="width: 120%;">
		</button> <!-- rizals-->
		<button type="submit" name="search" value="crisologo" style="width:10%; top: 17%; right: 1%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!-- Calle Crisologo//Ilocos Sur -->
		</button>
		<button type="submit" name="search" value="corregidor" style="width:10%; top: 40.9%; right: 10.1%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"><!-- Corregidor Island, Manila Bay, Cavite -->
		</button>
	  </form>
	  
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
		<button type="submit" name="search" value="fortsanpedro" style="width:10%; top: 47%; right: 12%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:150%;"> <!--  Fort San Pedro//Plaza Independencia, Cebu City -->
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
		<button type="submit" name="search" value="unknown" style="width:10%; top: 80%; right: 29%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">						
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:150%;">
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
	
		<div class = "col-md-6">
			<h4> DISCOVER MORE </h4>
			<p style="padding-left: 10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
			Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
			
		</div>
		<div class = "col-md-2">
			<h4> GET CONNECTED </h4>
			<a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" width = "15%" alt="Facebook"> Like us on Facebook </a>
			<a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" width = "18%" alt="Twitter"> Follow us on Twitter </a>
			
		</div>
		<div class = "col-md-2">
			<h4> CONTACT INFORMATION </h4>
			<img src = "<?php echo base_url('imgg/address.png') ?>" width = "15%" alt="Address"><h6>PILI-PINAS HATE CORNER MANILA, PHILIPPINES</h6>
			<img src = "<?php echo base_url('imgg/mobile.png') ?>" width = "15%" alt="Phone"><h6>(+63) 9152987364</h6>
			<img src = "<?php echo base_url('imgg/email.png') ?>" width = "15%" alt="Mail"><h6>pili_pinas@gmail.com</h6>
		
		</div>
		
		<div class = "col-md-2">
		</div>
		
	</div>

	

</div>