<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST">
                <?php

                use App\Core\Flash;

                Flash::getFlash() ?>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="hidden" class="form-control" id="id" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="id" readonly
                                value="<?= $data['kas']['id'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" id="nama" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="id" readonly
                                value="<?= $data['kas']['users_id'] ?>" />
                        </div>
                    </div>
                </div>

                <!-- <div class=" row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tanggal</label>
                            <div clasSs="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="date" class="form-control" id="basic-icon-default-fullname"
                                        aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                        name="tanggal" />
                                </div>
                            </div>
                        </div> -->
                <!-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jumlah</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bxs-wallet'></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan jumlah" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="jumlah" value="5000" readonly />
                        </div>
                    </div>
                </div> -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Status</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <select class="form-select" name="status" id="basicSelect">
                                <option value="bayar" <?php if ($data['kas']['status'] == 'bayar') {
                                                            echo "selected";
                                                        } ?>>Bayar</option>
                                <option value="belum" <?php if ($data['kas']['status'] == 'belum') {
                                                            echo "selected";
                                                        } ?>>Belum bayar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="<?= BASE_URL . 'dataKasWarga' ?>" class="btn btn-outline-secondary">Cancle</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>