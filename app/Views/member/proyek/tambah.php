
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Proyek</h3>
              </div>
              <!-- /.card-header -->
              <form action="<?= base_url(); ?>/admin/proyek/tambah" method="post">
                <?= csrf_field() ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <select name="id_pegawai" id="id_pegawai" class="form-control" required>
                      <option value="" disabled selected>Pilih Nama Pegawai</option>
                      <?php
                        foreach ($pegawai as $key) { ?>
                          <option value="<?= $key->id_pegawai; ?>"><?= $key->nama_lengkap; ?></option>
                        <?php }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Admin</label>
                    <select name="id_admin" id="id_admin" class="form-control" required>
                      <option value="" disabled selected>Pilih Nama Admin</option>
                      <?php
                        foreach ($admin as $key) { ?>
                          <option value="<?= $key->id_admin; ?>"><?= $key->nama_lengkap; ?></option>
                        <?php }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Proyek</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Proyek" name="nama_proyek" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Proyek</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Lokasi Proyek" name="lokasi_proyek" required>
                  </div>
                </div>
                
                <div class="card-footer">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>

                  <!-- Modal -->
                  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Tambah</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah anda yakin akan menambah data ini?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>