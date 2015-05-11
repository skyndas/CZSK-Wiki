			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>sBox</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="index.php?page=home-page">Emulátory</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">sBox</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Container starts-->
			<div class="container">
				<div class="dt-sc-margin70"></div>
				<!-- **secondary - starts** --> 
				<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

<?php include ("inc/html_content/sbox-menu.html"); ?>

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
						<div class="dt-sc-tabs-vertical-container">
							<h4>Datum vzniku</h4>
							<p><strong>sBox</strong> vznikl kolem roku 2009 a je od španělského tvůrce "EDK" ze soukromého sektoru. Zdrojové kódy nejsou známy a vývoj stále trvá. </p>
						</div>
						
						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>O sBoxu</h4>
							<p>sBox je softcam jež byl vyvinut speciálně pro poskytování podpory nových karet Nagravision 3. I když se specializuje na Nagravision, dnes projekt dospěl tak daleko, že podporuje širokou škálu šifrování Nagravision Systeme.</p>
							<p>Od verze <strong>0.0.4-6</strong> používá sBox také webové rozhraní.</p>

							<p><u>Charakteristika sBoxu:</u> </p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>Plná podpora pro Nagravision Systeme </li>
								<li>DVBapi</li>
								<li>Podporované typy karet: Nagravision 2-3, Viaccess, Seca, Irdeto, NDS, Conax;</li>
								<li>Podporované protokoly: NewCAMD, Radegast a CCcam.</li>
								<li>WebIf - webové rozhraní</li>
							</ul>
						</div>
						
						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Hlavní složky, soubory a porty sBoxu - enigma 2</h4>
							<div class="dt-sc-tabs-vertical-frame-content clearfloat">
								<ul>
									<li><strong>sBoxu.Binary</strong> = chmod 755 (např. sbox.ppc, sbox.mips ...)
										<ul>
											<li>Enigma1 -> <strong>/var/bin</strong> - sbox.ppc</li>
											<li>Enigma2 -> <strong>/usr/bin</strong> - sbox.mips</li>
										</ul>
									</li>
									<li><strong>sBoxu.config</strong> = chmod 644 (sbox.conf, users.sbox, sbox.channelinfo, sbox.portlist)
										<ul>
											<li>Enigma1 -> <strong>/var/bin</strong></li>
											<li>Enigma2 -> <strong>/usr/bin</strong></li>
											<span>Volitelné soubory: sbox.conf, users.sbox, sbox.channelinfo, sbox.portlist</span>
										</ul>
									</li>
									<li><strong>Web Interface (WebIf)</strong> - ANO / základní port 8181</li>
								</ul>
							</div>
							<p><u>Soubory sBoxu: </u></p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>binární soubory sbox</li>
								<li>sbox.conf - hlavní konfigurace</li>
								<li>users.sbox - konfigurace uživatelů</li>
								<li>sbox.channelinfo - seznam kanálů (nepovinné)</li>
								<li>sbox.portlist - soubor se seznamem SIDS (nepovinné)</li>
							</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>WebIf sBoxu</h4>
							<p>Od verze <strong>0.0.4-6</strong> používá sBox také webové rozhraní.</p>
							<div style="width: 300px;" class="portfolio number_text">
							<!-- **portfolio-thumb - Starts** -->
							<div class="portfolio-thumb float image-container">
								<figure>
									<img src="images/sbox/sbox_01.png" alt="image">
									<div class="image-overlay">
										<a class="zoom" href="images/sbox/sbox_01.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
										<div class="portfolio-content">
											<h5> <a href="#"> WebInterface sBoxu v0.0.5-4 6</a> </h5>
											<span class="fa fa-sort-up"></span>
										</div>
									</div>
								</figure>
							</div> <!-- **portfolio-thumb - Ends** -->
						</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Kompletní přehled verzí</h4>
							<p>Vzhledem k tomu, že sBox je vyvýjen v rámci soukromého sektoru a některé verze nemusí být veřejné, je nejkompletnější databáze včech verzí dostupná na následujícím webu:</p>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="http://www.sat-universe.com/forumdisplay.php?f=462&order=desc" target="_blank">http://www.sat-universe.com/forumdisplay.php?f=462&order=desc</a>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Fóra</h4>
							<p>Stále aktuální fórum najdete na adrese:</p>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="http://www.sboxobs.tk/" target="_blank">http://www.sboxobs.tk/</a><br>
								<a href="http://www.tododream.com/foro/sbox/" target="_blank">http://www.tododream.com/foro/sbox/</a>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Tweet</h4>
							<p>sBox má dokonce i svůj vlastní Tweet:</p>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="https://twitter.com/SBox_EMU" target="_blank">https://twitter.com/SBox_EMU</a>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
