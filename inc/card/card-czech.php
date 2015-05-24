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
							<h4>1. Skylink ICE - Irdeto RSA-Box Key</h4>
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
								<!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
								<p><strong><u>RSA-Box Key varianta č.1</u></strong></p>
								<div class="dt-sc-lmarg25">
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
								</div>

								<p><strong><u>RSA-Box Key varianta č.2</u></strong></p>
								<div class="dt-sc-lmarg25">
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
								</div>

								<p><strong><u>RSA-Box Key varianta č.3</u></strong></p>
								<div class="dt-sc-lmarg25">
									<p><strong>RSA Key</strong></p>
									<!-- Decode key - 79EA25A763DA2C3E02B456A13962E60BCE63E628A2C177BE951CED96A9C6131A146F98D5867B7AE6682324FD6481913C0241F065C8D3457E54BB59B7B5DE0362 -->
									<div class="dt-sc-lmarg">
										<p>Zakódovaný RSA key</p>
										<textarea id="b64-rb4" class="code" rows="2" readonly>NzlFQTI1QTc2M0RBMkMzRTAyQjQ1NkExMzk2MkU2MEJDRTYzRTYyOEEyQzE3N0JFOTUxQ0VEOTZBOUM2MTMxQTE0NkY5OEQ1ODY3QjdBRTY2ODIzMjRGRDY0ODE5MTNDMDI0MUYwNjVDOEQzNDU3RTU0QkI1OUI3QjVERTAzNjI=</textarea>
										<p>Dekódovaný RSA key</p>
										<textarea id="b64-lb4" class="code" rows="2" readonly></textarea>
									</div>

									<p><strong>Box Key</strong></p>
									<!-- Decode key - A1C6F3D8B5E1F2C1 -->
									<div class="dt-sc-lmarg">
										<p>Zakódovaný Box key</p>
										<textarea id="b64-rb5" class="code" rows="1" readonly>QTFDNkYzRDhCNUUxRjJDMQ==</textarea>
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
								</div>
							<!-- END DECODE RSA AND BOX KEY -->
							
							<p><strong>Nastavení interní čtečky OSCamu</strong></p>
							<div>
								<pre>
[reader]
label               = skylink_irdeto
protocol            = internal
device              = /dev/sci0
caid                = 0624
rsakey              = AB72......0528   # nebo 2598......2B42  # nebo 79EA......0362
boxkey              = B1..........B8   # nebo 4F..........69  # nebo A1..........C1
force_irdeto        = 1
needsemmfirst       = 1
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
