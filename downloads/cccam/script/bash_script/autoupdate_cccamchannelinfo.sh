#!/bin/sh
# CCcam.Channelinfo by M320
# focus

# CS Link    
wget log.txt -O web.list http://cz.kingofsat.net/pack-skylink.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0D96:000000:%x \"Skylink - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Skylink

exit 0