<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Client Page') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar-client {
      background: linear-gradient(90deg, #0d6efd, #6f42c1);
    }
  </style>
</head>
<body>
  <!-- Navbar khusus client -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-client shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="<?= site_url('/') ?>">
        <i class="bi bi-building"></i> Transparansi Gaji DPR
      </a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= site_url('/') ?>"><i class="bi bi-house"></i> Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('client/anggota') ?>"><i class="bi bi-people-fill"></i> Anggota</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= site_url('client/penggajian') ?>"><i class="bi bi-wallet2"></i> Penggajian</a></li>
      </ul>
    </div>
  </nav>

  <main class="container py-4">
    <?= $this->renderSection('content') ?>
  </main>
</body>
</html>
