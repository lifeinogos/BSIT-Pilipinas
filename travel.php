

<!-- Travel page -->
<style>
#rig {
    max-width:1200px;
    margin:0 auto; /*center aligned*/
    padding:0;
    font-size:0; /* Remember to change it back to normal font size if have captions */
    list-style:none;
    background-color:white;
}
#rig li {
    display: inline-block;
    *display:inline;/*for IE6 - IE7*/
    width:25%;
    vertical-align:middle;
    box-sizing:border-box;
    margin:0;
    padding:0;
}
        
/* The wrapper for each item */
.rig-cell {
    /*margin:12px;
    box-shadow:0 0 6px rgba(0,0,0,0.3);*/
    display:block;
    position: relative;
    overflow:hidden;
}
        
/* If have the image layer */
.rig-img {
    display:block;
    width: 100%;
    height: auto;
    border:none;
    transform:scale(1);
    transition:all 1s;
}

#rig li:hover .rig-img {
    transform:scale(1.05);
}
        
/* If have the overlay layer */
.rig-overlay {
    position: absolute;
    display:block;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    background: #3DC0F1 url(img/link.png) no-repeat center 20%;
    background-size:50px 50px;
    opacity:0;
    filter:alpha(opacity=0);/*For IE6 - IE8*/
    transition:all 0.6s;
}
#rig li:hover .rig-overlay {
    opacity:0.8;
}

/* If have captions */
.rig-text {
    display:block;
    padding:0 30px;
    box-sizing:border-box;
    position:absolute;
    left:0;
    width:100%;
    text-align:center;
    text-transform:capitalize;
    font-size:18px;
    font-weight:bold;
    font-family: 'Oswald', sans-serif;
    font-weight:normal!important;
    top:40%;
    color:white;
    opacity:0;
    filter:alpha(opacity=0);/*For older IE*/
    transform:translateY(-20px);
    transition:all .3s;
}
#rig li:hover .rig-text {
    transform:translateY(0px);
    opacity:0.9;
}

@media (max-width: 9000px) {
    #rig li {
        width:19%;
    }
}

@media (max-width: 700px) {
    #rig li {
        width:19%;
    }
}

@media (max-width: 550px) {
    #rig li {
        width:19%;
    }

</style>
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
			<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=0'; ?>"> <img src="<?php echo base_url('img/all.png') ?>" alt="" style=" width: 50px; height: 50px;" > </a>
		</div>
		
		
		
		
		<div  id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=1'; ?>"> <img src="<?php echo base_url('img/city.png') ?>" alt="" style=" width: 50px; height: 50px;"> </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=2'; ?>"> <img src="<?php echo base_url('img/beach.png') ?>" alt="" style=" width: 50px; height: 50px;"> </a>
		</div>
		<div id = "travel"  class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=3'; ?>"> <img src="<?php echo base_url('img/mountain.png') ?>" alt="" style=" width: 60px; height: 60px;"> </a>
		</div>
		<div id = "travel" class = "col-xs-2">
		<a href =" <?php echo base_url('Pilipinas/travel/'); echo '?category=4'; ?>"> <img src="<?php echo base_url('img/heritage.png') ?>" alt="" style=" width: 50px; height: 50px;" > </a>
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

