<div class="container">
     <!-- Outer Row -->
     <div class="row justify-content-center">
          <div class="col-lg-10">
               <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                         <!-- Nested Row within Card Body -->
                         <div class="row">
                              <div class="col-lg">
                                   <div class="p-5">
                                        <div class="d-flex justify-content-center">
                                             <p class="text-center">Tambah Data Dosen</p>
                                             </nav>
                                        </div>
                                        <br>
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <form class="user" method="post" action="<?= base_url('Dosen/SimpanDataDosen'); ?>">
                                             <div class="form-group mb-3">
                                                  <input type="text" class="form-control form-control-user" id="perguruan_tinggi" name="perguruan_tinggi" placeholder="Masukkan Perguruan Tinggi">
                                                  <?= form_error('perguruan_tinggi', '<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>
                                             <div class="form-group mb-3">
                                                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama">
                                                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>

                                             <div class="form-group mb-3">
                                                  <input type="text" class="form-control form-control-user" id="prodi" name="prodi" placeholder="Masukkan Program Studi">
                                                  <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>

                                             <div class="form-group mb-3">
                                                  <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan Ahli">
                                                  <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>

                                             <div class="form-group mb-3">
                                                  <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Masukkan Pendidikan Terakhir">
                                                  <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                                             </div>
                                             <div class="form-group mb-3">
                                                  <select id="stts_aktif" name="stts_aktif" class="form-select">
                                                       <option value="">Pilih Status Aktif</option>
                                                       <option value="Aktif">Aktif</option>
                                                       <option value="Tidak Aktif">Tidak Aktif</option>
                                                  </select>
                                             </div>
                                             <div class="form-group mb-3">
                                                  <select id="ikatankerja" name="ikatankerja" class="form-select">
                                                       <option value="">Pilih Ikatan Kerja</option>
                                                       <option value="Dosen Tetap">Dosen Tetap</option>
                                                       <option value="Dosen Tidak Tetap">Dosen Tidak Tetap</option>
                                                  </select>
                                             </div>
                                             <div class="form-group mb-3">
                                                  <select id="jnskel" name="jnskel" class="form-select">
                                                       <option value="">Pilih Jenis Kelamin</option>
                                                       <option value="Laki-Laki">Laki-Laki</option>
                                                       <option value="Perempuan">Perempuan</option>
                                                  </select>
                                             </div>
                                             <div class="d-flex justify-content-center">
                                                  <div>
                                                       <input type="button" class="btn btn-dark" style="background-color: #EE7879;" value="Kembali" onclick="window.history.go(-1)">
                                                       <button type="submit" class="btn btn-dark" style="background-color: #4AD7D1;"><i class="fas fa-plus-circle"></i> Tambah</button>
                                                  </div>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>