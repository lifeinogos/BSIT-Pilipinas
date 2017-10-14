

<!-- Travel page -->

	 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						 <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas"></a>
						</div>
				
				
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li class="active" ><a href="<?php echo base_url('Pilipinas/travel/');?>">Explore</a></li>
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
	
<div class = "container-fluid" style = "background-image: url('img/background')">	
	<!-- main pic for travel -->
	<div class = "row" style = "margin-top: 20px;">
		  <div class="item"> <img src="<?php echo base_url('img/slider_5_travel.jpg') ?>" alt="" style="width:100%;">  </div>  
	</div>

	<!-- Content -->
	
	
	
	
	<div  id= "travel"class = "row text-center" style = "">
		<div class = "col-md-1"></div>
		<div class = "col-md-10">
			<h1> Choose to Discover </h1>
		</div>
		<div class = "col-md-1"></div>
	</div>
	
	<div id = "travel" class = "row text-center" >
		<div class = "col-xs-1"></div>
		<div id = "travel" class = "col-sm-2 active" >
			<a href =""  data-parent="#myGroup" data-toggle="collapse" > <img src="<?php echo base_url('img/all.jpg') ?>" alt="" > </a>
		</div>
		<div  id = "travel" class = "col-xs-2">
		<a href ="  data-parent="#myGroup"  data-toggle = "collapse"> <img src="<?php echo base_url('img/ncr.jpg') ?>" alt="" > </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =""  data-parent="#myGroup" data-toggle="collapse"> <img src="<?php echo base_url('img/mimaropa.jpg') ?>" alt=""> </a>
		</div>
		<div id = "travel"  class = "col-xs-2">
		<a href ="  data-parent="#myGroup" data-toggle="collapse"> <img src="<?php echo base_url('img/mountain.jpg') ?>" alt="" > </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href ="" data-parent="#myGroup" data-toggle="collapse"> <img src="<?php echo base_url('img/heritage.jpg') ?>" alt="" > </a>
		</div>	
		<div class = "col-xs-1"></div>
    </div>
	
	
<div class = "row text-center" id = "travelcontent" >
			
			<h2> Lift of All Places</h2>
			
			
			<ul id="rig" style = "box-shadow: 4px 26px 21px -18px gray;" >
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
							<img class="rig-img img-responsive" src="<?php echo base_url('img/desti1.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">pellentesque odio</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img img-responsive" src="<?php echo base_url('img/desti2.png') ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text">Nam euismod</span>
						</a>
					</li>
				
				</ul>
	</div>
	
 <div id="exampleAccordion" data-children=".item">
  <div class="item">
    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="true" aria-controls="exampleAccordion1">
      Toggle item
    </a>
    <div id="exampleAccordion1" class="collapse show" role="tabpanel">
      <p class="mb-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
      </p>
    </div>
  </div>
  <div class="item">
    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2">
      Toggle item 2
    </a>
    <div id="exampleAccordion2" class="collapse" role="tabpanel">
      <p class="mb-3">
        Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      </p>
    </div>
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
	<!-- end of footer -->
	
	<div class = "row text-center" id ="ARR">
		<h3> All Rights Reserved 2017<h3>
	</div>


</div>

