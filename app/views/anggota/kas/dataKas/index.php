<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table Kas</h5>
    </div>
    <div class="table-responsive text-nowrap text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanngal</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <?php
                    $no = 1;
                    ?>
                    <?php while ($kas = $data['kas']->fetch_assoc()) : ?>
                    <td><?= $no++ ?></td>
                    <td><?= $kas['tanggal'] ?></td>
                    <td><?= $kas['jumlah'] ?></td>
                    <td>
                        <?php if ($kas['status'] == 'bayar') : ?>
                        <span class="badge bg-label-success me-1"><?= $kas['status'] ?></span>
                        <?php elseif ($kas['status'] == 'belum') : ?>
                        <span class="badge bg-label-danger"><?= $kas['status'] ?> bayar</span>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>