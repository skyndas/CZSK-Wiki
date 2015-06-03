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

<?php include ("inc/html_content/dos_cam-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 12.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>

						<div class="dt-sc-tabs-vertical-container">
							<h4>Historie DOSCamu</h4>
								<div class="clearfloat">
									<h5>V0.25</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- Fixed Segfault in CoolAPI</li>
									</ul>

									<h5>V0.24b</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- CoolAPI-Fix für neuen Apollo/Kronos-Treiber</li>
										<li>- Nagra Merlin Support (private build only)</li>
										<li>- Seca Nano 01 Support (private build only)</li>
									</ul>

									<h5>V0.23</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- einige Bug-Fixes (G09 AU, V14 Freezer, diverse Kleinigkeiten...)</li>
									</ul>

									<h5>V0.22</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- CoolAPI: Support für Kronos-Plattform hinzugefügt</li>
										<li>- Videoguard: bestimmte EMMs werden auf Grund des Pairings automatisch geblockt (ungetestet!)</li>
										<li>- EMU: Viaccess AU (TNTSat E1/E2) hinzugefügt
											<ul class="dt-sc-fancy-list caret-right">
												<li>M-Key in SoftCam.Key wird benötigt</li>
												<li>Beispiel: V D00040 M0 1A...58</li>
											</ul>
										</li>
										
									</ul>

									<h5>V0.21</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- AES-Key Parsing-Bug für Viaccess-EMU fixed (fixed TNTSat)</li>
									</ul>

									<h5>V0.20</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- Änderungen im EMU Cache</li>
										<li>- EMU CAIDs werden nicht mehr hinzugefügt, falls für diesen Services definiert sind</li>
										<li>- Ratelimit-Bug fixed</li>
										<li>- Diverse WebIf-Bugs fixed</li>
										<li>- Memleak im WebIf fixed</li>
										<li>- Diverse weitere kleinere Verbesserungen und Änderungen</li>
										<li>- neuer Default für gbox_reshare = 1</li>
									</ul>

									<h5>V0.19</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>- oscam.conf, oscam.server und oscam.user wurden zu doscam.cfg vereint</li>
										<li>-> Alle übrigen Config-Dateien wurden wie folgt umbenannt:
											<ul class="dt-sc-fancy-list caret-right">
												<li>doscam.dvbapi</li>
												<li>doscam.srvid</li>
												<li>doscam.services</li>
												<li>doscam.tiers</li>
												<li>doscam.guess</li>
												<li>doscam.whitelist</li>
												<li>doscam.provid</li>
												<li>doscam.ac</li>
											</ul>
										</li>
										<li>- Pincodes können ab jetzt in doscam.cfg unter [pincode] definiert werden
											<ul class="dt-sc-fancy-list caret-right">
												<li>Format: HHHHHHHHHHHHHHHH:XXXX (H=Hexserial, 8-stellig und im Webif unter den Entitlements ablesbar, X=4-stelliger Pin)</li>
												<li>Beispiel für Karte mit Hexserial 0000AABBCCDD0000 und Pin 1234:<br><br>
													<pre>
[pincode]
0000AABBCCDD0000:1234
													</pre>
												</li>
											</ul>
										</li>
										
										<li>- AES Keys können ab jetzt in doscam.cfg unter [crypto] definiert werden
											<ul class="dt-sc-fancy-list caret-right">
												<li>Format für AES-Keys: A:CAID:ProvID:KeyID:AESKey</li>
												<li>Das A steht für AES. Später wird es ggf. noch andere Sachen unter [crypto] geben</li>
												<li>Beispiel für 0500:030B00:<br><br>
													<pre>
[crypto]
A:0500:030B00:0D:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
													</pre>
												</li>
											</ul>
										</li>

										<li>- Ratelimits können ab jetzt in doscam.cfg unter [ratelimit] definiert werden
											<ul class="dt-sc-fancy-list caret-right">
												<li>Format: CAID:[ProvID]:[Srvid]:[Chid]:Ratelimitecm:Ratelimittime(ms):Srvidholdtime(ms)</li>
												<li>Einträge in eckigen Klammern sind optional</li>
												<li>Beispiel für 0100:00006A für alle SIDs:<br><br>
													<pre>
[ratelimit]
0100:00006A:::4:11000:
													</pre>
												</li>
											</ul>
										</li>

										<li>- Neuer Reader-Parameter "slots", der es bei einer Quadmouse, MCR und ähnlichen Geräten überflüssig macht, für jeden Slot einen Reader zu definieren
											<ul class="dt-sc-fancy-list caret-right">
												<li>Als device muss immer nur der erste Slot angegeben werden</li>
												<li>Beispiel für einen Betrieb mit einer Quadmouse (4 Slots):<br><br>
													<pre>
[reader]
label = quad
protocol = mouse
device  = /dev/ttyUSB0
slots = 4
group = 1
													</pre>
												</li>
												<li>Beispiel für einen Betrieb mit einem MCR8 (8 Slots):<br><br>
													<pre>
[reader]
label = mcr8
protocol = sc8in1
device = /dev/ttyUSB0:1
slots  = 8
detect  = cts
group = 1
													</pre>
												</li>
											</ul>
										</li>
										<li>- Verbesserungen in der DVBApi für request_mode = 1</li>
										<li>- Verbesserungen bei der automatischen Erkennung von internen Slots</li>
										<li>- Bug in CCCam-Protokoll gefixed, der zu Freezern führen konnte</li>
										<li>- ein paar seltene Segfaults gefixed</li>
										<li>- Anpassungen im T14-Protokoll für Coolstream-Geräte</li>
										<li>- neues BISS-Format (onid sid vpid), z.B. F onidsidvpid 00 XXXXXXXXXXXXXXXX</li>
										<li>- gbox-Protokoll angepasst, damit es weiterhin mit der OSCam kompatibel ist (long ecm support und gbox_my_password unter [gbox] statt [reader])</li>
										<li>- CacheEX, CSP und CW Cycle Check vom Code entfernt</li>
									</ul>

									<h5>V0.18</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li>[DVBApi]
											<ul class="dt-sc-fancy-list caret-right">
												<li>- fixed eventuell auftretende doppelte Anfragen</li>
											</ul>
										</li>
										<li>[Coolstream]
											<ul class="dt-sc-fancy-list caret-right">
												<li>- fixed möglichen Crash auf Coolstream-Geräten</li>
											</ul>
										</li>
									</ul>

									<h5>V0.17</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.16</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.15</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.14</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.13</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.12</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.11 - base OSCam r8589</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.10</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.09</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.08</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.07 - base OSCam r7963</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.06 - base OSCam r7951</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.05 - base OSCam r7951</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.04  - base OSCam r7948</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.03  - base OSCam r7943</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.02</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>

									<h5>V0.01</h5>
									<ul class="dt-sc-fancy-list arrow" >
										<li></li>
									</ul>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
