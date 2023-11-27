<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kegiatan BPS Kota Pekalongan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
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
                        <a href="" class="btn btn-secondary "><i class="fas fa-save"></i> Cetak</a>
                        <a href="<?= base_url() ?>kegiatan/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
                        <table id="example1" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Divisi</th>
                                    <th>Periode</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kegiatan as $k) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $k['nama_kegiatan'] ?>
                                        </td>
                                        <td><?= $k['divisi'] ?></td>
                                        <td> <?= $k['periode'] ?></td>
                                        <td>

                                            <a href="<?= base_url() ?>kegiatan/edit/<?= $k['id_kegiatan'] ?>" class="btn btn-warning">
                                                <i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?= base_url() ?>kegiatan/delete/<?= $k['id_kegiatan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus kegiatan ini?')"><i class="fas fa-trash"></i> Hapus</a>
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