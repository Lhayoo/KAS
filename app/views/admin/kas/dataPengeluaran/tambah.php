<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST">
                <?php

                use App\Core\Flash;

                Flash::getFlash();
                ?>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="date">Tanggal</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="date" class="form-control" id="date" aria-label="date"
                                aria-describedby="basic-icon-default-fullname2" name="tanggal" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Keterangan</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bx-message-detail'></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan keterangan" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="keterangan" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="jumlah">Jumlah</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bxs-wallet'></i></span>
                            <input type="text" class="form-control" id="jumlah" placeholder="Masukan jumlah"
                                aria-label="jumlah" aria-describedby="jumlah" name="jumlah" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="<?= BASE_URL . 'dataPengeluaran' ?>" class="btn btn-outline-secondary">Cancle</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>