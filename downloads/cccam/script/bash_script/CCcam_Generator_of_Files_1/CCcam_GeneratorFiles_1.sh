#!/bin/sh

# SID List Creator v2.4 By Sharing-Team
# Forum officiel http://sharing-Team.ouba.com
# Please get your profiles on http://en.kingofsat.net/packages.php

CCcamchannelinfo=/tmp/CCcam.channelinfo
CCcamproviders=/tmp/CCcam.providers
CCcamprio=/tmp/CCcam.prio
sidlist=/tmp/sid.list
oscamsrvid=/tmp/oscam.srvid

URL1=http://en.kingofsat.net/pack-add.php
     add=2   #pack name = number of diferent caid/provid
     add1="Viaccess 4.0;0500:041500;"  # pack name + number 1ş caid/provid 
     add2="Irdeto 2;0604:000000;"  # pack name + number 1ş caid/provid 	

URL2=http://en.kingofsat.net/pack-aljazeerasport.php
     aljazeerasport=2
     aljazeerasport1="Viaccess 4.0;0500:042400;"
     aljazeerasport2="Irdeto 2;0603:000000;"

URL3=http://en.kingofsat.net/pack-austriasat.php
     austriasat=1
     austriasat1="Cryptoworks;0D05:000000"

URL4=http://en.kingofsat.net/pack-bis.php
     bis=1
     bis1="Viaccess 4.0;0500:042800;"

URL5=http://en.kingofsat.net/pack-bulsatcom.php
     bulsatcom=2
     bulsatcom1="BetaCrypt;5581:000000;"
     bulsatcom2="Nagravision 2;0604:000000"

URL6=http://en.kingofsat.net/pack-canalsat.php
     canalsat=5
     canalsat1="Mediaguard 2;0100:000081;"
     canalsat2="Mediaguard 3;0100:003311;"
     canalsat3="Mediaguard 3;0100:003315;"
     canalsat4="Mediaguard 3;0100:003317;"
     canalsat5="Viaccess 3.0;0500:032830;"
	
URL7=http://en.kingofsat.net/pack-canaldigitaal.php
     canaldigitaal=1
     canaldigitaal1="Mediaguard 3;0100:00006A;"

URL8=http://en.kingofsat.net/pack-canaldigitalnordic.php
     canaldigitalnordic=1
     canaldigitalnordic1="Conax;0B00:000000;"

URL9=http://en.kingofsat.net/pack-cslink.php
     cslink=3
     cslink1="Irdeto 2;0624:000000;"
	  cslink1="Irdeto 2;0666:000000;"
     cslink2="Cryptoworks;0D0F:000000;"
	 cslink3="Cryptoworks;0D96:000000;"

URL10=http://en.kingofsat.net/pack-digitalb.php
     digitalb=1
     digitalb1="Conax;0B00:000000;"

URL11=http://pt.kingofsat.net/pack-digiturk.php
     digiturk=2
     digiturk1="Irdeto 2;0664:000000;"
     digiturk2="Cryptoworks;0D00:000000;"

URL12=http://en.kingofsat.net/pack-dmc.php
     dmc=1
     dmc1="Cryptoworks;0D04:000400;"

URL13=http://en.kingofsat.net/pack-dolcetv.php
     dolcetv=1
     dolcetv1="VideoGuard;092F:000000;"

URL14=http://en.kingofsat.net/pack-digitv.php
     digitv=2
     digitv1="Nagravision 3;1802:000000;"
     digitv2="Nagravision 3;1880:000000;"

URL15=http://en.kingofsat.net/pack-dsmart.php
     dsmart=1
     dsmart1="VideoGuard;092B:000000;"

URL16=http://en.kingofsat.net/pack-digitalplush.php 
    digitalplush=1
    digitalplush1="Nagravision 3;1810:000000;"

URL17=http://en.kingofsat.net/pack-digitalplusa.php
    digitalplusa=2
    digitalplusa1="Mediaguard 2;0100:004106;"
    digitalplusa2="Nagravision 3;1810:000000;"

URL18=http://en.kingofsat.net/pack-focussat.php
     focussat=1
     focussat1="Conax;0B02:0000C0;"

URL19=http://en.kingofsat.net/pack-fransat.php
     fransat=1
     fransat1="Viaccess 4.0;0500:041900;"

URL20=http://en.kingofsat.net/pack-hdplus.php
     hdplus=2
     hdplus1="Nagravision 3;1830:000000;"
	 hdplus2="Nagravision 3;1843:000000;"

URL21=http://en.kingofsat.net/pack-hellohd.php
     hellohd=1
     hellohd1="Conax;0BAA:000000;"

URL22=http://en.kingofsat.net/pack-kabelkiosk.php
     kabelkiosk=2
     kabelkiosk1="VideoGuard;09AF:000000;"
     kabelkiosk2="Conax;0B00:000000;"

URL23=http://en.kingofsat.net/pack-maxtv.php
     maxtv=1
     maxtv1="Nagravision 3;1830:000000;"

URL24=http://en.kingofsat.net/pack-magio.php
     magio=1
     magio1="Conax;0B00:000000;"

URL25=http://en.kingofsat.net/pack-mtv.php
     mtv=3
     mtv1="Viaccess 5.0;0500:050600;"
     mtv2="Conax;0B00:000000;"
     mtv3="Cryptoworks;0D00:000000;"

URL26=http://en.kingofsat.net/pack-mobistar.php
     mobistar=1
     mobistar1="Viaccess 4.0;0500:042500;"

URL27=http://en.kingofsat.net/pack-mcafrica.php
     mcafrica=1
     mcafrica1="Irdeto 2;0604:000000;"

URL28=http://en.kingofsat.net/pack-meo.php
     meo=1
     meo1="Mediaguard 3;0100:005221;"  
	 
URL29=http://en.kingofsat.net/pack-multicanal.php
     multicanal=1
     multicanal1="Nagravision 3;1800:002201;"	

URL30=http://en.kingofsat.net/pack-mediaset.php
     mediaset=3
     mediaset1="Nagravision 3;1805:000000;" 
     mediaset2="Nagravision 3;1805:008C11;" 
     mediaset3="Nagravision 3;1805:008D11;" 

URL31=http://en.kingofsat.net/pack-ncplus.php
     ncplus=1
     ncplus1="Mediaguard 3;0100:000068;"

URL32=http://en.kingofsat.net/pack-nova.php
     nova=1
     nova1="Irdeto 2;0604:000000;"

URL33=http://en.kingofsat.net/pack-ntvrussia.php
     ntvrussia=2
     ntvrussia1="Viaccess 4.0;0500:042300;"
     ntvrussia2="Conax;0B00:000000;"

URL34=http://en.kingofsat.net/pack-orangepl.php
     orangepl=1
     orangepl1="Viaccess 3.0;0500:032A00;"

URL35=http://en.kingofsat.net/pack-orange.php
     orange=2
     orange1="Viaccess 4.0;0500:032920;"
     orange2="Viaccess 3.0;0500:032A00;"

URL36=http://en.kingofsat.net/pack-orfdigital.php
     orfdigital=2
     orfdigital1="Cryptoworks;0D05:000000;"
     orfdigital2="Cryptoworks;0D95:000000;"

URL37=http://en.kingofsat.net/pack-ote.php
     ote=1
     ote1="VideoGuard;09BE:000000;"

URL38=http://en.kingofsat.net/pack-polsat.php
     polsat=2
     polsat1="Nagravision 3;1803:000000;"
     polsat2="Nagravision 3;1861:000000;"

URL39=http://en.kingofsat.net/pack-rai.php
     rai=1
     rai1="Mediaguard 2;0100:000030;"

URL40=http://en.kingofsat.net/pack-skyitalia.php
     skyitalia=3
     skyitalia1="VideoGuard;0919:000000;"
     skyitalia2="VideoGuard;093B:000000;"
     skyitalia3="VideoGuard;09CD:000000;"

URL41=http://en.kingofsat.net/pack-skydigital.php
     skydigital=1
     skydigital1="VideoGuard;0963:000000;"

URL42=http://en.kingofsat.net/pack-skygermany.php
     skygermany=7
     skygermany1="VideoGuard;09C4:000000;"
     skygermany2="VideoGuard;098C:000000;"
     skygermany3="BetaCrypt;1702:000000;"
     skygermany4="BetaCrypt;1722:000000;"
     skygermany5="Nagravision 3;1833:000000;"
     skygermany6="Nagravision 3;1834:000000;"
     skygermany7="VideoGuard;098C:000000;"

URL43=http://en.kingofsat.net/pack-ssr.php
     ssr=2
     ssr1="Viaccess 2.6;0500:023800;"
     ssr2="Viaccess 4.0;0500:040810;"

URL44=http://en.kingofsat.net/pack-showtime.php
     showtime=4
     showtime1="BetaCrypt;1702:000000;"
	 showtime2="Irdeto 2;0604:000100;"
	 showtime3="Irdeto 2;0668:000000;"
     showtime4="Irdeto 2;1708:000000;"

URL45=http://en.kingofsat.net/pack-tvcabo.php
     tvcabo=1
     tvcabo1="Nagravision 3;1802:000000;"
 
URL46=http://en.kingofsat.net/pack-totaltv.php
     totaltv=1
     totaltv1="VideoGuard;091F:000000;"

URL47=http://en.kingofsat.net/pack-tivusat.php
     tivusat=1
     tivusat1="Nagravision 3;183D:000000;"

URL48=http://en.kingofsat.net/pack-telesat.php
     telesat1=1
     telesat1="Mediaguard 3;0100:00006D;"

URL49=http://en.kingofsat.net/pack-tring.php
     tring=1
     tring1="Conax;0BAA:000000;"

URL50=http://en.kingofsat.net/pack-tvvlaanderen.php
     tvvlaanderen=1
     tvvlaanderen1="Mediaguard 3;0100:00006C;"

URL51=http://en.kingofsat.net/pack-tntsat.php
     tntsat=1
     tntsat1="Viaccess 3.0;0500:030B00;"

URL52=http://en.kingofsat.net/pack-tvp.php
     tvp=1
     tvp1="VideoGuard;09B2:000000;"

URL53=http://en.kingofsat.net/pack-upc.php
     upc=4
     upc1="Irdeto 2;0653:000000;"
     upc2="Conax;0B02:000000;"
     upc3="Nagravision 3;1815:00B801;"
     upc4="Cryptoworks;0D02:0000A0;"

URL54=http://en.kingofsat.net/pack-visiontv.php
     visiontv=1
     visiontv1="VideoGuard;0931:000000;"

URL55=http://en.kingofsat.net/pack-viasat.php
     viasat=2
     viasat1="VideoGuard;090F:000000;"
     viasat2="VideoGuard;093E:000000;"

URL56=http://en.kingofsat.net/pack-vivacom.php
     vivacom=1
     vivacom1="VideoGuard;09BD:000000;"

URL57=http://en.kingofsat.net/pack-orangeromania.php
     orangeromania=1
     orangeromania1="Viaccess 5.0;0500:051300;"

URL58=http://en.kingofsat.net/pack-skylink.php
     skylink=2
     skylink1="Cryptoworks;0D96:000000;"
     skylink2="Irdeto;0624:000000;"	 

#############################################################
#NOT_IMPLEMENTED # need caid/sid and encryptation
#############################################################
#http://en.kingofsat.net/packages.php
#http://en.kingofsat.net/pack-abscbn.php
#http://en.kingofsat.net/pack-add.php
#http://en.kingofsat.net/pack-aljazeerasport.php
#http://en.kingofsat.net/pack-arddigital.php
#http://en.kingofsat.net/pack-austriasat.php
#http://en.kingofsat.net/pack-bbc.php
#http://en.kingofsat.net/pack-bis.php
#http://en.kingofsat.net/pack-bulsatcom.php
#http://en.kingofsat.net/pack-canaldigitaal.php
#http://en.kingofsat.net/pack-canaldigitalnordic.php
#http://en.kingofsat.net/pack-digitalplusa.php
#http://en.kingofsat.net/pack-digitalplush.php
#http://en.kingofsat.net/pack-canalsat.php
#http://en.kingofsat.net/pack-multicanal.php
#http://en.kingofsat.net/pack-cslink.php
#http://en.kingofsat.net/pack-polsat.php
#http://en.kingofsat.net/pack-dsmart.php
#http://en.kingofsat.net/pack-digitalb.php
#http://en.kingofsat.net/pack-digiturk.php
#http://en.kingofsat.net/pack-dmc.php
#http://en.kingofsat.net/pack-dolcetv.php
#http://en.kingofsat.net/pack-ertu.php
#http://en.kingofsat.net/pack-focussat.php
#http://en.kingofsat.net/pack-fransat.php
#http://en.kingofsat.net/pack-freesat.php
#http://en.kingofsat.net/pack-hdplus.php
#http://en.kingofsat.net/pack-hellohd.php
#http://en.kingofsat.net/pack-kabeld.php
#http://en.kingofsat.net/pack-kabelkiosk.php
#http://en.kingofsat.net/pack-magio.php
#http://en.kingofsat.net/pack-maxtv.php
#http://en.kingofsat.net/pack-mediaset.php
#http://en.kingofsat.net/pack-meo.php
#http://en.kingofsat.net/pack-mobistar.php
#http://en.kingofsat.net/pack-mtv.php
#http://en.kingofsat.net/pack-mcafrica.php
#http://en.kingofsat.net/pack-mytv.php
#http://en.kingofsat.net/pack-ncplus.php
#http://en.kingofsat.net/pack-nova.php
#http://en.kingofsat.net/pack-ntvrussia.php
#http://en.kingofsat.net/pack-orange.php
#http://en.kingofsat.net/pack-orangepl.php
#http://en.kingofsat.net/pack-orangeromania.php
#http://en.kingofsat.net/pack-orbit.php
#http://en.kingofsat.net/pack-showtime.php
#http://en.kingofsat.net/pack-orfdigital.php
#http://en.kingofsat.net/pack-ote.php
#http://en.kingofsat.net/pack-polaris.php
#http://en.kingofsat.net/pack-raduga.php
#http://en.kingofsat.net/pack-rai.php
#http://en.kingofsat.net/pack-digitv.php
#http://en.kingofsat.net/pack-sfr.php
#http://en.kingofsat.net/pack-skygermany.php
#http://en.kingofsat.net/pack-skydigital.php
#http://en.kingofsat.net/pack-skyitalia.php
#http://en.kingofsat.net/pack-skylink.php
#http://en.kingofsat.net/pack-ssr.php
#http://en.kingofsat.net/pack-startimes.php
#http://en.kingofsat.net/pack-telesat.php
#http://en.kingofsat.net/pack-tvnakarte.php
#http://en.kingofsat.net/pack-tivusat.php
#http://en.kingofsat.net/pack-tntsat.php
#http://en.kingofsat.net/pack-totaltv.php
#http://en.kingofsat.net/pack-tring.php
#http://en.kingofsat.net/pack-tvvlaanderen.php
#http://en.kingofsat.net/pack-tvp.php
#http://en.kingofsat.net/pack-upc.php
#http://en.kingofsat.net/pack-viasat.php
#http://en.kingofsat.net/pack-visat.php
#http://en.kingofsat.net/pack-visiontv.php
#http://en.kingofsat.net/pack-vivacom.php
#http://en.kingofsat.net/pack-xtra.php
#http://en.kingofsat.net/pack-zdfvision.php
#http://en.kingofsat.net/pack-tvcabo.php
################################################################

######################################################################
######################################################################
#### Do not Change ###################################################
######################################################################

#### channelinfo and SID LIST ########################################
######################################################################

run() {

rm -f $CCcamchannelinfo
rm -f $CCcamproviders
rm -f $CCcamprio
rm -f $sidlist

#echo "############ $(date +"%Y-%m-%d") ###########" >> $CCcamchannelinfo

for VARIABLE1 in $URL1 $URL2 $URL3 $URL4 $URL5 $URL6 $URL7 $URL8 $URL9 $URL10 $URL11 $URL12 $URL13 $URL14 $URL15 $URL16 $URL17 $URL18 $URL19 $URL20 $URL21 $URL22 $URL23 $URL24 $URL25 $URL26 $URL27 $URL28 $URL29 $URL30 $URL31 $URL32 $URL33 $URL34 $URL35 $URL36 $URL37 $URL38 $URL39 $URL40 $URL41 $URL42 $URL43 $URL44 $URL45 $URL46 $URL47 $URL48 $URL49 $URL50 $URL51 $URL52 $URL53 $URL54 $URL55 $URL56 $URL57 $URL58 $URL59 $URL60 $URL61 $URL62 $URL63 $URL64 $URL65 $URL66 $URL67 $URL68 $URL69 $URL70 $URL71 $URL72 $URL73 $URL74 $URL75 $URL76 $URL77 $URL78 $URL79 $URL80
do

provider=`echo $VARIABLE1 | awk -F"-" '{print $2}' | awk -F"." '{print $1}'` # =digitalplusa
eval provider1=\$$provider #provider1=2 nr de encriptaçoes no inicio, digitalplusa=2

#get real variable pack name
varname="_$provider" 
eval realprovider=\$$varname ##get real variable pack name

echo ""
echo "Download of $VARIABLE1 "
wget -q -O web.list $VARIABLE1

awk -F '>' 'BEGIN {chan = "invalid"}
# procura                    3ş *  nş dig   -3 digitos    *quero logo o 1şdigito
/WIDTH="15%"/ {chan = substr($3,1,length($3) - 3)} # dá nome canal
#/WIDTH="10%"/ {cod = substr($2,1,length($2) - 5)} #1Şcodificaçăo
/WIDTH="10%"/ {cod = substr($2,1)} #1Şcodificaçăo
/WIDTH="10%"/ {cod2 = substr($3,1)} #2Şcodificaçăo
/WIDTH="10%"/ {cod3 = substr($4,1)} #3Şcodificaçăo
/WIDTH="10%"/ {cod4 = substr($5,1)} #4Şcodificaçăo
/WIDTH="10%"/ {cod5 = substr($6,1)} #5Şcodificaçăo
/WIDTH="10%"/ {cod6 = substr($7,1)} #6Şcodificaçăo
/WIDTH="10%"/ {cod7 = substr($8,1)} #7Şcodificaçăo
/WIDTH="10%"/ {cod8 = substr($9,1)} #8Şcodificaçăo
/class="s"/ {sid = substr($2,1,length($2) - 2)
if (chan == "invalid") next                                                 
printf "%x*%s*%s*%s*%s*%s*%s*%s*%s*%s*%s\n", sid , "'$provider'", chan, cod, cod1, cod2, cod3, cod4, cod5, cod6, code7, cod8
chan = "invalid"}' web.list > channelinfo1 

sed -i 's/<\/\TD//g' channelinfo1 #</TD
#sed -i 's:<\br /\::g' channelinfo1 #</br \

pakagesencrypt2 () {
caid=`echo $linha2 | awk -F";" '{print $2}'` #1802:000000

#####sid list######
echo "" >> $sidlist
printf "%s" "; $realprovider $caid SID LIST=" >> $sidlist
awk -F '*' '{printf $1","}' channelinfo2 >> $sidlist
echo "SID LIST    = $realprovider - $enc2"
                                                
#####channelinfo#### 
echo "" >> $CCcamchannelinfo
echo "; $realprovider $enc22" >> $CCcamchannelinfo                             
awk -F '*' '{printf "%s%s%s%s%s%s%s%s\n", "'$caid'", ":", $1, " \"", "'$provider'", " - ", $3, "\""}' channelinfo1 >> $CCcamchannelinfo
echo "" >> $CCcamchannelinfo
sed -r -i 's/'"${provider}"'/'"${realprovider}"'/g' $CCcamchannelinfo
echo "Channelinfo = $realprovider - $enc2"

#####CCcamproviders#### 
echo "" >> $CCcamproviders
echo "; $realprovider $enc22" >> $CCcamproviders                            
awk -F '*' '{printf "%s%s%s%s%s%s%s%s\n", "'$caid'", " ", ""," \"", "'$provider'", " - ", $3, "\""}' channelinfo2 >> $CCcamproviders
echo "" >> $CCcamproviders
sed -r -i 's/'"${provider}"'/'"${realprovider}"'/g' $CCcamproviders
echo "CCcamproviders = $realprovider - $enc2"

#####cccam.prio######                         
awk -F '*' '{printf "%s%s%s%s%s%s%s%s\n", "P: ", "'$caid'", ":", $1, " #", "'$provider'", " - ", $3}' channelinfo1 >> $CCcamprio
echo "" >> $CCcamprio
sed -r -i 's/'"${provider}"'/'"${realprovider}"'/g' $CCcamprio
echo "CCcam.prio  = $realprovider - $enc2"
}

COUNTER=1
while [ $COUNTER -le $provider1 ]
do
linha=$provider$COUNTER #digitalplusa1 / digitalplusa2
eval linha2=\$$linha ##get variable digitalplusa1= / digitalplusa2=  


enc22=`echo $linha2 | awk -F";" '{print $1}'` #encrypt
enc2=`echo $linha2`

cat channelinfo1 | grep "$enc22" > channelinfo2 #remove diff encrypt
pakagesencrypt2 #run
COUNTER=$((COUNTER+1))
done

done #for VARIABLE1 in

rm -f channelinfo1
rm -f channelinfo2
rm -f web.list

} # end run

_abscbn="ABS-CBN"
_add=ADD
_aljazeerasport="Al Jazeera Sport"
_arddigital="ARD Digital"
_austriasat=Austriasat
_bbc=BBC
_bis=BIS
_bulsatcom=Bulsatcom
_canaldigitaal="Canal Digitaal"
_canaldigitalnordic="Canal Digital Nordic"
_digitalplusa="Canal+ Astra"
_digitalplush="Canal+ Hispasat"
_canalsat=CanalSat
_multicanal="Chello Multicanal"
_cslink="CS Link"
_polsat="Cyfrowy Polsat"
_dsmart="D-Smart"
_digitalb="Digit Alb"
_digiturk="Digiturk"
_dmc=DMC
_dolcetv="Dolce TV"
_ertu=ERTU
_focussat="Focus Sat"
_fransat="Fransat"
_freesat="Freesat"
_hdplus="HD +"
_hellohd="Hello HD"
_kabeld="Kabel Deutschland"
_kabelkiosk=Kabelkiosk
_magio="Magio TV"
_maxtv="Max TV"
_mediaset="Mediaset"
_meo=MEO
_mobistar=Mobistar
_mtv=MTV
_mcafrica="Multichoice Africa"
_mytv=MyTv
_ncplus="NC+"
_nova=Nova
_ntvrussia=NTV
_orange=Orange
_orangepl="Orange Polska"
_orangeromania="Orange Romania"
_orbit=Orbit
_showtime="Orbit Showtime"
_orfdigital="ORF Digital"
_ote=OTE
_polaris="Polaris Media"
_raduga="Raduga TV"
_rai=RAI
_digitv="RCS DigiTV"
_sfr=SFR
_skygermany="Sky Deutschland"
_skydigital="Sky Digital"
_skyitalia="Sky Italia"
_skylink=SkyLink
_ssr="SSR/SRG"
_startimes=Startimes
_telesat=TeleSat
_tvnakarte="Telewizja na karte"
_tivusat="TivůSat"
_tntsat="TNTSAT"
_totaltv="Total TV"
_tring="Tring Digital"
_tvvlaanderen="TV Vlaanderen"
_tvp=TVP
_upc="UPC Direct"
_viasat=Viasat
_visat=Visat
_visiontv=VisionTV
_vivacom=Vivacom
_xtra="Xtra TV"
_zdfvision="ZDF Vision"
_tvcabo=ZON

run
  
oscamsrvidurl="http://kos.twojeip.net/download.php?download[]=pack-abscbn&download[]=pack-akta&download[]=pack-austriasat&download[]=pack-bis&download[]=pack-boom&download[]=pack-bulsatcom&download[]=pack-cslink&download[]=pack-canaldigitaal&download[]=pack-canaldigitalnordic&download[]=pack-canalsat&download[]=pack-multicanal&download[]=pack-polsat&download[]=pack-dsmart&download[]=pack-dmc&download[]=pack-digitalb&download[]=pack-digitalplusa&download[]=pack-digitalplush&download[]=pack-digiturk&download[]=pack-dolcetv&download[]=pack-focussat&download[]=pack-fransat&download[]=pack-hdplus&download[]=pack-hellohd&download[]=pack-kabeld&download[]=pack-kabelkiosk&download[]=pack-cplus26e&download[]=pack-mtv&download[]=pack-maxtv&download[]=pack-mediaset&download[]=pack-meo&download[]=pack-mobistar&download[]=pack-mcafrica&download[]=pack-mytv&download[]=pack-ncplus&download[]=pack-orfdigital&download[]=pack-ote&download[]=pack-orange&download[]=pack-orangepl&download[]=pack-orbit&download[]=pack-showtime&download[]=pack-platformadv&download[]=pack-platformahd&download[]=pack-rai&download[]=pack-digitv&download[]=pack-raduga&download[]=pack-ssr&download[]=pack-satellitebg&download[]=pack-skygermany&download[]=pack-skydigital&download[]=pack-skyitalia&download[]=pack-skylink&download[]=pack-tvvlaanderen&download[]=pack-tvp&download[]=pack-telesat&download[]=pack-tvnakarte&download[]=pack-tivusat&download[]=pack-totaltv&download[]=pack-tring&download[]=pack-upc&download[]=pack-viasat&download[]=pack-visiontv&download[]=pack-vivacom&download[]=pack-tvcabo"
echo ""
echo ""
echo "oscam.srvid download from http://kos.twojeip.net. All credits to DaM" 
wget -q -O $oscamsrvid $oscamsrvidurl

echo "oscam.srvid OK"
echo "EXIT"

exit 0