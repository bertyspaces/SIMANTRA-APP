<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rekap Nilai Mitra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="rekap_nilai_mitra">Rekap Nilai Mitra</a></li>
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
                                    <th>Jabatan</th>
                                    <th>Nilai Rata-Rata</th>
                                    <th>Jumlah Kegiatan</th>
                                    <th>Nilai Akhir </th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Marhellina Berty</td>
                                    <td>Mitra Pengolahan</td>
                                    <td>85</td>
                                    <td>4</td>
                                    <td>90</td>
                                    <td>
                                        <button type="button" class="btn btn-warning"><i class="b bi-trash-fill"></i></button></a>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                    </td>
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
    <!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>