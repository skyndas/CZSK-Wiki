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
						<h4>Historie Cccamu</h4>
						<div class="dt-sc-tabs-vertical-frame-content">
							<div class="clearfloat">

								<h5>2.3.0 (15.12.2011)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>add seca tunneled nagra card support (may need card reset to see new revision after updating)</li>
									<li>add SID LIMIT (see CCcam.cfg for details)</li>
									<li>several smartcard fixes</li>
									<li>several network fixes</li>
								</ul>

								<h5>2.2.1 (21.11.2010)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>added via 3.0 emu (add working key in SoftCam.Key)</li>
									<li>fixed parsing GLOBAL EMM setting</li>
									<li>fixed occasional freeze (bug since 2.2.0)</li>
									<li>random loadbalance preference</li>
									<li>smartcard fixes</li>
								</ul>

								<h5>2.2.0 (17.11.2010)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>several smartcard fixes</li>
									<li>added SCIDEVICES setting (see CCcam.cfg for details)</li>
									<li>fixed timings display</li>
									<li>fixed possible crash with SMP</li>
									<li>don't clear SMARTCARD SID ASSIGN and LOADBALANCE settings when configfile changes (changing these settings requires a restart, so they should not be touched when config is re-read)</li>
									<li>added SMARTCARD SID REJECT (see CCcam.cfg for details)</li>
									<li>distribute ASSIGN/REJECT info to clients to improve performance (needs 2.2.0 server and clients)</li>
									<li>improved detecting when CCcam.cfg has changed</li>
									<li>added GLOBAL EMM setting (clientside), to control generation of GA EMM traffic (see CCcam.cfg for details)</li>
								</ul>

								<h5>2.1.4 (30.01.2010)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>ndz smartcard fixes</li>
									<li>ecm timeout decreased</li>
									<li>via26 emu</li>
									<li>seca handler improvement</li>
									<li>removed 256 NewCam trick</li>
								</ul>

								<h5>2.1.3 (14.11.2009)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>important cardreader fixes</li>
									<li>DRE crypt support</li>
									<li>963 support</li>
									<li>reenabled n2 emu</li>
								</ul>

								<h5>2.1.2 (20.07.2009)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>several smartcard fixes</li>
									<li>via emm fixes</li>
									<li>seca emm fixes</li>
									<li>added SMARTCARD SID ASSIGN, see CCcam.cfg for details</li>
									<li>TNT sat</li>
									<li>double login loop fix</li>
									<li>serverside emm overload fix</li>
								</ul>

								<h5>2.1.1 (05.04.2009)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed MINIMUM CLIENT VERSION check, broken since 2.1.0</li>
									<li>several smartcard fixes</li>
								</ul>

								<h5>2.1.0 (19.03.2009)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>keep persistant ecm counts for clients</li>
									<li>i2 emu</li>
									<li>IGNORE NODE option (see CCcam.cfg)</li>
									<li>emm caid tunneling</li>
									<li>Added seca handler to prefer or ignore SECA2 or SECA3 (see CCcam.cfg)</li>
								</ul>

								<h5>2.0.11 (16.12.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>support caid tunnelling</li>
									<li>improved chid selection</li>
								</ul>

								<h5>2.0.10 (09.11.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>improved system selection (based on distance). Note that prios from prio file overrule this and might give worse results</li>
									<li>fixed aborting lengthy request when switching channels</li>
									<li>fixed low audio pid detection</li>
								</ul>

								<h5>2.0.9 (23.05.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>improved system selection</li>
									<li>fixed irdeto chid selection</li>
									<li>dm800 detection</li>
									<li>fixed minor memleak</li>
								</ul>

								<h5>2.0.8 (28.02.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed n2 emu freezes with static (non-openssl) version</li>
									<li>improved system selection (making prio file mostly obsolete)</li>
								</ul>

								<h5>2.0.7 (16.02.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed camcrypt on static (non-openssl) version</li>
									<li>fixed segfault reading config</li>
								</ul>

								<h5>2.0.6 (05.02.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>ignore errors on emm demux (caused n2 AU to abort on certain hardware)</li>
									<li>tps au fix</li>
									<li>various optimizations; avoid server slowing down because of slow clients</li>
								</ul>

								<h5>2.0.5 (17.01.2008)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>global share limits (see CCcam.cfg for details)</li>
									<li>global minimum required downhops setting (see CCcam.cfg for details)</li>
									<li>n2 AU fix (/var/keys/ROM120.bin required)</li>
									<li>cryptoworks sc fix</li>
									<li>90f sc fix</li>
									<li>viaccess sc emm fix</li>
									<li>changed 'double client login reject' mechanism</li>
									<li>G line local sharing fixed</li>
									<li>graceful shutdown</li>
								</ul>

								<h5>2.0.4 (14.10.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>support more than one emm listener (see CCcam.cfg for details)</li>
									<li>tps au fixes</li>
									<li>nds sc init fix</li>
								</ul>

								<h5>2.0.3 (03.08.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>nagra fixes</li>
									<li>G line remote sharing fixed</li>
									<li>allow more limits in C/F/G</li>
								</ul>

								<h5>2.0.2 (30.07.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>nagra fixes</li>
									<li>irdeto camcrypt</li>
									<li>tps au</li>
									<li>cryptoworks keys no longer hardcoded</li>
								</ul>

								<h5>2.0.1 (09.07.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>changed G: line syntax, see CCcam.cfg for details</li>
									<li>multiple G: lines on the same local port supported</li>
									<li>each G: line can have different localhost</li>
									<li>each G: line can have different pass</li>
									<li>sharing between G: lines supported</li>
									<li>nagra2 MECM</li>
								</ul>

								<h5>2.0.0 (10.06.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>removed gbox_indirect support</li>
									<li>added gbox support</li>
									<li>several smartcard fixes</li>
									<li>several smartcard reader fixes</li>
									<li>fixed LOADBALANCE parsing (broken in 1.7.1)</li>
								</ul>

								<h5>1.7.1 (16.04.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>several smartcard fixes</li>
									<li>conax ca pin support (use 'PIN:' in CCcam.cfg)</li>
									<li>added SMARTCARD WRITE DELAY setting, to tweak performance on mastera/sc8in1 and such</li>
									<li>moved providernames to an external file /var/etc/CCcam.providers. Format is 'hexvalue "providername" comments'</li>
									<li>channelname can now be displayed in webif instead of caid:ident:sid when defined in /var/etc/CCcam.channelinfo</li>
									<li>demuxapi support dropped</li>
									<li>gbox indirect: reuse slots</li>
									<li>avoid glitch when zapping over recorded channel (7025)</li>
									<li>two cam devices on DM600</li>
								</ul>

								<h5>1.7.0 (20.03.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed password bug (consider using "MINIMUM CLIENT VERSION: 1.7.0" to avoid risk)</li>
									<li>added viaccess smartcard emm</li>
									<li>added support for gbox indirect/local connection</li>
									<li>added optional ip address/hostname to F: line, no ip given allows the connection from all ip's (See CCcam.cfg for example)</li>
									<li>tps au (tune to Hotbird transponder 10873 vertical)</li>
									<li>added smartcard custom post-init (see CCcam.cfg) Currently only T=0 supported</li>
									<li>support to override detected dvb api version</li>
									<li>support sc8in1 (note: PHOENIX READER PATH --> SERIAL READER in CCcam.cfg)</li>
								</ul>

								<h5>1.6.2 (19.02.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed crash when reading malformed SoftCam.Key</li>
									<li>fixed possible crash betacrypt smartcard emm</li>
									<li>minor irdeto improvements</li>
									<li>added config option to avoid (hidden) chids being ignored on irdeto smartcard (See CCcam.cfg)</li>
									<li>added timeslots per friend connection, now possible to only open connection for a few hours (See CCcam.cfg for example)</li>
									<li>Nagra emu fixes</li>
								</ul>

								<h5>1.6.1 (29.01.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed irdeto camdata setting (setting was not used correctly in 1.6.0)</li>
									<li>CCcam.prio: nagra caid:ident entries with nonzero ident now always match
(nagra ident is unknown at time of prio check, see CCcam.cfg for details)</li>
									<li>few small workarounds for buggy 7025 scidriver</li>
									<li>show share (nodeid_handlerid) in ecm.info</li>
									<li>tps.bin support (fixed location /var/keys/tps.bin), using systemtime</li>
								</ul>

								<h5>1.6.0 (22.01.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed wrong irdeto camdata default (since 1.4.0)</li>
									<li>implemented irdeto camdata setting</li>
									<li>improved self learning for irdeto</li>
									<li>fixed constant cw</li>
									<li>added biss support</li>
									<li>added priolist support</li>
									<li>max C / F username length now 20 instead of 19</li>
									<li>max C / F password length now unlimited instead of 16</li>
									<li>switches to enable/disable web and telnet info info interfaces</li>
									<li>implemented authentication for web and telnet info interfaces</li>
									<li>Note: the web and telnet info port paramater have changed name in the config file</li>
									<li>Note2: /var/keys/CCcam.ignore does not exist anymore and /var/etc/CCcam.prio is the new one
see CCcam.cfg for details</li>
								</ul>

								<h5>1.5.0 (unknow)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>improved dvb api detection (for systems with both demuxapi and dvb devicenodes)</li>
									<li>avoid exit on systems that provide nonworking dvb devicenodes</li>
									<li>avoid blocking on nonworking newcamd connection (since 1.4.0)</li>
									<li>added column in client info output to see the ecm time per client, only available if SHOW TIMING is on</li>
									<li>reworked share and provider info into tabular form</li>
								</ul>

								<h5>1.4.0 (05.01.2007)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>implemented irdeto camkey setting</li>
									<li>runtime dvb api version detection</li>
									<li>implemented share limits on client side (just like server side), see CCcam.cfg for details</li>
									<li>implemented load balancing between identical cards, see CCcam.cfg for details</li>
									<li>finetuned tcp behaviour and settings, saving some network load</li>
									<li>fixed newcamd connection emm</li>
									<li>seca smartcard entitlements fix</li>
									<li>irdeto smartcard emm fix</li>
									<li>removed -k cmdline parm, use config file instead</li>
									<li>cmdline parms could previously be overruled by rereading cfg file, fixed</li>
								</ul>

								<h5>1.3.1 (22.10.2006)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>7025: several bugfixes</li>
									<li>7025: decoding of all 8 channels (1.3.0 only 4)</li>
									<li>fixed viaccess smartcard</li>
									<li>fixed stealth mode, also set per N line now (see CCcam.cfg)</li>
								</ul>

								<h5>1.3.0 (27.09.2006 - přibližné datum)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed some 64 bits issues</li>
									<li>fixed radegast provider id and nano field</li>
									<li>reduced binary size</li>
									<li>immediately interrupt lengthy emu calculations when zap takes place</li>
									<li>userinfo was not correctly reread, therefore you needed to restart CCcam when certain parts of the userinfo changed, fixed</li>
									<li>it is now possible to block a channel for a client, based on caid:id:sid see F entry config for an example</li>
									<li>changed emu share limits behaviour, &lt; 1.3.0 an emu matched a F entry limit with {caid:ident:n}, for any nonzero ident. >= 1.3.0, an emu only matches {caid:0:n}</li>
									<li>ports 15000-15004 and port 14000 are now gone. Use 16000 and 16001 (html) instead</li>
									<li>implemented workerthread pool to handle client requests, to improve handling larger numbers of clients</li>
									<li>added support for cryptoworks camcrypted cards (incl arena tv). IPK handing is internal, no need for external keys and such</li>
									<li>added support for BEEF patched cards using nagra over seca tunnelling, add id's in config file(see example)</li>
									<li>added conax smartcard support (ecm+emm)</li>
									<li>added entitlements for cryptoworks and conax smartcards</li>
									<li>allow emm one extra level</li>
								</ul>

								<h5>1.2.1 (13.07.2006 - přibližné datum)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed smartcard support for some seca providers</li>
									<li>fixed smartcard activation for some seca providers</li>
								</ul>

								<h5>1.2.0 (06.07.2006 - přibližné datum)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed betacrypt entitlements</li>
									<li>fixed betacrypt emm</li>
									<li>fixed nds entitlements</li>
									<li>fixed nds freeze with certain ecm on phoenix</li>
									<li>irdeto emu emm added</li>
									<li>seca emu added</li>
									<li>initialise all cards before starting to decode, ensures immediate success on startup</li>
									<li>restart emm when a card is inserted, for easier activation of new cards</li>
									<li>faster client ecm handling (new client logon no longer delays requests of existing clients)</li>
									<li>command-based info interface on port 16000</li>
									<li>web info interface on port 16001
(As of now getting info from ports 15000-15004 is deprecated. This interface will be removed in the next release.)</li>
									<li>newcamd stealth mode added</li>
									<li>removed 1.1.1 backward compatibility code from share protocol, to allow full use of optimisations introduced in 1.1.1</li>
									<li>when CCcam was connecting to a share it kept on connecting on same ip, not very good when a dyndns address was in the config</li>
									<li>ecm request cache didn't work in all situations, caching fixed and improved.</li>
									<li>emm didn't always work on demuxapi systems (e.g. relook, mutant). Fixed.</li>
									<li><strong>WARNING:</strong> F: entry syntax changed, check and update your CCcam.cfg; added parameters to allow emusharing and emm, per client
</li>
								</ul>

								<h5>1.1.1 (unknow)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>when a share doesn't work for a certain channel, skip aliases of that share for that channel
(aliases are the same cards shared through different routes, they have equal nodeID_shareID at the end of their line in the output on port 15002)</li>
									<li>ignore '0' providerids on seca cards</li>
									<li>nagra2 emu fix for some providers</li>
									<li>fixed occasional nds emm freeze</li>
									<li>allow multiple L: entries to connect to different cards on the same camd3 server/port</li>
									<li>fixed phoenix on certain comport chipsets</li>
									<li>optimized share protocol (backward compatibility with &lt; 1.1.1 guaranteed, warning, will be removed in next release) </li>
								</ul>

								<h5>1.1.0 (unknow)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>camd3 support, one card per L: line</li>
									<li>support to add downshare limits to F: entries</li>
								</ul>

								<h5>1.0.0 - first public release (unknow)</h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>various smartcards</li>
									<li>various emus</li>
									<li>share2share support (C: and F: entry)</li>
									<li>newcamd support (N: entry)</li>
									<li>radegast support (R: entry)</li>
									<li>all shares are available for clients on a single port (default 12000)</li>
									<li>emu's can be shared one hop down only</li>
									<li>cards can be shared multiple hops down</li>
									<li>each CCcam node has a unique nodeid</li>
									<li>routes to a card are given with nodelists</li>
									<li>when a card is reachable through multiple routes, each unique route will be available as individual share
******* with nodeid 'abc' in the routelist are never sent to client with nodeid 'abc', to avoid route loops</li>
									<li>watch your shares, including full routelist, on port 15002</li>
									<li>start with -h to view available commandline options</li>
									<li>syslog support, start with -v for more verbosity</li>
									<li>start with -d to run in foreground, and log to console instead of syslog</li>
									<li>inserted cards (in either available reader) start working right away</li>
									<li>all used config and key files are re-read on change, never need to restart CCcam</li>
								</ul>

							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->   
