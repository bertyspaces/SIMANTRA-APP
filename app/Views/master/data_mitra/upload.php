<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Upload File Data Mitra </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="<?= base_url() ?>data_mitra/upload" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <?php echo form_open_multipart('data_mitra/upload'); ?>

                    <label for="excel_file">Choose Excel File:</label>
                    <input type="file" name="excel_file" id="excel_file" required>
                    <br>
                    <button type="submit" class="btn btn-primary">upload</button>

                    <?php echo form_close(); ?>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>