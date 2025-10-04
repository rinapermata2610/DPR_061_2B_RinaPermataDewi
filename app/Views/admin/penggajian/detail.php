<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="fw-bold mb-3"><?= esc($title) ?></h3>

  <!-- Data Anggota -->
  <div class="card p-4 shadow-sm mb-4">
    <h5 class="mb-3">Data Anggota</h5>
    <p class="mb-1">
      <strong><?= esc($anggota['gelar_depan'].' '.$anggota['nama_depan'].' '.$anggota['nama_belakang'].' '.$anggota['gelar_belakang']) ?></strong>
    </p>
    <p class="mb-1"><strong>Jabatan:</strong> <?= esc($anggota['jabatan']) ?></p>
    <p class="mb-0"><strong>Status:</strong> <?= esc($anggota['status_pernikahan']) ?> | <strong>Anak:</strong> <?= esc($anggota['jumlah_anak']) ?></p>
  </div>

  <!-- Tabel Komponen Gaji -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
      <strong>Rincian Komponen Gaji</strong>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-bordered mb-0">
          <thead class="table-light">
            <tr class="text-center">
              <th>Komponen</th>
              <th>Kategori</th>
              <th>Nominal</th>
              <th>Satuan</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($detail) > 0): ?>
              <?php foreach ($detail as $d): ?>
              <tr>
                <td><?= esc($d['nama_komponen']) ?></td>
                <td><?= esc($d['kategori']) ?></td>
                <td>Rp <?= number_format($d['nominal'], 0, ',', '.') ?></td>
                <td><?= esc($d['satuan']) ?></td>
              </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="4" class="text-center text-muted">Belum ada komponen gaji ditambahkan.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Total THP -->
  <div class="alert alert-success">
    <strong>Total Take Home Pay:</strong> Rp <?= number_format($take_home_pay ?? 0, 0, ',', '.') ?>
  </div>

  <!-- Tombol Kembali -->
  <div class="mt-3">
    <a href="<?= site_url('admin/penggajian') ?>" class="btn btn-secondary">
      <i class="bi bi-arrow-left"></i> Kembali
    </a>
  </div>
</div>

<?= $this->endSection() ?>
