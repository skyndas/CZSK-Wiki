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
								<p><span class="fa fa-calendar"> </span> Datum: 22.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcamInfoPhp v1.02</h4>
							<p><strong>CCcamInfoPhp v1.02</strong> je PHP aplikace pro PC s vylepšeným webovým rozhraním CCcamu, která pracuje pod Apache serverem. Z toho vyplývá, že v případě spuštění např. pod Windows je nutné instalovat nejdříve XAMPP.</p>
							<p><u>Výhody a nevýhody CCcamInfoPhp oprotí základnímu webovému rozhraní CCcamu:</u> </p>
								<ul class="dt-sc-lmarg25">
									<li><i class="fa fa-plus size14px margright5px"></i> Barevné grafické zpracování je mnohem příjemnější než strohý textový výstup <i>(Ale CCcam pracuje s daty a ne s grafikou)</i>.</li>
									<li><i class="fa fa-plus size14px margright5px"></i> Zobrazení pingu CCcamu na další server</li>
									<li><i class="fa fa-plus size14px margright5px"></i> CCcamInfoPhp podporuje třídění v tabulkách</li>
									<li><i class="fa fa-minus size14px margright5px"></i> v1.02 stále nepodporuje automatické obnovení stránky pro načtení dat.</li>
								</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Ke stažení</h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="downloads/cccam/tools_software/CCcamInfoPHP/CCcamInfoPhp_v1.02.zip" target="_blank">CCcamInfoPhp v1.02</a><br>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Instalace</h4>
							<p>Aby PHP aplikace správně pracovala musíme nejdříve provést následující kroky:</p>
							<ol class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
								<li>Stáhnout soubor "CCcamInfoPhp_v1.02.zip"</li>
								<li>Instalovat XAMPP</li>
								<li>Zkopívat složku "CCcamInfoPhp_v1.02" ze staženého souboru do složky "htdocs" ve složce kam jsme instalovali XAMPP</li>
								<li>Otevřít soubor Apache server "php.ini"</li>
								<li>Najít řádek "; Resource Limits ;"</li>
								<li>Změnit hodnotu položky "max_execution_time = 30 " na "max_execution_time = 60 "</li>
								<li>Uložit soubor "php.ini"</li>
								<li>Spustit prohlížeč a zadat do příkazového řádku "http://localhost/CCcamInfoPhp_v1.02</li>								
							</ol>
							<p>Po provedení všech kroků se nám zobrazí titulní webová stránka CCcamInfoPhp s konfigurací připojení.</p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_08.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_08.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Úvodní stránka CCcamInfoPhp s konfigurací</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>
							<p>Vyplníme potřebné údaje a klikneme na "Save configuration". CCcamInfoPhp se připojí na CCcam a zobrazí se webové rozhraní CCcamu ve vylepšené podobě.</p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_09.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_09.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Úvodní stránka CCcamInfoPhp</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>
							<p><strong>POZNÁMKA:</strong> CCcamInfoPhp používá následující soubory, které je potřebné občas aktualizovat</p>
							<ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right" style="margin-bottom:10px">
								<li>CCcam.providers</li>
								<li>CCcam_fake.providers</li>
								<li>CCcam_used.providers</li>
							</ul>
							<p><strong>Manuální nastavení serverů</strong> (platí pro verzi 0.8.2 a vyšší)</p>
							<div class="dt-sc-lmarg25">
								<p>Pro manuální nastavení připojení k CCcam serveru otevřeme soubor "config.php". Soubor obsahuje i nápovědu o zadávání konfigurace připojení.</p>
								<p>Na internetu jsem našel volný přístup k webovému rozhraní CCcamu, které je dlouhodobě přístupné bez logovacích údajů. Na tomto spojení si můžeme ukázat nastavení CCcamInfoPhp. Do souboru "config.php" přidáme následující řádek:</p>
								<pre class="brush: text;">
$CCCamWebInfo[] = array("telephone.dyndns.info","16001");
								</pre>
								<p>CccamInfoPhp v1.02 obshuje asi nějakou programovou chybu, protože v případě, že chceme přidat více než jeden server přes webové rozhraní CCcamInfoPhp, vyskočí chyba php kódu. Z toho důvodu je důležité umět i přidat připojení na server manuálně.</p>
								<div class="textcontainer">
									<div class="portfolio-container">
										<div style="width: 390px; padding-left: 0;" class="portfolio number_text">
											<!-- **portfolio-thumb - Starts** -->
											<div class="portfolio-thumb">
												<figure>
													<img src="images/cccam/cccam_13.png" alt="image">
													<div class="image-overlay">
														<a class="zoom" href="images/cccam/cccam_13.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
														<div class="portfolio-content">
															<h5> <a href="#"> Manuální nastavení připojení</a> </h5>
															<span class="fa fa-sort-up"></span>
														</div>
													</div>
												</figure>
											</div> <!-- **portfolio-thumb - Ends** -->
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4><span class="fa icon-icon_light"></span> Tipy</h4>
							<p><strong>1. Manuální update dat z CCcam serveru</strong></p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_12.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_12.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Manuální update dat</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>

							<p><strong>2. Testování pingu</strong></p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_10.png" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_10.png" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Testování pingu</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>

							<p><strong>3. Zobrazení více informací na titulní stránce</strong></p>
							<div class="textcontainer">
								<div class="portfolio-container">
									<div style="width: 390px;" class="portfolio number_text">
										<!-- **portfolio-thumb - Starts** -->
										<div class="portfolio-thumb">
											<figure>
												<img src="images/cccam/cccam_11.gif" alt="image">
												<div class="image-overlay">
													<a class="zoom" href="images/cccam/cccam_11.gif" data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
													<div class="portfolio-content">
														<h5> <a href="#"> Více info na titulní stránce</a> </h5>
														<span class="fa fa-sort-up"></span>
													</div>
												</div>
											</figure>
										</div> <!-- **portfolio-thumb - Ends** -->
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
