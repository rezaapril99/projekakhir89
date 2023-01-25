<form action="<?= base_url('kategori/simpandata') ?>" method="POST">
	<div class="form-group">
		<label>Kategori</label>
		<input type="text" name="nama_kategori" class="form-control" required>
		<?= form_error('kategori', '<div class="text-small text-danger">','</div>'); ?>
	</div>

	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
	<button type="reset" class="btn btn-danger btn-sm" onclick="self.history.back()"><i class="fas fa-trash"></i> Batal</button>
</form>