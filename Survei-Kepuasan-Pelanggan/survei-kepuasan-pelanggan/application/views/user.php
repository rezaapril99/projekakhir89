<?= $this->session->flashdata('pesan'); ?>
<div class="card">
              <div class="card-header">
                <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah User </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1;
                  foreach ($user as $usr) : ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $usr->nama ?></td>
                    <td><?= $usr->username ?></td>
                    <td><?= $usr->password ?></td>
                    <td><?= $usr->email ?></td>
                    <td>
                    	<button data-toggle="modal" data-target="#edit<?= $usr->id_user ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    	<a href="<?= base_url('user/delete/' . $usr->id_user) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
          <?php endforeach ?>
          </tbody>
          </table>
      </div>
  </div>

<!-- Modal Edit-->
<?php foreach($user as $usr) { ?>
<div class="modal fade" id="edit<?= $usr->id_user ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url('user/edit/' . $usr->id_user) ?>" method="POST">
        <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $usr->nama ?>">
    <?= form_error('nama', '<div class="text-small text-danger">','</div>'); ?>
  </div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="<?= $usr->username ?>">
		<?= form_error('username', '<div class="text-small text-danger">','</div>'); ?>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" class="form-control" value="<?= $usr->password ?>">
		<?= form_error('password', '<div class="text-small text-danger">','</div>'); ?>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" value="<?= $usr->email ?>">
		<?= form_error('email', '<div class="text-small text-danger">','</div>'); ?>
	</div>
	<div class="modal-footer">
	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
	</div>
		</form>
      </div>   
    </div>
  </div>
</div>
<?php } ?>