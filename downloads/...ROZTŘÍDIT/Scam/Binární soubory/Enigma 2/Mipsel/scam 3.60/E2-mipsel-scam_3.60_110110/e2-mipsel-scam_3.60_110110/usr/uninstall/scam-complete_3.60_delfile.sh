#!/bin/sh
# CAMD_NAME: scam-complete_3.60_110110.tar.gz
# CAMD_VERSION: 3.60
# Type: Cam

kill `pidof scam_3.60`
sleep 2
remove_tmp

rm -rf /usr/bin/scam_3.60
rm -rf /usr/script/scam_3.60_cam.sh
rm -rf /usr/uninstall/scam-complete_3.60_delfile.sh

exit 0

######################################
####### Powered by Gemini Team #######
## http://www.i-have-a-dreambox.com ##
######################################
