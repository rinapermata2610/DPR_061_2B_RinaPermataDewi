<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold"><?= esc($title ?? 'Kelola Data Anggota DPR') ?></h3>
    <a href="<?= site_url('admin/anggota/create') ?>" class="btn btn-gradient">+ Tambah Anggota</a>
  </div>

  <!-- Search -->
  <form method="get" action="<?= site_url('admin/anggota') ?>" class="mb-3">
    <div class="input-group shadow-sm">
      <input type="text" class="form-control" name="keyword" placeholder="Cari data... (nama, jabatan, ID)">
      <button class="btn btn-gradient" type="submit">Cari</button>
    </div>
  </form>

  <!-- Flash message -->
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php elseif (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

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
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($anggota)): ?>
              <?php foreach ($anggota as $row): ?>
                <tr>
                  <td><?= esc($row['id_anggota']) ?></td>
                  <td><?= esc(trim($row['gelar_depan'].' '.$row['nama_depan'].' '.$row['nama_belakang'].' '.$row['gelar_belakang'])) ?></td>
                  <td><?= esc($row['jabatan']) ?></td>
                  <td><?= esc($row['status_pernikahan']) ?></td>
                  <td><?= esc($row['jumlah_anak']) ?></td>
                  <td>
                    <a href="<?= site_url('admin/anggota/edit/'.$row['id_anggota']) ?>" class="btn btn-sm btn-warning">Ubah</a>
                    <a href="<?= site_url('admin/anggota/delete/'.$row['id_anggota']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data anggota.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
      <!-- Button kembali -->
      <div class="mt-3">
        <a href="<?= site_url('dashboard') ?>" class="btn btn-secondary">← Kembali</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
