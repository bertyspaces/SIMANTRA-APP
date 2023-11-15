<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Mitra BPS Kota Pekalongan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Mitra</a></li>
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
                    <?php if (session()->getFlashdata('pesan_tambah')) : ?>

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> data berhasil ditambahkan</h5>
                            <?= session()->getFlashdata('pesan_tambah'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="" class="btn btn-success">Import</a>
                        <a href="<?= base_url() ?>mitra_lapangan/tambah" class="btn btn-primary">Tambah Mitra</a>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur</th>
                                    <th>Pendidikan</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_mitra as $ml) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $ml['nik'] ?>
                                        </td>
                                        <td><?= $ml['nama_mitra'] ?></td>
                                        <td> <?= $ml['jenis_kelamin'] ?></td>
                                        <td> <?= $ml['tanggal_lahir'] ?></td>
                                        <td> <?= $ml['umur'] ?></td>
                                        <td> <?= $ml['pendidikan'] ?></td>
                                        <td> <?= $ml['email'] ?></td>
                                
                                        <td>

                                            <a href="<?= base_url() ?>mitra_lapangan/edit/<?= $ml['nik'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url() ?>mitra_lapangan/edit/<?= $ml['nik'] ?>" class="btn btn-danger">Hapus</a>
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