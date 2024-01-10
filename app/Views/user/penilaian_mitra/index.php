<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Mitra Kegiatan Yang Akan Dinilai</h1>
                <p>Silahkan pilih kegiatan, yang mitranya akan dinilai!</p>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Kegiatan Mitra</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Divisi</th>
                                    <TH>Periode</TH>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($kegiatan_mitra as $k) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><a href="<?= base_url('penilaian/kegiatan/') ?><?= $k['id_kegiatan'] ?>"><?= $k['nama_kegiatan'] ?></a></td>
                                        <td><?= $k['divisi'] ?>
                                        </td>

                                        <td><?= $k['periode'] ?> </td>
                                    </tr>
                                <?php  } ?>



                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>