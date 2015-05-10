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
								<p><span class="fa fa-calendar"> </span> Datum: 10.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Binární soubory CCcam- pro jednotlivé image</h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<p><strong>Cccam 2.3.0. pro VTi image - Enigma 2</strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Ke stažení</u></p>
									<p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_VTi/enigma2-plugin-cam-cccam-v2.3.0_e2_vti.ipk">E2 Cccam 2.3.0 VTi</a></p>
									<p><u>Obsah instalátoru</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
										<li>Startscript "CCcam2.3.0_cam.sh" (bude uložen do "usr/script")</li>
										<li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
										<li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "etc/")</li>
									</ul>
								</div>
								
								<p><strong>Cccam 2.3.0. pro OpenPli image - Enigma 2</strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Ke stažení</u></p>
									<p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_OpenPli/enigma2-plugin-cam-cccam-v2.3.0_e2_pli.ipk">E2 Cccam 2.3.0 OpenPli</a></p>
									<p><u>Obsah instalátoru</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
										<li>Startscript "softcam.CCcam230" (bude uložen do "etc/init.d")</li>
										<li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
										<li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "etc/")</li>
									</ul>
								</div>

								<p><strong>Cccam 2.3.0. pro Black Hole image - Enigma 2</strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Ke stažení</u></p>
									<p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_BlackHole/enigma2-plugin-cam-cccam-v2.3.0_e2_bh.ipk">E2 Cccam 2.3.0 Black Hole</a></p>
									<p><u>Obsah instalátoru</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
										<li>Startscript "Ncam_CCcam2.3.0.sh" (bude uložen do "usr/camscript")</li>
										<li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
										<li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "etc/")</li>
									</ul>
								</div>

								<p><strong>Cccam 2.3.0. pro openATV image - Enigma 2</strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Ke stažení</u></p>
									<p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_openATV/enigma2-plugin-cams-cccam-2.3.0_openatv_all.ipk">E2 Cccam 2.3.0 openATV</a></p>
									<p><u>Obsah instalátoru</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
										<li>Startscript "Ncam_CCcam_2.3.0.sh" (bude uložen do "usr/camscript")</li>
										<li>Konfigurační soubor "CCcam.cfg" (bude uložen do "usr/keys")</li>
										<li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "usr/keys")</li>
									</ul>
								</div>

								<p><strong>Cccam 2.3.0. pro ViX image - Enigma 2</strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Ke stažení</u></p>
									<p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_ViX/enigma2-plugin-cams-cccam.2.3.0_1.0_mipsel.ipk">E2 Cccam 2.3.0 ViX</a></p>
									<p><u>Obsah instalátoru</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li>Binární soubor "CCcam.2.3.0" (bude uložen do složky "usr/softcams")</li>
										<li>Startscript není přiložen</li>
										<li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
										<li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
									</ul>
								</div>

								<p><strong>Cccam 2.3.0. pro Newnigma2 image - Enigma 2</strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Ke stažení</u></p>
									<p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_Newnigma2/newnigma2-camd-cccam2.3.0_2.3.0-r0_mipsel.ipk">E2 Cccam 2.3.0 Newnigma2</a></p>
									<p><u>Obsah instalátoru</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
										<li>Startscript "CCcam2_3_0.emu" (bude uložen do "usr/script")</li>
										<li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
										<li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
									</ul>
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
