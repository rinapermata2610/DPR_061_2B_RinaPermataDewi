<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold">Kelola Data Anggota DPR</h4>
    <a href="<?= site_url('admin/anggota/create') ?>" class="btn btn-gradient">+ Tambah Anggota</a>
  </div>

  <!-- Search -->
  <form method="get" action="<?= site_url('admin/anggota') ?>" class="mb-3">
    <div class="input-group">
      <input type="text" class="form-control" name="keyword" placeholder="Cari nama, jabatan, atau ID...">
      <button class="btn btn-gradient" type="submit">Cari</button>
    </div>
  </form>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <div class="card shadow-sm border-0">
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Jabatan</th>
            <th>Status Pernikahan</th>
            <th>Jumlah Anak</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($anggota as $row): ?>
            <tr>
              <td><?= esc($row['id_anggota']) ?></td>
              <td><?= esc($row['gelar_depan'].' '.$row['nama_depan'].' '.$row['nama_belakang'].' '.$row['gelar_belakang']) ?></td>
              <td><?= esc($row['jabatan']) ?></td>
              <td><?= esc($row['status_pernikahan']) ?></td>
              <td><?= esc($row['jumlah_anak']) ?></td>
              <td>
                <a href="<?= site_url('admin/anggota/edit/'.$row['id_anggota']) ?>" class="btn btn-sm btn-warning">Ubah</a>
                <a href="<?= site_url('admin/anggota/delete/'.$row['id_anggota']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
