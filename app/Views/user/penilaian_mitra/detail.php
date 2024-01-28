<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Mitra Kegiatan <?= $kegiatan['nama_kegiatan'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/kegiatan_mitra">Kegiatan Mitra</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <?php if (session()->getFlashdata('pesan_error')) : ?>

        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Gagal Menambahkan</h5>
            <?= session()->getFlashdata('pesan_error'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('pesan_tambah')) : ?>

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Penilaian Mitra Berhasil</h5>
            <?= session()->getFlashdata('pesan_tambah'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('pesan_edit')) : ?>

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Update Penilaian Mitra</h5>
            <?= session()->getFlashdata('pesan_edit'); ?>
        </div>
    <?php endif; ?>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title"><?= $keterangan ?></h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                    <th>Batas Waktu Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($mitra as $l) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $l['nik'] ?></td>
                                        <td><?= $l['nama_mitra'] ?></td>

                                        <?php if ($l['status'] == 'belum dinilai') { ?>
                                            <td><a href="<?= base_url() ?>penilaian/mitra/<?= $l['id_kegiatan_mitra'] ?>/<?= $kegiatan['id_kegiatan'] ?>" class="btn btn-danger">Input Nilai</a>
                                            <?php } else { ?>
                                            <td><a href="<?= base_url() ?>penilaian/edit/<?= $l['id_kegiatan_mitra'] ?>/<?= $kegiatan['id_kegiatan'] ?>" class="btn btn-warning">Edit Nilai</a>
                                            <?php } ?>

                                            </td>
                                            <td>Batas Waktu Edit</td>

                                    </tr>
                                <?php  } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>