<div class="row">
  <?php foreach($data['mhs'] as $mhs): ?>
    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <h4><?= $mhs['nama'] ?></h4>
          <ul>
            <li>Email: <?= $mhs['email'] ?></li>
            <li>NRP: <?= $mhs['nrp'] ?></li>
            <li>Jurusan: <?= $mhs['jurusan'] ?></li>
          </ul>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>