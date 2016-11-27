<div class="breadcrumb-wrapper type2">
  <div class="container">
    <div class="main-title">
      <h1>Linux Box</h1>
      <div class="breadcrumb">
        <span class="fa fa-home"></span>
        <a href="index.php?page=home-page">Úvod</a>
        <span class="fa fa-angle-right"></span>
        <span class="current">Linux Box</span>
      </div>
    </div>
  </div>
</div>

<!-- Container starts-->
<div class="container">
  <div class="dt-sc-margin70"></div>
  <!-- **secondary - starts** -->
  <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">

    <?php include("inc/html_content/linuxbox-menu.php"); ?>

  </section> <!-- **secondary - Ends** -->

  <!-- Primary Starts -->
  <section id="primary" class="page-with-sidebar with-left-sidebar">
    <div class="content">
      <div class="entry-detail" style="width: 100%;">
        <!-- **entry-meta-data - Starts** -->
        <div class="entry-meta-data">
          <p style="width: 20%;"><span class="fa fa-user"> </span> Autor: skyndas </p>
          <p><span class="fa fa-calendar"> </span> Datum: 12.5.2015</p>
        </div> <!-- **entry-meta-data - Ends** -->
      </div>
      <div class="dt-sc-tabs-vertical-container">
        <h4>Symlink</h4>
        <p>
        <p>Více o symlinku ve Wikipedii <a href="http://cs.wikipedia.org/wiki/Symbolick%C3%BD_odkaz" target="_blank">Wikipedia
            - Symbolický odkaz</a></p></p>
        <p>V unixových systémech uživatel často volí mezi použitím symbolického a pevného odkazu</p>
        <p><strong>Symlink - Výhody</strong></p>
        <p>Výhodou symbolického odkazu (na rozdíl od pevného odkazu) je, zejména jeho univerzálnost. Může překročit
          hranice souborového systému, může ukazovat i na adresář, nezpůsobuje problémy při aktualizaci.</p>
        <p><strong>Symlink - Nevýhody</strong></p>
        <p>Nevýhodou symbolického odkazu je, že sám nenese žádnou informaci o souboru, na který odkazuje, tudíž smazáním
          souboru dostaneme neplatný odkaz (anglicky broken link), který „trčí do prázdna“. Symbolické odkazy také
          nemají svou sadu práv – ty si přebírají od cílového souboru. Další nevýhodou je, že kromě položky v adresáři
          (pro své jméno) zabírají na rozdíl od pevného odkazu na disku také datový blok (obsahuje cestu k cíli odkazu).
          Z důvodu ochrany před zacyklením je interpretace symbolických odkazů omezena (např. v jádře Linuxu na
          maximálně 16 odkazů symbolického odkazu na další symbolický odkaz).</p>
        <p><strong>Vytvoření symbolického odkazu</strong></p>
        <p>Symbolický odkaz vytvoříme příkazem:</p>
							<pre class="brush: text;">
ln -s jméno_cíle [jméno_sym_odkazu]
							</pre>
        <p><strong>Příklady</strong></p>
        <p>Takto vytvoříme odkaz mezi souborem "memo2" v adresáře "/home/vasek/matematika" a pracovním adresářem. Odkaz
          se objeví jako "memo2" (bude mít stejné jméno souboru v pracovním adresáři).</p>
							<pre class="brush: text;">
ln /home/vasek/matematika/memo2
							</pre>
        <p>Další příklad vytvoří odkaz na tentýž soubor. Nyní se bude nový odkaz jmenovat "new_memo" a opět bude umístěn
          v pracovním adresáři.</p>
							<pre class="brush: text;">
ln /home/vasek/matematika/memo2 new_memo
							</pre>
        <p>V dalším příkladu vytvoříme odkaz, který vytvoří jméno souboru v jiném uživatelském adresáři. Když má uvedený
          příkaz fungovat, musíte mít právo zapisovat a prohlížet daný adresář, ve kterém se má nový odkaz vytvořit.
          Když jste vlastníkem souboru, můžete použít obslužný program <strong>chmod</strong> a dát druhému uživateli
          právo do souboru zapisovat.</p>
							<pre class="brush: text;">
$ ln /home/vasek/matematika/memo2 /home/tomino/new_memo
							</pre>
        <h4>Pevné a symbolické odkazy v Linuxu</h4>
        <p>Odkazy (lze se setkat také s anglickým výrazem link) jsou v unixových systémech dvojí povahy: pevné a
          symbolické.</p>
        <p><strong>Pevné odkazy</strong></p>
        <p>Jinak také <strong>tvrdé</strong>, umožňují používat pro jeden a týž soubor více jmen, aniž by jej bylo nutné
          kopírovat. Využívají zvláštního mechanismu, který spočívá v tom, že jména souborů jsou uchovávána odděleně od
          i-uzlů s daty. V každém i-uzlu je místo vlastního názvu uvedeno pouze jakési id. Vytvoříme-li nový pevný
          odkaz, tak se do tabulky s názvy souborů pouze přidá další položka odkazující na stejné id.</p>
        <p><strong>Symbolické odkazy (symlinky)</strong></p>
        <p>Používají se mnohem častěji. Na rozdíl od odkazů pevných je lze aplikovat i na adresáře a soubory, a to i na
          jiné fyzické datové svazky. Symbolické odkazy totiž nejsou pouhým přidáním dalšího jména souboru, ale
          speciální soubory, které mají v datovém prostoru uloženo kam mají směřovat. Při jejich vytváření se nijak
          nekontroluje existence a dostupnost cílového objektu.</p>
        <p><strong>Důležité poznámky:</strong></p>
        <ul class="dt-sc-fancy-list dt-sc-lmarg25 caret-right" style="margin-bottom: 10px;">
          <li>Pevné odkazy lze vytvářet pouze v rámci jednoho fyzického diskového oddílu.</li>
          <li>Nově vytvořený odkaz náleží stejnému uživateli co vlastní původní soubor, bez ohledu na to, kdo link
            vytvořil.
          </li>
          <li>Nelze vytvořit pevný odkaz na adresář.</li>
        </ul>
        <p><strong>ln</strong> – obslužný program pro vytvoření odkazu</p>
        <p><span class="fa icon-icon_light"></span> <strong>Tip: Zobrazení všech symlinků ve složce</strong></p>
        <div class="dt-sc-one dt-sc-lmarg25">
								<pre class="brush: text;">
ls -Rl --color | grep \>
								</pre>
        </div>
      </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>
  </section><!-- **Primary - Ends** -->

</div> <!-- **container - Ends** -->
