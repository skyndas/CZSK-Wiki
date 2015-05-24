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
							<h4>1. HD+ HD01 Nagra (bílá karta) RSA-box Key</h4>
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
								<!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - BF358B5461863130686FC933FB541FFCED682F3680F09DBC1A23829FB3B2F766B9DD1BF3B3ECC9AD6661B753DCC3A9624156F9EB64E8168EF09E4D9C5CCA4DD5 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb0" class="code" rows="2" readonly>QkYzNThCNTQ2MTg2MzEzMDY4NkZDOTMzRkI1NDFGRkNFRDY4MkYzNjgwRjA5REJDMUEyMzgyOUZCM0IyRjc2NkI5REQxQkYzQjNFQ0M5QUQ2NjYxQjc1M0RDQzNBOTYyNDE1NkY5RUI2NEU4MTY4RUYwOUU0RDlDNUNDQTRERDU=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A7642F57BC96D37C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb1" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
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
# oscam.server
# ---------------------------------------------------------

# HD01 im unteren internen Schacht
[reader]
label               = hdplus-weiße-Karte(Kartenschacht-unten)
device              = /dev/sci0
protocol            = internal
caid                = 1830
rsakey              = BF35......4DD5
boxkey              = A7.........7C
detect              = cd
mhz                 = 368
cardmhz             = 368
group               = 1
emmcache            = 1,1,2,0
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>2. HD+ HD02 (černá karta) RSA-box Key</h4>
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
								<!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - BF358B5461863130686FC933FB541FFCED682F3680F09DBC1A23829FB3B2F766B9DD1BF3B3ECC9AD6661B753DCC3A9624156F9EB64E8168EF09E4D9C5CCA4DD5 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb2" class="code" rows="2" readonly>QkYzNThCNTQ2MTg2MzEzMDY4NkZDOTMzRkI1NDFGRkNFRDY4MkYzNjgwRjA5REJDMUEyMzgyOUZCM0IyRjc2NkI5REQxQkYzQjNFQ0M5QUQ2NjYxQjc1M0RDQzNBOTYyNDE1NkY5RUI2NEU4MTY4RUYwOUU0RDlDNUNDQTRERDU=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb2" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - A7642F57BC96D37C -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb3" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
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
# oscam.server
# ---------------------------------------------------------

# HD02 im unteren internen Schacht
[reader]
label               = hdplus-schwarze-Karte(Kartenschacht-unten)
device              = /dev/sci0
protocol            = internal
caid                = 1843
rsakey              = BF35......4DD5
boxkey              = A7.........7C
detect              = cd
mhz                 = 368
cardmhz             = 368
group               = 1
emmcache            = 1,1,2,0
								</pre>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
