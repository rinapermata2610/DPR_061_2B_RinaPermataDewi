<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="mb-3"><?= esc($title) ?></h3>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <form action="<?= site_url('admin/anggota/store') ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
      <label class="form-label">Nama Depan</label>
      <input type="text" name="nama_depan" class="form-control" value="<?= old('nama_depan') ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Nama Belakang</label>
      <input type="text" name="nama_belakang" class="form-control" value="<?= old('nama_belakang') ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Gelar Depan</label>
      <input type="text" name="gelar_depan" class="form-control" value="<?= old('gelar_depan') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Gelar Belakang</label>
      <input type="text" name="gelar_belakang" class="form-control" value="<?= old('gelar_belakang') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Jabatan</label>
      <select name="jabatan" class="form-select" required>
        <option value="">-- Pilih Jabatan --</option>
        <option value="Ketua">Ketua</option>
        <option value="Wakil Ketua">Wakil Ketua</option>
        <option value="Anggota">Anggota</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Status Pernikahan</label>
      <select name="status_pernikahan" class="form-select" required>
        <option value="">-- Pilih Status --</option>
        <option value="Kawin">Kawin</option>
        <option value="Belum Kawin">Belum Kawin</option>
      </select>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('admin/anggota') ?>" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?= $this->endSection() ?>
