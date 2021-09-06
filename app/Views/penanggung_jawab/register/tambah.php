
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
                <h3 class="card-title">Register Proyek</h3>
              </div>
              <!-- /.card-header -->
              <form action="<?= base_url(); ?>/admin/register/tambah" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Proyek</label>
                    <select name="proyek_id" id="proyek_id" class="form-control" required>
                      <option value="" disabled selected>Pilih Proyek</option>
                      <?php
                        foreach ($proyek as $key) { ?>
                          <option value="<?= $key->id_proyek; ?>"><?= $key->nama_proyek; ?></option>
                        <?php }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Dokumen Title" name="dokumen_title" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen Kategori</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Dokumen Kategori" name="dokumen_kategori" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" name="dokumen" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Departemen</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Departemen" name="departemen" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tipe" name="tipe" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Industri</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Industri" name="industri" required>
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