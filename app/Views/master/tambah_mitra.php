<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<div class="card shadow mb-4">

    <div class="card-body">
        <?php
        if (validation_errors()) {
        ?>
            <div class="alert alert-warning" role="alert">
                <?php echo validation_errors(); ?>
            </div>
        <?php
        }
        ?>
        <form class="user" action="<?= base_url(); ?>mitra/save" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Nik" value="<?= set_value('nik') ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nama_mitra" name="nama_mitra" placeholder="Nama Mitra" value="<?= set_value('nama_mitra') ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= set_value('jenis_kelamin') ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir " value="<?= set_value('tanggal_lahir') ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="umur" name="umur" placeholder="Umur" value="<?= set_value('umur') ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= set_value('pendidikan') ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>