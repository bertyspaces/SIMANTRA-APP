<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Mitra Lapangan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="<?= base_url() ?>data_mitra/update" method="post">
                <div class="card-body">
                    <input type="hidden" name="nik" value="<?= $data_mitra['nik']; ?>">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" value="<?= $data_mitra['nik']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama Mitra</label>
                        <input type="text" name="nama_mitra" id="nama_mitra" class="form-control" placeholder="Nama Mitra" value="<?= $data_mitra['nama_mitra']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input name="jenis_kelamin" value="Laki-Laki" class="form-check-input <?= ($data_mitra['jenis_kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?>" type="radio" name="radio1">
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input name="jenis_kelamin" value="Perempuan" class="form-check-input <?= ($data_mitra['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>" type="radio" name="radio1" checked="">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $data_mitra['tanggal_lahir']; ?>" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" name="umur" id="umur" class="form-control" value="<?= $data_mitra['umur']; ?>" placeholder="Umur" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class="form-control" name="pendidikan" required>
                            <option disabled selected>--Pilih Pendidikan Terakhir--</option>
                            <option value="SMA/SMK <?= ($data_mitra['pendidikan'] == 'SMA/SMK') ? 'selected' : ''; ?>">SMA</option>
                            <option value="DI/DII/DIII <?= ($data_mitra['pendidikan'] == 'DI/DII/DIII') ? 'selected' : ''; ?>">DI/DII/DIII</option>
                            <option value="S1 <?= ($data_mitra['pendidikan'] == 'S1') ? 'selected' : ''; ?>">S1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= $data_mitra['email']; ?>" placeholder="Email">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
</section>

<?= $this->endSection() ?>