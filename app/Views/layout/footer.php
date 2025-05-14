                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © Lampung Cerdas - Theme by <b>Techzaa</b>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        </div>        
        
        <!-- Vendor js -->
        <script src="<?= base_url(). 'assets/js/vendor.min.js' ?>"></script>

        <!-- Vector Map js -->
        <script src="<?= base_url(). 'assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js' ?>"></script>

        <!-- Datatables js -->
        <script src="<?= base_url(). 'assets/vendor/datatables.net/js/jquery.dataTables.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-buttons/js/buttons.html5.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-buttons/js/buttons.flash.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-buttons/js/buttons.print.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/datatables.net-select/js/dataTables.select.min.js' ?>"></script>

        <!-- Datatable Demo Aapp js -->
        <script src="<?= base_url(). 'assets/js/pages/datatable.init.js' ?>"></script>

            <!-- Daterangepicker js -->
        <script src="<?= base_url(). 'assets/vendor/daterangepicker/moment.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/daterangepicker/daterangepicker.js' ?>"></script>
        
        <!-- Apex Charts js -->
        <script src="<?= base_url(). 'assets/vendor/apexcharts/apexcharts.min.js' ?>"></script>

        <!-- Dashboard App js -->
        <script src="<?= base_url(). 'assets/js/pages/dashboard.js' ?>"></script>

        <!-- App js -->
        <script src="<?= base_url(). 'assets/js/app.min.js' ?>"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <?php if (session()->getFlashdata('message')) : ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '<?= session()->getFlashdata('message'); ?>',
                    confirmButtonColor: '#3e9d9d',
                });
            </script>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')) : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?= session()->getFlashdata('error'); ?>',
                    confirmButtonColor: '#d33',
                });
            </script>
        <?php endif; ?>

    </body>
</html> 