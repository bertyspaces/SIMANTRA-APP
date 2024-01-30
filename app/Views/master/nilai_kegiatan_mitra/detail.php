<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rekap Nilai Mitra | <?= $kegiatan['nama_kegiatan'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Nilai Kegiatan Mitra</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div>
     </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active " href="#activity" data-toggle="tab">Mitra Lapangan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Mitra Pengolahan</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="activity">

                                        <!-- TABEL NILAI MITRA LAPANGAN-->
                                        <section class="content-header">
                                            <div class="container-fluid">
                                                <div class="row mb-2">
                                                    <div class="col-sm-6">
                                                        <h1>Nilai Kegiatan Mitra</h1>
                                                    </div>
                                                </div>
                                            </div><!-- /.container-fluid -->
                                        </section>
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                <?php if (!empty($hasil_penilaian_lapangan)) { ?>
                                                                    <a href="<?= base_url() ?>nilai_kegiatan_mitra/cetak_nilai_mitra_lapangan/<?= $kegiatan['id_kegiatan'] ?>" disabled class="btn btn-success" target="_blank"><i class="fas fa-save"></i> Cetak</a>
                                                                <?php  } else { ?>
                                                                    <button class="btn btn-secondary" target="_blank"><i class="fas fa-save"></i> Cetak</button>
                                                                <?php  } ?>
                                                                <table class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Mitra</th>
                                                                            <th>Nilai Kinerja</th>
                                                                            <th>Nilai Kerjasama</th>
                                                                            <th>Nilai Kualitas Data</th>
                                                                            <th>Total</th>
                                                                            <th>Penilai</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1 ?>
                                                                        <?php if (empty($hasil_penilaian_lapangan)) { ?>
                                                                            <tr>
                                                                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                                                                            </tr>
                                                                        <?php  } ?>
                                                                        <?php foreach ($hasil_penilaian_lapangan as $l => $value) { ?>
                                                                            <?php $total = 0; ?>
                                                                            <tr>
                                                                                <td><?= $i++ ?></td>
                                                                                <td><?= $l ?></td>
                                                                                <?php foreach ($value as $nilai => $n) { ?>
                                                                                    <td><?= $n['keterangan'] ?></td>
                                                                                    <?php $total += $n['keterangan'] ?>
                                                                                    <?php $penilai=$n['penilai'] ?>
                                                                                
                                                                                <?php  } ?>
                                                                                <td><?= $total ?></td>
                                                                                <td><?= $penilai ?></td>
                                                                                
                                                                               
                                                                                
                                                                             
                                                                            <?php  } ?>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <section class="content-header">
                                            <div class="container-fluid">
                                                <div class="row mb-2">
                                                    <div class="col-sm-6">
                                                        <h1>Ranking Kinerja Mitra</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                <?php if (!empty($hasil_penilaian_lapangan)) { ?>
                                                                    <a href="<?= base_url() ?>nilai_kegiatan_mitra/cetak_rangking_lapangan/<?= $kegiatan['id_kegiatan'] ?>" disabled class="btn btn-success" target="_blank"><i class="fas fa-save"></i> Cetak</a>
                                                                <?php  } else { ?>
                                                                    <button class="btn btn-secondary" target="_blank"><i class="fas fa-save"></i> Cetak</button>
                                                                <?php  } ?>
                                                                <table id="" class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Peringkat</th>
                                                                            <th>Nama Mitra</th>
                                                                            <th>Nilai</th>
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if (empty($ranking_lapangan)) { ?>
                                                                            <tr>
                                                                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                                                                            </tr>
                                                                        <?php  } ?>
                                                                        <?php $i = 1 ?>
                                                                        <?php foreach ($ranking_lapangan as $nama => $score) { ?>
                                                                            <?php $total = 0; ?>
                                                                            <tr>
                                                                                <td><?= $i++ ?></td>
                                                                                <td><?= $nama ?></td>
                                                                                <td><?= $score ?></td>
                                                                               
                                                                            <?php  } ?>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <!-- TABEL MITRA PENGOLAHAN-->
                                    <div class="tab-pane" id="timeline">
                                        <section class="content-header">
                                            <div class="container-fluid">
                                                <div class="row mb-2">
                                                    <div class="col-sm-6">
                                                        <h1>Nilai Kinerja Mitra</h1>
                                                    </div>
                                                </div>
                                            </div><!-- /.container-fluid -->
                                        </section>
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                <?php if (!empty($hasil_penilaian_pengolahan)) { ?>
                                                                    <a href="<?= base_url() ?>nilai_kegiatan_mitra/cetak_nilai_mitra_pengolahan/<?= $kegiatan['id_kegiatan'] ?>" disabled class="btn btn-success" target="_blank"><i class="fas fa-save"></i> Cetak</a>
                                                                <?php  } else { ?>
                                                                    <button class="btn btn-secondary" target="_blank"><i class="fas fa-save"></i> Cetak</button>
                                                                <?php  } ?>
                                                                <table id="example1" class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Mitra</th>
                                                                            <th>Nilai Kinerja</th>
                                                                            <th>Nilai Kerjasama</th>
                                                                            <th>Nilai Kualitas Data</th>
                                                                            <th>Total</th>
                                                                            <th>Penilai</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1 ?>
                                                                        <?php if (empty($hasil_penilaian_pengolahan)) { ?>
                                                                            <tr>
                                                                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                                                                            </tr>
                                                                        <?php  } ?>
                                                                        <?php foreach ($hasil_penilaian_pengolahan as $l => $value) { ?>
                                                                            <?php $total = 0; ?>
                                                                            <tr>
                                                                                <td><?= $i++ ?></td>
                                                                                <td><?= $l ?></td>
                                                                                <?php foreach ($value as $nilai => $n) { ?>
                                                                                    <td><?= $n['keterangan'] ?></td>
                                                                                    <?php $total += $n['keterangan'] ?>
                                                                                    <?php $penilai=$n['penilai'] ?>
                                                                                <?php  } ?>

                                                                                <td><?= $total ?></td>
                                                                                <td><?= $penilai ?></td>
                                                                                
                                                                            <?php  } ?>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="content-header">
                                            <div class="container-fluid">
                                                <div class="row mb-2">
                                                    <div class="col-sm-6">
                                                        <h1>Ranking Kinerja Mitra</h1>
                                                    </div>
                                                </div>
                                            </div><!-- /.container-fluid -->
                                        </section>
                                        <section class="content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                <?php if (!empty($hasil_penilaian_pengolahan)) { ?>
                                                                    <a href="<?= base_url() ?>nilai_kegiatan_mitra/cetak_rangking_pengolahan/<?= $kegiatan['id_kegiatan'] ?>" disabled class="btn btn-success" target="_blank"><i class="fas fa-save"></i> Cetak</a>
                                                                <?php  } else { ?>
                                                                    <button class="btn btn-secondary" target="_blank"><i class="fas fa-save"></i> Cetak</button>
                                                                <?php  } ?>

                                                                <table id="example1" class="table table-bordered table-hover">

                                                                    <thead>
                                                                        <tr>
                                                                            <th>Peringkat</th>
                                                                            <th>Nama Mitra</th>
                                                                            <th>Nilai</th>
                                                                          
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if (empty($ranking_pengolahan)) { ?>

                                                                            <tr>
                                                                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                                                                            </tr>
                                                                        <?php  } ?>
                                                                        <?php $i = 1 ?>
                                                                        <?php foreach ($ranking_pengolahan as $nama => $score) { ?>
                                                                            <?php $total = 0; ?>
                                                                            <tr>
                                                                                <td><?= $i++ ?></td>
                                                                                <td><?= $nama ?></td>
                                                                                <td><?= $score ?></td>
                                                                           
                                                                            <?php  } ?>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= $this->endSection() ?>