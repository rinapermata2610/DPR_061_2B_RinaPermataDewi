<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Login') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      min-height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
      background: #f8f9fa;
    }
    .login-wrapper {
      display: flex;
      width: 100%;
      max-width: 950px;
      background: #fff;
      border-radius: 1rem;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    /* Left Panel */
    .login-left {
      flex: 1;
      padding: 3rem 2rem;
      background: linear-gradient(135deg, #0d6efd, #6f42c1);
      color: #fff;
      position: relative;
    }
    .login-left h2 {
      font-size: 2rem;
      font-weight: 700;
    }
    .login-left p {
      margin-top: 1rem;
      line-height: 1.6;
      font-size: 0.95rem;
      opacity: 0.9;
    }
    /* Decorative elements */
    .decor {
      position: absolute;
      width: 120px;
      height: 30px;
      background: rgba(255,255,255,0.3);
      border-radius: 20px;
      transform: rotate(-25deg);
      animation: float 6s infinite ease-in-out;
    }
    .decor:nth-child(1) { top: 20%; left: 10%; width: 160px; }
    .decor:nth-child(2) { top: 50%; left: 20%; animation-delay: 2s; }
    .decor:nth-child(3) { top: 70%; left: 5%; width: 200px; animation-delay: 4s; }
    @keyframes float {
      0% { transform: translateY(0) rotate(-25deg); }
      50% { transform: translateY(-20px) rotate(-25deg); }
      100% { transform: translateY(0) rotate(-25deg); }
    }

    /* Right Panel */
    .login-right {
      flex: 1;
      padding: 3rem 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #fff;
    }
    .login-form {
      width: 100%;
      max-width: 350px;
    }
    .login-form h4 {
      text-align: center;
      margin-bottom: 2rem;
      font-weight: 600;
      color: #0d6efd;
    }
    .input-group-text {
      background: #f1f3f5;
      border-right: 0;
    }
    .form-control {
      border-left: 0;
    }
    .btn-gradient {
      background: linear-gradient(to right, #0d6efd, #6f42c1);
      color: #fff;
      font-weight: 600;
      border: none;
      border-radius: 50px;
      padding: 0.6rem;
      transition: opacity 0.3s;
    }
    .btn-gradient:hover {
      opacity: 0.9;
    }
    .extra-links {
      display: flex;
      justify-content: space-between;
      font-size: 0.85rem;
      margin-top: 0.5rem;
    }
    .extra-links a {
      text-decoration: none;
      color: #6c757d;
    }
    .extra-links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <!-- Left Panel -->
    <div class="login-left">
      <h2>Aplikasi Transparansi Gaji DPR</h2>
      <p>
        Sistem ini dirancang untuk memberikan informasi yang transparan mengenai 
        perhitungan gaji anggota DPR.
      </p>
      <div class="decor"></div>
      <div class="decor"></div>
      <div class="decor"></div>
    </div>

    <!-- Right Panel -->
    <div class="login-right">
      <div class="login-form">
        <h4>Login</h4>

        <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="<?= site_url('login') ?>" method="post">
          <?= csrf_field() ?>

          <!-- Username -->
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-person"></i></span>
            <input type="text" 
                   name="username" 
                   class="form-control" 
                   placeholder="Username" 
                   required autofocus>
          </div>

          <!-- Password -->
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="bi bi-lock"></i></span>
            <input type="password" 
                   name="password" 
                   id="password" 
                   class="form-control" 
                   placeholder="Password" 
                   required>
            <button type="button" class="btn btn-outline-secondary" id="togglePassword">
              <i class="bi bi-eye"></i>
            </button>
          </div>

          <button type="submit" class="btn btn-gradient w-100 mt-3">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Toggle Password -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggleBtn = document.getElementById("togglePassword");
      const passwordInput = document.getElementById("password");

      toggleBtn.addEventListener("click", function () {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);

        this.innerHTML = type === "password"
          ? '<i class="bi bi-eye"></i>'
          : '<i class="bi bi-eye-slash"></i>';
      });
    });
  </script>
</body>
</html>
