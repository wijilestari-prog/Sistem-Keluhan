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

        <!-- Daterangepicker js -->
        <script src="<?= base_url(). 'assets/vendor/daterangepicker/moment.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/daterangepicker/daterangepicker.js' ?>"></script>
        
        <!-- Apex Charts js -->
        <script src="<?= base_url(). 'assets/vendor/apexcharts/apexcharts.min.js' ?>"></script>

        <!-- Vector Map js -->
        <script src="<?= base_url(). 'assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
        <script src="<?= base_url(). 'assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js' ?>"></script>

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