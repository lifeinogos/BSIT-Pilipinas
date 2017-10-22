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

					<div class="carousel-inner style="max-width:800px;>
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