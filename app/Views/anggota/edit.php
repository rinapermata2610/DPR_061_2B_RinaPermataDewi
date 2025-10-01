<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
  <div class="card shadow-sm border-0">
    <div class="card-header text-white" style="background: linear-gradient(90deg, #0d6efd, #6f42c1);">
      <h5 class="mb-0">Ubah Data Anggota DPR</h5>
    </div>
    <div class="card-body">
      <form action="<?= site_url('admin/anggota/update/'.$anggota['id_anggota']) ?>" method="post">

        <div class="row">
          <div class="col-md-3 mb-3">
            <label>Gelar Depan</label>
            <input type="text" name="gelar_depan" class="form-control" value="<?= esc($anggota['gelar_depan']) ?>">
          </div>
          <div class="col-md-3 mb-3">
            <label>Nama Depan</label>
            <input type="text" name="nama_depan" class="form-control" value="<?= esc($anggota['nama_depan']) ?>" required>
          </div>
          <div class="col-md-3 mb-3">
            <label>Nama Belakang</label>
            <input type="text" name="nama_belakang" class="form-control" value="<?= esc($anggota['nama_belakang']) ?>">
          </div>
          <div class="col-md-3 mb-3">
            <label>Gelar Belakang</label>
            <input type="text" name="gelar_belakang" class="form-control" value="<?= esc($anggota['gelar_belakang']) ?>">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label>Jabatan</label>
            <select name="jabatan" class="form-select" required>
              <option <?= $anggota['jabatan']=='Ketua'?'selected':'' ?>>Ketua</option>
              <option <?= $anggota['jabatan']=='Wakil Ketua'?'selected':'' ?>>Wakil Ketua</option>
              <option <?= $anggota['jabatan']=='Anggota'?'selected':'' ?>>Anggota</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label>Status Pernikahan</label>
            <select name="status_pernikahan" class="form-select">
              <option <?= $anggota['status_pernikahan']=='Kawin'?'selected':'' ?>>Kawin</option>
              <option <?= $anggota['status_pernikahan']=='Belum Kawin'?'selected':'' ?>>Belum Kawin</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label>Jumlah Anak</label>
            <input type="number" name="jumlah_anak" class="form-control" value="<?= esc($anggota['jumlah_anak']) ?>">
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <a href="<?= site_url('admin/anggota') ?>" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-gradient">Update</button>
        </div>

      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
