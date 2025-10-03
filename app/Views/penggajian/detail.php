<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="fw-bold"><?= esc($title) ?></h3>

  <div class="card p-4 shadow-sm mb-3">
    <h5>Data Anggota</h5>
    <p><strong><?= $anggota['nama_depan'].' '.$anggota['nama_belakang'] ?></strong> (<?= $anggota['jabatan'] ?>)</p>
  </div>

  <div class="table-responsive shadow-sm">
    <table class="table table-bordered">
      <thead class="table-primary">
        <tr>
          <th>Komponen</th>
          <th>Kategori</th>
          <th>Nominal</th>
          <th>Satuan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($detail as $d): ?>
        <tr>
          <td><?= esc($d['nama_komponen']) ?></td>
          <td><?= esc($d['kategori']) ?></td>
          <td>Rp <?= number_format($d['nominal'], 0, ',', '.') ?></td>
          <td><?= esc($d['satuan']) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="alert alert-success mt-3">
    <strong>Total Take Home Pay:</strong> Rp <?= number_format($take_home_pay ?? 0, 0, ',', '.') ?>
  </div>
</div>

<?= $this->endSection() ?>
