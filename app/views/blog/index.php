<div class="container mt-5">
    <?php foreach($data['blog'] as $blog): ?>
        <ul>
            <li>
                <?=$blog['judul']?>
            </li>
            <li>
                <?=$blog['penulis']?>
            </li>
            <li>
                <?=$blog['tulisan']?>
            </li>
        </ul>
    <?php endforeach ?>
</div>