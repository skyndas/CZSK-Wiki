<div class="breadcrumb-wrapper type2">
  <div class="container">
    <div class="main-title">
      <h1>Cardsharing protokoly</h1>
      <div class="breadcrumb">
        <span class="fa fa-home"></span>
        <a href="index.php?page=home-page">Úvod</a>
        <span class="fa fa-angle-right"></span>
        <span class="current">Cardsharing protokoly</span>
      </div>
    </div>
  </div>
</div>

<!-- Container starts-->
<div class="container">
  <div class="dt-sc-margin70"></div>
  <!-- **secondary - starts** -->
  <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <?php include("inc/html_content/protocol-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 31.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Radegast Protocol</h4>

        <p><strong>Síťový protokol</strong></p>
        <p>Radegast využívá síťový protokol <a href="http://cs.wikipedia.org/wiki/Transmission_Control_Protocol"
                                               target="_blank">TCP (Transmission Control Protocol)</a> .</p>

        <p><strong>Šifrování komunikace</strong></p>
        <p>Radegast - parameter "AUtH"</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Newcamd Protocol</h4>

        <p><strong>Síťový protokol</strong></p>
        <p>Newcamd využívá síťový protokol <a href="http://cs.wikipedia.org/wiki/Transmission_Control_Protocol"
                                              target="_blank">TCP (Transmission Control Protocol)</a> .</p>

        <p><strong>Šifrování komunikace</strong></p>
        <p>Newcamd komunikační protokol používá ke komunikaci s cardserverem šifrování komunikace DES klíčem. V
          kompletní distribuci je celý popis komunikačního protokolu newcamd.</p>
        <p>DES klíče jsou 7 bytes (56 bits)<br>
          Triple-DES jsou 14 bytes (112 bits)</p>
        <p><u>English description</u></p>
        <p>Newcamd uses encrypted tcp connections to communicate with its cardservers, for every card a dedicated tcp
          connection is used. The encryption used is Triple-DES in outer cipher block chaining mode (CBC). See a good
          book about cryptography for details. Remember, DES keys are 7 bytes (56 bits), Triple-DES keys are 14 bytes
          (112 bits).</p>
        <p>There are three encryption keys: The key from the config file, which is never actually used as is, the login
          key (configfile key ^ 14 random bytes) and the session key, which is used after the login (configfile key ^
          userpassword). Since newcamd-v5.25 12 bytes are added before the actual package in the encryption process <a
            class="read-more" href="downloads/protocol/newcamd/About_Newcamd_Cardserver _Protocol.txt" target="_blank">More
            info about newcamd protocol </a></p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam Protocol</h4>

        <p><strong>Síťový protokol</strong></p>
        <p>CCcam využívá síťový protokol <a href="http://cs.wikipedia.org/wiki/Transmission_Control_Protocol"
                                            target="_blank">TCP (Transmission Control Protocol)</a> .</p>

        <p><strong>Šifrování komunikace</strong></p>

      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
