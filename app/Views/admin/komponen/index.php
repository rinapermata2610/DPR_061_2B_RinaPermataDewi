<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<style>
  /* Tombol hijau gradasi untuk tambah komponen */
  .btn-tambah {
    background: linear-gradient(45deg, #28a745, #20c997);
    color: #fff;
    border: none;
    font-weight: 600;
    transition: 0.3s ease-in-out;
  }
  .btn-tambah:hover {
    background: linear-gradient(45deg, #218838, #17a589);
    color: #fff;
  }
</style>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold"><?= esc($title) ?></h3>
    <a href="<?= site_url('admin/komponen/create') ?>" class="btn btn-tambah">+ Tambah Komponen</a>
  </div>

  <!-- Flash message -->
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php elseif (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <!-- Search -->
  <form class="mb-3" method="get" action="<?= site_url('admin/komponen') ?>">
    <div class="input-group shadow-sm">
      <input type="text" name="keyword" class="form-control" placeholder="Cari komponen gaji (nama, jabatan, kategori, ID)...">
      <button class="btn btn-gradient" type="submit">Cari</button>
    </div>
  </form>

  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Nama Komponen</th>
              <th>Kategori</th>
              <th>Jabatan</th>
              <th>Nominal</th>
              <th>Satuan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($komponen)): ?>
              <?php foreach ($komponen as $row): ?>
              <tr>
                <td><?= esc($row['id_komponen']) ?></td>
                <td><?= esc($row['nama_komponen']) ?></td>
                <td><?= esc($row['kategori']) ?></td>
                <td><?= esc($row['jabatan']) ?></td>
                <td><strong>Rp <?= number_format($row['nominal'], 0, ',', '.') ?></strong></td>
                <td><?= esc($row['satuan']) ?></td>
                <td>
                  <a href="<?= site_url('admin/komponen/edit/'.$row['id_komponen']) ?>" class="btn btn-sm btn-warning">Ubah</a>
                  <a href="<?= site_url('admin/komponen/delete/'.$row['id_komponen']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="7" class="text-center text-muted">Belum ada data komponen gaji.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Button kembali -->
      <div class="mt-3">
        <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
