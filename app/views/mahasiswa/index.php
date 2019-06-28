<div class="row">
  <div class="col-4">
    <?= Flasher::flash() ?>
  </div>
</div>

<h3 class="mb-3">Daftar Mahasiswa</h3>

<div class="row">
  <div class="col-4">
    <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#formModal">
      Tambah Data Mahasiswa
    </button>

    <ul class="list-group">
      <?php foreach($data['mhs'] as $mhs): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $mhs['nama'] ?>
          <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary">Detail</a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" name="nrp" id="nrp" class="form-control">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>