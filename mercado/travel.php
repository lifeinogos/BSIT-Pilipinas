

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
							<li class="active" ><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; echo '&viewtype=0';?>">Explore</a></li>
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
	
	
	
	
	<div class = "row text-left" style = "">
		<div class = "col-md-1"></div>
		<div class = "col-md-10">
			<h1>Categories</h1>
		</div>
		<div class = "col-md-1"></div>
	</div>
	
	<div  class = "row text-center" >
		<div class = "col-xs-1"></div>
		<div id = "travel" class = "col-sm-2 active" >
			<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=0'; echo '&viewtype=0';?>"> <img src="<?php echo base_url('img/all.jpg') ?>" alt="" > </a>
		</div>
		
		
		
		
		<div  id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=1'; echo '&viewtype=0';  ?>"> <img src="<?php echo base_url('img/ncr.jpg') ?>" alt="" > </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=2'; echo '&viewtype=0'; ?>"> <img src="<?php echo base_url('img/mimaropa.jpg') ?>" alt=""> </a>
		</div>
		<div id = "travel"  class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=3'; echo '&viewtype=0'; ?>"> <img src="<?php echo base_url('img/mountain.jpg') ?>" alt="" > </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=4'; echo '&viewtype=0'; ?>"> <img src="<?php echo base_url('img/heritage.jpg') ?>" alt="" > </a>
		</div>	
		<div class = "col-xs-1"></div>
    </div>
	
	
<div class = "row text-left" id = "travelcontent" >
			
			
			
			
			
			
			
			
			
			
			
			<!--
			<div class="se-pre-con text-left"> <img src = "<?php echo base_url('img/preloader_10.gif') ;?> "> </div>
			-->
				<?php 
				
				if(isset($_GET['category'])){
					$categ = $_GET['category'];
				}
				else{$categ = 0;};
				
					if($view == "grid"){	
						echo '
						<div class = "row" style ="padding-bottom: 20px;">
								<div class = "col-xs-2"></div>
								<div class = "col-md-4">
								<h2 > &nbsp; &nbsp; &nbsp;&nbsp; List of All ';echo $label; echo' Places</h2>
								</div>
								<div class = "col-md-4">
									
								</div>
								<div class = "col-xs-2">
									<h3>Grid View</h3>
									';
									if($_GET['category'] != 0){
										echo '
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=';echo $categ;echo'&viewtype=0'; echo'"> <span class = "glyphicon glyphicon-th" ></span></a>
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=';echo $categ;echo'&viewtype=1'; echo'"> <span class = "glyphicon glyphicon-th-list" ></span></a>
										';
									}
									else{
										echo '
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=' ;echo $categ;echo'&viewtype=0'; echo'"> <span class = "glyphicon glyphicon-th" ></span></a>
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=';echo $categ;echo'&viewtype=1'; echo'"> <span class = "glyphicon glyphicon-th-list" ></span></a>
										';
									}
									echo'
								</div>
							</div>
							
						<ul id="rig" style = "box-shadow: 4px 26px 21px -18px gray;" > ';
						foreach ($places as $n){
							echo '
							<li class = "text-left">
								<a class="rig-cell" href="'; echo base_url('Pilipinas/details'); echo '?place_id='.$n['place_id']; echo' ">
									<div class="thumbnail">
										<img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$n['image']);echo' ">
										<div class="caption post-content">
											<h5><b><img src="'; echo base_url('img/mark.png'); echo'" alt="location" style="width:30px;" "height:30px;">'; echo $n['name']; echo '</b></h5>
											
											';
											if(round($n['rating'])== 0){
												echo '   <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
											}
											if(round($n['rating'])== 1){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
											}
											if(round($n['rating'])== 2){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
											}
											if(round($n['rating'])== 3){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
											}
											if(round($n['rating'])== 4){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
											}
											if(round($n['rating'])== 5){
												echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
											}

											echo'
											<h5> '; echo $n['vote']; echo ' reviews </h5>
											<h6> Locality: '; echo $n['locality']; echo '</h6>
											<h6> Province: '; echo $n['province']; echo '</h6>
											<h6> Region: '; echo $n['region']; echo '</h6>
											
										</div>
									</div>
									
									
									<span class="rig-overlay"></span>
									<span class="rig-text">'; echo $n['name']; echo ' </span>
								</a>
							</li>
							';
						}
					}
					else {
						echo '
							
							<div class = "row" style ="padding-bottom: 20px;">
								<div class = "col-xs-2"></div>
								<div class = "col-md-4">
								<h2 > &nbsp; &nbsp; &nbsp;&nbsp; List of All '; echo $label; echo' Places</h2>
								</div>
								<div class = "col-md-4">
											
								</div>
								<div class = "col-xs-2">
									<h3>List View</h3>
									';
									if($_GET['category'] != 0){
										echo '
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=';echo $categ=$_GET['category'];echo'&viewtype=0'; echo'"> <span class = "glyphicon glyphicon-th" ></span></a>
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=';echo $categ=$_GET['category'];echo'&viewtype=1'; echo'"> <span class = "glyphicon glyphicon-th-list" ></span></a>
										';
									}
									else{
										echo '
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=' ;echo $categ=$_GET['category'];echo'&viewtype=0'; echo'"> <span class = "glyphicon glyphicon-th" ></span></a>
										<a class = "btn btn-default" href =" ';echo base_url('Pilipinas/travel/'); echo '?category=';echo $categ=$_GET['category'];echo'&viewtype=1'; echo'"> <span class = "glyphicon glyphicon-th-list" ></span></a>
										';
									}
									echo'
								</div>
							</div>
							
							<ul class = "list text-right" style = "padding: 10px; "> ';
							
								foreach ($places as $n){

										echo '
											<li style = "list-style: none;">
											<a href="'; echo base_url('Pilipinas/details'); echo '?place_id='.$n['place_id']; echo' ">
											<div class = "row" >
												<div class = "col-xs-2"> </div>
												<div class = "col-md-2"> 
									
													<img class="" style = " width: 80%;" src="'; echo base_url('img/1place/1200x800/'.$n['image']);echo' ">
					
												</div>
												<div class = "col-md-2" >
												<h5><b><img src="'; echo base_url('img/mark.png'); echo'" alt="location" style="width:30px;" "height:30px;">'; echo $n['name']; echo '</b></h5>
												</div>
												<div class = "col-md-2"> 
													<h6> Locality: '; echo $n['locality']; echo '</h6>
													<h6> Province: '; echo $n['province']; echo '</h6>
													<h6> Region: '; echo $n['region']; echo '</h6>
												</div>
												
												<div class = "col-md-2"> 
												
															';
													if(round($n['rating'])== 0){
														echo '   <img class="image-responsive"  src=" '; echo base_url("img/0star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 1){
														echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 2){
														echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 3){
														echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 4){
														echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 5){
														echo '  <img class="image-responsive" style = "width: 140px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
													}

													echo'
													<h5> '; echo $n['vote']; echo ' reviews </h5>
												</div>
												<div class = "col-xs-1"> </div>
											</div> 
											</a>
											</li>';
								}
								echo '	
								
							</ul>
						';
						
					}
			
					
					
				?>
					
					
				
				
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

