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
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Tambah Data</a></li>
                            <li class="nav-item"><a class="nav-link " href="#activity" data-toggle="tab">Mitra Lapangan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Mitra Pengolahan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane " id="activity">

                                <!-- <a href="<?= base_url() ?>mitra_lapangan/tambah" class="btn btn-primary">Tambah data</a> -->
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama</th>

                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($lapangan as $l) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $l['nik'] ?></td>
                                                <td><?= $l['nama_mitra'] ?></td>


                                                <td>*tambahin tombol edit sama hapus sendiri yaaa :></td>
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
                                            <th>Nik</th>
                                            <th>Nama</th>

                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($pengolahan as $p) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $p['nik'] ?></td>
                                                <td><?= $p['nama_mitra'] ?></td>


                                                <td>*tambahin tombol edit sama hapus sendiri yaaa :></td>
                                            </tr>
                                        <?php  } ?>

                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane active" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nik</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="NIk">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                
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