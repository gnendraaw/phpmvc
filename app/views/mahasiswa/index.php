<div class="container mt-5">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
    </button>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?=BASE_URL?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Find mahasiswa.." name="keyword" id="keyword">
        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
      </div></form>
      </div>
    </div>

    <div class="col-lg-6">
        <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item">
                    <?=$mhs['nama']?>
                    <a href="<?=BASE_URL?>/mahasiswa/hapus/<?=$mhs['id']?>" class="badge bg-danger float-end mx-1" onclick="return confirm('yakin?')">Hapus</a>
                    <a href="<?=BASE_URL?>/mahasiswa/detail/<?=$mhs['id']?>" class="badge bg-primary float-end">Detail</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASE_URL?>/mahasiswa/tambah" method="POST">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control">
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
      </div>
    </form>
    </div>
  </div>
</div>