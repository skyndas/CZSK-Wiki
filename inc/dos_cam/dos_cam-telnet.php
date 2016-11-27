<div class="breadcrumb-wrapper type2">
  <div class="container">
    <div class="main-title">
      <h1>DOSCam</h1>
      <div class="breadcrumb">
        <span class="fa fa-home"></span>
        <a href="index.php?page=home-page">Úvod</a>
        <span class="fa fa-angle-right"></span>
        <span class="fa fa-cube"></span>
        <a href="index.php?page=home-page">Emulátory</a>
        <span class="fa fa-angle-right"></span>
        <span class="current">DOSCam</span>
      </div>
    </div>
  </div>
</div>

<!-- Container starts-->
<div class="container">
  <div class="dt-sc-margin70"></div>
  <!-- **secondary - starts** -->
  <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <?php include("inc/html_content/dos_cam-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 12.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <h4>DOSCam telnet</h4>
        <p><strong>DOSCam</strong> je možné ovládat pomocí příkazu telnetu. </p>

      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Příkazy telnetu pro DOSCam</h4>

        <p><strong>Spuštění DOSCam s parametry:</strong></p>
        <div class="dt-sc-one dt-sc-lmarg25">
								<pre>
DOSCam V0.25 (mipsel-unknown-linux-gnu)
 ConfigDir  : /var/tuxbox/config

 Usage: doscam [parameters]

 Directories:
 -c, --config-dir &lt;dir&gt;  | Read configuration files from &lt;dir&gt;.
                         . Default: /var/tuxbox/config
 -t, --temp-dir &lt;dir&gt;    | Set temporary directory to &lt;dir&gt;.
                         . Default: /tmp/.doscam

 Startup:
 -b, --daemon            | Start in the background as daemon.
 -B, --pidfile &lt;pidfile&gt; | Create pidfile when starting.
 -r, --restart &lt;level&gt;   | Set restart level:
                         .   0 - Restart disabled (exit on restart request).
                         .   1 - WebIf restart is active (default).
                         .   2 - Like 1, but also restart on segfaults.
 -w, --wait &lt;secs&gt;       | Set how much seconds to wait at startup for the
                         . system clock to be set correctly. Default: 5

 Logging:
 -I, --syslog-ident &lt;ident&gt; | Set syslog ident. Default: oscam
 -S, --show-sensitive    | Do not filter sensitive info (card serials, boxids)
                         . from the logs.
 -d, --debug &lt;level&gt;     | Set debug level mask used for logging:
                         .     0 - No extra debugging (default).
                         .     1 - Detailed error messages.
                         .     2 - ATR parsing info, ECM, EMM and CW dumps.
                         .     4 - Traffic from/to the reader.
                         .     8 - Traffic from/to the clients.
                         .    16 - Traffic to the reader-device on IFD layer.
                         .    32 - Traffic to the reader-device on I/O layer.
                         .    64 - EMM logging.
                         .   128 - DVBAPI logging.
                         .   256 - Loadbalancer logging.
                         .   512 - Unused.
                         .  1024 - Client ECM logging.
                         . 65535 - Debug all.

 Settings:
 -p, --pending-ecm &lt;num&gt; | Set the maximum number of pending ECM packets.
                         . Default: 32 Max: 255
 -u, --utf8              | Enable WebIf support for UTF-8 charset.

 Debug parameters:
 -a, --crash-dump        | Write doscam.crash file on segfault. This option
                         . needs GDB to be installed and DOSCam executable to
                         . contain the debug information (run oscam-XXXX.debug)
 -s, --capture-segfaults | Capture segmentation faults.
 -g, --gcollect &lt;mode&gt;   | Garbage collector debug mode:
                         .   1 - Immediate free.
                         .   2 - Check for double frees.

 Information:
 -h, --help              | Show command line help text.
 -V, --build-info        | Show OSCam binary configuration and version.

								</pre>
        </div>

      </div>

    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
