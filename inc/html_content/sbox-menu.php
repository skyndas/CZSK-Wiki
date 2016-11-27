<aside class="widget widget_product_categories">
  <h3>Kategorie</h3>
  <ul>

    <li <?php if ($urlParamPage == 'sbox-index') echo "class='active'"; ?>>
      <a href="index.php?category=sbox&page=sbox-index">O sBoxu</a>
    </li>

    <li <?php if ($urlParamPage == 'sbox-history') echo "class='active'"; ?>>
      <a href="index.php?category=sbox&page=sbox-history">Historie</a>
    </li>

    <li <?php if ($urlParamPage == 'sbox-binary') echo "class='active'"; ?>>
      <a href="index.php?category=sbox&page=sbox-binary">Binární soubory</a>
    </li>
  </ul>
</aside>
