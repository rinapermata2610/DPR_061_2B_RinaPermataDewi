<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dashboard Client') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar */
        .navbar-custom {
            background: linear-gradient(90deg, #0d6efd, #6f42c1);
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: white !important;
            margin: 0 8px;
            transition: 0.3s;
            font-weight: 500;
        }

        .nav-link.active, .nav-link:hover {
            opacity: 0.9;
            font-weight: 600;
        }

        /* Welcome */
        .welcome {
            background: linear-gradient(90deg, #0d6efd, #6f42c1);
            color: white;
            border-radius: 18px;
            padding: 50px 30px;
            margin-top: 30px;
            text-align: center;
            box-shadow: 0px 6px 18px rgba(0,0,0,0.15);
        }

        .welcome h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .welcome p {
            font-size: 1rem;
            margin-top: 8px;
            opacity: 0.9;
        }

        /* Feature Cards */
        .feature-card {
            border-radius: 16px;
            text-align: center;
            padding: 35px 20px;
            background: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            cursor: pointer;
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.18);
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 15px;
            display: inline-block;
            color: #6f42c1;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #0d6efd, #6f42c1);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-gradient:hover {
            opacity: 0.9;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('client') ?>">
                <i class="bi bi-people-fill"></i> Dashboard Client
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto d-flex align-items-center">
                    <a class="nav-link <?= service('uri')->getSegment(2) == '' ? 'active' : '' ?>" href="<?= base_url('client') ?>">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                    <a class="nav-link <?= service('uri')->getSegment(2) == 'anggota' ? 'active' : '' ?>" href="<?= base_url('client/anggota') ?>">
                        <i class="bi bi-person-vcard"></i> Data Anggota
                    </a>
                    <a class="nav-link <?= service('uri')->getSegment(2) == 'penggajian' ? 'active' : '' ?>" href="<?= base_url('client/penggajian') ?>">
                        <i class="bi bi-cash-coin"></i> Data Penggajian
                    </a>
                    <a class="btn btn-light btn-sm ms-3 fw-bold" href="<?= base_url('logout') ?>">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <div class="container">
        <div class="welcome mt-4">
            <h1>Selamat Datang, Citizen!</h1>
            <p>Akses informasi <b>transparansi gaji DPR</b> dengan mudah dan jelas melalui dashboard ini.</p>
        </div>

        <!-- Feature Cards -->
        <div class="row mt-5 g-4">
            <div class="col-md-6">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                    <h5>Data Anggota DPR</h5>
                    <p>Lihat profil, jabatan, dan informasi lengkap anggota DPR.</p>
                    <a href="<?= base_url('client/anggota') ?>" class="btn btn-gradient">Lihat Data</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-wallet2"></i></div>
                    <h5>Data Penggajian</h5>
                    <p>Lihat rincian gaji, tunjangan, dan total pendapatan anggota DPR.</p>
                    <a href="<?= base_url('client/penggajian') ?>" class="btn btn-gradient">Lihat Data</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
