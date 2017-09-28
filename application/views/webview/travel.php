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
							<li class="active"><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel
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


	
	
	
	<div class="item">
	</div>
	
		<div class = "container-fluid">
		<div class = "row text-center">
		<h1 style="color:#C92E2E;"> CHOOSE YOUR REGION HERE</h1>
		
		<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> REGIONS
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Region 1</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Region 2</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Region 3</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
		
		<h4 style="color:#b9b5b5;"> details here</h4>
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

