<!-- app/Views/kegiatan/delete.php -->

<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-danger">
            <div class="card-header">
                <h3 class="card-title">Konfirmasi Penghapusan Kegiatan</h3>
            </div>

            <!-- Konfirmasi penghapusan -->
            <div class="card-body">
                <p>Apakah Anda yakin untuk menghapus kegiatan ini?</p>
                <p>Nama Kegiatan: <?= $kegiatan['nama_kegiatan']; ?></p>
                <p>Divisi: <?= $kegiatan['divisi']; ?></p>
                <p>Periode: <?= $kegiatan['periode']; ?></p>

                <form action="/kegiatan/delete/<?= $kegiatan['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    <a href="/kegiatan" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>