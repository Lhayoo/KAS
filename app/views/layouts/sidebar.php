<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?= BASE_URL ?>" class="app-brand-link">
            <h1 class="fw-bolder ms-2">RT</h1>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <?php if ($_SESSION['user']['role'] === 'admin') : ?>
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="<?= BASE_URL ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-wallet'></i>
                <div data-i18n="Layouts">Kas</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'dataKasWarga') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataKasWarga">
                        <div data-i18n="Without menu">Data kas warga</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'datePemasukan') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataPemasukan">
                        <div data-i18n="Without menu">Data pemasukan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'dataPemasukan') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataPemasukan">
                        <div data-i18n="Without navbar">Data pengeluaran</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-user'></i>
                <div data-i18n="Layouts">Warga</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'dataWarga') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataWarga">
                        <div data-i18n="Without menu">Data warga</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'wargaPindahan') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>wargaPindahan">
                        <div data-i18n="Without menu">Warga pindahan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-user-rectangle'></i>
                <div data-i18n="Layouts">User</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'users') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>users">
                        <div data-i18n="Without menu">Data User</div>
                    </a>
                </li>
            </ul>
        </li>
        <?php endif ?>
        <?php if ($_SESSION['user']['role'] === 'anggota') : ?>
        <li class="menu-item active">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-wallet'></i>
                <div data-i18n="Layouts">Kas</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'dataKas') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataKas">
                        <div data-i18n="Without menu">Data kas warga</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'datePemasukan') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataPemasukan">
                        <div data-i18n="Without menu">Data pemasukan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link <?php if ($data['active'] == 'dataPemasukan') : ?>  <?php endif ?>"
                        href="<?= BASE_URL ?>dataPemasukan">
                        <div data-i18n="Without navbar">Data pengeluaran</div>
                    </a>
                </li>
            </ul>
        </li>
        <?php endif ?>
    </ul>
</aside>