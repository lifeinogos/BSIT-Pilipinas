<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?php echo $title?></title>
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />
	
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"> </script>
	<script src="<?php echo base_url('bootstrap/js/jquery.flexslider.js'); ?>"> </script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"> </script>
	
	<link rel="stylesheet" href="<?php echo base_url('css/homepage.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/mycss.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/style1.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/table.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/contributions.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('css/slider.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/admin.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/flexslider.css')?>" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="icon" href="<?php echo base_url('img/1.ico'); ?>">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	
	<script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").delay(1000).fadeOut("normal");;
	});
	</script>
	
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
var t=setTimeout(showLast, 3000);
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
		var to = setTimeout(showSlides, 1000); // Change image every 2 seconds
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
setTimeout(showLast, 3000);
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
		var to = setTimeout(showSlides, 1000); // Change image every 2 seconds
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
setTimeout(showLast, 3000);
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
		var to = setTimeout(showSlides, 1000); // Change image every 2 seconds
	}
	function showLast() {
		document.getElementById('mi').style.display ="block";
		clearTimeout(to);
	}

}

</script>
<script>

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
document.getElementById("finalrate").value = "1";

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
document.getElementById("finalrate").value = "2";
}
function tres() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("finalrate").value = "3";
}
function quatro() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("finalrate").value = "4";
}
function lima() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('e').style.display = "none";
document.getElementById("finalrate").value = "5";

}




<!-- javascript in travel page -->
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var e;
  var x = document.getElementsByClassName("mySlides");
  var y = document.getElementsByClassName("mySlides_text");
  
  
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  
  
  var dots2 = document.getElementsByClassName("demo");
  if (n > y.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = y.length}
  
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (e = 0; e < y.length; e++) {
     y[e].style.display = "none";  
  }
  
  
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  for (e = 0; i < dots2.length; e++) {
     dots2[e].className = dots2[e].className.replace(" w3-red", "");
  }
  
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
  y[slideIndex-1].style.display = "block";  
  dots2[slideIndex-1].className += " w3-red";
  
  
  
  
  
}
<!-- end of travel page -->

<!-- JAVASCRIPT IN TRAVELR1 TRYING HARD SI KATKAT -->

				<!-- for manual slider -->
				var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
				  showDivs(slideIndex += n);
				}

				function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  if (n > x.length) {slideIndex = 1}    
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
					 x[i].style.display = "none";  
				  }
				  x[slideIndex-1].style.display = "block";  
				}
			
<!-- END OF ME -->

</script>	


<!-- javascript in homepage slider -->
<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>



	

	
</head>
<body>