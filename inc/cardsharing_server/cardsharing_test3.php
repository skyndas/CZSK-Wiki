			<div class="breadcrumb-wrapper type2">
				<div class="container">
					<div class="main-title">
						<h1>Cardsharing servery - Czsk.tv</h1>
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
							<h4>Czsk.tv - Dostupné karty ke dni 24.5.2015</h4>
							<div class="dt-sc-one-half">
								<table class="cardsharing_server_table dt-sc-lmarg25">
									<tr style="font-weight: bold"><td>Jméno provideru</td><td>CAID</td><td>Vlastní karta na serveru</td></tr>
						        	<tr><td>Skylink</td><td>0D96</td><td>ANO</td></tr>
						        	<tr><td>freeSAT</td><td>0D97</td><td>ANO</td></tr>
						        	<tr><td>HD+</td><td>neznámé</td><td>NE</td></tr>
						        	<tr><td>Redlight</td><td>0500</td><td>ANO</td></tr>
						        	<tr><td>Bulsat</td><td>neznámé</td><td>NE</td></tr>
						        	<tr><td>Polsat</td><td>neznámé</td><td>NE</td></tr>
						        	<tr><td>Cyfra+</td><td>0100</td><td>NE</td></tr>
						        	<tr><td>Sky-UK</td><td>0963</td><td>NE</td></tr>
						        	<tr><td>Sky-GE</td><td>neznámé</td><td>NE</td></tr>
						        	<tr><td>NTV+</td><td>0500</td><td>ANO</td></tr>
						        	<tr><td>Canal dig. Nordic</td><td>neznámé</td><td>NE</td></tr>
						        	<tr><td>Canal+</td><td>neznámé</td><td>NE</td></tr>
						        </table>
							</div>
							<div class="dt-sc-hr-invisible-very-small"></div>
							<div class="dt-sc-hr-invisible-very-small"></div>
							<h4>Czsk.tv - test spojení CAID 0D97 (freeSat)</h4>
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
								<h5>CAID 0D97 - SID: 7669 (Prima COOL) - ECM time v ms</h5>
								<p>Test proveden dne 24.5.2015</p>
								<div style="width: 100%" >
									<canvas id="canvas1" height="150" width="1200"></canvas>
								</div>
								<script type="text/javascript">
									// BarChart by http://www.chartjs.org/
									var barChartData1 = {
										labels : ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""],
										datasets : [
											{ 	// Blue color
												fillColor : "rgba(151,187,205,0.5)",
												strokeColor : "rgba(151,187,205,0.8)",
												highlightFill : "rgba(151,187,205,0.75)",
												highlightStroke : "rgba(151,187,205,1)",
												data: [719,987,621,738,680,617,1161,517,590,648,1190,733,963,724,822,617,1038,642,827,946,750,643,552,1276,556,831,1109,605,541,662]	  
											}
										],
									}

									window.onload = function(){
										var ctx1 = document.getElementById("canvas1").getContext("2d");
										window.myBar1 = new Chart(ctx1).Bar(barChartData1, {
											responsive : true,
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
