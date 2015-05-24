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
								<p><span class="fa fa-calendar"> </span> Datum: 21.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<h4>Historie Radegastu</h4>
						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 4.2 --</h5>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u>rel10 (2009-01-06)</u></h5>
								<p>See BUGS.txt for known bugs which will be fixed in new v5 line only </p>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[newcamd proto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed PW 1702 tuneling for newcamd clients talking original (public) version of protocol </li>
											<li>fixed resharing issue when "share" card config was used</li>
										</ul>
									</li>
									<li><strong>[rdgd proto]</strong> second fix for v4->v3 remap code (when remote server is using proto v3 or older) </li>
									<li><strong>[webmin plugin]</strong> cosmetic fixes</li>
								</ul>

								<h5><u>rel9 (2008-12-21)</u></h5>
								<p>See BUGS.txt for known bugs which will be fixed in new v5 line only (even it is true it can take ages)</p>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[module]</strong> API version 4.16 (added sharing decision cache)</li>
									<li><strong>[newcamd proto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed cryptoworks provider parsing </li>
											<li>added CAID+PROVID pairs to custData for BEEF extension</li>
											<li>Allows newcamd masquarrading (mask rdgd client as different emu), currently "newcamd,mg" and "newcamd,evo" is possible in cfg. </li>
											<li>Fixed overcaching SID bug in ecm parser</li>
											<li>Fixed overcaching TRACK bug in ecm parser</li>
											<li>Added EMM passing to share and/or virtual card </li>
											<li>Fixed bug when tunneled CAID was overwritten on ecm request</li>
										</ul>
									</li>
									<li><strong>[via card]</strong> fixed crashing on some cards</li>
									<li><strong>[via]</strong> removed internal TPSCrypt support (again and hopefully definitely)</li>
									<li><strong>[sci reader]</strong> switched to burst i/o to speed up things </li>
									<li><strong>[nds]</strong> fixed init bug on ppc </li>
									<li><strong>[sharing core]</strong> added possibility to tune stack size for threads (command line param "-t") </li>
									<li><strong>[crypto core]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>first attempt of unification and big code reuse</li>
											<li>added support for optional use of host crypto processor, if exists</li>
										</ul>
									</li>
									<li><strong>[nagra card]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>added autodetection of CAID (big thx to my friend) and appropriate filtering </li>
											<li>added tunnel hack for PW 1702 card</li>
										</ul>
									</li>
									<li><strong>[ird card]</strong> added support for configurable camkey (using boxkey config subsystem). Old, well-known keys remains built-in </li>
									<li><strong>[virtual card]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed passing card data in case provid = 0 (normal irdeto case) </li>
											<li>extended internal buffers to not crash if provider and/or SA lists are so long</li>
										</ul>
									</li>
									<li><strong>[rdgd proto]</strong> fixed internal v4->v3 remap (for those using old rdgd servers)</li>
								</ul>

								<h5><u>rel8 (2008-06-02)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[nds]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>camcrypt refactored for endianess </li>
											<li>emm parsing fixed </li>
											<li>added support for new turkey card </li>
										</ul>
									</li>
									<li><strong>[plugin]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>changed API version to 4.15 (added reader api calls)</li>
											<li>added support for external reader plugin</li>
											<li>added support for forcing ECM to fail by skip futher processing</li>
										</ul>
									</li>
									<li><strong>[nagra]</strong> added support for MECM60 for prov 11xx, 05xx, 31xx</li>
									<li><strong>[irdeto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>v2 emu ecm/emm support added (but key managemment is not enabled)</li>
											<li>camcrypt BF refactored </li>
										</ul>
									</li>
									<li><strong>[newcamd proto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed nagra resharing </li>
											<li>fixed cryptoworks resharing</li>
											<li>added config option to not drop connection on unsupported commands (like newcs private extensions) </li>
											<li>fixed passing seca card UA</li>
										</ul>
									</li>
									<li><strong>[rdgd proto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed bug when compatibility mode in client was used </li>
											<li>fixed parsing CAP data for v4 proto when no provider was given</li>
										</ul>
									</li>
									<li><strong>[mod-con-webmin]</strong> added reporting dynamically detected servers (using reflector protocol announcements) </li>
									<li><strong>[reflector proto]</strong> fixed buggy behaviour when no STATIC shares exist</li>
									<li><strong>[virtual card]</strong> changed positional parameters meaning. Now is "reader xx name = CAID:UA:PROVLIST:SALIST (WARNING: incompatibility change!) </li>
									<li><strong>[sharing]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed fd leaking when connect fails other then EINPROGRESS </li>
											<li>added last-resort routing (using fake 0xFEED CAID ;)</li>
										</ul>
									</li>
									<li><strong>[phoenix reader]</strong> speed up communication (thx for bastlir), optionally enabled</li>
									<li><strong>[conax card]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed using tuneled CAID </li>
											<li>fixed bug when conax CAID was higher then 0B00</li>
											<li>fixed SUB parsing (still only normal records)</li>
										</ul>
									</li>
									<li><strong>[cryptow]</strong> be smarter when detecting valid answer from card </li>
									<li><strong>[sci reader]</strong> enabled in sh4 build because of Sandali's sci api compatibility layer on ipbox </li>
								</ul>

								<h5><u>rel7 (2007-06-29)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[nagra]</strong> fixed provider 1101 (KabelDe) </li>
									<li><strong>[sharing]</strong> fixed serious bug in newcamd routing decision</li>
									<li><strong>[nds]</strong> fixed date calculation </li>
									<li><strong>[plugin]</strong> changed API version to 4.14 (added userdb api calls)</li>
								</ul>

								<h5><u>rel6 (2007-06-20)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[via]</strong> removed internal nonworking TPSCrypt support</li>
									<li><strong>[mod-emu-nagraus]</strong> added autoroll support for ROM102 (B1 update) </li>
									<li><strong>[core]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>added card-direct-connect extension to newcamd handler (reader xx direct connect = yes) </li>
											<li>moved startup of netconsole before everything else</li>
										</ul>
									</li>
									<li><strong>[plugin]</strong> changed API version to 4.13 </li>
									<li><strong>[newcamd proto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>enabled KEEPALIVE for client connections</li>
											<li>added port number to all messages (as requested by m8) </li>
											<li>fixed card data multiplication bug if reshare get reconnected </li>
										</ul>
									</li>
									<li><strong>[nagra]</strong> added MECM60 support for Premiere </li>
								</ul>

								<h5><u>rel5 (2007-04-03)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[distro]</strong> 
										<ul class="dt-sc-fancy-list caret-right">
											<li>changed "beta" status to "release"</li>
											<li>attached libcrypto.so.0.9.7 because some dreambox' images has stripped down version without all required symbols for rdgd </li>
										</ul>
									</li>
									<li><strong>[nagra card]</strong> fixed searching for rsa boxkey in config </li>
									<li><strong>[core]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed uninited caches if not enabled in config </li>
											<li>reimplemented "net console" option in very simple way = only one connection allowed, no command interpreter </li>
										</ul>
									</li>
									<li><strong>[sharing]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>enabled resharing possibility, added caching there </li>
											<li>fixed bug which stops reconnecting in case when login fails </li>
											<li>from now can be used named mode instead of numerical value inside "net share" option ('rdgd', 'newcamd', 'push-rdgd', 'push-newcamd') </li>
											<li>added simple detection of unwanted resharing ("reader xxx resharing detect = note") </li>
											<li>added possibility of use named sharing mode (1 = rdgd, 2 = newcamd, 3 = push-rdgd) </li>
										</ul>
									</li>
									<li><strong>[mod-con-webmin]</strong> added some more statistics, mainly per-user based but also for remote server </li>
									<li><strong>[irdeto card]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed card emm processing  </li>
											<li>camcrypt enhanced </li>
										</ul>
									</li>
									<li><strong>[module]</strong> API version 4.12 </li>
									<li><strong>[newcamd proto]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>fixed serious bug in client removal code </li>
											<li>reenabled nagra EMM after accidental removal </li>
											<li>fixed restoring SID in reshared packets</li>
										</ul>
									</li>
									<li><strong>[core]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>reworked system logging to better fit admin needs: <br>debug mode+level can be combined now.
												<ul>
													<li>Mode:  
														<ul>
															<li>network-init, network-login, network-ecm, network-emm, network-admin </li>
															<li>card-init, card-ecm, card-emm </li>
															<li>emu-init, emu-ecm, emu-emm </li>
															<li>keys-init, keys-check </li>
															<li>internal-init, internal-config </li>
														</ul>
													</li>
													<li>Level:  
														<ul>
															<li>error, warning, notice, debug </li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li><strong>[nagra]</strong> fixed MAP57 on ppc </li>
								</ul>

								<h5><u>beta4 (2006-12-08)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[module]</strong> added support for plugin module versioning, so from now is better practice to use mod-name.so.x.y (x.y = major.minor module API version, for ex. mod-con-webmin.so.4.11) </li>
									<li><strong>[rdgd proto]</strong> fixed detection of nagra CAID/provid pair on client side (for routing decision) </li>
									<li><strong>[nagra card]</strong>
										 <ul class="dt-sc-fancy-list caret-right">
											<li>added spending time calculation on card ecm  </li>
											<li>fixed card I/O, so no more timeouts (freezes) on some uncommon card answers </li>
										</ul>
									</li>
								</ul>

								<h5><u>beta3 (2006-12-07)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[module]</strong> fixed crashing if emu module doesn't have emm_update() API call</li>
									<li><strong>[newcamd proto]</strong> fixed passing SA data</li>
									<li><strong>[nagra]</strong> fixed MAP3b on ppc </li>
								</ul>

								<h5><u>beta2 (2006-12-05)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[tpscrypt]</strong>fixed BF, added multiple file support</li>
									<li><strong>[card config]</strong> card boxkey subsystem rewritten - no more static boxkey on every reader config. From now rdgd link good BK with card on every reader slot, so config not need to be changed if you are swapping cards with two slots. See config options "boxkeys" & "card boxkey ii = caid:ua:bk:optional-rsa"</li>
									<li><strong>[newcamd proto]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>fixed tps provider id parsing </li>
											<li>fix for double-freeing bug </li>
										</ul>
									</li>
									<li><strong>[camd]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>nagra: fixed CAT parser, so all EMM pids are used finally </li>
											<li>added prov.id setting for cryptoworks EMM packets </li>
										</ul>
									</li>
									<li><strong>[config]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>made net access file (shared.log) configurable. WARNING: Disabled by default now. To enable it use "net access file = shared.log" in config  </li>
											<li>added config option to set behaviour how to reject unallowed connections ("share client rejecting = new | old"). Works only for newcamd proto yet! </li>
											<li>added possibility to not detect card type by ATR, instead force ATR in config (reader xx special = atr:caid,atr-len:atr-hex)</li>
											<li>added config option to specify rdgd proto listener mode ("net protocol = v3 | v4") </li>
										</ul>
									</li>
									<li><strong>[core]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>added timestamp to all log outputs </li>
											<li>various mem leak fixes (thx, valgrind) </li>
											<li>refactored internals of card data managemment </li>
											<li>fixed crashing when cache len was undefined or zero </li>
										</ul>
									</li>
									<li><strong>[griffin]</strong>added detect of card, but not supported (yet)</li>
									<li><strong>[rdgd proto]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>fixed len processing for v4 proto </li>
											<li>added general key used in login stage ("net server key = 11 .. 88")</li>
											<li>added config option to restrict processing of ECM packets only destined to local cards ("net restricted = cards")</li>
										</ul>
									</li>
									<li><strong>[mod-emu-nagraus]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>moved there NA nagra support (map3B mostly) </li>
											<li>twister mode for MECM algo0 added (so old 102's dependancy was removed)</li>
											<li>twister mode for MECM algo1 added </li>
											<li>added special option "reader xx special = n2aux" to signal aux-able card</li>
										</ul>
									</li>
									<li><strong>[proto newcamd]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>added key database recheck on every zap </li>
											<li>real rand data generation reenabled </li>
											<li>if port is in blocking mode, then user gets only basic card data and emm-allowed flag will be cleared </li>
										</ul>
									</li>
									<li><strong>[module]</strong>added caching subsystem to API (v4.06) </li>
									<li><strong>[mod-con-webmin]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>look'n'feel updated </li>
											<li>added card data showing </li>
											<li>added showing plugins </li>
											<li>added showing SID </li>
										</ul>
									</li>
								</ul>

								<h5><u>beta1 (2006-08-24)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[seca card]</strong> moved PPV magic command to configurable option ("card xx special = seca-ppv-magic") </li>
									<li><strong>[viaccess]</strong> fixed BF for TPSv2 </li>
									<li><strong>[rdgd & newcamd proto]</strong> added KEEPALIVE sending </li>
									<li><strong>[card core]</strong> added possibility to overwrite card data (for ex. K3's nagra-over-seca tunneling) by using new config option "reader xx force card data = caid:provid1,provid2:addr1,addr2" </li>
									<li><strong>[sharing]</strong> added possibility to map ip to username in help of radegast.i2u file for rdgd proto </li>
									<li><strong>[tpscrypt]</strong> changed BF to bin db version </li>
								</ul>
							</div>
						</div>

						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 4.1.0 --</h5>
							<p>Informace jsou těžko dostupné, jednotlivé beta verze jsou vyčtené s fór</p>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u>beta43 (unknow)</u></h5>
								<h5><u>beta47 (unknow)</u></h5>
								<h5><u>beta11 (unknow)</u></h5>
								<h5><u>beta10 (unknow)</u></h5>
							</div>
						</div>

						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 4.0 --</h5>
							<p>Informace jsou těžko dostupné, jednotlivé beta verze jsou vyčtené s fór</p>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u>beta40 (unknow)</u></h5>
								<h5><u>beta29 (unknow)</u></h5>
								<h5><u>beta18 (unknow)</u></h5>
							</div>
						</div>

						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 3.0 --</h5>
							<p>Some what wasn't sucesfully included in final v3 release: </p>
							<ul class="dt-sc-lmarg25">
								<li>1. daemonization of camd (reordered to betaX)</li>
								<li>3. PW card EMM support (reordered to betaX)</li>
								<li>4. Nagra autoroll is disabled because code is broken </li>
								<li>5. Autorolled keys are not saved for via </li>
								<li>6. Remote EMM support works only for encrypted connection and is not optimized, yet </li>
							</ul>
							<p>-------- BETA report testings are welcome -------</p>
							<p> It is necessary to test all possible parts of project to get a next stable v3 core.</p>
							<p> We recommend to test all parts:</p>
							<ul class="dt-sc-lmarg25">
								<li>1. picture cleaning - all ECM decoding is OK? (nagra MECMv2, conax nano63 & sec2 codes are new there)</li>
								<li>2. card support - all cards are cleaning as before?</li>
								<li>3. card support - update for via, conax, ird & nagra is ok?</li>
								<li>4. nagra card cleaning</li>
								<li>5. via autoroll - is ok?</li>
								<li>6. nagra autoroll - is ok? (here is needed some tweaking inside AutoRoll.Key file to get autorolling for ROM10, ROM11) For example for ROM10 update for provider 6001 is needed a special N2 in the form: <N 600B N2 XXXXXXXXXX...XXX> See 600B => 6001 + 0A</li>
								<li>7. sharing without encryption is ok?</li>
								<li>8. sharing _WITH_ encryption is ok?</li>
								<li>9. sharing with UDP transport is ok?</li>
							</ul>
							<p>-------- BETA report testings are welcome -------</p>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u>beta3 (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li><strong>[camd]</strong>
										<ul class="dt-sc-fancy-list caret-right">
											<li>fixed timeshifting on Dreambox </li>
											<li>fixed default values </li>
										</ul>
									</li>
									<li><strong>[rdgd]</strong> fixed default values</li>
									<li><strong>[netpilot]</strong> auth fix</li>
								</ul>
								
								<h5><u>beta2 - first public release  (unknow)</u></h5>
								<div  class="dt-sc-tabs-vertical-container">
									<div class="dt-sc-one-fifth info_warning_alert_tip_block"><i class="fa fa-warning"></i> <strong>DŮLEŽITÉ: </strong></div>
									<div class="dt-sc-five-sixth info_warning_alert_tip_right">
										<p>(<i>Info k verzi 3 beta 2 od Kindzazi</i>).</p>

											<blockquote class="type2"> 
				                                <span class="fa fa-quote-left"></span> 
				                                <q>
				                                	<p>Kdyby to, nahodou, nekdo prehledl v README, tak znova opakuju:</p>
				                                	<p><strong>Radegast v3 beta2 obsahuje kod, ktery bohuzel vyvolava chybu v ovladaci demux1 coz ma za nasledek "kernel panics".</strong></p>
				                                	<p><strong>Prelozeno do cestiny - soucasna v3b2 je vhodna na vse, krome</strong></p>
				                                	<p><strong>!!! TIMESHIFTINGU A NAHRAVANI !!!</strong></p>
				                                	<p>Chyba je, bohuzel primo v ovladaci demux1 a jelikoz zadny jiny program tuto chybu nevyvolava tak neverim, ze hosi z DMTV se tim budou nejak zabyvat.</p>
				                                	<p>Stravil jsem nad pokusy najit "workaround" min. mesic a zatim bez kloudneho vysledku.</p>
				                                	<p>/Kzz (17.04.2004) </p>
				                                </q> 
				                                <span class="fa fa-quote-right"></span> 
				                            </blockquote>
										
									</div>
								</div>
								<div class="dt-sc-hr-invisible-very-small"></div>
								<hr>
								<p>Enjoy. /Radegast team, Earth, 13-12-2k4</p>
								<p>*******************************************************************************************************</p>
								<p> Kindzadza's note: </p>
								<p>"This is a 'GOOD-BYE' version of radegast suite released for public. After 2 years of development when code was enhanced/fixed very often it's time to say good bye. I personally learned much about DVB techno and - what is very important - found few very good friends in scene.</p>
  								<p>I can't say if I return sometimes in rdgd team simply because I don't know it. It's time to take a rest and enjoy Christmas.</p>
  								<p>If possible, I would like to thank all guys who were helping me in any way on my hard way over darkness. Guys, thank you! </p>
								<p>I'm not leaving scene at all. Only hiding myself and switch to other interesting projects ...</p>
								<p>Rdgd team is not death. There is already friend who will continue our efford."</p>
								<p>*******************************************************************************************************</p>
							</div>
						</div>

						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 2.2 --</h5>
							<p>Informace jsou těžko dostupné, jednotlivé beta verze jsou vyčtené s fór</p>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u>2.2 final-p1 (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Conax emu fix</li>
									<li>netpilot fixes/enh (shared.info support)</li>
								</ul>

								<h5><u>2.2 final (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Via card EMM support fix</li>
									<li>fixed problems when connection to remote server hangs rdgd</li>
									<li>more Betacryp cards support (not tested)</li>
									<li>fixed "ecm caid remove" code</li>
								</ul>

								<h5><u>2.2 alpha 10 (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>revived support for older netsharing clients (pre-alpha9)</li>
									<li>rewritten PMT parsing, removed all hacks there and add config-base filtering</li>
									<li>"atr timeout = 250" by default now, to honor some Sec2 cards</li>
									<li>fixed Conax card support</li>
								</ul>

								<h5><u>2.2 alpha 9 (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>support for INVERSE proto on phoenix (for Via and Nagra cards)</li>
									<li>better PMT parsing support</li>
									<li>modified netsharing proto to be more "independent developers friendly"</li>
									<li>netclient mode fix</li>
								</ul>

								<h5><u>2.2 alpha 8c (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>fixed version number on output (2.2alpha7 -> 2.2alpha8a)</li>
									<li>small cosmetic fixes</li>
									<li>make configurable a timeout for detecting card (atr timeout =)</li>
									<li>added quick fix(hack) for support Turkish football fans (LigTV on 23.5E)</li>
								</ul>

								<h5><u>2.2 alpha 8 (unknow)</u></h5>
								<ul class="dt-sc-fancy-list arrow" >
									<li>Conax softemu fix (thanx for Bulg mux' keys for that ;)</li>
									<li>Irdeto card support for (ACS2.x & 4.x) with EMM</li>
									<li>Betacrypt card support added (new Premiere card ok),but now finished</li>
									<li>Seca ECM pid duplication fix for PMT parsing</li>
									<li>ecm.info support for Conax, Via, Seca, Cryptow added</li>
								</ul>

								<h5><u>2.2 alpha 1 (unknow)</u></h5>
							</div>
						</div>

						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 2.0 --</h5>
							<p>Informace jsou těžko dostupné, jednotlivé beta verze jsou vyčtené s fór</p>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u></u></h5>
							</div>
						</div>

						<div class="dt-sc-tabs-vertical-frame-content">
							<h5>-- v 1.0 --</h5>
							<p>Tato verze byla pouze privátní</p>
							<div class="dt-sc-lmarg clearfloat">
								<h5><u></u></h5>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
