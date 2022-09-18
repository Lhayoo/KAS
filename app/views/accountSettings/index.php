<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <form action="" method="post">
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="<?= BASE_URL ?>assets/img/profile/<?= $data['data']['profile'] ?>" alt="profile"
                            class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" name="profile" hidden />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="nama" name="nama" autofocus readonly
                                value="<?= $data['data']['nama'] ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik" readonly
                                value="<?= $data['data']['NIK'] ?>" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" readonly
                                value="<?= $data['data']['alamat'] ?>" />
                        </div>
                        <div class=" mb-3 col-md-6">
                            <label class="form-label" for="telpon">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="telpon" name="no_telfon" class="form-control"
                                    value="<?= $data['data']['no_telfon'] ?>" />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pekerjaan" class="form-label">Pekerjan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="organization" readonly
                                value="<?= $data['data']['pekerjaan'] ?>" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">status</label>
                            <input type="text" class="form-control" id="status" name="status" readonly
                                value="<?= $data['data']['status'] ?>" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="tanggal" class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tanggal" readonly
                                value="<?= $data['data']['tanggal_lahir'] ?>" placeholder="dd-mm-yy" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <a href="<?= BASE_URL ?>" class="btn btn-outline-secondary">Cancel</a>
                    </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
    <div class="card">
        <?php
        include_once 'app/views/accountSettings/changePas.php';
        ?>
    </div>
</div>