<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php include 'partials/menu-page.php'?>
<header class="header" id="header-scroll">
  
  <img src="./res/new-logo.png" class="header-logo" alt="">
  <!-- <?php include 'partials/search-bar.php'; ?> -->
  <div id="burgermenu" onClick="menuModule.Toggle()">
    <div class="line" id="nr1"></div>
    <div class="line" id="nr2"></div>
    <div class="line" id="nr3"></div>
  </div>
  
  <div id="menu">
    <ul class="menu-list">
      <h4>Piazessi</h4>
      <img src="https://previews.123rf.com/images/scrap4vec/scrap4vec1808/scrap4vec180800293/106828944-brown-property-rome-italian-architecture-building-company-logo-design-concept-vector-illustration.jpg">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</header>

<script src="./js/header.js"></script>