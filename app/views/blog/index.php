<div class="container mt-5">
    <div class="row mb-3">
        <div class="col lg-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogForm">
                Launch demo modal
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <div class="tr">
                        <th>No</th>
                        <th>Penulis</th>
                        <th>Judul</th>
                        <th>Tulisan</th>
                        <th>Aksi</th>
                    </div>
                </thead>
                <tbody>
                    <?php $index = 1;?>
                    <?php foreach($data['blog'] as $blog):?>
                        <tr>
                            <td><?=$index++?></td>
                            <td><?=$blog['penulis']?></td>
                            <td><?=$blog['judul']?></td>
                            <td><?=$blog['tulisan']?></td>
                            <td>
                                <!-- <a href="<?=BASE_URL?>/blog/edit/<?=$blog['id']?>" class="btn btn-primary">Edit</a> -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editForm<?=$blog['id']?>">
                                    Edit
                                </button>
                                <a href="<?=BASE_URL?>/blog/delete/<?=$blog['id']?>" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="modal fade" id="blogForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASE_URL?>/blog/create" method="post">
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <select name="user_id" id="penulis" class="form-control">
                    <?php foreach($data['user'] as $user): ?>
                        <option value="<?=$user['id']?>"><?=$user['username']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="tulisan" style="height: 100px" name="tulisan"></textarea>
                <label for="tulisan">Tulisan</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Post</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php foreach($data['blog'] as $blog):?>
    <div class="modal fade" id="editForm<?=$blog['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=BASE_URL?>/blog/update/<?=$blog['id']?>" method="post">
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="<?=$blog['penulis']?>">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?=$blog['judul']?>">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="tulisan" style="height: 100px" name="tulisan"><?=$blog['tulisan']?></textarea>
                <label for="tulisan">Tulisan</label>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>