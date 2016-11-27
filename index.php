<!-- BASIC VALUE -->
<?php
$urlParamPage = $_GET['page']
?>
<!-- SWITCH PRO NÁZEV STRÁNKY -->
<?php
if (!isset($_GET['page'])) {
	$title = "Úvodní stránka";
}
if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case false :
			$title = "Úvodní stránka";
			break;
		case 'home-page' :
			$title = "Úvodní stránka";
			break;
		case 'basic_info-index' :
			$title = "Základy cardsharingu";
			break;
		case 'busybox' :
			$title = "Busybox";
			break;
		case 'card-index' :
			$title = "Karty";
			break;
		case 'card-czech' :
			$title = "Karty - České karty";
			break;
		case 'card-slovak' :
			$title = "Karty - Slovenské karty";
			break;
		case 'card-austria1' :
			$title = "Karty - Rakouské karty";
			break;
		case 'card-austria2' :
			$title = "Karty - Rakouské karty";
			break;
		case 'card-deutsch1' :
			$title = "Karty - Německé karty";
			break;
		case 'card-deutsch2' :
			$title = "Karty - Německé karty";
			break;
		case 'cardsharing_server' :
			$title = "Cardsharing servery";
			break;
		case 'cardsharing_test1' :
			$title = "Cardsharing servery";
			break;
		case 'cardsharing_test2' :
			$title = "Cardsharing servery";
			break;
		case 'cardsharing_test3' :
			$title = "Cardsharing servery";
			break;
		case 'cardsharing_test4' :
			$title = "Cardsharing servery";
			break;
		case 'cccam-index' :
			$title = "CCcam";
			break;
		case 'cccam-binary' :
			$title = "CCcam - Binární soubory";
			break;
		case 'cccam-binary1' :
			$title = "CCcam - Binární soubory pro jednotlivé image";
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
		case 'dos_cam-index' :
			$title = "DOSCam";
			break;
		case 'dos_cam-config_cfg' :
			$title = "Konfigurace DOSCamu";
			break;
		case 'dos_cam-history' :
			$title = "DOSCam - Historie";
			break;
		case 'dos_cam-telnet' :
			$title = "DOSCam - Telnet";
			break;
		case 'dyndns' :
			$title = "DynDNS";
			break;
		case 'history' :
			$title = "Historie Wiki";
			break;
		case 'linuxbox-index' :
			$title = "Linux - Linux boxy";
			break;
		case 'linuxbox-arch' :
			$title = "Linux - Architektůra boxů";
			break;
		case 'linuxbox-symlink' :
			$title = "Linux - Symlink";
			break;
		case 'mgcamd-index' :
			$title = "MGcamd";
			break;
		case 'newcamd-index' :
			$title = "Newcamd";
			break;
		case 'oscam-index' :
			$title = "OSCam";
			break;
		case 'oscam-todo' :
			$title = "OSCam - TODO list";
			break;
		case 'protocol-index' :
			$title = "Cardsharing protokoly";
			break;
		case 'protocol-index' :
			$title = "Cardsharing protokoly";
			break;
		case 'protocol-cryptography' :
			$title = "Cardsharing šifrování";
			break;
		case 'radegast-index' :
			$title = "Radegast";
			break;
		case 'radegast-history' :
			$title = "Radegast - Historie";
			break;
		case 'radegast-install' :
			$title = "Radegast - Instalace";
			break;
		case 'radegast-webif' :
			$title = "Radegast - WebIf";
			break;
		case 'radegast-binary' :
			$title = "Radegast - Binární soubory";
			break;
		case 'radegast-binary1' :
			$title = "Radegast - Binární soubory pro E1";
			break;
		case 'radegast-config' :
			$title = "Radegast - Konfigurace";
			break;
		case 'radegast-telnet' :
			$title = "Radegast - Telnet";
			break;
		case 'radegast-log' :
			$title = "Radegast - Log";
			break;
		case 'timeline-index' :
			$title = "Timeline - Časová osa emulátorů";
			break;
		default:
			$title = "Stránka nenalezena";
			break;
	}
}
?>
<!Doctype html>
<!--[if IE 7 ]>
<html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo "CZSK - Wiki :: $title" ?></title>
	<meta name="description" content="">
	<meta name="author" content="CZSK Team">
	<meta name="keywords" content=""/>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

	<!-- **CSS - stylesheets** -->
	<link id="default-css" rel="stylesheet" href="css/basic/style.css" type="text/css" media="all"/>
	<link id="shortcodes-css" rel="stylesheet" href="css/basic/shortcodes.css" type="text/css" media="all"/>
	<link id="skin-css" rel="stylesheet" href="skins/skyblue/style.css" type="text/css" media="all"/>
	<link id="layer-slider" rel="stylesheet" href="css/layerslider.css" media="all"/>

	<!-- **Additional - stylesheets** -->
	<link rel="stylesheet" href="css/basic/responsive.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/animations.css" type="text/css" media="all"/>

	<!-- **Font Awesome** -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>

	<!-- **Google - Fonts** -->
	<link
		href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
		rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/fonts.css"/>

	<!-- **Timeliner** -->
	<link rel="stylesheet" href="css/timeliner_component.css" media="all"/>

	<!-- **Custom stylesheets** -->
	<link rel="stylesheet" href="css/basic/custom.css" media="all"/>
	<link rel="stylesheet" href="css/czsk-wiki-font.css" media="all"/>

	<!-- **SyntaxHighlighter** -->
	<script type="text/javascript" src="js/SyntaxHighlighter/shCore.js"></script>
	<script type="text/javascript" src="js/SyntaxHighlighter/shBrushBash.js"></script>
	<script type="text/javascript" src="js/SyntaxHighlighter/shBrushPlain.js"></script>
	<link type="text/css" rel="stylesheet" href="js/SyntaxHighlighter/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>

	<!-- **PopUp Modal CSS Style** -->
	<link rel="stylesheet" href="css/modality.css">

	<!-- **jQuery** -->
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>

	<!-- **Chart javascript** -->
	<script src="js/Chart.js" type="text/javascript"></script>

	<!-- **PopUp Modal** -->
	<script src="js/modality.jquery.min.js"></script>

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
			<?php include("inc/html_content/header.php"); ?>
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
				include("404.php");
			}

			?>

		</div> <!-- **Main - Ends** -->

		<!-- **Footer** -->
		<footer id="footer">

			<?php include("inc/html_content/footer.php"); ?>

		</footer> <!-- **Footer - End** -->

	</div><!-- **inner-wrapper - End** -->

</div><!-- **Wrapper - End** -->

<!-- **jQuery** -->
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="js/jquery-migrate.min.js"></script>
<!-- **Preloader** -->
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/pace.min.js" type="text/javascript"></script>
<!--**prettyPhoto**-->
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<!--**Responsive navigation** -->
<script src="js/responsive-nav.js" type="text/javascript"></script>
<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!--**jQuery-One-Page-Nav**-->
<script type="text/javascript" src="js/jquery.nav.js"></script>
<!-- **Scrollbars compatble with destkop, tablet and phone devices**-->
<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
<!-- **Sticky Nav** -->
<script src="js/jquery.sticky.js" type="text/javascript"></script>
<!-- **To Top** -->
<script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>
<!-- **Custom script** -->
<script src="js/custom.js" type="text/javascript"></script>
<!-- **Basic script for selection text by button or submit** -->
<script type="text/javascript">
	// Basic script for selection text by button or submit
	jQuery(document).ready(function ($) {
		jQuery.fn.selectText = function () {
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
</script>
</body>
</html>
