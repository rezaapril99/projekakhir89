<div class= "container">
	<form class="form-responden form-horizontal" method="POST" action="<?php echo base_url("kuesioner");?>" role="form">
		<h3>Identitas Responden</h3><br>
		<div class="form-group">
			<label class="control-label col-sm-3" for="nama">Nama*</label>
			<div class="col-sm-9">
				<input type="text" name="nama" value="<?php echo set_value('nama')?>" class="form-control" placeholder="Isikan nama">
				<?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="umur">Umur*</label>
			<div class="col-sm-9">
				<input type="text" name="umur" value="<?php echo set_value('umur')?>" class="form-control" placeholder="Isikan umur">
				<?= form_error('umur','<small class="text-danger pl-3">','</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3">Jenis Kelamin*</label>
			<div class="col-sm-9">
				<div class="radio">
					<label><input type="radio" name="jk" value="Laki-Laki" <?php echo set_radio('jk', '0', TRUE); ?> required> Laki-Laki</label>
					<label><input type="radio" name="jk" value="Perempuan" <?php echo set_radio('jk', '1'); ?> required> Perempuan</label>
				</div>
				<?= form_error('jk','<small class="text-danger pl-3">','</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="kategori">Kategori Pelanggan*</label>
			<div class="col-sm-9">
				<select name="kategori" class="form-control">
					<option value="" selected>-- Pilih Kategori --</option>
					<option value="Retail" <?php echo set_select('kategori', 'Retail', FALSE)?>>Retail</option>
					<option value="Grosir" <?php echo set_select('kategori', 'Grosir', FALSE)?>>Grosir</option>
					<option value="MiniMarket" <?php echo set_select('kategori', 'Minimarket', FALSE)?>>Minimarket</option>
					<option value="Lainnya" <?php echo set_select('kategori', 'Lainnya', FALSE)?>>Lainnya</option>
				</select>
				<?= form_error('kategori','<small class="text-danger pl-3">','</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="frekuensi">Frekuensi Pelanggan*</label>
			<div class="col-sm-9">
				<select name="frekuensi" class="form-control">
					<option value="" selected>-- Pilih frekuensi --</option>
					<option value="Pertama Kali" <?php echo set_select('frekuensi', 'Pertama Kali', FALSE)?>>Pertama Kali</option>
					<option value="Dua Kali" <?php echo set_select('frekuensi', 'Dua Kali', FALSE)?>>Dua Kali</option>
					<option value="Lebih dari dua kali" <?php echo set_select('frekuensi', 'Lebih dari dua kali', FALSE)?>>Lebih dari dua kali</option>
					<option value="Sering" <?php echo set_select('frekuensi', 'Sering', FALSE)?>>Sering</option>
					<option value="Lebih dari lima kali" <?php echo set_select('frekuensi', 'Lebih dari lima kali', FALSE)?>>Lebih dari lima kali</option>
				</select>
				<?= form_error('frekuensi','<small class="text-danger pl-3">','</small>'); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tgl">Tanggal*</label>
			<div class="col-sm-9">
				<input type="date" name="tgl" value="<?php echo set_value('tgl')?>">
				<?= form_error('tgl','<small class="text-danger pl-3">','</small>'); ?>
			</div>
		</div>
		<div>Keterangan : * = Harus diisi</div> 
		<button class="btn btn-lg btn-primary btn-block" type="submit">Lanjutkan</button><br>
	</form>
</div>
