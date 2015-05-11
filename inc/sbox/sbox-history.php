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
								<p><span class="fa fa-calendar"> </span> Datum: 16.4.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<h4>Historie sBoxu</h4>
						<div class="dt-sc-tabs-vertical-frame-content">
							<div class="clearfloat">

								<h5>0.0.5-4 #6 - Tests (4/2014)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed portlist, and works again</li>
									<li>Fixed bug with viaccess cards and readers phoenix / smargo / pcsc</li>
									<li>Fixed bug in priority</li>
									<li>New parameters for viaccess cards (see sbox.conf for more info). "Partial"-Support in NA nagra cards used (must specify mode = 3)</li>
									<li>Improved compatibility with smargo readers V2, you may now fail the V1 ... (reportad fault if you have one)</li>
								</ul>

								<h5>0.0.5-4 #5 - Tests (3/2014)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed bugs in CCcam</li>
									<li>Fixed? bug in newcamd</li>
									<li>Ability to get / put the card in hot (only in internal readers) - alpha</li>
									<li>Support for sbox.providers</li>
									<li>Best "parsing" of tiers in nagra cards (thank Mitego)</li>
								</ul>

								<h5>0.0.5-4 #4 (9/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed? newcamd server bug</li>
									<li>Improvements in internal reader (vuplus)</li>
								</ul>

								<h5>0.0.5-4 #3 - Tests (8/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Small changes on the server CCcam. He shows some more information on the webif, tab "Entitlements" (nagra cards only)</li>
									<li>Enhanced dvbapi in images with OE2.0</li>
								</ul>

								<h5>0.0.5-4 #2 - Tests (8/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed bug in dvbapi that had crept into the previous version</li>
								</ul>

								<h5>0.0.5-4 #1 - Tests (8/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Rewritten code newcamd server</li>
									<li>Nano-public version corrected d2020fxx/d20211xx viaccess cards (thanks to Mitego)</li>
								</ul>

								<h5>0.0.5-4 #0 - Tests (5/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Cambios en el dvbapi (probad los que tengáis cortes en la imagen)</li>
									<li>Pequeños cambios en el módulo newcamd</li>
								</ul>

								<h5>0.0.5-3 #F - Tests (4/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Back to the old timeout value in the Web Interface</li>
								</ul>

								<h5>0.0.5-3 #E - Tests (4/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>(dvbapi) Corregido fallo que provocaba que SBox "interrogase" a la tarjeta más de la cuenta al pasar por un canal con caid viaccess/irdeto</li>
								</ul>

								<h5>0.0.5-3 #D - Tests (4/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed bugs in the Web Interface</li>
									<li>Small changes in dvb-api</li>
									<li>SBox Added log-in Web Interface (Admin tab)</li>
									<li>Added autorestart (configurable, more info in the sbox.conf)</li>
									<li>If SBox closes unexpectedly, try restarting automatically (in testing)</li>
								</ul>

								<h5>0.0.5-3 #C - Tests (3/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>(NewCamd) fixed bug where repeated customers were</li>
									<li>(Prio) are corrected? failure occurring at times</li>
									<li>(Viaccess) proven performance ECM long</li>
									<li>(CCcam/NewCamd/Radegast) added support for long ECM (viaccess) using SBox as a client, the server can be either as "support" to the card</li>
								</ul>

								<h5>0.0.5-3 #B - Tests (3/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-3 #A - Tests (3/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-3 #F - Tests (1/2013)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-2 #E - Tests (11/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>(dvbapi) fixed bug causing that SBox "interrogation" to the card account by passing through a channel with caid viaccess/irdeto</li>
								</ul>

								<h5>0.0.5-2 #D - Tests (11/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>(NewCamd) fixed bug where repeated customers were</li>
									<li>(Prio) are corrected? failure occurring at times</li>
									<li>(Viaccess) proven performance ECM long</li>
									<li>(CCcam/NewCamd/Radegast) added support for long ECM (viaccess) using SBox as a client, the server can be either as "support" to the card</li>
								</ul>

								<h5>0.0.5-2 #C - Tests (10/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-2 #B - Tests (10/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-2 #A - Tests (4/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>(PC / SC) Compiled versions for PPC and x86 (64 bit) with support for OMNIKEY readers</li>
									<li>(Webif) Updated the "Entitlements" now shows more info </li>
									<li>(CCcam) Small changes </li>
									<li>(Viaccess) Now you should work long ECM (unaudited)</li>
								</ul>

								<h5>0.0.5-2 #9 - Tests (3/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Added support for OMNIKEY readers. Change the value of reader = 3 and sci = 0. If you have more than one reader, you create another slot with sci = 1 and so on. Currently only support these readers mips and x86 versions.</li>
									<li>(CCcam) I changed some things to try to solve the problems you had some.</li>
									<li>Changed the server configuration radegast more info on the sbox.conf</li>
									<li>Compiled version for routers based on dd-wrt</li>
								</ul>

								<h5>0.0.5-2 #8 - Tests (unknow)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Added support for Conax cards CAS7 married, require the receiver rsa original (thanks to mitega), more info in the sbox.conf</li>
									<li>Added option 'controlsid', this option may limit the number of channels that can open a card at a time, more info in the sbox.conf</li>
								</ul>

								<h5>0.0.5-2 #7 - Tests (3/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>(CCcam-Server) Fixed bug that caused a timeout on clients</li>
									<li>(Viaccess) Added support for multiple keys aes, more info in the sbox.conf</li>
									<li>(Viaccess)Added support for the nano and ECMs d2 long (thanks to mitega), without checking </li>
								</ul>

								<h5>0.0.5-2 #6 - Tests (3/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Small bug fixes in general</li>
								</ul>

								<h5>0.0.5-2 #5 - Tests (3/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Major changes both on the client and the server (CCcam) hoping to solve the falls that occurred.</li>
									<li>Other small changes </li>
								</ul>

								<h5>0.0.5-2 #4 - Tests (3/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed some problems with rom110 and is arranged by step if you decide to do also with other rom (fake len ecm), this may mean less resets or may not, depending on whether they have been sending such ecm .</li>
									<li>Small changes in the client / server CCcam. </li>
									<li>Added more "client-id" for newcamd server. Before the start SBox with the-s response time increased, now the time is the same as tearing with-s without it. </li>
									<li>Other small changes </li>
								</ul>

								<h5>0.0.5-2 #3 - Tests (2/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>SBox upload this version for those of you interested the testeeis. There have been changes in the newcamd server to try to achieve greater stability, have also been small changes to the client CCcam. In the webinterface has added a little chat.</li>
								</ul>

								<h5>0.0.5-2 #2 - Tests (2/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>There have been changes in the newcamd server to try to achieve greater stability, have also been small changes to the client CCcam. In the webinterface has added a little chat.</li>
								</ul>

								<h5>0.0.5-2 #1 - Tests (2/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-2 - Tests (2/2012)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>????</li>
								</ul>

								<h5>0.0.5-1 #3 (8/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>New fix</li>
								</ul>

								<h5>0.0.5-1 #2 (8/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Some fixes on webif and others</li>
								</ul>

								<h5>0.0.5-1 (8/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Some fixes</li>
									<li>Changes on dvbapi</li>
									<li>Now can send messages through webinterface between SBox clients <-> servers using cccam protocol</li>
									<li>Full emm support on cccam server</li>
								</ul>

								<h5>0.0.5-0 #4 (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixes on cccam protocol (server/client)</li>
									<li>Added cache for virtual cccam cards</li>
									<li>Removed downhop limitation between SBox clients <-> servers (only work on local mode)</li>
									<li>Now, if you connect to a local newcamd server, card will appears as hop0</li>
								</ul>

								<h5>0.0.5-0 #3 (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixes on cccam protocol (server/client)</li>
								</ul>

								<h5>0.0.5-0 #2 (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Como la lío</li>
								</ul>

								<h5>0.0.5-0 (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixes on cccam protocol (server/client)</li>
									<li>Added betatunnel support (see sbox.conf for details)</li>
									<li>More options for newcamd clients (see users.sbox)</li>
								</ul>

								<h5>0.0.4-f (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed some bugs</li>
									<li>Added cccam cardserver support, emm support only for local cards (very very experimental) (see sbox.conf and users.sbox for details)</li>
								</ul>

								<h5>0.0.4-e #2 (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed portlist bug</li>
								</ul>

								<h5>0.0.4-e (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>More changes related with nagra cards</li>
									<li>Added channelinfo support (see sbox.conf for details)</li>
								</ul>

								<h5>0.0.4-d #2 (7/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Some changes related with nagra cards (experimental)</li>
								</ul>

								<h5>0.0.4-d (6/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed bug when parsing pmt</li>
									<li>Changes on nagra io funcs (once again)</li>
									<li>CCcam cardclient support it's active again, no emm/server support atm (see users.sbox for details)</li>
								</ul>
								<p>!This version are not fully tested</p>

								<h5>0.0.4-c (6/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed some bugs found in the latest version</li>
									<li>Updated gcc compiler (e1/e2)</li>
								</ul>
								<p>!This version are not fully tested</p>

								<h5>0.0.4-b (6/2011)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Removed gbox support</li>
									<li>Removed cccam support</li>
									<li>Some fixes on conax smartcards</li>
								</ul>

								<h5>0.0.4-a (unknow)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Added gbox cardclient protocol <--mega mega beta ;-) (see users.sbox for details)</li>
									<li>Some other fixes</li>
								</ul>

								<h5>0.0.4-9 (unknow)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Removed sigma version</li>
									<li>New code on dvbapi</li>
									<li>Fixes on webif, now is more stable and faster</li>
									<li>Multitunner on ipbox is working now</li>
									<li>Added cccam cardclient protocol <--mega mega beta ;-) (see users.sbox for details)</li>
									<li>Added prio caid:provid (see sbox.conf for details)</li>
									<li>Added radegast cardserver protocol (see sbox.conf for details)</li>
									<li>Compiled version for FritzBox (not fully tested)</li>
								</ul>

								<h5>0.0.4-8 #2 (12/2010)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86, SIGMA & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed bug on dvbapi (AZbox)</li>
									<li>Fixed bug on Viaccess smartcards when it uses with phoenix</li>
									<li>Fixed a "trap" on Ncmed smartcards ;-)</li>
									<li>New features on users.sbox (see users.sbox for details)</li>
									<li>Removed newcamd cardclient config from sbox.conf (see users.sbox for details)</li>
									<li>Added radegast cardclient protocol (see sbox.conf for details)</li>
								</ul>

								<h5>0.0.4-8 #1 (12/2010)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86, SIGMA & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed some troubles on NDS/Conax/Viaccess smartcards</li>
									<li>Fixed bug on cache, becomes active again (see sbox.conf for details)</li>
									<li>Fixed bugs on webinterface</li>
									<li>Fixed some bugs on dvbapi</li>
									<li>Removed wrt54gl version</li>
									<li>Minor fixes</li>
									<li>Added radegast cardserver protocol (see sbox.conf for details)</li>
									<li>Added login on webinterface (see sbox.conf for more details)</li>
									<li>Added option "Manage Users" on webinterface, now you can add/edit/delete users without restart</li>
									<li>Added option to send log to an external udp server (see sbox.conf for details)</li>
									<li>Added option to force irdeto mode on "nagra over irdeto" cards (see sbox.conf for details)</li>
								</ul>

								<p><strong>IMPORTANT:</strong> users.sbox have new format!!</p>

								<h5>0.0.4-7 #4 (3/2010)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86, SIGMA & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed some problems (again), sorry</li>
									<li>Added support for NOI smartcards (NAGRA over IRDETO)</li>
									<li>Added support for more NAGRA smartcards</li>
									<li>Added phoenix support for IRDETO smartcards</li>
									<li>Added phoenix support for NDS smartcards (experimental)</li>
									<li>Added smartreader support for IRDETO smartcards</li>
								</ul>

								<h5>0.0.4-7 #3 (unknow)</h5>
								<p>(Non public)</p>

								<h5>0.0.4-7 #2 (3/2010)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86, SIGMA & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed some problems, sorry</li>
								</ul>

								<h5>0.0.4-7 (3/2010)</h5>
								<p>(PowerPC, MIPS, X86, wrt54gl, SIGMA & SH4)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Fixed hight CPU usage on mips version</li>
									<li>Fixed EMM handling on NAGRA smartcards</li>
									<li>Fixed EMM handling on SECA smartcards</li>
									<li>Fixed ECM handling on VIA smartcards</li>
									<li>Added EMM support for *** smartcards (not fully tested)</li>
									<li>Added support for CONAX smartcards</li>
									<li>Added algo to get RSA "n" from dt08 (nagra)</li>
									<li>Added multitunner support for E2 machines</li>
									<li>Added multiemm thread support (ppc/mips/sh4)</li>
									<li>Added smartreader support (experimental)</li>
									<li>Compiled version for X86_64bits (not tested)</li>
									<li>Compiled version for SIGMA (not fully tested)</li>
									<li>Compiled version for SH4_e2 (not fully tested)</li>
								</ul>
								<p>For SH4 users; Some cards don't work on internal cardreader, it's not sbox problem.
</p>
								<p><strong>SmartCards Supported:</strong></p>
								<div class="dt-sc-tabs-vertical-frame-content" style="float: none;">
									<table>
										<tr>
											<td><strong>System</strong></td>
											<td><strong>EMM</strong></td>
											<td><strong>ECM</strong></td>
											<td><strong>SCI</strong></td>
											<td><strong>Phoenix</strong></td>
											<td><strong>Smartreader</strong></td>
										</tr>
										<tr>
											<td>Nagra2/3 </td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
										</tr>
										<tr>
											<td>Nagra Tiger/NCMED</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
										</tr>
										<tr>
											<td>Viaccess</td>
											<td>No</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
										</tr>
										<tr>
											<td>Seca</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
										</tr>
										<tr>
											<td>Irdeto</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>No</td>
											<td>No</td>
										</tr>
										<tr>
											<td>Conax</td>
											<td>??</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>??</td>
											<td>??</td>
										</tr>
									</table>
								</div>
								<p><strong>Protocols Supported:</strong></p>
								<div class="dt-sc-tabs-vertical-frame-content" style="float: none;">
									<table>
										<tr>
											<td><strong>System</strong></td>
											<td><strong>Server</strong></td>
											<td><strong>Client</strong></td>
											<td><strong>EMM</strong></td>
											<td><strong>ECM</strong></td>
										</tr>
										<tr>
											<td>Newcamd</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
											<td>Yes</td>
										</tr>
									</table>
								</div>

								<h5>0.0.4-6 (1/2010)</h5>
								<p>(emu/cardserver for PowerPC, MIPS, X86 & wrt54gl)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Bugs solved</li>
									<li>Added support for *** smartcards</li>
									<li>Added support for Irdeto smartcards</li>
									<li>Added support for Tiger/Ncmed smartcards</li>
									<li>Added Webinterface</li>
								</ul>

								<h5>0.0.4 (7/2009)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Added EMM support to: local mode, newcamd (client and server mode) NO Viaccess EMM support</li>
									<li>New code for Seca smartcards</li>
									<li>New code for Nagra smartcards (now Rom110 works ok)</li>
									<li>Compiled version for AzboxHD</li>
									<li>Fixed few bugs found on 0.0.3 version</li>
								</ul>

								<h5>0.0.3 (6/2009)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>First public version</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
