<?= $this->extend('templates/index') ?>

<?= $this->section('konten-utama') ?>

<!-- Data ratting krteria -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Ratting Kriteria</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Ratting Kriteria</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Keterngan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>K1</td>
                                    <td>Nilai Kinerja</td>
                                    <td>5</td>
                                    <td>Sangat Baik</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>K1</td>
                                    <td>Nilai Kinerja</td>
                                    <td>4</td>
                                    <td>Baik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>K1</td>
                                    <td>Nilai Kinerja</td>
                                    <td>3</td>
                                    <td>Cukup Baik</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>K1</td>
                                    <td>Nilai Kinerja</td>
                                    <td>2</td>
                                    <td>Kurang Baik</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>K1</td>
                                    <td>Nilai Kinerja</td>
                                    <td>1</td>
                                    <td>Tidak Baik</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>K2</td>
                                    <td>Nilai Kerja Sama</td>
                                    <td>5</td>
                                    <td>Sangat Baik</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>K2</td>
                                    <td>Nilai Kerja Sama</td>
                                    <td>4</td>
                                    <td>Baik</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>K2</td>
                                    <td>Nilai Kerja Sama</td>
                                    <td>3</td>
                                    <td>Cukup Baik</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>K2</td>
                                    <td>Nilai Kerja Sama</td>
                                    <td>2</td>
                                    <td>Kurang Baik</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>K2</td>
                                    <td>Nilai Kerja Sama</td>
                                    <td>1</td>
                                    <td>Tidak Baik</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>K3</td>
                                    <td>Nilai Kualitas Data</td>
                                    <td>5</td>
                                    <td>Sangat Baik</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>K3</td>
                                    <td>Nilai Kualitas Data</td>
                                    <td>4</td>
                                    <td>Baik</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>K3</td>
                                    <td>Nilai Kualitas Data</td>
                                    <td>3</td>
                                    <td>Cukup Baik</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>K3</td>
                                    <td>Nilai Kualitas Data</td>
                                    <td>2</td>
                                    <td>Kurang Baik</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>K1</td>
                                    <td>Nilai Kualitas Daata</td>
                                    <td>1</td>
                                    <td>Tidak Baik</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?= $this->endSection() ?>