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
        <h4>1. TNTSat AES Key</h4>
        <p>Informace dostupná z fór - není testováno</p>
        <p><strong>AES Key - odkazy</strong></p>
        <a href="http://www.mediafire.com/view/hz2zzan9foh26u8/tntsat_aes.txt">1. TNTSat AES Key</a><br>
        <a href="http://www.mediafire.com/download/4w3wej3igi6jj85/TNTsat+Oscam+9580+inc+settings.rar">2. TNTSat AES
          Key</a><br><br>
        <p><strong>Info o kartě</strong></p>
        <ul class="dt-sc-lmarg25">
          <li>Card type: - Viaccess</li>
          <li>ATR: 3F 77 18 00 00 C2 EB 41 02 6C 90 00</li>
          <li>CAID: - 0500</li>
          <li>Providers:
            <ul>
              <li>ID: 030B00 NAME: TNTSAT</li>
              <li>ID: FFF400 NAME: ISSUER</li>
            </ul>
          </li>
          <li>Mhz: - 3.57</li>
        </ul>
        <!-- START IMAGE CARD -->
        <p><strong>Karta TNTSat</strong> - zobrazení vzhledu karty TNTSat</p>
        <div class="textcontainer">
          <div class="portfolio-container">
            <div style="width: 250px;" class="portfolio number_text">
              <!-- **portfolio-thumb - Starts** -->
              <div class="portfolio-thumb">
                <figure>
                  <img src="images/cards/french/tntsat.jpg" alt="image">
                  <div class="image-overlay">
                    <a class="zoom" href="images/cards/french/tntsat.jpg" data-gal="prettyPhoto[gallery]"><span
                        class="fa fa-search"></span></a>
                    <div class="portfolio-content">
                      <h5><a href="#"> TNTSat </a></h5>
                      <span class="fa fa-sort-up"></span>
                    </div>
                  </div>
                </figure>
              </div> <!-- **portfolio-thumb - Ends** -->
            </div>
          </div>
        </div>
        <!-- END IMAGE CARD -->

        <!-- START DECODE AES KEY -->
        <!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
        <p><strong>AES Keys (Key 0 - A0 (HD))</strong></p>
        <!-- Decode key - 439726EBB6A939A456C05FF6AA606C43 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný AES key</p>
          <textarea id="b64-rb0" class="code" rows="2" readonly>NDM5NzI2RUJCNkE5MzlBNDU2QzA1RkY2QUE2MDZDNDM=</textarea>
          <p>Dekódovaný AES key</p>
          <textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
        </div>

        <div style="width:100%;text-align:center;padding-bottom: 52px;">
          <button type="button" title="Decode" id="b64-decode0" style="margin:0px 15px;">
            <span><span>Dekódovat klíče</span></span></button>
        </div>
        <script type="text/javascript">
          jQuery('button#b64-decode0').click(function () {
            jQuery('textarea#b64-lb0').val(Base64.decode(jQuery('textarea#b64-rb0').val()));
          });
        </script>

        <p><strong>AES Keys (Key 1 - A1 (SD))</strong></p>
        <!-- Decode key - A79AC0DBEC9C9251D1915F058862AF26 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný AES key</p>
          <textarea id="b64-rb1" class="code" rows="2" readonly>QTc5QUMwREJFQzlDOTI1MUQxOTE1RjA1ODg2MkFGMjY=</textarea>
          <p>Dekódovaný AES key</p>
          <textarea id="b64-lb1" class="code" rows="2" readonly></textarea>
        </div>

        <div style="width:100%;text-align:center;padding-bottom: 52px;">
          <button type="button" title="Decode" id="b64-decode1" style="margin:0px 15px;">
            <span><span>Dekódovat klíče</span></span></button>
        </div>
        <script type="text/javascript">
          jQuery('button#b64-decode1').click(function () {
            jQuery('textarea#b64-lb1').val(Base64.decode(jQuery('textarea#b64-rb1').val()));
          });
        </script>

        <p><strong>AES Keys (Key 2 - A2 (HD SurEncryption))</strong></p>
        <!-- Decode key - EF3CB8D36A862097A33FC47101041BE3 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný AES key</p>
          <textarea id="b64-rb2" class="code" rows="2" readonly>RUYzQ0I4RDM2QTg2MjA5N0EzM0ZDNDcxMDEwNDFCRTM=</textarea>
          <p>Dekódovaný AES key</p>
          <textarea id="b64-lb2" class="code" rows="2" readonly></textarea>
        </div>

        <div style="width:100%;text-align:center;padding-bottom: 52px;">
          <button type="button" title="Decode" id="b64-decode2" style="margin:0px 15px;">
            <span><span>Dekódovat klíče</span></span></button>
        </div>
        <script type="text/javascript">
          jQuery('button#b64-decode2').click(function () {
            jQuery('textarea#b64-lb2').val(Base64.decode(jQuery('textarea#b64-rb2').val()));
          });
        </script>
        <!-- END DECODE AES KEY -->
        <p><strong>Nastavení externí čtečky OSCamu</strong></p>
        <div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# Format of AES Key:
# aeskeys           = 0500@030B00;key0,key1,key2

[reader]
label               = TNTSat
protocol            = smargo
device              = /dev/ttyUSB0
caid                = 0500
detect              = cd
ident               = 0500:030B00
aeskeys             = 0500@030B00:43..43,A7..26,EF..E3
ecmwhitelist        = 0500@030B00:EC,57,D8,10D,12A,142
group               = 1
emmcache            = 1,3,2
								</pre>
        </div>
        <h5>Vlastní TEST karty</h5>
        <p><strong>Výpis logu DOSCam v0.25 při načítání karty</strong></p>
        <div>
								<pre class="brush: text;">
2015/05/17 20:37:57   5455C8 r Slot2 [internal] card detected
2015/05/17 20:37:58   5455C8 r Slot2 [internal] ATR: 3F 77 18 00 00 C2 EB 41 02 6C 90 00 
2015/05/17 20:37:58   5455C8 r Slot2 [internal] Init card protocol T0, FI=1, F=372, D=12, N=0
2015/05/17 20:37:58   5455C8 r Slot2 [internal] Calculated work ETU is 6.72 us
2015/05/17 20:37:58   5455C8 r Slot2 [internal] ATR Fsmax is: 5 MHz, clocking card to 4.61 (nearest possible to wanted user cardspeed of 4.61 MHz)
2015/05/17 20:37:59   5455C8 r Slot2 [internal] using ecm #701 for long viaccess ecm
2015/05/17 20:37:59   5455C8 r Slot2 [internal] type: Viaccess (non-standard atr), caid: 0500, serial: #########
2015/05/17 20:38:00   5455C8 r Slot2 [internal] providers: 2 (FFF400,030B00)
2015/05/17 20:38:00   5455C8 r Slot2 [internal] Using PIN 0000!
2015/05/17 20:38:00   5455C8 r Slot2 [internal] Parental lock disabled
2015/05/17 20:38:00   5455C8 r Slot2 [internal] ready for requests
2015/05/17 20:38:00   5455C8 r Slot2 [internal] found card system viaccess
2015/05/17 20:38:00   5455C8 r Slot2 [viaccess] card detected
2015/05/17 20:38:00   5455C8 r Slot2 [viaccess] serial: #########
2015/05/17 20:38:00   5455C8 r Slot2 [viaccess] provider: 1, id: ####################, sa: ########, geo: empty
2015/05/17 20:38:00   5455C8 r Slot2 [viaccess] provider: 2, id: ####################, sa: ########, geo: 03 FF FF 00 
2015/05/17 20:38:00   5455C8 r Slot2 [viaccess] class: 00, expiry date: 2012/03/29 - 2016/03/28
								</pre>
        </div>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
