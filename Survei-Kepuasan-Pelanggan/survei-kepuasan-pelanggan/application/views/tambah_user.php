<form action="<?= base_url('user/tambah_aksi') ?>" method="POST">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control">
		<?= form_error('nama', '<div class="text-small text-danger">','</div>'); ?>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control">
		<?= form_error('username', '<div class="text-small text-danger">','</div>'); ?>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" class="form-control">
		<?= form_error('password', '<div class="text-small text-danger">','</div>'); ?>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
		<?= form_error('email', '<div class="text-small text-danger">','</div>'); ?>
	</div>

	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
	<button type="reset" class="btn btn-danger btn-sm" onclick="self.history.back()"><i class="fas fa-trash"></i> Batal</button>
</form>