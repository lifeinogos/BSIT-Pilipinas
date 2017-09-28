<!DOCTYPE html>
<html lang="en">
<head>
	
	<title><?php echo $title?></title>
	
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('bootstrap/css/custom.css'); ?>" rel="stylesheet" />
	
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js'); ?>"> </script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"> </script>
	
	<link rel="stylesheet" href="<?php echo base_url('css/homepage.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/mycss.css')?>">
	
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
	
</head>