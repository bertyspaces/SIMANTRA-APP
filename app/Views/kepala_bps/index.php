<?= $this->extend('templates/index'); ?>
<?= $this->Section('konten-utama') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div>
                <h1 class="m-0">Sistem Manajemen Penilaian Mitra BPS Kota Pekalongan</h1>
                <p>Halaman Admin</p>
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
                        <h3><?= $countKegiatan ?></h3>

                        <p>Jumlah Kegiatan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $countMitra ?></h3>

                        <p>Jumlah Mitra</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $countUser ?></h3>

                        <p>Jumlah Pengguna</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>