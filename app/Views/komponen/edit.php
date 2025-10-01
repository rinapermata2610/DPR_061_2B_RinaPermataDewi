<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container">
  <h3 class="mb-4"><?= esc($title) ?></h3>

  <form action="<?= site_url('admin/komponen/update/'.$komponen['id_komponen']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
      <label>Nama Komponen</label>
      <input type="text" name="nama_komponen" class="form-control" value="<?= esc($komponen['nama_komponen']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Kategori</label>
      <select name="kategori" class="form-select" required>
        <option value="Gaji Pokok" <?= $komponen['kategori']=='Gaji Pokok'?'selected':'' ?>>Gaji Pokok</option>
        <option value="Tunjangan Melekat" <?= $komponen['kategori']=='Tunjangan Melekat'?'selected':'' ?>>Tunjangan Melekat</option>
        <option value="Tunjangan Lain" <?= $komponen['kategori']=='Tunjangan Lain'?'selected':'' ?>>Tunjangan Lain</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Jabatan</label>
      <select name="jabatan" class="form-select" required>
        <option value="Ketua" <?= $komponen['jabatan']=='Ketua'?'selected':'' ?>>Ketua</option>
        <option value="Wakil Ketua" <?= $komponen['jabatan']=='Wakil Ketua'?'selected':'' ?>>Wakil Ketua</option>
        <option value="Anggota" <?= $komponen['jabatan']=='Anggota'?'selected':'' ?>>Anggota</option>
        <option value="Semua" <?= $komponen['jabatan']=='Semua'?'selected':'' ?>>Semua</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Nominal</label>
      <input type="number" name="nominal" class="form-control" value="<?= esc($komponen['nominal']) ?>" required>
    </div>
    <div class="mb-3">
      <label>Satuan</label>
      <input type="text" name="satuan" class="form-control" value="<?= esc($komponen['satuan']) ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= site_url('admin/komponen') ?>" class="btn btn-secondary">Kembali</a>
  </form>
</div>

<?= $this->endSection() ?>
