<!-- Homepage -->
	  
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
							<li style = "border-radius: 0px 30px 0px 30px; background-color: gray;"><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel </a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History </a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About	</a></li>			
			    </ul> 		  
				 <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"style ="color: black"/> 
									<input  style = "border-radius: 30px 0px 30px 0px; background-color: #fc9292;" type="submit" value=" Search " />
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');">	

	<div class = "row">
	<br />
	<br />
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  
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
	
	
	 <!-- Featured Destinations -->
<div class = "row ">
	<br />
	<br />
		<div class ="col-md-6">
		<img src="<?php echo base_url('img/featured_desti.png') ?>" alt="Featured" style="width:100%;">
		</div>
</div>


<div class="col-md-6 " id ="sizing" >	 
        <div class="thumbnail"   style = "box-shadow: 4px 26px 21px -18px gray;">
			<a href = ""> <img src="<?php echo base_url($featured_1[0]['image']) ?>" alt="Featured" style=" width:100%; height: 100%; "> </a>
          <div class="caption">
            
			<h3><?php echo $featured_1[0]['name'];?> </h3> 
            <p> <?php echo $featured_1[0]['description'];?> </p>
            <div class="btn-toolbar text-center">
              <a href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$featured_1[0]['place_id'] ; ?>" role="button" class="btn btn-primary pull-right">Details</a>
            </div>
          </div>
        </div>
</div>

<div class="col-md-6" id ="sizing">	
        <div class="thumbnail"    style = "box-shadow: 4px 26px 21px -18px gray;">
         <a href = ""> <img src="<?php echo base_url($featured_2[0]['image']) ?>" alt="Featured" style=" width:100%; height: 100%; "> </a>
          <div class="caption">
            <h3 class=""><?php echo $featured_2[0]['name'];?></h3> 
            <p><?php echo $featured_2[0]['description'];?></p>
            <div class="btn-toolbar text-center">
              <a href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$featured_2[0]['place_id'] ;?>" role="button" class="btn btn-primary pull-right">Details</a>
            </div>
          </div>
        </div>
</div>


	<!-- End of Featured Destinations -->
	
    <!-- Content -->
<div class="col-md-12">	
    <div class="container" style = "box-shadow: 4px 26px 21px -18px gray; margin-bottom: 20px;">
      <div class="">
        <h3 class="">Welcome to PILIPINAS!</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
      </div>
	</div>
</div>






	
	<!-- top destination -->
	<div class = "row" id = "topdesti" >
		<br />
		<br />
		<div class ="col-xs-3">
		</div>
		<div class ="col-md-6">
		<a href = ""> <img src="<?php echo base_url('img/topbg.png') ?>" alt="" style="width:100%;"> </a>
		</div>
		<div class ="col-xs-3">
		</div>
	</div>
	<div class = "row" >
		<ul id="rig" style = "box-shadow: 4px 26px 21px -18px gray;border-radius: 40px 0px 35px 0px;" >
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[0]['place_id'] ; ?>" >
													
							<img class="rig-img" src="<?php echo base_url($topdesti[1]['thumbs'])?> " style = "border-radius: 40px 0px 0px 0px; ">
							
							<span class="rig-overlay"><?php echo $topdesti[1]['name'];?></span>
							<span class="rig-text"><?php echo $topdesti[1]['name'];?></span>
							 
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[2]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[2]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[2]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[3]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[3]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[3]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[4]['place_id'] ;?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[4]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[4]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[5]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[5]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[5]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[6]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[6]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[6]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[7]['place_id'] ; ?>">
							<img class="rig-img" src="<?php  echo base_url($topdesti[7]['thumbs']) ?> ">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[7]['name'];?></span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="<?php echo base_url('Pilipinas/details/'); echo '?place_id='.$topdesti[8]['place_id'] ; ?>"  >
							<img class="rig-img" src="<?php  echo base_url($topdesti[8]['thumbs']) ?> " style = "border-radius: 0px 0px 40px 0px;">
							<span class="rig-overlay"></span>
							<span class="rig-text"><?php echo $topdesti[8]['name'];?></span>
						</a>
					</li>
				
				</ul>
	</div>
	
	
	
	
	
	<!-- festivals -->
	<div class = "row" id = "topdesti" >
		<br />
		<br />
		<div class ="col-xs-3">
		</div>
		<div class ="col-md-6">
		<a href = ""> <img src="<?php echo base_url('img/festibg.jpg') ?>" alt="" style="width:100%;"> </a>
		</div>
		<div class ="col-xs-3">
		</div>
	</div>
	<div class = "row"  >
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

	
	
	
	<!-- products -->
	<div class = "row" id = "topdesti"  >
		<br />
		<br />
		<div class ="col-md-6">
		<a href = ""> <img src="<?php echo base_url('img/products.jpg') ?>" alt="" style="width:90%;"> </a>
		</div>
		<div class ="col-md-6">
		</div>
	</div>
	<div class = "row" id = "topdesti" style = "margin-bottom: 40px;">
		<br />
		<div class = "col-md-4">
			<a href = ""> <img src="<?php echo base_url('img/straw.png') ?>" alt="" style=" width:90%; height: 80%; "> </a>
		</div>
		<div class = "col-md-4">
			<a href = ""> <img src="<?php echo base_url('img/mangos.png') ?>" alt="" style=" width:90%; height: 80%; "> </a>
		</div>
		<div class = "col-md-4">
			<a href = ""> <img src="<?php echo base_url('img/bagnet.png') ?>" alt="" style=" width:90%; height: 80%; "> </a>
		</div>
	</div>
	
	
	
	
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
		<h3> All Rights Reserved 2017</h3>
	</div>

	

</div>