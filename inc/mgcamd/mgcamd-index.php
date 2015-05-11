			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>MGcamd</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="index.php?page=home-page">Emulátory</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">MGcamd</span>
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
							<li> <a href="index.php?category=mgcamd&page=mgcamd-index">O MGcamdu</a> </li>
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
								<p><span class="fa fa-calendar"> </span> Datum: 25.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>O MGcamdu</h4>
							
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Hlavní složky, soubory a porty Evocamdu - základní složky pro enigma 1 a 2</h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<ul>
									<li><strong>MGcamd.Binary</strong> = chmod 755 (DOPLNIT !!!)
										<ul>
											<li>Enigma1 -> <strong>/var/bin</strong></li>
											<li>Enigma2 -> <strong>/usr/bin</strong></li>
										</ul>
									</li>
									<li><strong>MGcamd.config</strong> = chmod 644 (DOPLNIT !!!)
										<ul>
											<li>Enigma1 -> <strong>/var/keys</strong></li>
											<li>Enigma2 -> <strong>/usr/keys</strong></li>
											<span>Volitelné soubory: DOPLNIT !!!</span>
										</ul>
									</li>
									<li><strong>MGcamd.keys</strong> = chmod 644 (DOPLNIT !!!)
										<ul>
											<li>Enigma1 -> <strong>/var/keys</strong></li>
											<li>Enigma2 -> <strong>/usr/keys</strong></li>
											<span>Volitelné soubory: DOPLNIT !!!</span>
										</ul>
									</li>
								</ul>
								<hr>
								<p><strong>POZNÁMKA ke složkám: </strong><br>Určení složky se v podstatě nerozděluje podle verze Image ale podle dané architektury boxu. Složky mohou být i jiné v závislosti na použitém image v boxu.</p>
								<p><strong>POZNÁMKA o jednotlivých souborech: </strong></p>
								<div class="dt-sc-lmarg25">
									<p><u>Používané soubory pro MGcamd</u></p>
									<ul class="dt-sc-fancy-list caret-right">
										<li><strong>MGcamd.bin</strong> - binární soubor.</li>
										<li><strong>mg_cfg</strong> - hlavní konfigurační soubor</li>
										<li><strong>newcamd.list</strong> - soubor pro konfiguraci připojení na newcamd server.</li>
										<li><strong>cccamd.list</strong> - soubor pro konfiguraci připojení na cccamd server.</li>
										<li><strong>priority.list</strong> - DOPLNIT !!!</li>
										<li><strong>ignore.list</strong> - DOPLNIT !!!</li>
										<li><strong>softcam.keys</strong> - DOPLNIT !!!</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
