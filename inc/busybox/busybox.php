			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>BusyBox</h1>
						<div class="breadcrumb">
							<span class="fa fa-home"></span>
							<a href="index.php?page=home-page">Úvod</a>
							<span class="fa fa-angle-right"></span>
							<span class="current">BusyBox</span>
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
							<li> <a href="index.php?category=busybox&page=busybox">O Busyboxu</a> </li>
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
									<p><span class="fa fa-calendar"> </span> Datum: 2.5.2015</p>
								</div> <!-- **entry-meta-data - Ends** -->
							</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Základní příkazy busyboxu</h4>
							<p>Zde uvedené příkazy busyboxu jsou platné příkazy pro boxy enigma a v jednotlivých verzí busyboxu se mohou lišit.</p>
							<p><strong>O busyboxu</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Výpis všech dostupných příkazů použitelných v busyboxu</p>
								<div class="dt-sc-one">
									<code>
busybox
									</code>
								</div>
								<p>Výpis všech dostupných příkazů použitelných v busyboxu  - uspořádání do seznamu</p>
								<div class="dt-sc-one">
									<code>
busybox --list
									</code>
								</div>
								<p>Zobrazení verze busyboxu</p>
								<div class="dt-sc-one">
									<code>
busybox | head
									</code>
								</div>
							</div>
							<p><strong>Ovládání enigma boxu</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Restart boxu</p>
								<div class="dt-sc-one">
									<code>
reboot
									</code>
								</div>
								<p>Vypnutí boxu do Standby modu</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/powerstate?newstate=0
									</code>
								</div>
								<p>Zapnutí boxu ze Standby modu</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/remotecontrol?command=116
									</code>
								</div>
								<p>Restart boxu</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/powerstate?newstate=2
									</code>
								</div>
								<p>Restart enigmy</p>
								<div class="dt-sc-one">
									<code>
wget -O /dev/null -q http://root:password@localhost/web/powerstate?newstate=3
									</code>
								</div>
							</div>
							<p><strong>Busybox - základní navigace</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Návrat do domácího ($HOME) adresáře</p>
								<div class="dt-sc-one">
									<code>
cd
									</code>
								</div>
								<p>Změna specifického adresáře
								<div class="dt-sc-one">
									<code>
cd /path/to/directory
									</code>
								</div>
								<p>Návrat o jeden adresář výšše z aktuálního adresáře</p>
								<div class="dt-sc-one">
									<code>
cd ..
									</code>
								</div>
							</div>
							<p><strong>Vytvoření nového adresáře</strong></p>
							<div class="dt-sc-lmarg25">
								<div class="dt-sc-one">
									<code>
mkdir [new_folder]
									</code>
								</div>
							</div>
							<p><strong>Smazání adresáře</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Smazání prázdného adresáře</p>
								<div class="dt-sc-one">
									<code>
rmdir [folder]
									</code>
								</div>
							</div>
							<p><strong>Výpis souborů</strong></p>
							<div class="dt-sc-lmarg25">
								<p>Zobrazení souborů a subadresářů v aktuálním adresáři</p>
								<div class="dt-sc-one">
									<code>
ls
									</code>
								</div>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Dokumenty ke stažení</h4>
							<ul>
								<li><img src="images/icons/icon_file-pdf-24x24.png" class="icon-right-set" alt="" /> <a href="downloads/busybox/BusyBox.pdf" title="" target="_blank">Seznam příkazů v BusyBoxu</a></li>
							</ul>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
