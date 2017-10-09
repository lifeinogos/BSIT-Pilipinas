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
							<li class="active" ><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History
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
	 
		  <div class="item">
			<img src="<?php echo base_url('img/slider_5.jpg') ?>" alt="" style="width:100%;">
		  </div>
		  
	</div>

	<!-- Content -->
<div class="row">
<br />
<div class="col-xs-6">
<br />
	<div class="row text-center" >
		<h1 style="color:#C92E2E;"> CHOOSE YOUR REGION HERE</h1> 
			<br />			
		<h3 style="color:#C92E2E;"> 
				How do I know where I’m going? 
			<br />
			<h4 style="color:#b9b5b5;"> 
				Well in order to find out where you are going, <br />the Philippine Islands have been divided into Philippine Regions. 
			<br />
				Basically all 7,100 islands are broken down into three (3) island goups: 
				<br />
				Luzon 		<br />
				Visayas 	<br />
				Mindanao 	<br />
				</h4>
		</h3>
	<br />
	<!-- button regions -->		

<div class="w3-center">
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(1)"> Region 1</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(2)"> Region 2</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(3)"> Region 3</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(4)"> CALABARZON</button>
	<br /><br />
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(5)">MIMAROPA</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(6)">Region 5</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(7)">CAR</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(8)">NCR</button>
	<br /><br />
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(9)">Region 6</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(10)">Region 7</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(11)">Region 8</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(12)">Region 9</button>
	<br /><br />
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(13)">Region 10</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(14)">Region 11</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(15)">Region 12</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(16)">Region 13</button>
	<button class="btn btn-danger demo" id="btr" onclick="currentDiv(17)">ARMM</button>
	
</div>	
	<br/><br />
		<!-- end button-->	
	
	
				<h4 style="color:#b9b5b5;"> 
			<br />
				Then each island group is divided into regions and <br /> there are more than seventeen (17) different Philippine regions. 
			<br />
				Luzon has eight (8) regions.	<br />
				Visayas has three (3) regions.	<br />
				Mindanao has six (6) regions.	<br />
				</h4>	 
				
				
				
	</div>
</div>	<!-- end of div col-md-6 -->

<div class="col-md-6">
<br />
<div class="row text-center" >		
		<div>
			<div id="phh" class="answer_list" >
					<h1 style="color:#C92E2E;">Philippines</h1>
					<h4 style="color:#b9b5b5;">Located in Southeast Asia, known as Pearl of the Orient Sea. Philippines has the world largerst diversity in Asia.</h4>
			</div>
			<div id="Luzonn"  style="display:none;" class="answer_list" >
					<h1 style="color:#C92E2E;">Luzon</h1>
					<h4 style="color:#b9b5b5;">Located in the upper part of hjag</h4>
			</div>
			<div id="Visayass"  style="display:none;" class="answer_list" >
					<h1 style="color:#C92E2E;">Visayas</h1>
					<h4 style="color:#b9b5b5;">Located in the middle part of hjag</h4>
			</div>
			<div id="Mindanaoo"  style="display:none;" class="answer_list" >
					<h1 style="color:#C92E2E;">Mindanao</h1>
					<h4 style="color:#b9b5b5;">Located in the lower part of hjag</h4>
			</div>
		</div>

	<div class="carousel-inner style="max-width:800px;">
			  <img class="mySlides"    src="<?php echo base_url('img/R1.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R2.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R3.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R4A.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R4B.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R5.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/CAR.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/NCR.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R6.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R7.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R8.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R9.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R10.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R11.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R12.png') ?>"    style="width:60%">
			  <img class="mySlides"    src="<?php echo base_url('img/R13.png') ?>"    style="width:60%">  
			  <img class="mySlides"    src="<?php echo base_url('img/ARMM.png') ?>"    style="width:60%">
			  
	</div>
</div>
</div> <!-- end of div col-md-6 img -->
		
</div> 	<!-- End of row-->

	<!-- Top Destinations  -->
	<div class = "row" id = "topdesti" >
		<br />
		<br />
		<div class ="col-md-6">
		<a href = ""> <!--<img src="<?php echo base_url('img/products.jpg') ?>" alt="" style="width:90%;"> </a> -->
		</div>
		<div class ="col-md-6">
		</div>
	</div>
	<div class = "row" id = "topdesti">
		<br />
		<div class = "col-md-4">
			<!--<a href = ""> <img src="<?php echo base_url('img/featured_desti.png') ?>" alt="" style=" width:90%; height: 80%; "> </a>-->
		</div>
	<div class="row text-center" >
		
		<div class = "col-md-4">
		<h1 style="color:#C92E2E; text-center;">  REGION 1 <br /> Ilocos Region</h1>
		
	</div>
		<!--	<a href = ""> <img src="<?php echo base_url('img/festibg.jpg') ?>" alt="" style=" width:90%; height: 80%; "> </a>-->
		</div>
		<div class = "col-md-4">
		<!--	<a href = ""> <img src="<?php echo base_url('img/products.jpg') ?>" alt="" style=" width:90%; height: 80%; "> </a>-->
		</div>
	</div> <!-- end of top desti -->
	
<!-- photo slider -->
<ul id="rig">
<h1 style="color:#FFFFFF;"> Top Destinations </h1>
	<div class="carousel-inner style="max-width:800px;">
					<li>
						<a class="rig-cell" href="#">
							<img class="mySlides" src="<?php echo base_url('img/d1.jpg') ?> " >
							<span class="rig-overlay"></span>
							<span class="rig-text">Paoay Church</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/d2.jpg') ?> " >
							<span class="rig-overlay"></span>
							<span class="rig-text">Bangi Windmills</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/d3.jpg') ?> " >
							<span class="rig-overlay"></span>
							<span class="rig-text">Kapurpurawan Rock Formation</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/d4.jpg') ?> " >
							<span class="rig-overlay"></span>
							<span class="rig-text">Calle Crisollogo</span>
						</a>
					</li>
	</div>
<h1 style="color:#FFFFFF;"> Activities </h1>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/a4.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Paoay Sand Dune</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/a3.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Suspendisse tellus</span>
						</a>
					</li>				
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/a2.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">pellentesque odio</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/a1.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Nam euismod</span>
						</a>
					</li>
<h1 style="color:#FFFFFF;"> Products </h1>	
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/f1.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Bagnet</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/f2.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Chichacorn</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/f3.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Empanada</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/f4.jpg') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Ilocos Basi</span>
						</a>
					</li>
				</ul>
	
<!-- end of slider -->	

	
	
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