<aside class="widget widget_product_categories">
  <h3>Kategorie</h3>
  <ul>

    <li <?php if ($urlParamPage == 'cccam-index') echo "class='active'"; ?>>
      <a href="index.php?category=cccam&page=cccam-index">O CCcam</a>
    </li>

    <li <?php if ($urlParamPage == 'cccam-history') echo "class='active'"; ?>>
      <a href="index.php?category=cccam&page=cccam-history">Historie</a>
    </li>

    <li <?php if ($urlParamPage == 'cccam-install') echo "class='active'"; ?>>
      <a href="index.php?category=cccam&page=cccam-install">Instalace</a>
    </li>

    <li <?php if ($urlParamPage == 'cccam-webif') echo "class='active'"; ?>>
      <a href="index.php?category=cccam&page=cccam-webif">Web Interface</a>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">Binární soubory
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'cccam-binary') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-binary">Základní binární soubory</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-binary1') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-binary1">CCcam pro image</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="dt-sc-toggle" href="#">Konfigurace CCcamu
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'cccam-config') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-config">CCcam.cfg</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-channelinfo') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-channelinfo">CCcam.channelinfo</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-providers') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-providers">CCcam.providers</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-prio') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-prio">CCcam.prio</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="dt-sc-toggle" href="#">CCcam Start script
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'cccam-startscriptE1') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-startscriptE1">CCcam Start script E1</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-startscriptE2') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-startscriptE2">CCcam Start script E2</a>
        </li>
      </ul>
    </li>
    <li>
      <a class="dt-sc-toggle" href="#">CCcam Bash script pro E2
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'cccam-script') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-script">O Bash scriptech</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-script1') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-script1">Script č.1 - Update souborů E2</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-script2') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-script2">Script č.2 - Generátor souborů E2</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-script3') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-script3">Ostatní Bash scripty</a>
        </li>
      </ul>
    </li>

    <li <?php if ($urlParamPage == 'cccam-telnet') echo "class='active'"; ?>>
      <a href="index.php?category=cccam&page=cccam-telnet">Telnet</a>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">Logování
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'cccam-log') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-log">Debug CCcamu</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-ecm') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-ecm">Ecm.info</a>
        </li>
      </ul>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">CCcam nástroje
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'cccam-index') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-tools">CCcamInfoPHP v1.02</a>
        </li>

        <li <?php if ($urlParamPage == 'cccam-index') echo "class='active'"; ?>>
          <a href="index.php?category=cccam&page=cccam-tools1">CCcamInfoPHP v2.57</a>
        </li>
      </ul>
    </li>
    <li><a href="index.php?category=cccam&page=cccam-todo">CCcam TODO list</a></li>
  </ul>
</aside>
