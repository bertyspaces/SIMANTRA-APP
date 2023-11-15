<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>
<!-- /Data Kegiatan -->
<section class="content">
    <div class="container-fluid">
        <div class="card mt-2 card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Kegiatan</h3>
            </div>

            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="<?= base_url() ?>kegiatan/simpan" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control " id="exampleInputPassword1" placeholder="Nama Kegiatan">


                    </div>
                    <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi" required>
                            <option disabled selected>--Pilih Devisi Kegiatan--</option>
                            <option value="Statisi Produksi">Statisi Produksi</option>
                            <option value="Statisi Distribusi">Statisi Distribusi</option>
                            <option value="Statisi Sosial">Statisi Sosial</option>
                            <option value="Nerwilis">Nerwilis</option>
                            <option value="IPDS">IPDS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Periode</label>
                        <input type="text" name="periode" class=" form-control " id="exampleInputEmail1" placeholder="Periode Kegiatan" required>

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