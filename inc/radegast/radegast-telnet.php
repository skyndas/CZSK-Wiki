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

    <?php include("inc/html_content/radegast-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 23.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <h4>Radegast telnet</h4>
        <p><strong>Radegast</strong> je možné ovládat pomocí příkazu telnetu. </p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Příkazy telnetu pro Radegast</h4>

        <p><strong>Spuštění Radegastu s parametry:</strong></p>
        <div class="dt-sc-one dt-sc-lmarg25">
								<pre>
Usage:
  -c config_name : specify config file name
  -s 0|1         : disable/enable softemu
  -r 0|1         : disable/enable card CAM
  -n 0|1|2..max  : net share = 0..max (max = from config)
  -d log_level   : specify log level (0-4) /error, warning, notice, debug/ 
  -e 0|1         : disable/enable starting of external app
  -f             : don't leave to background
								</pre>
        </div>
        <p><span class="fa icon-icon_light"></span> <strong>Tip: Spuštění Radegastu s nastavením cesty konfiguračního
            souboru radegast.cfg:</strong></p>
        <div class="dt-sc-one dt-sc-lmarg25">
								<pre>
rdgd -c /var/etc/radegast.cfg
								</pre>
        </div>
      </div>
      <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
