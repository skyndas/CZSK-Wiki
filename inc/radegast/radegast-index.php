			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>Radegast</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="index.php?page=home-page">Emulátory</a>
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
					
<?php include ("inc/html_content/radegast-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 20.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<p><strong>Radegast</strong> je první emulátor v celé řadě emulátorů od českého tvůrce s nickem "Kindzadza". Tento emulátor je psaný v jazyku "Perl" a vznikl kolem roku 2000. Jednalo se o soukromý vývoj a zdrojové kódy nejsou známy. </p>
							<blockquote class="dt-sc-lmarg type2" > <q>Jediná možnost jak získat zdrojové kódy je oslovit Kindzadzu. V případě, že by někdo měl zájem o zdrojové kódy s úmyslem pokračovat ve vývoji, myslím že Kindzaza nebude mít problém a rád pomůže.</q> <br> <span> skyndas</span> </blockquote>
							<div class="dt-sc-hr-invisible-very-small"></div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>O Radegastu</h4>
							<p>Radegast umožňuje sdílení karty po internetu pro více účastníků.</p>
							<p>Radegast umožňuje použít čtečky karet v Triple Dragon a DreamBoxu. Lze je použít přímo na dvě cryptoworks karty, třetí kartu umožňuje připojit přes Phoenix - např. originál irdeto2...</p>
							<p>Radegast používá základní soubor klíčů "SoftCam.Key", který najdeš v adresáři /var/keys/SoftCam.Key</p>
							<p>Radegast byl perfektně funkční na velmi stabilních receiverech "Triple Dragon" ale funguje i na Dreamboxech.</p>
							<p>Logo emulátoru Radegast bylo v duchu piva Radegast</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>O Radegastu - vlastní studium</h4>
							<ul class="dt-sc-lmarg25">
								<li>- Od v4 je implementována funkce netpilot v radegastu interně.</li>
								<li>- Radegast umí fungovat nejenom jako rdgd server (tj, sdilet pomoci rdgd protokolu), ale i jako newcamd server (tj, newcamd protokol)</li>
								<li>- mod-con-webmin.so - plugin (pro spuštění umístit do stejného adresáře jak Radegast "rdgd" a Radegast ho sám spustí.</li>
								<li>- Radegast umí pracovat s externí Phoenix čtečkou</li>
							</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Hlavní složky, soubory a porty Radegastu - enigma 1</h4>
							<table>
								<tr>
									<td><strong>Program files</strong></td>
									<td>/var/bin - rdgd, camd.rdgd, netpilot</td>
								</tr>
								<tr>
									<td><strong>Config file</strong></td>
									<td>/var/etc - radegast.cfg</td>
								</tr>
								<tr>
									<td><strong>Keys files</strong></td>
									<td>/var/keys - SoftCam.Key, Conax.Key, AutoRoll.Key, MK.Key</td>
								</tr>
								<tr>
									<td><strong>Web Interface</strong></td>
									<td>ANO</td>
								</tr>
								<tr>
									<td><strong>Web Interface port</strong></td>
									<td>8888</td>
								</tr>
							</table>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Ke studiu o Radegastu</h4>
							<ul>
								<li><a href="http://sfteam.anfy.cz/content/radegast.htm" target="_blank">Historie verze 3.0</a></li>
							</ul>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
