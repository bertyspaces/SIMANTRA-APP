<!-- app/Views/kegiatan/delete.php -->

<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-danger">
            <div class="card-header">
                <h3 class="card-title">Konfirmasi Penghapusan Data Mitra</h3>
            </div>

            <!-- Konfirmasi penghapusan -->
            <div class="card-body">
                <p>Apakah Anda yakin untuk menghapus mitra ini?</p>
                <p>Nik: <?= $data_mitra['nik']; ?></p>
                <p>Nama Mitra: <?= $data_mitra['nama_mitra']; ?></p>
                <p>Jenis Kelamin: <?= $data_mitra['jenis_kelamin']; ?></p>
                <p>Tanggal Lahir: <?= $data_mitra['tanggal_lahir']; ?></p>
                <p>Umur: <?= $data_mitra['umur']; ?></p>
                <p>Pendidikan: <?= $data_mitra['pendidikan']; ?></p>
                <p>Email: <?= $data_mitra['email']; ?></p>

                <form action="/data_mitra/delete/<?= $data_mitra['nik']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    <a href="/data_mitra" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>