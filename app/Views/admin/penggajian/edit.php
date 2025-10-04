<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <h3 class="fw-bold mb-4"><?= esc($title) ?></h3>

  <!-- Data Anggota -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
      <strong>Data Anggota</strong>
    </div>
    <div class="card-body">
      <p class="mb-1"><strong>Nama:</strong> <?= esc($anggota['gelar_depan'].' '.$anggota['nama_depan'].' '.$anggota['nama_belakang'].' '.$anggota['gelar_belakang']) ?></p>
      <p class="mb-1"><strong>Jabatan:</strong> <?= esc($anggota['jabatan']) ?></p>
      <p class="mb-1"><strong>Status:</strong> <?= esc($anggota['status_pernikahan']) ?> 
        <?php if ($anggota['status_pernikahan'] === 'Kawin'): ?>
          (<?= esc($anggota['jumlah_anak']) ?> Anak)
        <?php endif; ?>
      </p>
    </div>
  </div>

  <!-- Komponen Gaji -->
  <div class="card shadow-sm mb-4">
    <div class="card-header bg-success text-white">
      <strong>Komponen Gaji Saat Ini</strong>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr class="text-center">
            <th style="width:30%">Nama Komponen</th>
            <th style="width:20%">Kategori</th>
            <th style="width:20%">Nominal</th>
            <th style="width:15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($detail) > 0): ?>
            <?php foreach ($detail as $d): ?>
              <tr>
                <td><?= esc($d['nama_komponen']) ?></td>
                <td><?= esc($d['kategori']) ?></td>
                <td>Rp <?= number_format($d['nominal'], 0, ',', '.') ?></td>
                <td class="text-center">
                  <a href="<?= site_url('admin/penggajian/delete-komponen/'.$anggota['id_anggota'].'/'.$d['id_komponen']) ?>"
                     class="btn btn-sm btn-danger"
                     onclick="return confirm('Yakin hapus komponen ini?')">
                    <i class="bi bi-trash"></i> Hapus
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="4" class="text-center text-muted">Belum ada komponen gaji ditambahkan.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Tambah Komponen -->
  <div class="card shadow-sm">
    <div class="card-header bg-warning">
      <strong>Tambah Komponen Baru</strong>
    </div>
    <div class="card-body">
      <form action="<?= site_url('admin/penggajian/store') ?>" method="post" class="row g-3">
        <input type="hidden" name="id_anggota" value="<?= esc($anggota['id_anggota']) ?>">

        <div class="col-md-8">
          <select name="id_komponen" class="form-select" required>
            <option value="">-- Pilih Komponen --</option>
            <?php foreach ($komponen as $k): ?>
              <option value="<?= $k['id_komponen'] ?>">
                <?= esc($k['nama_komponen'].' ('.$k['jabatan'].')') ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="col-md-4 d-flex align-items-center">
          <button type="submit" class="btn btn-success me-2">
            <i class="bi bi-plus-circle"></i> Tambah
          </button>
          <a href="<?= site_url('admin/penggajian') ?>" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
