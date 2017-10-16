<!-- Homepage -->
	  	
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
</script>
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
							<li><a href="<?php echo base_url('Pilipinas/travel/');?>">Explore</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
							<li class="active"><a href="<?php echo base_url('Pilipinas/about/');?>">Details			</a></li>	
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
	
	<div class = "container-fluid" style = "background-image: url('img/background'); background-color: null;">	

		<div class = "row text-center" id = "details">
			
			<div class = "col-sm-5" style = "background-color: black; box-shadow: 24px -2px 23px -8px rgba(201,201,201,1);">		
				<div class="w3-content" style="max-width:1200px">
				  <img class="mySlides2 " src="<?php echo base_url($details_page[0]['image']) ?> " style="width:100%">
				  <img class="mySlides2" src="<?php echo base_url($details_page[0]['image']) ?> " style="width:100%">
				  <img class="mySlides2" src="<?php echo base_url($details_page[0]['image']) ?> " style="width:100%">

				  <div class="w3-row-padding w3-section">
					<div class="w3-col s4">
					  <img class=" demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url($details_page[0]['image']) ?> " style="width:100%" onload ="currentDiv2(1)"onclick="currentDiv2(1)">
					</div>
					<div class="w3-col s4">
					  <img class="demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url($details_page[0]['image']) ?> " style="width:100%" onclick="currentDiv2(2)">
					</div>
					<div class="w3-col s4">
					  <img class="demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url($details_page[0]['image']) ?> " style="width:100%" onclick="currentDiv2(3)">
					</div>
				  </div>
				</div>
			</div>
			<div class = "col-sm-6" style="padding-left: 50px; padding-top: 30px;">
				<div class = "row text-left">
				<ul class="breadcrumb">
				  <li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
				  <li><a href="<?php echo base_url('Pilipinas/travel/');?>">Explore</a></li>
				  <li>Details</li>
				</ul>
				<h1> <?php echo $details_page[0]['name'];?> </h1>
				<h1> <?php echo 'Rating: '.round($details_page[0]['rating']);?></h1>
				</div>
				<div class = "row text-left" >
				<h3> <?php echo $details_page[0]['locality'].','.$details_page[0]['province'].' Region: '.$details_page[0]['region'];?></h3>
				<p> <?php echo $details_page[0]['description'];?></p>
				</div>
			</div>
			<div class = "col-sm-1" style = "background-color: white;padding-right: 20px;">
			
			</div>
		</div>
	
	
	

		
		<div class = "row" style = "padding-bottom: 35px;">
			<div  style="  height: 20%;" align="center">
					<div class = "col-md-2">
					</div>
					<div class = "col-md-8" style = "color: #686666; background-color: #dbd9d9; border-radius: 70px 0px 97px 10px; padding-bottom: 15px;">
					<h2>    if you've been here, rate your experience to help locals   </h2>
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
						<input id="f" name="rating" style="display: none;"></input>
							<button class = "btn btn-danger" type="submit" value="<?php echo $details_page[0]['place_id'];?>" name="place_id" id="finalrate"> RATE THIS! </button>
						</form>
						
						
					</div>
					<div class = "col-md-2">
					</div>
			</div>        <!-- end ng star div -->
		
		</div>	<!-- end ng rate -->
	</div>	<!-- end ng row na itu-->
	
	
	
	
	
	
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
