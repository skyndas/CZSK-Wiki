<aside class="widget widget_product_categories">
  <h3>Kategorie</h3>
  <ul>

    <li <?php if ($urlParamPage == 'busybox') echo "class='active'"; ?>>
      <a href="index.php?category=card&page=card-index">O kartách</a>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">České karty
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'card-czech') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-czech">České - Skylink</a>
        </li>
      </ul>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">Slovenské karty
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'card-slovak') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-slovak">Slovakia - Plustelka</a>
        </li>
        <li <?php if ($urlParamPage == 'card-slovak1') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-slovak1">Slovakia - RTVS</a>
        </li>
      </ul>
    </li>

    <li>
      <a class="dt-sc-toggle" href="#">Německé a Rakouské karty
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-minus-square "></span>
      </a>
      <ul style="display: none;" class="dt-sc-toggle-content">
        <li <?php if ($urlParamPage == 'card-austria1') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-austria1">Austria - ORF</a>
        </li>
        <li <?php if ($urlParamPage == 'card-austria2') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-austria2">Austria - HD+</a>
        </li>
        <li <?php if ($urlParamPage == 'card-deutsch1') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-deutsch1">Deutsch - Sky Deutschland</a>
        </li>
        <li <?php if ($urlParamPage == 'card-deutsch2') echo "class='active'"; ?>>
          <a href="index.php?category=card&page=card-deutsch2">Deutsch - Kabel Deutschland</a>
        </li>
      </ul>
    </li>

    <li <?php if ($urlParamPage == 'card-french') echo "class='active'"; ?>>
      <a href="index.php?category=card&page=card-french">Francouzské karty</a>
    </li>

    <li <?php if ($urlParamPage == 'card-etc') echo "class='active'"; ?>>
      <a href="index.php?category=card&page=card-etc">Ostatní karty</a>
    </li>
  </ul>
</aside>
