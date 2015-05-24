			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>Karty</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">Karty</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Container starts-->
			<div class="container">
				<div class="dt-sc-margin70"></div>
				<!-- **secondary - starts** --> 
				<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">
					
<?php include ("inc/html_content/card-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 17.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<h4>1. S02 - Sky DE</h4>
							<p>Informace dostupná z fór - není testováno</p>
							<p><strong>Info o kartě</strong></p>
							<ul class="dt-sc-lmarg25">
								<li>Card type: - Nagravision</li>
								<li>ATR: - 3B 9F 21 0E 49 52 44 45 54 4F 20 41 43 53 03 84 55 FF 80 6D
								<li>CAID: - 1702</li>
								<li>ROM Version: - DNASP142/RevGC4</li>
								<li>Mhz: - 6.00</li>
							</ul>
							<!-- START IMAGE CARD -->
								<p><strong>Karta S02 - Sky DE</strong></p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 250px;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cards/deutschland/skyde_s02.jpg" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cards/deutschland/skyde_s02.jpg" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> S02 - Sky DE </a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							<!-- END IMAGE CARD -->
							<p><strong>Nastavení interní čtečky OSCamu - nastavení č.1</strong></p>
							<div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# Konfiguration der Kartenleser und der Smartcards
# Label ist beliebig, möglichst einfach und kurz, man kann die Kartenbezeichnungen verwenden

# S02 im unteren internen Schacht
[reader]
label               = s02(Kartenschacht-unten)
device              = /dev/sci0
protocol            = internal
caid                = 1702
boxkey              = 1122334455667788
ident               = 1702:000000
detect              = cd
mhz                 = 600
cardmhz             = 600
group               = 1
emmcache            = 1,1,2,0
								</pre>
							</div>

						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
