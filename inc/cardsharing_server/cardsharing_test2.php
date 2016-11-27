<div class="breadcrumb-wrapper type2">
  <div class="container">
    <div class="main-title">
      <h1>Cardsharing servery - Cardsharing.co</h1>
      <div class="breadcrumb">
        <span class="fa fa-home"></span>
        <a href="index.php?page=home-page">Úvod</a>
        <span class="fa fa-angle-right"></span>
        <span class="current">Cardsharing servery</span>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="dt-sc-margin35"></div>
  <!-- Primary Starts -->
  <section id="primary" class="content-full-width">
    <div class="content">
      <div>
        <h4>Cardsharing.co - Dostupné karty ke dni 24.5.2015</h4>
        <div class="dt-sc-one-half">
          <table class="cardsharing_server_table dt-sc-lmarg25">
            <tr style="font-weight: bold">
              <td>Jméno provideru</td>
              <td>Pozice</td>
              <td>CAID</td>
            </tr>
            <!-- HOTBIRD 13E -->
            <tr>
              <td>NC+</td>
              <td>13°E</td>
              <td>0B01:000000</td>
            </tr>
            <tr>
              <td>Cyfrowy Polsat</td>
              <td>13°E</td>
              <td>1803:000000,007101</td>
            </tr>
            <tr>
              <td>Adult channels</td>
              <td>13°E</td>
              <td>0500:042800<br>
                0500:040600<br>
                0500:050C00
              </td>
            </tr>
            <tr>
              <td>Sky Italia</td>
              <td>13°E</td>
              <td>09CD:000000</td>
            </tr>
            <tr>
              <td>SRG Swiss</td>
              <td>13°E</td>
              <td>0500:040810</td>
            </tr>
            <!-- ASTRA 19,2E -->
            <tr>
              <td>Sky Deutschland</td>
              <td>19,2°E</td>
              <td>098C:000000</td>
            </tr>
            <tr>
              <td>HD+</td>
              <td>19,2°E</td>
              <td>1830:000000</td>
            </tr>
            <tr>
              <td>MTV Unlimited</td>
              <td>19,2°E</td>
              <td>0B00:000000</td>
            </tr>
            <tr>
              <td>ORF Digital</td>
              <td>19,2°E</td>
              <td>0D95:000004</td>
            </tr>
            <tr>
              <td>Canal+ HD</td>
              <td>19,2°E</td>
              <td>1810:000000</td>
            </tr>
            <!-- ASTRA 23,5E -->
            <tr>
              <td>SkyLink HD</td>
              <td>23,5°E</td>
              <td>0D96:000004</td>
            </tr>
            <!-- ASTRA 28,2E -->
            <tr>
              <td>Sky UK</td>
              <td>28.2°E</td>
              <td>0963:000000</td>
            </tr>
            <!-- THOR 0,8W-->
            <tr>
              <td>UPC Direct</td>
              <td>0.8°W</td>
              <td>0D97:000004</td>
            </tr>
            <tr>
              <td>Canal Digital Sweden</td>
              <td>0.8°W</td>
              <td>0B00:000000</td>
            </tr>
          </table>
        </div>
        <div class="dt-sc-hr-invisible-very-small"></div>
        <div class="dt-sc-hr-invisible-very-small"></div>
        <h4>Cardsharing.co - test spojení CAID 0D97 (freeSat)</h4>
        <h5>Parametry testů</h5>
        <ul class="dt-sc-lmarg25">
          <li><strong>Box: </strong>VU+ UNO</li>
          <li><strong>Wan:</strong> 100Mb</li>
          <li><strong>Softcam:</strong> Oscam r10630</li>
          <li><strong>Protocol na server:</strong> Newcamd</li>
        </ul>
        <p>Měření ECM časů bylo provedeno v časovém rozmezí 5 minut. Pro CAID 0D97 je ECM odezva každých 10s.</p>
        <hr>
        <div class="dt-sc-lmarg25">
          <h5>CAID 0D97 - SID: 77F1 (HBO2) - ECM time v ms</h5>
          <p>Test proveden dne 24.5.2015</p>
          <div style="width: 100%">
            <canvas id="canvas1" height="150" width="1200"></canvas>
          </div>
          <script type="text/javascript">
            // BarChart by http://www.chartjs.org/
            var barChartData1 = {
              labels: ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
              datasets: [
                { 	// Blue color
                  fillColor: "rgba(151,187,205,0.5)",
                  strokeColor: "rgba(151,187,205,0.8)",
                  highlightFill: "rgba(151,187,205,0.75)",
                  highlightStroke: "rgba(151,187,205,1)",
                  data: [119, 118, 123, 114, 77, 116, 114, 115, 78, 117, 116, 147, 119, 117, 112, 79, 121, 118, 118, 78, 119, 120, 77, 113, 79, 78, 120, 118, 120, 119]
                }
              ],
            }

            window.onload = function () {
              var ctx1 = document.getElementById("canvas1").getContext("2d");
              window.myBar1 = new Chart(ctx1).Bar(barChartData1, {
                responsive: true,
                tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %> ms",
              });
            }
          </script>
        </div>
      </div>
    </div>
  </section> <!-- Primary Ends -->
</div>
<div class="dt-sc-margin100"></div>
