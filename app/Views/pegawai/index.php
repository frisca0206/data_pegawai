  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Pegawai</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Pegawai</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Hello !</h3>
                  <br>
              </div>
              <div class="card-body">
                  <h1>Data Pegawai</h1>
                  <table id="pegawai_table" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th scope="col">Nama Pegawai</th>
                              <th scope="col">Nomor Pegawai</th>
                              <th scope="col">Tanggal Bergabung</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($all_data_pegawai as $pegawai) : ?>
                          <tr>
                              <td><?= $pegawai->nama_pegawai ?></td>
                              <td><?= $pegawai->nomor_pegawai ?></td>
                              <td><?= $pegawai->tanggal_bergabung ?></td>
                              <td><a href="<?= base_url('edit_data_pegawai').'/'.$pegawai->id ?>"
                                      class="btn btn-info btn-sm"> Update</a>
                                  <a href="<?= base_url('delete_data_pegawai').'/'.$pegawai->id ?>"
                                      class="btn btn-info btn-sm"> Delete</a>
                              </td>
                          </tr>
                          <?php endforeach ?>
                      </tbody>
                  </table>
                  <br>
                  <a href="<?= base_url('add_data_pegawai') ?>" class="btn btn-primary"> Tambah Data Pegawai</a>
              </div>
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->