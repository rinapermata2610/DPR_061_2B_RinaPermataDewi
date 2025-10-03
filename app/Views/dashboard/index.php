<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container py-5">

  <!-- Welcome Banner -->
  <div class="card border-0 shadow-lg mb-5" style="background: linear-gradient(135deg, #0d6efd, #6f42c1); border-radius: 1rem;">
    <div class="card-body text-white d-flex align-items-center p-4">
      <div class="me-3">
        <i class="bi bi-person-circle fs-1"></i>
      </div>
      <div>
        <h4 class="fw-bold mb-1">Selamat Datang, <?= esc($username) ?>!</h4>
        <p class="mb-0">Anda login sebagai <strong><?= esc($role) ?></strong>. Gunakan menu di bawah untuk mengelola sistem transparansi gaji DPR.</p>
      </div>
    </div>
  </div>

  <!-- Menu Cards -->
  <div class="row g-4">
    <!-- Anggota DPR -->
    <div class="col-md-4">
      <div class="card menu-card text-center shadow-sm border-0 h-100">
        <div class="card-body py-5">
          <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
          <h5 class="fw-bold">Anggota DPR</h5>
          <p class="text-muted small">Kelola data anggota DPR (Ketua, Wakil, Anggota).</p>
          <a href="<?= site_url('admin/anggota') ?>" class="btn btn-outline-primary rounded-pill mt-2 px-4">Kelola</a>
        </div>
      </div>
    </div>

    <!-- Komponen Gaji -->
    <div class="col-md-4">
      <div class="card menu-card text-center shadow-sm border-0 h-100">
        <div class="card-body py-5">
          <i class="bi bi-cash-coin text-success fs-1 mb-3"></i>
          <h5 class="fw-bold">Komponen Gaji</h5>
          <p class="text-muted small">Atur rincian gaji, tunjangan, dan fasilitas.</p>
          <a href="<?= site_url('admin/komponen') ?>" class="btn btn-outline-success rounded-pill mt-2 px-4">Kelola</a>
        </div>
      </div>
    </div>

    <!-- Penggajian -->
    <div class="col-md-4">
      <div class="card menu-card text-center shadow-sm border-0 h-100">
        <div class="card-body py-5">
          <i class="bi bi-wallet2 text-warning fs-1 mb-3"></i>
          <h5 class="fw-bold">Penggajian</h5>
          <p class="text-muted small">Lihat perhitungan gaji per anggota DPR.</p>
          <a href="<?= site_url('admin/penggajian') ?>" class="btn btn-outline-warning rounded-pill mt-2 px-4">Kelola</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom Style -->
<style>
  .menu-card {
    border-radius: 1rem;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .menu-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.15);
  }
</style>

<?= $this->endSection() ?>
