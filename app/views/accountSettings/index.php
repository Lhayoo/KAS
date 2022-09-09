<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Profile Details</h5>
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img src="<?php BASE_URL ?>assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded"
                        height="100" width="100" id="uploadedAvatar" />
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden
                                accept="image/png, image/jpeg" />
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
                <form id="formAccountSettings" method="POST">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="nama" name="nama" autofocus readonly>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="telpon">Phone Number</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="telpon" name="telpon" class="form-control" readonly />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="pekerjaan" class="form-label">Pekerjan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="organization" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">status</label>
                            <input type="text" class="form-control" id="status" name="address" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="tanggal" class="form-label">Tanggal lahir</label>
                            <input type="date" class="form-control" id="tanggal" readonly />
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
            <h5 class="card-header">Change password ?</h5>
            <div class="card-body">
                <form method=" POST">
                    <div class="row mb-3 form-password-toggle">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Old password</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-   fullname2" class="input-group-text"><i z
                                        class="bx bx-lock"></i></span>
                                <input type="password" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nama" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 form-password-toggle">
                        <label class="col-sm-2 col-form-label" for="password">New password</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span id="password" class="input-group-text cursor-pointer"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 form-password-toggle">
                        <label class="col-sm-2 col-form-label" for="password">retype new password</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span id="password" class="input-group-text cursor-pointer"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <a href="<?= BASE_URL ?>" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>