<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Bobot dan Kriteria</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Bobot Kriteria</a></li>
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
                <div class="card mb-1">
                    <?php if (session()->getFlashdata('pesan_tambah')) : ?>

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> data berhasil ditambahkan</h5>
                            <?= session()->getFlashdata('pesan_tambah'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <a href="<?= base_url() ?>bobot_kriteria/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($bobot_kriteria as $bk) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $bk['kode'] ?>
                                        </td>
                                        <td><?= $bk['kriteria'] ?></td>
                                        <td> <?= $bk['bobot'] ?></td>

                                        <td>

                                            <a href="<?= base_url() ?>bobot_kriteria/edit/<?= $bk['kode'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="<?= base_url() ?>bobot_kriteria/hapus/<?= $bk['kode'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus mitra ini?')"><i class="fas fa-trash"></i>Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>

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