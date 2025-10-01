<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">

  <!-- Welcome Banner -->
  <div class="p-5 mb-4 rounded-3 text-white shadow-sm" style="background: linear-gradient(90deg, #0d6efd, #6f42c1);">
    <div class="container-fluid py-3">
      <h2 class="fw-bold">Selamat Datang, <?= esc($username) ?>!</h2>
      <p class="lead mb-0">
        Anda login sebagai <strong><?= esc($role) ?></strong>.  
        Website ini untuk mengelola data transparansi gaji DPR.
      </p>
    </div>
  </div>

  <!-- Menu Cards -->
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100 hover-card">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Anggota DPR</h5>
          <p class="text-muted">Kelola data anggota DPR (Ketua, Wakil, Anggota).</p>
          <a href="<?= site_url('admin/anggota') ?>" class="btn btn-gradient w-100">Kelola</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100 hover-card">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Komponen Gaji</h5>
          <p class="text-muted">Atur rincian gaji, tunjangan, dan fasilitas.</p>
          <a href="#" class="btn btn-gradient w-100">Kelola</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100 hover-card">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Penggajian</h5>
          <p class="text-muted">Lihat perhitungan gaji per anggota DPR.</p>
          <a href="#" class="btn btn-gradient w-100">Kelola</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
