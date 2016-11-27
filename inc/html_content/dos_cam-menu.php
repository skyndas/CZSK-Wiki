<aside class="widget widget_product_categories">
  <h3>Kategorie</h3>
  <ul>

    <li <?php if ($urlParamPage == 'dos_cam-index') echo "class='active'"; ?>>
      <a href="index.php?category=dos_cam&page=dos_cam-index">O DOSCamu</a>
    </li>

    <li <?php if ($urlParamPage == 'dos_cam-history') echo "class='active'"; ?>>
      <a href="index.php?category=dos_cam&page=dos_cam-history">Historie</a>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">Konfigurace DOSCamu
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'dos_cam-config_cfg') echo "class='active'"; ?>>
          <a href="index.php?category=dos_cam&page=dos_cam-config_cfg">DOSCam.cfg</a>
        </li>
      </ul>
    </li>

    <li <?php if ($urlParamPage == 'card-index') echo "class='active'"; ?>>
      <a href="index.php?category=card&page=card-index">Nastavení karet</a>
    </li>

    <li <?php if ($urlParamPage == 'dos_cam-telnet') echo "class='active'"; ?>>
      <a href="index.php?category=dos_cam&page=dos_cam-telnet">Telnet</a>
    </li>

  </ul>
</aside>
