<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>/assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="<?= BASE_URL . 'dataWarga' ?>">View More</a>

                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Saldo</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_saldo'] ?></h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ">
        <div class="card ">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>/assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Kas</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_kas'] ?></h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>

                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total pemasukan bulan ini</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_pemasukan'] ?></h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>assets/img/icons/unicons/chart.png" alt="chart success" class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total pengeluaran bulan ini</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_pengeluaran'] ?></h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
            </div>
        </div>
    </div>

    <div class="row mt-4 ">
        <div class="col-lg-12 mx-auto col-md-6 mt-4 mb-4 dekstop">
            <div class="card z-index-2 card-inverse">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <div class="row row-bordered g-0 ">
                                <div class="col-lg-12 dekstop">
                                    <h5 class="card-header m-0 me-2 pb-3">Data pemasukan & pengeluaran dalam sebulan</h5>
                                    <div class="table-responsive text-nowrap text-center">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanngal</th>
                                                    <th> Keterangan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data['data']['info'] as $info) :
                                                    ?>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $info['tanggal'] ?></td>
                                                        <td><?= $info['keterangan'] ?></td>
                                                        <td><?= $info['jumlah'] ?></td>
                                                        <td>
                                                            <?php if ($info['pemasukan'] == 'pemasukan') : ?>
                                                                <span class="badge bg-success">Pemasukan</span>
                                                            <?php else : ?>
                                                                <span class="badge bg-danger">Pengeluaran</span>
                                                            <?php endif ?>
                                                        </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>