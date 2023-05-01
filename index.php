<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" />
	<link rel="stylesheet" href="styles.css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>G2</title>
	<link rel="stylesheet" href="./css/first-section.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alphardex/aqua.css/dist/aqua.min.css">
	<link rel="stylesheet" href="./src/search-bar.css">
	<script src="./js/search-bar.js" defer></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a827430090.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- <?php include 'partials/loading-page.php' ?> -->
	<nav class="buttons">
		<ul>
		  <li><a href="#one" class="nav-button active" data-section="one">Introduction</a></li>
		  <li><a href="#two" class="nav-button" id="second-button" data-section="two">Web</a></li>
		  <li><a href="#three" class="nav-button" data-section="three">Data</a></li>
		  <li><a href="#four" class="nav-button" id="second-button" data-section="four">D. Marketing</a></li>
		  <li><a href="#five" class="nav-button" data-section="five">Design</a></li>
		  <li><a href="#footer" class="nav-button" data-section="footer">Contact</a></li>
		</ul>
	  </nav>
	<main class="main-container">
	<?php include 'partials/header.php'; ?>  
		<section class="first-section-template" id="one">
		
		<?php include 'partials/first-section-template.php'
 ?>

		  </div>
		</section>
		<section class="image-bg" id="two">
		  <!-- content for section 2 -->
		  <div class="header-hoverer"></div>
		  <a href="blog-page-web.php" class="page-redirecter" style="height: 100%; width: 100%;"></a>
		</section>
		<section class="image-bg" id="three">
		  <!-- content for section 3 -->
		  <div class="header-hoverer"></div>
		  <a href="blog-page.php" class="page-redirecter" style="height: 100%; width: 100%;"></a>

		</section>
		<section class="image-bg" id="four">
		  <!-- content for section 2 -->
		  <div class="header-hoverer"></div>
		  <a href="blog-page.php" class="page-redirecter" style="height: 100%; width: 100%;"></a>
		</section>
		<section class="image-bg" id="five">
		  <!-- content for section 3 -->
		  <div class="header-hoverer"></div>
		  <a href="blog-page.php" class="page-redirecter" style="height: 100%; width: 100%;"></a>
		</section>
		<section class="image-bg" id="footer">
			<?php include 'partials/footer.php'; ?>
		</section>
	  </main>
</body>
</html>
<script src="js/nav-buttons.js"></script>
<!-- <script src="js/image-track.js"></script> -->

<!-- BY HD -->