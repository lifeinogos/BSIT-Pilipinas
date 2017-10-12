<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap!</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />	
	<link rel="stylesheet" href="mycss.css"/>
  <link rel="stylesheet" href="homepage.css"/>
	<link href="css/bootstrap.css" rel="stylesheet" />

<script>
function showLuz() {
document.getElementById('phh').style.display = "none";
document.getElementById('ph').style.display = "none";
document.getElementById('Visayass').style.display = "none";
document.getElementById('Visayas').style.display = "none";
document.getElementById('Mindanaoo').style.display = "none";
document.getElementById('Mindanao').style.display = "none";
document.getElementById('m').style.display ="none";
document.getElementById('mi').style.display ="none";
document.getElementById('vi').style.display  ="none";
document.getElementById('v').style.display  ="none";
document.getElementById('lu').style.display ="none";
document.getElementById('l').style.display ="none";
document.getElementById('Luzonn').style.display = "block";
document.getElementById('Luzon').style.display = "block";


   var slideIndex = 0;
showSlides();	
var t=setTimeout(showLast, 5000);
	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("luz");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > slides.length) { document.getElementById('l').style.display ="block";
		clearTimeout(to);} 
		slides[slideIndex-1].style.display = "block"; 
		var to = setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	function showLast() {
		document.getElementById('lu').style.display ="block";
		clearTimeout(t);
	}

}
function showVi() {
document.getElementById('ph').style.display = "none";
document.getElementById('phh').style.display = "none";
document.getElementById('Mindanao').style.display = "none";
document.getElementById('Mindanaoo').style.display = "none";
document.getElementById('Luzonn').style.display = "none";
document.getElementById('Luzon').style.display = "none";
document.getElementById('lu').style.display ="none";
document.getElementById('l').style.display ="none";
document.getElementById('mi').style.display ="none";
document.getElementById('m').style.display ="none";
document.getElementById('vi').style.display ="none";
document.getElementById('v').style.display ="none";
document.getElementById('Visayass').style.display = "block";
document.getElementById('Visayas').style.display = "block";

   var slideIndex = 0;
showSlides();
setTimeout(showLast, 5000);
	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("vis");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > slides.length) { document.getElementById('v').style.display ="block";
		clearTimeout(to); } 
		slides[slideIndex-1].style.display = "block"; 
		var to = setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	function showLast() {
		document.getElementById('vi').style.display ="block";
		clearTimeout(to);
	}
	
}


function showMin() {
document.getElementById('ph').style.display = "none";
document.getElementById('phh').style.display = "none";
document.getElementById('Luzon').style.display = "none";
document.getElementById('Luzonn').style.display = "none";
document.getElementById('Visayas').style.display = "none";
document.getElementById('Visayass').style.display = "none";
document.getElementById('lu').style.display ="none";
document.getElementById('l').style.display ="none";
document.getElementById('vi').style.display ="none";
document.getElementById('v').style.display ="none";
document.getElementById('mi').style.display ="none";
document.getElementById('m').style.display ="none";
document.getElementById('Mindanaoo').style.display = "block";
document.getElementById('Mindanao').style.display = "block";
   
   var slideIndex = 0;
showSlides();
setTimeout(showLast, 5000);
	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("min");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > slides.length) { document.getElementById('m').style.display ="block";
		clearTimeout(to);} 
		slides[slideIndex-1].style.display = "block"; 
		var to = setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	function showLast() {
		document.getElementById('mi').style.display ="block";
		clearTimeout(to);
	}

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

.mySlides {
    display: none;
}

/* Fading animation */
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

#lu img:hover {
	 -webkit-filter: grayscale(100%);
}
#vi img:hover {
	 -webkit-filter: grayscale(100%);
}
#mi img:hover {
	 -webkit-filter: grayscale(100%);
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
	
	<div class="item">
	<img src="img/slider_3.jpg" alt="" style="width:100%;">
	</div>
<div class = "container-fluid">

<div class = "col-md-6">
<br />
	<div class="row text-center" >
	<h1 style="color:#C92E2E;">CHOOSE YOUR ISLAND</h1>
	<h4 style="color:#b9b5b5;">The Philippines consists of 3 different islands (luzviminda): Luzon, Visayas and Mindanao. <br />Find out the Historical Landmarks located on each island.</h4>
	<br /><br />
	<input type="button" id="bt" value="Luzon" onclick="showLuz()" />
	<input type="button" id="bt" value="Visayas" onclick="showVi()" />
	<input type="button" id="bt" value="Mindanao" onclick="showMin()" />
	
	<br/>
		<br /><br />
		<div>
			<div id="phh" class="answer_list" >
				<h1 style="color:#C92E2E;">Philippines</h1>
				<h4 style="color:#b9b5b5;">Located in Southeast Asia, known as Pearl of the Orient Sea. Philippines has the world largerst diversity in Asia.</h4>
			</div>
			<div id="Luzonn"  style="display:none;" class="answer_list" >
				<h1 style="color:#C92E2E;">Luzon</h1>
				<h4 style="color:#b9b5b5;">Located in the upper part of hjag</h4>
			</div>
			<div id="Visayass"  style="display:none;" class="answer_list" >
				<h1 style="color:#C92E2E;">Visayas</h1>
				<h4 style="color:#b9b5b5;">Located in the middle part of hjag</h4>
			</div>
			<div id="Mindanaoo"  style="display:none;" class="answer_list" >
				<h1 style="color:#C92E2E;">Mindanao</h1>
				<h4 style="color:#b9b5b5;">Located in the lower part of hjag</h4>
			</div>
		</div>
		</div>
	
</div>

	<div class = "col-md-6">
	<div class="row text-center" >
	<div id="ph" class="answer_list" >
	<img id="fade" src="img/phhh.jpg" style="width:60%;">
	
	</div>
	
	<div id="Luzon"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="luz" id="fade">
		<img src="img/luzonh.jpg" style="width:60%">
	  </div>
	  <div class="luz" id="fade">
		<img src="img/luzonhh.jpg" style="width:60%">
	  </div>
	  <div id="l"  style="display:none;">
		<img id="fade" src="img/luzonhhh.jpg" style="width:60%">
	  </div>
	  
	  <form action="luzondb.php" method="GET">
	  <div id="lu" style="display:none; position: absolute; top: 0; right: 0;  height: 100%;">
		<button type="submit"  name="search" value="rizal" style="width:10%; top: 40%; left: 14%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
				<img id="fade"  src="img/mark.png" style="width: 120%;">
		</button> <!-- rizals-->
		<button type="submit" name="search" value="crisologo" style="width:10%; top: 17%; right: 1%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
			<img id="fade" src="img/mark.png" style="width:120%;"> <!-- Calle Crisologo//Ilocos Sur -->
		</button>
		<button type="submit" name="search" value="corregidor" style="width:10%; top: 40.9%; right: 10.1%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
			<img id="fade" src="img/mark.png" style="width:120%;"><!-- Corregidor Island, Manila Bay, Cavite -->
		</button>
	  </form>
	  
	  </div>
	  </div>
	  </div>
	
	<div id="Visayas"  style="display:none; position: relative;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="vis" id="fade">
		<img src="img/visayash.jpg" style="width:60%">
	  </div>
	  <div class="vis" id="fade">
		<img src="img/visayashh.jpg" style="width:60%">
	  </div>
	  <div id="v" style="display:none; ">
		<img id="fade" src="img/visayashhh.jpg" style="width:60%;">
	</div>
	
	<form action="luzondb.php" method="post">
	<div id="vi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<button type="submit" name="search" value="fortsanpedro" style="width:10%; top: 47%; right: 12%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">				
			<img id="fade" src="img/mark.png" style="width:150%;"> <!--  Fort San Pedro//Plaza Independencia, Cebu City -->
		</button>
	</div>
	</form>
	</div>
	</div>
	
	<div id="Mindanao"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="min" id="fade">
		<img src="img/mindanaoh.jpg" style="width:60%">
	  </div>
	  <div class="min" id="fade">
		<img src="img/mindanaohh.jpg" style="width:60%">
	  </div>
	  <div id="m" style="display:none;">
		<img id="fade" src="img/mindanaohhh.jpg" style="width:60%">
	  </div>
	  
	 <form action="luzondb.php" method="post">
	 <div id="mi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<button type="submit" name="search" value="unknown" style="width:10%; top: 80%; right: 29%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">						
			<img id="fade" src="img/mark.png" style="width:150%;">
		</button>
	  </div>
	</form>
	 </div>
	</div>
	
	</div>
	</div>
</div>
</div>

	<br />
	<br />

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