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
                        <h1>Radegast</h1>
                        <div class="breadcrumb">
                            <span class="fa fa-home"></span>
                            <a href="index.php">Úvod</a>
                            <span class="fa fa-angle-right"></span>
                            <span class="fa fa-cube"></span>
                            <a href="#">Emulátory</a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current">Radegast</span>
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
                            <li> <a href="radegast-index.php">O Radegastu</a> </li>
                            <li> <a href="radegast-history.php">Historie</a> </li>
                            <li> <a href="radegast-config.php">Konfigurace</a> </li>
                            <li> <a href="radegast-binary.php">Binární soubory</a> </li>
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
                        <h4>Historie Radegastu</h4>
                        <div class="dt-sc-tabs-vertical-frame-content">
                            <h5>-- v 4.2 --</h5>
                            <div class="dt-sc-lmarg clearfloat">
                                <h5>beta4 (2006-12-08)</h5>
                                <ul class="dt-sc-fancy-list arrow" >
                                    <li><strong>[module]</strong> added support for plugin module versioning, so from now is better practice to use mod-name.so.x.y (x.y = major.minor module API version, for ex. mod-con-webmin.so.4.11) </li>
                                    <li><strong>[rdgd proto]</strong> fixed detection of nagra CAID/provid pair on client side (for routing decision) </li>
                                    <li><strong>[nagra card]</strong>
                                         <ul class="dt-sc-fancy-list caret-right">
                                            <li>added spending time calculation on card ecm  </li>
                                            <li>fixed card I/O, so no more timeouts (freezes) on some uncommon card answers </li>
                                        </ul>
                                    </li>
                                </ul>

                                <h5>beta3 (2006-12-07)</h5>
                                <ul class="dt-sc-fancy-list arrow" >
                                    <li><strong>[module]</strong> fixed crashing if emu module doesn't have emm_update() API call</li>
                                    <li><strong>[newcamd proto]</strong> fixed passing SA data</li>
                                    <li><strong>[nagra]</strong> fixed MAP3b on ppc </li>
                                </ul>

                                <h5>beta2 (2006-12-05)</h5>
                                <ul class="dt-sc-fancy-list arrow" >
                                    <li><strong>[tpscrypt]</strong>fixed BF, added multiple file support</li>
                                    <li><strong>[card config]</strong> card boxkey subsystem rewritten - no more static boxkey on every reader config. From now rdgd link good BK with card on every reader slot, so config not need to be changed if you are swapping cards with two slots. See config options "boxkeys" & "card boxkey ii = caid:ua:bk:optional-rsa"</li>
                                    <li><strong>[newcamd proto]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>fixed tps provider id parsing </li>
                                            <li>fix for double-freeing bug </li>
                                        </ul>
                                    </li>
                                    <li><strong>[camd]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>nagra: fixed CAT parser, so all EMM pids are used finally </li>
                                            <li>added prov.id setting for cryptoworks EMM packets </li>
                                        </ul>
                                    </li>
                                    <li><strong>[config]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>made net access file (shared.log) configurable. WARNING: Disabled by default now. To enable it use "net access file = shared.log" in config  </li>
                                            <li>added config option to set behaviour how to reject unallowed connections ("share client rejecting = new | old"). Works only for newcamd proto yet! </li>
                                            <li>added possibility to not detect card type by ATR, instead force ATR in config (reader xx special = atr:caid,atr-len:atr-hex)</li>
                                            <li>added config option to specify rdgd proto listener mode ("net protocol = v3 | v4") </li>
                                        </ul>
                                    </li>
                                    <li><strong>[core]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>added timestamp to all log outputs </li>
                                            <li>various mem leak fixes (thx, valgrind) </li>
                                            <li>refactored internals of card data managemment </li>
                                            <li>fixed crashing when cache len was undefined or zero </li>
                                        </ul>
                                    </li>
                                    <li><strong>[griffin]</strong>added detect of card, but not supported (yet)</li>
                                    <li><strong>[rdgd proto]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>fixed len processing for v4 proto </li>
                                            <li>added general key used in login stage ("net server key = 11 .. 88")</li>
                                            <li>added config option to restrict processing of ECM packets only destined to local cards ("net restricted = cards")</li>
                                        </ul>
                                    </li>
                                    <li><strong>[mod-emu-nagraus]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>moved there NA nagra support (map3B mostly) </li>
                                            <li>twister mode for MECM algo0 added (so old 102's dependancy was removed)</li>
                                            <li>twister mode for MECM algo1 added </li>
                                            <li>added special option "reader xx special = n2aux" to signal aux-able card</li>
                                        </ul>
                                    </li>
                                    <li><strong>[proto newcamd]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>added key database recheck on every zap </li>
                                            <li>real rand data generation reenabled </li>
                                            <li>if port is in blocking mode, then user gets only basic card data and emm-allowed flag will be cleared </li>
                                        </ul>
                                    </li>
                                    <li><strong>[module]</strong>added caching subsystem to API (v4.06) </li>
                                    <li><strong>[mod-con-webmin]</strong>
                                        <ul class="dt-sc-fancy-list caret-right">
                                            <li>look'n'feel updated </li>
                                            <li>added card data showing </li>
                                            <li>added showing plugins </li>
                                            <li>added showing SID </li>
                                        </ul>
                                    </li>
                                </ul>

                                <h5>beta1 (2006-08-24)</h5>
                                <ul class="dt-sc-fancy-list arrow" >
                                    <li><strong>[seca card]</strong> moved PPV magic command to configurable option ("card xx special = seca-ppv-magic") </li>
                                    <li><strong>[viaccess]</strong> fixed BF for TPSv2 </li>
                                    <li><strong>[rdgd & newcamd proto]</strong> added KEEPALIVE sending </li>
                                    <li><strong>[card core]</strong> added possibility to overwrite card data (for ex. K3's nagra-over-seca tunneling) by using new config option "reader xx force card data = caid:provid1,provid2:addr1,addr2" </li>
                                    <li><strong>[sharing]</strong> added possibility to map ip to username in help of radegast.i2u file for rdgd proto </li>
                                    <li><strong>[tpscrypt]</strong> changed BF to bin db version </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dt-sc-tabs-vertical-frame-content">
                            <h5>-- v 3.0 --</h5>
                            <div class="dt-sc-lmarg clearfloat">
                                <div>
                                    <p>--</p>
                                    <p>Enjoy. Kindzadza</p>
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
