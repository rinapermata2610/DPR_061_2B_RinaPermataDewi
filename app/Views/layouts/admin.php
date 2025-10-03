<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Admin Panel') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<!-- Navbar global -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(90deg, #0d6efd, #6f42c1);">
  <div class="container-fluid">
    <span class="navbar-brand fw-bold">Transparansi Gaji DPR</span>
    <div class="d-flex">
      <a href="<?= site_url('logout') ?>" class="btn btn-light fw-bold">
        <i class="bi bi-box-arrow-right"></i> Logout
      </a>
    </div>
  </div>
</nav>

<!-- Content Section -->
<main>
  <?= $this->renderSection('content') ?>
</main>

</body>
</html>
