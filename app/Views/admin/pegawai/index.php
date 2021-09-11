
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
                <h3 class="card-title">Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p class="card-description">
                  <a href="<?= base_url(); ?>/admin/pegawai/tambah" class="btn btn-primary">Tambah</a>
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
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Nomor Telepon</th>
                      <th>NIP</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($pegawai as $key) { 
                        switch ($key->role) {
                          case 'admin':
                            $email      = $key->email_admin;
                            $nomor_telp = $key->nomor_telp_admin;
                            $nip        = $key->nip_admin;
                            break;
                          case 'pegawai':
                            $email      = $key->email_pegawai;
                            $nomor_telp = $key->nomor_telp_pegawai;
                            $nip        = $key->nip_pegawai;
                            break;
                          case 'member':
                            $email      = $key->email_member;
                            $nomor_telp = $key->nomor_telp_member;
                            $nip        = $key->nip_member;
                            break;
                          case 'pj':
                            $email      = $key->email_pj;
                            $nomor_telp = $key->nomor_telp_pj;
                            $nip        = $key->nip_pj;
                            break;
                          
                          default:
                            # code...
                            break;
                        }
                    ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $key->username; ?></td>
                          <td><?= $key->nama_lengkap; ?></td>
                          <td><?= $email; ?></td>
                          <td><?= $nomor_telp; ?></td>
                          <td><?= $nip; ?></td>
                          <td><?= $key->role; ?></td>
                          <td>
                            <a href="<?= base_url(); ?>/admin/pegawai/edit/<?= $key->id_user; ?>" class="btn btn-success">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $key->id_user; ?>">Hapus</button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus<?= $key->id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <form action="<?= base_url('/admin/pegawai/hapus/' . $key->id_user); ?>" method="post">
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
                      <th>Username</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Nomor Telepon</th>
                      <th>NIP</th>
                      <th>Role</th>
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