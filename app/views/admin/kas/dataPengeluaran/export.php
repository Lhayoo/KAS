<table border="1" align="center" cellspacing="0" cellpadding="5" style="text-align: center;">
    <p align=" center" style="font-weight:bold;font-size:16pt">LAPORAN DATA PENGELUARAN</p>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanngal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $no = 1;
            foreach ($data['pengeluaran'] as $pengeluaran) :
            ?>
            <td><?= $no++ ?></td>
            <td><?= $pengeluaran['tanggal'] ?></td>
            <td><?= $pengeluaran['keterangan'] ?></td>
            <td>Rp. <?= $pengeluaran['jumlah'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>