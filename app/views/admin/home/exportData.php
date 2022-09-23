<?php
$bulan = date('M');
?>
<p align="center" style="font-weight:bold;font-size:16pt">LAPORAN DATA PENGELURAN & PEMASUKKAN BULAN <?= $bulan ?></p>

<table border="1" align="center" cellspacing="0" cellpadding="5" style="text-align: center;">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanngal</th>
            <th> Keterangan</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody class=" table-border-bottom-0">
        <tr>
            <?php
            $no = 1;
            foreach ($data['data']['pemasukan'] as $info) :
            ?>
            <td><?= $no++ ?></td>
            <td><?= $info['tanggal'] ?></td>
            <td><?= $info['keterangan'] ?></td>
            <td>Rp. <?= $info['jumlah'] ?></td>
            <td style="background: green;">
                Pemasukan
            </td>
        </tr>
        <?php endforeach; ?>

        <?php
    foreach ($data['data']['pengeluaran'] as $info) :
    ?>
        <td><?= $no++ ?></td>
        <td><?= $info['tanggal'] ?></td>
        <td><?= $info['keterangan'] ?></td>
        <td><?= $info['jumlah'] ?></td>
        <td style="background: red;">
            Pengeluaran
        </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>