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
						<h1>sBox</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="#">Emulátory</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">sBox</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Container starts-->
			<div class="container">
				<div class="dt-sc-margin70"></div>
				<!-- **secondary - starts** --> 
				<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">
					<aside class="widget widget_product_categories">
						<h3>Kategorie</h3>
						<ul>
							<li> <a href="sbox-index.php">O sBoxu</a> </li>
							<li> <a href="sbox-history.php">Historie</a> </li>
							<li> <a href="sbox-binary.php">Binární soubory</a> </li>
						</ul>   
					</aside>     
				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 14.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Datum vzniku</h4>
							<p><strong>sBox</strong> vznikl kolem roku 2009 a je od španělského tvůrce "EDK" ze soukromého sektoru. Zdrojové kódy nejsou známy a vývoj stále trvá. </p>
						</div>
						
						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>O sBoxu</h4>
							<p>sBox je softcam jež byl vyvinut speciálně pro poskytování podpory nových karet Nagravision 3. I když se specializuje na Nagravision, dnes projekt dospěl tak daleko, že podporuje širokou škálu šifrování Nagravision Systeme.</p>
							<p>Od verze <strong>0.0.4-6</strong> používá sBox také webové rozhraní.</p>

							<p><u>Charakteristika sBoxu:</u> </p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>Plná podpora pro Nagravision Systeme </li>
								<li>DVBapi</li>
								<li>Podporované typy karet: Nagravision 2-3, Viaccess, Seca, Irdeto, NDS, Conax;</li>
								<li>Podporované protokoly: NewCAMD, Radegast a CCcam.</li>
								<li>WebIf - webové rozhraní</li>
							</ul>
						</div>
						
						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Hlavní složky, soubory a porty sBoxu - enigma 2</h4>
							<div class="dt-sc-tabs-vertical-frame-content clearfloat">
								<ul>
									<li><strong>sBoxu.Binary</strong> = chmod 755 (např. sbox.ppc, sbox.mips ...)
										<ul>
											<li>Enigma1 -> <strong>/var/bin</strong> - sbox.ppc</li>
											<li>Enigma2 -> <strong>/usr/bin</strong> - sbox.mips</li>
										</ul>
									</li>
									<li><strong>sBoxu.config</strong> = chmod 644 (sbox.conf, users.sbox, sbox.channelinfo, sbox.portlist)
										<ul>
											<li>Enigma1 -> <strong>/var/bin</strong></li>
											<li>Enigma2 -> <strong>/usr/bin</strong></li>
											<span>Volitelné soubory: sbox.conf, users.sbox, sbox.channelinfo, sbox.portlist</span>
										</ul>
									</li>
									<li><strong>Web Interface (WebIf)</strong> - ANO / základní port 8181</li>
								</ul>
							</div>
							<p><u>Soubory sBoxu: </u></p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>binární soubory sbox</li>
								<li>sbox.conf - hlavní konfigurace</li>
								<li>users.sbox - konfigurace uživatelů</li>
								<li>sbox.channelinfo - seznam kanálů (nepovinné)</li>
								<li>sbox.portlist - soubor se seznamem SIDS (nepovinné)</li>
							</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>WebIf sBoxu</h4>
							<p>Od verze <strong>0.0.4-6</strong> používá sBox také webové rozhraní.</p>
							<div style="width: 300px;" class="portfolio number_text">
							<!-- **portfolio-thumb - Starts** -->
							<div class="portfolio-thumb float image-container">
								<figure>
									<img src="images/sbox/sbox_01.png" alt="image">
									<div class="image-overlay">
										<a class="zoom" href="images/sbox/sbox_01.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
										<div class="portfolio-content">
											<h5> <a href="#"> WebInterface sBoxu v0.0.5-4 6</a> </h5>
											<span class="fa fa-sort-up"></span>
										</div>
									</div>
								</figure>
							</div> <!-- **portfolio-thumb - Ends** -->
						</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Kompletní přehled verzí</h4>
							<p>Vzhledem k tomu, že sBox je vyvýjen v rámci soukromého sektoru a některé verze nemusí být veřejné, je nejkompletnější databáze včech verzí dostupná na následujícím webu:</p>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="http://www.sat-universe.com/forumdisplay.php?f=462&order=desc" target="_blank">http://www.sat-universe.com/forumdisplay.php?f=462&order=desc</a>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Fóra</h4>
							<p>Stále aktuální fórum najdete na adrese:</p>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="http://www.sboxobs.tk/" target="_blank">http://www.sboxobs.tk/</a><br>
								<a href="http://www.tododream.com/foro/sbox/" target="_blank">http://www.tododream.com/foro/sbox/</a>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Tweet</h4>
							<p>sBox má dokonce i svůj vlastní Tweet:</p>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="https://twitter.com/SBox_EMU" target="_blank">https://twitter.com/SBox_EMU</a>
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
