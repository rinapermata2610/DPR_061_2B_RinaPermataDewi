<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<style>
  /* Tombol hijau gradasi untuk simpan */
  .btn-simpan {
    background: linear-gradient(45deg, #28a745, #20c997);
    color: #fff;
    border: none;
    font-weight: 600;
    transition: 0.3s ease-in-out;
  }
  .btn-simpan:hover {
    background: linear-gradient(45deg, #218838, #17a589);
    color: #fff;
  }
</style>

<div class="container mt-4">
  <div class="card shadow-sm border-0">
    <div class="card-header text-white" style="background: linear-gradient(90deg, #0d6efd, #6f42c1);">
      <h5 class="mb-0">Tambah Data Anggota DPR</h5>
    </div>
    <div class="card-body">
      <form action="<?= site_url('admin/anggota/store') ?>" method="post">
        
        <div class="row">
          <div class="col-md-3 mb-3">
            <label>Gelar Depan</label>
            <input type="text" name="gelar_depan" class="form-control">
          </div>
          <div class="col-md-3 mb-3">
            <label>Nama Depan</label>
            <input type="text" name="nama_depan" class="form-control" required>
          </div>
          <div class="col-md-3 mb-3">
            <label>Nama Belakang</label>
            <input type="text" name="nama_belakang" class="form-control">
          </div>
          <div class="col-md-3 mb-3">
            <label>Gelar Belakang</label>
            <input type="text" name="gelar_belakang" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label>Jabatan</label>
            <select name="jabatan" class="form-select" required>
              <option value="Ketua">Ketua</option>
              <option value="Wakil Ketua">Wakil Ketua</option>
              <option value="Anggota">Anggota</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label>Status Pernikahan</label>
            <select name="status_pernikahan" class="form-select">
              <option value="Kawin">Kawin</option>
              <option value="Belum Kawin">Belum Kawin</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label>Jumlah Anak</label>
            <input type="number" name="jumlah_anak" class="form-control" min="0">
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <a href="<?= site_url('admin/anggota') ?>" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-simpan">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
