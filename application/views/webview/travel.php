

<!-- Travel page -->

	 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
							<img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Los Angeles">
						
						</div>
						
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li style = "border-radius: 0px 30px 0px 30px; background-color: gray;" ><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
			    </ul> 
						  
				 <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places" style ="color: black"/> 
									<input  style = "border-radius: 30px 0px 30px 0px; background-color: #fc9292;" type="submit" value=" Search " />
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background')">	
	<!-- main pic for travel -->
	<div class = "row" style = "margin-top: 20px;">
		  <div class="item"> <img src="<?php echo base_url('img/slider_5_travel.jpg') ?>" alt="" style="width:100%;">  </div>  
	</div>

	<!-- Content -->
	<div class = "row ">
		<div class="col-md-7 text-right">
			<h1 style="color:#C92E2E;"> &nbsp;CHOOSE YOUR REGION HERE</h1> 
		</div>
		<div class="col-md-5 text-center">
			<div id="phh" class="answer_list" >
						<h1 style="color:#C92E2E;">&nbsp; Philippines</h1>
						
			</div> 
		</div>
	</div> <!-- end ng dalawang h3 -->
	
	
	<div class = "row text-center" style = "margin-bottom: 100px;box-shadow: 3px 92px 77px -68px rgba(0,0,0,0.29);"> <!-- start ng dalawang header -->
		<div class ="col-md-1"> </div>
		<div class ="col-md-8 text-center"> <!--buttons ng region -->
		
			<h4 style="color:#b9b5b5;"> 
				<br />
				These island groups are divided into regions, consisting of seventeen (17) in total. 
				<br />
				Luzon consists of eight (8) regions.	<br />
				Visayas consists of three (3) regions.	<br />
				Mindanao consists of six (6) regions.	<br />
			</h4>	 
			
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(1)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 1</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(2)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 2</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(3)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 3</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(4)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">CALABARZON</button>
					
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(5)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">MIMAROPA</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(6)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 5</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(7)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 6</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(8)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 7</button>
					
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(9)"  style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 8</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(10)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 9</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(11)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 10</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(12)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 11</button>
				
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(13)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 12</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(14)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">Region 13</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(15)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">CAR</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(16)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">ARMM</button>
			<button class="btn btn-danger demo" id="btr" onclick="currentDiv(17)" style="margin-bottom: 15px; border-radius: 30px 30px 30px 30px;">NCR</button>
		<!--<div class="carousel-inner caption">
			<h3 class = "myslides_text"> Ilocos Region </h3>
			<h3 class = "myslides_text"> Cagayan Valley </h3>
			<h3 class = "myslides_text"> Central Luzon </h3>
			<h3 class = "myslides_text"> CALABARZON </h3>
			
			<h3 class = "myslides_text"> MIMAROPA </h3>
			<h3 class = "myslides_text"> Bicol Region </h3>
			<h3 class = "myslides_text"> Western Visayas Region </h3>
			<h3 class = "myslides_text"> Central Visayas Region </h3>
			
			<h3 class = "myslides_text"> Eastern Visayas Region </h3>
			<h3 class = "myslides_text"> Zamboanga Peninsula </h3>
			<h3 class = "myslides_text"> Northern Mindanao </h3>
			<h3 class = "myslides_text"> Davao Region </h3>
			
			<h3 class = "myslides_text"> Soccsksargen Region </h3>
			<h3 class = "myslides_text"> CARAGA Region </h3>
			<h3 class = "myslides_text"> CAR Region </h3>
			<h3 class = "myslides_text"> ARMM Region </h3>
			<h3 class = "myslides_text"> NCR Region </h3>
		</div> -->
			<div style ="border-radius: 0px 88px 0px 91px; background-color:#ede8e8; padding: 10px; margin-bottom: 5px;">
					<h3 class = "myslides_text"> CALABARZON </h3>
					<p> ahshasdbabsjbjasdnadnaksdasdajskldjasjfkjaskfjkas
					sadjasdjasdha
					asdaksdasdsalj</p>
			</div>
			
		
		</div>
		<div class ="col-md-2 " class="carousel-inner" > <!--pictures -->
			<img class="mySlides"    src="<?php echo base_url('img/regions/R1-Ph_fil_ilocos.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R2-Ph_fil_cagayan_valley.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
		    <img class="mySlides"    src="<?php echo base_url('img/regions/R3-Ph_fil_central_luzon.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
	        <img class="mySlides"    src="<?php echo base_url('img/regions/R4-Ph_fil_calabarzon.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
							  
			<img class="mySlides"    src="<?php echo base_url('img/regions/MIMAROPA-Ph_fil_mimaropa.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R5-Ph_fil_bicol.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R6-800px-Ph_fil_western_visayas.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R7-800px-Ph_fil_central_visayas.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
							  
			<img class="mySlides"    src="<?php echo base_url('img/regions/R8-Ph_fil_eastern_visayas.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R9-Ph_fil_zamboanga_peninsula.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R10-Ph_fil_northern_mindanao.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R11-Ph_fil_davao_region.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
							  
			<img class="mySlides"    src="<?php echo base_url('img/regions/R12-Ph_fil_soccsksargen.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/R13-Ph_fil_caraga.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
		    <img class="mySlides"    src="<?php echo base_url('img/regions/CAR-Ph_fil_car.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
			<img class="mySlides"    src="<?php echo base_url('img/regions/ARMM-LASTPh_fil_armm.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">  
		    <img class="mySlides"    src="<?php echo base_url('img/regions/NCR-Ph_fil_ncr.png') ?>"    style="width:100%; border-radius: 70px 0px 97px 10px;">
							  
		</div>
		<div class ="col-md-1"> </div>
	</div> <!-- end nung button saka map -->
	
	<div class = "row"> <!-- start ng top destination -->
		<div class ="col-xs-1"> </div>
		<div class ="col-xs-10 text-center" style = "box-shadow: 0px -71px 53px -84px rgba(0,0,0,0.75);"> 
			<h1  style="color:#C92E2E; "> Destinations on this Region </h1>
			<ul id="rig" style = " border-radius: 81px 0px 81px 0px; border: 5px solid  #e2e2e2;" >
						<li>
							<a class="rig-cell" href="#" style = "border-radius: 81px 0px 0px 0px;">
								<img class="rig-img" src="<?php echo base_url('img/desti1.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Lorem Ipsum Dolor</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti2.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Consectetur Adipiscing</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti3.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Vivamus ut Felis</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti4.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Curabitur tempus</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti5.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Sed et nunc luctus</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti6.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Suspendisse tellus</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img img-responsive" src="<?php echo base_url('img/desti1.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">pellentesque odio</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#" style = "border-radius: 0px 0px 81px 0px;">
								<img class="rig-img img-responsive" src="<?php echo base_url('img/desti2.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Nam euismod</span>
							</a>
						</li>
					
			</ul>
		</div>
		<div class ="col-xs-2"> </div>
	</div><!-- end ng top destination -->
	
	<div class = "row" style="margin-top: 25px;"> <!-- start ng festival -->
		<div class ="col-xs-1"> </div>
		<div class ="col-xs-10 text-center" style = "box-shadow: 0px -71px 53px -84px rgba(0,0,0,0.75);"> 
			<h1  style="color:#C92E2E; "> Festivals on this Region </h1>
			<ul id="rig" style = " border-radius: 81px 0px 81px 0px; border: 5px solid  #e2e2e2;" >
						<li>
							<a class="rig-cell" href="#" style = "border-radius: 81px 0px 0px 0px;">
								<img class="rig-img" src="<?php echo base_url('img/desti1.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Lorem Ipsum Dolor</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti2.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Consectetur Adipiscing</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti3.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Vivamus ut Felis</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti4.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Curabitur tempus</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti5.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Sed et nunc luctus</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img" src="<?php echo base_url('img/desti6.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Suspendisse tellus</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#">
								<img class="rig-img img-responsive" src="<?php echo base_url('img/desti1.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">pellentesque odio</span>
							</a>
						</li>
						<li>
							<a class="rig-cell" href="#" style = "border-radius: 0px 0px 81px 0px;">
								<img class="rig-img img-responsive" src="<?php echo base_url('img/desti2.png') ?> ">
								<span class="rig-overlay"></span>
								<span class="rig-text">Nam euismod</span>
							</a>
						</li>
					
			</ul>
		</div>
		<div class ="col-xs-2"> </div>
	</div><!-- end ng festivals -->
	
	<div class = "row" style = "margin-top: 30px;"> <!-- start ng product slider -->
		<div class = "col-md-2"></div>
		<div class = "col-md-8">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
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
		<div class = "col-md-2"></div>
	</div>
	
	
	
	
	<!-- End of content -->


	
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
	<!-- end of footer -->
	
	<div class = "row text-center" id ="ARR">
		<h3> All Rights Reserved 2017<h3>
	</div>


</div>