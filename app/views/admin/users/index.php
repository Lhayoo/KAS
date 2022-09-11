<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table users</h5>
        <a href="<?= BASE_URL . 'users/tambah' ?>" class="btn btn-small btn-outline-primary ">Tambah Data</a>
    </div>
    <div class="table-responsive text-nowrap text-center">
        <table class="table">
            <?php

            use App\Core\Flash;

            Flash::getFlash();
            ?>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>last login</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <?php
                    $no = 1;
                    ?>
                    <?php while ($users = $data['users']->fetch_assoc()) : ?>
                    <td><?= $no++ ?></td>
                    <td><?= $users['NIK'] ?></td>
                    <td><?= $users['username'] ?></td>
                    <td>
                        <?php if ($users['role'] == 'anggota') : ?>
                        <span class="badge bg-label-primary me-1"><?= $users['role'] ?></span>
                        <?php elseif ($users['role'] == 'admin') : ?>
                        <span class="badge bg-label-info"><?= $users['role'] ?></span>
                        <?php endif ?>
                    </td>
                    <td><?= $users['last_login'] ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= BASE_URL . 'users/edit' ?>"><i
                                        class="bx bx-edit-alt me-2"></i>
                                    Edit</a>
                                <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                    data-bs-target="#hapus<?= $data['id']['id'] ?>">
                                    <i class="bx bx-trash me-2"></i>Hapus
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal modal-top fade" id="hapus<?= $data['id']['id'] ?>" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= BASE_URL ?>users/hapus" method="post">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <input type="hidden" name="id" value="<?= $data['id']['id'] ?>">
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
</div>