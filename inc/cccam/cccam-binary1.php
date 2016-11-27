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
          <p><span class="fa fa-calendar"> </span> Datum: 10.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Binární soubory CCcam - pro jednotlivé image</h4>
        <p><strong>Instalace souborů</strong></p>
        <p><u>Instalace "ipk" souborů přes telnet</u></p>
        <ol class="boldNumberList_small">
          <li>Přes FTP zkopírovat soubor do složky "/tmp" v boxu</li>
          <li>Přes telnet nainstalujeme následujícím příkazem:</li>
        </ol>
        <div>
								<pre>
# Hvězdičku "*" nahradíme názvem souboru bez přípony

opkg install /tmp/*.ipk
								</pre>
        </div>
        <p><u>Instalace "ipk" souborů přes Menu boxu</u></p>
        <p>Jednotlivé image boxů nabízejí možnost instalace přes Menu. Postupy si najde jistě každý sám na internetu.
          Každopádně musíme instalátory softcamů nakopírovat přes FTP do "/tmp".</p>

        <p><strong>CCcam pro Image</strong></p>
        <p>Instalátory jsou uvedeny pro image Enigma 2:</p>
        <ul class="dt-sc-fancy-list caret-right">
          <li>VTI</li>
          <li>OpenPli</li>
          <li>Black Hole</li>
          <li>openATV</li>
          <li>ViX</li>
          <li>Newnigma2</li>
        </ul>
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <h4>VTI image</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <p><strong>Cccam 2.3.0. pro VTI image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_VTI_Cccam2.3.0/enigma2-plugin-cam-cccam-v2.3.0_e2_vti.ipk">E2
                Cccam 2.3.0 VTI</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "CCcam2.3.0_cam.sh" (bude uložen do "usr/script")</li>
              <li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "etc/")</li>
            </ul>
            <p><u>Popis</u></p>
            <p>Po instalaci budou dostupné všechny potřebné soubory. Soubor "CCcam.channelinfo, CCcam.providers" bude
              nutné updatovat. CCcam. cfg je v základním nastavení tj. CCcam server pracuje pouze s lokálními kartami <a
                href="index.php?category=cccam&page=cccam-config"> Více o CCcam.cfg <span
                  class="fa fa-long-arrow-right"> </span> </a>.</p>
          </div>

          <p><strong>Cccam 2.1.4. pro VTI image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_VTI_Cccam2.1.4/enigma2-plugin-cams-cccam.2.1.4_1.0-r2_mipsel.ipk">E2
                Cccam 2.1.4 VTI</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam2_1_4" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "CCcam_2.1.4_cam.sh" (bude uložen do "usr/script")</li>
              <li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
            </ul>
            <p><u>Popis</u></p>
            <p>Po instalaci nebudou dostupné všechny potřebné soubory. Soubor "CCcam.channelinfo, CCcam.providers" bude
              nutné doinstalovat ručně. CCcam. cfg není také přiložen v instalačním "ipk" souboru tj. CCcam server
              pracuje pouze s lokálními kartami <a href="index.php?category=cccam&page=cccam-config"> Více o CCcam.cfg
                <span class="fa fa-long-arrow-right"> </span> </a>.</p>
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>OpenPli image</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <p><strong>Cccam 2.3.0. pro OpenPli image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_Cccam2.3.0_OpenPli/enigma2-plugin-cam-cccam-v2.3.0_e2_pli.ipk">E2
                Cccam 2.3.0 OpenPli</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "softcam.CCcam230" (bude uložen do "etc/init.d")</li>
              <li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "etc/")</li>
            </ul>
            <p><u>Popis</u></p>
            <p>Po instalaci budou dostupné všechny potřebné soubory. Soubor "CCcam.channelinfo, CCcam.providers" bude
              nutné updatovat. CCcam. cfg je v základním nastavení tj. CCcam server pracuje pouze s lokálními kartami <a
                href="index.php?category=cccam&page=cccam-config"> Více o CCcam.cfg <span
                  class="fa fa-long-arrow-right"> </span> </a>.</p>
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Black Hole image</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <p><strong>Cccam 2.3.0. pro Black Hole image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_BlackHole_Cccam2.3.0/enigma2-plugin-cam-cccam-v2.3.0_e2_bh.ipk">E2
                Cccam 2.3.0 Black Hole</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "Ncam_CCcam2.3.0.sh" (bude uložen do "usr/camscript")</li>
              <li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "etc/")</li>
            </ul>
          </div>

          <p><strong>Cccam 2.1.4. pro Black Hole image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_BlackHole_Cccam2.1.4/cccam-2.1.4-full-blackhole_04.04.2013_all.ipk">E2
                Cccam 2.1.4 Black Hole</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_214" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "Ncam_CCcam2.1.4.sh" (bude uložen do "usr/camscript")</li>
              <li>Konfigurační soubor "CCcam.cfg" (bude uložen do "etc/")</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>openATV image</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <p><strong>Cccam 2.3.0. pro openATV image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_openATV_Cccam2.3.0/enigma2-plugin-cams-cccam-2.3.0_openatv_all.ipk">E2
                Cccam 2.3.0 openATV</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "Ncam_CCcam_2.3.0.sh" (bude uložen do "usr/camscript")</li>
              <li>Konfigurační soubor "CCcam.cfg" (bude uložen do "usr/keys")</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "usr/keys")</li>
            </ul>
          </div>

          <p><strong>Cccam 2.1.4. pro openATV image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_openATV_Cccam2.1.4/enigma2-plugin-cams-CCcam_v2.1.4-AAF.ipk">E2
                Cccam 2.1.4 openATV</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_214" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "Ncam_CCcam_2.1.4.sh" (bude uložen do "usr/camscript")</li>
              <li>Konfigurační soubor "CCcam.cfg" (bude uložen do "usr/keys")</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" (bude uložen do "usr/keys")</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>ViX image</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <p><strong>Cccam 2.3.0. pro ViX image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_ViX_Cccam2.3.0/enigma2-plugin-cams-cccam.2.3.0_1.0_mipsel.ipk">E2
                Cccam 2.3.0 ViX</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam.2.3.0" (bude uložen do složky "usr/softcams")</li>
              <li>Startscript není přiložen</li>
              <li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
            </ul>
          </div>

          <p><strong>Cccam 2.1.4. pro ViX image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_ViX_Cccam2.1.4/enigma2-plugin-cams-cccam.2.1.4_1.1-r2_mipsel.ipk">E2
                Cccam 2.1.4 ViX</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam.2.1.4" (bude uložen do složky "usr/softcams")</li>
              <li>Startscript není přiložen</li>
              <li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Newnigma2 image</h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <p><strong>Cccam 2.3.0. pro Newnigma2 image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_Newnigma2_Cccam2.3.0/newnigma2-camd-cccam2.3.0_2.3.0-r0_mipsel.ipk">E2
                Cccam 2.3.0 Newnigma2</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam_230" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "CCcam2_3_0.emu" (bude uložen do "usr/script")</li>
              <li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
            </ul>
          </div>

          <p><strong>Cccam 2.1.4. pro Newnigma2 image - Enigma 2</strong></p>
          <div class="dt-sc-lmarg25">
            <p><u>Ke stažení</u></p>
            <p><img src="images/icons/icon_file-ipk-24x24.png" class="icon-right-set" alt=""/> <a
                href="downloads/cccam/binary_version_image/E2_Newnigma2_Cccam2.1.4/newnigma2-camd-cccam2.1.4_1.0-r2_all.ipk">E2
                Cccam 2.1.4 Newnigma2</a></p>
            <p><u>Obsah instalátoru</u></p>
            <ul class="dt-sc-fancy-list caret-right">
              <li>Binární soubor "CCcam2.1.4" (bude uložen do složky "usr/bin")</li>
              <li>Startscript "CCcam2.1.4.emu" (bude uložen do "usr/script")</li>
              <li>Konfigurační soubor "CCcam.cfg" není přiložen</li>
              <li>Volitelné soubory "CCcam.channelinfo, CCcam.providers" není přiložen</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->