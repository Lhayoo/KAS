<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tanggal</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="date" class="form-control" id="basic-icon-default-fullname"
                                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="nama" />
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
                                aria-describedby="basic-icon-default-fullname2" name="nama" />
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jumlah</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class='bx bxs-wallet'></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Masukan jumlah" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="nama" />
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="<?= BASE_URL . 'dataPemasukan' ?>" class="btn btn-outline-secondary">Cancle</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>