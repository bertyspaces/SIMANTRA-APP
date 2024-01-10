<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Rangking Kegiatan Mitra Lapangan </title>
    <style>
        @page {
            size: A4;
            margin-top: 1cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 1cm;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            text-align: center;
            line-height: 15px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            text-align: justify;
        }

        footer {
            width: 100%;
            height: 50px;
            padding-left: 0px;
            position: absolute;
            line-height: 25px;
            bottom: 0px;
            color: gray;
            text-align: center;
        }

        /* Gaya cetak */
        @media print {
            body {
                font-size: 12pt;
            }

            table {
                font-size: 10pt;
            }

            header {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="/img/logo2.png">
        <center>
            <i>
                <h2>BADAN PUSAT STATISTIK</h2>
                <h2>KOTA PEKALONGAN</h2>
            </i>
            <h3>Laporan Ranking Kinerja Mitra Pengolahan</h3>
            <h3>Periode <?= $kegiatan['periode'] ?></h3>
        </center>
    </header>
    <p>Berdasarkan hasil penilaian dan perhitungan dengan metode <i>Fuzzy Simple Additive Weighting</i> yang telah diikuti mitra lapangan pada kegiatan Kegiatan <?= $kegiatan['nama_kegiatan'] ?>Periode <?= $kegiatan['periode'] ?>, maka berikut adalah Data Ranking Kinerja Mitra :</p>
    <center>
        <h4>Data Ranking Kinerja Pengolahan Kegiatan <?= $kegiatan['nama_kegiatan'] ?>Periode <?= $kegiatan['periode'] ?></h4>
    </center>
    <table>
        <thead>
            <tr>
                <th>Peringkat</th>
                <th>Nama Mitra</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($ranking_pengolahan as $nama => $score) { ?>
                <?php $total = 0; ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $nama ?></td>
                    <td><?= $score ?></td>
                <?php  } ?>
                </tr>
        </tbody>
    </table>
    <div style="text-align: center;">
        <p style="text-align: right;">
            Pekalongan,
        </p>
        <p style="text-align: right;">Kepala Badan Pusat Statistik</p>
        <p style="text-align: right;">Kota Pekalongan</p>
        <br>
        <br>
        <p style="text-align: right;">Drs. Rahyudin, M.Si</p>
        <p style="text-align: right;">Nip. </p>
    </div>
    <footer>
        Alamat Kantor: Jl.Singosari, Podosugih, Kec. Pekalongan Barat, Kota Pekalongan, Jawa Tengah 51111


    </footer>
</body>

</html>