<html>
  <head>
    <title>Grenfell Catering</title>
	<meta http-equiv="Content-Type" content="Type=text/html; charset=utf-8">
	<meta name="keywords" content="Ottawa Catering, Ottawa Weddings Catering, Ottawa Corporate Events Catering, non-kosher Bar Mitzvah catering" />
	<meta name="description" content="From Weddings, Special events , Corporate Events or Home Entertaining, Grenfell Catering strives to make your occasion a memorable one! With our creative flair for gourmet cuisine and attention to detail we will provide you with a dining experience second to none!"/>
	<meta name="robots" content="noindex, nofollow" />
	<meta http-equiv="content-language" content="en" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
	<link type="text/css" rel="stylesheet" href="css/lightGallery.css" />                    
	<script src="js/lightGallery.js"></script>
  </head>
  <body>
    <div class="col-container">
      <div class="col-2">
        <div id="logo">
			Grenfell Catering
		</div>
      </div>
      <div class="col-2">
        <ul class="ul-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Catering</a></li>
          <li class="selected"><a href="gallery.php">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="select-menu">
          <h1>Menu</h1>
          <ul class="select-menu-ul">
            <a href="#"><li>Home</li></a>
            <li>About</li>
            <li>Catering</li>
            <li>Gallery</li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </div>
       <div class="col-container">
		<ul id="lightGallery">
		  <?php
		  
		  for($i=1, $i<73, $i++){
			echo '<li data-src="images/gallery/'. $i . '.jpg">
			<img src="images/gallery/'. $i . '.jpg" />
		  </li>';
		  }
		  
		  ?>
		</ul>
    </div>
    <div class="col-container-full logos-slider">
		<div id="customers" class="flexslider flexslider2">
			<ul class="slides">
				<li>
				  <img src="images/customers/apple.gif" />
				</li>
				<li>
				  <img src="images/customers/cat.gif" />
				</li>
				<li>
				  <img src="images/customers/hard_rock_cafe.gif" />
				</li>
				<li>
				  <img src="images/customers/ibm.gif" />
				</li>
				<li>
				  <img src="images/customers/k-mart.gif" />
				</li>
				<li>
				  <img src="images/customers/quaker.gif" />
				</li>
				<li>
				  <img src="images/customers/radioshack.gif" />
				</li>
				<li>
				  <img src="images/customers/valvoline.gif" />
				</li>
				<li>
				  <img src="images/customers/volvo.gif" />
				</li>
				<li>
				  <img src="images/customers/vw.gif" />
				</li>
			</ul>
        </div>
	</div>
    <div class="col-container footer">
      <div class="col-2">
        2014 © Grenfell Catering -  Catering and Event Production Company.<br />
        Web Site Development by <a href="http://www.kvk-media.com" alt="KVK Media, Web Development and Programming">KVK Media</a>
      </div>
      <div class="col-2">
        <ul class="social">
          <li class="facebook"></li>
          <li class="twitter"></li>
        </ul>
      </div>
    </div>
	  <!-- jQuery -->
<!-- jQuery library - Please load it from Google API's -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- responsive menu -->
  <script type="text/javascript" src="js/main.js"></script>
  
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
  
      $(window).load(function() {
	 $('#slider').flexslider({
		animation: "slide",
		controlNav: false,
		directionNav: false,
		slideshowSpeed: 8000,
	  });
	  
	  $('#customers').flexslider({
          animation: "slide",
		  itemWidth: 100,
		  itemMargin: 1,
		  minItems: 9,
		  maxItems: 9,
		  move: 0,
		  controlNav: false,
		  directionNav: false,
        });
        
      });
	  
	  $(document).ready(function() {
		$("#lightGallery").lightGallery(); 
	  });
  </script>
  </body>
</html>