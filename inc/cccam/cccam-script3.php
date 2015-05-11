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
					
<?php include ("inc/html_content/cccam-menu.html"); ?>

				</section> <!-- **secondary - Ends** --> 
				
				<!-- Primary Starts -->
				<section id="primary" class="page-with-sidebar with-left-sidebar">
					<div class="content">
						<div class="entry-detail" style="width: 100%;">
							<!-- **entry-meta-data - Starts** -->
							<div class="entry-meta-data">
								<p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
								<p><span class="fa fa-calendar"> </span> Datum: 10.5.2015</p>
							</div> <!-- **entry-meta-data - Ends** -->
						</div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Ostatní Bash scripty pro CCcam</h4>

						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Přidání expirační doby pro F: line</h4>
							<p><strong>Popis scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<p>Tento script jsem testoval a stále nechápu jakým způsobem pracuje. Nicméně je to dobrý nápad jako trénink na bash scripty. Až bude někdy čas rád se na něj podívám blíže. Alespoň uvádím anglický manuál instalace.</p>
								<pre>
Add expiry date for any F line
This is a very wonderful addition for CCcam server owners to control their F lines

They can add Expiry date for any F line

1st: you create the F line as normal and end it with the Expiry date

	F: user pass 1 1 0 { 0:0:1 } #13-05-2011

2nd: download the Expiry script from here and add it on the following directory

	/bin

3rd: chmod 755
	
	chmod 755 /bin/expiry

Finally: we make the script to check the remove the expired F line daily at 12AM by the following

	crontab -e

add this line

	00 00 * * * root /bin/expiry

now you will found new file with name "expired" on the directory

	/var/etc

where all you expired F lines listed
								</pre>
							</div>
							<p><strong>Zdrojový kód scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre class="brush: bash;">
## ##
grep $(date +%d-%m-%Y) /etc/CCcam.cfg >> /etc/expired
echo "sed -i '/$(date +%d-%m-%Y)/d' /etc/CCcam.cfg" > /tmp/check-expire
chmod 755 /tmp/check-expire
/tmp/check-expire
rm /tmp/check-expire
								</pre>
							</div>
						</div>

						<div class="dt-sc-hr-invisible-very-small"></div>
						<div class="dt-sc-tabs-vertical-container">
							<h4>Konverze C:line a F:line pro OSCam</h4>
							<p><strong>Popis scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<p><strong>TESTOVÁNO a vše funguje s malou vyjímkou (po úpravě bude pracovat na plno i pro nové verze OSCamu).</strong><br> Vzhledem k tomu, že tento script je cca z roku 2012 a nebyl proveden update, jsou výstupní soubory OSCamu již ve špatném formátu. To je z toho důvodu, že OSCam je neustále ve vývoji a jeho formát konfiguračních dat je již jiný.</p>
							</div>
							<p><strong>Ke stažení</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/conv_cccam_to_oscam.sh" target="_blank">conv_cccam_to_oscam.sh - script</a><br>
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/CCcam.cfg" target="_blank">CCcam.cfg - ukázkový konfigurační soubor CCcamu</a><br>
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/oscam.server" target="_blank">oscam.server - ukázkový výstupní soubor s konverzí čteček</a><br>
								<a href="downloads/cccam/script/bash_script/Convert_C_F_lines_OSCam/oscam.user" target="_blank">oscam.user - ukázkový výstupní soubor s konverzí uživatelů</a><br><br>
							</div>
							<p style="clear:both"><strong>Zdrojový kód scriptu</strong></p>
							<div class="dt-sc-one dt-sc-lmarg25">
								<pre class="brush: bash;">
#!/bin/bash

#    conv_cccam_to_oscam.sh
#    Copyright (C) 2010 hperez
#
#    This program is free software; you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation; either version 2 of the License, or
#    (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this program; if not, write to the Free Software
#    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

#    This script reads CCcam.cfg and convert the C and F lines to the
#    Oscam format (oscam.server and oscam.user)
#
#    If the file oscam.server.others is present, the content of that
#    file will be copied to oscam.server.
#
#    If the file oscam.user.others is present, the content of that
#    file will be copied to oscam.user.
#
#    For each [reader] section, the content of the file cccam.options
#    will be added.
#
#    For each [account] section, the content of the file user.options
#    will be added.

FILE="CCcam.cfg"

# servers

function convert_servers {
  OUTPUT="oscam.server"

  echo -n "Converting C lines"

  cat oscam.server.others > $OUTPUT

  grep -i "^C:.*" $FILE > conv.tmp

  FS=" "
 
  while read line
  do
    F1=$(echo $line|cut -d"$FS" -f1)
    SERVER=$(echo $line|cut -d"$FS" -f2)
    PORT=$(echo $line|cut -d"$FS" -f3)
    USER=$(echo $line|cut -d"$FS" -f4)
    PASS=$(echo $line|cut -d"$FS" -f5)
    #echo "SERVER: $SERVER PORT: $PORT USER: $USER PASS: $PASS"
    echo -n "."

    echo "[reader]" >> $OUTPUT
    echo "label= $SERVER" >> $OUTPUT
    #echo "enable = 1" >> $OUTPUT
    echo "protocol = cccam" >> $OUTPUT
    echo "device = $SERVER,$PORT" >> $OUTPUT
    echo "account = $USER,$PASS" >> $OUTPUT
    cat cccam.options >> $OUTPUT
    echo "" >> $OUTPUT

  done < conv.tmp

  rm conv.tmp

  echo ""
}

function convert_clients {
  OUTPUT="oscam.user"

  echo -n "Converting F lines"

  cat oscam.user.others > $OUTPUT

  grep -i "^F:.*" $FILE > conv.tmp

  FS=" "
 
  while read line
  do
    F1=$(echo $line|cut -d"$FS" -f1)
    USER=$(echo $line|cut -d"$FS" -f2)
    PASS=$(echo $line|cut -d"$FS" -f3)
    RESHARE=$(echo $line|cut -d"$FS" -f4)
    #echo "USER: $USER PASS: $PASS RESHARE: $RESHARE"
    echo -n "."

    echo "[account]" >> $OUTPUT
    echo "user = $USER" >> $OUTPUT
    echo "pwd = $PASS" >> $OUTPUT
    echo "cccreshare = $RESHARE" >> $OUTPUT
    cat user.options >> $OUTPUT
    echo "" >> $OUTPUT

  done < conv.tmp

  rm conv.tmp

  echo ""
}

convert_servers
convert_clients

echo "Done"
								</pre>
							</div>
						</div>
					</div>
					<div class="dt-sc-hr-invisible-small"></div>
				</section><!-- **Primary - Ends** -->

			</div> <!-- **container - Ends** -->
