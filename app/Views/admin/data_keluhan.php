<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
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

            <div class="col-xl-15">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Keluhan</h2>
                        <a href="<?= base_url('/export' ); ?>" class="btn btn-success rounded-pill sm me-1">
                            <i class=" ri-upload-cloud-2-fill me-1"></i>Export</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-striped w-100">
                            <thead class= table-light>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No. WhatsApp</th>
                                <th>Jenis Keluhan</th>
                                <th>Rincian</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php if (!empty($keluhan) && is_array($keluhan)) : ?>
                                <?php $no = 1; ?>
                                <?php foreach ($keluhan as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= esc($row['nama_lengkap']); ?></td>
                                    <td><?= esc($row['email']); ?></td>
                                    <td><?= esc($row['nomor_wa']); ?></td>
                                    <td><?= esc($row['jenis_keluhan']); ?></td>
                                    <td><?= esc($row['rincian']); ?></td>
                                    <td><?= esc($row['tanggapan']); ?></td>
                                    <td>
                                        <?php if ($row['status'] == 'menunggu') : ?>
                                            <h4><span class="badge bg-pink-subtle text-pink rounded-pill">Processing</span></h4>
                                        <?php elseif ($row['status'] == 'selesai') : ?>
                                            <h4><span class="badge bg-primary-subtle text-primary rounded-pill">Completed</span></h4>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/tanggapan/'. $row['id_keluhan']) ?>" class="btn btn-info rounded-pill sm me-1"><i class="ri-question-answer-fill me-1"></i>Feedback</a>
                                        <a href="<?= base_url('deleteKeluhan/' . $row['id_keluhan']) ?>" class="btn btn-danger rounded-pill sm me-1" onclick="return confirm('Hapus data ini?')"><i class=" ri-delete-bin-fill me-1"></i>Delete</a>                                   
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                <td colspan="7">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
