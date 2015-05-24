Official release newcamd v5.26 full

-------------------------------------------------------------------------------

Important: Please keep this v5.26 zip archive, in the future, we might choose
to release upgrade zips, including only the stuff that has actually changed.

-------------------------------------------------------------------------------

We noticed, there are still many files around that do NOT comply
to the distribution terms set below, particularly complete images with all
keys inside. We again ask uploaders to remove such files and we also ask
admins to not allow such files on their upload centers.

Further action might be taken in the future, if our rules about newcamd
distribution are continously violated.

-------------------------------------------------------------------------------

It is our firm believe that access to Free-TV is made way to easy for
people at the moment and we are seriously considering disallowing the
distribution of future newcamd releases inside flash images. We have been
following a public policy up until now, because we wanted to provide a free
alternative to the never ending greed of the commerical pirates. But we do
believe however, that we can ask everyone wanting to use our software, to get
out of their TV armchairs and pause the growing of their asses (to quote the
writer of a certain FAQ) long enough to learn how to upload a couple of files
to their boxes via ftp, read the supplied documentation and edit a couple of
keyfiles. Everybody can learn how to do that easily, and we mean EVERYBODY.
We feel that anyone claiming the contrary, is just too lazy to even try.
To sum up, we believe all the emu images and full automatic internet key
downloads at the push of a button are hurting the Free-TV community more then it
serves it by forcing Pay-TV providers to implement stronger countermeasures and
we would ask all image makers out there to rethink their position.

-------------------------------------------------------------------------------

And since we are discussing politics already, some recent news bulletins on
several news services indicated the European Union thinking about forcing Pay-
TV providers to offer their services beyond national borders to anyone who wants
a subscription. We strongly support such a move and we pledge that the emu and
cardsharing facilities in newcamd would be discontinued if Pay-TV providers
would start to offer their services internationally under the same conditions
they offer it to national residents. In particular:

1. same choice and contents of all channel packages (no stripped-down
international subscriptions like Digiturk Euro).
2. same prices as for national customers

It was never the intention of the newcamd Team that people would use it to steal
the services of their national Pay-TV provider (or any other provider they could
officially subscribe to). If and when everyone would be able to officially
subscribe to any Pay-TV package he wants to, under the same conditions as
everyone else and regardless of where he lives, we would feel newcamd becoming
kind of obsolete. The only reason why we make newcamd support emu and card
sharing is to overcome this discrimination by Pay-TV providers to offer official
subscriptions to national residents only.

-------------------------------------------------------------------------------

Welcome to newcamd V5

This package is freeware. Distribution and usage is allowed only if you
agree and comply to the following rules:

1. For standalone (outside of flash images) distribution, you are NOT allowed
to make any changes to the original ZIP archive whatsoever. Distributions of
newcamd must not include any keys or Nagra ROMs.
2. Distribution of newcamd inside flash images is allowed, if no keys or
Nagra ROMs are included in the same flash image. Full documentation must be
provided in the flash image. Files keylist, rsakeylist, tpscrypt, ppua,
readme.txt and nagraAU.txt must be present in /var/scce (/var_init/scce on
Dreambox), files newcamd.conf, cardserv.cfg and betad.cfg must be present
in directory /var/tuxbox/config (/var_init/tuxbox/config on Dreambox). Files
in scce must be copied from the original Zip archive, they may not be changed.
Options in config files may be changed, but all the comments must be left
unchanged.
3. Distribution of patched newcamd, cardserver, betad and/or dcd binaries is
strictly prohibited.

Dieses Paket ist Freeware. Weiterverbreitung ist nur unter Einhaltung der
folgenden Regeln gestattet:

1. Das Original ZIP Archiv darf NICHT veraendert werden. Insbesondere duerfen
keine Keys oder Nagra ROMs enthalten sein.
2. Die Weiterverbreitung in Flash-Images ist nur erlaubt, wenn keine Keys oder
Nagra ROMs im Image enthalten sind. Die komplette Dokumentation muss im Image
vorhanden sein. Die Dateien keylist, rsakeylist, tpscrypt, ppua, readme.txt
und nagraAU.txt muessen in unveraenderter Form ins Verzeichnis /var/scce im
Image kopiert werden (/var_init/scce in Dreambox Images), die Dateien
newcamd.conf, cardserv.cfg und betad.cfg muessen ins Verzeichnis
/var/tuxbox/config (bzw. /var_init/tuxbox/config bei Dreambox Images) kopiert
werden. Konfigurationsoptionen duerfen angepasst werden, aber die Kommentare
muessen unveraendert bleiben.
3. Die Weitergabe von gepatchten newcamd, cardserver, betad und/oder dcd
Binaries ist ausdruecklich untersagt.

History:

newcamd v5.26
newcamd: implemented S2 5109 nano
cardspider: optimized some internal timings, add some text to cardspider.cfg
cardspider: add avoidDropoutsHowto.txt explaining some stuff
readme.txt: add some new Q&A

newcamd v5.25
newcamd: tpscrypt2 - you need a new libcrypto.so.0.9.7, available in this
archive, if you do not upgrade libcrypto.so.0.9.7, newcamd will crash when
trying to decrypt Tps
all binaries: protocol change (for details see protocol.txt) for future
enhancements, please switch all binaries at once to their new versions
newcamd, cardserver, cardspider, betad, radegast, camdcmd

newcamd v5.24
newcamd: 0065 9x table

newcamd v5.23 - DMM 500 edition
newcamd: add DM500 BOX_TYPE to config
cardserver: to use the internal slot, set SERIAL_PORT = 1 in cardserv.cfg

newcamd v5.22
all binaries: added keep alive pings for card client<->server connections
add CWS_KEEPALIVE = yes to newcamd.conf or cardspider.cfg to use it
if you use it, remember that all binaries must be updated to v5.22 versions
add dyndnscd - a small dyndns client to run on dbox2/Dreambox if your router
doesn't have one
betad: reenable Dreamcrypt support

newcamd v5.21
cardspider: add info about the number of user and peers your neighbouring nodes
have, this is a protocol change, all nodes within a network must be updated at
the same time

newcamd v5.20a
cardserver: fix a bug in Irdeto init

newcamd v5.20
newcamd: fix Polsat AU
cardspider: add SID_SCAN_PORT option, see cardspider/cardspider.cfg for details

newcamd v5.19
newcamd: fix S2 0070/0071

newcamd v5.18
newcamd.ppc: include /var/lib into the library search path for libcrypto-0.9.7
automatically
include libcrypto.so.0.9.7 in the dist archive in drawer lib
cardserver: add support for new Viasat cards
cardspider.cfg: parse error on lines longer than 256 bytes

newcamd v5.17
keylist: changed syntax for Nagravision vkeys again to finally reflect the way,
it's stored in the card

newcamd v5.16
S2 0065 international (bX encrypted) channels only

newcamd v5.15 North America Edition
keylist: changed syntax for Nagravision vkeys, EMM vkeys now always have value 2
in the lowest nibble to distinguish them from ECM vkeys that have value 0 or 1
in the lowest nibble. See keylist file for more info.
newcamd: extended mapping functionality, allow whole caids to be mapped to
others

newcamd v5.14
cardserv.cfg: description for BOXKEY option added, this is needed for nagra1
cards and was unfortunately forgotten to add in 5.13 release
http://streamboard.host-boxcracker.de/wbb2/thread.php?postid=179144 "fixes":
- cardserver/betad: replaced calls to tcflush with some workaround code
(Apparently doing a proper mklibs run seems to be too much to ask from some
"image makers", this was no cardserver fault, but an image fault. Anyway, it
should work now even in those images.) (fixes horsti58's problem)
- cardserv.cfg: mark CARD_DETECT_INVERT, IGNORE_CARD_DETECT_SWITCH as usable
options for betad (they have been since 5.10, but it was forgotten to add them
to the list of options, betad recognizes) (fixes Suedschwede's and macb's
problem)

newcamd v5.13
cardserver: fix handling of single control word Viaccess ECMs
newcamd/cardserver/cardspider: add support for Nagra1 original smartcards
cardserver: better overload handling (hopefully)
cardserver: new priority scheme - users with lower user id will be
serviced first
cardserver/Dreambox: support Phoenix cardreaders on USB->RS232 adapters
using devices /dev/usb/tts/0,1,2,3,... this feature depends on a driver
for your particular USB->RS232 adapter being insmod into the kernel of
your image, your particular USB->RS232 driver supporting RS232
handshaking signal generation and on the particular card used.
Basically this feature should be considered unstable and for advanced
users only

newcamd v5.12
Cabo AU fix

newcamd v5.11
0064 - thx to all the nice people, who published the necessary info

newcamd v5.10
newcamd/betad: betad now detects card insertion/removal, reverse login to
newcamd added
all the rest: small fixes, might be a good idea to replace all binaries

newcamd v5.09
newcamd: S2 5102
cardserver: new connection type option "spider", this acts like "wan", but
allows connections to cardspider ("wan" doesn't)

newcamd v5.08
newcamd: fix nano51 in Seca2 emu
cardserver (seca): SPECIAL_FEATURES are now called DISABLE_PIN

newcamd v5.07
fix serious bug in cardspider

newcamd v5.06
from now on all i386 binaries will be linked against glibc 2.2
newcamd: from now on ppc version will be linked against libcrypto.so.0.9.7
add option OSD_WEB_LOGIN in newcamd.conf for recent Enigma versions
where "Use http authentication" is actived in the Expert Setup menu
cardserver/betad: remove glibc dependency cfsetospeed
dcd: removed
cardspider: reduce data traffic
add ECM counter for new ECMs in debug output


newcamd v5.05
newcamd: 9x table for 0070-0073, S2 nano 0f and 51 support
cardserver: add some round-robin card rotation for answering ECMs, if
cardserver serves more than 1 card
cardspider: allow multiple cardspider instances to run from different cfg files
cardspider: add lan/wan classification to all cardspider connections
(cardserver + newcamd)
your cardspider.cfg has to be changed, either lan or wan must be added to
all USER and CWS statements, see cardspider/cardspider.cfg for details


newcamd v5.04
4 priority levels in /var/scce/priority

newcamd v5.03
fixes

newcamd v5.02
cardspider: internal protocol improvements, update all nodes

newcamd v5.01
fixed DNS lookup timing bug in cardspider

newcamd V5.00
added cardspider, see cardspider/cardspider.cfg
cardserver: allow multiple users to EMM a card


Installation:

Copy newcamd.conf to /var/tuxbox/config (dbox2/Dreambox) or /etc (i386).
Copy lib/libcrypto.so.0.9.7 to /var/lib directory
Check the config file and alter it for your needs.
Copy keylist, rsakeylist, ppua, tpscrypt, priority, mappings, nagra*.bin to
/var/scce
Enter keys into the keyfiles.
Install control word driver, avia_gt_proc.o (dbox2) or DVB-S driver with
changed root file (i386). Dreambox has control word driver included in
dream.o from Release 1.07. 1.07.2 uses api2 ca0 device in /dev/ca0, dream.o
from 1.07.3 and up use api3 ca0 device in /dev/dvb/card0/ca0.
dbox2 can also use ca1 device, no avia_gt_proc.o is needed in this case.

With CW_OUTPUT_MODE = 16 newcamd will write the descrambled control words to
/proc/bus/gtx (dbox2), 16 bytes with each write, first 8 byte odd control
word, then 8 byte even control word. With CW_OUTPUT_MODE = 4096 newcamd writes
4096 bytes to /proc/bus/gtx, just like the very first camds did.
On I386 newcamd or BOX_TYPE = DREAMBOX this parameter is ignored, because
control words are written to the ca0 device.

dbox2 users should deactivate hardware section filtering on API3 drivers, for
some reason, which illudes me, the demuxer keeps crashing from time to time
when using newcamd.

Changes to Zapit/Enigma:

No changes are necessary in recent Zapit or Enigma sources. Just use newcamd
instead of camd2 or dccamd. Make sure to set PMT_UPDATE_WATCH correctly for the
zapper, you are using. In fact newcamd is designed specifically for use with
unchanged zapit/Enigma. Any complaints about newcamd problems when running in
so-called emu images which feature other emus will be ignored. If newcamd works
with unchanged zapit/enigma, it works period. Everything else is the problem of
the image builders.
The old newcamd interface also still works for backward compatibility and
for older Zapit and Enigma versions, that don't support the current ca pmt
interface yet. The old interface is described below (see zapit-Anpassung).

Killing newcamd

This seems to be a big problem, from what I can read in certain Internet
forums (Posts like "newcamd never saves any AU keys", well if you kill it
with the -9 option, you're not giving newcamd a chance to save anything).
So, this is, how it's done right: newcamd, during startup, always creates a 
file /tmp/newcamd.pid. Kill that pid (pid = process id) and newcamd will
shut down orderly. For example: kill `cat /tmp/newcamd.pid`

/tmp/pmt.tmp and Polsat acceleration (optional)
(NO EFFECT for PMT_UPDATE_WATCH = no and new interface)

Let your zapper create a file called /tmp/pmt.tmp, newcamd can read this
and don't need to demux the channel's pmt again, which is faster.
For example in zapit/src/zapsi/pmt.cpp in function parse_pmt:

FILE* pmtFile;

then after the PMT was read from the demuxer:

section_length = ((buffer[1] & 0x0F) << 8) + buffer[2] + 3;

if ((pmtFile = fopen("/tmp/pmt.tmp", "wb")))
{
        if (fwrite(buffer, sizeof(unsigned char), section_length, pmtFile) != section_length)
        {
                fclose(pmtFile);
                unlink("/tmp/pmt.tmp");
        }
        else
        {
                fclose(pmtFile);
        }
}


zapit-Anpassung (altes Interface):

Folgende Funktionen muessen in zapit.cpp hinzugefuegt werden und an
entsprechender Stelle bei jedem Kanalwechsel aufgerufen werden. Fuer Polsat
empfiehlt es sich ausserdem, in zapost/dmx.cpp den Timeout fuer die PMT zu
verlaengern, ansonsten gibt es eine Menge Probleme mit Kanal nicht verfuegbar.
Fuer die start_camd() Routine ist erforderlich, nachzusehen, ob zapit die PMT
des aktuellen Kanals ueberwacht (pmt_set_update_filter). Diese Funktion wurde
mit zapit Version 1.327 eingefuehrt und war bis 1.330 standardmaessig aktiv,
seitdem ist sie zuschaltbar. newcamd hat ebenfalls so eine PMT Ueberwachung,
um den Wechsel von unverschluesselt zu verschluesselt rechtzeitig zu erkennen,
diese Ueberwachung muss aber abgeschaltet bleiben, wenn sie schon durch zapit
durchgefuehrt wird. Die Umschaltung wird ab sofort durch PMT_UPDATE_WATCH in
newcamd.conf vorgenommen. Die C++ Klasse (CCam) fuer das Betacrypt CAM muss
komplett deaktiviert werden.

void stop_camd()
{
        struct sockaddr_un servaddr;
        int camdSocket;
        unsigned char camdBuffer[6];

        servaddr.sun_family = AF_UNIX;
        strcpy(servaddr.sun_path, "/tmp/camd.socket");
        if ((camdSocket = socket(AF_UNIX, SOCK_STREAM, 0)) < 0)
        {
                perror("[camdConnect] socket");
                return;
        }

        if (connect(camdSocket, (struct sockaddr*) &servaddr, sizeof(servaddr)) < 0)
        {
                perror("[camdConnect] connect");
                close(camdSocket);
                return;
        }

        memset (camdBuffer+1, 0, 5);
        camdBuffer[0] = 0xff;

        if (write(camdSocket, camdBuffer, 6) < 0)
        {
                perror("[camdConnect] write");
        }

        if (read(camdSocket, camdBuffer, 2) < 0)
        {
                perror("[camdConnect] read reply");
        }

        close(camdSocket);
}

void start_camd()
{
        struct sockaddr_un servaddr;
        int camdSocket;
        unsigned char camdBuffer[6];
        unsigned short pid;

        servaddr.sun_family = AF_UNIX;
        strcpy(servaddr.sun_path, "/tmp/camd.socket");
        if ((camdSocket = socket(AF_UNIX, SOCK_STREAM, 0)) < 0)
        {
                perror("[camdConnect] socket");
                return;
        }

        if (connect(camdSocket, (struct sockaddr*) &servaddr, sizeof(servaddr)) < 0)
        {
                perror("[camdConnect] connect");
                close(camdSocket);
                return;
        }

        pid = channel->getAudioPid();

        camdBuffer[4] = (pid >> 8) & 0x1f;
        camdBuffer[5] = pid & 0xff;
        pid = channel->getPmtPid();
        camdBuffer[0] = (pid >> 8) & 0x1f;
        camdBuffer[1] = pid & 0xff;
        pid = channel->getServiceId();
        camdBuffer[2] = pid >> 8;
        camdBuffer[3] = pid & 0xff;

        if (write(camdSocket, camdBuffer, 6) < 0)
        {
                perror("[camdConnect] write");
        }

        if (read(camdSocket, camdBuffer, 2) < 0)
        {
                perror("[camdConnect] read reply");
        }

        close(camdSocket);
}


vdr-Anpassung:

Mitgeliefert wird ein Patch fuer szap aus dem linuxtv-dvb-1.0.1.tar.gz
Treiberpaket. Die darin enthaltenen camd_stop() und camd_start() Routinen
koennen auch in den vdr uebernommen werden. Saemtliche Funktionalitaet, die
auf das ca-Device zugreift, ist im vdr zu deaktivieren, newcamd benoetigt
exklusiven Zugriff auf das ca-Device. Anstatt der PMT Pid kann auch 0
uebergeben werden, da mein vdr Beta-Tester meinte, die PMT Pid sei an der
Stelle im vdr Code, an dem man den newcamd nach dem Zappen starten moechte,
etwas schwierig zu ermitteln. In diesem Fall versucht newcamd die PMT Pid aus
der Transponder PAT anhand der uebergebenen Service Id zu ermitteln. Nicht
vergessen, einen Treiber mit gepatchtem Root File zu verwenden.

mehrere DVB-S Karten:

Ist mehr als eine DVB-S Karte im Rechner eingebaut, muss fuer jede Karte ein
eigener newcamd gestartet werden. Fuer diesen Fall kann in der Kommandozeile
Pfad+Name des newcamd.conf Files und die Adapternummer angegeben werden (0-3).
"newcamd /etc/newcamdAdapter1.conf 1" startet zum Beispiel einen newcamd fuer
die zweite Karte im Rechner und nutzt /etc/newcamdAdapter1.conf als Konfigfile.
Angesprochen werden die einzelnen newcamd dann ueber /tmp/camd.socket0 bis
/tmp/camd.socket3 (siehe szap Patch).

Faq:

Question: On Dreambox cardserver never (or seldom) detects inserted cards.
I have to reboot box with cards inserted for cardserver to detect anything.
Answer: Early Dreambox mainboards have a design flaw, resistances R5003 and
R5007 have been fitted with 10 kOhm resistances instead of the correct 2.2 kOhm
resistances. You need to replace them both with the correct ones. You find them
just behind the card readers.

Question: Why is there no (or: Will there ever be) emu for Neotioncrypt porn
channels?
Answer: No. Those porn channels can be subscribed from every country, so bugger
off :) (maybe first take a look at newcamd policies at the top of this file)

Question: After a connection to a card server is lost, I have to restart
newcamd to reestablish it. This sux. Do something about it!
Answer: No, we won't. YOU do something about it! There is camdcmd provided
in the official newcamd.zip distribution, the wanon command will do exactly
that, rebuild all the connections that are designated as "wan" in newcamd.conf
(cardserv.cfg, cardspider.cfg). Start using it! Go make a plugin if calling it
via telnet is too much to ask.

Question: But, I want it to reconnect automatically without user interaction.
Answer: That makes no sense. newcamd<->cardserver uses the tcp protocol,
which means, if a connection is lost, there is something seriously wrong with
your network between newcamd and the cardserver. So an immediate reconnect would
almost certainly fail. A reconnect attempt after say X minutes makes no sense
either, the user will have long zapped to another channel or attempted the
reconnect manually by then. And if you did record something unattended it
certainly makes no difference, if only X minutes or the whole remaining
part of the program are lost. The recording is screwed up either way.
Bottom line, there will be no automatic reconnect for direct newcamd to
cardserver connections.

Question: But, if I restart cardserver, I always have to restart newcamd as
well or use camdcmd to reconnect.
Answer: No, you don't. Setup reverse login for the cardserver<->newcamd
connection.

Question: You're a bunch of idiots, I still WANT my automatic reconnect.
Answer: Then use cardspider to bridge the connection that logs out all the
time. cardspider does attempt to reconnect to peers, but only after ALL peers
are lost (offline). It also uses udp protocol which means in bad internet
connections, you will loose only single control words, but not the connection,
the picture will come back after the communication between the peers works
again.

Frage: Gehen mit cardserver die neuen Premiere oder Dreamcrypt Karten?
Antwort: Nein. newcamd enthaelt auch weiterhin keinerlei Funktionen, die das
Entschluesseln von Premiere ohne gueltiges Abo ermoeglichen, also auch kein
Control Word Sharing ueber Internet fuer Premiere. Gleiches gilt auch fuer
Dreamcrypt. In der dbox2 werden die neuen Premiere Karten selbstverstaendlich
im normalen CAM unterstuetzt.

Frage: Wie kann ich dann mit der Dreambox oder einer DVB-S Karte und vdr mein
Premiere Abo nutzen?
Antwort: Es gibt eine spezielle betad Version, die die neuen Premiere Karten
unterstuetzt. Diese kommuniziert im Gegensatz zu cardserver nicht ueber
TCP/IP. Also auch hier kein Control Word Sharing ueber Internet.

Frage: Welche Kartentypen werden von betad unterstuetzt?
Antwort: Getestet wurde betad mit S01 und S02 Karten. Prinzipiell sollten alle
01er und 02er Typen funktionieren, also auch K01, K02, P01, P02, A01, A02.
betad ist nicht geeignet fuer die 03er Kartentypen S03, K03, P03, A03.

Frage: Kann ich mit Hilfe von betad und Multicam auch eine S01 (K01, P01, A01)
Karte an der dbox2 benutzen?
Antwort: Ja.

Frage: Ich habe zwei Premiere Abos mit unterschiedlichen Paketen. Kann ich diese
kombinieren?
Antwort: Ja. Mehrere betad auf unterschiedlichen seriellen Ports starten und
alle Server in newcamd.conf anmelden (uds 0, uds 1, ...). dbox2: Erste Karte
in dbox CAM einlegen, zweite Karte in Multicam mit betad.

Frage: Ich habe ein Premiere Abo und meiner Bekannter hat ebenfalls eins, beide
mit unterschiedlichen Paketen. Kann ich diese kombinieren?
Antwort: Nein, siehe "Gehen mit cardserver die neuen Premiere Karten?".

Frage: Wenn ich ein Phoenix an die serielle Schnittstelle anschliesse, bootet
die dbox2 nicht mehr, im Display sind die Inforamtionen vom Debug Modus und
volle Balkenzahl zu sehen.
Antwort: Das ist eine Debug Funktion des Beta Research Bootloaders. Wenn beim
Booten bestimmte Pegel an der seriellen Schnittstelle anliegen, wird der
Bootvorgang angehalten. Mir ist keine Abhilfe bekannt, ich empfehle daher den
Standby-Modus von Neutrino oder ein MultiCam, falls noch nicht vorhanden.
