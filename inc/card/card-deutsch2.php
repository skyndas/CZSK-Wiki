<div class="breadcrumb-wrapper type2">
  <div class="container">
    <div class="main-title">
      <h1>Karty</h1>
      <div class="breadcrumb">
        <span class="fa fa-home"></span>
        <a href="index.php?page=home-page">Úvod</a>
        <span class="fa fa-angle-right"></span>
        <span class="current">Karty</span>
      </div>
    </div>
  </div>
</div>

<!-- Container starts-->
<div class="container">
  <div class="dt-sc-margin70"></div>
  <!-- **secondary - starts** -->
  <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <?php include("inc/html_content/card-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 17.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <h4>1. Kabel Deutschland D09 RSA-box Key</h4>
        <p>Informace dostupná z fór - není testováno</p>
        <p><strong>Info o kartě</strong></p>
        <ul class="dt-sc-lmarg25">
          <li>Card type:</li>
          <li>ATR: - 3B 9F 21 0E 49 52 44 45 54 4F 20 41 43 53 03 84 55 FF 80 6D
          <li>CAID: - 1834</li>
          <li>ROM Version: - DNASP122</li>
          <li>Revision: - RevF46</li>
          <li>Mhz: - 3.68</li>
        </ul>
        <!-- START DECODE RSA AND BOX KEY -->
        <!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
        <p><strong>RSA Key</strong></p>
        <!-- Decode key - 8A54468867159C1188D13ACE7DF348FA08BDF8BE33F1B2F72F74FBCD184C825519E517E3494A6DD8CF046630456111F952979DECCFF5176D890AE93F4E267711 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný RSA key</p>
          <textarea id="b64-rb0" class="code" rows="2" readonly>OEE1NDQ2ODg2NzE1OUMxMTg4RDEzQUNFN0RGMzQ4RkEwOEJERjhCRTMzRjFCMkY3MkY3NEZCQ0QxODRDODI1NTE5RTUxN0UzNDk0QTZERDhDRjA0NjYzMDQ1NjExMUY5NTI5NzlERUNDRkY1MTc2RDg5MEFFOTNGNEUyNjc3MTE=</textarea>
          <p>Dekódovaný RSA key</p>
          <textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
        </div>

        <p><strong>Box Key</strong></p>
        <!-- Decode key - 6660A9AE55A4847B -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný Box key</p>
          <textarea id="b64-rb1" class="code" rows="1" readonly>NjY2MEE5QUU1NUE0ODQ3Qg==</textarea>
          <p>Dekódovaný Box key</p>
          <textarea id="b64-lb1" class="code" rows="1" readonly></textarea>
        </div>

        <div style="width:100%;text-align:center;padding-bottom: 52px;">
          <button type="button" title="Decode" id="b64-decode0-1" style="margin:0px 15px;">
            <span><span>Dekódovat klíče</span></span></button>
        </div>
        <script type="text/javascript">
          jQuery('button#b64-decode0-1').click(function () {
            jQuery('textarea#b64-lb0').val(Base64.decode(jQuery('textarea#b64-rb0').val()));
            jQuery('textarea#b64-lb1').val(Base64.decode(jQuery('textarea#b64-rb1').val()));
          });
        </script>
        <!-- END DECODE RSA AND BOX KEY -->
        <p><strong>Nastavení interní čtečky OSCamu</strong></p>
        <div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# D09 im unterer internen Schacht
[reader]
label               = D09-Kabel-D(Kartenschacht-unten)
device              = /dev/sci0
protocol            = internal
caid                = 1834
ident               = 1834:000000
rsakey              = 8A54......7711
boxkey              = 66.........7B
detect              = cd
mhz                 = 368
cardmhz             = 368
group               = 1
emmcache            = 1,1,2,0
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>2. UM01 Germany Cable RSA-box Key</h4>
        <p>Informace dostupná z fór - není testováno</p>
        <p><strong>Info o kartě</strong></p>
        <ul class="dt-sc-lmarg25">
          <li>Card type: - Nagravision</li>
          <li>ATR: - 3F FF 95 00 FF 91 81 71 FE 47 00 44 4E 41 53 50 31 31 30 20 52 65 76 41 32 31 16
          <li>CAID: - 1831</li>
          <li>ROM Version: - DNASP110</li>
          <li>Revision: - RevA21</li>
          <li>Mhz: - 3.68</li>
        </ul>
        <!-- START DECODE RSA AND BOX KEY -->
        <!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
        <p><strong>RSA Key</strong></p>
        <!-- Decode key - B55E0EB0562805F1788BDA0CD8B856BF696CFF1CBF4ED62B85E643F385B0F8899275DEA669AC77BDA43A20CCB844A3AF5A2BE0622779FAB153D156957DF367FF -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný RSA key</p>
          <textarea id="b64-rb2" class="code" rows="2" readonly>QjU1RTBFQjA1NjI4MDVGMTc4OEJEQTBDRDhCODU2QkY2OTZDRkYxQ0JGNEVENjJCODVFNjQzRjM4NUIwRjg4OTkyNzVERUE2NjlBQzc3QkRBNDNBMjBDQ0I4NDRBM0FGNUEyQkUwNjIyNzc5RkFCMTUzRDE1Njk1N0RGMzY3RkY=</textarea>
          <p>Dekódovaný RSA key</p>
          <textarea id="b64-lb2" class="code" rows="2" readonly></textarea>
        </div>

        <p><strong>Box Key</strong></p>
        <!-- Decode key - A7642F57BC96D37C -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný Box key</p>
          <textarea id="b64-rb3" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
          <p>Dekódovaný Box key</p>
          <textarea id="b64-lb3" class="code" rows="1" readonly></textarea>
        </div>

        <div style="width:100%;text-align:center;padding-bottom: 52px;">
          <button type="button" title="Decode" id="b64-decode2-3" style="margin:0px 15px;">
            <span><span>Dekódovat klíče</span></span></button>
        </div>
        <script type="text/javascript">
          jQuery('button#b64-decode2-3').click(function () {
            jQuery('textarea#b64-lb2').val(Base64.decode(jQuery('textarea#b64-rb2').val()));
            jQuery('textarea#b64-lb3').val(Base64.decode(jQuery('textarea#b64-rb3').val()));
          });
        </script>
        <!-- END DECODE RSA AND BOX KEY -->
        <p><strong>Nastavení interní čtečky OSCamu</strong></p>
        <div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# UM01 im unteren internen Schacht
[reader]
label               = UM01(Kartenschacht-unten)
device              = /dev/sci0
protocol            = internal
caid                = 1831
ident               = 1831:000000,000401,001103
rsakey              = B55E......67FF
boxkey              = A7.........7C
detect              = cd
mhz                 = 368
cardmhz             = 368
ecmwhitelist        = 1831:4A
group               = 1
emmcache            = 1,1,2,0
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>3. UM02 Germany Cable RSA-box Key</h4>
        <p>Informace dostupná z fór - není testováno</p>
        <p><strong>Info o kartě</strong></p>
        <ul class="dt-sc-lmarg25">
          <li>Card type: - Nagravision</li>
          <li>ATR: - 3F FF 95 00 FF 91 81 71 FE 47 00 44 4E 41 53 50 31 34 32 20 52 65 76 47 43 32 65
          <li>CAID: - 1838</li>
          <li>ROM Version: - DNASP142</li>
          <li>Revision: - RevGC2</li>
          <li>Mhz: - 3.68</li>
        </ul>
        <!-- START IMAGE CARD -->
        <p><strong>Karta UM02 - Unitymedia Kabel BW</strong></p>
        <div class="textcontainer">
          <div class="portfolio-container">
            <div style="width: 250px;" class="portfolio number_text">
              <!-- **portfolio-thumb - Starts** -->
              <div class="portfolio-thumb">
                <figure>
                  <img src="images/cards/deutschland/unitymedia_um02.jpg" alt="image">
                  <div class="image-overlay">
                    <a class="zoom" href="images/cards/deutschland/unitymedia_um02.jpg" data-gal="prettyPhoto[gallery]"><span
                        class="fa fa-search"></span></a>
                    <div class="portfolio-content">
                      <h5><a href="#"> UM02 - Unitymedia Kabel BW </a></h5>
                      <span class="fa fa-sort-up"></span>
                    </div>
                  </div>
                </figure>
              </div> <!-- **portfolio-thumb - Ends** -->
            </div>
          </div>
        </div>
        <!-- END IMAGE CARD -->
        <!-- START DECODE RSA AND BOX KEY -->
        <!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
        <p><strong>RSA Key</strong></p>
        <!-- Decode key - B55E0EB0562805F1788BDA0CD8B856BF696CFF1CBF4ED62B85E643F385B0F8899275DEA669AC77BDA43A20CCB844A3AF5A2BE0622779FAB153D156957DF367FF -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný RSA key</p>
          <textarea id="b64-rb4" class="code" rows="2" readonly>QjU1RTBFQjA1NjI4MDVGMTc4OEJEQTBDRDhCODU2QkY2OTZDRkYxQ0JGNEVENjJCODVFNjQzRjM4NUIwRjg4OTkyNzVERUE2NjlBQzc3QkRBNDNBMjBDQ0I4NDRBM0FGNUEyQkUwNjIyNzc5RkFCMTUzRDE1Njk1N0RGMzY3RkY=</textarea>
          <p>Dekódovaný RSA key</p>
          <textarea id="b64-lb4" class="code" rows="2" readonly></textarea>
        </div>

        <p><strong>Box Key</strong></p>
        <!-- Decode key - A7642F57BC96D37C -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný Box key</p>
          <textarea id="b64-rb5" class="code" rows="1" readonly>QTc2NDJGNTdCQzk2RDM3Qw==</textarea>
          <p>Dekódovaný Box key</p>
          <textarea id="b64-lb5" class="code" rows="1" readonly></textarea>
        </div>

        <div style="width:100%;text-align:center;padding-bottom: 52px;">
          <button type="button" title="Decode" id="b64-decode4-5" style="margin:0px 15px;">
            <span><span>Dekódovat klíče</span></span></button>
        </div>
        <script type="text/javascript">
          jQuery('button#b64-decode4-5').click(function () {
            jQuery('textarea#b64-lb4').val(Base64.decode(jQuery('textarea#b64-rb4').val()));
            jQuery('textarea#b64-lb5').val(Base64.decode(jQuery('textarea#b64-rb5').val()));
          });
        </script>
        <!-- END DECODE RSA AND BOX KEY -->
        <p><strong>Nastavení interní čtečky OSCamu - nastavení č.1</strong></p>
        <div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# Konfiguration der Kartenleser und der Smartcards
# Label ist beliebig, möglichst einfach und kurz, man kann die Kartenbezeichnungen verwenden

# UM02 im unteren internen Schacht
[reader]
label               = UM02(Kartenschacht-unten)
device              = /dev/sci0
protocol            = internal
caid                = 1838
ident               = 1838:000000,1838:000401,1838:001103
rsakey              = B55E......67FF
boxkey              = A7.........7C
detect              = cd
mhz                 = 368
cardmhz             = 368
ecmwhitelist        = 1838:92
group               = 1
emmcache            = 1,1,2,0
								</pre>
        </div>
        <p><strong>Nastavení interní čtečky OSCamu - nastavení č.2</strong></p>
        <div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# Konfiguration der Kartenleser und der Smartcards
# Label ist beliebig, möglichst einfach und kurz, man kann die Kartenbezeichnungen verwenden

#um02 800se unten
[reader]
label               = UM02
description         = UM02-Unitymedia
protocol            = internal
device              = /dev/sci0
caid                = 1838
rsakey              = B55E......67FF
boxkey              = A7.........7C
detect              = cd
mhz                 = 1
cardmhz             = 2700
group               = 1
emmcache            = 1,1,2

### mhz nur für Dreamboxen und VU+ interne Reader, 
### für i12, D02 mhz, cardmhz beide 600, UM02 mhz cardmhz beide 368 bei anderen Boxen 
								</pre>
        </div>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
