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
							<span class="fa fa-cube"></span>
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
								<p><span class="fa fa-calendar"> </span> Datum: 8.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam.channelinfo</h4>
							<p>Konfigurační soubor k zobrazení jména programu na místo CAID:IDENT:SID ve webovém rozhraní a logovacích souborech</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Formát zápisu</h4>
							<div class="dt-sc-four-fifth">
								<pre class="brush: text;">
# Zakomentovaný řádek CCcam neakceptuje
# Poznámku můžeme ale nemusíme zapisovat
# Za kódovací systém můžeme,ale nemusíme zapsat i CAID provideru nebo ID

CAID:ID:SID "Název_programu (poznámka) [Kódovací_systém CAID ID]"
								</pre>
							</div>
							<h4>Seznam zkratek kódovacích systémů používaných v CCcam.channelinfo</h4>
							<div>
								<table class="cccam_wikitable_channelinfo" style="margin-bottom: 20px">
									<tr>
										<th>Zkratka</th>
										<th>Popis kódovacího systému</th>
										<th>Příklad</th>
									</tr>
									<tr>
										<td><strong>Cryptoworks systém</strong></td>
									</tr>
									<tr>
										<td>[CW]</td>
										<td>Cryptoworks</td>
										<td>0D03:000000:1F43 "Skylink - CT 1 [CW]"</td>
									</tr>
									<tr>
										<td>[CW 00 0D05]</td>
										<td>Cryptoworks pro CAID 0D05 a ID 000000</td>
										<td>0D05:000000:33FD "ORF Digital - ORF Sport + HD [CW 00 0D05]" </td>
									</tr>
									<tr>
										<td>[CW 04 0D05]</td>
										<td>Cryptoworks pro CAID 0D05 a ID 000004</td>
										<td>0D05:000004:33FD "ORF Digital - ORF Sport + HD [CW 04 0D05]" </td>
									</tr>
									<tr>
										<td>[CW2]</td>
										<td>Cryptoworks (<i>zatím nevím co znamená číslo "2"</i>)</td>
									</tr>
									<tr>
										<td><strong>Irdeto systém</strong></td>
									</tr>
									<tr>
										<td>[I]</td>
										<td>Irdeto</td>
									</tr>
									<tr>
										<td>[I 0648]</td>
										<td>Irdeto pro Caid 0648</td>
									</tr>	
									<tr>
										<td>[I2]</td>
										<td>Irdeto 2</td>
										<td>0624:000000:1F43 "Skylink - CT 1 [I2]"</td>
									</tr>
									<tr>
										<td><strong>Nagravision systém</strong></td>
									</tr>
									<tr>
										<td>[N1]</td>
										<td>Nagravision 1</td>
									</tr>
									<tr>
										<td>[N2]</td>
										<td>Nagravision 2</td>
									</tr>
									<tr>
										<td>[N3]</td>
										<td>Nagravision 3</td>
									</tr>
									<tr>
										<td>[N3 1833]</td>
										<td>Nagravision 3 pro CAID 1833</td>
										<td>1861:000000:1CCF "CyfrowyPolsat - Fox Comedy [N3 1861]" </td>
									</tr>
									<tr>
										<td>[N3 ROM180]</td>
										<td></td>
									</tr>
									<tr>
										<td><strong>Videoguard systém</strong></td>
									</tr>
									<tr>
										<td>[NDS]</td>
										<td>Videoguard</td>
									</tr>
									<tr>
										<td>[NDS 09C4]</td>
										<td>Videoguard pro CAID 09C4</td>
										<td>09C4:000000:33FD "ORF Digital - ORF Sport + HD [NDS 09C4]"<br>
											098C:000000:33FD "ORF Digital - ORF Sport + HD [NDS 098C]"</td>
									</tr>
									<tr>
										<td>[NDS3]</td>
										<td>Videoguard</td>
									</tr>
									<tr>
										<td><strong>Betacrypt systém</strong></td>
									</tr>
									<tr>
										<td>[B Sat]</td>
										<td>Betacrypt pro satelitní programy (Sky De)</td>
									</tr>
									<tr>
										<td>[B Sat 1702]</td>
										<td>Betacrypt pro CAID 1702 (Sky De)</td>
										<td>1702:000000:157F "Sky Germany - Deluxe Music HD [B Sat 1702]"</td>
									</tr>
									<tr>
										<td>[B Kab]</td>
										<td>Betacrypt pro kabelové programy (Kabel Deutschland)</td>
									</tr>
									<tr>
										<td>[B Kab 1722]</td>
										<td>Betacrypt pro CAID 1722 (Kabel Deutschland)</td>
									</tr>
									<tr>
										<td><strong>Mediaguard systém</strong></td>
									</tr>
									<tr>
										<td>[S1]</td>
										<td></td>
									</tr>
									<tr>
										<td>[S2]</td>
										<td>Mediaguard 2</td>
									</tr>
									<tr>
										<td>[S3]</td>
										<td>Mediaguard 3</td>
									</tr>
									<tr>
										<td>[S/Nagra]</td>
										<td></td>
									</tr>
									<tr>
										<td><strong>Viaccess systém</strong></td>
									</tr>
									<tr>
										<td>[V]</td>
										<td></td>
									</tr>
									<tr>
										<td>[V2]</td>
										<td></td>
									</tr>
									<tr>
										<td>[V2.5] nebo [V25]</td>
										<td></td>
									</tr>
									<tr>
										<td>[V2.6] nebo [V26]</td>
										<td>Viaccess 2.6</td>
									</tr>
									<tr>
										<td>[V3] nebo [V30]</td>
										<td>Viaccess 3.0</td>
									</tr>
									<tr>
										<td>[V3&4]</td>
										<td></td>
									</tr>
									<tr>
										<td>[V4] nebo [V40]</td>
										<td>Viaccess 4.0</td>
									</tr>
									<tr>
										<td>[V5]</td>
										<td>Viaccess 5.0</td>
									</tr>
									<tr>
										<td>[V6]</td>
										<td>Viaccess PC 6.0</td>
									</tr>
									<tr>
										<td><strong>Ostatní systémy</strong></td>
									</tr>
									<tr>
										<td>[Bulcrypt]</td>
										<td>Bulcrypt</td>
									</tr>
									<tr>
										<td>[N-UM01]</td>
										<td></td>
									</tr>
									<tr>
										<td>[C]</td>
										<td>Conax</td>
									</tr>
									<tr>
										<td>[CG]</td>
										<td>Cryptoguard AB</td>
									</tr>
									<tr>
										<td>[DRE]</td>
										<td>DRE Crypt</td>
									</tr>
									<tr>
										<td>[PNCS]</td>
										<td>Panaccess Systems GmbH</td>
									</tr>
									<tr>
										<td>[Seca3]</td>
										<td>Seca</td>
									</tr>
									<tr>
										<td>[***]</td>
										<td>Neznámý kódovací systém</td>
									</tr>
									<tr>
										<td>[*** 098C]</td>
										<td>Neznámý kódovací systém pro CAID 098C</td>
										<td>0960:000000:0F46 "Sky Digital - Sky Sports 2 HD [*** 0960]"</td>
									</tr>
									<tr>
										<td><strong>Emulace</strong></td>
									</tr>
									<tr>
										<td>[EMU-CW]</td>
										<td>Emulace Cryptoworks klíčů ze Softcam.key</td>
										<td>0D03:000000:1F43 "Skylink - CT 1 [EMU-CW]"</td>
									</tr>
								</table>
							</div>						
							<h4>Příklady</h4>
							<div class="dt-sc-four-fifth dt-sc-lmarg25">
								<pre>
# Příklad zápisu pro Skylink

# Příklad 1  - základní zápis
0D03:000000:1F43 "Skylink - CT 1"
0D03:000000:1F44 "Skylink - CT 2"
0D03:000000:13AB "Skylink - TV Barrandov"

# Příklad 2 - zápis pro cryptovací systém
0D03:000000:1F43 "Skylink - CT 1 [CW]"
0D03:000000:1F44 "Skylink - CT 2 [CW]"
0D03:000000:13AB "Skylink - TV Barrandov [CW]"

# Příklad 3 - zkrácené ID, zápis pro cryptovací systém
0D03:0:1F43 "Skylink - CT 1 [CW]"
0D03:0:1F44 "Skylink - CT 2 [CW]"
0D03:0:13AB "Skylink - TV Barrandov [CW]"

# Příklad 4 - zkrácené ID, zápis pro cryptovací systém + ID + CAID
0D03:0:1F43 "Skylink - CT 1 [CW 00 0D03]"
0D03:0:1F44 "Skylink - CT 2 [CW 00 0D03]"
0D03:0:13AB "Skylink - TV Barrandov [CW 00 0D03]"

# Příklad 5 - zkrácené ID, zápis pro cryptovací systém + CAID
0624:0:1F43 "Skylink - CT 1 [I2 0624]"
0624:0:1F44 "Skylink - CT 2 [I2 0624]"
0624:0:13AB "Skylink - TV Barrandov [I2 0624]"

# Příklad 6 - zkrácené ID, poznámka, zápis pro cryptovací systém + CAID
0624:0:6FF3 "Skylink - MTV ROCKS (Astra 19,2) [I2 0624]"
								</pre>
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
