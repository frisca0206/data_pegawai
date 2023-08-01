<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <h1>Data Pegawai</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Nomor Pegawai</th>
                    <th scope="col">Tanggal Bergabung</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_data_pegawai as $pegawai) : ?>
                    <tr>
                        <td><?= $pegawai->nama_pegawai ?></td>
                        <td><?= $pegawai->nomor_pegawai ?></td>
                        <td><?= $pegawai->tanggal_bergabung ?></td>
                        <td><a href="<?= base_url('edit_data_pegawai').'/'.$pegawai->id ?>" class="btn btn-info btn-sm"> Update</a> <a href="<?= base_url('delete_data_pegawai').'/'.$pegawai->id ?>" class="btn btn-info btn-sm"> Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_pegawai') ?>" class="btn btn-primary"> Tambah Data Pegawai</a>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>

</html>