<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Mitra </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="<?= base_url() ?>data_mitra/simpan" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="NIK" maxlength="16" minlength="16" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Mitra</label>
                        <input type="text" name="nama_mitra" class="form-control" placeholder="Nama Mitra" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check" required>
                            <input name="jenis_kelamin" value="Laki-Laki" class="form-check-input" type="radio" name="radio1">
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input name="jenis_kelamin" value="Perempuan" class="form-check-input" type="radio" name="radio1">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" name="umur" class="form-control" placeholder="Umur" required>
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class="form-control" name="pendidikan" required>
                            <option disabled selected>--Pilih Pendidikan Terakhir--</option>
                            <option value="SMA/SMK">SMA</option>
                            <option value="DI/DII/DIII">DI/DII/DIII</option>
                            <option value="S1">S1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
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