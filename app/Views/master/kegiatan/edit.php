<!-- app/Views/kegiatan/edit.php -->

<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Kegiatan</h3>
            </div>

            <form id="quickForm" action="<?= base_url() ?>kegiatan/update" method="post">
                <div class="card-body">
                    <!-- Tambahkan input hidden untuk menyimpan ID kegiatan -->
                    <input type="hidden" name="id_kegiatan" value="<?= $kegiatan['id_kegiatan']; ?>">

                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="Nama Kegiatan" value="<?= $kegiatan['nama_kegiatan']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi" required>
                            <option disabled>--Pilih Devisi Kegiatan--</option>
                            <option value="Statisi Produksi <?= ($kegiatan['divisi'] == 'Statisi Produksi') ? 'selected' : ''; ?>">Statisi Produksi</option>
                            <option value="Statisi Distribusi <?= ($kegiatan['divisi'] == 'Statisi Distribusi') ? 'selected' : ''; ?>">Statisi Distribusi</option>
                            <option value="Statisi Sosial <?= ($kegiatan['divisi'] == 'Statisi Sosial') ? 'selected' : ''; ?>">Statisi Sosial</option>
                            <option value="Nerwilis <?= ($kegiatan['divisi'] == 'Nerwilis') ? 'selected' : ''; ?>">Nerwilis</option>
                            <option value="IPDS  <?= ($kegiatan['divisi'] == 'IPDS') ? 'selected' : ''; ?>">IPDS</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Periode</label>
                        <input type="text" name="periode" class="form-control" id="periode" placeholder="Periode Kegiatan" value="<?= $kegiatan['periode']; ?>" required>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>