<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table pemasukan</h5>
    </div>
    <div class="table-responsive text-nowrap text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanngal</th>
                    <th> Keterangan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <?php
                    $no = 1;
                    ?>
                    <?php while ($pemasukan = $data['pemasukan']->fetch_assoc()) : ?>
                    <td><?= $no++ ?></td>
                    <td><?= $pemasukan['tanggal'] ?></td>
                    <td><?= $pemasukan['keterangan'] ?></td>
                    <td><?= $pemasukan['jumlah'] ?></td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>