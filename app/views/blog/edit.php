<div class="container">
    <form action="<?=BASE_URL?>/blog/update/<?=$data['blog']['id']?>" method="post">
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?=$data['blog']['penulis']?>">
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?=$data['blog']['judul']?>">
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="tulisan" style="height: 100px" name="tulisan">
                <?=$data['blog']['tulisan']?>
            </textarea>
            <label for="tulisan">Tulisan</label>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>