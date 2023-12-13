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


                                                <td><a href="<?= base_url() ?>kegiatan_mitra/hapus/<?= $l['id_kegiatan_mitra'] ?>/ <?= $kegiatan['id_kegiatan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus mitra ini?')">Hapus</a>
                                        </td>
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


                                                <td><a href="<?= base_url() ?>kegiatan_mitra/hapus/<?= $p['id_kegiatan_mitra'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus mitra ini?')">Hapus</a>
                                        </td>
                                            </tr>
                                        <?php  } ?>

                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane active" id="settings">
                                <form class="form-horizontal" action="<?= base_url() ?>kegiatan_mitra/simpan/<?=$kegiatan['id_kegiatan']?>" method="post">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nik</label>
                                        <div class="col-sm-10    ">
                                            <input type="text"  name="nik" maxlength="16" class="form-control" id="nik" placeholder="NIk"> 
                                            
                                        </div>
                                        <!-- <div class="col-sm-1">
                                          
                                            <span><a type="submit" class="btn btn-danger btn-cari"><i class="fa fa-search"></i></a></span>
                                        </div> -->
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Mitra</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="nama_mitra" maxlength="16" class="form-control" id="nama_mitra" placeholder="Nama Mitra" readonly> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName"  class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="kategori">
                                                <option value="" hidden  selected disabled></option>
                                                <option value="lapangan">Mitra Lapangan</option>
                                                <option value="pengolahan">Mitra Pengolahan</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName"  class="col-sm-2 col-form-label">Penanggung Jawab</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="pj">
                                               
                                                
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