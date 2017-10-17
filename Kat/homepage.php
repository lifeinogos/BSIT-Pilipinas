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
							<li class="active"><a href="<?php echo base_url('Pilipinas/home/');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travelr1/');?>">Travel</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About</a></li>			
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


<div class="col-md-4">	 
        <div class="thumbnail">
			<a href = ""> <img src="<?php echo base_url('img/featured-1.jpg') ?>" alt="Featured" style=" width:100%; height: 100%; "> </a>
          <div class="caption">
            <h3 class="">Rizal Park - MANILA</h3> 
            <p> The capital of the Philippines- its heart and soul -- is Manila. It sets the rhythm of life in this archipelago and is a pulsating hub that blends the Oriental with the Occidental, the quaint with the modern, the mundane with the extraordinary. </p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-primary pull-right">Details</a>
            </div>
          </div>
        </div>
</div>

<div class="col-md-4">	
        <div class="thumbnail">
         <a href = ""> <img src="<?php echo base_url('img/featured-2.jpg') ?>" alt="Featured" style=" width:100%; height: 100%; "> </a>
          <div class="caption">
            <h3 class="">Boracay - AKLAN</h3> 
            <p>Boracay Island, with its sugary white sand beaches and azure blue water, is located on the northwestern tip of Panay, Western Visayas. The bset of the island is the 4 km. White Beach, touted as the "finest beach in the world". </p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-primary pull-right">Details</a>
            </div>
          </div>
        </div>
</div>

<div class="col-md-4">	
        <div class="thumbnail">
         <a href = ""> <img src="<?php echo base_url('img/featured-3.jpg') ?>" alt="Featured" style=" width:100%; height: 100%; "> </a>
          <div class="caption">
            <h3 class="">Magellan's Cross - CEBU  </h3> <br />
            <p>Magellan's Cross is a Christian cross planted by Portuguese and Spanish explorers as ordered by Ferdinand Magellan upon arriving in Cebu in the Philippines on (depending on source) 15 March 1521.</p>
            <div class="btn-toolbar text-center">
              <a href="#" role="button" class="btn btn-primary pull-right">Details</a>
            </div>
          </div>
        </div>
    </div>

	<!-- End of Featured Destinations -->
	
    <!-- Content -->
<div class="col-md-12">	
    <div class="container">
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
		<!--- <div class ="col-md-6">
		<a href = ""> <img src="<?php echo base_url('img/topbg.png') ?>" alt="" style="width:100%;"> </a>
		</div>
		<div class ="col-md-6">
		</div> -->
	</div>
	 <div class="row">
        <div class="col-sm-8">
         <!-- <h3 class="">About</h3> --> <br /> 
          <a href = ""> <img src="<?php echo base_url('img/main.jpg') ?>" alt="Featured" style=" width: 100%; height: 100%; " class="img-responsive"> </a>
          <br>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of.</p>
        </div> 
		
        <div class="col-sm-4">
          <h3 class="">News & Events</h3>
          <div class="event">
            <div class="text-right date">01/22/2017</div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industr y. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
            <div class="text-right">
              <a href="#">See more...</a>
            </div>
          </div>
          <div class="event">
            <div class="text-right date">01/22/2017</div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industr y. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <div class="text-right">
              <a href="#">See more...</a>
            </div>
          </div>
          <div class="event">
            <div class="text-right date">01/22/2017</div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industr y. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <div class="text-right">
              <a href="#">See more...</a>
            </div>
          </div>
		    <div class="event">
            <div class="text-right date">01/22/2017</div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industr y. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <div class="text-right">
              <a href="#">See more...</a>
            </div>
          </div>
        </div>
      </div>
	
	
	<!-- products -->
	<div class = "row" id = "topdesti" >
		<br />
		<br />
		<div class ="col-md-6">
		<a href = ""> <img src="<?php echo base_url('img/products.jpg') ?>" alt="" style="width:90%;"> </a>
		</div>
		<div class ="col-md-6">
		</div>
	</div>
	<div class = "row" id = "topdesti">
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
	
		<div class = "col-md-6">
			<h4> DISCOVER MORE </h4>
			<p style="padding-left: 10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
			Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>
			
		</div>
		<div class = "col-md-2">
			<h4> GET CONNECTED </h4>
			<a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" width = "15%" alt="Facebook"> Like us on Facebook </a>
			<a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" width = "18%" alt="Twitter"> Follow us on Twitter </a>
			
		</div>
		<div class = "col-md-2">
			<h4> CONTACT INFORMATION </h4>
			<img src = "<?php echo base_url('imgg/address.png') ?>" width = "15%" alt="Address"><h6>PILI-PINAS HATE CORNER MANILA, PHILIPPINES</h6>
			<img src = "<?php echo base_url('imgg/mobile.png') ?>" width = "15%" alt="Phone"><h6>(+63) 9152987364</h6>
			<img src = "<?php echo base_url('imgg/email.png') ?>" width = "15%" alt="Mail"><h6>pili_pinas@gmail.com</h6>
		
		</div>
		
		<div class = "col-md-2">
		</div>
		
	</div>

	

</div>