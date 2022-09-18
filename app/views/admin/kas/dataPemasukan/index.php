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
            <!-- input group 2 tanggal -->
            <div class="row mb-3">
                <div class="col">
                    <label for="dari" class="m-2">Dari tanggal</label>
                    <input type="date" class="form-control" name="awal" id="dari" aria-label="First name">
                </div>
                <div class="col">
                    <label for="sampai" class="m-2">Sampai tanggal</label>
                    <input type="date" name="akhir" id="sampai" class="form-control" placeholder=""
                        aria-label="Last name">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-primary">Cetak</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-none">
        <div class="d-flex align-items-center justify-content-between px-3 ">
            <h5 class="card-header">Table pemasukan</h5>
            <a href="<?= BASE_URL . 'dataPemasukan/tambah' ?>" class="btn btn-small btn-outline-primary ">Tambah
                Data</a>
        </div>
        <?php

        use App\Core\Flash;

        Flash::getFlash()
        ?>
        <div class="table-responsive text-nowrap text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanngal</th>
                        <th> Keterangan</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($data['pemasukan'] as $pemasukan) :
                        ?>
                        <td><?= $no++ ?></td>
                        <td><?= $pemasukan['tanggal'] ?></td>
                        <td><?= $pemasukan['keterangan'] ?></td>
                        <td><?= $pemasukan['jumlah'] ?></td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#hapus<?= $pemasukan['id'] ?>">
                                <i class="bx bx-trash me-2"></i>Hapus
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <?php foreach ($data['pemasukan'] as $pemasukan) : ?>
    <div class="modal modal-top fade" id="hapus<?= $pemasukan['id'] ?>" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="<?= BASE_URL ?>dataPemasukan/hapus" method="POST">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <input type="hidden" name="id" value="<?= $pemasukan['id'] ?>">
                    <h3 class="modal-title text-center">Yakin ingin melakukan aksi ini?</h4>
                        <div class="modal-footer mt-2">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                No
                            </button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <?php endforeach; ?>