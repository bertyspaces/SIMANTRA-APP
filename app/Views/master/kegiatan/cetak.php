<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Kegiatan</title>
    <style>
        @page {
            size: A4;
            margin: 1cm;
        }

        body {
            font-family: Arial, sans-serif;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
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
        <h1>BPS Kota Pekalongan</h1>
        <p>Alamat Kantor: Jl. Contoh No. 123, Kota Pekalongan</p>
        <!-- Tambahkan informasi lain sesuai kebutuhan -->
    </header>

    <h2>Data Kegiatan BPS Kota Pekalongan</h2>
    <input type="button" value="Print PDF" href="<?= base_url() ?>kegiatan/cetak">

    <br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Divisi</th>
                <th>Periode</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($kegiatan as $k) { ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $k['nama_kegiatan'] ?></td>
                    <td><?= $k['divisi'] ?></td>
                    <td><?= $k['periode'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Tambahkan elemen atau konten lain sesuai kebutuhan -->

</body>

</html>