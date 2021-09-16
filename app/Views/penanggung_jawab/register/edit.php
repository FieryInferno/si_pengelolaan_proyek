
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
                <h3 class="card-title">Edit Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <form action="<?= base_url('/admin/register/edit/' . $id_register); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT" />
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Proyek</label>
                    <select name="proyek_id" id="proyek_id" class="form-control" required>
                      <option value="" disabled selected>Pilih Proyek</option>
                      <?php
                        foreach ($proyek as $key) { ?>
                          <option value="<?= $key->id_proyek; ?>" <?= $key->id_proyek == $proyek_id ? 'selected' : ''; ?>><?= $key->nama_proyek; ?></option>
                        <?php }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Dokumen Title" name="dokumen_title" required value="<?= $dokumen_title; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen Kategori</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Dokumen Kategori" name="dokumen_kategori" required value="<?= $dokumen_kategori; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Dokumen (format: .xls, .pdf, .docx dan .doc)</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" name="dokumen">
                    <input type="hidden" name="dokumen_lama" value="<?= $dokumen_url; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Departemen</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Departemen" name="departemen" required value="<?= $departemen; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipe</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tipe" name="tipe" required value="<?= $tipe; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Industri</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Industri" name="industri" required value="<?= $industri; ?>">
                  </div>
                </div>
                
                <div class="card-footer">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit">Edit</button>

                  <!-- Modal -->
                  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah anda yakin akan mengedit data ini?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Edit</button>
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