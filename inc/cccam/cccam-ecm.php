			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>Cccam</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="index.php?page=home-page">Emulátory</a>
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
					
<?php include ("inc/html_content/cccam-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 9.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam ECM Info</h4>
							<p>Soubor s názvem <strong>ecm.info</strong> najdeme v pracovní adresáři boxu. Nejčastěji to je <strong>/tmp</strong>. Jedná se o soubor ve kterém se nacházejí informace o dekódovaném programu na který se právě díváte. Vzhledem k tomu, že ve webovém rozhraní není žádné info o DVB-Api, najdeme alespoň několik informací v tomto souboru.</p>
							<p><u>Ukázka základního výstupu do souboru <strong>ecm.info</strong></u></p>
							<div class="dt-sc-four-fifth">
								<pre>
system:     Cryptoworks (Philips)
caid:       0xd02
provider:   Unknown
provid:     0x000
pid:        0x14b8
using:      CCcam-s2s
address:    server_dns.noip.com:12000
hops:       1
share:      6b8e5e26102713e8_30000
ecm time:   0.531
								</pre>
							</div>
							<p><u>Ukázka výstupu do souboru <strong>ecm.info</strong></u> (použití volitelného souboru CCcam.providers</p>
							<p>Pokud CCcam má k dispozici soubor CCcam.providers uvidíme i jméno provideru v souboru "ecm.info"</p>
							<div class="dt-sc-four-fifth">
								<div class="code">
system:     Cryptoworks (Philips)
caid:       0xd02
provider:   <span>UPC Direct 1°W</span>
provid:     0x000
pid:        0x14b8
using:      CCcam-s2s
address:    server_dns.noip.com:12000
hops:       1
share:      6b8e5e26102713e8_30000
ecm time:   0.531
								</div>
							</div>
						</div>

					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
