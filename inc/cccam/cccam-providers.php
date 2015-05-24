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
								<p><span class="fa fa-calendar"> </span> Datum: 19.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam.providers</h4>
							<p>Konfigurační soubor k zobrazení jména provideru na místo CAID:ProvID ve webovém rozhraní a logovacích souborech</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Formát zápisu</h4>
							<div class="dt-sc-four-fifth">
								<pre class="brush: text;">
# Zakomentovaný řádek CCcam neakceptuje
# Poznámku můžeme ale nemusíme zapisovat
# Definice mezi uvozovkami není nijak přeně definována

CAID:ProvID "Jméno_provideru (poznámka)"
								</pre>
							</div>
						</div>
						
						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Příklady</h4>
							<div class="dt-sc-lmarg25">
								<pre>
# Příklad zápisu pro Skylink

0D030000 "Skylink CZ/Turner/Disney (23E/19E/9E)"
0D030004 "Skylink CZ (23E)"
0D030008 "Skylink CZ Premium (23E/19E)"
0D03000C "(ID.Unused) Skylink CZ" 
0D030010 "(ID.Unused) Skylink CZ"
0D030024 "(ID.Unused) Skylink CZ"
0D030028 "(ID.Unused) Skylink CZ Premium"

0D960000 "Skylink (23E)"
0D960004 "(ID.Unused) Skylink"
0D960008 "(ID.Unused) Skylink"
0D96000C "(ID.Unused) Skylink"
0D960010 "(ID.Unused) Skylink"

06240000 "Skylink (19E/23E)"
06240001 "(ID.Unused) Skylink"
06240002 "(ID.Unused) Skylink"
06240003 "(ID.Unused) Skylink"

# Příklad zápisu pro FreeSAT
0D970000 "FreeSAT (1W)"
0D970004 "(ID.Unused) FreeSAT"
0D970008 "(ID.Unused) FreeSAT"
0D97000C "(ID.Unused) FreeSAT"
0D970010 "(ID.Unused) FreeSAT"

# Ostatní příklady zápisu
06540000 "Poverkhnost+ DTH (36E)"
06540001 "(ID.Unused) Poverkhnost+ DTH (31E/36E/39E)"
06540002 "(ID.Unused) Poverkhnost+ DTH (31E/36E/39E)"
06540003 "(ID.Unused) Poverkhnost+ DTH (31E/36E/39E)"

06680000 "OSN (7W)/Towercom SK (DVB-T)/ CS Link (23E)"

0B000000 "Akta/KabelKiosk/TVN/DigitAlb/Technisat/Aktiv TV/My TV/T-Home/Magio Sat/Starmax HD (5E/9E/13E/16E/19E/60E/68E/4W/30W)"
0B00267A "KabelKiosk/TC Sat/Cabel"
0B001010 "TNK/N HDTV (13E) WilhelmTel DE [DVB-C]"
0B001030 "WilhelmTel DE [DVB-C]"
0B0071F1 "Technisat/MTV Unlimited (19E)"
0B00E030 "Canal Digital Nordic (1W)"
								</pre>
							</div>
						</div>

					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
