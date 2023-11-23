<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Penilaian Mitra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Rekap</a></li>
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
                                    <th>Kegiatan</th>
                                    <th>Periode</th>
                                    <th>Penanggung Jawab</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                </tr>
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

</section>
<section class="content">
    <div class="container-fluid">


        <!-- /Form Penilaian-->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Input Penilaian</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Mitra</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Mitra">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kegiatan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kegiatan Yang Diikuti">
                        </div>
                        <div class="form-group">
                            <label>Nilai Kinerja</label>
                            <select class="form-control">
                                <option disabled selected>--Pilih Nilai--</option>
                                <option value="">5 - Sangat Baik</option>
                                <option value="">4 - Baik</option>
                                <option value="">3 - Cukup Baik</option>
                                <option value="">2 - Kurang Baik</option>
                                <option value="">1 - Tidak Baik</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nilai Kerjasama</label>
                            <select class="form-control">
                                <option disabled selected>--Pilih Nilai--</option>
                                <option value="">5 - Sangat Baik</option>
                                <option value="">4 - Baik</option>
                                <option value="">3 - Cukup Baik</option>
                                <option value="">2 - Kurang Baik</option>
                                <option value="">1 - Tidak Baik</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Nilai Kualitas Data</label>
                            <select class="form-control">
                                <option disabled selected>--Pilih Nilai--</option>
                                <option value="">5 - Sangat Baik</option>
                                <option value="">4 - Baik</option>
                                <option value="">3 - Cukup Baik</option>
                                <option value="">2 - Kurang Baik</option>
                                <option value="">1 - Tidak Baik</option>
                            </select>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>


        </div>
</section>
<?= $this->endSection() ?>