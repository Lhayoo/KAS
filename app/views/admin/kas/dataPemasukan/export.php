<table border="1" align="center" cellspacing="0" cellpadding="5" style="text-align: center;">
    <p align=" center" style="font-weight:bold;font-size:16pt">LAPORAN DATA PEMASUKAN</p>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanngal</th>
            <th>keterangan</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $no = 1;
            foreach ($data['pemasukan'] as $pemasukan) :
            ?>
            <td><?= $no++ ?></td>
            <td><?= $pemasukan['tanggal'] ?></td>
            <td><?= $pemasukan['keterangan'] ?></td>
            <td>Rp. <?= $pemasukan['jumlah'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>