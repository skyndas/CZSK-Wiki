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
								<p><span class="fa fa-calendar"> </span> Datum: 22.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<h4>Instalace Radegastu na LINUXu</h4>
							<p>Testoval jsem instalaci Radegastu v4.2 rel10 na Xubuntu.</p>
							<p><strong>1. Složky, soubory a porty Radegastu v Xubuntu</strong></p>
							<table>
								<tr>
									<td><strong>Program files</strong></td>
									<td>/var/bin - rdgd, mod-con-webmin.so.4.16</td>
								</tr>
								<tr>
									<td><strong>Config file</strong></td>
									<td>/var/bin - radegast.cfg, radegast.users</td>
									<p>Pokud uložíme konfigurační soubor "radegast.cfg" do jiné složky např. "/var/etc" musíme spustit Radegast s parametrem "-c"</p>
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
							<p>V případě, že se objeví následující chybová hláška po spuštění Radegastu musíme nainstalovat potřebné knihovny</p>
							<div>
								<pre class="brush: text;">
./rdgd.i386: error while loading shared libraries: libcrypto.so.0.9.7: cannot op en shared object file: No such file or directory
								</pre>
							</div>
							<p><strong>2. Instalace knihoven</strong></p>
							<p>Nejsem žádný linuxový guru, ale pomohlo mi instalovat knihovny následujícím způsobem</p>
							<div class="dt-sc-lmarg25">
								<p><strong>32-bit</strong></p>
								<pre class="brush: text;">
$ wget http://ftp.us.debian.org/debian/pool/main/o/openssl/libssl0.9.8_0.9.8o-4squeeze14_i386.deb
$ sudo dpkg -i libssl0.9.8_0.9.8o-4squeeze14_i386.deb
								</pre>
								<p><strong>64-bit (AMD)</strong></p>
								<pre class="brush: text;">
$ wget http://ftp.us.debian.org/debian/pool/main/o/openssl/libssl0.9.8_0.9.8o-4squeeze14_amd64.deb
$ sudo dpkg -i libssl0.9.8_0.9.8o-4squeeze14_amd64.deb
								</pre>
							</div>
							<p><strong>3. Spuštění Radegastu</strong></p>
							<div class="dt-sc-lmarg25">
								<p><strong>Spuštění bez zadání cesty konfiguračního souboru</strong></p>
								<p>Je nutné umístit konfigurační soubor "radegast.cfg" do stejné složky jako binární soubor Radegastu tj. "/var/bin"</p>
								<pre class="brush: text;">
./rdgd
								</pre>
								<p><strong>Spuštění se zadáním cesty konfiguračního souboru</strong></p>
								<p>Tímto způsobem spustíme Radegast server pokud se soubor "radegast.cfg" nenachází ve stejné složce s binárním souborem.</p>
								<pre class="brush: text;">
./rdgd -c /var/etc/radegast.cfg
								</pre>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
