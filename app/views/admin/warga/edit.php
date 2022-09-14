<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-body">
            <?php

            use App\Core\Flash;

            Flash::getFlash() ?>
            <form method="POST">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nik">NIK</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <!-- <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bxs-id-card'></i></span> -->
                            <input type="text" class="form-control" id="nik" placeholder="Masukan NIK"
                                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nik"
                                maxlength="16" value="<?= $data['id']['NIK'] ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" id="nama" placeholder="Masukan nama lengkap"
                                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nama"
                                value="<?= $data['id']['nama'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class='bx bx-home'></i></span>
                            <input type="text" id="alamat" class="form-control" placeholder="Masukan alamat lengkap"
                                aria-label="alamat" aria-describedby="alamat" name="alamat"
                                value="<?= $data['id']['alamat'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="no_hp">No Telfon</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bx-phone"></i></span>
                            <input type="text" id="no_hp" class="form-control phone-mask" placeholder="+62"
                                aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" name="no_telfon"
                                maxlength="14" value="<?= $data['id']['no_telfon'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="pekerjaan">Pekerjaan</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bx-briefcase-alt-2'></i></span>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan pekerjaan"
                                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="pekerjaan"
                                value="<?= $data['id']['pekerjaan'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="status">Status</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select class="form-select" id="status" aria-label="Default select example" name="status">
                                <option value="Belum Menikah" <?php if ($data['id']['status'] == 'Belum Menikah') {
                                                                    echo 'selected';
                                                                } ?>>Belum Menikah</option>
                                <option value="Menikah" <?php if ($data['id']['status'] == 'Menikah') {
                                                            echo 'selected';
                                                        } ?>>Menikah</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                                    value="Laki-laki"
                                    <?php if ($data['id']['jenis_kelamin'] == 'Laki-Laki') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                                    value="Perempuan"
                                    <?php if ($data['id']['jenis_kelamin'] == 'Perempuan') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal lahir</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="date" class="form-control" id="tanggal_lahir" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="tanggal_lahir"
                                value="<?= $data['id']['tanggal_lahir'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="<?= BASE_URL . 'dataWarga' ?>" class="btn btn-outline-secondary">Cancle</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>