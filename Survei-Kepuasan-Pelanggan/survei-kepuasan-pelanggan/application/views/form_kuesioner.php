<div class="container">
	<div class="container-page">
		<div class="row form-kuesioner">
			<h2>Kuesioner Responden Survei Kepuasaan Pelanggan</h2>
			<hr>
			<h3>Petunjuk</h3>
			<div>
				Kami menginginkan pendapat anda tentang kualitas pelayanan yang diberikan PT Mitra Gemilang Inti Perkasa Pekalongan
			</div>
			<h3>Cara Pengisian</h3>
			<div>
				Setiap soal terdapat 2 jawaban kenyataan dan harapan, pilih salau satu pada jawaban yang Saudara pilih
			</div>
			<br><br>
			<form method="POST" action="<?php echo base_url("Kuesioner/formSubmit");?>" role="form">
				<div class="col-md-12">	
					<input type="hidden" name="nama" value="<?php echo (!empty($dataResponden['responden']['nama']))?$dataResponden['responden']['nama']:set_value('nama') ?>">
					<input type="hidden" name="umur" value="<?php echo (!empty($dataResponden['responden']['umur']))?$dataResponden['responden']['umur']:set_value('umur') ?>">
					<input type="hidden" name="jk" value="<?php echo (!empty($dataResponden['responden']['jk']))?$dataResponden['responden']['jk']:set_value('jk') ?>">
					<input type="hidden" name="frekuensi" value="<?php echo (!empty($dataResponden['responden']['frekuensi']))?$dataResponden['responden']['frekuensi']:set_value('frekuensi') ?>">
					<input type="hidden" name="kategori" value="<?php echo (!empty($dataResponden['responden']['kategori']))?$dataResponden['responden']['kategori']:set_value('kategori') ?>">
					<input type="hidden" name="tgl" value="<?php echo (!empty($dataResponden['responden']['tgl']))?$dataResponden['responden']['tgl']:set_value('tgl') ?>">

					<?php
					$no = 1;
						// echo "<pre>";
						// print_r($dataKuisioner);die;
					foreach ($dataKuesioner as $value) {
						?>
						<label for="kuesioner"><?= $no ?>. <?= $value['kuesioner'] ?>*</label> <br>
						<div class="row">
							<div class="col-md-6">
								<h4>Kenyataan</h4>
							</div>
							<div class="col-md-6">
								<h4>Harapan</h4>
							</div>
						</div>
						<br>
						<?php
						foreach ($value['pernyataan']['pernyataan'] as $data) {
							$dataPernyataan = explode('~', $data);
							?>
							
							<div class="row">
								<div class="col-md-6">
									<label><input type="radio" name="kenyataan<?= $value['pernyataan']['id_pernyataan'] ?>" value="<?= $dataPernyataan[1] ?>" <?php echo set_radio('pernyataan', '<?= $dataPernyataan[1] ?>'); ?> required> <?= $dataPernyataan[0] ?></label> <br><br>
								</div>
								<div class="col-md-6">
									<label><input type="radio" name="harapan<?= $value['pernyataan']['id_skala'] ?>" value="<?= $dataPernyataan[1] ?>" <?php echo set_radio('pernyataan', '<?= $dataPernyataan[1] ?>'); ?> required> <?= $dataPernyataan[0] ?></label> <br><br>
								</div>
							</div>

							<?php
						}
						$no++;
					}
					?>					
					<button class="btn btn-lg btn-warning btn-block btn-custom" type="submit"
					name="submit" style="width: 120px;">Submit</button><br>
				</div>
			</form>
		</div>
	</div>
</div>