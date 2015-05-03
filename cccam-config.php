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

	<!-- **SyntaxHighlighter** -->
	<script type="text/javascript" src="js/SyntaxHighlighter/shCore.js"></script>
	<script type="text/javascript" src="js/SyntaxHighlighter/shBrushPlain.js"></script>
	<link type="text/css" rel="stylesheet" href="js/SyntaxHighlighter/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>

	<!-- **jQuery** -->  
	<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>

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
								<p><span class="fa fa-calendar"> </span> Datum: 27.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam.cfg</h4>
							<p>Soubor <strong>CCcam</strong> slouží ke konfiguraci/nastavení CCcam serveru a klienta. Jedná se o textový soubor, který lze editovat v běžných textových editorech (s oblibou používám Sublime Text 2)</p>
							<p>Hlavním principem při přistupování ke konfiguraci nastavení v CCcam.cfg je "To co není zakázané, je povolené".</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Ke stažení - <span>cccam.cfg pro poslední public verzi CCcam 2.3.0</span></h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="downloads/cccam/config/CCcam_2.3.0.cfg" target="_blank">CCcam.cfg pro CCcam v2.3.0</a><br>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam.cfg - základní info</h4>
							<p>Řádky které jsou zakomentováné na začátku řádku značkou "#" , CCcam neakceptuje.</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam.cfg - základní nastavení bez další konfigurace</h4>
							<p>V případě, že spustíme CCcam bez nastavení v konfiguračním souboru CCcam.cfg bude CCcam spuštěn s následujícími paramtery</p>

							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right" style="margin-bottom: 10px;">
								<li>Nejsou nastaveny žádní uživatelé a spojení na další servery.</li>
								<li>Hlavní port pro připojení na CCcam server je 12000.</li>
								<li>Je povoleno webové rozhraní na portu 16001.</li>
								<li>Je povolen telnet info na portu 16000.</li>
								<li>Je vypnuto zadání jména a heslo pro připojení na WebIf.</li>
								<li>Nejsou nakonfigurovány žádné čtečky.</li>
								<li>Je vypnuto logování do textového souboru.</li>
							</ul>
							<div class="dt-sc-margin25"></div>
							<h5>CCcam.cfg - index</h5>
							<ul class="dt-sc-lmarg">
								<li><a href="#1"><strong>1.</strong> - <U>UŽIVATELÉ</U></a></li> 
								<li><a href="#1.1"><strong>1.1.</strong> - Uživatelé - základní nastavení ( F: line )</a></li>
								<li><a href="#1.2"><strong>1.2.</strong> - Uživatelé - rozřířené nastavení</a></li> 
								<li></li>
								<li><a href="#2"><strong>2.</strong> - <u>PŘIPOJENÍ NA SERVERY</u></a></li> 
								<li><a href="#2.1"><strong>2.1.</strong> - Připojení na servery - připojení na CCcam server ( C: line )</a></li>
								<li><a href="#2.2"><strong>2.2.</strong> - Připojení na servery - připojení na Newcamd server ( N: line )</a></li> 
								<li><a href="#2.3"><strong>2.3.</strong> - Připojení na servery - připojení na Radegast server ( R: line )</a></li> 
								<li><a href="#2.4"><strong>2.4.</strong> - Připojení na servery - připojení na Camd3 server ( L: line )</a></li>
								<li><a href="#2.5"><strong>2.5.</strong> - Připojení na servery - připojení na Gbox server ( G: line )</a></li>
								<li></li>
								<li><a href="#3"><strong>3.</strong> - <u>VŠEOBECNÁ NASTAVENÍ</u></a></li> 
								<li><a href="#3.1"><strong>3.1.</strong> - Všeobecná nastavení - příchozí port</a></li> 
							</ul>
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<hr>
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<a name="1" class="linkname"></a>
							<h4><strong class="article_number">1. </strong> UŽIVATELÉ</h4>
							<div class="dt-sc-four-fifth">
								<pre class="brush: text;">
F: &lt;username> &lt;password> &lt;uphops> &lt;shareemus> &lt;allowemm> ( { caid:id(:downhops), caid:id(:downhops), ... } { caid:id:sid, caid:id:sid, ... } { begintime-endtime, ... } ) hostname/ip address
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="1.1" class="linkname"></a>
							<h4><strong class="article_number">1.1. </strong> Uživatelé - základní nastavení ( F: line )</h4>
							<div class="dt-sc-four-fifth">
								<pre class="brush: text;">
F: user1 pass1
								</pre>
							</div>
							<p><strong>Generování základní F: line</strong></p>
						<!-- GENERATOR 1 -->
							<div id="generator1" class="generator" style="clear: both; display: table;">
								<div style="float: left;">
									<label>Jméno uživatele: </label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>Jméno uživatele</strong><br />
									        Délka je omezena na 20 znaků.<br>Uživatelské jméno je povinný parametr při zadávní uživatele.
									    </span>
									</a>
									<input name="basic_F_name1" id="basic_F_name1" type="text" maxlength="20" placeholder="Jméno bez mezer">
								</div>
								<div style="margin-left: 10px; float: left;">
									<label>Heslo uživatele </label>
									<!--Tooltip LEFT-->
									<a href="#" class="tooltip tooltip_left">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif" />
									        <strong>Heslo uživatele</strong><br />
									        Délka hesla není nijak omezena.<br>Uživatelské heslo je povinný parametr při zadávní uživatele.
									    </span>
									</a>
									<input name="basic_F_password1" id="basic_F_password1" type="text" placeholder="Heslo bez mezer">
								</div>
								<div style="margin-left: 10px; float: left; padding-top: 30px;">
									<input type="submit" id="reset1" value="Reset" >
								</div>
							</div>
							<!-- GENERATOR 1 -RESULT -->
							<div class="dt-sc-four-fifth">
								<code>
									<p><u>Vygenerovaná F: line</u> - (můžeme zkopírovat a vložit do CCcam.cfg)</p>
									<p id="F_line_finish1">
										<span>F: </span>
										<span id="F_name_result1"></span> 
										<span id="F_password_result1"></span>
									</p>
								</code>
							</div>
							<!-- GENERATOR 1 - Select DIV by Button -->
							<div style="float: left; padding: 0px 0px 10px;">
								<input type="submit" id="Select_F_line1" value="Označit generovaný výsledek" >
							</div>
							<!-- GENERATOR 1 - SCRIPT -->
							<script type="text/javascript">
								jQuery(document).ready(function($){
								// Function for remove blank space in INPUT - for all INPUT type "text"
									$(function () {
										$('#generator1 input[type="text"]').keyup(function () {
											$(this).val(
												$.trim($(this).val())
											);
										});
									})
								});
								jQuery(document).ready(function($){
								// Copy value from INPUT type text to SPAN
									$('#generator1 input[type="text"]').on('keyup', function() {
										$('#F_name_result1').html($('#basic_F_name1').val());
										$('#F_password_result1').html($('#basic_F_password1').val());
									});
								// Reset/Delete value in FORM
									$('#reset1').on('click', function() {
										$('#basic_F_name1').val('');
										$('#basic_F_password1').val('');	
										$('#F_name_result1').html('');
										$('#F_password_result1').html('');
									});
								// Jquery Selection Text in DIV
									$("#Select_F_line1").click(function() {
									    $("#F_line_finish1").selectText();
									});
							   });
							</script>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="1.2" class="linkname"></a>
							<h4><strong class="article_number">1.2. </strong>Uživatelé - rozřířené nastavení</h4>
							<div class="dt-sc-four-fifth">
								<pre class="brush: text;">
F: &lt;username> &lt;password> &lt;uphops> &lt;shareemus> &lt;allowemm> ( { caid:id(:downhops), caid:id(:downhops), ... } { caid:id:sid, caid:id:sid, ... } { begintime-endtime, ... } ) hostname/ip address
								</pre>
							</div>
							<p><strong>Generování F: line s rozšířeným nastavením</strong></p>
						<!-- GENERATOR 2 -->
							<div id="generator2" class="generator" style="clear: both; display: table;">
								<div style="margin-right: 10px; float: left; width: 47%">
									<label>Jméno uživatele</label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>Jméno uživatele</strong><br />
									        Délka je omezena na 20 znaků.<br>Uživatelské jméno je povinný parametr při zadávní uživatele.
									    </span>
									</a>
									<input name="basic_F_name2" id="basic_F_name2" type="text" maxlength="20" placeholder="Jméno bez mezer">
								</div>
								<div style="margin-right: 10px; float: right; width: 47%;">
									<label>Heslo uživatele</label>
									<!--Tooltip LEFT-->
									<a href="#" class="tooltip tooltip_left">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif" />
									        <strong>Heslo uživatele</strong><br />
									        Délka hesla není nijak omezena.<br>Uživatelské heslo je povinný parametr při zadávní uživatele.
									    </span>
									</a>
									<input name="basic_F_password2" id="basic_F_password2" type="text" placeholder="Heslo bez mezer">
								</div>
								<div style="margin-right: 10px; float: left; width: 100px;">
									<label>Uphops </label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>Uphops</strong><br />
									        DOPLNIT!!!
									    </span>
									</a>
									<input name="basic_F_uphops2" id="basic_F_uphops2" type="text">
								</div>
								<div style="margin-right: 10px; float: left; width: 100px;">
									<label>Shareemus </label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>Shareemus</strong><br />
									        DOPLNIT!!!
									    </span>
									</a>
									<input name="basic_F_shareemus2" id="basic_F_shareemus2" type="text">
								</div>
								<div style="margin-right: 10px; float: left; width: 100px;">
									<label>Allowemm </label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>Allowemm</strong><br />
									        Povolení/Zákaz přijmu EMM instrukcí od uživatele.<br><br>
									        <strong>0</strong> - EMM od uživatele jsou povolené<br>
									        <strong>1</strong> - EMM od uživatele jsou zakázané
									    </span>
									</a>
									<input name="basic_F_allowemm2" id="basic_F_allowemm2" type="text">
								</div>
								<div style="margin-right: 10px; float: right; width: 60%;">
									<label>CAID:ID:downhops </label>
									<!--Tooltip LEFT-->
									<a href="#" class="tooltip tooltip_left">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif" />
									        <strong>CAID:ID:downhops</strong><br />
									        DOPLNIT!!!
									    </span>
									</a>
									<input name="basic_F_downhops2" id="basic_F_downhops2" type="text" placeholder="CAID:ID:downhops, CAID:ID:downhops, ...">
								</div>
								<div style="margin-right: 10px; float: left; width: 48%;">
									<label>CAID:ID:SID </label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>CAID:ID:SID</strong><br />
									        Zakázané share konkrétního programu. Vypisujeme SID pouze pro programy, které chceme zakázat. Ostatní jsou povoleny. Pokud nic nezadáme, jsou povoleny všechny programy <br><br>
									        <u>1. Formát zápisu pro zákaz jednoho programu:</u><br><br>
									        CAID:ID:SID např. zákaz ČT1 HD ze Skylinku:  0D96:000004:1325<br><br>
									        <u>2. Formát zápisu pro zákaz více programů:</u><br><br>
									        CAID:ID:SID, CAID:ID:SID např. zákaz ČT1 HD, ČT2 HD ze Skylinku:<br>  0D96:000004:1325, 0D96:000004:1326<br><br>
									        <strong>Pozor</strong> na zadání mezery za "," při zadávání více programů
									    </span>
									</a>
									<input name="basic_F_sid2" id="basic_F_sid2" type="text" placeholder="CAID:ID:SID, CAID:ID:SID, ....">
								</div>
								<div style="margin-right: 10px; float: right; width: 48%;">
									<label>Begintime-endtime </label>
									<!--Tooltip LEFT-->
									<a href="#" class="tooltip tooltip_left">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif" />
									        <strong>Begintime-endtime</strong><br />
									        Povolení časového rozsahu share uživatele.<br><br>
									        1. Příklad: 12:00-17:00<br>
									        Uživatel má povolený share od 12 do 17 hodin<br><br>
									        2. Příklad: 12:00-17:00, 21:00-22:00<br>
									        Uživatel má povolený share od 12 do 17 hodin a poté od 21 do 22 hodin<br><br>
									        <strong>Pozor</strong> na zadání mezery za "," při zadávání více časových rozsahů
									    </span>
									</a>
									<input name="basic_F_time2" id="basic_F_time2" type="text" placeholder="00:00-00:00, 00:00-00:00, ....">
								</div>
								<div style="margin-right: 10px; float: left; width: 200px;">
									<label>Hostname/ip address </label>
									<!--Tooltip RIGHT-->
									<a href="#" class="tooltip tooltip_right">
									    <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
									        <strong>Hostname/Ip address</strong><br />
									        Povolení share klientovi s konkrétní IP adresou. V případě že klient používá DynDNS (Dynamickou DNS) je nutné zadat DynDNS místo IP.
									    </span>
									</a>
									<input name="basic_F_ip2" id="basic_F_ip2" type="text">
								</div>
								<div style="margin-right: 10px; float: left; padding-top: 30px;">
									<input type="submit" id="reset2" value="Reset" >
								</div>
							</div>
							<!-- GENERATOR 2 -RESULT -->
							<div class="dt-sc-four-fifth">
								<code>
									<p><u>Vygenerovaná F: line</u> - (můžeme zkopírovat a vložit do CCcam.cfg)</p>
									<p id="F_line_finish2">
										<span>F: </span>
										<span id="F_name_result2"></span> 
										<span id="F_password_result2"></span> 
										<span id="F_uphops_result2"></span> 
										<span id="F_shareemus_result2"></span> 
										<span id="F_allowemm_result2"></span> 
										<span id="F_downhops_result2"></span> 
										<span id="F_sid_result2"></span> 
										<span id="F_time_result2"></span> 
										<span id="F_ip_result2"></span>
									</p>
								</code>
							</div>
							<!-- GENERATOR 2 - Select DIV by Button -->
							<div style="float: left; padding: 0px 0px 10px;">
								<input type="submit" id="Select_F_line2" value="Označit generovaný výsledek" >
							</div>
							<!-- GENERATOR 2 - SCRIPT -->
							<script type="text/javascript">
							   jQuery(document).ready(function($){
							   	// Function for remove blank space in INPUT - for all INPUT type "text"
									$(function () {
										$('#generator2 input[type="text"]').keyup(function () {
											$(this).val(
												$.trim($(this).val())
											);
										});
									})
							   	// Copy value from INPUT type text to SPAN
									$('#generator2 input[type="text"]').on('keyup', function() {
										$('#F_name_result2').html($('#basic_F_name2').val());
										$('#F_password_result2').html($('#basic_F_password2').val());
										$('#F_ip_result2').html($('#basic_F_ip2').val());
									});
								// Validate If value in INPUT is number
									$('#basic_F_uphops2').on('keyup keydown blur', function (event) {
										$(this).val($(this).val().replace(/[^0-9]/g, ''));
										$('#F_uphops_result2').html($('#basic_F_uphops2').val());
									});
								// Validate If value in INPUT is number
									$('#basic_F_shareemus2').on('keyup keydown blur', function (event) {
										$(this).val($(this).val().replace(/[^0-9]/g, ''));
										$('#F_shareemus_result2').html($('#basic_F_shareemus2').val());
									});
								// Validate If value in INPUT is number
									$('#basic_F_allowemm2').on('keyup keydown blur', function (event) {
										$(this).val($(this).val().replace(/[^0-9]/g, ''));
										$('#F_allowemm_result2').html($('#basic_F_allowemm2').val());
									});
								// Validate If value blank in INPUT
									$("#basic_F_downhops2").on('keyup change click', function() {
										if ($(this).val().length === 0 ) {
											$('#F_downhops_result2').html('');
										} else {
											$('#F_downhops_result2').html('{ ' + $('#basic_F_downhops2').val() + ' }');
									    }
									});
								// Validate If value blank in INPUT
									$("#basic_F_sid2").on('keyup change click', function() {
										if ($(this).val().length === 0 ) {
											$('#F_sid_result2').html('');
										} else {
											$('#F_sid_result2').html('{ ' + $('#basic_F_sid2').val() + ' }');
									    }
									});
								// Validate If value blank in INPUT
									$("#basic_F_time2").on('keyup change click', function() {
										if ($(this).val().length === 0 ) {
											$('#F_time_result2').html('');
										} else {
											$('#F_time_result2').html('{ ' + $('#basic_F_time2').val() + ' }');
									    }
									});
								// Put space after comma
									$("#basic_F_downhops2").keyup(function () {
										this.value = $.map(this.value.split(","), $.trim).join(", ");
									});
									$("#basic_F_sid2").keyup(function () {
										this.value = $.map(this.value.split(","), $.trim).join(", ");
									});
									$("#basic_F_time2").keyup(function () {
										this.value = $.map(this.value.split(","), $.trim).join(", ");
									});
								// Reset/Delete value in FORM
									$('#reset2').on('click', function() {
										$('#basic_F_name2').val('');
										$('#F_name_result2').html('');

										$('#basic_F_password2').val('');
										$('#F_password_result2').html('');

										$('#basic_F_uphops2').val('');
										$('#F_uphops_result2').html('');

										$('#basic_F_shareemus2').val('');
										$('#F_shareemus_result2').html('');

										$('#basic_F_allowemm2').val('');
										$('#F_allowemm_result2').html('');

										$('#basic_F_downhops2').val('');
										$('#F_downhops_result2').html('');
										
										$('#basic_F_sid2').val('');
										$('#F_sid_result2').html('');

										$('#basic_F_time2').val('');
										$('#F_time_result2').html('');
										
										$('#basic_F_ip2').val('');
										$('#F_ip_result2').html('');
									});
								// Jquery Selection Text in DIV
									$("#Select_F_line2").click(function() {
									    $("#F_line_finish2").selectText();
									});
							   });
							</script>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="2" class="linkname"></a>
							<h4><strong class="article_number">2. </strong> PŘIPOJENÍ NA SERVERY</h4>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="2.1" class="linkname"></a>
							<h4><strong class="article_number">2.1. </strong> Připojení na servery - připojení na CCcam server ( C: line )</h4>
							<div>
								<pre class="brush: text;">
C: &lt;hostname> &lt;port> &lt;username> &lt;password> &lt;wantemus> ( { caid:id(:uphops), caid:id(:uphops), ... } )
								</pre>
							</div>
							<p><strong>Generování C: line</strong></p>
						<!-- GENERATOR 3 -->
							<div id="generator3" class="generator">
								<!-- First line -->
								<div  style="clear: both;">

									<div style="float: left;">
										<label>Hostname/Ip address </label>
										<!--Tooltip RIGHT-->
										<a href="#" class="tooltip tooltip_right">
										    <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
										        <strong>Hostname/Ip address</strong><br />
										        IP adresa CCcam serveru na který se chceme připojit. V případě že klient používá DynDNS (Dynamickou DNS) je nutné zadat DynDNS místo IP.
										    </span>
										</a>
										<input name="basic_C_ip1" id="basic_C_ip1" type="text" placeholder="Hostname/Ip address" tabindex="1">
									</div>
									<div style="margin-left: 10px; float: left; width: 100px; margin-right: 10px;">
										<label>Port </label>
										<!--Tooltip RIGHT-->
											<a href="#" class="tooltip tooltip_right">
											    <i class="fa icon-icon_help"></i>
											    <span>
											        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
											        <strong>Port</strong><br />
											        Port CCcam serveru na který se připojujeme
											    </span>
											</a>
										<input name="basic_C_port1" id="basic_C_port1" type="text" placeholder="Port" tabindex="2">
									</div>
									<div style="float: right; width: calc(100% - 440px);">
										<label>Uživatelské jméno </label>
										<!--Tooltip LEFT-->
											<a href="#" class="tooltip tooltip_left">
											    <i class="fa icon-icon_help"></i>
											    <span>
											        <img class="callout" src="images/simpleTooltip/callout_left.gif" />
											        <strong>Uživatelské jméno</strong><br />
											        Uživatelské jméno pro připojení na CCcam server
											    </span>
											</a>
										<input name="basic_C_name1" id="basic_C_name1" type="text" placeholder="Uživatelské jméno" tabindex="3">
									</div>

								</div>
								<!-- Second line -->
								<div style="clear: both;">

									<div style="float: left;">
										<label>Uživatelské heslo </label>
										<!--Tooltip RIGHT-->
										<a href="#" class="tooltip tooltip_right">
										    <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
										        <strong>Uživatelské heslo</strong><br />
										        Uživatelské heslo pro připojení na CCcam server
										    </span>
										</a>
										<input name="basic_C_password1" id="basic_C_password1" type="text" placeholder="Uživatelské heslo" tabindex="4">
									</div>
									<div style="margin-left: 10px; float: left;">
										<label>EMU </label>
										<!--Tooltip RIGHT-->
										<a href="#" class="tooltip tooltip_right">
										    <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_right.gif" />
										        <strong>EMU</strong><br />
										        DOPLNIT!!!
										    </span>
										</a>
										<select id="basic_C_emu1" style="margin: 10px 0px; height: 38px;" tabindex="5">
											<option value=""></option>
											<option value="no">NO</option>
											<option value="yes">YES</option>
										</select>
									</div>

								</div>

								<!-- Third line -->
								<div style="clear: both;">

									<div style="width: 100%">
										<label>CAID:ID(:uphops) </label>
										<!--Tooltip LEFT-->
										<a href="#" class="tooltip tooltip_left">
										    <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_left.gif" />
										        <strong>CAID:ID(:uphops)</strong><br />
										        DOPLNIT!!!
										    </span>
										</a>
										<input name="basic_C_uphops1" id="basic_C_uphops1" type="text" placeholder="CAID:ID(:uphops)" tabindex="6">
									</div>

								</div>

								<!-- Submit -->
								<div style="float: left; padding: 0px 0px 10px;">
									<input type="submit" id="reset3" value="Reset" >
								</div>
							</div>
							<!-- GENERATOR 3 -RESULT -->
							<div class="dt-sc-four-fifth" style="clear: both;">
								<code>
									<p><u>Vygenerovaná C: line</u> - (Označit generovaný výsledek, Ctrl+C a poté vložit do CCcam.cfg)</p>
									<p id="C_line_finish">
										<span>C: </span> 
										<span id="C_ip_result1"></span> 
										<span id="C_port_result1"></span> 
										<span id="C_name_result1"></span> 
										<span id="C_password_result1"></span> 
										<span id="C_emu_result1"></span> 
										<span id="C_uphops_result1"></span>
									</p>
								</code>
							</div>
							<!-- GENERATOR 3 - Select DIV by Button -->
							<div style="float: left; padding: 0px 0px 10px;">
								<input type="submit" id="Select_C_line" value="Označit generovaný výsledek" >
							</div>
							<!-- GENERATOR 3 - SCRIPT -->
							<script type="text/javascript">
								jQuery(document).ready(function($){
								// Function for remove blank space in INPUT - for all INPUT type "text"
								$(function () {
									$('#generator3 input[type="text"]').keyup(function () {
										$(this).val(
											$.trim($(this).val())
										);
									});
								})
								// Copy value from INPUT type text to SPAN
									$('#generator3 input[type="text"]').on('keyup', function() {
										$('#C_ip_result1').html($('#basic_C_ip1').val());
										$('#C_name_result1').html($('#basic_C_name1').val());
										$('#C_password_result1').html($('#basic_C_password1').val());
									});
									$('#generator3 select').on('change', function() {
										$('#C_emu_result1').html($('#basic_C_emu1').val());
									});
								// Validate If value in INPUT is number
									$('#basic_C_port1').on('keyup keydown blur', function (event) {
										$(this).val($(this).val().replace(/[^0-9]/g, ''));
										$('#C_port_result1').html($('#basic_C_port1').val());
									});
								// Validate If value blank in INPUT
									$("#basic_C_uphops1").on('keyup change click', function() {
										if ($(this).val().length === 0 ) {
											$('#C_uphops_result1').html('');
										} else {
											$('#C_uphops_result1').html('{ ' + $('#basic_C_uphops1').val() + ' }');
									    }
									});
								// Put space after comma
									$("#basic_C_uphops1").keyup(function () {
										this.value = $.map(this.value.split(","), $.trim).join(", ");
									});

								// Reset/Delete value in FORM
									$('#reset3').on('click', function() {
										$('#basic_C_ip1').val('');
										$('#C_ip_result1').html('');

										$('#basic_C_port1').val('');
										$('#C_port_result1').html('');
											
										$('#basic_C_name1').val('');
										$('#C_name_result1').html('');

										$('#basic_C_password1').val('');
										$('#C_password_result1').html('');

										$('#basic_C_emu1').val('');
										$('#C_emu_result1').html('');

										$('#basic_C_uphops1').val('');
										$('#C_uphops_result1').html('');
									});
								// Jquery Selection Text in DIV
									$("#Select_C_line").click(function() {
									    $("#C_line_finish").selectText();
									});
							   });
							</script>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="2.2" class="linkname"></a>
							<h4><strong class="article_number">2.2. </strong> Připojení na servery - připojení na Newcamd server ( N: line )</h4>
							<div>
								<pre class="brush: text;">
N: &lt;ip> &lt;port> &lt;username> &lt;pass> &lt;des(14byte)> &lt;nr_of_hops_away (default: 1)> &lt;stealth mode (default: 0)>
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="2.3" class="linkname"></a>
							<h4><strong class="article_number">2.3. </strong> Připojení na servery - připojení na Radegast server ( R: line )</h4>
							<div>
								<pre class="brush: text;">
R: &lt;ip> &lt;port> &lt;ca4> &lt;id6> &lt;nr_of_hops_away (default: 1)>
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="2.4" class="linkname"></a>
							<h4><strong class="article_number">2.4. </strong> Připojení na servery - připojení na Camd3 server ( L: line )</h4>
							<div>
								<pre class="brush: text;">
L: &lt;ip> &lt;port> &lt;username> &lt;pass> &lt;ca4> &lt;id6> &lt;nr_of_hops_away (default: 1)>
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="2.5" class="linkname"></a>
							<h4><strong class="article_number">2.5. </strong> Připojení na servery - připojení na Gbox server ( G: line )</h4>
							<div>
								<pre class="brush: text;">
G: &lt;pass> &lt;localhost> &lt;localport> &lt;peerpass> &lt;peeraddress> &lt;peerport>
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="3" class="linkname"></a>
							<h4><strong class="article_number">3. </strong> VŠEOBECNÁ NASTAVENÍ</h4>
							<p>V rámci všeobecných nastavení můžeme nastavit:</p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li><a href="#3.1">Port CCcamu pro příchozí spojení</a></li> 
							</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<a name="3.1" class="linkname"></a>
							<h4><strong class="article_number">3.1. </strong> Všeobecná nastavení - příchozí port</h4>
							<p>Vyčteno z CCcam.cfg</p>
							<pre class="brush: text;">
# server shall listen on this port pro incoming connections
# default port is 12000, disable server with parm -s or set port 0
#
#SERVER LISTEN PORT : 12000
							</pre>
							<p>Pomocí zadání "SERVER LISTEN PORT :" definujeme port CCcamu pro příchozí spojení uživatelů. Defaultně je nastaven port 12000, ale můžeme nastavit i jiný vyjma portu 21,22,23,80</p>
							<p>Pokud chceme CCcam používat pouze jako klient můžeme příchozí port vypnout zadáním:</p>
							<pre class="brush: text;">
SERVER LISTEN PORT : 0
							</pre>
							<p>Při vypnutém CCcam portu bude nedostupně i webové rozhraní.</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<div class="intro-text type2">
								<p style="position: absolute; bottom: 10px; right: 20px;">
									<i>Vyčerpávající práce na popisu konfigurace CCcamu (skyndas)</i> <i class="fa fa-smile-o" style="font-size:25px;font-weight:bold;margin-left:10px"></i>
								</p>
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
