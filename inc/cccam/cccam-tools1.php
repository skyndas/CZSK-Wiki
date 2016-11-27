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
          <p><span class="fa fa-calendar"> </span> Datum: 22.4.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcamInfoPhp svn_r257</h4>
        <p><strong>CCcamInfoPhp svn_r257</strong> je PHP statistická aplikace pro PC s vylepšeným webovým rozhraním
          CCcamu, která pracuje pod Apache serverem. Z toho vyplývá, že v případě spuštění např. pod Windows je nutné
          instalovat nejdříve XAMPP. CCcamInfoPhp svn_r257 je poslední známá "public" verze cca z roku 2011. Vývoj je v
          rámci soukromého sektoru. </p>
        <p><u>Výhody a nevýhody CCcamInfoPhp oprotí základnímu webovému rozhraní CCcamu:</u></p>
        <ul class="dt-sc-lmarg25">
          <li><i class="fa fa-plus size14px margright5px"></i> Barevné grafické zpracování je mnohem příjemnější než
            strohý textový výstup <i>(Ale CCcam pracuje s daty a ne s grafikou)</i>.
          </li>
          <li><i class="fa fa-plus size14px margright5px"></i> Zobrazení pingu CCcamu na další server</li>
          <li><i class="fa fa-plus size14px margright5px"></i> CCcamInfoPhp podporuje třídění v tabulkách</li>
          <li><i class="fa fa-plus size14px margright5px"></i> r257 podporuje automatické obnovení stránky pro načtení
            dat.
          </li>
        </ul>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Ke stažení</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <a href="downloads/cccam/tools_software/CCcamInfoPHP/CCcamInfoPhp_r257.zip" target="_blank">CCcamInfoPhp
            r257</a><br>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Fóra</h4>
        <p>Stále aktuální fórum najdete na adrese:</p>
        <div class="dt-sc-tabs-vertical-frame-content">
          <a href="https://www.onestep.cc/" target="_blank">https://www.onestep.cc/</a>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Instalace</h4>
        <p>Aby PHP aplikace správně pracovala musíme nejdříve provést následující kroky:</p>
        <ol class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
          <li>Stáhnout soubor "CCcamInfoPhp_r257.zip"</li>
          <li>Instalovat XAMPP</li>
          <li>Zkopívat složku "CCcamInfoPhp_r257" ze staženého souboru do složky "htdocs" ve složce kam jsme instalovali
            XAMPP
          </li>
          <li>Přejít do složky "htdocs/CCcamInfoPhp_r257" a nakonfigurovat připojení na server v souboru
            "config_userspecific.tmpl.php"
          </li>
          <li>Soubor "config_userspecific.tmpl.php" poté přejmenovat na "config_userspecific.php"</li>
          <li>Spustit prohlížeč a zadat do příkazového řádku "http://localhost/CCcamInfoPhp_r257</li>
        </ol>
        <br>
        <p><strong>POZNÁMKA:</strong> CCcamInfoPhp používá následující soubory, které je potřebné občas aktualizovat</p>
        <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
          <li>CCcam.providers</li>
          <li>CCcam_fake.providers</li>
          <li>CCcam_used.providers</li>
        </ul>
      </div>

    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
