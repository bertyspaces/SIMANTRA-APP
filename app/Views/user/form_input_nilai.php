<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">



        <!-- /Form Penilaian-->
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Input Penilaian</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form action="<?= base_url() ?>penilaian/simpan" method="post">
                <div class="card-body">
                    <table class="table table-bordered table-hover">

                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <th width="40%">Nama Mitra</th>
                                <td><?=$data_mitra->nama_mitra?></td>
                                <input type="text" hidden value="<?=$data_mitra->id_kegiatan_mitra?>" class="form-control" id="exampleInputEmail1" name="id_kegiatan_mitra" >
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <th width="40%">Kegiatan</th>
                                <td><?=$data_mitra->nama_kegiatan?></td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <th width="40%">Penilai</th>
                                <td><?= user()->username ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="form-group">
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Nama Mitra</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Mitra">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kegiatan</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kegiatan Yang Diikuti">
                        </div> -->
                        <?php foreach ($penilaian as $p=>$value) { ?>
                            
                            <div class="form-group">
                                <label><?=$p ?></label>
                                <select  class="form-control" name="nilai[]">
                                    <option disabled selected>--Pilih Nilai--</option>
                                <?php foreach ($value as $list=>$kriteria) { ?>
                                    <option value="<?=$kriteria['id_rating_kriteria']?>"><?=$kriteria['bobot']?> - <?= $kriteria['keterangan']?></option>
                                   
                                    <?php } ?>
                                </select>
                            </div>
                       
                       
                        <?php } ?>
                        <!-- <div class="form-group">
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

                        </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>

</section>

<?= $this->endSection() ?>