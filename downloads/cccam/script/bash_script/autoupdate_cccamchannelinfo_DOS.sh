#!/bin/sh# CCcam.Channelinfo by M320
# focus
wget -a log.txt -O web.list http://en.kingofsat.net/pack-focussat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0B02:000000:%x \"Focus - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.focus


# ADD
wget -a log.txt -O web.list http://en.kingofsat.net/pack-add.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"ADD - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.add


# JSC - 0500
wget -a log.txt -O web.list http://en.kingofsat.net/pack-aljazeerasport.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"JSC - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.jsc-0500


# JSC - 0603
wget -a log.txt -O web.list http://en.kingofsat.net/pack-aljazeerasport.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0603:000000:%x \"JSC - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.jsc-0603


# BIS
wget -a log.txt -O web.list http://en.kingofsat.net/pack-bis.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"BIS - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.bis


# Canal Digitaal Netherlands
wget -a log.txt -O web.list http://en.kingofsat.net/pack-canaldigitaal.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"Canal Digitaal Netherlands - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.CanalDigitaalNetherlands


# Canal Digital Nordic    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-canaldigitalnordic.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"Canal Digitaal Netherlands - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Canal Digital Nordic    


# Canal ASTRA SPAIN    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-digitalplusa.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"Canal-Astra-SPain - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Canal-Astra-SPain


# Canal Hispasat SPAIN    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-digitalplush.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"Canal-Hispasat-SPain - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Canal-Hispasat-SPain


# CanalSat - 0500    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-canalsat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"Canalsat - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.CanalSat0500


# CanalSat - 0100    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-canalsat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Canalsat - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.CanalSat0100


# CS Link    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-cslink.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"CS-Link - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.CS-Link


# CS Link    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-cyfra.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Cyfra+ - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Cyfra


# Cyfrowy Polsat    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-cyfra.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Cyfrowy-Polsat - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Cyfrowy-Polsat


# D-Smart    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-dsmart.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"D-Smart - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.D-Smart


# Digit Alb    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-digitalb.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Digit Alb - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.DigitAlb


# Digitürk    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-digiturk.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Digitürk - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Digitürk


# Fransat    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-fransat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Fransat - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Fransat


# HD+    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-hdplus.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"HD+ - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.HD+


# Meo    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-meo.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"Meo - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Meo


# n**va    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-n**va.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0604:000000:%x \"n**va - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.n**va


# Orange    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-orange.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0604:000000:%x \"Orange - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Orange


# Orange-Polska    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-orangepl.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"Orange-Polska - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Orange-Polska


# ORF Digital    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-orangepl.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"ORF Digital - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.ORFDigital


# RAI    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-rai.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"RAI - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.RAI


# Sky Deutschland    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-skygermany.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "09c4:000000:%x \"Sky Deutschland - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.SkyDeutschland


# Sky-UK    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-skydigital.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0963:000000:%x \"S*Y UK - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Sky-UK




# Sky Italia 09CD    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-skydigital.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "09CD:000000:%x \"Sky Italia - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.SkyItalia


# Sky Italia 093b    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-skydigital.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "093b:000000:%x \"Sky Italia - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.SkyItalia1


# SSR/SRG    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-ssr.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"SSR/SRG - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.SSR-SRG


# TNTSAT 0500    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-ssr.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0500:000000:%x \"TNTSAT - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.TNTSAT


# TNTSAT 0100    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-tntsat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"TNTSAT - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.TNTSAT1


# TivùSat    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-tivusat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "1802:000000:%x \"TivùSat - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.TivùSat


# Total TV    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-totaltv.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "1802:000000:%x \"Total TV - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.TotalTV


# Tring Digital    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-tring.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0baa:000000:%x \"Tring Digital - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.TringDigital


# TVP    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-tvp.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "0100:000000:%x \"TVP - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.TVP


# UPC Direct    
wget -a log.txt -O web.list http://en.kingofsat.net/pack-upc.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "1802:000000:%x \"UPC Direct - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.UPC


# Viasat        
wget -a log.txt -O web.list http://en.kingofsat.net/pack-viasat.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "090f:000000:%x \"Viasat - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Viasat


# Zon            
wget -a log.txt -O web.list http://en.kingofsat.net/pack-tring.php
awk -F '>' 'BEGIN {chan = "invalid"}
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)}
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next
printf "1802:000000:%x \"Zon - %s\"\n", sid , chan
chan = "invalid"}' web.list > cccam.Zon


rm -f Cccam.channelinfo
cat cccam.* > Cccam.channelinfo


exit 0