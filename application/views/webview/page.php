<!-- Homepage 
	 <script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://localhost/pilipinas_v2/pilipinas/details");
    }
	</script>	-->
<script>
function one() {
document.getElementById('isa').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById("f").value = "1";
}
function two() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById("f").value = "2";
}
function three() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById("f").value = "3";
}
function four() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('apat').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById("f").value = "4";
}
function five() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('apat').style.display = "block";
document.getElementById('lima').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('e').style.display = "none";
document.getElementById("f").value = "5";
}
function uno() {
document.getElementById('a').style.display = "none";
document.getElementById('dalawa').style.display = "none";
document.getElementById('b').style.display = "block";
document.getElementById('tatlo').style.display = "none";
document.getElementById('c').style.display = "block";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "1";
}
function dos() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('tatlo').style.display = "none";
document.getElementById('c').style.display = "block";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "2";
}
function tres() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "3";
}
function quatro() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "4";
}
function lima() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('e').style.display = "none";
document.getElementById("f").value = "5";
}
</script>
<style>
.revsug{
	background-color: white;
	cursor: pointer;
	border: none;
}
.revsug:hover {
	background-color:  #e7e7e7;
}

select{
font-size: 20px;
width: 40%;
padding: 16px 20px;
background-color: #C92E2E;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
}
#bt { 
font-size: 15px;
width: 20%;
padding: 16px 20px;
background-color: #C92E2E;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
}
h1, h4 {
	font-family: abeatbykai;
}
}
.content {
padding: 16px 20px;
background-color: RED;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
 opacity: 1; 
 width: 50%;
 border: 1px solid black;
 position: relative;
}
.slideshow-container {
  position: relative;
  margin: auto;
}
#fade{
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1 s;
  animation-name: fade;
  animation-duration: 1s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
</style>
	<style>
.mySlides2 {display:none}
.demo2 {cursor:pointer}
</style>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv2(n) {
  showDivs2(slideIndex = n);
}

function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}

function r() {
document.getElementById('reviewww').style.display = "block";
document.getElementById('suggesteddd').style.display = "none";}

function s() {
document.getElementById('reviewww').style.display = "none";
document.getElementById('suggesteddd').style.display = "block";}
</script>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
.star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
  width: 250px;
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
::after,
::before {
  height: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-align: center;
  vertical-align: middle;
}
</style>


	  <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas" /></a>
						</div>
				
				
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li ><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0';  echo '&viewtype=0';?>">Explore</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
							<li class="active"><a href="<?php echo base_url('Pilipinas/about/');?>">Details			</a></li>	
			    </ul> 
						  
				 <ul class = "nav navbar-nav pull-right " style = "margin-top: -10px;">
						  <li  id="search-bar"> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search" target = "_blank">	
									<input type="text" name="search" class="search" value = "" placeholder = "Search places" style ="color: black"/> 
									<button  class = "btn btn-default"type="submit" class="search" ><span class="glyphicon glyphicon-search"></span></button>
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	
	<div class = "container-fluid" style = "background-image: url('img/background'); background-color: null;">	

		<div class = "row text-center" id = "details">
			<div class = "col-sm-5" style = "padding-left: 50px;padding-right: 50px;">		
				<div class="w3-content" style="max-width:1200px">
				  <img style="border-radius: 10px; " class="mySlides2" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image']); ?> " style="width:100%">
				  <img style="border-radius: 10px; object-fit: cover;"class="mySlides2" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image2']); ?> " style="width:100%">
				  <img style="border-radius: 10px; "class="mySlides2" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image3']); ?> " style="width:100%">

				  <div class="w3-row-padding w3-section">
					<div class="w3-col s4">
					  <img class=" demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image']); ?> " style="width:100%" onload ="currentDiv2(1)"onclick="currentDiv2(1)">
					</div>
					<div class="w3-col s4">
					  <img class="demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image2']);?> " style="width:100%" onclick="currentDiv2(2)">
					</div>
					<div class="w3-col s4">
					  <img class="demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image3']); ?> " style="width:100%" onclick="currentDiv2(3)">
					</div>
				  </div>
				</div>
			</div>
			<div class = "col-sm-6" style="padding-left: 50px;">
				<div class = "row text-left">
					<ul class="breadcrumb">
					  <li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
					  <li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; echo '&viewtype=0';?>">Explore</a></li>
					  <li>Details</li>
					</ul>
				</div>
				<div class = "row text-left">
					<div class = "col-md-8 text-left">
						<h1> <?php echo $details_page[0]['name'];?> </h1>
					</div>
					<div class = "col-md-4 text-right">
						<?php 
							
							if(round($details_page[0]['rating'])== 0){
								echo '   <img style = "width: 180px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
							}
							if(round($details_page[0]['rating'])== 1){
								echo '  <img style = "width: 180px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
							}
							if(round($details_page[0]['rating'])== 2){
								echo '  <img style = "width: 180px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
							}
							if(round($details_page[0]['rating'])== 3){
								echo '  <img style = "width: 180px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
							}
							if(round($details_page[0]['rating'])== 4){
								echo '  <img style = "width: 180px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
							}
							if(round($details_page[0]['rating'])== 5){
								echo '  <img style = "width: 180px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
							}
							
							echo '<h3>';echo $details_page[0]['vote']; echo ' response </h3>';
						?>
					</div>	
				</div>
				<div class = "row text-left" style="padding-right: 20px;">
					<div class = "col-sm-6">
						<h4><b>Locality:</b> <?php echo $details_page[0]['locality'];?> <h4>
					</div>
					<div class = "col-sm-6">
						<h4><b>Province:</b> <?php echo $details_page[0]['province'];?> <h4>
					</div>
					
					
					<p align = "justify"> <?php echo $details_page[0]['description'];?></p>
				</div>
			</div>
			<div class = "col-sm-1" style = "background-color: white; padding-right: 20px;">
			</div>
		</div>
	
	<!-- review table -->
	<div class = "row" >
		<div class = "col-sm-5"  style = "padding-left: 50px;padding-right: 50px; ">
				<h3 style = "color: gray;"> Find it on Google Maps! </h3>
				 <?php echo '<iframe src="https://www.google.com/maps/embed?';echo $details_page[0]['map']; echo '" style = "border-radius: 5px; "width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>';?>
		</div>
		<div class = "col-sm-7" style="padding-top: 5px; padding-bottom: 60px; " > 
			<div style="float: left; border-right: 1px solid gray; margin-left: 1%"> <button class="revsug" onclick="r()"><h3> Reviews </h3></button>
			</div>
			<div style="margin-left: 13%;"> <button class="revsug"  onclick="s()"> <h3> Photo Contributions </h3> </button>
			</div>
			
			<div id = "reviewww" style="display: block;">
				<?php				
				if($reviews != 'none'){
					echo '
							<div class = "col-md-6" > <h3 style = "color:black; "> '; echo $details_page[0]['vote']; echo' &nbsp;Reviews</h3> </div>
							<div class = "col-md-6" ><span><a class="btn btn-info" data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;"><span class="glyphicon glyphicon-pencil"></span> Add Your Experience</a></span></div>	
					';
				}
				else{echo '
					<div class = "col-md-6" ><h3 style = "color:black; "> &nbsp;&nbsp;Reviews</h3> </div>
					<div class = "col-md-6" ><span><a class="btn btn-info" data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;"><span class="glyphicon glyphicon-pencil"></span>Add Your Experience</a></span></div>
			
				';}
				?>
				<table id="customers"  style="height: 20%;">	
							<tbody >
								<?php
								  $x = 1;
									if($reviews != 'none'){
										foreach($reviews as $n){
											if($x%2==0){
											echo '
											<tr>	
											<td id = "tblwidth"> 
												<div style="background-color: #a6bcbb;border-radius: 5px; padding: 10px; margin-left: 20px;"> ';
													echo ' <div class="col-sm-8">';
													if(round($n['rating'])== 0){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 1){
														echo ' <img style = "width: 180px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 2){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 3){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 4){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 5){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
													}
													
													echo '
													</div>
													<div class="col-sm-4 text-right">
														<form action = "';echo base_url ('Pilipinas/spam'); echo'" method = "post">
															<button class="btn btn-warning" type = "submit" value="';echo $n['review_id'];echo'" name="review_id"><span class = "glyphicon glyphicon-thumbs-down"></span> Spam</button>
														</form>
													</div>
													<h4 style = "color: black;">'; echo $n['reviewer']; echo '</h4>
													<p>'; echo $n['review']; echo '</p>';
		echo '	<div>							</div>
											</td>
											</tr>
											';
											}
											else {
												
																		echo '
												<tr>	
												<td id = "tblwidth"> 
												<div style="background-color: #c3cddd;border-radius: 5px; padding: 10px; margin-right: 20px; "> ';
													
													echo ' <div class="col-sm-8">';
													if(round($n['rating'])== 0){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 1){
														echo ' <img style = "width: 180px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 2){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 3){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 4){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 5){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
													}
													
													echo '
													</div>
													<div class="col-sm-4 text-right">
														<form action = "';echo base_url ('Pilipinas/spam'); echo'" method = "post">
															<button class="btn btn-warning" type = "submit" value="';echo $n['review_id'];echo'" name="review_id"><span class = "	glyphicon glyphicon-thumbs-down"></span> Spam</button>
														</form>
													</div>
													<h4 style = "color: black;">'; echo $n['reviewer']; echo '</h4>
													<p>'; echo $n['review']; echo '</p>';
										echo '	</div>
												</td>
												</tr>
											';	
												
											}
											$x = $x+1;
										}
									}
									else {
										echo "
										<tr>	
											<td id = 'tblwidth'>
												<div style='background-color: #a6bcbb;border-radius: 10px; padding: 10px; margin-left: 20px;'>
												<h3> Help others know about this place, share your experience now!</h3>
												</div>
											</td>
										</tr>
										";
									}
									
								?>
								
							</tbody style = "box-shadow: inset 2px -15px 38px -15px rgba(0,0,0,0.75);	">
				</table>
			</div>
			
			<div id = "suggesteddd" style = "display: none;"class = "contributions" >
				
				<?php				
				echo '
				<div class = "row" > ';
					if($reviews != 'none'){
						echo '
								<div class = "col-md-6" > <h3 style = "color:black; "> '; echo $details_page[0]['vote']; echo' &nbsp;Shared Photos </h3> </div>
								<div class = "col-md-6" ><span><a style = "width: 100%; color: white;"class="btn btn-info" data-toggle="modal" data-target="#photomodal" style="cursor: pointer;"><span class="glyphicon glyphicon-picture"></span> Share your moments! </a></span></div>	
									';
					}
					else{echo '
							
						<div class = "col-md-6" ><h3 style = "color:black; "> &nbsp;&nbsp;Shared Photos </h3> </div>
						<div class = "col-md-5" ><span><a style = "width: 100%; color: white;" class="btn btn-info" data-toggle="modal" data-target="#photomodal" style="cursor: pointer;"><span class="glyphicon glyphicon-picture"></span> Share your moments!</a></span></div>
				
					
			
					';}
				echo '</div>';
				?>


						<div class = "contributions text-left">
						  <?php 
								if($contribute != 'none'){
										foreach($contribute as $g){
											echo '
											<a href="">
												<figure>
												  <img src="'; echo base_url('img/uploaded/'.$g['image']);echo'" alt="">
												  <figcaption>
													<h5><b>'; echo $g['name']; echo '</b> '; echo $g['caption']; echo ' </h5>
												  </figcaption>
												</figure>
											 </a>
											';
						  
										}
								}
								else{
									echo "
									<h2>There are no shared photos right now, share one if you've been here</h2>
									";
								}
						  ?>
						
						</div>

						<p class="p">Demo by George Martsoukos. <a href="http://www.sitepoint.com/using-modern-css-to-build-a-responsive-image-grid/" target="_blank">See article</a>.</p>
										
										
				
			</div>
		</div>

	</div>
	
	<!-- end ng review -->
	

		
		
	</div>	<!-- end ng row na itu-->
	
	</div>
	
	
	
	<!-- footer -->
	<div class = "row" id = "footer">
	
		<div class = "col-md-5 text-left">
			<h6>DISCOVER MORE</h6>
			<div id="p">Pili-Pinas serves as an online tourist hub that showcase detailed information about the country’s heritage, 
			culture, and natural landmarks. It also provides advertising of local products, reviews and suggestions from users,
			as well as listed places to visit.
			<br />
			</div>
			<h3>All Right Reserved 2017</h3>
			
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>GET CONNECTED</h6>
			<center><div id="juan"><a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" alt="Facebook">&nbsp;Like us on Facebook</a></div>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" alt="Twitter">&nbsp;Follow us on Twitter</a></div>
			</center>
		</div>
		<div class = "col-md-3 text-center">
			<h6>CONTACT INFORMATION</h6>
			<center><div id="juan"><img src = "<?php echo base_url('img/locate.png') ?>" alt="Address" width = "12%" height="12%"> &nbsp; Pili-Pinas <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ayala Boulevard, <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ermita Manila</div>
			<div id="juan"><img src = "<?php echo base_url('img/mobile.png') ?>" alt="Phone" width = "12%" height="12%">(+63) 9152987364</div>
			<div id="juan"><img src = "<?php echo base_url('img/mail.png') ?>" alt="Mail" width = "12%" height="12%">pili_pinas@gmail.com</div>
			</center>
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>QUICK LINKS</h6>
			<center><div id="qlinks"><a href= "<?php echo base_url('Pilipinas');?>"><h4>Home</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/explore');?>"><h4>Explore</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/history');?>"><h4>History</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/about');?>"><h4>About</h4></a></div>
			<center>
		</div>
		
	</div>
	

</div>


<!-- modal for photo -->
<div class="modal fade" id="photomodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header text-center" style = "background-color: black; color: black;">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4>Share your Moment Through Pictures!</h4>
					</div>				
					<div class=" row modal-body text-center">
						<?php echo form_open_multipart('pilipinas/contribution');?>
						
							<div style="width:200; height:100;overflow-y: hiddden;">
								<img id="blah" alt="your image" width="30%"  />
							</div>
							<input type="file" name="image" size = "20" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
							<input type = "text" name ="name" value = "" placeholder = "Your name" />
							</br>	
							</br>
							<textarea  ROWS = "6" COLS="21" name ="caption" value = "" placeholder = "Your review" ></textarea>
					</div>
					<div class="modal-footer text-center">
						<input id="f" name="rating" style="display: none;"></input>
						<button class = "btn btn-success" type="submit" value="<?php echo $details_page[0]['place_id'];?>" name="place_id" id="finalrate"> <span class = "glyphicon glyphicon-envelope" ></span> RATE THIS! </button>
					</form>
					
					
					</div>
				</div>
			</div>
		</div>
						
<!-- modal for comment -->
<div class="modal fade" id="reviewmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header text-center" style = "background-color: black; color: black;">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4>Share your experience!</h4>
					</div>
					
					
					<div class=" row modal-body text-center">
						<form action="<?php echo base_url ('Pilipinas/rating')?>" method="get">
							<span class="star-rating">
							  <input type="radio" name="rating" value="1"><i></i>
							  <input type="radio" name="rating" value="2"><i></i>
							  <input type="radio" name="rating" value="3"><i></i>
							  <input type="radio" name="rating" value="4"><i></i>
							  <input type="radio" name="rating" value="5"><i></i>
							</span>
						<!-- comment box -->
						</br>
						</br>
						</br>
							<input type = "text" name ="reviewname" value = "" placeholder = "Your name" />
							</br>	
							</br>
							<textarea  ROWS = "6" COLS="21" name ="reviewmismo" value = "" placeholder = "Your review" ></textarea>
					</div>
					<div class="modal-footer text-center">
						
						<button class = "btn btn-success" type="submit" value="<?php echo $details_page[0]['place_id'];?>" name="place_id" id="finalrate"> <span class = "glyphicon glyphicon-envelope" ></span> RATE THIS! </button>
					</form>
					</div>
				</div>
			</div>
		</div>
					
					
						
						
						