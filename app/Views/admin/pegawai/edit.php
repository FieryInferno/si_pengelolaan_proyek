
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
              <form action="<?= base_url('/admin/pegawai/edit/' . $id_user); ?>" method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT" />
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username" name="username" required value="<?= $username; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukan Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap" name="nama_lengkap" required value="<?= $nama_lengkap; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" name="email" required value="<?= $email; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor Telepon" name="nomor_telp" required value="<?= $nomor_telp; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP" name="nip" required value="<?= $nip; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="" disabled selected>Pilih Role</option>
                      <option value="admin" <?= $role == 'admin' ? 'selected' : ''; ?>>Admin</option>
                      <option value="pj" <?= $role == 'pj' ? 'selected' : ''; ?>>Penanggung Jawab</option>
                      <option value="member" <?= $role == 'member' ? 'selected' : ''; ?>>Member</option>
                      <option value="pegawai" <?= $role == 'pegawai' ? 'selected' : ''; ?>>Pegawai</option>
                    </select>
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