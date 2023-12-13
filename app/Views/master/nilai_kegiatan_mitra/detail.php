<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nilai Kegiatan Mitra | <?= $kegiatan['nama_kegiatan'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Nilai Kegiatan Mitra</a></li>
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
                                    <th>Nama Mitra</th>
                                    <th>Kegiatan</th>
                                    <th>Nilai Kinerja</th>
                                    <th>Nilai Kerjasama</th>
                                    <th>Nama Kualitas Data</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Marchellina Berty</td>
                                    <td>Regsosek 2022</td>
                                    <td>Sangat Baik</td>
                                    <td>Baik</td>
                                    <td>Baik</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Input</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

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

                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mitra</th>
                                            <th>Nilai Kinerja</th>
                                            <th>Nilai Kerjasama</th>
                                            <th>Nama Kualitas Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($lapangan as $l=>$value) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $l ?></td>
                                                <?php foreach ($value as $nilai=>$n) { ?>    
                                                <td><?= $n['keterangan'] ?></td>
                                                <?php  } ?>

                                               
                                            </tr>
                                        <?php  } ?>

                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane" id="timeline">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mitra</th>
                                            <th>Kegiatan</th>
                                            <th>Nilai Kinerja</th>
                                            <th>Nilai Kerjasama</th>
                                            <th>Nama Kualitas Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

                                    </tbody>
                                </table>

                            </div>





                        </div>

                    </div>
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