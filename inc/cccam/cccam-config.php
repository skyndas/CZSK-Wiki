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

    <?php include("inc/html_content/cccam-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 27.4.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam.cfg</h4>
        <p>Soubor <strong>CCcam</strong> slouží ke konfiguraci/nastavení CCcam serveru a klienta. Jedná se o textový
          soubor, který lze editovat v běžných textových editorech (s oblibou používám Sublime Text 2)</p>
        <p>Hlavním principem při přistupování ke konfiguraci nastavení v CCcam.cfg je "To co není zakázané, je
          povolené".</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Ke stažení - <span>cccam.cfg pro poslední public verzi CCcam 2.3.0</span></h4>
        <div class="dt-sc-tabs-vertical-frame-content">
          <a href="downloads/cccam/config/CCcam_2.3.0_english.cfg" target="_blank">CCcam.cfg pro CCcam v2.3.0 - anglický
            popis</a><br>
          <a href="downloads/cccam/config/CCcam_2.3.0_deutsch.cfg" target="_blank">CCcam.cfg pro CCcam v2.3.0 - německý
            popis</a><br>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam.cfg - základní info</h4>
        <p>Řádky které jsou zakomentováné na začátku řádku značkou "#" , CCcam neakceptuje.</p>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>CCcam.cfg - základní nastavení bez další konfigurace</h4>
        <p>V případě, že spustíme CCcam bez nastavení v konfiguračním souboru CCcam.cfg bude CCcam spuštěn s
          následujícími paramtery</p>

        <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right" style="margin-bottom: 10px;">
          <li>Nejsou nastaveny žádní uživatelé a spojení na další servery.</li>
          <li>Hlavní port pro připojení na CCcam server je 12000.</li>
          <li>Je povoleno webové rozhraní na portu 16001.</li>
          <li>Je povolen telnet info na portu 16000.</li>
          <li>Je vypnuto zadání jména a heslo pro připojení na WebIf.</li>
          <li>Nejsou nakonfigurovány žádné čtečky.</li>
          <li>Je vypnuto logování do textového souboru.</li>
        </ul>
        <div class="dt-sc-margin25"></div>
        <h5>CCcam.cfg - index</h5>
        <ul class="dt-sc-lmarg25">
          <li><a href="#1"><strong>1.</strong> - <U>UŽIVATELÉ</U></a></li>
          <li><a href="#1.1"><strong>1.1.</strong> - Uživatelé - základní nastavení ( F: line )</a></li>
          <li><a href="#1.2"><strong>1.2.</strong> - Uživatelé - rozšířené nastavení</a></li>
          <li><a href="#1.3"><strong>1.3.</strong> - Uživatelé - příklady</a></li>
          <li></li>
          <li><a href="#2"><strong>2.</strong> - <u>PŘIPOJENÍ NA SERVERY</u></a></li>
          <li><a href="#2.1"><strong>2.1.</strong> - Připojení na servery - připojení na CCcam server ( C: line )</a>
          </li>
          <li><a href="#2.1.1"><strong>2.1.1</strong> - Připojení na servery - připojení na CCcam server - Příklady</a>
          </li>
          <li><a href="#2.2"><strong>2.2.</strong> - Připojení na servery - připojení na Newcamd server ( N: line )</a>
          </li>
          <li><a href="#2.3"><strong>2.3.</strong> - Připojení na servery - připojení na Radegast server ( R: line )</a>
          </li>
          <li><a href="#2.4"><strong>2.4.</strong> - Připojení na servery - připojení na Camd3 server ( L: line )</a>
          </li>
          <li><a href="#2.5"><strong>2.5.</strong> - Připojení na servery - připojení na Gbox server ( G: line )</a>
          </li>
          <li></li>
          <li><a href="#3"><strong>3.</strong> - <u>VŠEOBECNÁ NASTAVENÍ</u></a></li>
          <li><a href="#3.1"><strong>3.1.</strong> - Všeobecná nastavení - příchozí port</a></li>
          <li><a href="#3.2"><strong>3.2.</strong> - Všeobecná nastavení - Webové rozhraní a TelnetInfo</a></li>
          <li><a href="#3.3"><strong>3.3.</strong> - Všeobecná nastavení - Pokročilé informace o klientovi</a></li>
          <li><a href="#3.4"><strong>3.4.</strong> - Všeobecná nastavení - Login do Webové rozhraní</a></li>
          <li><a href="#3.5"><strong>3.5.</strong> - Všeobecná nastavení - Login pro TelnetInfo</a></li>
          <li><a href="#3.6"><strong>3.6.</strong> - Všeobecná nastavení - Porty pro Webové rozhraní a TelnetInfo</a>
          </li>

        </ul>
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <hr>
      </div>

      <div class="dt-sc-tabs-vertical-container">
        <a name="1" class="linkname"></a>
        <h4><strong class="article_number">1. </strong> UŽIVATELÉ</h4>
        <p><strong>Syntaxe F: line</strong></p>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
F: &lt;username> &lt;password> &lt;uphops> &lt;shareemus> &lt;allowemm> ( { caid:id(:downhops), caid:id(:downhops), ... } { caid:id:sid, caid:id:sid, ... } { begintime-endtime, ... } ) hostname/ip address
								</pre>
        </div>
        <p><strong>Povinné údaje pro F: line</strong></p>
        <dl class="NumberList">
          <dt><span>1. </span>Uživatelské jméno</dt>
          <dd>Délka je omezena na 20 znaků.</dd>

          <dt><span>2. </span>Uživatelské heslo</dt>
          <dd>Délka hesla není nijak omezena.</dd>
        </dl>
        <p><strong>Volitelné údaje pro F: line</strong></p>
        <dl class="NumberList">
          <dt><span>1. </span>&lt;uphops></dt>
          <dd></dd>

          <dt><span>2. </span>&lt;shareemus></dt>
          <dd>CCcam server umožňuje uživateli (klientovi) sdílet ze serveru emu (Softcam.key)</dd>

          <dt><span>3. </span>&lt;allowemm></dt>
          <dd>CCcam server umožňuje od uživatele (klienta) přijímat EMM instrukce. To je důležité v případě, že máme
            CCcam spuštěný např. na boxu bez signálu tj. box není připojený na satelitní parabolu a CCcam server nemůže
            přijímat EMM instrukce ze satelitního signálu.
          </dd>

          <dt><span>4. </span>{ caid:id(:downhops), caid:id(:downhops), ... } { caid:id:sid, caid:id:sid, ... }</dt>
          <dd></dd>

          <dt><span>5. </span>{ begintime-endtime, ... }</dt>
          <dd>Časové rozmezí poskytnutí share (sdílení) uživateli (klientovi). Čas zadáváme ve 24 hodinovém formátu.<br><strong>begintime</strong>
            je čas počátku sdílení<br>
            <strong>begintime</strong> je čas konce sdílení
          </dd>

          <dt><span>6. </span>&lt;hostname/ip address></dt>
          <dd>Povolení share klientovi s konkrétní IP adresou. V případě že klient používá DynDNS (Dynamickou DNS) je
            nutné zadat DynDNS místo IP.
          </dd>
        </dl>
        <p><strong>Defaultní nastavení</strong> (pokud nezměníme pomocí volitelných polí)</p>
        <ol class="boldNumberList">
          <li>&lt;uphops> = 5</li>
          <li>&lt;shareemus> = 1 (aktivováno)</li>
          <li>&lt;allowemm> = 1 (aktivováno)</li>
          <li>{ caid:id(:downhops), caid:id(:downhops), ... } { caid:id:sid, caid:id:sid, ... } = bez omezení</li>
          <li>{ begintime-endtime, ... } = bez omezení</li>
          <li>&lt;hostname/ip address> = bez omezení (uživatel se může připojit z jakékoliv adresy)</li>

        </ol>
        <p><strong>Pravidla zápisu</strong></p>
        <div class="dt-sc-lmarg25">
          <div class="code code_text_space" style="font-size: 13px">
            F: user pass 0 0 0 { <strong style="color: #21C2F8;">A</strong> } { <strong
              style="color: #21C2F8;">B</strong> } { <strong style="color: #21C2F8;">C</strong> } <strong
              style="color: #21C2F8;">D</strong>
          </div>
          <p><strong style="color: #21C2F8;">A</strong> = Blokace karet</p>
          <p><strong style="color: #21C2F8;">B</strong> = Blokace programů podle SID</p>
          <p><strong style="color: #21C2F8;">C</strong> = Časové omezení</p>
          <p><strong style="color: #21C2F8;">D</strong> = Omezení podle IP/DNS</p>
          <p><u>Základní pravidla</u></p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Dodržovat sktriktně mezeru za čárkou ","</li>
            <li>Dodržovat sktriktně mezeru za levou složenou závorkou "{"</li>
            <li>Dodržovat sktriktně mezeru za pravou složenou závorkou "}"</li>
            <li>Pokud nedodržíme mezery, nebude nastavení fungovat !!!</li>
            <li>Pokud nepoužijeme volitelné nastavení "uphops", ale použijeme následující volitelné nastavení "shareemus
              a allowemm" musíme předchozí nastavení stejně uvést.
            </li>
            <li>Předchozí pravidlo platí i pro nastavení blokování karet, programů a časového omezení. V tomto případě,
              pokud nějaké nastavení nepoužijeme, zapíšeme prázdné složené závorky "{ }" pro danou hodnotu.
            </li>
          </ul>
          <p><u>Sekce <strong style="color: #21C2F8;">A</strong></u> - { caid:id(:downhops), caid:id(:downhops), ... }
          </p>
          <p class="dt-sc-lmarg25">
            Pokud je caid:id = 0:0 , tak tento zápis platí pro všechny karty<br>
            Pokud vynecháme "downhops", je to stejné jako kdybychom zapsali ":0" a znamená to "žádný downhop, žádný
            reshare".
          </p>

          <p><u>Sekce <strong style="color: #21C2F8;">D</strong></u> - hostname/ip address</p>
          <div class="dt-sc-lmarg25">
            <p>Pokud chcem uživatele pouze omezit na vybranou IP/DNS musíme alespoň nastavit:</p>
            <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
              <li>&lt;uphops></li>
              <li>&lt;shareemus></li>
              <li>&lt;allowemm></li>
            </ul>
            Hodnoty uzavřené ve složených závorkách "{ }" nemusíme konfigurovat, ale závorky musíme uvést. Základní
            syntaxe je uvedena v příkladech
          </div>
        </div>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="1.1" class="linkname"></a>
        <h4><strong class="article_number">1.1. </strong> Uživatelé - základní nastavení ( F: line )</h4>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
F: user1 pass1
								</pre>
        </div>
        <p><strong>Generování základní F: line</strong></p>
        <!-- GENERATOR 1 -->
        <div id="generator1" class="generator" style="clear: both; display: table;">
          <div style="float: left;">
            <label>Jméno uživatele: </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>Jméno uživatele</strong><br/>
									        Délka je omezena na 20 znaků.<br>Uživatelské jméno je povinný parametr při zadávní uživatele.
									    </span>
            </a>
            <input name="basic_F_name1" id="basic_F_name1" type="text" maxlength="20" placeholder="Jméno bez mezer">
          </div>
          <div style="margin-left: 10px; float: left;">
            <label>Heslo uživatele </label>
            <!--Tooltip LEFT-->
            <a href="#" class="tooltip tooltip_left">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif"/>
									        <strong>Heslo uživatele</strong><br/>
									        Délka hesla není nijak omezena.<br>Uživatelské heslo je povinný parametr při zadávní uživatele.
									    </span>
            </a>
            <input name="basic_F_password1" id="basic_F_password1" type="text" placeholder="Heslo bez mezer">
          </div>
          <div style="margin-left: 10px; float: left; padding-top: 30px;">
            <input type="submit" id="reset1" value="Reset">
          </div>
        </div>
        <!-- GENERATOR 1 -RESULT -->
        <div class="dt-sc-four-fifth">
          <code>
            <p><u>Vygenerovaná F: line</u> - (můžeme zkopírovat a vložit do CCcam.cfg)</p>
            <p id="F_line_finish1">
              <span>F: </span>
              <span id="F_name_result1"></span>
              <span id="F_password_result1"></span>
            </p>
          </code>
        </div>
        <!-- GENERATOR 1 - Select DIV by Button -->
        <div style="float: left; padding: 0px 0px 10px;">
          <input type="submit" id="Select_F_line1" value="Označit generovaný výsledek">
        </div>
        <!-- GENERATOR 1 - SCRIPT -->
        <script type="text/javascript">
          jQuery(document).ready(function ($) {
            // Function for remove blank space in INPUT - for all INPUT type "text"
            $(function () {
              $('#generator1 input[type="text"]').keyup(function () {
                $(this).val(
                  $.trim($(this).val())
                );
              });
            })
          });
          jQuery(document).ready(function ($) {
            // Copy value from INPUT type text to SPAN
            $('#generator1 input[type="text"]').on('keyup', function () {
              $('#F_name_result1').html($('#basic_F_name1').val());
              $('#F_password_result1').html($('#basic_F_password1').val());
            });
            // Reset/Delete value in FORM
            $('#reset1').on('click', function () {
              $('#basic_F_name1').val('');
              $('#basic_F_password1').val('');
              $('#F_name_result1').html('');
              $('#F_password_result1').html('');
            });
            // Jquery Selection Text in DIV
            $("#Select_F_line1").click(function () {
              $("#F_line_finish1").selectText();
            });
          });
        </script>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="1.2" class="linkname"></a>
        <h4><strong class="article_number">1.2. </strong>Uživatelé - rozšířené nastavení</h4>
        <div class="dt-sc-four-fifth">
								<pre class="brush: text;">
F: &lt;username> &lt;password> &lt;uphops> &lt;shareemus> &lt;allowemm> ( { caid:id(:downhops), caid:id(:downhops), ... } { caid:id:sid, caid:id:sid, ... } { begintime-endtime, ... } ) hostname/ip address
								</pre>
        </div>
        <p><strong>Generování F: line s rozšířeným nastavením</strong></p>
        <!-- GENERATOR 2 -->
        <div id="generator2" class="generator" style="clear: both; display: table;">
          <div style="margin-right: 10px; float: left; width: 47%">
            <label>Jméno uživatele</label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>Jméno uživatele</strong><br/>
									        Délka je omezena na 20 znaků.<br>Uživatelské jméno je povinný parametr při zadávní uživatele.
									    </span>
            </a>
            <input name="basic_F_name2" id="basic_F_name2" type="text" maxlength="20" placeholder="Jméno bez mezer">
          </div>
          <div style="margin-right: 10px; float: right; width: 47%;">
            <label>Heslo uživatele</label>
            <!--Tooltip LEFT-->
            <a href="#" class="tooltip tooltip_left">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif"/>
									        <strong>Heslo uživatele</strong><br/>
									        Délka hesla není nijak omezena.<br>Uživatelské heslo je povinný parametr při zadávní uživatele.
									    </span>
            </a>
            <input name="basic_F_password2" id="basic_F_password2" type="text" placeholder="Heslo bez mezer">
          </div>
          <div style="margin-right: 10px; float: left; width: 100px;">
            <label>Uphops </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>Uphops</strong><br/>
									        DOPLNIT!!!
									    </span>
            </a>
            <input name="basic_F_uphops2" id="basic_F_uphops2" type="text">
          </div>
          <div style="margin-right: 10px; float: left; width: 100px;">
            <label>Shareemus </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>Shareemus</strong><br/>
									        DOPLNIT!!!
									    </span>
            </a>
            <input name="basic_F_shareemus2" id="basic_F_shareemus2" type="text">
          </div>
          <div style="margin-right: 10px; float: left; width: 100px;">
            <label>Allowemm </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>Allowemm</strong><br/>
									        Povolení/Zákaz přijmu EMM instrukcí od uživatele.<br><br>
									        <strong>0</strong> - EMM od uživatele jsou povolené<br>
									        <strong>1</strong> - EMM od uživatele jsou zakázané
									    </span>
            </a>
            <input name="basic_F_allowemm2" id="basic_F_allowemm2" type="text">
          </div>
          <div style="margin-right: 10px; float: right; width: 60%;">
            <label>CAID:ID:downhops </label>
            <!--Tooltip LEFT-->
            <a href="#" class="tooltip tooltip_left">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif"/>
									        <strong>CAID:ID:downhops</strong><br/>
									        DOPLNIT!!!
									    </span>
            </a>
            <input name="basic_F_downhops2" id="basic_F_downhops2" type="text"
                   placeholder="CAID:ID:downhops, CAID:ID:downhops, ...">
          </div>
          <div style="margin-right: 10px; float: left; width: 48%;">
            <label>CAID:ID:SID </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>CAID:ID:SID</strong><br/>
									        Zakázané share konkrétního programu. Vypisujeme SID pouze pro programy, které chceme zakázat. Ostatní jsou povoleny. Pokud nic nezadáme, jsou povoleny všechny programy <br><br>
									        <u>1. Formát zápisu pro zákaz jednoho programu:</u><br><br>
									        CAID:ID:SID např. zákaz ČT1 HD ze Skylinku:  0D96:000004:1325<br><br>
									        <u>2. Formát zápisu pro zákaz více programů:</u><br><br>
									        CAID:ID:SID, CAID:ID:SID např. zákaz ČT1 HD, ČT2 HD ze Skylinku:<br>  0D96:000004:1325, 0D96:000004:1326<br><br>
									        <strong>Pozor</strong> na zadání mezery za "," při zadávání více programů
									    </span>
            </a>
            <input name="basic_F_sid2" id="basic_F_sid2" type="text" placeholder="CAID:ID:SID, CAID:ID:SID, ....">
          </div>
          <div style="margin-right: 10px; float: right; width: 48%;">
            <label>Begintime-endtime </label>
            <!--Tooltip LEFT-->
            <a href="#" class="tooltip tooltip_left">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_left.gif"/>
									        <strong>Begintime-endtime</strong><br/>
									        Povolení časového rozsahu share uživatele.<br><br>
									        1. Příklad: 12:00-17:00<br>
									        Uživatel má povolený share od 12 do 17 hodin<br><br>
									        2. Příklad: 12:00-17:00, 21:00-22:00<br>
									        Uživatel má povolený share od 12 do 17 hodin a poté od 21 do 22 hodin<br><br>
									        <strong>Pozor</strong> na zadání mezery za "," při zadávání více časových rozsahů
									    </span>
            </a>
            <input name="basic_F_time2" id="basic_F_time2" type="text" placeholder="00:00-00:00, 00:00-00:00, ....">
          </div>
          <div style="margin-right: 10px; float: left; width: 200px;">
            <label>Hostname/ip address </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
									    <span>
									        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
									        <strong>Hostname/Ip address</strong><br/>
									        Povolení share klientovi s konkrétní IP adresou. V případě že klient používá DynDNS (Dynamickou DNS) je nutné zadat DynDNS místo IP.
									    </span>
            </a>
            <input name="basic_F_ip2" id="basic_F_ip2" type="text">
          </div>
          <div style="margin-right: 10px; float: left; padding-top: 30px;">
            <input type="submit" id="reset2" value="Reset">
          </div>
        </div>
        <!-- GENERATOR 2 -RESULT -->
        <div class="dt-sc-four-fifth">
          <code>
            <p><u>Vygenerovaná F: line</u> - (můžeme zkopírovat a vložit do CCcam.cfg)</p>
            <p id="F_line_finish2">
              <span>F: </span>
              <span id="F_name_result2"></span>
              <span id="F_password_result2"></span>
              <span id="F_uphops_result2"></span>
              <span id="F_shareemus_result2"></span>
              <span id="F_allowemm_result2"></span>
              <span id="F_downhops_result2"></span>
              <span id="F_sid_result2"></span>
              <span id="F_time_result2"></span>
              <span id="F_ip_result2"></span>
            </p>
          </code>
        </div>
        <!-- GENERATOR 2 - Select DIV by Button -->
        <div style="float: left; padding: 0px 0px 10px;">
          <input type="submit" id="Select_F_line2" value="Označit generovaný výsledek">
        </div>
        <!-- GENERATOR 2 - SCRIPT -->
        <script type="text/javascript">
          jQuery(document).ready(function ($) {
            // Function for remove blank space in INPUT - for all INPUT type "text"
            $(function () {
              $('#generator2 input[type="text"]').keyup(function () {
                $(this).val(
                  $.trim($(this).val())
                );
              });
            })
            // Copy value from INPUT type text to SPAN
            $('#generator2 input[type="text"]').on('keyup', function () {
              $('#F_name_result2').html($('#basic_F_name2').val());
              $('#F_password_result2').html($('#basic_F_password2').val());
              $('#F_ip_result2').html($('#basic_F_ip2').val());
            });
            // Validate If value in INPUT is number
            $('#basic_F_uphops2').on('keyup keydown blur', function (event) {
              $(this).val($(this).val().replace(/[^0-9]/g, ''));
              $('#F_uphops_result2').html($('#basic_F_uphops2').val());
            });
            // Validate If value in INPUT is number
            $('#basic_F_shareemus2').on('keyup keydown blur', function (event) {
              $(this).val($(this).val().replace(/[^0-9]/g, ''));
              $('#F_shareemus_result2').html($('#basic_F_shareemus2').val());
            });
            // Validate If value in INPUT is number
            $('#basic_F_allowemm2').on('keyup keydown blur', function (event) {
              $(this).val($(this).val().replace(/[^0-9]/g, ''));
              $('#F_allowemm_result2').html($('#basic_F_allowemm2').val());
            });
            // Validate If value blank in INPUT
            $("#basic_F_downhops2").on('keyup change click', function () {
              if ($(this).val().length === 0) {
                $('#F_downhops_result2').html('');
              } else {
                $('#F_downhops_result2').html('{ ' + $('#basic_F_downhops2').val() + ' }');
              }
            });
            // Validate If value blank in INPUT
            $("#basic_F_sid2").on('keyup change click', function () {
              if ($(this).val().length === 0) {
                $('#F_sid_result2').html('');
              } else {
                $('#F_sid_result2').html('{ ' + $('#basic_F_sid2').val() + ' }');
              }
            });
            // Validate If value blank in INPUT
            $("#basic_F_time2").on('keyup change click', function () {
              if ($(this).val().length === 0) {
                $('#F_time_result2').html('');
              } else {
                $('#F_time_result2').html('{ ' + $('#basic_F_time2').val() + ' }');
              }
            });
            // Put space after comma
            $("#basic_F_downhops2").keyup(function () {
              this.value = $.map(this.value.split(","), $.trim).join(", ");
            });
            $("#basic_F_sid2").keyup(function () {
              this.value = $.map(this.value.split(","), $.trim).join(", ");
            });
            $("#basic_F_time2").keyup(function () {
              this.value = $.map(this.value.split(","), $.trim).join(", ");
            });
            // Reset/Delete value in FORM
            $('#reset2').on('click', function () {
              $('#basic_F_name2').val('');
              $('#F_name_result2').html('');

              $('#basic_F_password2').val('');
              $('#F_password_result2').html('');

              $('#basic_F_uphops2').val('');
              $('#F_uphops_result2').html('');

              $('#basic_F_shareemus2').val('');
              $('#F_shareemus_result2').html('');

              $('#basic_F_allowemm2').val('');
              $('#F_allowemm_result2').html('');

              $('#basic_F_downhops2').val('');
              $('#F_downhops_result2').html('');

              $('#basic_F_sid2').val('');
              $('#F_sid_result2').html('');

              $('#basic_F_time2').val('');
              $('#F_time_result2').html('');

              $('#basic_F_ip2').val('');
              $('#F_ip_result2').html('');
            });
            // Jquery Selection Text in DIV
            $("#Select_F_line2").click(function () {
              $("#F_line_finish2").selectText();
            });
          });
        </script>
      </div>

      <div class="dt-sc-hr-invisible-very-small"></div>
      <div class="dt-sc-tabs-vertical-container">
        <a name="1.3" class="linkname"></a>
        <h4><strong class="article_number">1.3. </strong> Uživatelé - příklady</h4>
        <p><strong>Příklad 1:</strong> - Základní nastavení uživatele bez nastavení volitelných polí</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p>
            V případě, že nenastavíme volitelná pole, budou volitelné hodnoty nastaveny automaticky na defaultní
            hodnoty.
          </p>
          <code>
            F: user1 passwd1
          </code>
        </div>
        <p><strong>Příklad 2:</strong></p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p>

          </p>
          <div class="code code_text_space">
            F: user2 passwd2 <span>3</span> 0 0
          </div>
        </div>
        <p><strong>Příklad 3:</strong> - Sdílení klíčů ze souboru Softcam.key</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p>Tato hodnota nám nastaví, zdali má uživatel/klient přístup k souboru Softcam.key</p>
          <p><u>Možné hodnoty</u></p>
          <p><strong>0</strong> - uživatel nemá přístup k souboru<br>
            <strong>1</strong> - uživatel má přístup k souboru</p>
          <p><u>Příklad</u></p>
          <div class="code code_text_space">
            F: user3 passwd3 3 <span>0</span> 0
          </div>
          <p>V tomto příkladě uživatel "user3" nemá přístup k emu tj. k souboru Softcam.key</p>
        </div>
        <p><strong>Příklad 4:</strong> - Přijímání EMM od uživatele/klienta</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p>EMM jsou důležité pro aktualizaci karet. Touto hodnotou si určíme zdali chcem přijímat EMM instrukce od
            uživatele/klienta nebo nechceme.</p>
          <p><u>Možné hodnoty</u></p>
          <p><strong>0</strong> - zákaz přijímat EMM od uživatele<br>
            <strong>1</strong> - povoleno přijímat EMM od uživatele</p>
          <p><u>Příklad</u></p>
          <div class="code code_text_space">
            F: user4 passwd4 3 0 <span>0</span>
          </div>
          <p>V tomto příkladě je zakázáno od uživatele "user4" přijímat EMM instrukce.</p>
        </div>
        <p><strong>Příklad 5:</strong> - Downhops</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p></p>
          <p><u>Příklad</u></p>
          <div class="code code_text_space">
            F: user5 passwd5 3 0 0 { <span>0100:00006A</span>, <span>0622:000000:1</span>, <span>0500:000000:2</span> }
          </div>
          <p>V tomto příkladě má uživatel "user5":</p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Uživatel nezíská <span style="color:red">Canal Digital 0100:00006A</span> (nezapsaná hodnota "downhop",
              je stejné jako 0100:00006A:0)
            </li>
            <li>Uživatel získá kartu <span style="color:green">0622:000000:1</span> (uživatel nemůže dál sdílet tuto
              kartu, "downhop" hodnota je ":1")
            </li>
            <li>Uživatel zístku kartu <span style="color: blue">0500:000000:2</span> sám pro sebe a může jí dál sdílet
              ("downhop" hodnota je ":2")
            </li>
          </ul>
          <p><u>Grafické znázornění příkladu 5</u></p>
          <div class="textcontainer">
            <div class="portfolio-container">
              <div style="width: 390px;" class="portfolio number_text">
                <!-- **portfolio-thumb - Starts** -->
                <div class="portfolio-thumb">
                  <figure>
                    <img src="images/cccam/graficke_pripojeni_CCcamu_07.png" alt="image">
                    <div class="image-overlay">
                      <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_07.png"
                         data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                      <div class="portfolio-content">
                        <h5><a href="#"> Příklad 5</a></h5>
                        <span class="fa fa-sort-up"></span>
                      </div>
                    </div>
                  </figure>
                </div> <!-- **portfolio-thumb - Ends** -->
              </div>
            </div>
          </div>
          <p class="dt-sc-lmarg25">Uživatel <span style="font-weight: bold">Friend <span style="color: #0071BC">1</span></span>
            má rozdělené přístupy ke kartám takto:
          <ul class="dt-sc-fancy-list caret-right" style="margin-left: 50px;">
            <li>má zablokován přístup ke kartě <span style="color: #B71B0B">Card1</span></li>
            <li>má přístup ke kartě <span style="color: #3565FF">Card2</span>, ale nemůže ji dál sdílet</li>
            <li>má přístup ke kartě <span style="color: #269606">Card3</span> sám pro sebe a může ji dál sdílet</li>
            <li>nemůže využívat SofCam.key, CCcam server nepoužívá EMM do uživatele.</li>
          </ul>
          </p>
        </div>
        <p style="clear: both; padding-top: 15px"><strong>Příklad 6:</strong> - Downhops (blokování reshare)</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p></p>
          <p><u>Příklad</u></p>
          <div class="code code_text_space">
            F: user6 passwd6 <span>0</span> 0 0 { <span>0:0:1</span> }
          </div>
          <p>V tomto příkladě má uživatel "user6":</p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Uživatel může užívat pouze lokální karty <span style="color:red">0</span></li>
            <li>Uživatel má zakázáno reshare <span style="color:green">0:0:1</span> (0:0 vyjadřuje "všechny karty",
              uživatel nemůže dál sdílet tuto kartu, "downhop" hodnota je ":1")
            </li>
          </ul>
          <p><u>Grafické znázornění příkladu 6</u></p>
          <div class="textcontainer">
            <div class="portfolio-container">
              <div style="width: 390px;" class="portfolio number_text">
                <!-- **portfolio-thumb - Starts** -->
                <div class="portfolio-thumb">
                  <figure>
                    <img src="images/cccam/graficke_pripojeni_CCcamu_06.png" alt="image">
                    <div class="image-overlay">
                      <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_06.png"
                         data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                      <div class="portfolio-content">
                        <h5><a href="#"> Příklad 6</a></h5>
                        <span class="fa fa-sort-up"></span>
                      </div>
                    </div>
                  </figure>
                </div> <!-- **portfolio-thumb - Ends** -->
              </div>
            </div>
          </div>
          <p class="dt-sc-lmarg25">Uživatel <span style="font-weight: bold">Friend <span style="color: #0071BC">1</span></span>
            má přístup ke všem kartám "<span style="color: #B71B0B">Card1</span>, <span
              style="color: #3565FF">Card2</span>, <span style="color: #269606">Card3</span>" ale nemůže tyto karty dál
            sdílet, nemůže využívat SofCam.key, CCcam server nepoužívá EMM.</p>
        </div>
        <p style="clear: both; padding-top: 15px"><strong>Příklad 7:</strong> - Blokování programu</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p></p>
          <p><u>Příklad</u></p>
          <div class="code code_text_space">
            F: user7 passwd7 <span>0</span> 0 0 { <span>0:0:1</span> } { <span>0D96:000000:1F43</span> }
          </div>
          <p>V tomto příkladě má uživatel "user7":</p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Uživatel může užívat pouze lokální karty <span style="color:red">0</span></li>
            <li>Uživatel má zakázáno reshare <span style="color:green">0:0:1</span> (0:0 vyjadřuje "všechny karty",
              uživatel nemůže dál sdílet tuto kartu, "downhop" hodnota je ":1")
            </li>
            <li>Uživatel má blokováno užívat program ČT1 <span style="color:blue">0D96:000000:1F43</span></li>
          </ul>
          <p><u>Grafické znázornění příkladu 7</u></p>
          <div class="textcontainer">
            <div class="portfolio-container">
              <div style="width: 390px;" class="portfolio number_text">
                <!-- **portfolio-thumb - Starts** -->
                <div class="portfolio-thumb">
                  <figure>
                    <img src="images/cccam/graficke_pripojeni_CCcamu_05.png" alt="image">
                    <div class="image-overlay">
                      <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_05.png"
                         data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                      <div class="portfolio-content">
                        <h5><a href="#"> Příklad 7</a></h5>
                        <span class="fa fa-sort-up"></span>
                      </div>
                    </div>
                  </figure>
                </div> <!-- **portfolio-thumb - Ends** -->
              </div>
            </div>
          </div>
          <p class="dt-sc-lmarg25">Uživatel <span style="font-weight: bold">Friend <span style="color: #0071BC">1</span></span>
            má přístup ke všem kartám "<span style="color: #B71B0B">Card1</span>, <span
              style="color: #3565FF">Card2</span>, <span style="color: #269606">Card3</span>" ale nemůže tyto karty dál
            sdílet, nemůže využívat SofCam.key, CCcam server nepoužívá EMM a uživatel má blokováno užívat program ČT1.
          </p>
        </div>
        <p style="clear: both; padding-top: 15px"><strong>Příklad 8:</strong> - Blokování více programů</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p></p>
          <p><u>Příklad</u></p>
          <div class="code code_text_space">
            F: user8 passwd8 <span>0</span> 0 0 { <span>0:0:1</span> } { <span>0D96:000000:1F43, 0D96:000000:1F44, 0D96:000000:1F47</span>
            }
          </div>
          <p>V tomto příkladě má uživatel "user8":</p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Uživatel může užívat pouze lokální karty <span style="color:red">0</span></li>
            <li>Uživatel má zakázáno reshare <span style="color:green">0:0:1</span> (0:0 vyjadřuje "všechny karty",
              uživatel nemůže dál sdílet tyto karty, "downhop" hodnota je ":1")
            </li>
            <li>Uživatel má blokováno užívat programy ČT1, ČT2, ČT Sport <span style="color:blue">0D96:000000:1F43, 0D96:000000:1F44, 0D96:000000:1F47</span>
            </li>
          </ul>
          <p><u>Grafické znázornění příkladu 8</u></p>
          <div class="textcontainer">
            <div class="portfolio-container">
              <div style="width: 390px;" class="portfolio number_text">
                <!-- **portfolio-thumb - Starts** -->
                <div class="portfolio-thumb">
                  <figure>
                    <img src="images/cccam/graficke_pripojeni_CCcamu_04.png" alt="image">
                    <div class="image-overlay">
                      <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_04.png"
                         data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                      <div class="portfolio-content">
                        <h5><a href="#"> Příklad 8</a></h5>
                        <span class="fa fa-sort-up"></span>
                      </div>
                    </div>
                  </figure>
                </div> <!-- **portfolio-thumb - Ends** -->
              </div>
            </div>
          </div>
          <p class="dt-sc-lmarg25">Uživatel <span style="font-weight: bold">Friend <span style="color: #0071BC">1</span></span>
            má přístup ke všem kartám "<span style="color: #B71B0B">Card1</span>, <span
              style="color: #3565FF">Card2</span>, <span style="color: #269606">Card3</span>" ale nemůže tyto karty dál
            sdílet, nemůže využívat SofCam.key, CCcam server nepoužívá EMM a uživatel má blokováno užívat programy ČT1,
            ČT2, ČT Sport.</p>
        </div>
        <p style="clear: both; padding-top: 15px"><strong>Příklad 9:</strong> - Časové omezení uživatele</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p></p>
          <p><u>Příklad</u></p>
          <div class="code">
            F: user9 passwd9 0 0 0 { } { } { <span>12:00-17:00, 19:00-20:00</span> }
          </div>
          <p>V tomto příkladě má uživatel "user9":</p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Uživatel může užívat lokální karty v době od 12 do 17h a poté od 19 do 20h.</li>
          </ul>
          <p><u>Grafické znázornění příkladu 9</u></p>
          <div class="textcontainer">
            <div class="portfolio-container">
              <div style="width: 390px;" class="portfolio number_text">
                <!-- **portfolio-thumb - Starts** -->
                <div class="portfolio-thumb">
                  <figure>
                    <img src="images/cccam/graficke_pripojeni_CCcamu_03.png" alt="image">
                    <div class="image-overlay">
                      <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_03.png"
                         data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                      <div class="portfolio-content">
                        <h5><a href="#"> Příklad 9</a></h5>
                        <span class="fa fa-sort-up"></span>
                      </div>
                    </div>
                  </figure>
                </div> <!-- **portfolio-thumb - Ends** -->
              </div>
            </div>
          </div>
          <p class="dt-sc-lmarg25">Uživatel <span style="font-weight: bold">Friend <span style="color: #0071BC">1</span></span>
            má přístup ke všem kartám "<span style="color: #B71B0B">Card1</span>, <span
              style="color: #3565FF">Card2</span>, <span style="color: #269606">Card3</span>", nemůže využívat
            SofCam.key, CCcam server nepoužívá EMM a uživatel může využívat karty dle zadaného časovéh rozmezí.</p>
        </div>
        <p style="clear: both; padding-top: 15px"><strong>Příklad 10:</strong> - Omezení uživatele na dannou IP</p>
        <div class="dt-sc-four-fifth dt-sc-lmarg25">
          <p><u>Popis</u></p>
          <p></p>
          <p><u>Příklad</u></p>
          <div class="code">
            F: user10 passwd10 0 0 0 { } { } { } <span>friend_dns.noip.com</span>
          </div>
          <p>V tomto příkladě má uživatel "user10":</p>
          <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
            <li>Uživatel může užívat lokální karty pouze z adresy <span style="red">friend_dns.noip.com</span> (pokud se
              připojí z jiné adresy, bude CCcam serverem odmítnut).
            </li>
          </ul>
          <p><u>Grafické znázornění příkladu 10</u></p>
          <div class="textcontainer">
            <div class="portfolio-container">
              <div style="width: 390px;" class="portfolio number_text">
                <!-- **portfolio-thumb - Starts** -->
                <div class="portfolio-thumb">
                  <figure>
                    <img src="images/cccam/graficke_pripojeni_CCcamu_02.png" alt="image">
                    <div class="image-overlay">
                      <a class="zoom" href="images/cccam/graficke_pripojeni_CCcamu_02.png"
                         data-gal="prettyPhoto[gallery]"><span class="fa fa-search"></span></a>
                      <div class="portfolio-content">
                        <h5><a href="#"> Příklad 10</a></h5>
                        <span class="fa fa-sort-up"></span>
                      </div>
                    </div>
                  </figure>
                </div> <!-- **portfolio-thumb - Ends** -->
              </div>
            </div>
          </div>
          <p class="dt-sc-lmarg25">Uživatel <span style="font-weight: bold">Friend <span style="color: #0071BC">1</span></span>
            má přístup ke všem kartám "<span style="color: #B71B0B">Card1</span>, <span
              style="color: #3565FF">Card2</span>, <span style="color: #269606">Card3</span>", nemůže využívat
            SofCam.key, CCcam server nepoužívá EMM a uživatel se může připojit pouze z DynDNS adresy
            "friend_dns.noip.com".</p>
        </div>
      </div>
    </div>


    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2" class="linkname"></a>
      <h4><strong class="article_number">2. </strong> PŘIPOJENÍ NA SERVERY</h4>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2.1" class="linkname"></a>
      <h4><strong class="article_number">2.1. </strong> Připojení na servery - připojení na CCcam server ( C: line )
      </h4>
      <p><strong>Syntaxe C: line</strong></p>
      <div>
								<pre class="brush: text;">
C: &lt;hostname> &lt;port> &lt;username> &lt;password> &lt;wantemus> ( { caid:id(:uphops), caid:id(:uphops), ... } )
								</pre>
      </div>
      <p><strong>Všeobecně o C: line</strong></p>
      <p>Z diskuzí jsem vyčetl, že co se týká poštu C:line je doporučeno zadávat cca 2-3. Je otázka kolik jich opravdu
        potřebujeme pro to abychom mohli v klidu sledovat vybraný program. V případě, že využíváme cca 2-3 C:line je
        dále doporučeno využít filtraci CAID. Podle diskuzních fór počet C:line závisí na hardwarovém vybavení našeho
        boxu. Někteří uživatelé testovali na VU+ Solo 2 celkem 7 C:line a nezaznamenali problémy. </p>
      <p><strong>Generování C: line</strong></p>
      <!-- GENERATOR 3 -->
      <div id="generator3" class="generator">
        <!-- First line -->
        <div style="clear: both;">

          <div style="float: left;">
            <label>Hostname/Ip address </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
										        <strong>Hostname/Ip address</strong><br/>
										        IP adresa CCcam serveru na který se chceme připojit. V případě že klient používá DynDNS (Dynamickou DNS) je nutné zadat DynDNS místo IP.
										    </span>
            </a>
            <input name="basic_C_ip1" id="basic_C_ip1" type="text" placeholder="Hostname/Ip address" tabindex="1">
          </div>
          <div style="margin-left: 10px; float: left; width: 100px; margin-right: 10px;">
            <label>Port </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
											    <span>
											        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
											        <strong>Port</strong><br/>
											        Port CCcam serveru na který se připojujeme
											    </span>
            </a>
            <input name="basic_C_port1" id="basic_C_port1" type="text" placeholder="Port" tabindex="2">
          </div>
          <div style="float: right; width: calc(100% - 440px);">
            <label>Uživatelské jméno </label>
            <!--Tooltip LEFT-->
            <a href="#" class="tooltip tooltip_left">
              <i class="fa icon-icon_help"></i>
											    <span>
											        <img class="callout" src="images/simpleTooltip/callout_left.gif"/>
											        <strong>Uživatelské jméno</strong><br/>
											        Uživatelské jméno pro připojení na CCcam server
											    </span>
            </a>
            <input name="basic_C_name1" id="basic_C_name1" type="text" placeholder="Uživatelské jméno" tabindex="3">
          </div>

        </div>
        <!-- Second line -->
        <div style="clear: both;">

          <div style="float: left;">
            <label>Uživatelské heslo </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
										        <strong>Uživatelské heslo</strong><br/>
										        Uživatelské heslo pro připojení na CCcam server
										    </span>
            </a>
            <input name="basic_C_password1" id="basic_C_password1" type="text" placeholder="Uživatelské heslo"
                   tabindex="4">
          </div>
          <div style="margin-left: 10px; float: left;">
            <label>EMU </label>
            <!--Tooltip RIGHT-->
            <a href="#" class="tooltip tooltip_right">
              <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_right.gif"/>
										        <strong>EMU</strong><br/>
										        DOPLNIT!!!
										    </span>
            </a>
            <select id="basic_C_emu1" style="margin: 10px 0px; height: 38px;" tabindex="5">
              <option value=""></option>
              <option value="no">NO</option>
              <option value="yes">YES</option>
            </select>
          </div>

        </div>

        <!-- Third line -->
        <div style="clear: both;">

          <div style="width: 100%">
            <label>CAID:ID(:uphops) </label>
            <!--Tooltip LEFT-->
            <a href="#" class="tooltip tooltip_left">
              <i class="fa icon-icon_help"></i>
										    <span>
										        <img class="callout" src="images/simpleTooltip/callout_left.gif"/>
										        <strong>CAID:ID(:uphops)</strong><br/>
										        DOPLNIT!!!
										    </span>
            </a>
            <input name="basic_C_uphops1" id="basic_C_uphops1" type="text" placeholder="CAID:ID(:uphops)" tabindex="6">
          </div>

        </div>

        <!-- Submit -->
        <div style="float: left; padding: 0px 0px 10px;">
          <input type="submit" id="reset3" value="Reset">
        </div>
      </div>
      <!-- GENERATOR 3 -RESULT -->
      <div class="dt-sc-four-fifth" style="clear: both;">
        <code>
          <p><u>Vygenerovaná C: line</u> - (Označit generovaný výsledek, Ctrl+C a poté vložit do CCcam.cfg)</p>
          <p id="C_line_finish">
            <span>C: </span>
            <span id="C_ip_result1"></span>
            <span id="C_port_result1"></span>
            <span id="C_name_result1"></span>
            <span id="C_password_result1"></span>
            <span id="C_emu_result1"></span>
            <span id="C_uphops_result1"></span>
          </p>
        </code>
      </div>
      <!-- GENERATOR 3 - Select DIV by Button -->
      <div style="float: left; padding: 0px 0px 10px;">
        <input type="submit" id="Select_C_line" value="Označit generovaný výsledek">
      </div>
      <!-- GENERATOR 3 - SCRIPT -->
      <script type="text/javascript">
        jQuery(document).ready(function ($) {
          // Function for remove blank space in INPUT - for all INPUT type "text"
          $(function () {
            $('#generator3 input[type="text"]').keyup(function () {
              $(this).val(
                $.trim($(this).val())
              );
            });
          })
          // Copy value from INPUT type text to SPAN
          $('#generator3 input[type="text"]').on('keyup', function () {
            $('#C_ip_result1').html($('#basic_C_ip1').val());
            $('#C_name_result1').html($('#basic_C_name1').val());
            $('#C_password_result1').html($('#basic_C_password1').val());
          });
          $('#generator3 select').on('change', function () {
            $('#C_emu_result1').html($('#basic_C_emu1').val());
          });
          // Validate If value in INPUT is number
          $('#basic_C_port1').on('keyup keydown blur', function (event) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
            $('#C_port_result1').html($('#basic_C_port1').val());
          });
          // Validate If value blank in INPUT
          $("#basic_C_uphops1").on('keyup change click', function () {
            if ($(this).val().length === 0) {
              $('#C_uphops_result1').html('');
            } else {
              $('#C_uphops_result1').html('{ ' + $('#basic_C_uphops1').val() + ' }');
            }
          });
          // Put space after comma
          $("#basic_C_uphops1").keyup(function () {
            this.value = $.map(this.value.split(","), $.trim).join(", ");
          });

          // Reset/Delete value in FORM
          $('#reset3').on('click', function () {
            $('#basic_C_ip1').val('');
            $('#C_ip_result1').html('');

            $('#basic_C_port1').val('');
            $('#C_port_result1').html('');

            $('#basic_C_name1').val('');
            $('#C_name_result1').html('');

            $('#basic_C_password1').val('');
            $('#C_password_result1').html('');

            $('#basic_C_emu1').val('');
            $('#C_emu_result1').html('');

            $('#basic_C_uphops1').val('');
            $('#C_uphops_result1').html('');
          });
          // Jquery Selection Text in DIV
          $("#Select_C_line").click(function () {
            $("#C_line_finish").selectText();
          });
        });
      </script>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2.1.1" class="linkname"></a>
      <h4><strong class="article_number">2.1.1. </strong> Připojení na servery - připojení na CCcam server - Příklady
      </h4>
      <p><strong>Příklad 1:</strong> - Základní nastavení připojení na další CCcam server bez nastavení volitelných polí
      </p>
      <div class="dt-sc-four-fifth dt-sc-lmarg25">
        <code>
          C: server_dns.noip.com 12000 cccamuser1 cccampasswd1
        </code>
      </div>

    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2.2" class="linkname"></a>
      <h4><strong class="article_number">2.2. </strong> Připojení na servery - připojení na Newcamd server ( N: line )
      </h4>
      <div>
								<pre class="brush: text;">
N: &lt;ip> &lt;port> &lt;username> &lt;pass> &lt;des(14byte)> &lt;nr_of_hops_away (default: 1)> &lt;stealth mode (default: 0)>
								</pre>
      </div>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2.3" class="linkname"></a>
      <h4><strong class="article_number">2.3. </strong> Připojení na servery - připojení na Radegast server ( R: line )
      </h4>
      <div>
								<pre class="brush: text;">
R: &lt;ip> &lt;port> &lt;ca4> &lt;id6> &lt;nr_of_hops_away (default: 1)>
								</pre>
      </div>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2.4" class="linkname"></a>
      <h4><strong class="article_number">2.4. </strong> Připojení na servery - připojení na Camd3 server ( L: line )
      </h4>
      <div>
								<pre class="brush: text;">
L: &lt;ip> &lt;port> &lt;username> &lt;pass> &lt;ca4> &lt;id6> &lt;nr_of_hops_away (default: 1)>
								</pre>
      </div>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="2.5" class="linkname"></a>
      <h4><strong class="article_number">2.5. </strong> Připojení na servery - připojení na Gbox server ( G: line )</h4>
      <div>
								<pre class="brush: text;">
G: &lt;pass> &lt;localhost> &lt;localport> &lt;peerpass> &lt;peeraddress> &lt;peerport>
								</pre>
      </div>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3" class="linkname"></a>
      <h4><strong class="article_number">3. </strong> VŠEOBECNÁ NASTAVENÍ</h4>
      <p>V rámci všeobecných nastavení můžeme nastavit:</p>
      <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right">
        <li><a href="#3.1">Port CCcamu pro příchozí spojení</a></li>
      </ul>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3.1" class="linkname"></a>
      <h4><strong class="article_number">3.1. </strong> Všeobecná nastavení - příchozí port</h4>
      <p><u>Vyčteno z CCcam.cfg</u></p>
							<pre class="brush: text;">
# server shall listen on this port pro incoming connections
# default port is 12000, disable server with parm -s or set port 0
#
#SERVER LISTEN PORT : 12000
							</pre>
      <p><u>Defaultní hodnoty</u> (bez upravování položky v CCcam.cfg)</p>
      <p>SERVER LISTEN PORT : 12000</p>
      <p><u>Popis</u></p>
      <p>Pomocí zadání "SERVER LISTEN PORT :" definujeme port CCcamu pro příchozí spojení uživatelů. Defaultně je
        nastaven port 12000, ale můžeme nastavit i jiný vyjma standartních portů používaných v linuxových boxech pro
        další účely. <a href="index.php?category=linuxbox&page=linuxbox"> Více o portech <span
            class="fa fa-long-arrow-right"> </span> </a>
      </p>
      <p>Pokud chceme CCcam používat pouze jako klient můžeme příchozí port vypnout zadáním:</p>
							<pre class="brush: text;">
SERVER LISTEN PORT : 0
							</pre>
      <p>Při vypnutém CCcam portu bude nedostupné i webové rozhraní.</p>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3.2" class="linkname"></a>
      <h4><strong class="article_number">3.2. </strong> Všeobecná nastavení - Webové rozhraní a TelnetInfo</h4>
      <p><u>Vyčteno z CCcam.cfg</u></p>
							<pre class="brush: text;">
# server can give some info about server and client connections
# and cardinfo using telnet or webbrowser.
#
# Switch on/off access to info
# default is yes
#
#ALLOW TELNETINFO: no
#ALLOW WEBINFO: no
							</pre>
      <p><u>Defaultní hodnoty</u> (bez upravování položek v CCcam.cfg)</p>
      <p>ALLOW TELNETINFO: yes<br>ALLOW WEBINFO: yes</p>
      <p><u>Popis</u></p>
      <p>Pomocí zadání "ALLOW TELNETINFO :" definujeme zapnutí/vypnutí získávání informací CCcamu přes Telnet.</p>
      <p>Pomocí zadání "ALLOW WEBINFO :" definujeme zapnutí/vypnutí webového rozhraní (WebIf) CCcamu.</p>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3.3" class="linkname"></a>
      <h4><strong class="article_number">3.3. </strong> Všeobecná nastavení - Pokročilé informace o klientovi</h4>
      <p><u>Vyčteno z CCcam.cfg</u></p>
							<pre class="brush: text;">
# Show extended client info when showing client list
# default is yes
#
#SHOW EXTENEDED CLIENT INFO : no
							</pre>
      <p><u>Defaultní hodnoty</u> (bez upravování položky v CCcam.cfg)</p>
      <p>SHOW EXTENEDED CLIENT INFO: yes</p>
      <p><u>Popis</u></p>
      <p>Zobrazí pokročilé informace o klientovi v seznamu klientů.</p>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3.4" class="linkname"></a>
      <h4><strong class="article_number">3.4. </strong> Všeobecná nastavení - Login do Webové rozhraní </h4>
      <p><u>Vyčteno z CCcam.cfg</u></p>
							<pre class="brush: text;">
# The webinfo service can be protected with a username and password.
# This is switched off by default
#
#WEBINFO USERNAME : &lt;username>
#WEBINFO PASSWORD : &lt;password>
							</pre>
      <p><u>Defaultní hodnoty</u> (bez upravování položek v CCcam.cfg)</p>
      <p>Login do webového rozhraní je v defaultním stavu vypnutý.</p>
      <p><u>Popis</u></p>
      <p>Po zadání logovacích údajů (uživatelské jméno a heslo) bude možné se přihlásit do webového rozhraní CCcamu
        pouze pod témito údaji.</p>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3.5" class="linkname"></a>
      <h4><strong class="article_number">3.5. </strong> Všeobecná nastavení - Login pro TelnetInfo </h4>
      <p><u>Vyčteno z CCcam.cfg</u></p>
							<pre class="brush: text;">
# The telnetinfo service can be protected with a username and password.
# This is switched off by default
#
#TELNETINFO USERNAME : &lt;username>
#TELNETINFO PASSWORD : &lt;password>
							</pre>
      <p><u>Defaultní hodnoty</u> (bez upravování položek v CCcam.cfg)</p>
      <p>Login do TelnetInfo je v defaultním stavu vypnutý.</p>
      <p><u>Popis</u></p>
      <p>TelnetInfo bude chráněn uživatelským jménem a heslem.</p>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <a name="3.6" class="linkname"></a>
      <h4><strong class="article_number">3.6. </strong> Všeobecná nastavení - Porty pro Webové rozhraní a TelnetInfo
      </h4>
      <p><u>Vyčteno z CCcam.cfg</u></p>
							<pre class="brush: text;">
# default port for telnet is 16000
# default port for web is 16001
# supported commands:
#        info
#        activeclients
#        clients
#        servers
#        shares
#        providers
#        entitlements
# example use:
#     echo servers | telnet localhost 16000
#     go with your browser to http://ip_CCcam_server:16001
#
#TELNETINFO LISTEN PORT : 16000
#WEBINFO LISTEN PORT : 16001
							</pre>
      <p><u>Defaultní hodnoty</u> (bez upravování položek v CCcam.cfg)</p>
      <p>Port pro TelnetInfo "TELNETINFO LISTEN PORT : 16000"<br>
        Port pro Webové rozhraní "WEBINFO LISTEN PORT : 16001".</p>
      <p><u>Popis</u></p>
      <p>Změnou nastavujeme port pro Webové rozhraní a TelnetInfo. Např. "WEBINFO LISTEN PORT : 35000" nám změní port
        pro Webové rozhraní. Pro připojení zadáme do prohlížeče "http://IP_for_CCcam-Server:35000". Pokud budeme měnit
        číslo portů pozor na využití standartních portů linoxovými boxy. <a
          href="index.php?category=linuxbox&page=linuxbox-index"> Více o portech <span
            class="fa fa-long-arrow-right"> </span> </a></p>
    </div>

    <div class="dt-sc-hr-invisible-very-small"></div>
    <div class="dt-sc-tabs-vertical-container">
      <div class="intro-text type2">
        <p style="position: absolute; bottom: 10px; right: 20px;">
          <i>Vyčerpávající práce na popisu konfigurace CCcamu (skyndas)</i> <i class="fa fa-smile-o"
                                                                               style="font-size:25px;font-weight:bold;margin-left:10px"></i>
        </p>
      </div>
    </div>

</div>
<div class="dt-sc-hr-invisible-small"></div>
</section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
