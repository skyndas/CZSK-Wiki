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
          <p><span class="fa fa-calendar"> </span> Datum: 8.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam Bash script č.1 pro update souborů - E2</h4>
        <p><strong>Stáhnout script č.1</strong></p>
        <div class="dt-sc-tabs-vertical-frame-content">
          <a href="downloads/cccam/script/bash_script/CCcam_UpdateFiles_1/CCcam_UpdateFiles_1.sh" target="_blank">CCcam_UpdateFiles_1.sh</a><br>
        </div>
        <p style="clear: both; padding-top: 10px;"><strong>Co lze updatovat</strong></p>
        <p>S pomocí tohoto scriptu lze updatovat soubory:</p>
        <ol class="boldNumberList dt-sc-lmarg25">
          <li>CCcam.channelinfo</li>
          <li>CCcam.providers</li>
          <li>SoftCam.keys</li>
          <li>AutoRoll.keys</li>
          <li>Constant.cw</li>
        </ol>
        <p>Úmyslně neuvádím soubor "CCcam.prio". Předpokládám, že si ho každý nastaví sám podle svých potřeb.</p>
        <p>Zde uvedený script neaktualizuje soubor "AutoRoll.keys"</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Předpoklady pro správnou funkčnost scriptu</h4>
        <dl class="NumberList">
          <dt><span>1. </span>Použítí v boxech se systémem</dt>
          <dd>Script pro update souborů č.1 lze na 100% použít na boxy s enigma 2. Bash script asi lze použít i na
            boxech s enigma 1, ale bohužel jsem netestoval.
          </dd>

          <dt><span>2. </span>Umístění aktualizačních souborů</dt>
          <dd>Soubory určené k aktualizaci se nachazejí na webovém HTTP serveru umístěném v internetové síti v textové
            podobě. <br>
            Například: <a href="http://linuxsat-support.com/addons/chinf+providers/CCcam.providers" target="_blank">http://linuxsat-support.com/addons/chinf+providers/CCcam.providers</a>
          </dd>

          <dt><span>3. </span>Nastavení scriptu</dt>
          <dd>Více informací ve scriptu (anglicky)</dd>

          <dt><span>4. </span>Box musí být připojen do sítě internet</dt>
        </dl>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Zdrojový kód CCcam Bash scriptu č.1</h4>
        <div class="dt-sc-one dt-sc-lmarg25">
								<pre class="brush: bash;">
#!/bin/sh
#
# Authors: Skyndas
#
# Script for downloading info CCcam files from WWW
#
# NOTES:    - Dont use \n for new line. \n dont works on enigma 2
#           - Set manually:
#               1. PATH to config files of CCcam
#               2. PATH to config files of CCcam keys
#               3. PATH to download the file CCcam.channelinfo
#               4. PATH to download the file CCcam.providers
#               5. PATH to download the file SoftCam.keys
#               6. PATH to download the file Constant.cw


# USER SETUP ###############################################
# 1.
# Set manually PATH to config files of CCcam without trailing "/"
#ConfigPath="/var"
ConfigPath="/etc"
#
# 2.
# Set manually PATH to config files of CCcam key without trailing "/"
#ConfigPath="/var/keys"
ConfigKeyPath="/usr/keys"
#
# 3.
# Set manually downloaded file CCcam.channelinfo without trailing "/"
ChannelinfoFile="http://tinyurl.com/csmcu44"
#
# 4.
# Set manually downloaded file CCcam.providers without trailing "/"
ProvidersFile="http://tinyurl.com/cgo8ogc"
#
# 5.
# Set manually downloaded file SoftCam.keys without trailing "/"
# I find good links on internet
SoftCamFile="http://www.uydu.ws/deneme6.php?file=SoftCam.Key"
#
# 6.
# Set manually downloaded file Constant.cw without trailing "/"
# I find good links on internet
ConstantFile="http://www.uydu.ws/deneme6.php?file=constant.cw"
#
# END USER SETUP ###########################################

hr='****************************************'

# FUNCTIONS ************************************************
die() {
    msg=$1
    [ -z "$msg" ] && msg="Unknown Error!"
    echo "$msg"
    exit 1
}

# UPDATE ***************************************************
# Detecting operating system and CPU type
MachineHardwareName=$(uname -m)

# Validate ConfigPath
[ ! -d "$ConfigPath" ] && die "Directory ConfigPath \"$ConfigPath\" not found!"

# Go to CONFIG folder
cd $ConfigPath

# Remove the previous downloaded file - CCcam Channel Info
rm -if CCcam.channelinfo

# Remove the previous downloaded file - CCcam Providers
rm -if CCcam.providers

# Print to display (Remove the previous files)
  echo ""
  echo "Basic info about your machine"
  echo "$hr"
  echo ""
  echo "Machine hardware name: "$MachineHardwareName
  echo ""
  echo "Remove previous files"
  echo "$hr"
  echo ""
  echo "File CCcam.channelinfo has been successfully removed"
  echo "File CCcam.providers has been successfully removed"
  echo "File SoftCam.keys has been successfully removed"
  echo "File Constant.cw has been successfully removed"
  echo ""
  echo "Download new file"
  echo "$hr"
  echo "" 

# Print to display (Download new files - CCcam Channel Info)
  echo "Download CCcam.channelinfo"
  echo "--------------------------"
  echo ""

# Download new files - CCcam Channel Info
wget -O CCcam.channelinfo $ChannelinfoFile

# Print to display (Download new files - CCcam Providers)
  echo ""
  echo "Download CCcam.providers"
  echo "--------------------------"
  echo ""

# Download new files - CCcam Providers
wget -O CCcam.providers $ProvidersFile

# Go to CONFIG KEY folder
cd $ConfigKeyPath

# Remove the previous downloaded file - SoftCam.keys
rm -if SoftCam.keys

# Remove the previous downloaded file - Constant.cw
rm -if Constant.cw

# Print to display (Download new files - SoftCam.keys)
  echo ""
  echo "Download SoftCam.keys"
  echo "--------------------------"
  echo ""

# Download new files - SoftCam.keys
wget -O SoftCam.keys $SoftCamFile

# Print to display (Download new files - Constant.cw)
  echo ""
  echo "Download Constant.cw"
  echo "--------------------------"
  echo ""

# Download new files - Constant.cw
wget -O Constant.cw $ConstantFile

# Done all OK
exit 0
								</pre>
        </div>

      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Textový výstup spuštěného scriptu</h4>
        <p>Script spustíme v terminálu/telnetu příkazem:</p>
        <div>
								<pre>
./CCcam_UpdateFiles_1.sh
								</pre>
        </div>
        <p>Script nemusíme spouštět manuálně přes terminál/telnet, ale můžeme využít například "cronjob" k automatickému
          načasování spouštění.</p>
        <p>Po spuštění a správném vykonání scriptu získáme textový výstup:</p>
        <div>
								<pre>
Basic info about your machine
****************************************

Machine hardware name: mips

Remove previous files
****************************************

File CCcam.channelinfo has been successfully removed
File CCcam.providers has been successfully removed
File SoftCam.keys has been successfully removed
File Constant.cw has been successfully removed

Download new file
****************************************

Download CCcam.channelinfo
--------------------------

Connecting to tinyurl.com (23.63.80.239:80)
Connecting to linuxsat-support.com (212.110.172.234:80)

Download CCcam.providers
--------------------------

Connecting to tinyurl.com (23.63.80.239:80)
Connecting to linuxsat-support.com (212.110.172.234:80)

Download SoftCam.keys
--------------------------

Connecting to www.uydu.ws (104.193.9.244:80)

Download Constant.cw
--------------------------

Connecting to www.uydu.ws (104.193.9.244:80)
								</pre>
        </div>

      </div>

    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
