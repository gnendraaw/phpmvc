<div class="container mt-5">
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
                                <a href="<?=BASE_URL?>/blog/edit/<?=$blog['id']?>" class="btn btn-primary" onclick="return confirm('yakin?')">Edit</a>
                                <a href="<?=BASE_URL?>/blog/delete/<?=$blog['id']?>" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>