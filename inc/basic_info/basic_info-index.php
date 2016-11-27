<div class="breadcrumb-wrapper type2">
  <div class="container">
    <div class="main-title">
      <h1>Základy cardsharingu</h1>
      <div class="breadcrumb">
        <span class="fa fa-home"></span>
        <a href="index.php?page=home-page">Úvod</a>
        <span class="fa fa-angle-right"></span>
        <span class="current">Základy cardsharingu</span>
      </div>
    </div>
  </div>
</div>

<!-- Container starts-->
<div class="container">
  <div class="dt-sc-margin70"></div>
  <!-- **secondary - starts** -->
  <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <?php include("inc/html_content/basic_info-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 18.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Základy cardsharingu - slovník</h4>
        <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
          <li><strong>ECM</strong><br>
            - instrukce pro generování Control Word, kterým se dekódují přijímaná data. CW vytvoří karta přepočítáním
            "zadání", které přide ze satelitu v ECM a vrátí ho zpet do dekodéru přijímače.<br><br>
            - ECM is short for Entitlement Control Message. These are commands which are used to control the working of
            your card. ECM's are always sent as packets. Such a packet is called a Control Word(CW) and it contains
            coded keys, ID's etc. needed to decode the signal. In other words, the ECM identifies the service and the
            conditions that have to be met in order to use that service. Providers will also use fake ECM's to disable
            pirate cards. That is why a lot of people translate ECM as Electronic Counter Measure.
          </li>
          <li><strong>EMM</strong><br>
            - instrukce pro úpravu oprávnění karty. Tyto instrukce zachytává bloker a nepropouští je na kartu. Oprávění
            lze "na dálku" například i mazat.<br><br>
            - EMM is short for Entitlement Management Messages. EMM's are composed of the information, contained in the
            SASand will always be sent together with the ECM. EMM's contain information about the subscriber and the
            status of the subscription. They are used to transfer information about authorization, but they will also
            carry new keys, or modify or delete existing keys.
          </li>
          <li><strong>EMU</strong> - softwarová emulace karty (tato technologie je téměř mrtvá)</li>
        </ul>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
