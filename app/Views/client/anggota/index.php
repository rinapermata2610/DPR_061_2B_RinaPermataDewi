<?= $this->extend('layouts/client') ?>
<?= $this->section('content') ?>

<div class="container mt-4">

  <!-- Header Section dengan gradasi -->
  <div class="p-4 mb-4 rounded text-white shadow-sm" 
       style="background: linear-gradient(90deg, #0d6efd, #6f42c1);">
    <h3 class="fw-bold mb-1">Data Anggota DPR</h3>
    <p class="mb-0 text-light">Informasi anggota DPR yang dapat diakses publik</p>
  </div>

  <!-- Pencarian -->
  <form method="get" action="<?= site_url('client/anggota') ?>" class="mb-3">
    <div class="input-group shadow-sm">
      <input type="text" class="form-control" name="keyword" placeholder="Cari berdasarkan ID, nama, atau jabatan...">
      <button class="btn btn-primary" type="submit">Cari</button>
    </div>
  </form>

  <!-- Tabel Data -->
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Nama Lengkap</th>
              <th>Jabatan</th>
              <th>Status</th>
              <th>Anak</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($anggota)): ?>
              <?php foreach ($anggota as $row): ?>
                <tr>
                  <td><?= esc($row['id_anggota']) ?></td>
                  <td><?= esc(trim($row['gelar_depan'].' '.$row['nama_depan'].' '.$row['nama_belakang'].' '.$row['gelar_belakang'])) ?></td>
                  <td>
                    <span class="badge bg-secondary">
                      <?= esc($row['jabatan']) ?>
                    </span>
                  </td>
                  <td>
                    <?php if ($row['status_pernikahan'] == 'Kawin'): ?>
                      <span class="badge bg-success">Kawin</span>
                    <?php else: ?>
                      <span class="badge bg-warning text-dark">Belum Kawin</span>
                    <?php endif; ?>
                  </td>
                  <td><?= esc($row['jumlah_anak']) ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data anggota.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
