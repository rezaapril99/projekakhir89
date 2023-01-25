<?= $this->session->flashdata('pesan'); ?>

<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Kategori</th>
                    <th>Frekuensi</th>
                    <th>Tanggal</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1;
                  foreach ($customer as $csr) : ?>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $csr->nama ?></td>
                    <td><?= $csr->umur ?></td>
                    <td><?= $csr->jk ?></td>
                    <td><?= $csr->kategori ?></td>
                    <td><?= $csr->frekuensi ?></td>
                    <td><?= $csr->tgl ?></td>
                  </tr>
                  <?php endforeach ?>
              </tbody>
          </table>
      </div>
  </div>