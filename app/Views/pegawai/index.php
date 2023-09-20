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

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hello !</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('pegawai-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="pegawai_table" class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>Nama Pegawai</th>
                                        <th>Nomor Pegawai</th>
                                        <th>Tanggal Bergabung</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_data_pegawai as $pegawai) : ?>
                                    <tr>
                                        
                                        <td><?= $pegawai['nama_pegawai'] ?></td>
                                        <td><?= $pegawai['nomor_pegawai'] ?></td>
                                        <td><?= $pegawai['tanggal_bergabung'] ?></td>
                                        <td>
                                            <a href="<?= url_to('pegawai-edit', $pegawai['id'])?>"
                                                class="btn btn-primary btn-sm"> Update</a>
                                            <a href="<?= url_to('pegawai-delete', $pegawai['id'])?>"
                                                class="btn btn-danger btn-sm"> Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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