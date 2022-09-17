<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= BASE_URL ?>assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?= $data['title'] ?></title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- dataTables -->
    <link rel="stylesheet" type="text/css" href="DataTables-1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="Buttons-2.2.3/css/buttons.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Helpers -->
    <script src="<?= BASE_URL ?>assets/vendor/js/helpers.js"></script>

    <!-- JQuery js -->
    <script src="<?= BASE_URL ?>assets/js/jQuery.min.js"></script>



    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= BASE_URL ?>assets/js/config.js"></script>
    <style>
        @media screen and (min-width: 800px) {
            .dekstop {
                display: block;
                width: 100%;
            }

            .mobile {
                display: none;
            }
        }

        @media screen and (max-width: 800px) {
            .dekstop {
                display: none;
            }

            .mobile {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- sidebar -->
            <?php include_once('app/views/layouts/sidebar.php') ?>
            <!-- end sidebar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include_once('app/views/layouts/navbar.php') ?>
                <!-- end Navbar -->

                <!-- Content -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?php include_once($render) ?>
                    </div>
                </div>
                <!-- End content -->
                <!-- Footer -->
                <!-- <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="https://themeselection.com" target="_blank"
                                class="footer-link fw-bolder">ThemeSelection</a>
                        </div>
                        <div>
                            <a href="https://themeselection.com/license/" class="footer-link me-4"
                                target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                Themes</a>

                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                target="_blank" class="footer-link me-4">Documentation</a>

                            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                target="_blank" class="footer-link me-4">Support</a>
                        </div>
                    </div>
                </footer> -->
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- dataTables -->
    <script src="<?= BASE_URL ?>assets/DataTables/DataTables-1.12.1/css/jquery.dataTables.min.css"></script>
    <script src="<?= BASE_URL ?>assets/DataTables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataKasWarga').DataTable();
        });
    </script>
    <!-- bundledataTables -->

    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/DataTables-1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/Buttons-2.2.3/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/Buttons-2.2.3/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/Buttons-2.2.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL ?>assets/DataTables/Buttons-2.2.3/js/buttons.print.min.js"></script>
    <!-- Core JS -->

    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= BASE_URL ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= BASE_URL ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= BASE_URL ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?= BASE_URL ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= BASE_URL ?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= BASE_URL ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= BASE_URL ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= BASE_URL ?>assets/js/dashboards-analytics.js"></script>
    <script src="<?= BASE_URL ?>assets/js/grafikresponsive.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script></script>
</body>

</html>