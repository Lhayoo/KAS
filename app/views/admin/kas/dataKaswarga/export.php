<table border="1" align="center" cellspacing="0" cellpadding="5" style="text-align: center;">
    <p align=" center" style="font-weight:bold;font-size:16pt">LAPORAN DATA WARGA YANG BELUM KAS</p>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanngal</th>
            <th> Nama</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php
            $no = 1;
            foreach ($data['kas'] as $kas) :
            ?>
            <td><?= $no++ ?></td>
            <td><?= $kas['tanggal'] ?></td>
            <td><?= $kas['nama'] ?></td>
            <td>Rp. <?= $kas['jumlah'] ?></td>
            <?php if ($kas['status'] == 'bayar') : ?>
            <td style="background: green;">
                bayar
            </td>
            <?php elseif ($kas['status'] == 'belum') : ?>
            <td style="background: red;">
                <?= $kas['status'] ?> bayar
            </td>
            <?php endif ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>