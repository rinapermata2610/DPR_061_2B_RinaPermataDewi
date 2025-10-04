<?= $this->extend('layouts/client') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Data Penggajian Anggota DPR</h2>
  </div>

  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>ID Anggota</th>
              <th>Nama Lengkap</th>
              <th>Jabatan</th>
              <th class="text-end">Take Home Pay</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($penggajian)): ?>
              <?php foreach ($penggajian as $row): ?>
                <tr>
                  <td><?= esc($row['id_anggota']) ?></td>
                  <td><?= esc($row['nama_depan'].' '.$row['nama_belakang']) ?></td>
                  <td><?= esc($row['jabatan']) ?></td>
                  <td class="text-end">
                    <span class="badge bg-success px-3 py-2">
                      Rp <?= number_format($row['take_home_pay'], 0, ',', '.') ?>
                    </span>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="4" class="text-center text-muted">
                  Belum ada data penggajian.
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
