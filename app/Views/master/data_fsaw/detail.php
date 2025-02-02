<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Penilaian Mitra | <?= $kegiatan['nama_kegiatan'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/data_fsaw">Penilaian Mitra
                        </a></li>
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
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">

                            <li class="nav-item"><a class="nav-link active " href="#activity" data-toggle="tab">Mitra Lapangan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Mitra Pengolahan</a></li>
                        </ul>
                    </div>

                    <!-- DATA PENILAIAN FSAW MITRA LAPANGAN -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active " id="activity">

                                <!-- Penilaian Dengan Bobot Kriteria MITRA LAPANGAN -->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Penilaian Dengan Bobot Kriteria</h1>
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Nilai Kinerja</th>
                                                                    <th>Nilai Kerja Sama</th>
                                                                    <th>Nilai Kualitas Data</th>
                                                                    <th>Penilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1 ?>
                                                                <?php if (empty($lapangan)) { ?>
                                                                    <tr>
                                                                        <td colspan="5" class="text-center">Data Masih Kosong</td>
                                                                    </tr>
                                                                <?php  } ?>
                                                                <?php foreach ($lapangan as $l => $value) { ?>
                                                                    <tr>
                                                                        <td><?= $i++ ?></td>
                                                                        <td><?= $l ?></td>
                                                                        <?php foreach ($value as $nilai => $n) { ?>
                                                                            <td><?= $n['keterangan'] ?></td>
                                                                            <?php $penilai=$n['penilai'] ?>
                                                                        <?php  } ?>
                                                                        <td><?= $penilai ?></td>
                                                                                
                                                                    
                                                                    </tr>
                                                                <?php  } ?>
                                                            </tbody>
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan hasil dari input nilai Mitra Lapangan</p>
                                                            </i>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </section>

                                <!-- Hasil Normalisasi Nilai MITRA LAPANGAN -->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Hasil Normalisasi Nilai</h1>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Nilai Kinerja</th>
                                                                    <th>Nilai Kerja Sama</th>
                                                                    <th>Nilai Kualitas Data</th>
                                                                    <th>Penilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1 ?>
                                                                <?php if (empty($normalisasi_lapangan)) { ?>
                                                                    <tr>
                                                                        <td colspan="5" class="text-center">Data Masih Kosong</td>
                                                                    </tr>
                                                                <?php  } ?>
                                                                <?php foreach ($normalisasi_lapangan as $l => $value) { ?>
                                                                    <tr>
                                                                        <td><?= $i++ ?></td>
                                                                        <td><?= $l ?></td>
                                                                        <?php foreach ($value as $nilai => $n) { ?>
                                                                            <td><?= $n['keterangan']  ?></td>
                                                                            <?php $penilai=$n['penilai'] ?>
                                                                        <?php  } ?>
                                                                        <td><?= $penilai ?></td>
                                                                                
                                                                    </tr>
                                                                <?php  } ?>
                                                            </tbody>
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan hasil normalisasi nilai Mitra Lapangan</p>
                                                            </i>
                                                            <i>
                                                                <p>Cara hitung : nilai 1 kolom / nilai tertinggi dari kolom</p>
                                                            </i>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Hasil Perhitungan Fuzzy SAW MITRA LAPANGAN -->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Hasil Perhitungan Nilai Kinerja Mitra</h1>
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Nilai Kinerja</th>
                                                                    <th>Nilai Kerja Sama</th>
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
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan hasil perhitungan nilai kinerja Mitra Lapangan setelah di normalisasikan</p>
                                                            </i>
                                                            <i>
                                                                <p>Cara hitung : hasil nilai normalisasi*bobot nilai</p>
                                                            </i>
                                                            <i>
                                                                <p>Bobot Nilai : K1 = 30, K2 = 30, K4 = 40</p>
                                                            </i>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- RANGKING KINERJA  MITRA LAPANGAN -->
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Score</th>
                                                                
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
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan Rangking Kinerja Mitra Lapangan, Jika terdapat nilai yang sama, maka peringkat akan ditentukan dengan besar nilai di kriteria ke 3 atau K3 yaitu Nilai Kualitas Data</p>
                                                            </i>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>


                            <!-- DATA PENILAIAN FSAW MITRA PENGOLAHAN -->
                            <div class="tab-pane" id="timeline">
                                <!-- Penilaian Dengan Bobot Kriteria MITRA PENGOLAHAN -->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Penilaian Dengan Bobot Kriteria</h1>
                                            </div>
                                            <div class="col-sm-6">
                                                <ol class="breadcrumb float-sm-right">
                                                    <li class="breadcrumb-item"><a href="#">Fuzzy SAW</a></li>
                                                    <li class="breadcrumb-item active">DataTables</li>
                                                </ol>
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Nilai Kinerja</th>
                                                                    <th>Nilai Kerjasama</th>
                                                                    <th>Nilai Kualitas Data</th>
                                                                    <th>Penilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                <?php $i = 1 ?>
                                                                <?php if (empty($pengolahan)) { ?>
                                                                    <tr>
                                                                        <td colspan="5" class="text-center">Data Masih Kosong</td>
                                                                    </tr>
                                                                <?php  } ?>
                                                                <?php foreach ($pengolahan as $l => $value) { ?>
                                                                    <tr>
                                                                        <td><?= $i++ ?></td>
                                                                        <td><?= $l ?></td>
                                                                        <?php foreach ($value as $nilai => $n) { ?>
                                                                            <td><?= $n['keterangan'] ?></td>
                                                                            <?php $penilai=$n['penilai'] ?>
                                                                        <?php  } ?>
                                                                        <td><?= $penilai ?></td>
                                                                                

                                                                    </tr>
                                                                <?php  } ?>


                                                            </tbody>
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan hasil dari input nilai Mitra Pengolahan</p>
                                                            </i>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>

                                <!-- Hasil Normalisasi Nilai MITRA PENGOLAHAN-->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Hasil Normalisasi Nilai</h1>
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Nilai Kinerja</th>
                                                                    <th>Nilai Kerjasama</th>
                                                                    <th>Nilai Kualitas Data</th>
                                                                    <th>Penilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                <?php $i = 1 ?>
                                                                <?php if (empty($normalisasi_pengolahan)) { ?>
                                                                    <tr>
                                                                        <td colspan="5" class="text-center">Data Masih Kosong</td>
                                                                    </tr>
                                                                <?php  } ?>
                                                                <?php foreach ($normalisasi_pengolahan as $l => $value) { ?>
                                                                    <tr>
                                                                        <td><?= $i++ ?></td>
                                                                        <td><?= $l ?></td>
                                                                        <?php foreach ($value as $nilai => $n) { ?>
                                                                            <td><?= $n['keterangan'] ?></td>
                                                                            <?php $penilai=$n['penilai'] ?>
                                                                        <?php  } ?>
                                                                        <td><?= $penilai ?></td>
                                                                                

                                                                    </tr>
                                                                <?php  } ?>


                                                            </tbody>
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan hasil normalisasi nilai Mitra Pengolahan</p>
                                                            </i>
                                                            <i>
                                                                <p>Cara hitung : nilai 1 kolom / nilai tertinggi dari kolom</p>
                                                            </i>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <!-- Hasil Perhitungan Fuzzy SAW  MITRA LAPANGAN-->
                                <section class="content-header">
                                    <div class="container-fluid">
                                        <div class="row mb-2">
                                            <div class="col-sm-6">
                                                <h1>Hasil Perhitungan Nilai Dengan Fuzzy SAW</h1>
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>Nilai Kinerja</th>
                                                                    <th>Nilai Kerja Sama</th>
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

                                <!-- RANGKING KINERJA MITRA PENGOLAHAN-->
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
                                                        <table id="" class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Mitra</th>
                                                                    <th>score</th>
                                                                    <th>Penilai</th>
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
                                                                        <td>Nama Penilai</td>
                                                                    <?php  } ?>
                                                                    </tr>
                                                            </tbody>
                                                            <i>
                                                                <p>Keterangan : Tabel ini merupakan Rangking Kinerja Mitra Pengolahan, Jika terdapat nilai yang sama, maka peringkat akan ditentukan dengan besar nilai di kriteria ke 3 atau K3 yaitu Nilai Kualitas Data</p>
                                                            </i>
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