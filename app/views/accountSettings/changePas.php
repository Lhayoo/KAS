<h5 class="card-header">Change password ?</h5>
<?php

use App\Core\Flash;

Flash::getFlash();
?>
<div class="card-body">
    <form method="POST" action="<?= BASE_URL ?>accountSettings/changePas">
        <div class="row mb-3 form-password-toggle">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Old password</label>
            <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-   fullname2" class="input-group-text"><i z
                            class="bx bx-lock"></i></span>
                    <input type="password" class="form-control" id="basic-icon-default-fullname"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="oldPas" />
                </div>
            </div>
        </div>
        <div class="row mb-3 form-password-toggle">
            <label class="col-sm-2 col-form-label" for="password">New password</label>
            <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="newPas"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="newPas" />
                    <span id="password" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
        </div>
        <div class="row mb-3 form-password-toggle">
            <label class="col-sm-2 col-form-label" for="retype">retype new password</label>
            <div class="col-sm-10">
                <div class="input-group input-group-merge">
                    <input type="password" id="retype" class="form-control" name="retype"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                    <span id="password" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <a href="<?= BASE_URL ?>" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>