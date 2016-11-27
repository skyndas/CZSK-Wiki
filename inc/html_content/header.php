<header class="header header2">
  <div class="container">

    <!-- **Logo - End** -->
    <div id="logo">
      <a href="index.php?page=home-page" title="CZSK - Wiki"> <img src="images/logo.png" alt="image"/> </a>
      <span>Česká znalostní databáze Emulátorů v13</span>
    </div><!-- **Logo - End** -->

    <div id="menu-container">
      <!-- **Nav - Starts**-->
      <nav id="main-menu">
        <div id="dt-menu-toggle" class="dt-menu-toggle">
          Menu
          <span class="dt-menu-toggle-icon"></span>
        </div>
        <ul class="menu">
          <?php
          $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          function strposa($haystack, $needles = array(), $offset = 0)
          {
            $chr = array();
            foreach ($needles as $needle) {
              $res = strpos($haystack, $needle, $offset);
              if ($res !== false) $chr[$needle] = $res;
            }
            if (empty($chr)) return false;
            return min($chr);
          }

          /* Úvodní stránka */
          if (strpos($url, 'home') !== false || strpos($url, '?') == false) {
            echo '<li class="menu-item-simple-parent current_page_item"><a href="index.php?page=home-page"><i class="fa fa-home"></i>Úvod</a></li>';
          } else {
            echo '<li class="menu-item-simple-parent"><a href="index.php?page=home-page"><i class="fa fa-home"></i>Úvod</a></li>';
          }

          /* Emulátory */
          $array = array("radegast", "newcs", "camd3", "sbox", "cccam", "oscam", "doscam", "mgcamd", "newcamd");
          if (strposa($url, $array, 1)) {
            echo '<li class="menu-item-megamenu-parent current_page_item megamenu-2-columns-group menu-item-depth-0"><a href="index.php?category=&page=home-page"><i class="fa fa-cube"></i>Emulátory</a>';
          } else {
            echo '<li class="menu-item-megamenu-parent megamenu-2-columns-group menu-item-depth-0"><a href="index.php?category=&page=home-page"><i class="fa fa-cube"></i>Emulátory</a>';
          }
          ?>
          <div class="megamenu-child-container">
            <ul class="sub-menu">
              <li class="menu-item-with-widget-area">
                <a href="#">Cardservery</a>
                <p>Nejpoužívanější cardservery</p>
                <div class="menu-item-widget-area-container">
                  <ul>
                    <li class="widget widget_text">
                      <div class="textwidget">
                        <ul>
                          <?php
                          /* OSCam */
                          if (strpos($url, 'oscam') !== false) {
                            echo '<li class="current_page_item"><a href="index.php?category=oscam&page=oscam-index">OSCam</a></li>';
                          } else {
                            echo '<li><a href="index.php?category=oscam&page=oscam-index">OSCam</a></li>';
                          }
                          /* DOSCam */
                          if (strpos($url, 'dos_cam') !== false) {
                            echo '<li class="current_page_item"><a href="index.php?category=dos_cam&page=dos_cam-index">DOSCam</a></li>';
                          } else {
                            echo '<li><a href="index.php?category=dos_cam&page=dos_cam-index">DOSCam</a></li>';
                          }
                          /* NewCS */
                          if (strpos($url, 'newcs') !== false) {
                            echo '<li class="current_page_item"><a href="index.php?category=newcs&page=newcs-index">NewCS</a></li>';
                          } else {
                            echo '<li><a href="index.php?category=newcs&page=newcs-index">NewCS</a></li>';
                          }
                          /* CCcam */
                          if (strpos($url, 'cccam') !== false) {
                            echo '<li class="current_page_item"><a href="index.php?category=cccam&page=cccam-index">CCcam</a></li>';
                          } else {
                            echo '<li><a href="index.php?category=cccam&page=cccam-index">CCcam</a></li>';
                          }
                          ?>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item-with-widget-area">
                <a href="#">Klient</a>
                <p>Nejpoužívanější klienti</p>
                <div class="menu-item-widget-area-container">
                  <ul>
                    <li class="widget widget_text">
                      <div class="textwidget">
                        <ul>
                          <?php
                          /* MGcamd */
                          if (strpos($url, 'mgcamd') !== false) {
                            echo '<li class="current_page_item"><a href="index.php?category=mgcamd&page=mgcamd-index">MGcamd</a></li>';
                          } else {
                            echo '<li><a href="index.php?category=mgcamd&page=mgcamd-index">MGcamd</a></li>';
                          }
                          ?>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <a class="dt-menu-expand">+</a>
          </li>
          <?php
          /* BusyBox */
          if (strpos($url, 'busybox') !== false) {
            echo '<li class="menu-item-simple-parent current_page_item"><a href="index.php?category=busybox&page=busybox"><i class="fa fa-code"></i>BusyBox</a></li>';
          } else {
            echo '<li class="menu-item-simple-parent"><a href="index.php?category=busybox&page=busybox"><i class="fa fa-code"></i>BusyBox</a></li>';
          }

          /* DynDNS */
          if (strpos($url, 'dyndns') !== false) {
            echo '<li class="menu-item-simple-parent current_page_item"><a href="index.php?category=dyndns&page=dyndns-index"><i class="fa fa-server"></i>DynDNS</a></li>';
          } else {
            echo '<li class="menu-item-simple-parent"><a href="index.php?category=dyndns&page=dyndns-index"><i class="fa fa-server"></i>DynDNS</a></li>';
          }

          /* Bash Script */
          if (strpos($url, 'bash') !== false) {
            echo '<li class="menu-item-simple-parent current_page_item"><a href="index.php?category=bash&page=bash"><i class="fa fa-connectdevelop"></i>Bash Script</a></li>';
          } else {
            echo '<li class="menu-item-simple-parent"><a href="index.php?category=bash&page=bash"><i class="fa fa-connectdevelop"></i>Bash Script</a></li>';
          }

          /* Linux Box */
          if (strpos($url, 'linuxbox') !== false) {
            echo '<li class="menu-item-simple-parent current_page_item"><a href="index.php?category=linuxbox&page=linuxbox-index"><i class="fa fa-linux"></i>Linux Box</a></li>';
          } else {
            echo '<li class="menu-item-simple-parent"><a href="index.php?category=linuxbox&page=linuxbox-index"><i class="fa fa-linux"></i>Linux Box</a></li>';
          }
          ?>
        </ul>
      </nav>
      <!-- **Nav - End**-->
    </div>

  </div>
</header>