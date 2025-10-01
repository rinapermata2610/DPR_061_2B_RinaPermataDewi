<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3><?= esc($title) ?></h3>
    <a href="<?= site_url('admin/komponen/create') ?>" class="btn btn-primary">+ Tambah Komponen</a>
  </div>

  <?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <form class="mb-3" method="get">
    <input type="text" name="keyword" class="form-control" placeholder="Cari komponen gaji...">
  </form>

  <div class="table-responsive">
    <table class="table table-bordered align-middle">
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
        <?php foreach ($komponen as $row): ?>
        <tr>
          <td><?= esc($row['id_komponen']) ?></td>
          <td><?= esc($row['nama_komponen']) ?></td>
          <td><?= esc($row['kategori']) ?></td>
          <td><?= esc($row['jabatan']) ?></td>
          <td>Rp <?= number_format($row['nominal'], 0, ',', '.') ?></td>
          <td><?= esc($row['satuan']) ?></td>
          <td>
            <a href="<?= site_url('admin/komponen/edit/'.$row['id_komponen']) ?>" class="btn btn-sm btn-warning">Ubah</a>
            <a href="<?= site_url('admin/komponen/delete/'.$row['id_komponen']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
