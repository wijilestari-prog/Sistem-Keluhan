<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Tanggapan</h3>
                    </div>
                    <div class="card-body px-4 py-4">
                    <form action="<?= base_url('admin/tanggapan/') ?>" method="post">
                        <input type="hidden" name="id_keluhan" value="<?= $keluhan['id_keluhan'] ?>">

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" value="<?= $keluhan['nama_lengkap'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="<?= $keluhan['email'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nomor WhatsApp</label>
                                <input type="tel" class="form-control" name="nomor_wa" value="<?= $keluhan['nomor_wa'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Keluhan</label>
                                <select class="form-control" name="jenis_keluhan" required>
                                    <option value="Masalah Teknis" <?= ($keluhan['jenis_keluhan'] == 'Masalah Teknis') ? 'selected' : '' ?>>Masalah Teknis</option>
                                    <option value="Data Tidak Update" <?= ($keluhan['jenis_keluhan'] == 'Data Tidak Update') ? 'selected' : '' ?>>Data Tidak Update</option>
                                    <option value="Masalah Akun" <?= ($keluhan['jenis_keluhan'] == 'Masalah Akun') ? 'selected' : '' ?>>Masalah Akun</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Rincian</label>
                                <input type="text" class="form-control" name="rincian" value="<?= $keluhan['rincian'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggapan</label>
                                <textarea id="tanggapan" class="form-control" name="tanggapan"  value="<?= $keluhan['tanggapan'] ?>" required></textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div>
        </div>
    </div>
</div>
