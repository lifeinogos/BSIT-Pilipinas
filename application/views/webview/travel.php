

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
							<li class="active" ><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0';?>">Explore</a></li>
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
	
	
	
	
	<div class = "row text-center" style = "">
		<div class = "col-md-1"></div>
		<div class = "col-md-10">
			<h1>Pick one to Discover </h1>
		</div>
		<div class = "col-md-1"></div>
	</div>
	
	<div  class = "row text-center" >
		<div class = "col-xs-1"></div>
		<div id = "travel" class = "col-sm-2 active" >
			<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=0'; ?>"> <img src="<?php echo base_url('img/all.jpg') ?>" alt="" > </a>
		</div>
		
		
		
		
		<div  id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=1'; ?>"> <img src="<?php echo base_url('img/ncr.jpg') ?>" alt="" > </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=2'; ?>"> <img src="<?php echo base_url('img/mimaropa.jpg') ?>" alt=""> </a>
		</div>
		<div id = "travel"  class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=3'; ?>"> <img src="<?php echo base_url('img/mountain.jpg') ?>" alt="" > </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=4'; ?>"> <img src="<?php echo base_url('img/heritage.jpg') ?>" alt="" > </a>
		</div>	
		<div class = "col-xs-1"></div>
    </div>
	
	
<div class = "row text-center" id = "travelcontent" >
			
			<h2> List of All <?php echo $label;?> Places</h2>
			<!--
			<div class="se-pre-con text-left"> <img src = "<?php echo base_url('img/preloader_10.gif') ;?> "> </div>
			-->
			<ul id="rig" style = "box-shadow: 4px 26px 21px -18px gray;" >
					<?php 
					foreach ($places as $n){
						echo '
						<li>
							<a class="rig-cell" href="'; echo base_url('Pilipinas/details'); echo '?place_id='.$n['place_id']; echo' ">
								<div class="thumbnail">
									<img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$n['image']);echo' ">
									<div class="caption post-content">
										<h3>'; echo $n['name']; echo '</h3>
									</div>
								</div>
								
								
								<span class="rig-overlay"></span>
								<span class="rig-text">'; echo $n['name']; echo ' </span>
							</a>
						</li>
						';
					}
					?>
					
					
				
				</ul>
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

