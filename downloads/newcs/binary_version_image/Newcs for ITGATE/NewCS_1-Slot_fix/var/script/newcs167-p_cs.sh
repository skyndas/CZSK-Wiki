#!/bin/sh
#srvname=NewCS fix Phoenix AU
case "$1" in
	start)
		/var/bin/newcs.fix -c /var/tuxbox/config/newcs167-p.xml &
		sleep 3
	;;
	stop)
		killall -9 newcs.fix
		sleep 2
	;;
	*)
		$0 stop
		exit 1
	;;
esac
exit 0
