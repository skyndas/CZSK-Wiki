<!-- SWITCH PRO NÁZEV STRÁNKY -->
<?php
	if(!isset($_GET['page'])) {
		$title = "Úvodní stránka";
	}	
	if(isset($_GET['page'])) {
		switch($_GET['page']) {
			case false :
				$title = "Úvodní stránka";
			break;
			case 'home-page' :
				$title = "Úvodní stránka";
			break;
			case 'cccam' :
				$title = "CCcam";
			break;
			case 'cccam-binary' :
				$title = "CCcam - binární soubory";
			break;
			case 'cccam-binary1' :
				$title = "CCcam - binární soubory pro jednotlivé image";
			break;
			case 'cccam-channelinfo' :
				$title = "CCcam - Konfigurace CCcam.channelinfo";
			break;
			case 'cccam-config' :
				$title = "CCcam - Konfigurace CCcam.cfg";
			break;
			case 'cccam-ecm' :
				$title = "CCcam - Ecm.info";
			break;
			case 'cccam-history' :
				$title = "CCcam - Historie";
			break;
			case 'cccam-install' :
				$title = "CCcam - Instalace";
			break;
			case 'cccam-log' :
				$title = "Debug CCcamu";
			break;
			case 'cccam-prio' :
				$title = "CCcam - CCcam.prio";
			break;
			case 'cccam-providers' :
				$title = "CCcam - CCcam.providers";
			break;
			case 'cccam-script' :
				$title = "CCcam - Bash script";
			break;
			case 'cccam-script1' :
				$title = "CCcam - Script č.1 - Update souborů E2";
			break;
			case 'cccam-script2' :
				$title = "CCcam - Script č.2 - Generátor souborů E2";
			break;
			case 'cccam-script3' :
				$title = "CCcam - Ostatní Bash scripty";
			break;
			case 'cccam-startscriptE1' :
				$title = "CCcam - Start script pro E1";
			break;
			case 'cccam-startscriptE2' :
				$title = "CCcam - Start script pro E2";
			break;
			case 'cccam-telnet' :
				$title = "CCcam - Telnet";
			break;
			case 'cccam-todo' :
				$title = "CCcam - TODO list";
			break;
			case 'cccam-tools' :
				$title = "CCcam - CCcamInfoPHP v1.02";
			break;
			case 'cccam-tools1' :
				$title = "CCcam - CCcamInfoPHP v2.57";
			break;
			case 'cccam-webif' :
				$title = "CCcam - WebIf";
			break;
			case 'dyndns' :
				$title = "DynDNS";
			break;
			case 'busybox' :
				$title = "Busybox";
			break;
			case 'historie' :
				$title = "Historie Wiki";
			break;
			case 'mgcamd-index' :
				$title = "MGcamd";
			break;
			default:
				$title = "Stránka nenalezena";
			break;
		}
	}
?>
<!Doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo "CZSK - Wiki :: $title"?></title>
	<meta name="description" content="">
	<meta name="author" content="CZSK Team">
	<meta name="keywords" content="" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	  
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
	<!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="css/basic/style.css" type="text/css" media="all" />
	<link id="shortcodes-css" rel="stylesheet" href="css/basic/shortcodes.css" type="text/css" media="all"/>
	<link id="skin-css" rel="stylesheet" href="skins/skyblue/style.css" type="text/css" media="all"/>
	<link id="layer-slider" rel="stylesheet"  href="css/layerslider.css" media="all" />
	
	<!-- **Additional - stylesheets** -->
	<link rel="stylesheet" href="css/basic/responsive.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/animations.css" type="text/css" media="all" />
	
	<!-- **Font Awesome** -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
	
	<!-- **Google - Fonts** -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>  
	<link rel="stylesheet" href="css/fonts.css" />

	<!-- **Custom stylesheets** -->
	<link rel="stylesheet"  href="css/basic/custom.css" media="all" />
	<link rel="stylesheet"  href="css/czsk-wiki-font.css" media="all" />

	<!-- **SyntaxHighlighter** -->
	<script type="text/javascript" src="js/SyntaxHighlighter/shCore.js"></script>
	<script type="text/javascript" src="js/SyntaxHighlighter/shBrushBash.js"></script>
	<script type="text/javascript" src="js/SyntaxHighlighter/shBrushPlain.js"></script>
	<link type="text/css" rel="stylesheet" href="js/SyntaxHighlighter/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>

	<!-- **jQuery** -->  
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<!-- **JQuery encode/decode Base64 -->
	<script src="js/jquery.base64.js" type="text/javascript"></script>
</head>

<body>
<!-- **Preloader** -->
<div class="loader-wrapper">
	<div id="loader-image"></div>
</div>
<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
		<div id="header-wrapper">
			<!-- **Header** -->
<?php include ("inc/html_content/header.html"); ?>
			<!-- **Header - End** -->
		</div>
		
		<!-- **Main - Starts** --> 
		<div id="main">
			<!-- VLOŽENÍ STRÁNEK S OBSAHEM-->
			<?php
				$url = '';
				// For blank category and page
				if (empty($_GET['category']) && empty($_GET['page'])) {
					$url .= 'inc/home-page.php';
				}

				// If not exist "category" but exist "page"
				if (empty($_GET['category'])) {
					if (!empty($_GET['page'])) {
						$url .= 'inc/';
						$url .= $_GET['page'] . '.php';
					}
				}

				// If not exist "category" and "page"
				if (!empty($_GET['category'])) {
					$url .= 'inc/' . $_GET['category'] . '/';
					if (!empty($_GET['page'])) {
						$url .= $_GET['page'] . '.php';
					}
				}

				// If exist url
				if (file_exists("$url")) {
					include $url;
				} elseif (!file_exists("$url")) {
					include ("404.php");
				}

			?>
			  
		</div> <!-- **Main - Ends** --> 
		
		<!-- **Footer** -->
		<footer id="footer">

<?php include ("inc/html_content/footer.html"); ?>

		</footer> <!-- **Footer - End** -->
		
	</div><!-- **inner-wrapper - End** -->
	
</div><!-- **Wrapper - End** -->

<!-- **jQuery** -->  
	<script src="js/jquery-migrate.min.js"></script> 
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

	<script type="text/javascript">
	// Basic script for selection text by button or submit
	jQuery(document).ready(function($){
		jQuery.fn.selectText = function(){
			var doc = document;
			var element = this[0];
			console.log(this, element);
			if (doc.body.createTextRange) {
				var range = document.body.createTextRange();
					range.moveToElementText(element);
					range.select();
		   } else if (window.getSelection) {
				var selection = window.getSelection();        
				var range = document.createRange();
					range.selectNodeContents(element);
					selection.removeAllRanges();
					selection.addRange(range);
				}
			};
	});
	</script>
		  

</body>
</html>
