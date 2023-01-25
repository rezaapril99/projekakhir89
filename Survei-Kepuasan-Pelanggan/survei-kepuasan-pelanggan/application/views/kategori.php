<?= $this->session->flashdata('pesan'); ?>

<div class="card">
              <div class="card-header">
                <a href="<?= base_url('kategori/tambahdata') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Kategori </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h4>Kategori</h4>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1;
                  foreach ($kategori as $ktg) : ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $ktg->nama_kategori ?></td>
                    <td>
                    	<button data-toggle="modal" data-target="#edit<?= $ktg->id ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    	<a href="<?= base_url('kategori/delete/' . $ktg->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
          <?php endforeach ?>
          </tbody>
          </table>
      </div>
  </div>

<!-- Modal Edit-->
<?php foreach($kategori as $ktg) { ?>
<div class="modal fade" id="edit<?= $ktg->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url('kategori/edit/' . $ktg->id) ?>" method="POST">
	<div class="form-group">
		<label>Kategori</label>
		<input type="text" name="nama_kategori" class="form-control" value="<?= $ktg->nama_kategori ?>">
		<?= form_error('nama_kategori', '<div class="text-small text-danger">','</div>'); ?>
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