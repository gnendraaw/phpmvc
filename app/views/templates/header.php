<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?=BASE_URL?>/css/bootstrap.css">
    <title>Halaman <?= $data['title'] ?></title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=BASE_URL?>/home">PHPMVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=BASE_URL?>/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=BASE_URL?>/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>/mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>/about">About</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    </div>