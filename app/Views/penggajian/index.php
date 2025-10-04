<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<style>
  /* Tombol hijau gradasi untuk tambah penggajian */
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
    <a href="<?= site_url('admin/penggajian/create') ?>" class="btn btn-tambah">+ Tambah Penggajian</a>
  </div>

  <!-- Flash Message -->
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php elseif (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <!-- Search -->
  <form method="get" action="<?= site_url('admin/penggajian') ?>" class="mb-3">
    <div class="input-group shadow-sm">
      <input type="text" name="keyword" class="form-control" placeholder="Cari data... (nama, jabatan, ID)">
      <button class="btn btn-gradient" type="submit">Cari</button>
    </div>
  </form>

  <!-- Table -->
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>Jabatan</th>
              <th>Status</th>
              <th>Anak</th>
              <th>Take Home Pay</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($penggajian)): ?>
              <?php foreach ($penggajian as $row): ?>
              <tr>
                <td><?= esc($row['id_anggota']) ?></td>
                <td><?= esc(trim($row['gelar_depan'].' '.$row['nama_depan'].' '.$row['nama_belakang'].' '.$row['gelar_belakang'])) ?></td>
                <td><?= esc($row['jabatan']) ?></td>
                <td><?= esc($row['status_pernikahan']) ?></td>
                <td><?= esc($row['jumlah_anak']) ?></td>
                <td><strong>Rp <?= number_format($row['take_home_pay'], 0, ',', '.') ?></strong></td>
                <td>
                  <a href="<?= site_url('admin/penggajian/detail/'.$row['id_anggota']) ?>" class="btn btn-sm btn-info">Detail</a>
                  <a href="<?= site_url('admin/penggajian/edit/'.$row['id_anggota']) ?>" class="btn btn-sm btn-warning">Ubah</a>
                  <a href="<?= site_url('admin/penggajian/delete/'.$row['id_anggota']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="7" class="text-center text-muted">Belum ada data penggajian.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Button kembali -->
      <div class="mt-3">
        <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
