<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table warga</h5>
        <a href="<?= BASE_URL . 'dataWarga/tambah' ?>" class="btn btn-small btn-outline-primary ">Tambah Data</a>
    </div>
    <?php

    use App\Core\Flash;

    Flash::getFlash();
    ?>
    <div class="table-responsive text-nowrap text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telfon</th>
                    <th>Umur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <?php
                    $no = 1;
                    ?>
                    <?php foreach ($data['warga'] as $warga) : ?>
                    <td><?= $no++ ?></td>
                    <td><?= $warga['nama'] ?></td>
                    <td><?= $warga['alamat'] ?></td>
                    <td><?= $warga['no_telfon'] ?></td>
                    <td>
                        <?php
                            $lahir = new DateTime($warga['tanggal_lahir']);
                            $today = new DateTime();
                            $umur = $today->diff($lahir);
                            echo $umur->y . " tahun";
                            ?>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= BASE_URL ?>dataWarga/edit/<?= $warga['NIK'] ?>"><i
                                        class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                    data-bs-target="#hapus<?= $warga['NIK'] ?>">
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
<?php foreach ($data['warga'] as $warga) : ?>
<div class="modal modal-top fade" id="hapus<?= $warga['NIK'] ?>" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= BASE_URL ?>dataWarga/hapus" method="post">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <input type="hidden" name="nik" value="<?= $warga['NIK'] ?>">
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