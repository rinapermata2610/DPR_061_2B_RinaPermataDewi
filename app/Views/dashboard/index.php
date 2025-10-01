<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-sm p-4">
      <h3>Selamat datang, <?= esc($user['username']) ?>!</h3>
      <p>Role Anda: <strong><?= esc($user['role']) ?></strong></p>
      <a href="<?= site_url('logout') ?>" class="btn btn-danger">Logout</a>
    </div>
  </div>
</body>
</html>
