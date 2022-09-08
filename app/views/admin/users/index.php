<div class="card">
    <div class="d-flex align-items-center justify-content-between px-3 ">
        <h5 class="card-header">Table users</h5>
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
                </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>