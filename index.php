<?php
//$showStartupModal = true;
$page = 'none';
$showHome = '';
$showHealthy = '';
$showBoth = '';
$showDiabetic = '';
$showCholestrol = '';
$showPage = false;

if (isset($_GET['page'])) {
  // code...
  $page = $_GET['page'];
  if ($page=='Stay Healthy') {
    // code...
    $page = 'Stay Healthy';
    $showHealthy = 'active';
    $showPage = true;
  } elseif ($page=='both') {
    // code...
    $page = 'Both Diabetis & High Cholesterol';
    $showBoth = 'active';
    $showPage = true;
  } elseif($page=='Diabetic') {
    // code...
    $page = 'Diabetes';
    $showDiabetic = 'active';
    $showPage = true;
  } elseif($page=='High Cholestrol') {
    // code...
    $showCholestrol = 'active';
    $showPage = true;
  }

  //$showStartupModal = false;
} else {
  // code...
  $showHome = ($page == 'none') ? 'active' : '';
  $page = 'Home';

}
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>diaHealth | <?=$page?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="static/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="static/css/animate.css">

    <link rel="stylesheet" href="static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="static/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="static/css/magnific-popup.css">

    <link rel="stylesheet" href="static/css/aos.css">

    <link rel="stylesheet" href="static/css/ionicons.min.css">

    <link rel="stylesheet" href="static/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="static/css/jquery.timepicker.css">


    <link rel="stylesheet" href="static/css/flaticon.css">
    <link rel="stylesheet" href="static/css/icomoon.css">
    <link rel="stylesheet" href="static/css/style.css">
  </head>
  <body>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="./">diet<span>Companion</span></a>
	    		</div>
		    </div>
		  </div>
    </nav>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <p class="button-custom order-lg-last mb-0"><a href="?page=Stay Healthy" class="btn btn-secondary py-2 px-3">Stay Healthy</a></p>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item  <?=$showHome?>"><a href="./" class="nav-link pl-0">Home</a></li>

	        	<li class="nav-item <?=$showDiabetic?>"><a href="?page=Diabetic" class="nav-link">Diabetes</a></li>
	        	<li class="nav-item <?=$showCholestrol?>"><a href="?page=High Cholestrol" class="nav-link">High Cholesterol</a></li>
	        	<li class="nav-item <?=$showBoth?>"><a href="?page=both" class="nav-link">Both Diabetic & High cholesterol</a></li>
            <?php if (!$showPage): ?>
              <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
            <?php endif; ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<!-- //home -->
<?php
if ($showPage) {
  // code...
  include 'pages/page.php';

} else {
  // code...
  include 'pages/home.php';
}
 ?>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">diet<span>Companion</span></h2>
              <p>Your free online platform for your diabetic and high Cholesterol level related issues.</p>
            </div>

          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="./"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="?page=Diabetic"><span class="ion-ios-arrow-round-forward mr-2"></span>Diabetes</a></li>
                <li><a href="?page=High Cholestrol"><span class="ion-ios-arrow-round-forward mr-2"></span>High Cholesterol</a></li>
                <li><a href="?page=both"><span class="ion-ios-arrow-round-forward mr-2"></span>Diabetes & High Cholesterol</a></li>
                <li><a href="?page=Stay Healthy"><span class="ion-ios-arrow-round-forward mr-2"></span>Stay Healthy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">External Resources</h2>
              <ul class="list-unstyled">
                <li><a href="https://www.ghanahealthservice.org/"><span class="ion-ios-arrow-round-forward mr-2"></span>Ghana Health Service</a></li>
                <li><a href="https://www.moh.gov.gh/"><span class="ion-ios-arrow-round-forward mr-2"></span>Ministry Of Health, Ghana</a></li>
                <li><a href="https://www.who.int/"><span class="ion-ios-arrow-round-forward mr-2"></span>World Health Organization</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
            </div>

            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>

                  <li><a href="mailto:diaHealth@campusinsider.net"><span class="icon icon-envelope"></span><span class="text">diaHealth@campusinsider.net</span></a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://twitter.com" target="_blank" disabled>Rebecca Sarfo Kantanka</a> and <a href="https://twitter.com" target="_blank" disabled>Abena Darkwaa Boateng</a>
  </p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="static/js/jquery.min.js"></script>
  <script src="static/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="static/js/popper.min.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
  <script src="static/js/jquery.easing.1.3.js"></script>
  <script src="static/js/jquery.waypoints.min.js"></script>
  <script src="static/js/jquery.stellar.min.js"></script>
  <script src="static/js/owl.carousel.min.js"></script>
  <script src="static/js/jquery.magnific-popup.min.js"></script>
  <script src="static/js/aos.js"></script>
  <script src="static/js/jquery.animateNumber.min.js"></script>
  <script src="static/js/bootstrap-datepicker.js"></script>
  <script src="static/js/jquery.timepicker.min.js"></script>
  <script src="static/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="static/js/google-map.js"></script>
  <script src="static/js/main.js"></script>

  </body>
</html>
