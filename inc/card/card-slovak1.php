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
          <p><span class="fa fa-calendar"> </span> Datum: 28.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <h4>1. RTVS - Irdeto RSA-box Key</h4>
        <p>CAID 0668 - Slovak DVB-S karta (informace dostupná z fór)</p>
        <p><strong>Info o kartě</strong></p>
        <ul class="dt-sc-lmarg25">
          <li>Card type: - Irdeto</li>
          <li>ATR: - 3B 9F 21 0E 49 52 44 45 54 4F 20 41 43 53 20 56 36 2E 30 9E
          <li>CAID: - 0668</li>
          <li>Mhz: - 6.00</li>
        </ul>
        <!-- START IMAGE CARD -->
        <p><strong>RTVS karta SK</strong></p>
        <p>Náhled karty není k dispozici</p>
        <!-- END IMAGE CARD -->

        <!-- START DECODE RSA AND BOX KEY -->
        <!-- Encode/Decode on http://base64-encoding.online-domain-tools.com/ -->
        <p><strong>RSA Key</strong></p>
        <!-- Decode key - AB722A8CAA9F58DE0D1CBB6FF329C961ED9DD759B103082D1BAE64C27A861D42E7F631891C2660EFA57484F80BBB4E0E8249A8368E31BD3FFC369FBE95160528 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný RSA key</p>
          <textarea id="b64-rb0" class="code" rows="2" readonly>QUI3MjJBOENBQTlGNThERTBEMUNCQjZGRjMyOUM5NjFFRDlERDc1OUIxMDMwODJEMUJBRTY0QzI3QTg2MUQ0MkU3RjYzMTg5MUMyNjYwRUZBNTc0ODRGODBCQkI0RTBFODI0OUE4MzY4RTMxQkQzRkZDMzY5RkJFOTUxNjA1Mjg=</textarea>
          <p>Dekódovaný RSA key</p>
          <textarea id="b64-lb0" class="code" rows="2" readonly></textarea>
        </div>

        <p><strong>Box Key</strong></p>
        <!-- Decode key - B1B2B3B4B5B6B7B8 -->
        <div class="dt-sc-lmarg">
          <p>Zakódovaný Box key</p>
          <textarea id="b64-rb1" class="code" rows="1" readonly>QjFCMkIzQjRCNUI2QjdCOA==</textarea>
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
# Test on OSCam r10663
# oscam.server
# ---------------------------------------------------------

[reader]
label               = RTVS_irdeto
protocol            = internal
device              = /dev/sci0
caid                = 0668
rsakey              = AB72......0528
boxkey              = B1..........B8
detect              = cd
group               = 1
emmcache            = 1,1,2,0
								</pre>
        </div>
        <p><strong>Test karty v OSCamu</strong></p>
        <div>
								<pre class="brush: text;">
2015/05/09 11:01:12   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (204 ms)
2015/05/09 11:01:14   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (209 ms)
2015/05/09 11:01:14   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (205 ms)
2015/05/09 11:01:16   5C5CD8 c      (ecm) dvbapi (0668&000000/0000/1329/45:EB7FE599A4F0F1AC0575ADE383A2BCFA): found (202 ms) by RTVS (L/1/2/2)
2015/05/09 11:01:16   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (207 ms)
2015/05/09 11:01:18   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (208 ms)
2015/05/09 11:01:20   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (205 ms)
2015/05/09 11:01:22   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (204 ms)
2015/05/09 11:01:26   5C5CD8 c        (-) -- Skipped 1 duplicated log lines --
2015/05/09 11:01:26   5C5CD8 c      (ecm) dvbapi (0668&000000/0000/1329/45:5D716CBD3FCC2B38CF71C7945636373C): found (203 ms) by RTVS (L/1/2/2)
2015/05/09 11:01:26   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (207 ms)
2015/05/09 11:01:28   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (203 ms)
2015/05/09 11:01:32   5667C0 r        (-) -- Skipped 1 duplicated log lines --
2015/05/09 11:01:32   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (204 ms)
2015/05/09 11:01:34   5667C0 r        (-) -- Skipped 1 duplicated log lines --
2015/05/09 11:01:34   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=global, len=37, cnt=1: written (276 ms)
2015/05/09 11:01:35   5667C0 r   (reader) RTVS [irdeto] dvbapi emmtype=shared, len=30, cnt=1: written (189 ms)
								</pre>
        </div>
        <p>Zápisy na kartu na TP STV1 HD prechádzajú stabilne , odozvy na VU+ Ultimo , horná čítačka ( 250ms )</p>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
