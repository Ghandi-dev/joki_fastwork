<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 10px;
    }

    .header img {
        width: 70px;
        /* Atur ukuran logo */
        margin-right: 10px;
    }

    .header h1 {
        margin: 0;
        font-size: 24px;
    }

    .header p {
        margin: 0;
        font-size: 12px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        font-size: 12px;
    }

    table th {
        background-color: #f2f2f2;
    }

    .footer {
        font-size: 12px;
        margin-top: 10px;
        text-align: left;
        font-style: italic;
    }

    @media print {
        body {
            margin: 0;
            padding: 0;
        }
    }
    </style>

    <!-- Auto Print Script -->
    <script>
    window.onload = function() {
        window.print();
    };
    </script>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <!-- Logo -->
        <img src="<?=base_url('assets/logo-joki.png')?>" alt="Logo Perusahaan">
        <div>
            <h1>Joki Fastwork</h1>
        </div>
    </div>

    <hr>
    <h3 style="text-align: center;">Laporan Pemesanan Joki Fastwork</h3>
    <!-- Tabel Data -->
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">No. Whatsapp</th>
                <th scope="col">Jumlah Star</th>
                <th scope="col">Jumlah Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
$no = 1;
$total_harga = 0; // Variabel untuk menghitung total harga
foreach ($pesanan as $row) {
    $total_harga += $row->jumlah_harga; // Menambahkan jumlah_harga setiap baris
    ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$row->created_at?></td>
                <td><?=$row->nama?></td>
                <td><?=$row->no_wa?></td>
                <td><?=$row->jumlah_star?></td>
                <td><?="Rp " . number_format($row->jumlah_harga, 0, ',', '.')?></td>
            </tr>
            <?php
}?>
            <!-- Baris Total -->
            <tr>
                <td colspan="5" style="text-align: right;"><strong>Total</strong></td>
                <td><?="Rp " . number_format($total_harga, 0, ',', '.')?></td>
            </tr>
        </tbody>
    </table>


</body>

</html>