<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div>
                <h1 class="m-0">Sistem Manajemen Penilaian Mitra BPS Kota Pekalongan</h1>
                <p>Selamat Datang, Tim Penilai Mitra! Berikan Nilai Untuk Mitra</p>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $dinilai ?></h3>

                        <p>Mitra Yang Sudah Dinilai</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url('penilaian') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $belum ?><sup style="font-size: 20px"></sup></h3>

                        <p>Mitra Belum Ternilai</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('penilaian') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

        </div>
        <!-- <div class="row">
            
            <section class="col-md-4">


                <div class="card card-default">
                    <div class="card-body">


                        <p class="text-center">
                            <strong>Progress Penilaian</strong>
                        </p>
                        <?php $i = 1 ?>
                                    <?php foreach ($kegiatan_mitra as $k) { ?>
                        <div class="progress-group">
                        <?= $k->nama_kegiatan ?>
                            <span class="float-right"><b>160</b>/200</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: 80%"></div>
                            </div>
                        </div>
                        <?php  } ?>

                    </div>
                </div>
            </section>
        </div> -->



    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>



<?= $this->endSection() ?>