
<div class="container">
	<h4>Skala kenyataan</h4>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<?php 
				for ($i=1; $i <= 19; $i++) { 
					?>
					<th>P<?= $i ?></th>
					<?php
				} 
				?>
			</tr>
		</thead>
		<tbody>
			<?php
			$no=0;
			$meanKenyataan = 0;
			$meanKenyataanArr = [];
			$arrKenyataan = [];
			foreach ($tbl_kuesioner_kenyataan as $value) {
				$no++;

				for ($ii=1; $ii <= 19 ; $ii++) { 
					$p = "p".$ii;
					$pCombine = $value->$p;
					$meanKenyataan += $pCombine;
					$meanKenyataanArr[$ii][] = $pCombine;
				}
				?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $value->p1 ?></td>
					<td><?= $value->p2 ?></td>
					<td><?= $value->p3 ?></td>
					<td><?= $value->p4 ?></td>
					<td><?= $value->p5 ?></td>
					<td><?= $value->p6 ?></td>
					<td><?= $value->p7 ?></td>
					<td><?= $value->p8 ?></td>
					<td><?= $value->p9 ?></td>
					<td><?= $value->p10 ?></td>
					<td><?= $value->p11 ?></td>
					<td><?= $value->p12 ?></td>
					<td><?= $value->p13 ?></td>
					<td><?= $value->p14 ?></td>
					<td><?= $value->p15 ?></td>
					<td><?= $value->p16 ?></td>
					<td><?= $value->p17 ?></td>
					<td><?= $value->p18 ?></td>
					<td><?= $value->p19 ?></td>
				</tr>
				<?php
			}
			?>
			<tr class="mean">
				<td>Mean</td>
				<?php 
				for ($k=1; $k <= count($meanKenyataanArr); $k++) { 
					$meanKenyataan = array_sum($meanKenyataanArr[$k])/count($meanKenyataanArr[$k]);
					$arrKenyataan[] = $meanKenyataan;
					?>
					<td><?= number_format($meanKenyataan, 2) ?></td>
				<?php } ?>
			</tr>
		</tbody>
	</table>

	<h4>Skala Harapan</h4>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<?php 
				for ($i=1; $i <= 19; $i++) { 
					?>
					<th>P<?= $i ?></th>
					<?php
				} 
				?>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 0;
			$mean = 0;
			$meanHarapanArr = [];
			$arrHarapan = [];
			foreach ($tbl_kuesioner_harapan as $value) {
				$no++;
				for ($ii=1; $ii <= 19 ; $ii++) { 
					$p = "p".$ii;
					$pCombine = $value->$p;
					$mean += $pCombine;
					$meanHarapanArr[$ii][] = $pCombine;
				}
				?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $value->p1 ?></td>
					<td><?= $value->p2 ?></td>
					<td><?= $value->p3 ?></td>
					<td><?= $value->p4 ?></td>
					<td><?= $value->p5 ?></td>
					<td><?= $value->p6 ?></td>
					<td><?= $value->p7 ?></td>
					<td><?= $value->p8 ?></td>
					<td><?= $value->p9 ?></td>
					<td><?= $value->p10 ?></td>
					<td><?= $value->p11 ?></td>
					<td><?= $value->p12 ?></td>
					<td><?= $value->p13 ?></td>
					<td><?= $value->p14 ?></td>
					<td><?= $value->p15 ?></td>
					<td><?= $value->p16 ?></td>
					<td><?= $value->p17 ?></td>
					<td><?= $value->p18 ?></td>
					<td><?= $value->p19 ?></td>
				</tr>
				<?php
			}
			?>
			<tr class="mean">
				<td>Mean</td>
				<?php 
				for ($h=1; $h <= count($meanHarapanArr); $h++) { 
					$meanHarapan = array_sum($meanHarapanArr[$h])/count($meanHarapanArr[$h]);
					$arrHarapan[] = $meanHarapan;
					?>
					<td><?= number_format($meanHarapan, 2) ?></td>
				<?php } ?>
			</tr>
		</tbody>
	</table>


	<h4>GAP</h4>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Kenyataan</th>
				<th>Harapan</th>
				<th>GAP</th>
				<th>Presentase</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$gap = array(
				'data' => array(
					'0' => $arrKenyataan,
					'1'	=> $arrHarapan
				)
			);

			$combineArr = array();
			for ($i=0; $i < count($gap['data']) ; $i++) { 
				for ($ii=0; $ii < count($gap['data'][$i]); $ii++) { 
					if ($ii == $ii) {
						$combineArr[$ii][] = $gap['data'][$i][$ii];
					}
				}
			}
			?>
			<?php 
			foreach ($combineArr as $value) {
				?>
				<tr>
					<td><?= number_format($value[0], 2) ?></td>
					<td><?= number_format($value[1], 2) ?></td>
					<td><?= number_format(($value[0] - $value[1]), 2) ?></td>
					<td><?= number_format(($value[0] / $value[1] *100), 2) ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<h4>Dimensi GAP</h4>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Dimensi</th>
				<th>Kinerja</th>
				<th>Harapan</th>
				<th>GAP</th>
				<th>Presentase</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 0;
			$sumH = 0;
			$sumK = 0;
			for ($dg=0; $dg <= 2 ; $dg++) { 
				$no++;
				$sumK += $combineArr[$dg][0];
				$sumH += $combineArr[$dg][1];
				?>
				<tr>
					<td><?= $no ?></td>
					<td>Reliability</td>
					<td><?= number_format($combineArr[$dg][0], 2) ?></td>
					<td><?= number_format($combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] - $combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] / $combineArr[$dg][1] *100, 2) ?></td>
				</tr>
			<?php } $Reliability = ($sumK/3) - ($sumH/3); ?>
			<tr class="mean">
				<td colspan="2">Mean</td>
				<td><?= number_format(($sumK/3), 2) ?></td>
				<td><?= number_format(($sumH/3), 2) ?></td>
				<td><?= number_format(($sumK/3) - ($sumH/3), 2) ?></td>
			</tr>
		</tbody>
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Dimensi</th>
				<th>Kinerja</th>
				<th>Harapan</th>
				<th>GAP</th>
				<th>Presentase</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 0;
			$sumH = 0;
			$sumK = 0;
			for ($dg=3; $dg <= 5 ; $dg++) { 
				$no++;
				$sumK += $combineArr[$dg][0];
				$sumH += $combineArr[$dg][1];
				?>
				<tr>
					<td><?= $no ?></td>
					<td>Responsiveness</td>
					<td><?= number_format($combineArr[$dg][0], 2) ?></td>
					<td><?= number_format($combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] - $combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] / $combineArr[$dg][1] *100, 2) ?></td>
				</tr>
			<?php } $Responsiveness = ($sumK/3) - ($sumH/3); ?>
			<tr class="mean">
				<td colspan="2">Mean</td>
				<td><?= number_format(($sumK/3), 2) ?></td>
				<td><?= number_format(($sumH/3), 2) ?></td>
				<td><?= number_format(($sumK/3) - ($sumH/3), 2) ?></td>
			</tr>
		</tbody>
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Dimensi</th>
				<th>Kinerja</th>
				<th>Harapan</th>
				<th>GAP</th>
				<th>Presentase</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 0;
			$sumH = 0;
			$sumK = 0;
			for ($dg=6; $dg <= 11 ; $dg++) { 
				$no++;
				$sumK += $combineArr[$dg][0];
				$sumH += $combineArr[$dg][1];
				?>
				<tr>
					<td><?= $no ?></td>
					<td>Assurance</td>
					<td><?= number_format($combineArr[$dg][0], 2) ?></td>
					<td><?= number_format($combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] - $combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] / $combineArr[$dg][1] *100, 2) ?></td>
				</tr>
			<?php } $Assurance = ($sumK/6) - ($sumH/6); ?>
			<tr class="mean">
				<td colspan="2">Mean</td>
				<td><?= number_format(($sumK/6), 2) ?></td>
				<td><?= number_format(($sumH/6), 2) ?></td>
				<td><?= number_format(($sumK/6) - ($sumH/6), 2) ?></td>
			</tr>
		</tbody>
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Dimensi</th>
				<th>Kinerja</th>
				<th>Harapan</th>
				<th>GAP</th>
				<th>Presentase</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 0;
			$sumH = 0;
			$sumK = 0;
			for ($dg=12; $dg <= 13 ; $dg++) { 
				$no++;
				$sumK += $combineArr[$dg][0];
				$sumH += $combineArr[$dg][1];
				?>
				<tr>
					<td><?= $no ?></td>
					<td>Empathy</td>
					<td><?= number_format($combineArr[$dg][0], 2) ?></td>
					<td><?= number_format($combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] - $combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] / $combineArr[$dg][1] *100, 2) ?></td>
				</tr>
			<?php } $Empathy = ($sumK/2) - ($sumH/2); ?>
			<tr class="mean">
				<td colspan="2">Mean</td>
				<td><?= number_format(($sumK/2), 2) ?></td>
				<td><?= number_format(($sumH/2), 2) ?></td>
				<td><?= number_format(($sumK/2) - ($sumH/2), 2) ?></td>
			</tr>
		</tbody>
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Dimensi</th>
				<th>Kinerja</th>
				<th>Harapan</th>
				<th>GAP</th>
				<th>Presentase</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 0;
			$sumH = 0;
			$sumK = 0;
			for ($dg=14; $dg <= 18 ; $dg++) { 
				$no++;
				$sumK += $combineArr[$dg][0];
				$sumH += $combineArr[$dg][1];
				?>
				<tr>
					<td><?= $no ?></td>
					<td>Tangibles</td>
					<td><?= number_format($combineArr[$dg][0], 2) ?></td>
					<td><?= number_format($combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] - $combineArr[$dg][1], 2) ?></td>
					<td><?= number_format($combineArr[$dg][0] / $combineArr[$dg][1] *100, 2) ?></td>
				</tr>
			<?php } $Tangibles = ($sumK/5) - ($sumH/5); ?>
			<tr class="mean">
				<td colspan="2">Mean</td>
				<td><?= number_format(($sumK/5), 2) ?></td>
				<td><?= number_format(($sumH/5), 2) ?></td>
				<td><?= number_format(($sumK/5) - ($sumH/5), 2) ?></td>
			</tr>
		</tbody>
	</table>
	<div class="card">
		<div class="card-body">
			Keterangan : Gap/kesenjangan yang bernilai negatif menunjukkan
			harapan pelanggan belum terpenuhi, dapat diartikan bahwa
			kepuasan pelanggan belum tercapai secara maksimal.
			Sebaliknya gap/kesenjangan yang bernilai positif
			menunjukkan kinerja perusahaan melampau harapan
			pelanggan, sehingga kepuasan pelanggan tercapai.
			<br>
			Dalam tingkat kesesuaian < 100% dapat dijelaskan lagi sebagai berikut :
			<br>
			0 – 32 % Pelanggan Sangat Tidak Puas
			<br>
			33 – 65% Pelanggan Tidak Puas
			<br>
			66 – 99% Pelanggan Kurang Puas
		</div>
	</div>
	<div>
		<center><h2>Diagram</h2></center>
		<canvas id="myChart"></canvas>
	</div>
</div>
<script src="<?= base_url("/assets/js/Chart.js"); ?>"></script>
<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ["Reliability", "Responsiveness", "Assurance", "Empathy", "Tangibles"],
			datasets: [{
				label: 'Dimensi Gap',
				data: [
					<?= number_format($Reliability, 2) ?>, 
					<?= number_format($Responsiveness, 2) ?>, 
					<?= number_format($Assurance, 2) ?>, 
					<?= number_format($Empathy, 2) ?>,
					<?= number_format($Tangibles, 2) ?>
					],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>