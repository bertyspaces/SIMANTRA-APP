<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<!-- Data ratting krteria -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Rating Kriteria</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Rating Kriteria</a></li>
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
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Keterngan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; foreach ($list_rating as $rating) {?>
                                <tr>
                                    <td><?= $i++?></td>
                                    <td><?=$rating->kode?></td>
                                    <td><?=$rating->kriteria?></td>
                                    <td><?=$rating->bobot?></td>
                                    <td><?=$rating->keterangan?></td>
                                </tr>
                               
                          <?php  }?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?= $this->endSection() ?>