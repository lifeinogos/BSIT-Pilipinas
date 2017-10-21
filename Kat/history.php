<!-- History -->

	  
	 
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
							<li ><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0';?>">Explore</a></li>
							<li class="active" ><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
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
		  <div class="item"> <img src="<?php echo base_url('img/slider_3_travel.jpg') ?>" alt="" style="width:100%;">  </div>  
	</div>


<div class ="row">
	<br />
<div class = "col-md-6">
<br />
	<div class="row text-center" >
	<h1 style="color:#C92E2E;">CLICK AND LEARN!</h1>
	<h4 style="color:#b9b5b5;">The Philippines consists of 3 different islands (luzviminda): Luzon, Visayas and Mindanao. <br />Find out the Historical Landmarks located on each island.</h4>
	<br /><br />
	<input type="button" class="btn btn-danger" id="bt" value="Luzon" onclick="showLuz()" />
	<input type="button" class="btn btn-danger" id="bt" value="Visayas" onclick="showVi()" />
	<input type="button" class="btn btn-danger" id="bt" value="Mindanao" onclick="showMin()" />

	<br/>
		<br /><br />
		<div>
				<div id="phh" class="answer_list" >
						<h1 style="color:#C92E2E;">Philippines</h1>
						<h4 style="color:#b9b5b5;">Located in Southeast Asia, known as Pearl of the Orient Sea. Philippines has the world largerst diversity in Asia.</h4>
				</div>
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

		</div>
	
</div>

	<div class = "col-md-6">
	<div class="row text-center" >
	<div id="ph" class="answer_list" >
	<img id="fade" src="<?php echo  base_url('img/phhh.png') ?> " style="width:60%;">
	
	</div>
	
	<div id="Luzon"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="luz" id="fade">
		<img src="<?php echo  base_url('img/luzonh.png')?>" style="width:60%">
	  </div>
	  <div class="luz" id="fade">
		<img src="<?php echo  base_url('img/luzonhh.png')?>" style="width:60%">
	  </div>
	  <div id="l"  style="display:none;">
		<img id="fade" src="<?php echo  base_url('img/luzonhhh.png')?>" style="width:60%">
	  </div>
	  
	
		
	  <div id="lu" style="display:none; position: absolute; top: 0; right: 0;  height: 100%;">
		<a class="btn " data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;width:10%; top: 40%; left: 13%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;"><img id="fade"  src="<?php echo  base_url('img/mark.png')?>" style="width: 120%;"></a>
		<a class="btn" data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;width:10%; top: 74.5%; right: 14%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;"> <img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"></a>
		<a class="btn " data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;width:10%; top: 40.8%; right: 11.5%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;"><img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"></a>
		
		
	  
	  </div>
	  </div>
	  </div>

	
	<div id="Visayas"  style="display:none; position: relative;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="vis" id="fade">
		<img src= "<?php echo  base_url('img/visayash.png')?>" style="width:60%">
	  </div>
	  <div class="vis" id="fade">
		<img src="<?php echo  base_url('img/visayashh.png')?>" style="width:60%">
	  </div>
	  <div id="v" style="display:none; ">
		<img id="fade" src="<?php echo  base_url('img/visayashhh.png')?>" style="width:60%;">
	</div>
	
	<form action="luzondb.php" method="post">
	<div id="vi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<button type="submit" name="search" value="fortsanpedro" style="width:10%; top: 47%; left: 12%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Fort San Pedro//Plaza Independencia, Cebu City -->
		</button>
		<button type="submit" name="search" value="leytelanding" style="width:10%; top: 38%; left: 13%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  Leyte Landing Memorial National Park// PALO, LEYTE -->
		</button>
		<button type="submit" name="search" value="limasawa" style="width:10%; top: 50%; left: 5%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none; cursor: pointer;">				
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:120%;"> <!--  LIMASAWA (FIRST CATHOLIC MASS IN PH)// LIMASAWA, SOUTHERN LEYTE -->
		</button>
	</div>
	</form>
	</div>
	</div>
	
	<div id="Mindanao"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="min" id="fade">
		<img src="<?php echo  base_url('img/mindanaoh.png')?>" style="width:60%">
	  </div>
	  <div class="min" id="fade">
		<img src="<?php echo  base_url('img/mindanaohh.png')?>" style="width:60%">
	  </div>
	  <div id="m" style="display:none;">
		<img id="fade" src="<?php echo  base_url('img/mindanaohhh.png')?>" style="width:60%">
	  </div>
	  
	 <form action="luzondb.php" method="post">
	 <div id="mi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<button type="submit" name="search" value="unknown" style="width:10%; top: 80%; right: 29%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">						
			<img id="fade" src="<?php echo  base_url('img/mark.png')?>" style="width:150%;">
		</button>
	  </div>
	</form>
	</div>
	</div>
	
	</div>
	</div>
	<br />
	<br />
	<br />
</div> <!-- end ng content-->





	
	

	<div class = "row text-center" id ="embed">
	<br />
		<div class = "col-md-6">
			<!-- embed -->
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/ADNgEHFDYzo" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class = "col-md-6">
			<h1> Discover more with videos</h1>
			<h3> It's 7,107 times more fun in the Philippines. Watch the official Philippine Department of Tourism AVP  to find out why.</h3>
			<a href = "https://www.youtube.com/user/morefunph" > Tourism Philippines</a>
		</div>
	</div>
	
	
	
<!-- modal for comment -->
<div class="modal fade" id="reviewmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header text-center" style = "background-color: yellow; color: black;">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4>Share your experience!</h4>
					</div>
					
					
					<div class=" row modal-body text-center">
						<form action="<?php echo base_url ('Pilipinas/rating')?>" method="get">
							<div id="first" style="display:inline-block; width:8%;" >
								<div id="a" style="display:block; position: relative;">
									<button onclick ="one()" type="button"  style="  border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="isa" style="display:none; position: relative;">
									<div >
									<button onclick ="uno()" type="button"  style="  border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>
								</div>
							</div>
						
							<div id="second" style="display:inline-block; width:8%;" >
								<div id="b" style="display:block; position: relative;">
									<button onclick ="two()" type="button"  style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button>
								</div>
								<div id="dalawa" style="display:none; position: relative; ">
									<div >
									<button onclick ="dos()" type="button" style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%;">
									</button>
									</div>	
								</div>
							</div>

							<div id="third" style="display:inline-block; width:8%;" >	
								<div id="c" style="display:block; position: relative;">
									<button onclick ="three()" type="button" style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="tatlo" style="display:none; position: relative;">
									<div >
									<button onclick ="tres()" type="button"  style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>	
								</div>
							</div>
							
							<div id="fourth" style="display:inline-block; width:8%;" >
								<div id="d" style="display:block; position: relative;">
									<button onclick ="four()" type="button" style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="apat" style="display:none; position: relative;">
									<div >
									<button onclick ="quatro()" type="button"  style="  border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>	
								</div>
							</div>
						
							<div id="fifth" style="display:inline-block;  width:8%;" >
								<div id="e" style="display:block; position: relative;">
									<button onclick ="five()" type="button" style="  border: none; cursor:pointer;position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="lima" style="display:none; position: relative;">
									<div >
									<button onclick ="singko()" type="button"   style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>
								</div>
							</div>
						<!-- comment box -->
						</br>
						</br>
						</br>
							<input type = "text" name ="reviewname" value = "" placeholder = "Your name" />
							<input type = "text-" name ="reviewmismo" value = "" placeholder = "Your review" />
					</div>
					<div class="modal-footer text-center">
						<input id="f" name="rating" style="display: none;"></input>
						<button class = "btn btn-danger" type="submit" value="<?php echo $details_page[0]['place_id'];?>" name="place_id" id="finalrate"> RATE THIS! </button>
					</form>
					</div>
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