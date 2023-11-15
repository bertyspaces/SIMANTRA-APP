<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Mitra Lapangan</h3>
            </div>

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

        </div>
</section>

<?= $this->endSection() ?>