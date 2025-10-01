<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="mb-3"><?= esc($title) ?></h3>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <a href="<?= site_url('admin/anggota/create') ?>" class="btn btn-primary mb-3">Tambah Anggota</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Status Pernikahan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($anggota as $a): ?>
        <tr>
          <td><?= esc($a['id_anggota']) ?></td>
          <td><?= esc(trim(($a['gelar_depan'] ?? '').' '.$a['nama_depan'].' '.$a['nama_belakang'].' '.($a['gelar_belakang'] ?? ''))) ?></td>
          <td><?= esc($a['jabatan']) ?></td>
          <td><?= esc($a['status_pernikahan']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>
