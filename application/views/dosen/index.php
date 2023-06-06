<div class="container pt-5">
     <?= $this->session->flashdata('pesan'); ?>
     <div class="row">
          <div class="col-lg-12">
               <?php if (validation_errors()) { ?>
                    <div class="alert alert-danger" role="alert">
                         <?= validation_errors(); ?>
                    </div>
               <?php } ?>
               <?= $this->session->flashdata('pesan'); ?>
               <a class="btn mb-2" style="background-color:lightsalmon" href="<?= base_url('dosen/tambah'); ?>">Tambah Data</a>
               <table class="table table-responsive table-hover">
                    <thead>
                         <tr class="table-danger">
                              <th>#</th>
                              <th>Perguruan Tinggi</th>
                              <th>Nama</th>
                              <th>Program Studi</th>
                              <th>Jabatan Fungsional</th>
                              <th>Pendidikan Terakhir</th>
                              <th>Jenis Kelamin</th>
                              <th>Status Aktif</th>
                              <th>Ikatan Kerja</th>
                              <th>Pilihan</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         foreach ($dosen as $dos) { ?>
                              <tr>
                                   <td><?= $i++; ?></td>
                                   <td><?= $dos['perguruan_tinggi']; ?></td>
                                   <td><?= $dos['nama']; ?></td>
                                   <td><?= $dos['prodi']; ?></td>
                                   <td><?= $dos['jabatan']; ?></td>
                                   <td><?= $dos['pendidikan']; ?></td>
                                   <td><?= $dos['jnskel']; ?></td>
                                   <td><?= $dos['stts_aktif']; ?></td>
                                   <td><?= $dos['ikatankerja']; ?></td>
                                   <td>
                                        <a href=" <?= base_url('dosen/edit/') . $dos['id']; ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                        <a href="<?= base_url('dosen/hapus/') . $dos['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $dos['nama']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                   </td>
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>