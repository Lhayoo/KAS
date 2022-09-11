<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST">
                <div class="row mb-3">
                    <?php

                    use App\Core\Flash;

                    Flash::getFlash();
                    ?>
                    <label class="col-sm-2 col-form-label" for="nik">NIK</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bxs-id-card'></i></span>
                            <input type="text" class="form-control" id="nik" placeholder="Masukan NIK"
                                aria-label="John Doe" aria-describedby="nik" name="nik" maxlength="16" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="username">Username</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="username" placeholder="Masukan Username"
                                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="username" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="password">Password</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="" class="input-group-text"><i class="bx bx-lock"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="Masukan Password"
                                aria-label="John Doe" aria-describedby="password" name="password" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3 form-password-toggle">
                    <label class="col-sm-2 col-form-label" for="password">retype password</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="retype"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                            <span id="password" class="input-group-text cursor-pointer"><i
                                    class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10 mt-2">
                            <button type="submit" class="btn btn-primary me-2">Send</button>
                            <a type="submit" class="btn btn-outline-secondary"
                                href="<?= BASE_URL . 'users' ?>">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>