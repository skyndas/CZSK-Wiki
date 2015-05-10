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