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
								<p><span class="fa fa-calendar"> </span> Datum: 18.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>CCcam telnet</h4>
							<p><strong>CCcam</strong> je možné ovládat pomocí příkazu telnetu. </p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Příkazy telnetu pro CCcam</h4>

							<p><strong>Spuštění CCcamu s parametry:</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre>
To start you need the exact name of the bin file so here is an example

	CCcam_2.2.1 -&

Here are a few other options when you start it

	usage: CCcam [-d] [-C &lt;configfile&gt;]
	-d run in the foreground (implies -v and -q)
	-v be verbose
	-q don't use syslog (use on old systems)
	-C &lt;configfile&gt; use &lt;configfile&gt; instead of default (/var/etc/CCcam.cfg)
	-f filter on specific demux data (saves some CPU, but some platforms might not handle this very well)
	-n show network packets
	-s disable server
	-t show timing
	-l disable self-learning capabilities

To stop it you need
	
	killall -9 CCcam_2.2.1

Of course you also need to be in the correct location so you change it with this command

	cd /usr/bin
								</pre>
							</div>

							<p><span class="fa icon-icon_light"></span> <strong>Tip: Jak zobrazit pouze běžící proces CCcamu v telnetu:</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre>
ps |grep CCcam

nebo 

ps aux|grep CCcam 
								</pre>
							</div>

							<p><span class="fa icon-icon_light"></span> <strong>Tip: Jak editovat CCcam.cfg pomocí shell příkazů:</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre>
ADD USER :

	echo "F: USER PASS 5 1 0 { 0:0:1 }" >>/etc/CCcam.cfg

ADD CLINE:

	echo "C: host port user pass" >>/etc/CCcam.cfg

ADD NLINE :

	echo "N: host port user pass 01 02 03 04 05 06 07 08 09 10 11 12 13 14" >>/etc/CCcam.cfg  
								</pre>
							</div>
							<p>Osobně raději používám "Nano Editor" pro editaci textových souborů. S "Nano Editorem" máme plnou kontrolu nad celým textovým obsahem. Editor není součástí receiverů a musí se doinstalovat</p>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Instalace "Nano Editoru" do receiveru Enigma 2</h4>

							<div class="dt-sc-one dt-sc-lmarg25">
								<pre>
February 28, 2010
How to install nano on your dreambox
Filed under: DreamBox — Tags: dm800, DreamBox, nano, text editor — admin @ 2:50 am

The bundled vi package with dreambox really sucks ! and I am a big fan of nano text editor , as always 
I was disappointed to find a rebuilt nano package in Gemini or even dreamboxupdate repos , so I searched
the net and wonderfully found a nano package which works with my dm800 :D
instruction to install nano :
	
cd /sbin
wget http://downloads.nas-central.org/LS2_MIPSel/Packages/mipsel-nano_2.0
mv mipsel-nano_2.0 nano
chmod +x nano
								</pre>
							</div>
						</div>
						<p>"Nano Editor" umí editovat textové soubory přímo v receiveru.</p>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Nano Editor - Ke stažení</h4>
							<div class="dt-sc-tabs-vertical-frame-content">
								<a href="downloads/nano_editor/mipsel/nano_editor_v1.2/mipsel-nano_1.2">Nano editor v1.2</a><br>
								<a href="downloads/nano_editor/mipsel/nano_editor_v2.0/mipsel-nano_2.0">Nano editor v2.0</a>

							</div>
						</div>

					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
