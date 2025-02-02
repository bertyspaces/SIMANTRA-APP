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
            <h5><i class="icon fas fa-check"></i> Data Berhasil Ditambahkan</h5>
            <?= session()->getFlashdata('pesan_tambah'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('pesan_hapus')) : ?>

        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Data Berhasil Dihapus</h5>
            <?= session()->getFlashdata('pesan_hapus'); ?>
        </div>
    <?php endif; ?>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <?php if (in_groups('admin')) { ?>
                                <li class="nav-item"><a class="nav-link <?= in_groups('admin') ? 'active' : '' ?>" href="#settings" data-toggle="tab">Tambah Data</a></li>
                            <?php } ?>
                            <li class="nav-item"><a class="nav-link <?= in_groups('kepala') ? 'active' : '' ?> " href="#activity" data-toggle="tab">Mitra Lapangan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Mitra Pengolahan</a></li>

                        </ul>
                    </div>
                    <div class="card-body">

                        <div class="tab-content">
                            <div class="tab-pane  <?= in_groups('kepala') ? 'active' : '' ?>" id="activity">
                                <?php if (!empty($lapangan)) { ?>
                                    <a href="<?= base_url() ?>kegiatan_mitra/cetak_mitra_lapangan/<?= $kegiatan['id_kegiatan'] ?>" disabled class="btn btn-success" target="_blank"><i class="fas fa-save"></i> Cetak</a>
                                <?php  } else { ?>
                                    <button class="btn btn-secondary" target="_blank"><i class="fas fa-save"></i> Cetak</button>
                                <?php  } ?>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <?php if (in_groups('admin')) { ?>
                                                <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php if (empty($lapangan)) { ?>
                                            <tr>
                                                <td colspan="5" class="text-center">Data Masih Kosong</td>
                                            </tr>
                                        <?php  } ?>
                                        <?php foreach ($lapangan as $l) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $l['nik'] ?></td>
                                                <td><?= $l['nama_mitra'] ?></td>
                                                <?php if (in_groups('admin')) { ?>
                                                    <td><a href="<?= base_url() ?>kegiatan_mitra/hapus/<?= $l['id_kegiatan_mitra'] ?>/ <?= $kegiatan['id_kegiatan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus mitra ini?')">Hapus</a>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="timeline">
                                <?php if (!empty($pengolahan)) { ?>
                                    <a href="<?= base_url() ?>kegiatan_mitra/cetak_mitra_pengolahan/<?= $kegiatan['id_kegiatan'] ?>" disabled class="btn btn-success" target="_blank"><i class="fas fa-save"></i> Cetak</a>
                                <?php  } else { ?>
                                    <button class="btn btn-secondary" target="_blank"><i class="fas fa-save"></i> Cetak</button>
                                <?php  } ?>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <?php if (in_groups('admin')) { ?>
                                                <th>Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php if (empty($pengolahan)) { ?>
                                            <tr>
                                                <td colspan="5" class="text-center">Data Masih Kosong</td>
                                            </tr>
                                        <?php  } ?>
                                        <?php foreach ($pengolahan as $p) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $p['nik'] ?></td>
                                                <td><?= $p['nama_mitra'] ?></td>

                                                <?php if (in_groups('admin')) { ?>
                                                    <td><a href="<?= base_url() ?>kegiatan_mitra/hapus/<?= $p['id_kegiatan_mitra'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus mitra ini?')">Hapus</a>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php  } ?>

                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane <?= in_groups('admin') ? 'active' : '' ?>" id="settings">
                                <form class="form-horizontal" action="<?= base_url() ?>kegiatan_mitra/simpan/<?= $kegiatan['id_kegiatan'] ?>" method="post">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10    ">
                                            <input type="text" name="nik" maxlength="16" class="form-control" id="nik" placeholder="NIK" required>

                                        </div>
                                        <!-- <div class="col-sm-1">
                                          
                                            <span><a type="submit" class="btn btn-danger btn-cari"><i class="fa fa-search"></i></a></span>
                                        </div> -->
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Mitra</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_mitra" maxlength="16" class="form-control" id="nama_mitra" placeholder="Nama Mitra" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="kategori" required>
                                                <option value="" hidden selected disabled></option>
                                                <option value="lapangan">Mitra Lapangan</option>
                                                <option value="pengolahan">Mitra Pengolahan</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="pj" required>


                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">tambah</button>
                                        </div>
                                    </div>
                                </form>

                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>