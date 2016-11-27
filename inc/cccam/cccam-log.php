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

    <?php include("inc/html_content/cccam-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 24.4.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam logování</h4>
        <p><strong>Popis CCcam logu je z verze 2.3.0</strong> a v každé verzi CCcamu může být log odlišný. </p>
        <p>Pro zapisování logu CCcamu musíme provést následující:</p>
        <p><strong>1. </strong> V CCcam.cfg povolíme logování (defaultně je vypnuto):<br><br>
          <code>
            DEBUG : yes
          </code>
          <strong>2. </strong> Spustit CCcam přes telnet<br><br>
          <code>
            CCcam -d >>/var/log/debug &
          </code>
        </p>
        <p>Log soubor "debug" najdeme ve "var/log/" . Samozřejmně si můžeme zvolit název CCcam logu dle svého uvážení
          například místo souboru "debug" použijeme "cccamlog.log . Potom spustíme CCcam s následujícím nastavením a
          parametry:</p>
        <p>
          <code>
            CCcam -d >>/var/log/cccamlog.log &
          </code>
        </p>
        <p>CCcam ukládá log každých 4096 bitů a zatím nevím zdali má nějakou omezenou velikost, takže POZOR na rychlý
          nárůst velikosti logovacího souboru.</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h5>CCcam log - způsob testu</h5>
        <p>Pro test (test byl určen k popisu CCcam logu verze 2.3.0) jsem server CCcam připojoval na druhý server OSCam
          s IP 192.168.1.100 a povolenými následujícími porty:
        <ul class="dt-sc-lmarg">
          <li>Port <strong>27010</strong> - pro cccam protokol (na portu pouze CAID 0D02)</li>
          <li>Port <strong>27019</strong> - pro newcamd protokol (na portu pouze CAID 0D02)</li>
          <li>Port <strong>27020</strong> - pro newcamd protokol (na portu pouze CAID 0D96)</li>
        </ul>
        </p>
        <p>CCcam server byl nainstalován na DM7025 s příjmem satelitních programů providera pouze freeSAT (CAID 0D02) a
          bez interních karet.</p>
        <br>
        <h5>Grafické znázornění konfigurace</h5>
        <div class="textcontainer">
          <div class="portfolio-container">
            <div style="width: 390px;" class="portfolio number_text">
              <!-- **portfolio-thumb - Starts** -->
              <div class="portfolio-thumb">
                <figure>
                  <img src="images/cccam/graficke_pripojeni_CCcamu_01.png" alt="image">
                  <div class="image-overlay">
                    <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_01.png"
                       data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                    <div class="portfolio-content">
                      <h5><a href="#"> Grafické znázornění konfigurace</a></h5>
                      <span class="fa fa-sort-up"></span>
                    </div>
                  </div>
                </figure>
              </div> <!-- **portfolio-thumb - Ends** -->
            </div>
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h5>CCcam log - index</h5>
        <ul class="dt-sc-lmarg">
          <li><a href="#1"><strong>1.</strong> - Spuštění CCcam</a></li>
          <li><a href="#2"><strong>2.</strong> - CCcam log</a></li>
          <li><a href="#3"><strong>3.</strong> - CCcam log - normální přihlášení uživatele</a></li>
          <li><a href="#4"><strong>4.</strong> - CCcam log - dvojité přihlášení uživatele</a></li>
          <li><a href="#5"><strong>5.</strong> - CCcam log - chybné heslo při přihlášení uživatele </a></li>
          <li><a href="#6"><strong>6.</strong> - CCcam log - přihlášení neexistujícího uživatele</a></li>
          <li><a href="#7"><strong>7.</strong> - CCcam log - otevření CCcam portu bez přihlášení</a></li>
          <li><a href="#8"><strong>8.</strong> - CCcam log - ECM OK pro DVB API (připojení na CCcam server)</a></li>
          <li><a href="#9"><strong>9.</strong> - CCcam log - ECM OK pro uživatele</a></li>
          <li><a href="#10"><strong>10.</strong> - CCcam log - EMM (připojení na CCcam server)</a></li>
          <li><a href="#11"><strong>11.</strong> - CCcam log - změna konfiguračního souboru</a></li>
          <li><a href="#12"><strong>12.</strong> - CCcam log - připojení na newcamd server</a></li>
          <li><a href="#13"><strong>13.</strong> - CCcam log - připojení na newcamd server (špatné jméno)</a></li>
          <li><a href="#14"><strong>14.</strong> - CCcam log - připojení na newcamd server (špatné heslo)</a></li>
          <li><a href="#15"><strong>15.</strong> - CCcam log - připojení na newcamd server (ECM OK pro DVB API)</a></li>
          <li><a href="#16"><strong>16.</strong> - CCcam log - zobrazení časování</a></li>
          <li><a href="#17"><strong>17.</strong> - CCcam log - zobrazení síťových paketů</a></li>
          <li><a href="#18"><strong>18.</strong> - CCcam log - spuštění CCcamu bez konfigurace a karet</a></li>
        </ul>
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <hr>
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <a name="1" class="linkname"></a>
        <h4><strong class="article_number">1. </strong> CCcam log - spuštění CCcamu</h4>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
								21:14:19.621 CCcam: ======================================================================
								21:14:19.624 CCcam: starting CCcam 2.3.0 compiled on Dec 15 2011@23:38:08
								21:14:19.624 CCcam: ======================================================================
								21:14:19.625 CCcam: online using nodeId 1f9b88a768da2734
								21:14:19.638 CCcam: dvb api3 detected
								21:14:19.640 CCcam: DM7025 detected
								21:14:19.640 CCcam: create 8 cam device(s)
								21:14:19.951 CCcam: readKeyfile: cannot open /var/keys/SoftCam.Key or not found
								21:14:19.951 CCcam: readKeyfile: cannot open /var/keys/AutoRoll.Key or not found
								21:14:19.952 CCcam: static cw not found or bad
								21:14:19.953 CCcam: parsed 0 entries from /var/etc/CCcam.prio
								21:14:19.955 CCcam: readProviderfile: cannot open /var/etc/CCcam.providers or not found
								21:14:19.956 CCcam: readChannelList: cannot open /var/etc/CCcam.channelinfo or not found
								21:14:19.959 CCcam: server started on port 12000
								</pre>
        </div>
        <p><strong>Vysvětlení logu:</strong></p>
        <p><u>Řádek 4.</u></p>
        <code>
          21:14:19.625 CCcam: online using nodeId 1f9b88a768da2734
        </code>
        <p>Toto je unikátní identifikátor pro každý server nebo uživatelského klienta po připojení</p>

        <p><u>Řádek 8.</u></p>
        <code>
          21:14:19.951 CCcam: readKeyfile: cannot open /var/keys/SoftCam.Key or not found
        </code>
        <p>Nejsou žádné statické klíče k dispozici; to nepředstavuje problém (nepovinné)</p>
        <p>V případě že je k dispozici soubor "SoftCam.Key" zobrazí se v logu informace o počtu načtených klíčů: </p>
        <code>
          21:14:19.951 CCcam: added 389 keys from /var/keys/SoftCam.Key.
        </code>

        <p><u>Řádek 10.</u></p>
        <code>
          21:14:19.952 CCcam: static cw not found or bad
        </code>
        <p>Nejsou žádné statické "cw" k dispozici; to nepředstavuje problém (nepovinné)</p>

        <p><u>Řádek 14.</u></p>
        <code>
          21:14:19.959 CCcam: server started on port 12000
        </code>
        <p>CCcam server je spuštěn na portu 12000 TCP (je to důležité pro nastavení vašeho routeru/firewallu)</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="2" class="linkname"></a>
        <h4><strong class="article_number">2. </strong> CCcam log</h4>
        <div class="dt-sc-one">
								<pre class="brush: text;">
21:14:20.139 CCcam: found nagra caid: 0x1815 ecmpid: 0x1395 id: 0x0
21:14:20.139 CCcam: found cryptoworks caid: 0xd02 ecmpid: 0x14c1 id: 0x0
21:14:20.139 CCcam: found cryptoworks caid: 0xd97 ecmpid: 0x1719 id: 0x0
21:14:20.139 CCcam: found irdeto caid: 0x653 ecmpid: 0x1845 id: 0x0
21:14:20.140 CCcam: cam[0] set PMT for sid=785a
21:14:20.142 CCcam: start EMM
21:14:20.183 CCcam: <-[31;1mnagra2 emu can't decode ecm (key: 0, ident: 0) no key<-[0m
21:14:20.184 CCcam: <-[31;1mcam[0] ecm even nok caid:0x1815 id:0x0 pid:0x1395 Unknown (took 0.001 seconds)<-[0m
21:14:20.187 CCcam: <-[31;1mcam[0] ecm odd nok caid:0xd02 id:0x0 pid:0x14c1 Unknown (took 0.000 seconds)<-[0m
21:14:20.334 CCcam: EMM demux 1 set
21:14:20.334 CCcam: EMM: not interested in 0D02:000000
21:14:20.335 CCcam: EMM: not interested in 1815:000000
21:14:20.335 CCcam: EMM: not interested in 0B02:000000
21:14:20.335 CCcam: EMM: not interested in 0B00:000000
21:14:20.335 CCcam: EMM: not interested in 0D97:000000
21:14:20.335 CCcam: EMM: start filter on irdeto emmpid: 0x30c caid: 0x653 id: 0x0
21:14:20.503 CCcam: <-[31;1mcam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1719 Unknown (took 0.000 seconds)<-[0m
21:14:20.903 CCcam: <-[31;1mchid 03EA<-[0m
21:14:20.903 CCcam: <-[31;1mchid 4E55<-[0m
21:14:20.903 CCcam: <-[31;1mcam[0] ecm even nok caid:0x653 id:0x0 pid:0x1845 Unknown (took 0.000 seconds)<-[0m
21:14:20.982 CCcam: <-[31;1mnagra2 emu can't decode ecm (key: 0, ident: 0) no key<-[0m
21:14:20.982 CCcam: <-[31;1mcam[0] ecm even nok caid:0x1815 id:0x0 pid:0x1395 Unknown (took 0.000 seconds)<-[0m
21:14:20.988 CCcam: <-[31;1mcam[0] ecm odd nok caid:0xd02 id:0x0 pid:0x14c1 Unknown (took 0.000 seconds)<-[0m
21:14:21.103 CCcam: <-[31;1mcam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1719 Unknown (took 0.000 seconds)<-[0m
21:14:21.581 CCcam: <-[31;1mchid 03EA<-[0m
21:14:21.582 CCcam: <-[31;1mchid 4E55<-[0m
21:14:21.582 CCcam: <-[31;1mcam[0] ecm odd nok caid:0x653 id:0x0 pid:0x1845 Unknown (took 0.000 seconds)<-[0m
21:14:21.684 CCcam: <-[31;1mnagra2 emu can't decode ecm (key: 0, ident: 0) no key<-[0m
21:14:21.684 CCcam: <-[31;1mcam[0] ecm even nok caid:0x1815 id:0x0 pid:0x1395 Unknown (took 0.000 seconds)<-[0m
21:14:21.688 CCcam: <-[31;1mremote ecm -> 192.168.1.100:27010 0xd02(0x000)<-[0m
21:14:21.842 CCcam: <-[31;1mremote ecm <- 192.168.1.100:27010 ok (took 0.153 seconds)<-[0m
21:14:21.842 CCcam: <-[31;1mcam[0] ecm odd ok caid:0xd02 id:0x0 pid:0x14c1 Unknown (took 0.154 seconds)<-[0m
21:14:23.293 CCcam: <-[31;1mremote ecm -> 192.168.1.100:27010 0xd02(0x000)<-[0m
21:14:23.973 CCcam: <-[31;1mremote ecm <- 192.168.1.100:27010 ok (took 0.680 seconds)<-[0m
21:14:23.974 CCcam: <-[31;1mcam[0] ecm even ok caid:0xd02 id:0x0 pid:0x14c1 Unknown (took 0.681 seconds)<-[0m 
								</pre>
        </div>
        <p><strong>Vysvětlení logu:</strong></p>
        <p><u>Řádky 1,2,3 a 4.</u></p>
        <code>
          21:14:20.139 CCcam: found nagra caid: 0x1815 ecmpid: 0x1395 id: 0x0 <br>
          21:14:20.139 CCcam: found cryptoworks caid: 0xd02 ecmpid: 0x14c1 id: 0x0 <br>
          21:14:20.139 CCcam: found cryptoworks caid: 0xd97 ecmpid: 0x1719 id: 0x0 <br>
          21:14:20.139 CCcam: found irdeto caid: 0x653 ecmpid: 0x1845 id: 0x0 <br>
        </code>
        <p>Informace o nalezených CAID daného programu (také z toho lze vyčíst cryptování dané služby)</p>

        <p><u>Řádek 6.</u></p>
        <code>
          21:14:20.142 CCcam: start EMM
        </code>
        <p>“Start EMM” značka nás informuje o tom, že CCcam začíná prohledávat klíče. </p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="3" class="linkname"></a>
        <h4><strong class="article_number">3. </strong> CCcam log - normální přihlášení uživatele</h4>
        <p>Po přihlášení uživatele k CCcam serveru vydíme v logu následující</p>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
								23:57:01.742 CCcam: login from 192.168.1.11
								23:57:01.750 CCcam: user user1 login attempt from 192.168.1.11
								23:57:01.754 CCcam: client user1@c94e87ca1070151c, running CCcam 2.0.11
								</pre>
        </div>
        <p>Přihlášeného uživatele vydíme také ve webovém rozhraní CCcamu na adrese
          "http://ip_receiver:16001/clients"</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="4" class="linkname"></a>
        <h4><strong class="article_number">4. </strong> CCcam log - dvojité přihlášení uživatele</h4>
        <p>Po přihlášení dvou uživatelů se stejnými přihlašovacími údaji k CCcam serveru vydíme v logu následující</p>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
								23:59:10.742 CCcam: user user1 login attempt from 85.16.213.176
								23:59:10.750 CCcam: double login (user1), (previous 84.202.182.63), reject
								23:59:10.754 CCcam: kick 85.16.213.176(), bad command
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="5" class="linkname"></a>
        <h4><strong class="article_number">5. </strong> CCcam log - chybné heslo při přihlášení uživatele</h4>
        <p>Uživatel existuje v CCcam.cfg ale přihlašuje se se špatným heslem.</p>
        <p>Při přihlášení uživatele se špatným heslem k CCcam serveru vydíme v logu následující</p>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
								00:13:46.502 CCcam: login from 192.168.1.11
								00:13:46.508 CCcam: user user1 login attempt from 192.168.1.11
								00:13:46.509 CCcam: wrong password supplied by 192.168.1.11
								00:13:46.509 CCcam: kick 192.168.1.11, signature failed
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="6" class="linkname"></a>
        <h4><strong class="article_number">6. </strong> CCcam log - přihlášení neexistujícího uživatele</h4>
        <p>Při přihlášení uživatele který není v CCcam.cfg k CCcam serveru vydíme v logu následující</p>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
								00:17:54.541 CCcam: login from 192.168.1.11
								00:17:54.548 CCcam: illegal user userX from 192.168.1.11
								00:17:49.724 CCcam: kick 192.168.1.11, signature failed
								</pre>
        </div>
        <p>Pokud máme v CCcam.cfg za uživatelem zadanou IP adresu, může se stát že pokud se uživatel připojí z jiné IP,
          CCcam server ho chápe jako neexistujícího</p>
        <p>POZOR na zápis v CCcam.cfg:</p>
        <code>
          F: user1 pass1 192.168.1.55
        </code>
        <p><strong>Poznámka:</strong> Konfiguraci uživatele s IP,jsem testoval a stále se mohu připojit.</p>
        <p>Test: OSCam z 192.168.1.11 na CCcam server 192.168.1.12</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="7" class="linkname"></a>
        <h4><strong class="article_number">7. </strong> CCcam log - otevření CCcam portu bez přihlášení</h4>
        <p>Vyčteno na internetu, že by se mělo zobrazit v logu následující</p>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
								14:22:19.541 CCcam: login from 155.10.10.132
								14:22:19.548 CCcam: kick 155.10.10.132, bad response
								</pre>
        </div>
        <p>TUTO MOŽNOST JSEM NETESTOVAL</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="8" class="linkname"></a>
        <h4><strong class="article_number">8. </strong> CCcam log - ECM OK pro DVB API (připojení na CCcam server)</h4>
        <p>V případě, že použijeme CCcam server jako klienta s připojením na další CCcam server, pro správnou ECM
          instrukci pro DVB API se zobrazí následující v logu</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
00:13:33.892 CCcam: <-[31;1mcam[0] ecm even ok caid:0xd02 id:0x0 pid:0x14b4 Unknown (took 0.750 seconds)<-[0m
00:13:43.142 CCcam: <-[31;1mremote ecm -> 192.168.1.100:27010 0xd02(0x000)<-[0m
00:13:43.941 CCcam: <-[31;1mremote ecm <- 192.168.1.100:27010 ok (took 0.799 seconds)<-[0m
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="9" class="linkname"></a>
        <h4><strong class="article_number">9. </strong> CCcam log - ECM OK pro uživatele</h4>
        <p>V případě, že na CCcam server připojíme uživatele/klienta (řádek v CCcam.cfg - F: user1 pass1) a tento CCcam
          server připojíme na další CCcam server, pro správnou ECM instrukci klienta se v logu zobrazí následující </p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
23:59:03.853 CCcam: client 00client ecm request for handler 0x66 0xd02(0x0) sid 0x765d ok: 1 (took 0.695 seconds)
23:59:13.156 CCcam: remote ecm -> 127.0.0.1:27010 0xd02(0x000)
23:59:13.915 CCcam: remote ecm <- 127.0.0.1:27010 ok (took 0.758 seconds)
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="10" class="linkname"></a>
        <h4><strong class="article_number">10. </strong> CCcam log - EMM (připojení na CCcam server)</h4>
        <p>NETESTOVÁNO - DOPLNIT</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="11" class="linkname"></a>
        <h4><strong class="article_number">11. </strong> CCcam log - změna konfiguračního souboru</h4>
        <p>Pokud změníme konfigurační nastavení v souboru CCcam.cfg v logu vydíme následující</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
16:07:09.890 CCcam: configfile changed. Updating...
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="12" class="linkname"></a>
        <h4><strong class="article_number">12. </strong> CCcam log - připojení na newcamd server</h4>
        <p>Připojení na newcamd server (N: 127.0.0.1 10000 dummy dummy 01 02 03 04 05 06 07 08 09 10 11 12 13 14 v
          CCcam.cfg)</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
16:07:10.379 CCcam: newcamd server 192.168.1.100:27020 user: OOuser1
16:07:10.473 CCcam: newcamd caid 0d96 providers 6 userid: 0
16:07:10.473 CCcam: newcamd card serial:    114e90cf
16:07:10.473 CCcam: newcamd prov 00 000004  00000000
16:07:10.473 CCcam: newcamd prov 01 000008  00000000
16:07:10.473 CCcam: newcamd prov 02 00000c  00000000
16:07:10.473 CCcam: newcamd prov 03 000010  00000000
16:07:10.473 CCcam: newcamd prov 04 000000  00000000
16:07:10.474 CCcam: newcamd prov 05 0000a0  00000000
								</pre>
        </div>
        <p>Z logu je patrné, že se CCcam server připojil na Newcamd server kde na portu "27020" je povolena karta s CAID
          0D96.<br>
          Tento log se zobrazí v případě, že je správně nastavené uživatelské jméno a heslo v CCcam.cfg v řádku "N:
          ....."</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="13" class="linkname"></a>
        <h4><strong class="article_number">13. </strong> CCcam log - připojení na newcamd server (špatné jméno)</h4>
        <p>Připojení na newcamd server se špatným uživatelským jménem (N: 127.0.0.1 10000 dummy dummy 01 02 03 04 05 06
          07 08 09 10 11 12 13 14 v CCcam.cfg)</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
16:25:14.807 CCcam: newcamd server 192.168.1.100:27020 user: 00userX
16:25:14.853 CCcam: newcamd receive error: no login ack
								</pre>
        </div>
        <p>Tento log se zobrazí v případě špatně zadaného uživatelského jména v CCcam.cfg v řádku "N: ....."</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="14" class="linkname"></a>
        <h4><strong class="article_number">14. </strong> CCcam log - připojení na newcamd server (špatné heslo)</h4>
        <p>Připojení na newcamd server se špatným uživatelským heslem (N: 127.0.0.1 10000 dummy dummy 01 02 03 04 05 06
          07 08 09 10 11 12 13 14 v CCcam.cfg)</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
16:25:14.807 CCcam: newcamd server 192.168.1.100:27020 user: OOuser1
16:25:14.853 CCcam: newcamd receive error: no login ack
								</pre>
        </div>
        <p>Tento log se zobrazí v případě špatně zadaného uživatelského hesla v CCcam.cfg v řádku "N: ....."</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="15" class="linkname"></a>
        <h4><strong class="article_number">15. </strong> CCcam log - připojení na newcamd server (ECM OK pro DVB API)
        </h4>
        <p>Po připojení na newcamd server se správným nastavením (N: 127.0.0.1 10000 dummy dummy 01 02 03 04 05 06 07 08
          09 10 11 12 13 14 v CCcam.cfg)
          začne CCcam DVB API dekódovat a v případě, že CCcam server dostane správné ECM odpovědi od Newcamd serveru se
          zobrazí následující</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
22:39:23.241 CCcam: .[31;1mnewcamd ecm -> 192.168.1.100:27019.[0m
22:39:23.807 CCcam: .[31;1mnewcamd ecm <- 192.168.1.100:27019 ok (took 0.565 seconds).[0m
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="16" class="linkname"></a>
        <h4><strong class="article_number">16. </strong> CCcam log - zobrazení časování</h4>
        <p>Pro zobrazení časů v sekundách musíme v CCcam.cfg mít položku "SHOW TIMING : yes". SHOW TIMING je defaultně
          vypnuto.</p>

        <p><strong>Nezobrazeno časování - "SHOW TIMING : no"</strong></p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
22:39:23.807 CCcam: .[31;1mnewcamd ecm <- 192.168.1.100:27019 ok.[0m
								</pre>
        </div>
        <p><strong>Zobrazeno časování - "SHOW TIMING : yes"</strong></p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
22:39:23.807 CCcam: .[31;1mnewcamd ecm <- 192.168.1.100:27019 ok (took 0.565 seconds).[0m
								</pre>
        </div>

        <p><span class="fa icon-icon_light"></span><strong>Zobrazeno časování s vypnutím zobrazením časování v CCcam.cfg
            "SHOW TIMING : no"</strong></p>
        <p>I přesto, že nemáme v CCcam.cfg zadanou položku "SHOW TIMING : yes" můžeme spustit CCcam přes telnet se
          zapnutím časování</p>
        <code>
          CCcam -t
        </code>
        <p>Více informací o spouštění CCcamu přes telnet najdeme v sekci <a
            href="index.php?category=cccam&page=cccam-telnet">Telnet</a></p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="17" class="linkname"></a>
        <h4><strong class="article_number">17. </strong> CCcam log - zobrazení síťových paketů</h4>
        <p>Při spuštění CCcamu přes telnet s následujícím parametrem ... </p>
        <code>
          CCcam -n
        </code>
        <p>... nám zobrazí v logu informaci o velikosti zasílaných paketů na server OSCam </p>

        <p>Ukázka o velikosti zasílaných paketů při přihlášení CCcamu na Newcamd server</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
23:57:14.051 CCcam: newcamd server 192.168.1.100:27019 user: 00user1
23:57:14.052 CCcam: newcamd_send: buffer of 59 bytes
23:57:14.052 CCcam: 0000: 00 00 00 00 43 43 00 00 - 00 00 00 00 E0 00 2C 30   ....CC.. - ......,0
23:57:14.052 CCcam: 0010: 30 4D 45 52 4D 54 58 00 - 24 31 24 61 62 63 64 65   0user1. - $1$abcde
23:57:14.052 CCcam: 0020: 66 67 68 24 72 5A 6C 5A - 4C 72 77 71 4F 6B 59 55   fgh$rZlZ - LrwqOkYU
23:57:14.052 CCcam: 0030: 51 4D 70 57 44 6D 35 7A - 43 30 00                  QMpWDm5z - C0.     
23:57:14.098 CCcam: 0000: E1 00 00                -                           ...      -    
23:57:14.098 CCcam: newcamd_send: buffer of 15 bytes
23:57:14.098 CCcam: 0000: 00 00 00 00 00 00 00 00 - 00 00 00 00 E3 00 00      ........ - ....... 
23:57:14.135 CCcam: 0000: E4 00 22 19 0D 02 00 00 - 00 00 00 00 00 00 02 00   .."..... - ........
23:57:14.135 CCcam: 0010: 00 00 00 00 00 00 00 00 - 00 00 00 00 A0 00 00 00   ........ - ........
23:57:14.135 CCcam: 0020: 00 00 00 00 00          -                           .....    -         
23:57:14.135 CCcam: newcamd caid 0d02 providers 2 userid: 0
23:57:14.135 CCcam: newcamd card serial:    00000000
23:57:14.135 CCcam: newcamd prov 00 000000  00000000
23:57:14.136 CCcam: newcamd prov 01 0000a0  00000000     
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="18" class="linkname"></a>
        <h4><strong class="article_number">18. </strong> CCcam log - spuštění CCcamu bez konfigurace</h4>
        <p>Ukázka logu spuštěného CCcam serveru bez dostupnosti CCcam.cfg a bez dostupnosti karet.</p>
        <div class="dt-sc-one">
								<pre class="brush: text;">
14:08:08.419 CCcam: ======================================================================
14:08:08.423 CCcam: starting CCcam 2.3.0 compiled on Dec 15 2011@23:38:08
14:08:08.424 CCcam: ======================================================================
14:08:08.424 CCcam: online using nodeId ddb3e28684110fa6
14:08:08.430 CCcam: read config: cannot open /var/etc/CCcam.cfg or not found
14:08:08.431 CCcam: dvb api3 detected
14:08:08.433 CCcam: DM7025 detected
14:08:08.434 CCcam: create 8 cam device(s)
14:08:08.802 CCcam: readKeyfile: cannot open /var/keys/SoftCam.Key or not found
14:08:08.803 CCcam: readKeyfile: cannot open /var/keys/AutoRoll.Key or not found
14:08:08.804 CCcam: static cw not found or bad
14:08:08.805 CCcam: parsed 0 entries from /var/etc/CCcam.prio
14:08:08.807 CCcam: readProviderfile: cannot open /var/etc/CCcam.providers or not found
14:08:08.808 CCcam: readChannelList: cannot open /var/etc/CCcam.channelinfo or not found
14:08:08.812 CCcam: server started on port 12000
14:08:08.818 CCcam: found nagra caid: 0x1815 ecmpid: 0x138f id: 0x0
14:08:08.818 CCcam: found cryptoworks caid: 0xd02 ecmpid: 0x14bb id: 0x0
14:08:08.819 CCcam: found cryptoworks caid: 0xd97 ecmpid: 0x1713 id: 0x0
14:08:08.819 CCcam: found irdeto caid: 0x653 ecmpid: 0x183f id: 0x0
14:08:08.820 CCcam: cam[0] set PMT for sid=75ff
14:08:08.834 CCcam: start EMM
14:08:08.868 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:08.868 CCcam: cam[0] ecm odd nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:08.935 CCcam: EMM demux 1 set
14:08:08.935 CCcam: EMM: not interested in 0D02:000000
14:08:08.936 CCcam: EMM: not interested in 1815:000000
14:08:08.936 CCcam: EMM: not interested in 0B02:000000
14:08:08.936 CCcam: EMM: not interested in 0B00:000000
14:08:08.936 CCcam: EMM: not interested in 0D97:000000
14:08:08.937 CCcam: EMM: start filter on irdeto emmpid: 0x30c caid: 0x653 id: 0x0
14:08:08.965 CCcam: cam[0] ecm even nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:09.223 CCcam: cam[0] ecm odd nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:09.747 CCcam: chid 03EE
14:08:09.747 CCcam: chid 4E55
14:08:09.748 CCcam: cam[0] ecm odd nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:09.767 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:09.767 CCcam: cam[0] ecm odd nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:09.865 CCcam: cam[0] ecm even nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:10.222 CCcam: cam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:10.747 CCcam: chid 03EE
14:08:10.747 CCcam: chid 4E55
14:08:10.751 CCcam: cam[0] ecm even nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:10.767 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:10.767 CCcam: cam[0] ecm odd nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:10.865 CCcam: cam[0] ecm even nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:11.123 CCcam: cam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:11.647 CCcam: chid 03EE
14:08:11.647 CCcam: chid 4E55
14:08:11.647 CCcam: cam[0] ecm even nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:16.667 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:16.667 CCcam: cam[0] ecm even nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:16.767 CCcam: cam[0] ecm odd nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:17.123 CCcam: cam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:17.567 CCcam: chid 03EE
14:08:17.567 CCcam: chid 4E55
14:08:17.568 CCcam: cam[0] ecm even nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:17.667 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:17.667 CCcam: cam[0] ecm even nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:17.766 CCcam: cam[0] ecm odd nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:18.025 CCcam: cam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:18.547 CCcam: chid 03EE
14:08:18.547 CCcam: chid 4E55
14:08:18.547 CCcam: cam[0] ecm even nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:18.567 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:18.567 CCcam: cam[0] ecm even nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:18.665 CCcam: cam[0] ecm odd nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:18.923 CCcam: cam[0] ecm even nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:19.447 CCcam: chid 03EE
14:08:19.447 CCcam: chid 4E55
14:08:19.447 CCcam: cam[0] ecm even nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:24.467 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:24.467 CCcam: cam[0] ecm odd nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:24.565 CCcam: cam[0] ecm even nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:24.724 CCcam: cam[0] ecm odd nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:25.247 CCcam: chid 03EE
14:08:25.247 CCcam: chid 4E55
14:08:25.248 CCcam: cam[0] ecm odd nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:25.267 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:25.267 CCcam: cam[0] ecm odd nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:25.368 CCcam: cam[0] ecm even nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:25.623 CCcam: cam[0] ecm odd nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:26.147 CCcam: chid 03EE
14:08:26.147 CCcam: chid 4E55
14:08:26.149 CCcam: cam[0] ecm odd nok caid:0x653 id:0x0 pid:0x183f Unknown
14:08:26.167 CCcam: nagra2 emu can't decode ecm (key: 0, ident: 0) no key
14:08:26.167 CCcam: cam[0] ecm odd nok caid:0x1815 id:0x0 pid:0x138f Unknown
14:08:26.267 CCcam: cam[0] ecm even nok caid:0xd02 id:0x0 pid:0x14bb Unknown
14:08:26.823 CCcam: cam[0] ecm odd nok caid:0xd97 id:0x0 pid:0x1713 Unknown
14:08:27.347 CCcam: chid 03EE
14:08:27.347 CCcam: chid 4E55
14:08:27.347 CCcam: cam[0] ecm odd nok caid:0x653 id:0x0 pid:0x183f Unknown   
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <div class="intro-text type2">
          <p><strong>Internetové odkazy ze kterých bylo při testech čerpáno</strong></p>
          <ul>
            <li><a href="http://www.csservis.com/knowledgebase/2/Cccam-English-Tutorial.html" target="_blank">Cccam-English-Tutorial</a>
            </li>
            <li><a href="http://www.zebradem.com/wiki/index.php?title=CCcam_Fehlermeldungen" target="_blank">ZebraDem -
                CCcam chybová hlášení</a></li>
          </ul>
          <p style="position: absolute; bottom: 20px; right: 20px;">
            <i>Vyčerpávající popis CCcam logu (skyndas)</i> <i class="fa fa-smile-o"
                                                               style="font-size:25px;font-weight:bold;margin-left:10px"></i>
          </p>
        </div>
      </div>

    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
