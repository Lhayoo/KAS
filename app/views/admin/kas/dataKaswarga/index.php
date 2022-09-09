<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table Kas</h5>
        <a href="<?= BASE_URL . 'dataKasWarga/tambah' ?>" class="btn btn-small btn-outline-primary ">Tambah Data</a>
    </div>
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
                    ?>
                    <?php while ($kas = $data['kas']->fetch_assoc()) : ?>
                    <td><?= $no++ ?></td>
                    <td><?= $kas['nama'] ?></td>
                    <td><?= $kas['tanggal'] ?></td>
                    <td><?= $kas['jumlah'] ?></td>
                    <td>
                        <?php if ($kas['status'] == 'bayar') : ?>
                        <span class="badge bg-label-success me-1"><?= $kas['status'] ?></span>
                        <?php elseif ($kas['status'] == 'belum') : ?>
                        <span class="badge bg-label-danger"><?= $kas['status'] ?></span>
                        <?php endif ?>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= BASE_URL . 'users/edit' ?>"><i
                                        class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>