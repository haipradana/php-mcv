<div class="container mt-5">

    <div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= $data['mhs_id']['nama']; ?></h4>
        <p class="card-text"><?= $data['mhs_id']['nim']; ?></p>
        <p class="card-text"><?= $data['mhs_id']['email']; ?></p>
        <p class="card-text"><?= $data['mhs_id']['prodi']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
    </div>
    </div>

</div>