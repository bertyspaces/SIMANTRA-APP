<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Bobot Kriteria</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="<?= base_url() ?>bobot_kriteria/simpan" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control " placeholder="Kode">


                    </div>

                    <div class="form-group">
                        <label>Kriteria</label>
                        <input type="text" name="kriteria" class=" form-control " placeholder="Kriteria" required>

                    </div>
                    <div class="form-group">
                        <label>Bobot</label>
                        <input type="number" name="bobot" class=" form-control " placeholder="Bobot" required>

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