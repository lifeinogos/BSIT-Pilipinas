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
<div class="col-md-6">
<br />
	<div class="row text-center" >
		<h1 style="color:#C92E2E;"> CHOOSE YOUR REGION HERE</h1>
		<h4 style="color:#b9b5b5;"> 
				How do I know where I’m going? 
			<br />
				Then each island group is divided into regions and <br /> there are more than seventeen (17) different Philippine regions. 
			<br />
				Luzon has eight (8) regions.	<br />
				Visayas has three (3) regions.	<br />
				Mindanao has six (6) regions.	<br />
				</h4>
				
			<form action="" method="get" id="search">	
				<input type="text" name="search" class="search" value = "Enter Region...."/> 
				<input type="submit" value="Search" />
			</form> 
				<br />
		<select class="selectpicker" multiple title="Region...">
			  <option>Region 1</option>
			  <option>Region 2</option>
			  <option>Region 3</option>
			  <option>Region 4</option>
			  <option>Region 5</option>
			  <option>Region 6</option>
			  <option>Region 7</option>
			  <option>Region 8</option>
			  <option>Region 9</option>
			  <option>Region 10</option>
			  <option>Region 11</option>
			  <option>Region 12</option>
			  <option>Region 13</option>
			  <option>Region 14</option>
			  <option>Region 15</option>
			  <option>Region 16</option>
			  <option>Region 17</option>	  
		</select>
		
	<!--		<input type="button" class="btn btn-danger" id="bt" value="Regions" onclick="showMin()" />
		
							<li class="dropdown">
									
									<ul class="dropdown-menu">
									  <li><a href="<?php echo base_url('Pilipinas/travel/');?>"> Breathtaking Tourist Spots </a></li>
									  <li class="divider"></li>
									  <li><a href="<?php echo base_url('Pilipinas/travel2/');?>">Must Try Outdoor Activities</a></li>
									  <li class="divider"></li>
									  <li><a href="<?php echo base_url('Pilipinas/travel3/');?>">Calendar of Festivals</a></li> 
									</ul>
								  </li>
			
			
			<div style="color:red" class="dropdown">
				<button style="color: #ffffff;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">REGIONS
			   <span style="color: #ffffff;" class="caret"></span></button>
				   <ul class="dropdown-menu">
					<li style="color:mediumblue;"> <a href="#"> Region 1 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 2 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 3 </a></li>	
					<li style="color:mediumblue;"> <a href="#"> Region 4 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 5 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 6 </a></li>	
					<li style="color:mediumblue;"> <a href="#"> Region 7 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 8 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 9 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 10 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 11 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 12 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 13 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 14 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 15 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 16 </a></li>
					<li style="color:mediumblue;"> <a href="#"> Region 17 </a></li>
				   </ul>
			</div> 
						
			-->
			
	</div>	
	 
</div>
 
	
        <div class="col-md-6">	
				<ul id="rig">
					<li>
						<a class="rig-cell" href="#">
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
							<img class="rig-img" src="<?php echo base_url('img/desti1.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">pellentesque odio</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/desti2.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Nam euismod</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/desti3.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Vestibulum ultricies</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/desti4.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">quis interdum sapien</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/desti5.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Maecenas vitae</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/desti6.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Proin Scelerisque</span>
						</a>
					</li>
				</ul>
			</div>
		
		
		
		
</div> 	<!-- End of Content-->

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
		<div class = "col-md-4">
		<h1 style="color:#C92E2E;"> REGION 1</h1>
		<!--	<a href = ""> <img src="<?php echo base_url('img/festibg.jpg') ?>" alt="" style=" width:90%; height: 80%; "> </a>-->
		</div>
		<div class = "col-md-4">
		<!--	<a href = ""> <img src="<?php echo base_url('img/products.jpg') ?>" alt="" style=" width:90%; height: 80%; "> </a>-->
		</div>
	</div> <!-- end of top desti -->
	
	
<ul id="rig">
<h1 style="color:#FFFFFF;"> Top Destinations </h1>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="<?php echo base_url('img/d1.jpg') ?> " >
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