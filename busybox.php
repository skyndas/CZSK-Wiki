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
						<h1>BusyBox</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">BusyBox</span>
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
							<li> <a href="busybox.php">O Busyboxu</a> </li>
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
									<p><span class="fa fa-calendar"> </span> Datum: 2.5.2015</p>
								</div> <!-- **entry-meta-data - Ends** -->
							</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Základní příkazy busyboxu</h4>
							<p>Zde uvedené příkazy busyboxu jsou platné příkazy pro boxy enigma a v jednotlivých verzí busyboxu se mohou lišit.</p>
							<p><strong>O busyboxu</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Výpis všech dostupných příkazů použitelných v busyboxu</p>
								<div class="dt-sc-one">
									<code>
busybox
									</code>
								</div>
								<p>Výpis všech dostupných příkazů použitelných v busyboxu  - uspořádání do seznamu</p>
								<div class="dt-sc-one">
									<code>
busybox --list
									</code>
								</div>
								<p>Zobrazení verze busyboxu</p>
								<div class="dt-sc-one">
									<code>
busybox | head
									</code>
								</div>
							</div>
							<p><strong>Ovládání enigma boxu</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Restart boxu</p>
								<div class="dt-sc-one">
									<code>
reboot
									</code>
								</div>
								<p>Vypnutí boxu do Standby modu</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/powerstate?newstate=0
									</code>
								</div>
								<p>Zapnutí boxu ze Standby modu</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/remotecontrol?command=116
									</code>
								</div>
								<p>Restart boxu</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/powerstate?newstate=2
									</code>
								</div>
								<p>Restart enigmy</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/powerstate?newstate=3
									</code>
								</div>
							</div>
							<p><strong>Busybox - základní navigace</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Návrat do domácího ($HOME) adresáře</p>
								<div class="dt-sc-one">
									<code>
cd
									</code>
								</div>
								<p>Změna specifického adresáře
								<div class="dt-sc-one">
									<code>
cd /path/to/directory
									</code>
								</div>
								<p>Návrat o jeden adresář výšše z aktuálního adresáře</p>
								<div class="dt-sc-one">
									<code>
cd ..
									</code>
								</div>
							</div>
							<p><strong>Vytvoření nového adresáře</strong></p>
							<div class="dt-sc-lmarg25">
								<div class="dt-sc-one">
									<code>
mkdir [new_folder]
									</code>
								</div>
							</div>
							<p><strong>Smazání adresáře</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Smazání prázdného adresáře</p>
								<div class="dt-sc-one">
									<code>
rmdir [folder]
									</code>
								</div>
							</div>
							<p><strong>Výpis souborů</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Zobrazení souborů a subadresářů v aktuálním adresáři</p>
								<div class="dt-sc-one">
									<code>
ls
									</code>
								</div>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Dokumenty ke stažení</h4>
							<ul>
								<li><img src="images/icons/icon_file-pdf-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/busybox/BusyBox.pdf" title="" target="_blank">Seznam příkazů v BusyBoxu</a></li>
							</ul>
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
