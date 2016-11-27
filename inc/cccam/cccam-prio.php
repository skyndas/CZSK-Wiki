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
          <p><span class="fa fa-calendar"> </span> Datum: 25.4.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam.prio</h4>
        <p>V tomto souboru můžeme konfigurovat jaká CAID budou preferovaná nebo ignorovaná</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Formát zápisu</h4>
        <p>
          P: - priorita<br>
          I: - ignorování
        </p>
        <p><strong>Situace 1:</strong> Priorita pouze podle CAID na všech IDENTech a všech kanálů</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <code>
            P: CAID # Popis
          </code>
        </div>
        <p><strong>Situace 2:</strong> Priorita podle CAID a daného IDENTu </p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <code>
            P: CAID:IDENT # Popis
          </code>
        </div>
        <p><strong>Situace 3:</strong> Priorita podle CAID,daného IDENTu a SIDu programu (upřednostňuje konkrétní
          program)</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <code>
            P: CAID:IDENT:SID # Popis
          </code>
        </div>
        <p><strong>Situace 4:</strong> Pokud existují CAID1 a CAID2 pro jeden kanál, je preferované CAID1 před CAID2
        </p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <code>
            P: CAID1, CAID2
          </code>
        </div>
        <p><strong>Situace 5 - 6:</strong> Více informací v anglickém popisu níže. </p>
        <p>Zápisy se SID obvykle nejsou nutné, protože SIDy jsou v rozsahu CAID nebo IDENTů. Můžeme využít pouze v
          případě, že chceme například zablokovat vybraný program.</p>
        <p><u>Příklad </u></p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
								<pre>
#---------------Priority List---------------------------
P: 0961 # SKy UK
P: 0919:0 # SKY Italia
P: 0d03:000004 # Czech Link [23E] | 8 Czech Link [23E]
P: 0d03:000008 # Czech Link [23E] | 8 Czech Link [23E]
P: 0B00:000000:6FF0 # VH1
P: 0919:000000:2B6B # Sky Italia - Sky Cinema Max [NDS]
#
#---------------Ignore List--------------------------- 
#
I: 1801:000401 #Premiere (19E)(N2)
								</pre>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Finální ukázka CCcam.prio</h4>
        <div class="dt-sc-lmarg25">
								<pre>
# CCcam.prio
#
# in this file you can configure what CAIDs CCcam should prefer or ignore
# defaults to /var/etc/CCcam.prio
# file content can have ignores (I) and prio lists (P)
#
# situation 1: ignore allways this caid, all idents, on all channels
# I: caid
#
# situation 2: ignore allways this caid/ident pair
# I: caid:ident
#
# situation 3: ignore this caid/ident pair, on channel 'sid'
# I: caid:ident:sid
#
# situation 4: when both caid1 and caid2 exist for a channel, prefer caid1 over caid2
# P: caid1, caid2
#
# situation 5: when caid1:ident1 till caidN:identN exist for a channel, use them in order of this list.
# P: caid1:ident1, caid2:ident2, .., caidN:identN
#
# situation 6: when caid1:ident1 till caidN:identN exist for channel 'sid', use them in order of this list.
# Sid on first caid/ident pair identifies sid for which list is used. All other sids ignore this list.
# P: caid1:ident1:sid, caid2:ident2, .., caidN:identN
#
#CAID PRIO FILE : /var/etc/CCcam.prio
#
#
#---------------Priority List---------------------------
P: 0D96 #Skylink
P: 0D02 #freeSAT
#
#---------------Ignore List--------------------------- 
#
I: 0D03 #Skylink
I: 0624 #Skylink
I: 0D97 #freeSAT
I: 1815 #freeSAT
I: 0653 #freeSAT
								</pre>
        </div>
      </div>

    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
