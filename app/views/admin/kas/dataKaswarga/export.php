<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-kas.xls");
?>
<table class="table display" id="example">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanngal</th>
            <th>Jumlah</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        <tr>
            <?php
            $no = 1;
            foreach ($data['kas'] as $kas) :
            ?>
            <td><?= $no++ ?></td>
            <td><?= $kas['nama'] ?></td>
            <td><?= $kas['tanggal'] ?></td>
            <td>Rp. <?= $kas['jumlah'] ?></td>
            <td>
                <?php if ($kas['status'] == 'bayar') : ?>
                <span class="badge bg-label-success me-1"><?= $kas['status'] ?></span>
                <?php elseif ($kas['status'] == 'belum') : ?>
                <span class="badge bg-label-danger"><?= $kas['status'] ?> bayar</span>
                <?php endif ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>