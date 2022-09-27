<div class="card accordion-item mb-2 shadow-none">
    <h2 class="accordion-header" id="headingTwo">
        <button type="button" class="btn-xl accordion-button collapsed" data-bs-toggle="collapse"
            data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
            <i class='bx bx-printer'></i>
        </button>
    </h2>
    <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form action="" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="dari" class="m-2">Dari tanggal</label>
                        <input type="date" class="form-control" name="awal" id="dari" aria-label="First name"
                            value="value" required>
                    </div>
                    <div class="col">
                        <label for="sampai" class="m-2">Sampai tanggal</label>
                        <input type="date" name="akhir" id="sampai" class="form-control" placeholder=""
                            aria-label="Last name" value="value" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success" name="filter">Filter</button>
                        <!-- <button type="submit" class="btn btn-primary" name="cetak">Cetak</button> -->
                        <!-- <a href="<?= BASE_URL . 'dataPemasukanWarga/export' ?>" class="btn btn-primary">Cetak</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card shadow-none">
        <div class="d-flex align-items-center justify-content-between px-3 ">
            <h5 class="card-header">Table pengeluaran</h5>
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
                        <?php while ($pengeluaran = $data['pengeluaran']->fetch_assoc()) : ?>
                        <td><?= $no++ ?></td>
                        <td><?= $pengeluaran['tanggal'] ?></td>
                        <td><?= $pengeluaran['keterangan'] ?></td>
                        <td>Rp. <?= $pengeluaran['jumlah'] ?></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
</div>