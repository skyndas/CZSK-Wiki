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
        <h4>1. ORF ICE Irdeto RSA-box Key</h4>
        <p>Informace dostupná z fór - není testováno</p>
        <p><strong>Info o kartě</strong></p>
        <ul class="dt-sc-lmarg25">
          <li>Card type: - ICE 01 (Cryptoworks 0D05 / Irdeto 0648)</li>
          <li>ATR for CAID 0D05:</li>
          <li>ATR for CAID 0648:</li>
          <li>CAID: - 0D05 / 0648</li>
          <li>Mhz pro CAID 0D05: - 3.57</li>
          <li>Mhz pro CAID 0648: - 6.00</li>
        </ul>
        <!-- START IMAGE CARD -->
        <p><strong>Karta ORF Cryptoworks a ORF ICE</strong> - zobrazení vzhledu karet ORF</p>
        <div class="textcontainer">
          <div class="portfolio-container">
            <div style="width: 200px;" class="portfolio number_text">
              <!-- **portfolio-thumb - Starts** -->
              <div class="portfolio-thumb">
                <figure>
                  <img src="images/cards/austria/orf_crypto_ice.jpg" alt="image">
                  <div class="image-overlay">
                    <a class="zoom" href="images/cards/austria/orf_crypto_ice.jpg" data-gal="prettyPhoto[gallery]"><span
                        class="fa fa-search"></span></a>
                    <div class="portfolio-content">
                      <h5><a href="#"> Cryptoworks a ICE </a></h5>
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
        <!-- Decode key - DF57B08C0F13E67BD17AD37EAAF4EAA25393F8A0EFE8ACE6708AAF97C985CBA8A6C13826963BD3092EB9FC72F773A430724706AA5E1D14E1747842D32069A12D -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný RSA key</p>
          <textarea id="b64-rb0" class="code" rows="2" readonly>REY1N0IwOEMwRjEzRTY3QkQxN0FEMzdFQUFGNEVBQTI1MzkzRjhBMEVGRThBQ0U2NzA4QUFGOTdDOTg1Q0JBOEE2QzEzODI2OTYzQkQzMDkyRUI5RkM3MkY3NzNBNDMwNzI0NzA2QUE1RTFEMTRFMTc0Nzg0MkQzMjA2OUExMkQ=</textarea>
          <p>Dekódovaný RSA key</p>
          <textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
        </div>

        <p><strong>Box Key</strong></p>
        <!-- Decode key - 1122334455667788 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný Box key</p>
          <textarea id="b64-rb1" class="code" rows="1" readonly>MTEyMjMzNDQ1NTY2Nzc4OA==</textarea>
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
        <p><strong>Nastavení externí čtečky OSCamu</strong></p>
        <div>
								<pre>
# oscam.server
# ---------------------------------------------------------

# ORF Ice Irdeto im unteren internen Schacht
[reader]
label               = orfice_irdeto
protocol            = mouse
device              = /dev/USB1
boxid               = 12345678
rsakey              = DF57......A12D
boxkey              = 11.........88
force_irdeto        = 1
detect              = cd
mhz                 = 600
cardmhz             = 357
caid                = 0648
ident               = 0648:000000
group               = 1
emmcache            = 1,2,2,0
								</pre>
        </div>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
