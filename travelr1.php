<!-- Travel page -->

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
							<li class="active" ><a href="<?php echo base_url('Pilipinas/travelr1/');?>">Travel</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About</a></li>			
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

		<!-- main pic for travel -->
			<div class = "row">
			<br />
			<br />
			 
				  <div class="item">
					<img src="<?php echo base_url('img/slider_5.jpg') ?>" alt="" style="width:100%;">
				  </div>
				  
			</div>

	<!-- Content -->

<br />
	<div class="col-xs-6">
	<br />
		<div class="row text-center" >
			<h1 style="color:#C92E2E;"> CHOOSE YOUR REGION HERE</h1> 
				<br />			
			<h3 style="color:#C92E2E;"> 
					How do you know where you're going? 
				<br />
				<h4 style="color:#b9b5b5;"> 
					It's easier since the Philippine Islands are divided into Regions. 
				<br />
					The 7,641 islands are broken down into three (3) major island groups: 
					<br />
					Luzon 		<br />
					Visayas 	<br />
					Mindanao 	<br />
					</h4>
			</h3>
			<br />
				<!-- button regions -->		
			
				<div class="w3-center">
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(1)">Region 1</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(2)">Region 2</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(3)">Region 3</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(4)">CALABARZON</button>
					
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(5)">MIMAROPA</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(6)">Region 5</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(7)">Region 6</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(8)">Region 7</button>
					
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(9)">Region 8</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(10)">Region 9</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(11)">Region 10</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(12)">Region 11</button>
				
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(13)">Region 12</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(14)">Region 13</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(15)">CAR</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(16)">ARMM</button>
					<button class="btn btn-danger demo" id="btr" onclick="currentDiv(17)">NCR</button>
					
				</div>	
				<br/><br />
					<!-- end button-->
					
				<!-- experiment for buttons like from history.php -->
				<!--
					<div class="w3-center">
					<input type="button" class="btn btn-danger" id="bt" value="Region 1" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 2" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 3" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="CALABARZON" onclick="showLuz()" />
					
					<input type="button" class="btn btn-danger" id="bt" value="MIMAROPA" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 5" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 6" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 7" onclick="showLuz()" />
					
					<input type="button" class="btn btn-danger" id="bt" value="Region 8" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 9" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 10" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 11" onclick="showLuz()" />
					
					<input type="button" class="btn btn-danger" id="bt" value="Region 12" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="Region 13" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="CAR" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="ARMM" onclick="showLuz()" />
					<input type="button" class="btn btn-danger" id="bt" value="NCR" onclick="showLuz()" />
					
				-->
				<h4 style="color:#b9b5b5;"> 
				<br />
				These island groups are divided into regions, consisting of seventeen (17) in total. 
				<br />
				Luzon consists of eight (8) regions.	<br />
				Visayas consists of three (3) regions.	<br />
				Mindanao consists of six (6) regions.	<br />
				</h4>	 
				
				
				<!-- </div>  end of div class w3 -->
				<!-- BLESS ME LORD OF PROGRAMMING -->			
					 
								
		</div> <!-- end of row text center -->
	</div>	<!-- end of div col-md-6 -->

	<div class="col-xs-6">
	<br />
		<div class="row text-center" >		
			<div>
				<div id="phh" class="answer_list" >
						<h1 style="color:#C92E2E;">Philippines</h1>
						<h4 style="color:#b9b5b5;">Located in Southeast Asia, known as Pearl of the Orient Sea. Philippines has the world largerst diversity in Asia.</h4>
				</div>
				<!-- why u put dis if it ain't displayed?? NOTE: replaced stuff sa history.php (the descriptions) -->
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
			
					<div class="carousel-inner" style="max-width:800px;">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R1-Ph_fil_ilocos.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R2-Ph_fil_cagayan_valley.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R3-Ph_fil_central_luzon.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R4-Ph_fil_calabarzon.png') ?>"    style="width:80%">
							  
							  <img class="mySlides"    src="<?php echo base_url('img/regions/MIMAROPA-Ph_fil_mimaropa.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R5-Ph_fil_bicol.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R6-800px-Ph_fil_western_visayas.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R7-800px-Ph_fil_central_visayas.png') ?>"    style="width:80%">
							  
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R8-Ph_fil_eastern_visayas.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R9-Ph_fil_zamboanga_peninsula.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R10-Ph_fil_northern_mindanao.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R11-Ph_fil_davao_region.png') ?>"    style="width:80%">
							  
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R12-Ph_fil_soccsksargen.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/R13-Ph_fil_caraga.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/CAR-Ph_fil_car.png') ?>"    style="width:80%">
							  <img class="mySlides"    src="<?php echo base_url('img/regions/ARMM-LASTPh_fil_armm.png') ?>"    style="width:80%">  
							  <img class="mySlides"    src="<?php echo base_url('img/regions/NCR-Ph_fil_ncr.png') ?>"    style="width:80%">
							  
					</div>
		</div> <!-- end of row-text center -->
	</div> <!-- end of div col-md-6 img -->
		
</div> 	<!-- End of row-->
				<div class="row"> 
					<br /> 
						<div class="container">
							<div class="col-xs-6">
								<!-- MANUAL SLIDER BOIII -->
								  <div class="w3-content w3-display-container">
								  <img class="mySlides" src="<?php echo base_url('img/R1-Baluarte.jpg') ?>" style="width:100%">
								  <img class="mySlides" src="<?php echo base_url('img/R1-Bangui_Windmills.jpg') ?>" style="width:100%">
								  <img class="mySlides" src="<?php echo base_url('img/R1-calle-crisologo-vigan.jpg') ?>" style="width:100%">
								  <img class="mySlides" src="<?php echo base_url('img/R1-Cape_Bojeador_Lighthouse.jpg') ?>" style="width:100%">
								  <img class="mySlides" src="<?php echo base_url('img/R1-Pagudpud_Beaches.jpg') ?>" style="width:100%">
								  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
								  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
								  </div>

								<br />
							</div>
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