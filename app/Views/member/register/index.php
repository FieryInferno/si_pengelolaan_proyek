
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
                <h3 class="card-title">Data Register</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p class="card-description">
                  <a href="<?= base_url(); ?>/admin/register/tambah" class="btn btn-primary">Tambah</a>
                </p>
                <?php
                  if (session('sukses')) { ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                      <?= session('sukses'); ?>
                    </div>
                  <?php }
                ?>
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Proyek</th>
                      <th>Document Title</th>
                      <th>Kategori Dokumen</th>
                      <th>Dokumen</th>
                      <th>Departemen</th>
                      <th>Tipe</th>
                      <th>Industri</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($register as $key) { ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $key->nama_proyek; ?></td>
                          <td><?= $key->dokumen_title; ?></td>
                          <td><?= $key->dokumen_kategori; ?></td>
                          <td><a href="<?= base_url('/upload/' . $key->dokumen_url); ?>" class="btn btn-primary">Lihat Dokumen</a></td>
                          <td><?= $key->departemen; ?></td>
                          <td><?= $key->tipe; ?></td>
                          <td><?= $key->industri; ?></td>
                          <td>
                            <a href="<?= base_url(); ?>/admin/register/edit/<?= $key->id_register; ?>" class="btn btn-success">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $key->id_register; ?>">Hapus</button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus<?= $key->id_register; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    Apakah anda yakin akan menghapus data ini?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="<?= base_url('/admin/register/hapus/' . $key->id_register); ?>" method="post">
                                      <?= csrf_field() ?>
                                      <input type="hidden" name="_method" value="DELETE" />
                                      <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php }
                    ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Proyek</th>
                      <th>Document Title</th>
                      <th>Kategori Dokumen</th>
                      <th>Dokumen</th>
                      <th>Departemen</th>
                      <th>Tipe</th>
                      <th>Industri</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>