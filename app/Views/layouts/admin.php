<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Admin Panel') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background: linear-gradient(90deg, #0d6efd, #6f42c1);
    }
    .btn-gradient {
      background: linear-gradient(90deg, #0d6efd, #6f42c1);
      color: white;
      font-weight: 500;
      border: none;
      transition: 0.3s;
    }
    .btn-gradient:hover {
      opacity: 0.9;
      transform: scale(1.02);
    }
    .hover-card {
      transition: 0.3s;
      border-radius: 10px;
    }
    .hover-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="<?= site_url('dashboard') ?>">Transparansi Gaji DPR</a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/anggota') ?>">Anggota</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Komponen Gaji</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Penggajian</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="<?= site_url('logout') ?>">Logout</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <?= $this->renderSection('content') ?>
  </main>
</body>
</html>
