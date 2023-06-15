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
                                    <p class="text-center">Edit Data Dosen</p>
                                    </nav>
                                </div>
                                <br>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form action="<?= base_url('dosen/editDataDosen') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?= $dosen['id'] ?>" name="id">
                                    <div class="mb-3">
                                        <label for="perguruan_tinggi" class="form-label">Perguruan Tinggi</label>
                                        <input value="<?= $dosen['perguruan_tinggi'] ?>" type="text" class="form-control" id="perguruan_tinggi" name="perguruan_tinggi">
                                        <div id="nama" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input value="<?= $dosen['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
                                        <div id="nama" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="prodi" class="form-label">Program Studi</label>
                                        <input value="<?= $dosen['prodi'] ?>" type="text" class="form-control" id="prodi" name="prodi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label">Jabatan Ahli</label>
                                        <input type="text" value="<?= $dosen['jabatan'] ?>" class="form-control" id="jabatan" name="jabatan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                        <input value="<?= $dosen['pendidikan'] ?>" class="form-control" id="pendidikan" name="pendidikan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="stts_aktif" class="form-label">Status Aktif</label>
                                        <select class="form-control form-control-user" aria-label=".form-select-lg example" name="stts_aktif">
                                            <option value="<?= $dosen['stts_aktif'] ?>">Data Tidak Dirubah</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ikatankerja" class="form-label">Ikatan Kerja</label>
                                        <select class="form-control form-control-user" aria-label=".form-select-lg example" name="ikatankerja">
                                            <option value="<?= $dosen['ikatankerja'] ?>">Data Tidak Dirubah</option>
                                            <option value="Dosen Tetap">Dosen Tetap</option>
                                            <option value="Dosen Tidak Tetap">Dosen Tidak Tetap</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jnskel" class="form-label">Jenis Kelamin</label>
                                        <select class="form-control form-control-user" aria-label=".form-select-lg example" name="jnskel">
                                            <option value="<?= $dosen['jnskel'] ?>">Data Tidak Dirubah</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" style="background-color: #EE7879;" onclick="window.history.back(-1)"><i class="fas fa-ban fa-spin"></i> Close</button>
                                            <button type="submit" class="btn btn-dark" style="background-color: #4AD7D1;"><i class="fas fa-plus-circle fa-spin"></i> Update</button>
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