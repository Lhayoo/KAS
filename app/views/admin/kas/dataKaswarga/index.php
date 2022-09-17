<div class="card accordion-item mb-2">
    <h2 class="accordion-header" id="headingTwo">
        <button type="button" class="btn-xl accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
            <i class='bx bx-printer'></i>
        </button>
    </h2>
    <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- input group 2 tanggal -->
            <div class="row mb-3">
                <div class="col">
                    <label for="dari" class="m-2">Dari tanggal</label>
                    <input type="date" class="form-control" name="awal" id="dari" aria-label="First name">
                </div>
                <div class="col">
                    <label for="sampai" class="m-2">Sampai tanggal</label>
                    <input type="date" name="akhir" id="sampai" class="form-control" placeholder="" aria-label="Last name">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-primary">Cetak</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="d-flex align-items-center justify-content-between px-3 ">
            <h5 class="card-header">Table Kas</h5>
            <a href="<?= BASE_URL . 'dataKasWarga/tambah' ?>" class="btn btn-small btn-outline-primary ">Tambah Data</a>
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
                        <th>Nama</th>
                        <th>Tanngal</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Action</th>
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
                            <td><?= $kas['jumlah'] ?></td>
                            <td>
                                <?php if ($kas['status'] == 'bayar') : ?>
                                    <span class="badge bg-label-success me-1"><?= $kas['status'] ?></span>
                                <?php elseif ($kas['status'] == 'belum') : ?>
                                    <span class="badge bg-label-danger"><?= $kas['status'] ?> bayar</span>
                                <?php endif ?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= BASE_URL ?>dataKasWarga/edit/<?= $kas['id'] ?>"><i class="bx bx-edit-alt me-2"></i>
                                            Edit</a>
                                        <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#hapus<?= $kas['id'] ?>">
                                            <i class="bx bx-trash me-2"></i>Hapus
                                        </button>
                                    </div>
                                </div>
                            </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <?php foreach ($data['kas'] as $kas) : ?>
        <div class="modal modal-top fade" id="hapus<?= $kas['id'] ?>" tabindex="-1">
            <div class="modal-dialog">
                <form class="modal-content" action="<?= BASE_URL ?>dataKasWarga/hapus" method="POST">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <input type="hidden" name="id" value="<?= $kas['id'] ?>">
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