<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs_id'] as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL;  ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end ms-1 text-decoration-none" onclick="return confirm('yakin?');" >hapus</a>
                    <a href="<?= BASEURL;  ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-end ms-1 text-decoration-none tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" >edit</a>
                    <a href="<?= BASEURL;  ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-info float-end ms-1 text-decoration-none" >detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>

<!-- The Modal -->
<div class="modal" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3 mt-2">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="masukkan nama" name="nama">
            </div>
            <div class="mb-3 mt-2">
                <label for="nim" class="form-label">NIM:</label>
                <input type="number" class="form-control" id="nim" placeholder="masukkan NIM" name="nim">
            </div>
            <div class="form-group mb-3 mt-2">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="masukkan email" name="email">
            </div>
            <div class="mb-3 mt-2">
                <label for="prodi">Prodi:</label>
                <select class="form-control" name="prodi" id="prodi">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Pangan">Teknik Pangan</option>
                    <option value="Teknik Planologi">Teknik Planologi</option>
                    <option value="Ilmu Keperawatan">Ilmu Keperawatan</option>
                </select>
            </div>


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tambah</button>
        </form>
      </div>

    </div>
  </div>
</div>
