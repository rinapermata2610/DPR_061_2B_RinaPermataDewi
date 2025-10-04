<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<style>
  /* Tombol hijau gradasi untuk Simpan */
  .btn-simpan {
    background: linear-gradient(45deg, #28a745, #20c997);
    color: #fff;
    border: none;
    font-weight: 600;
    transition: 0.3s ease-in-out;
  }
  .btn-simpan:hover {
    background: linear-gradient(45deg, #218838, #17a589);
    color: #fff;
  }
</style>

<div class="container mt-4">
  <h3 class="fw-bold mb-3"><?= esc($title) ?></h3>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <form action="<?= site_url('admin/penggajian/store') ?>" method="post" class="card p-4 shadow-sm">
    <?= csrf_field() ?>

    <div class="mb-3">
      <label class="form-label">Pilih Anggota</label>
      <select name="id_anggota" class="form-select" required>
        <option value="">-- Pilih Anggota --</option>
        <?php foreach ($anggota as $a): ?>
          <option value="<?= $a['id_anggota'] ?>">
            <?= $a['nama_depan'].' '.$a['nama_belakang'].' ('.$a['jabatan'].')' ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Pilih Komponen Gaji</label>
      <select name="id_komponen" class="form-select" required>
        <option value="">-- Pilih Komponen --</option>
        <?php foreach ($komponen as $k): ?>
          <option value="<?= $k['id_komponen'] ?>">
            <?= $k['nama_komponen'].' - Rp '.number_format($k['nominal'], 0, ',', '.') ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn btn-simpan">Simpan</button>
  </form>
</div>

<?= $this->endSection() ?>
