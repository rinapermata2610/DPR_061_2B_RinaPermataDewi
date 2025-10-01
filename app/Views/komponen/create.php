<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container">
  <h3 class="mb-4"><?= esc($title) ?></h3>

  <form action="<?= site_url('admin/komponen/store') ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
      <label>ID Komponen</label>
      <input type="text" name="id_komponen" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Nama Komponen</label>
      <input type="text" name="nama_komponen" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Kategori</label>
      <select name="kategori" class="form-select" required>
        <option value="Gaji Pokok">Gaji Pokok</option>
        <option value="Tunjangan Melekat">Tunjangan Melekat</option>
        <option value="Tunjangan Lain">Tunjangan Lain</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Jabatan</label>
      <select name="jabatan" class="form-select" required>
        <option value="Ketua">Ketua</option>
        <option value="Wakil Ketua">Wakil Ketua</option>
        <option value="Anggota">Anggota</option>
        <option value="Semua">Semua</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Nominal</label>
      <input type="number" name="nominal" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Satuan</label>
      <input type="text" name="satuan" class="form-control" required placeholder="Bulan / Periode">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('admin/komponen') ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>

<?= $this->endSection() ?>
