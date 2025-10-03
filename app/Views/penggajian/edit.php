<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="mb-4"><?= esc($title) ?></h3>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

 <form action="<?= site_url('admin/penggajian/update/'.$penggajian['id_anggota'].'/'.$penggajian['id_komponen']) ?>" 
      method="post" class="card shadow-sm p-4">

    <div class="mb-3">
      <label for="id_anggota" class="form-label">Pilih Anggota</label>
      <select name="id_anggota" id="id_anggota" class="form-select" required>
        <?php foreach ($anggota as $a): ?>
          <option value="<?= $a['id_anggota'] ?>" <?= $a['id_anggota'] == $penggajian['id_anggota'] ? 'selected' : '' ?>>
            <?= esc($a['gelar_depan'].' '.$a['nama_depan'].' '.$a['nama_belakang'].' '.$a['gelar_belakang'].' - '.$a['jabatan']) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="id_komponen" class="form-label">Pilih Komponen Gaji</label>
      <select name="id_komponen" id="id_komponen" class="form-select" required>
        <?php foreach ($komponen as $k): ?>
          <option value="<?= $k['id_komponen'] ?>" <?= $k['id_komponen'] == $penggajian['id_komponen'] ? 'selected' : '' ?>>
            <?= esc($k['nama_komponen'].' - '.$k['jabatan'].' - '.$k['nominal'].'/'.$k['satuan']) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="d-flex justify-content-between">
      <a href="<?= site_url('admin/penggajian') ?>" class="btn btn-secondary">Batal</a>
      <button type="submit" class="btn btn-gradient">Simpan Perubahan</button>
    </div>
  </form>
</div>

<?= $this->endSection() ?>
