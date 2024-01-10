<?= $this->extend('templates/index') ?>
<?= $this->section('konten-utama') ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kegiatan Mitra</h1>
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
                                    <th>divisi</th>
                                    <th>periode</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1 ?>
                                <?php foreach ($nilai_kegiatan_mitra as $nk) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><a href="<?= base_url('nilai_kegiatan_mitra/detail/') ?><?= $nk['id_kegiatan'] ?>"><?= $nk['nama_kegiatan'] ?></a></td>
                                        <td><?= $nk['divisi'] ?>
                                        </td>

                                        <td><?= $nk['periode'] ?> </td>
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