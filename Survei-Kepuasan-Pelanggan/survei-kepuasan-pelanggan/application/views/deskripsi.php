<?= $this->session->flashdata('pesan'); ?>

<div class="card">
  <div class="card-header">
    <a href="<?= base_url('deskripsi/tambahdata') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Deskripsi </a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <h4>Pertanyaan</h4>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr class="text-center">
          <th>No</th>
          <th>ID Kategori</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($tbl_deskripsi as $dsr) : ?>
          <tr class="text-center">
            <td><?= $no++ ?></td>
            <td><?= $dsr->nama_kategori ?></td>
            <td><?= $dsr->nama_deskripsi ?></td>
            <td>
             <a href="<?= base_url('deskripsi/edit/' . $dsr->id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
               <a href="<?= base_url('deskripsi/delete/' . $dsr->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>
             </td>
           </tr>
         <?php endforeach ?>
       </tbody>
     </table>
   </div>
 </div>
