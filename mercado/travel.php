

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
			
			
			
			
			
			
			
			
			
			
			
			
			<div class="se-pre-con text-left"> <img src = "<?php echo base_url('img/preloader_10.gif') ;?> "> </div>
		
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
						echo '</ul>';
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

