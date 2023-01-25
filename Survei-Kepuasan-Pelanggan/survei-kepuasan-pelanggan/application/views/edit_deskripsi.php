          <form action="<?= base_url('deskripsi/update') ?>" method="POST">
            <input type="hidden" name="id" value=" <?php echo $tbl_deskripsi->id ?>">
            <div class="form-group">
              <label>ID Kategori</label>
              <select name="kategori" class="form-control">
                <?php foreach ($tbl_kategori as $ktg): ?>
                  <option value="<?php echo $ktg->id ?>" <?php if($ktg->id == $tbl_deskripsi->id_kategori ) echo 'selected'; ?>><?php echo $ktg->nama_kategori ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" name="nama_deskripsi" class="form-control" value="<?php echo $tbl_deskripsi->nama_deskripsi ?>">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
              <button type="reset" class="btn btn-danger btn-sm" onclick="self.history.back()"><i class="fas fa-trash"></i> Batal</button>
            </div>
          </form>