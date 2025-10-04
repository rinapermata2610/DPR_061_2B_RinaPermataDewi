<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Admin Panel') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar-custom {
      background: linear-gradient(90deg, #0d6efd, #6f42c1);
    }
  </style>
</head>
<body>
  <!-- Navbar khusus admin -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="<?= site_url('admin/dashboard') ?>">
        <i class="bi bi-speedometer2"></i> Admin Panel
      </a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/dashboard') ?>"><i class="bi bi-house"></i> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/anggota') ?>"><i class="bi bi-people-fill"></i> Anggota DPR</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/komponen') ?>"><i class="bi bi-cash-coin"></i> Komponen Gaji</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/penggajian') ?>"><i class="bi bi-wallet2"></i> Penggajian</a></li>
        <li class="nav-item"><a class="btn btn-light ms-3" href="<?= site_url('logout') ?>"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
      </ul>
    </div>
  </nav>

  <main class="container py-4">
    <?= $this->renderSection('content') ?>
  </main>
</body>
</html>
