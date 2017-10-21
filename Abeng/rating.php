<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap!</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />	
	<link rel="stylesheet" href="mycss.css"/>
  <link rel="stylesheet" href="homepage.css"/>
	<link href="css/bootstrap.css" rel="stylesheet" />
	
<script>
function one() {
document.getElementById('isa').style.display = "block";
document.getElementById('a').style.display = "none";
}
function two() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
}
function three() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
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
}
function tres() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
}
function quatro() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
}
function lima() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('e').style.display = "none";
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


</head>
<body onLoad="collarChange(event)">
	<nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
					  <img src = "img/LOGO.png" width = "100" class="img-responsive" alt="Los Angeles">
						
						</div>
						
						<div  class="collapse navbar-collapse" id="myNavbar" >
						
						  <ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">About</a></li>
							
						  </ul>
						  <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"/> 
									<input type="submit" value="Find" />
								</form> 
						  </li>
						  </ul>
						 
						</div>
   </nav>
	<br />
	<br />
	<br />
	<br />
<div class="row text-center" align="center">
<h1 style="color:#C92E2E;"> THIS IS A STAR RATING </h1>
<h4 style="color:#b9b5b5;"> ( WALA NA AKONG STOCK NG KAPE HUHUHUHU YUNG NESCAFE CREAMY WHITE OR CAFE BLANCA LMAO ) </h4>
<br />
	<br />
	<br />

<div id="star" style="width: 100%; border: 1px solid black; height: 20%;">
<div>
	
		<div id="a" style="display:block; border: 1px solid black; width:5%; position: relative;">
			<button onclick ="one()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
					<img src="img/star1.png" style="width:100%;">
			</button> 
		</div>
		<div id="isa" style="display:none; border: 1px solid black; width:5%; position: relative;">
			<div >
			<button onclick ="uno()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
				<img src="img/star.png" style="width:100%">
			</button>
			</div>
		</div>

	
	
		<div id="b" style="display:block; border: 1px solid black; width:5%; position: relative;">
			<button onclick ="two()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
					<img src="img/star1.png" style="width:100%;">
			</button>
		</div>
		<div id="dalawa" style="display:none; border: 1px solid black; width:5%; position: relative; ">
			<div >
			<button onclick ="dos()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
				<img src="img/star.png" style="width:100%; position: relative; float: left;">
			</button>
			</div>	
		</div>

	
	
	<div id="c" style="display:block; border: 1px solid black; width:5%; position: relative;">
		<button onclick ="three()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<img src="img/star1.png" style="width:100%;">
		</button> 
	</div>
	<div id="tatlo" style="display:none; border: 1px solid black; width:5%; position: relative;">
		<div >
		<button onclick ="tres()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
			<img src="img/star.png" style="width:100%">
		</button>
		</div>	
	</div>
	
	<div id="d" style="display:block; border: 1px solid black; width:5%; position: relative;">
		<button onclick ="four()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<img src="img/star1.png" style="width:100%;">
		</button> 
	</div>
	<div id="apat" style="display:none; border: 1px solid black; width:5%; position: relative;">
		<div >
		<button onclick ="quatro()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
			<img src="img/star.png" style="width:100%">
		</button>
		</div>	
	</div>
	
	<div id="e" style="display:block; border: 1px solid black; width:5%; position: relative;">
		<button onclick ="five()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<img src="img/star1.png" style="width:100%;">
		</button> 
	</div>
	<div id="lima" style="display:none; border: 1px solid black; width:5%; position: relative;">
		<div >
		<button onclick ="singko()" type="submit"  name="search" style="position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
			<img src="img/star.png" style="width:100%">
		</button>
		</div>
	</div>
	
</div><!-- rizals-->
<br/>

</div>

	
</div>	
<div class = "container-fluid" style = "background-image: url('img/background')">	

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
		<h3> All Rights Reserved 2017<h3>
	</div>

</body>
</html>