<aside class="widget widget_product_categories">
  <h3>Kategorie</h3>
  <ul>

    <li <?php if ($urlParamPage == 'oscam-index') echo "class='active'"; ?>>
      <a href="index.php?category=oscam&page=oscam-index">O OSCamu</a>
    </li>

    <li <?php if ($urlParamPage == 'card-index') echo "class='active'"; ?>>
      <a href="index.php?category=card&page=card-index">Nastavení karet</a>
    </li>

    <li <?php if ($urlParamPage == 'oscam-todo') echo "class='active'"; ?>>
      <a href="index.php?category=oscam&page=oscam-todo">OSCam TODO list</a>
    </li>
  </ul>
</aside>
