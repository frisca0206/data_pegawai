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
              </div>
              <div class="card-body">
                  <h1>Update Data Pegawai</h1>
                  <form action="<?= base_url('proses_edit_pegawai') ?>" method="POST">
                      <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_pegawai->id ?>">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nama Pegawai</label>
                          <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                              value="<?= $data_pegawai->nama_pegawai ?>">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Nomor Pegawai</label>
                          <input type="text" class="form-control" id="nomor_pegawai" name="nomor_pegawai"
                              value="<?= $data_pegawai->nomor_pegawai ?>">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Tanggal Bergabung</label>
                          <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung"
                              value="<?= $data_pegawai->tanggal_bergabung ?>">
                      </div>
                      <div class="mb-3">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </form>
              </div>
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->