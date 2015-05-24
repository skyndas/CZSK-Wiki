			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>DOSCam</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="fa fa-cube"></span>
							<a href="index.php?page=home-page">Emulátory</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">DOSCam</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Container starts-->
			<div class="container">
				<div class="dt-sc-margin70"></div>
				<!-- **secondary - starts** --> 
				<section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

<?php include ("inc/html_content/doscam-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 13.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<h4>DOSCam.cfg</h4>
							<p>Soubor <strong>doscam.cfg</strong> obsahuje jednotné nastavení pro oscam.conf, oscam.server a oscam.user z původního OSCamu.</p>
							<p>Všechny ostatní konfigurační soubory byly přejmenovány takto: </p>
							<ul class="dt-sc-fancy-list caret-right dt-sc-lmarg25">
								<li>doscam.dvbapi</li>
								<li>doscam.srvid</li>
								<li>doscam.services</li>
								<li>doscam.tiers</li>
								<li>doscam.guess</li>
								<li>doscam.whitelist</li>
								<li>doscam.provid</li>
								<li>doscam.ac</li>
							</ul>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>DOSCam.cfg - popis jednotlivých položek</h4>
							<h5>DOSCam.cfg - index</h5>

						</div>

						<div class="dt-sc-tabs-vertical-container">
							<hr>
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<h4><strong class="article_number">1. </strong> Sekce [global]</h4>
							<p>Sekce [global] obsahuje globální paramtery jako dubugging, logging, monitor, protocol a anti-cascading.</p>
						</div>

						<div class="dt-sc-tabs-vertical-container dt-sc-lmarg25">
							<a name="1.1" class="linkname"></a>
							<h5><strong class="article_number">1.1. </strong> zeroconf</h5	>
							<p>POPIS DOPLNIT!!!</p>
							<p><strong>Hodnoty parameteru:</strong></p>
							<code>
zeroconf = 0	# deaktivováno
zeroconf = 1 	# aktivováno
							</code>
							<p><strong>Defaultní hodnota:</strong></p>
							<code>
zeroconf = 1
							</code>
						</div>

						<div class="dt-sc-tabs-vertical-container dt-sc-lmarg25">
							<a name="1.2" class="linkname"></a>
							<h5><strong class="article_number">1.2. </strong> serverip</h5	>
							<p>Bind service to specified IP-address. Pokud není zadaná hodnota DOSCam poslouchá všechny IP.</p>
							<p><strong>Příklad:</strong></p>
							<code>
serverip = 192.168.178.1
							</code>
							<p><strong>Defaultní hodnota:</strong></p>
							<code>
serverip =
							</code>
						</div>

						<div class="dt-sc-tabs-vertical-container dt-sc-lmarg25">
							<a name="1.3" class="linkname"></a>
							<h5><strong class="article_number">1.3. </strong> nice</h5	>
							<p>POPIS DOPLNIT!!!</p>
							<p><strong>Příklad:</strong></p>
							<code>
DOPLNIT!!!
							</code>
							<p><strong>Defaultní hodnota:</strong></p>
							<code>
nice = -1
							</code>
						</div>

						<div class="dt-sc-tabs-vertical-container dt-sc-lmarg25">
							<a name="1.4" class="linkname"></a>
							<h5><strong class="article_number">1.4. </strong> netprio</h5	>
							<p>POPIS DOPLNIT!!!</p>
							<p><strong>Hodnoty parameteru:</strong></p>
							<code>
DOPLNIT!!!
							</code>
							<p><strong>Defaultní hodnota:</strong></p>
							<code>
netprio = 0
							</code>
						</div>

						<div class="dt-sc-tabs-vertical-container dt-sc-lmarg25">
							<a name="1.5" class="linkname"></a>
							<h5><strong class="article_number">1.5. </strong> bindwait</h5	>
							<p>POPIS DOPLNIT!!!</p>
							<p><strong>Hodnoty parameteru:</strong></p>
							<code>
DOPLNIT!!!
							</code>
							<p><strong>Příklad:</strong></p>
							<code>
bindwait = 20  # waiting time 20 seconds
							</code>
							<p><strong>Defaultní hodnota:</strong></p>
							<code>
bindwait = 120 # waiting time 120 seconds
							</code>
						</div>


					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
