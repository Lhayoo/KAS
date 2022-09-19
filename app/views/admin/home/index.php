<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>/assets/img/icons/unicons/wallet-info.png" alt="chart success"
                            class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="#">View More</a>

                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Saldo</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_saldo'] ?></h3>
                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 ">
        <div class="card ">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>/assets/img/icons/unicons/wallet-info.png" alt="chart success"
                            class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="<?= BASE_URL . 'datKas' ?>">View More</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total Kas</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_kas'] ?></h3>
                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>assets/img/icons/unicons/chart-success.png" alt="chart success"
                            class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="<?= BASE_URL . 'dataPemasukan' ?>">View More</a>

                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total pemasukan bulan ini</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_pemasukan'] ?></h3>
                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                        <img src="<?= BASE_URL ?>assets/img/icons/unicons/chart.png" alt="chart success"
                            class="rounded" />
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="<?= BASE_URL . 'datPengeluaran' ?>">View More</a>
                        </div>
                    </div>
                </div>
                <span class="fw-semibold d-block mb-1">Total pengeluaran bulan ini</span>
                <h3 class="card-title mb-2">Rp. <?= $data['data']['total_pengeluaran'] ?></h3>
                <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> -->
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
                                    <h5 class="card-header m-0 me-2 pb-3">Grafik Pemasukan dan Pengeluaran</h5>
                                    <div id="totalRevenueChart" class="px-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 ">
        <div class="col-lg-12 mx-auto col-md-6 mt-4 mb-4 mobile">
            <div class="card z-index-2 card-inverse">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <div class="row row-bordered g-0 ">
                                <div class="col-lg-6 mobile">
                                    <h5 class="card-header m-0 me-2 pb-3">Grafik Pemasukan dan Pengeluaran</h5>
                                    <div id="grafikresponsive" class="px-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- data kas yang belum bayar -->
    <div class="row ">
        <div class="col-lg-12 mx-auto col-md-6  mb-4 ">
            <div class="card z-index-2 card-inverse">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <div class="row row-bordered g-0 ">
                                <div class="col-lg-12">
                                    <h5 class="card-header m-0 me-2 pb-3">Data kas warga yang belum dibayar
                                    </h5>
                                    <div class="table-responsive text-nowrap text-center">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanngal</th>
                                                    <th> Nama</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <tr>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($data['data']['kas'] as $kas) :
                                                    ?>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $kas['tanggal'] ?></td>
                                                    <td><?= $kas['nama'] ?></td>
                                                    <td><?= $kas['jumlah'] ?></td>
                                                    <td>
                                                        <span class="badge bg-danger">belum bayar</span>
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
    <!-- end kas-->

    <!-- data pemasukan dan data pengeluaran bulan ini -->
    <div class="row ">
        <div class="col-lg-12 mx-auto col-md-6 mb-4">
            <div class="card z-index-2 card-inverse">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <div class="row row-bordered g-0 ">
                                <div class="col-lg-12">
                                    <h5 class="card-header m-0 me-2 pb-3">Data pemasukan & pengeluaran dalam sebulan
                                    </h5>
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
                                                    foreach ($data['data']['pemasukan'] as $info) :
                                                    ?>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $info['tanggal'] ?></td>
                                                    <td><?= $info['keterangan'] ?></td>
                                                    <td><?= $info['jumlah'] ?></td>
                                                    <td>
                                                        <span class="badge bg-success">Pemasukan</span>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>

                                                <?php
                                            foreach ($data['data']['pengeluaran'] as $info) :
                                            ?>
                                                <td><?= $no++ ?></td>
                                                <td><?= $info['tanggal'] ?></td>
                                                <td><?= $info['keterangan'] ?></td>
                                                <td><?= $info['jumlah'] ?></td>
                                                <td>
                                                    <span class="badge bg-danger">Pengeluaran</span>
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
    <!-- end data pemasukan & pengeluran -->