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
	<script type="text/javascript" src="js/SyntaxHighlighter/shBrushBash.js"></script>
	<link type="text/css" rel="stylesheet" href="js/SyntaxHighlighter/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>

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
								<p><span class="fa fa-calendar"> </span> Datum: 10.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Ostatní Bash scripty pro CCcam</h4>

						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Přidání expirační doby pro F: line</h4>
							<p><strong>Popis scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<p>Tento script jsem testoval a stále nechápu jakým způsobem pracuje. Nicméně je to dobrý nápad jako trénink na bash scripty. Až bude někdy čas rád se na něj podívám blíže. Alespoň uvádím anglický manuál instalace.</p>
								<pre>
Add expiry date for any F line
This is a very wonderful addition for CCcam server owners to control their F lines

They can add Expiry date for any F line

1st: you create the F line as normal and end it with the Expiry date

	F: user pass 1 1 0 { 0:0:1 } #13-05-2011

2nd: download the Expiry script from here and add it on the following directory

	/bin

3rd: chmod 755
	
	chmod 755 /bin/expiry

Finally: we make the script to check the remove the expired F line daily at 12AM by the following

	crontab -e

add this line

	00 00 * * * root /bin/expiry

now you will found new file with name "expired" on the directory

	/var/etc

where all you expired F lines listed
								</pre>
							</div>
							<p><strong>Zdrojový kód scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre class="brush: bash;">
## ##
grep $(date +%d-%m-%Y) /etc/CCcam.cfg >> /etc/expired
echo "sed -i '/$(date +%d-%m-%Y)/d' /etc/CCcam.cfg" > /tmp/check-expire
chmod 755 /tmp/check-expire
/tmp/check-expire
rm /tmp/check-expire
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Konverze C:line a F:line pro OSCam</h4>
							<p><strong>Popis scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<p><strong>TESTOVÁNO a vše funguje s malou vyjímkou (po úpravě bude pracovat na plno i pro nové verze OSCamu).</strong><br> Vzhledem k tomu, že tento script je cca z roku 2012 a nebyl proveden update, jsou výstupní soubory OSCamu již ve špatném formátu. To je z toho důvodu, že OSCam je neustále ve vývoji a jeho formát konfiguračních dat je již jiný.</p>
							</div>
							<p><strong>Ke stažení</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/conv_cccam_to_oscam.sh" target="_blank">conv_cccam_to_oscam.sh - script</a><br>
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/CCcam.cfg" target="_blank">CCcam.cfg - ukázkový konfigurační soubor CCcamu</a><br>
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/oscam.server" target="_blank">oscam.server - ukázkový výstupní soubor s konverzí čteček</a><br>
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/oscam.user" target="_blank">oscam.user - ukázkový výstupní soubor s konverzí uživatelů</a><br><br>
							</div>
							<p style="clear:both"><strong>Zdrojový kód scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre class="brush: bash;">
#!/bin/bash

#    conv_cccam_to_oscam.sh
#    Copyright (C) 2010 hperez
#
#    This program is free software; you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation; either version 2 of the License, or
#    (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this program; if not, write to the Free Software
#    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

#    This script reads CCcam.cfg and convert the C and F lines to the
#    Oscam format (oscam.server and oscam.user)
#
#    If the file oscam.server.others is present, the content of that
#    file will be copied to oscam.server.
#
#    If the file oscam.user.others is present, the content of that
#    file will be copied to oscam.user.
#
#    For each [reader] section, the content of the file cccam.options
#    will be added.
#
#    For each [account] section, the content of the file user.options
#    will be added.

FILE="CCcam.cfg"

# servers

function convert_servers {
  OUTPUT="oscam.server"

  echo -n "Converting C lines"

  cat oscam.server.others > $OUTPUT

  grep -i "^C:.*" $FILE > conv.tmp

  FS=" "
 
  while read line
  do
    F1=$(echo $line|cut -d"$FS" -f1)
    SERVER=$(echo $line|cut -d"$FS" -f2)
    PORT=$(echo $line|cut -d"$FS" -f3)
    USER=$(echo $line|cut -d"$FS" -f4)
    PASS=$(echo $line|cut -d"$FS" -f5)
    #echo "SERVER: $SERVER PORT: $PORT USER: $USER PASS: $PASS"
    echo -n "."

    echo "[reader]" >> $OUTPUT
    echo "label= $SERVER" >> $OUTPUT
    #echo "enable = 1" >> $OUTPUT
    echo "protocol = cccam" >> $OUTPUT
    echo "device = $SERVER,$PORT" >> $OUTPUT
    echo "account = $USER,$PASS" >> $OUTPUT
    cat cccam.options >> $OUTPUT
    echo "" >> $OUTPUT

  done < conv.tmp

  rm conv.tmp

  echo ""
}

function convert_clients {
  OUTPUT="oscam.user"

  echo -n "Converting F lines"

  cat oscam.user.others > $OUTPUT

  grep -i "^F:.*" $FILE > conv.tmp

  FS=" "
 
  while read line
  do
    F1=$(echo $line|cut -d"$FS" -f1)
    USER=$(echo $line|cut -d"$FS" -f2)
    PASS=$(echo $line|cut -d"$FS" -f3)
    RESHARE=$(echo $line|cut -d"$FS" -f4)
    #echo "USER: $USER PASS: $PASS RESHARE: $RESHARE"
    echo -n "."

    echo "[account]" >> $OUTPUT
    echo "user = $USER" >> $OUTPUT
    echo "pwd = $PASS" >> $OUTPUT
    echo "cccreshare = $RESHARE" >> $OUTPUT
    cat user.options >> $OUTPUT
    echo "" >> $OUTPUT

  done < conv.tmp

  rm conv.tmp

  echo ""
}

convert_servers
convert_clients

echo "Done"
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
