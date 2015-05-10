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

	<!-- **jQuery** -->  
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.base64.js" type="text/javascript"></script>
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
						<h1>OSCam</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="#">Emulátory</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">OSCam</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Container starts-->
			<div class="container">
				<div class="dt-sc-margin70"></div>
				<!-- **secondary - starts** --> 
				<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">
					
					<?php include ("contents/oscam-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 29.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<h4>OSCam RSA a Box klíče</h4>
							<!-- Encode string to Base64 from http://support.nightlydev.org/base64 -->
							<p>V OSCamu pojmenováno jako camkey a camdata</p>
							<hr>
							<div>
								<div class="dt-sc-one-fifth info_warning_alert_tip_block"><i class="fa fa-warning"></i> <strong>DŮLEŽITÉ: </strong></div>
								<div class="dt-sc-five-sixth info_warning_alert_tip_right">
									<p>Pro zobrazení správného klíče klikneme na "Dekódovat klíče". Všechny zobrazené klíče jsou zakódované a bez scriptu jej nelze dekódovat <i class="fa icon-icon_smile_wink" style="font-size:21px;margin:0 10px"></i></p>
								</div>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>OSCam RSA a Box klíče - dostupné internetové zdroje</h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<p>
									Mbremer.de<br>
									<a href="http://wiki.mbremer.de/index.php?title=Hauptseite/Smartcard/Kartenuebersicht" target="_blank">http://wiki.mbremer.de/index.php?title=Hauptseite/Smartcard/Kartenuebersicht</a><br>
									<a href="http://wiki.mbremer.de/index.php?title=Hauptseite/Smartcard/Infos">http://wiki.mbremer.de/index.php?title=Hauptseite/Smartcard/Infos</a>
								</p>
								<p>
									Vuplus-support.org<br>
									<a href="www.vuplus-support.org/wiki/index.php?title=Smartcards">www.vuplus-support.org/wiki/index.php?title=Smartcards</a>
								</p>
								<p>
									Streamboard.tv<br>
									<a href="http://www.streamboard.tv/oscam/wiki/CardsList">http://www.streamboard.tv/oscam/wiki/CardsList</a>
								</p>
								<p>
									Ipc.pebkac.at<br>
									<a href="http://ipc.pebkac.at/wiki/index.php/CS/OScam_CardList">http://ipc.pebkac.at/wiki/index.php/CS/OScam_CardList</a>
								</p>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>1. Skylink - Irdeto RSA-box Key</h4>
							<p>Testováno - funkční,potvrzeno</p>
							<p><strong>Info o kartě</strong> - zkontrolovat (mám trochu zmatky s ATR pro jednotlivá CAID)</p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - ICE 01 (Cryptoworks 0D96 / Irdeto 0624)</li>
								<li>ATR for CAID 0D96: - 3B 78 12 00 00 54 C4 03 00 8F F1 90 00</li>
								<li>ATR for CAID 0624: - 3B 9F 11 40 60 49 52 44 45 54 4F 20 41 43 53 20 56 36 2E 30</li>
								<li>CAID: - 0D96 / 0624</li>
								<li>CryptoWorks / IRDETO ACS V6.0</li>
								<li>Mhz pro CAID 0D96: - 3.57</li>
								<li>Mhz pro CAID 0624: - 6.00</li>
							</ul>
							<!-- START IMAGE CARD -->
								<p><strong>Karta Skylink ICE CZ</strong></p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 200px;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cards/czech/skylink_ice.jpg" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cards/czech/skylink_ice.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> Skylink ICE karta </a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							<!-- END IMAGE CARD -->

							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - AB722A8CAA9F58DE0D1CBB6FF329C961ED9DD759B103082D1BAE64C27A861D42E7F631891C2660EFA57484F80BBB4E0E8249A8368E31BD3FFC369FBE95160528 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb0" class="code" rows="2" readonly>QUI3MjJBOENBQTlGNThERTBEMUNCQjZGRjMyOUM5NjFFRDlERDc1OUIxMDMwODJEMUJBRTY0QzI3QTg2MUQ0MkU3RjYzMTg5MUMyNjYwRUZBNTc0ODRGODBCQkI0RTBFODI0OUE4MzY4RTMxQkQzRkZDMzY5RkJFOTUxNjA1Mjg=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - B1B2B3B4B5B6B7B8 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb1" class="code" rows="1" readonly>QjFCMkIzQjRCNUI2QjdCOA==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb1" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode0-1" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode0-1').click(function(){
										jQuery('textarea#b64-lb0').val(Base64.decode(jQuery('textarea#b64-rb0').val()));
										jQuery('textarea#b64-lb1').val(Base64.decode(jQuery('textarea#b64-rb1').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
[reader]
label 			= skylink_irdeto
protocol 		= internal
device 			= /dev/sci0
caid 			= 0624
rsakey 			= AB72......0528
boxkey 			= B1.........B8
force_irdeto 		= 1
needsemmfirst 		= 1
detect 			= cd
mhz 			= 600
group 			= 1
emmcache 		= 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>2. Slovakia - Irdeto (PLUSTELKA KARTA) RSA-box Key</h4>
							<p>Testováno na CAID 0668 - Slovak DVB-T karta (informace dostupná z fór)</p>
							<!-- START IMAGE CARD -->
								<p><strong>Karta Plustelka SK</strong></p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 200px;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cards/slovakia/Plustelka_karta.jpg" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cards/slovakia/Plustelka_karta.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> Plustelka karta </a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							<!-- END IMAGE CARD -->

							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - 2598FE21A1CEF05BBC459F495FCE8F1E811B126FA8933D8DDB6480A93D43CFA7255F009E875814BECF53DA7610D675D20EEBA8A212F9079CBD1D2FAD65362B42 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb2" class="code" rows="2" readonly>MjU5OEZFMjFBMUNFRjA1QkJDNDU5RjQ5NUZDRThGMUU4MTFCMTI2RkE4OTMzRDhEREI2NDgwQTkzRDQzQ0ZBNzI1NUYwMDlFODc1ODE0QkVDRjUzREE3NjEwRDY3NUQyMEVFQkE4QTIxMkY5MDc5Q0JEMUQyRkFENjUzNjJCNDI=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb2" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - 4FD3B1C6E406AA69 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb3" class="code" rows="1" readonly>NEZEM0IxQzZFNDA2QUE2OQ==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb3" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode2-3" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode2-3').click(function(){
										jQuery('textarea#b64-lb2').val(Base64.decode(jQuery('textarea#b64-rb2').val()));
										jQuery('textarea#b64-lb3').val(Base64.decode(jQuery('textarea#b64-rb3').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
[reader]
label 			= plustelka_irdeto
protocol 		= internal
device 			= /dev/sci0
caid 			= 0668
rsakey 			= 2598......2B42
boxkey 			= 4F.........69
detect 			= cd
group 			= 1
								</pre>	
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>3. ORF ICE Irdeto RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - ICE 01 (Cryptoworks 0D05 / Irdeto 0648)</li>
								<li>ATR for CAID 0D05: </li>
								<li>ATR for CAID 0648: </li>
								<li>CAID: - 0D05 / 0648</li>
								<li>Mhz pro CAID 0D05: - 3.57</li>
								<li>Mhz pro CAID 0648: - 6.00</li>
							</ul>
							<!-- START IMAGE CARD -->
								<p><strong>Karta ORF Cryptoworks a ORF ICE</strong> - zobrazení vzhledu karet ORF</p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 200px;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cards/austria/orf_crypto_ice.jpg" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cards/austria/orf_crypto_ice.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> Cryptoworks a ICE </a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							<!-- END IMAGE CARD -->

							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - DF57B08C0F13E67BD17AD37EAAF4EAA25393F8A0EFE8ACE6708AAF97C985CBA8A6C13826963BD3092EB9FC72F773A430724706AA5E1D14E1747842D32069A12D -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb4" class="code" rows="2" readonly>REY1N0IwOEMwRjEzRTY3QkQxN0FEMzdFQUFGNEVBQTI1MzkzRjhBMEVGRThBQ0U2NzA4QUFGOTdDOTg1Q0JBOEE2QzEzODI2OTYzQkQzMDkyRUI5RkM3MkY3NzNBNDMwNzI0NzA2QUE1RTFEMTRFMTc0Nzg0MkQzMjA2OUExMkQ=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb4" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - 1122334455667788 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb5" class="code" rows="1" readonly>MTEyMjMzNDQ1NTY2Nzc4OA==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb5" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode4-5" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode4-5').click(function(){
										jQuery('textarea#b64-lb4').val(Base64.decode(jQuery('textarea#b64-rb4').val()));
										jQuery('textarea#b64-lb5').val(Base64.decode(jQuery('textarea#b64-rb5').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení externí čtečky OSCamu</strong></p>
							<div>
								<pre>
# ORF Ice Irdeto im unteren internen Schacht
[reader]
label 			= orfice_irdeto
protocol 		= mouse
device 			= /dev/USB1
boxid 			= 12345678
rsakey 			= DF57......A12D
boxkey 			= 11.........88
force_irdeto		= 1
detect 			= cd
mhz 			= 600
cardmhz 		= 357
caid 			= 0648
ident 			= 0648:000000
group 			= 1
emmcache 		= 1,2,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>4. HD+ HD01 Nagra (bílá karta) RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - Nagra</li>
								<li>ATR: - 3F FF 95 00 FF 91 81 71 FE 47 00 44 4E 41 53 50 31 34 32 20 52 65 76 47 43 34 63 </li>
								<li>CAID: - 1830</li>
								<li>ROM Version: - DNASP142</li>
								<li>Revision: - RevGC4</li>
								<li>Mhz: - 3.68</li>
							</ul>
							<!-- START IMAGE CARD -->
								<p><strong>Karta HD+ Nagra</strong></p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 200px;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cards/austria/hd+_hd01.jpg" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cards/austria/hd+_hd01.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> Karta HD+ Nagra </a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							<!-- END IMAGE CARD -->

							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - BF358B5461863130686FC933FB541FFCED682F3680F09DBC1A23829FB3B2F766B9DD1BF3B3ECC9AD6661B753DCC3A9624156F9EB64E8168EF09E4D9C5CCA4DD5 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb6" class="code" rows="2" readonly>QkYzNThCNTQ2MTg2MzEzMDY4NkZDOTMzRkI1NDFGRkNFRDY4MkYzNjgwRjA5REJDMUEyMzgyOUZCM0IyRjc2NkI5REQxQkYzQjNFQ0M5QUQ2NjYxQjc1M0RDQzNBOTYyNDE1NkY5RUI2NEU4MTY4RUYwOUU0RDlDNUNDQTRERDU=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb6" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A7642F57BC96D37C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb7" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb7" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode6-7" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode6-7').click(function(){
										jQuery('textarea#b64-lb6').val(Base64.decode(jQuery('textarea#b64-rb6').val()));
										jQuery('textarea#b64-lb7').val(Base64.decode(jQuery('textarea#b64-rb7').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
# HD01 im unteren internen Schacht
[reader]
label = hdplus-weiße-Karte(Kartenschacht-unten)
device = /dev/sci0
protocol = internal
caid = 1830
rsakey = BF35......4DD5
boxkey = A7.........7C
detect = cd
mhz = 368
cardmhz = 368
group = 1
emmcache = 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>5. HD+ HD02 (černá karta) RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - Nagra</li>
								<li>ATR: - 3F FF 95 00 FF 91 81 71 A0 47 00 44 4E 41 53 50 31 38 30 20 4D 65 72 30 30 30 28 </li>
								<li>CAID: - 1843</li>
								<li>ROM Version: - DNASP 180</li>
								<li>Revision: - Mer000</li>
								<li>CAM IDent: - UA:0x51xxxxxx </li>
								<li>Mhz: - 3.68</li>
							</ul>
							<!-- START IMAGE CARD -->
								<p><strong>Karta HD+ Nagra</strong></p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 200px;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cards/austria/hd+_hd02.jpg" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cards/austria/hd+_hd02.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> Karta HD+ Nagra </a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							<!-- END IMAGE CARD -->

							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - BF358B5461863130686FC933FB541FFCED682F3680F09DBC1A23829FB3B2F766B9DD1BF3B3ECC9AD6661B753DCC3A9624156F9EB64E8168EF09E4D9C5CCA4DD5 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb8" class="code" rows="2" readonly>QkYzNThCNTQ2MTg2MzEzMDY4NkZDOTMzRkI1NDFGRkNFRDY4MkYzNjgwRjA5REJDMUEyMzgyOUZCM0IyRjc2NkI5REQxQkYzQjNFQ0M5QUQ2NjYxQjc1M0RDQzNBOTYyNDE1NkY5RUI2NEU4MTY4RUYwOUU0RDlDNUNDQTRERDU=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb8" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A7642F57BC96D37C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb9" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb9" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode8-9" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode8-9').click(function(){
										jQuery('textarea#b64-lb8').val(Base64.decode(jQuery('textarea#b64-rb8').val()));
										jQuery('textarea#b64-lb9').val(Base64.decode(jQuery('textarea#b64-rb9').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
# HD02 im unteren internen Schacht
[reader]
label = hdplus-schwarze-Karte(Kartenschacht-unten)
device = /dev/sci0
protocol = internal
caid = 1843
rsakey = BF35......4DD5
boxkey = A7.........7C
detect = cd
mhz = 368
cardmhz = 368
group = 1
emmcache = 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>6. Kabel Deutschland D09 RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: </li>
								<li>ATR: - 3B 9F 21 0E 49 52 44 45 54 4F 20 41 43 53 03 84 55 FF 80 6D
								<li>CAID: - 1834</li>
								<li>ROM Version: - DNASP122</li>
								<li>Revision: - RevF46</li>
								<li>Mhz: - 3.68</li>
							</ul>
							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - 8A54468867159C1188D13ACE7DF348FA08BDF8BE33F1B2F72F74FBCD184C825519E517E3494A6DD8CF046630456111F952979DECCFF5176D890AE93F4E267711 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb10" class="code" rows="2" readonly>OEE1NDQ2ODg2NzE1OUMxMTg4RDEzQUNFN0RGMzQ4RkEwOEJERjhCRTMzRjFCMkY3MkY3NEZCQ0QxODRDODI1NTE5RTUxN0UzNDk0QTZERDhDRjA0NjYzMDQ1NjExMUY5NTI5NzlERUNDRkY1MTc2RDg5MEFFOTNGNEUyNjc3MTE=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb10" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - 6660A9AE55A4847B -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb11" class="code" rows="1" readonly>NjY2MEE5QUU1NUE0ODQ3Qg==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb11" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode10-11" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode10-11').click(function(){
										jQuery('textarea#b64-lb10').val(Base64.decode(jQuery('textarea#b64-rb10').val()));
										jQuery('textarea#b64-lb11').val(Base64.decode(jQuery('textarea#b64-rb11').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
# D09 im unterer internen Schacht
[reader]
label = D09-Kabel-D(Kartenschacht-unten)
device = /dev/sci0
protocol = internal
caid = 1834
ident = 1834:000000
rsakey = 8A54......7711
boxkey = 66.........7B
detect = cd
mhz = 369
cardmhz = 369
group = 1
emmcache = 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>7. UM01 Germany Cable RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - Nagravision</li>
								<li>ATR: - 3F FF 95 00 FF 91 81 71 FE 47 00 44 4E 41 53 50 31 31 30 20 52 65 76 41 32 31 16
								<li>CAID: - 1831</li>
								<li>ROM Version: - DNASP110</li>
								<li>Revision: - RevA21</li>
								<li>Mhz: - 3.68</li>
							</ul>
							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - B55E0EB0562805F1788BDA0CD8B856BF696CFF1CBF4ED62B85E643F385B0F8899275DEA669AC77BDA43A20CCB844A3AF5A2BE0622779FAB153D156957DF367FF -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb12" class="code" rows="2" readonly>QjU1RTBFQjA1NjI4MDVGMTc4OEJEQTBDRDhCODU2QkY2OTZDRkYxQ0JGNEVENjJCODVFNjQzRjM4NUIwRjg4OTkyNzVERUE2NjlBQzc3QkRBNDNBMjBDQ0I4NDRBM0FGNUEyQkUwNjIyNzc5RkFCMTUzRDE1Njk1N0RGMzY3RkY=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb12" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A7642F57BC96D37C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb13" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb13" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode12-13" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode12-13').click(function(){
										jQuery('textarea#b64-lb12').val(Base64.decode(jQuery('textarea#b64-rb12').val()));
										jQuery('textarea#b64-lb13').val(Base64.decode(jQuery('textarea#b64-rb13').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
# UM01 im unteren internen Schacht
[reader]
label = UM01(Kartenschacht-unten)
device = /dev/sci0
protocol = internal
caid = 1831
ident = 1831:000000,000401,001103
rsakey = B55E......67FF
boxkey = A7.........7C
detect = cd
mhz = 368
cardmhz = 368
ecmwhitelist = 1831:4A
group = 1
emmcache = 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>8. UM02 Germany Cable RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - Nagravision</li>
								<li>ATR: - 3F FF 95 00 FF 91 81 71 FE 47 00 44 4E 41 53 50 31 34 32 20 52 65 76 47 43 32 65
								<li>CAID: - 1838</li>
								<li>ROM Version: - DNASP142</li>
								<li>Revision: - RevGC2</li>
								<li>Mhz: - 3.68</li>
							</ul>
							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - B55E0EB0562805F1788BDA0CD8B856BF696CFF1CBF4ED62B85E643F385B0F8899275DEA669AC77BDA43A20CCB844A3AF5A2BE0622779FAB153D156957DF367FF -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb14" class="code" rows="2" readonly>QjU1RTBFQjA1NjI4MDVGMTc4OEJEQTBDRDhCODU2QkY2OTZDRkYxQ0JGNEVENjJCODVFNjQzRjM4NUIwRjg4OTkyNzVERUE2NjlBQzc3QkRBNDNBMjBDQ0I4NDRBM0FGNUEyQkUwNjIyNzc5RkFCMTUzRDE1Njk1N0RGMzY3RkY=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb14" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A7642F57BC96D37C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb15" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb15" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode14-15" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
								<script type="text/javascript">
									jQuery('button#b64-decode14-15').click(function(){
										jQuery('textarea#b64-lb14').val(Base64.decode(jQuery('textarea#b64-rb14').val()));
										jQuery('textarea#b64-lb15').val(Base64.decode(jQuery('textarea#b64-rb15').val()));
									});

								</script>
							<!-- END DECODE RSA AND BOX KEY -->
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
# UM02 im unteren internen Schacht
[reader]
label = UM02(Kartenschacht-unten)
device = /dev/sci0
protocol = internal
caid = 1838
ident = 1838:000000,1838:000401,1838:001103
rsakey = B55E......67FF
boxkey = A7.........7C
detect = cd
mhz = 368
cardmhz = 368
ecmwhitelist = 1838:92
group = 1
emmcache = 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>9. Raduga Irdeto RSA-box Key</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<!-- START DECODE RSA AND BOX KEY -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - CAFB64CA970D10DEDF769EDA1A570713C50BE71CA871194FF5820BF7B54606BBB8EC7A1D51B1649A3ED222B53EC58F5638F1E2699F509F3089AFE291CAF5E23C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb16" class="code" rows="2" readonly>Q0FGQjY0Q0E5NzBEMTBERURGNzY5RURBMUE1NzA3MTNDNTBCRTcxQ0E4NzExOTRGRjU4MjBCRjdCNTQ2MDZCQkI4RUM3QTFENTFCMTY0OUEzRUQyMjJCNTNFQzU4RjU2MzhGMUUyNjk5RjUwOUYzMDg5QUZFMjkxQ0FGNUUyM0M=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb16" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A0A1A2A3A4A5A6A7 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb17" class="code" rows="1" readonly>QTBBMUEyQTNBNEE1QTZBNw==</textarea>
									<p>Dekódovaný Box key</p>
									<textarea id="b64-lb17" class="code" rows="1" readonly></textarea>
								</div>
								
								<div style="width:100%;text-align:center;padding-bottom: 52px;">
									<button type="button" title="Decode" id="b64-decode16-17" style="margin:0px 15px;"><span><span>Dekódovat klíče</span></span></button>
								</div>
							<!-- END DECODE RSA AND BOX KEY -->

						</div>
						<script type="text/javascript">
							jQuery('button#b64-decode16-17').click(function(){
								jQuery('textarea#b64-lb16').val(Base64.decode(jQuery('textarea#b64-rb16').val()));
								jQuery('textarea#b64-lb17').val(Base64.decode(jQuery('textarea#b64-rb17').val()));
							});
						</script>

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
