<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('pegawai-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="pegawai_id" value="<?= $pegawai['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_pegawai"> Nama Pegawai </label>
                                            <input type="text" class="form-control" id="nama_pegawai"
                                                name="nama_pegawai" value="<?= $pegawai['nama_pegawai'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_pegawai">Nomor Pegawai </label>
                                            <input type="text" class="form-control" id="nomor_pegawai"
                                                name="nomor_pegawai" value="<?= $pegawai['nomor_pegawai'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_bergabung"> Tanggal Bergabung </label>
                                            <input type="date" class="form-control" id="tanggal_bergabung"
                                                name="tanggal_bergabung" value="<?= $pegawai['tanggal_bergabung'] ?>"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('pegawai') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Data
                                        Pegawai</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>


<?= $this->endSection('content'); ?>