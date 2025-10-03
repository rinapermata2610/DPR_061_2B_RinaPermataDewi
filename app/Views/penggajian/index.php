<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold"><?= esc($title) ?></h3>
    <a href="<?= site_url('admin/penggajian/create') ?>" class="btn btn-gradient">+ Tambah Penggajian</a>
  </div>

  <form method="get" class="mb-3">
    <input type="text" name="keyword" class="form-control" placeholder="Cari data... (nama, jabatan, ID)">
  </form>

  <div class="table-responsive shadow-sm">
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
        <?php foreach ($penggajian as $row): ?>
        <tr>
          <td><?= esc($row['id_anggota']) ?></td>
          <td><?= esc(trim($row['gelar_depan'].' '.$row['nama_depan'].' '.$row['nama_belakang'].' '.$row['gelar_belakang'])) ?></td>
          <td><?= esc($row['jabatan']) ?></td>
          <td><?= esc($row['status_pernikahan']) ?></td>
          <td><?= esc($row['jumlah_anak']) ?></td>
          <td><strong>Rp <?= number_format($row['take_home_pay'], 0, ',', '.') ?></strong></td>
          <td>
          <a href="<?= site_url('admin/penggajian/detail/'.$row['id_anggota']) ?>" 
            class="btn btn-sm btn-info">Detail</a>
          <a href="<?= site_url('admin/penggajian/delete/'.$row['id_anggota']) ?>" 
            class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus semua penggajian anggota ini?')">Hapus</a>
        </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
