<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table users</h5>
        <a href="<?= BASE_URL . 'users/tambah' ?>" class="btn btn-small btn-outline-primary ">Tambah Data</a>
    </div>
    <div class="table-responsive text-nowrap text-center">
        <table class="table">
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