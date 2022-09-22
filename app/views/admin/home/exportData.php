<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-kas.xls");
?>
<p align="center" style="font-weight:bold;font-size:16pt">LAPORAN DATA PENGELURAN & PEMASUKKAN BULAN INI</p>

<table border="1" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanngal</th>
            <th> Keterangan</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        <tr>
            <?php
            $no = 1;
            foreach ($data['data']['pemasukan'] as $info) :
            ?>
            <td><?= $no++ ?></td>
            <td><?= $info['tanggal'] ?></td>
            <td><?= $info['keterangan'] ?></td>
            <td>Rp. <?= $info['jumlah'] ?></td>
            <td>
                <span class="badge bg-success">Pemasukan</span>
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
        <td>
            <span class="badge bg-danger">Pengeluaran</span>
        </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>