<aside class="widget widget_product_categories">
  <h3>Kategorie</h3>
  <ul>

    <li <?php if ($urlParamPage == 'radegast-index') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-index">O Radegastu</a>
    </li>

    <li <?php if ($urlParamPage == 'radegast-history') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-history">Historie</a>
    </li>

    <li <?php if ($urlParamPage == 'radegast-install') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-install">Instalace</a>
    </li>

    <li <?php if ($urlParamPage == 'radegast-webif') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-webif">Web Interface</a>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">Binární soubory<span class="fa fa-plus-square"></span> <span
          class="fa fa-minus-square "></span> </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'radegast-binary') echo "class='active'"; ?>>
          <a href="index.php?category=radegast&page=radegast-binary">Základní binární soubory</a>
        </li>
        <li <?php if ($urlParamPage == 'radegast-binary1') echo "class='active'"; ?>>
          <a href="index.php?category=radegast&page=radegast-binary1">Radegast pro E1</a>
        </li>
      </ul>
    </li>

    <li <?php if ($urlParamPage == 'radegast-config') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-config">Konfigurace</a>
    </li>

    <li <?php if ($urlParamPage == 'radegast-telnet') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-telnet">Telnet</a>
    </li>

    <li <?php if ($urlParamPage == 'radegast-log') echo "class='active'"; ?>>
      <a href="index.php?category=radegast&page=radegast-log">Logování</a>
    </li>

  </ul>
</aside>


