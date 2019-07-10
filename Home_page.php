<!DOCTYPE html>
<html>
<head>
<title> Home page </title>
<link rel = "stylesheet" type = "text/css" href = "myStyle.css"> 
<meta name = "viewport" content = "width = device-width initial-scale = 1">
<head>
<body>
	<!-- Navigation script starts here -->
	<nav>
	<div class = "navigation">
	<a href = "http://localhost/MIS%20400/Home_page.php" class = "active"> Home </a>
	<a href = "http://localhost/MIS%20400/About_Us.php"> About Us </a>
	<a href = "http://localhost/MIS%20400/Register.php"> Register </a>
	<a href = "http://localhost/MIS%20400/Contact_Us.php"> Contact Us </a>
	<a href = "http://localhost/MIS%20400/Log_In.php"> Log In </a>
	</div>
	</nav>
	<!-- Navigation script ends here -->
	<br>
	<br>
	<h1> <mark> Cascade University </mark> </h1>
	<br>
	<br>
	<!-- This is where the slide script begins -->
	<div class = "slideshow-container">
		<img src = "picture 1.jpg" class = "slides">
		<img src = "picture 2.jpg" class = "slides">
		<img src = "picture 3.jpg" class = "slides">
		<img src = "picture 4.jpg" class = "slides">
		<button class = "btn" id = "btn1" onclick = "PlusIndex(-1)"> &#10094; </button>
		<button class = "btn" id = "btn2" onclick = "PlusIndex(1)"> &#10095; </button>
	</div>
	<script>
		var index = 1;
		function PlusIndex(n){
			index = index + 1;
			showImage(index);
		}
		
		showImage(1);
		
		function showImage(n){
			var i;
			var x = document.getElementsByClassName("slides");
			if(n > x.length){index = 1};
			if(n < 1) {index = x.length};
			for(i=0;i<x.length;i++){
				x[i].style.display = "none";
			}
			x[index-1].style.display = "block";
		}
		autoSlide();
		function autoSlide(){
			var i;
			var x = document.getElementsByClassName("slides");
			for(i=0;i<x.length;i++){
				x[i].style.display = "none";
			}
			if(index > x.length) {index = 1}
			x[index-1].style.display = "block";
			index++;
			setTimeout(autoSlide, 2000);
		}
	</script>
</body>
</html>