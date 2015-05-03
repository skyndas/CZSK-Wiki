#!/bin/sh
/var/script/newcs167_cs.sh stop
rm -f /var/script/newcs167-nd3_cs.sh
rm -f /var/script/newcs167_cs.sh
rm -f /var/script/newcs167-au_cs.sh
rm -f /var/script/newcs167-p_cs.sh
rm -f /var/bin/newcs.fix
rm -f /var/tuxbox/config/newcs167-nd3.xml
rm -f /var/tuxbox/config/newcs167.xml
rm -f /var/tuxbox/config/newcs167-au.xml
rm -f /var/tuxbox/config/newcs167-p.xml
rm -f /var/uninstall/newcsfix_delete.sh
exit 0
