<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>CZSK - Wiki</title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	  
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link id="shortcodes-css" rel="stylesheet" href="shortcodes.css" type="text/css" media="all"/>
	<link id="skin-css" rel="stylesheet" href="skins/skyblue/style.css" type="text/css" media="all"/>
	<link id="layer-slider" rel="stylesheet"  href="css/layerslider.css" media="all" />
	
	<!-- **Additional - stylesheets** -->
	<link rel="stylesheet" href="responsive.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/animations.css" type="text/css" media="all" />
	
	<!-- **Font Awesome** -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
	
	<!-- **Google - Fonts** -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>  
	<link rel="stylesheet" href="css/fonts.css" />
	
	<!-- **Custom stylesheets** -->
	<link rel="stylesheet"  href="css/custom.css" media="all" />
	<link rel="stylesheet"  href="css/czsk-wiki-font.css" media="all" />
</head>

<body>
<div class="loader-wrapper">
	<div id="loader-image"></div>
</div>
<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
		<div id="header-wrapper">
			<!-- **Header** -->

			<?php include ("contents/header.html"); ?>

			<!-- **Header - End** -->
		</div>

		<!-- **Main - Starts** --> 
		<div id="main">
			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>Cccam</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-book"></span>
							<a href="#">Emulátory</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">CCcam</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Container starts-->
			<div class="container">
				<div class="dt-sc-margin70"></div>
				<!-- **secondary - starts** --> 
				<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">
					
				<?php include ("contents/cccam-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 22.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcamInfoPhp v1.02</h4>
							<p><strong>CCcamInfoPhp v1.02</strong> je PHP aplikace pro PC s vylepšeným webovým rozhraním CCcamu, která pracuje pod Apache serverem. Z toho vyplývá, že v případě spuštění např. pod Windows je nutné instalovat nejdříve XAMPP.</p>
							<p><u>Výhody a nevýhody CCcamInfoPhp oprotí základnímu webovému rozhraní CCcamu:</u> </p>
								<ul class="dt-sc-lmarg25">
									<li><i class="fa fa-plus size14px margright5px"></i> Barevné grafické zpracování je mnohem příjemnější než strohý textový výstup <i>(Ale CCcam pracuje s daty a ne s grafikou)</i>.</li>
									<li><i class="fa fa-plus size14px margright5px"></i> Zobrazení pingu CCcamu na další server</li>
									<li><i class="fa fa-plus size14px margright5px"></i> CCcamInfoPhp podporuje třídění v tabulkách</li>
									<li><i class="fa fa-minus size14px margright5px"></i> v1.02 stále nepodporuje automatické obnovení stránky pro načtení dat.</li>
								</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Ke stažení</h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="downloads/cccam/tools_software/CCcamInfoPHP/CCcamInfoPhp_v1.02.zip" target="_blank">CCcamInfoPhp v1.02</a><br>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Instalace</h4>
							<p>Aby PHP aplikace správně pracovala musíme nejdříve provést následující kroky:</p>
							<ol class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>Stáhnout soubor "CCcamInfoPhp_v1.02.zip"</li>
								<li>Instalovat XAMPP</li>
								<li>Zkopívat složku "CCcamInfoPhp_v1.02" ze staženého souboru do složky "htdocs" ve složce kam jsme instalovali XAMPP</li>
								<li>Spustit prohlížeč a zadat do příkazového řádku "http://localhost/CCcamInfoPhp_v1.02</li>								
							</ol>
							<p>Po provedení všech kroků se nám zobrazí titulní webová stránka CCcamInfoPhp s konfigurací připojení.</p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_08.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_08.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Úvodní stránka CCcamInfoPhp s konfigurací</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>
							<p>Vyplníme potřebné údaje a klikneme na "Save configuration". CCcamInfoPhp se připojí na CCcam a zobrazí se webové rozhraní CCcamu ve vylepšené podobě.</p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_09.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_09.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Úvodní stránka CCcamInfoPhp</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>
							<p><strong>POZNÁMKA:</strong> CCcamInfoPhp používá následující soubory, které je potřebné občas aktualizovat</p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>CCcam.providers</li>
								<li>CCcam_fake.providers</li>
								<li>CCcam_used.providers</li>
							</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4><span class="fa icon-icon_light"></span> Tipy</h4>
							<p><strong>1. Manuální update dat z CCcam serveru</strong></p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_12.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_12.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Manuální update dat</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>

							<p><strong>2. Testování pingu</strong></p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_10.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_10.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Testování pingu</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>

							<p><strong>3. Zobrazení více informací na titulní stránce</strong></p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_11.gif" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_11.gif" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Více info na titulní stránce</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->   
		</div> <!-- **Main - Ends** --> 
		
		<!-- **Footer** -->
		<footer id="footer">

<?php include ("contents/footer.html"); ?>

		</footer> <!-- **Footer - End** -->
		
	</div><!-- **inner-wrapper - End** -->
	
</div><!-- **Wrapper - End** -->

	<!-- **jQuery** -->  
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="js/jquery-migrate.min.js"></script> 
	
	<script src="js/preloader.js" type="text/javascript"></script>
	<script src="js/pace.min.js" type="text/javascript"></script>
	
	<script src="js/jquery.tabs.min.js"></script>
	<script src="js/jquery.tipTip.minified.js"></script>
	
	<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
	
	<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
	
	<script src="js/jquery.inview.js" type="text/javascript"></script>
	<script src="js/jquery.viewport.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	
	<script src="js/layerslider.transitions.js"></script> 
	<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
	<script src="js/greensock.js"></script> 
	
	<script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script><script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_9','jquery'); } else { lsjQuery("#layerslider_9").layerSlider({responsiveUnder: 1240, layersContainer: 1170, startInViewport: false, pauseOnHover: false, forceLoopNum: false, autoPlayVideos: false, skinsPath: 'js/layerslider/skins/'}) } }); </script>
	
	<script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
	
	<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	
	<script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
	
	<script src="js/responsive-nav.js" type="text/javascript"></script>
	<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
	
	<!-- **Sticky Nav** -->
	<script src="js/jquery.sticky.js" type="text/javascript"></script>
	
	<!-- **To Top** -->
	<script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	
	<script src="js/custom.js" type="text/javascript"></script>
		  

</body>
</html>