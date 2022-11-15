<? php require_once('inc/connection.php'); ?>
<?php
require_once 'inc/header.php';
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
	<div class="container">
		<div class="swiper">
		  <!-- Additional required wrapper -->
		  <div class="swiper-wrapper">
		     <!-- Slides -->
		    <div class="swiper-slide"><img src="img/image01.jfif" width="200" height="200"></div>
		    <div class="swiper-slide"><img src="img/image02.jfif" width="200" height="200"></div>
		    <div class="swiper-slide"><img src="img/image03.jfif" width="200" height="200"></div>
		    <div class="swiper-slide"><img src="img/image04.jfif" width="200" height="200"></div>
		    <div class="swiper-slide"><img src="img/image05.jfif" width="200" height="200"></div>
		    <div class="swiper-slide"><img src="img/image06.jfif" width="200" height="200"></div>
		  </div>
		  <!-- If we need pagination -->
		  <div class="swiper-pagination"></div>

		  <!-- If we need navigation buttons -->
		   <div class="swiper-button-prev"></div>
		  <div class="swiper-button-next"></div> 

		  
  <div class="swiper-scrollbar"></div>
</div> 
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
	const swiper = new Swiper('.swiper', {
		autoplay:{
			delay: 2000,
			disableOnInteraction: false,
		},
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>
</body>
</html>
<center>
	<img src="img/fitshoesLogo.png" width="150" height="100" />
</center>

<?php
require_once 'inc/footer.php';
?>
