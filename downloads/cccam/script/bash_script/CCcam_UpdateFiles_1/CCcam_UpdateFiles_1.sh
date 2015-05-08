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
