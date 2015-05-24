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
							<h4>1. Slovakia - Irdeto (PLUSTELKA KARTA) RSA-box Key</h4>
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
								<!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
								<p><strong>RSA Key</strong></p>
								<!-- Decode key - 2598FE21A1CEF05BBC459F495FCE8F1E811B126FA8933D8DDB6480A93D43CFA7255F009E875814BECF53DA7610D675D20EEBA8A212F9079CBD1D2FAD65362B42 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný RSA key</p>
									<textarea id="b64-rb0" class="code" rows="2" readonly>MjU5OEZFMjFBMUNFRjA1QkJDNDU5RjQ5NUZDRThGMUU4MTFCMTI2RkE4OTMzRDhEREI2NDgwQTkzRDQzQ0ZBNzI1NUYwMDlFODc1ODE0QkVDRjUzREE3NjEwRDY3NUQyMEVFQkE4QTIxMkY5MDc5Q0JEMUQyRkFENjUzNjJCNDI=</textarea>
									<p>Dekódovaný RSA key</p>
									<textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
								</div>

								<p><strong>Box Key</strong></p>
								<!-- Decode key - 4FD3B1C6E406AA69 -->
								<div class="dt-sc-lmarg">
									<p>Zakódovaný Box key</p>
									<textarea id="b64-rb1" class="code" rows="1" readonly>NEZEM0IxQzZFNDA2QUE2OQ==</textarea>
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

[reader]
label               = plustelka_irdeto
protocol            = internal
device              = /dev/sci0
caid                = 0668
rsakey              = 2598......2B42
boxkey              = 4F.........69
detect              = cd
group               = 1
								</pre>	
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
