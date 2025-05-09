<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Keluhan | Lampung Cerdas</title>
  <link rel="shortcut icon" href="<?= base_url().'assets/images/logo-lampungcerdas.png' ?>">
  <link rel="stylesheet" href="<?= base_url('css/form.css') ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  </head>

<body>
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

  <div class="container">
    <h2>Form Keluhan</h2>

    <form action="<?= base_url('user/keluhan') ?>" method="post">
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Masukkan email" onblur="cekEmail()">
        <small id="emailFeedback" style="color: red;"></small>
      </div>

      <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Masukkan nama lengkap" readonly>
      </div>

      <div class="form-group">
        <label for="nomor_wa">Nomor WhatsApp</label>
        <input type="tel" id="nomor_wa" name="nomor_wa" required placeholder="Contoh: 081234567890" readonly>
      </div>

      <div class="form-group">
        <label for="jenis_keluhan">Jenis Keluhan</label>
        <select id="jenis_keluhan" name="jenis_keluhan" required>
          <option value="">Pilih Jenis Keluhan </option>
          <option value="Masalah Teknis">Masalah Teknis</option>
          <option value="Data Tidak Update">Data Tidak Update</option>
          <option value="Masalah Akun">Masalah Akun</option>
        </select>
      </div>

      <div class="form-group">
        <label for="rincian">Detail</label>
        <textarea id="rincian" name="rincian" rows="4" required placeholder="Jelaskan keluhan anda"></textarea>
      </div>

      <div class="form-group">
        <button type="submit">Submit</button>
      </div>

    </form>
  </div>

  <script>
  function cekEmail() {
    const emailInput = document.getElementById('email');
    if (!emailInput) {
      console.warn('Elemen email tidak ditemukan!');
      return;
    }

    const email = emailInput.value.trim();
    const feedback = document.getElementById('emailFeedback');

    if (!email) return;
    
    fetch(`https://member.lampungcerdas.com/api/cekEmail/${email}`, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      }
    })
    .then(response => response.json())
    .then(data => {
      if (data && data.nama && data.no_wa) {
        document.getElementById('nama_lengkap').value = data.nama;
        document.getElementById('nomor_wa').value = data.no_wa;
        feedback.textContent = '';
      } else {
        feedback.textContent = 'Email tidak ditemukan di sistem.';
      }
    })
    .catch(error => {
      console.error('Error:', error);
      feedback.textContent = 'Terjadi kesalahan saat mengecek email.';
    });
  }
</script>

</body>
</html>
