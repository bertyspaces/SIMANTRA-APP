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

            <?php $validation = \Config\Services::validation(); ?>
            <form action="<?= base_url() ?>penilaian/simpan" method="post">
                <div class="card-body">
                    <?php if (isset($data)) {
                        dd($data);
                    }; ?>
                    <?php if (session()->has('errors')) : ?>

                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Input Penilaian Gagal</h5>
                            Nilai tidak boleh kosong
                        </div>
                    <?php endif ?>
                    <table class="table table-bordered table-hover">

                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <th width="40%">Nama Mitra</th>
                                <td><?= $data_mitra->nama_mitra ?></td>
                                <input type="text" hidden value="<?= $data_mitra->id_kegiatan_mitra ?>" class="form-control" id="exampleInputEmail1" name="id_kegiatan_mitra">
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <th width="40%">Kegiatan</th>
                                <td><?= $data_mitra->nama_kegiatan ?></td>
                            </tr>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <th width="40%">Penilai</th>
                                <td><?= user()->username ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="form-group">
                        <?php foreach ($penilaian as $p => $value) { ?>

                            <div class="form-group">
                                <label><?= $p ?></label>
                                <select class="form-control" name="nilai[]">
                                    <option disabled selected>--Pilih Nilai--</option>
                                    <?php foreach ($value as $list => $kriteria) { ?>
                                        <option value="<?= $kriteria['id_rating_kriteria'] ?>"><?= $kriteria['bobot'] ?> - <?= $kriteria['keterangan'] ?></option>

                                    <?php } ?>
                                </select>
                            </div>


                        <?php } ?>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>

</section>

<?= $this->endSection() ?>