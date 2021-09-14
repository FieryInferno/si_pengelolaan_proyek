
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
                <h3 class="card-title">Data Proyek Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Admin</th>
                      <th>Nama Proyek</th>
                      <th>Lokasi Proyek</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Admin</th>
                      <th>Nama Proyek</th>
                      <th>Lokasi Proyek</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($proyekPegawai as $key) { ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $key->nama_admin; ?></td>
                          <td><?= $key->nama_proyek; ?></td>
                          <td><?= $key->lokasi_proyek; ?></td>
                        </tr>
                      <?php }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Semua Proyek</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>Nama Admin</th>
                      <th>Nama Proyek</th>
                      <th>Lokasi Proyek</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>Nama Admin</th>
                      <th>Nama Proyek</th>
                      <th>Lokasi Proyek</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($proyek as $key) { ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $key->nama_pegawai; ?></td>
                          <td><?= $key->nama_admin; ?></td>
                          <td><?= $key->nama_proyek; ?></td>
                          <td><?= $key->lokasi_proyek; ?></td>
                        </tr>
                      <?php }
                    ?>
                  </tbody>
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