<link rel="stylesheet" href="<?=BASE_URL?>/css/bootstrap.css">
<div class="container">
    <form action="<?=BASE_URL?>/register/sign" method="post">
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group mb-3">
            <label for="cpassword">Confirm password</label>
            <input type="password" class="form-control" name="cpassword" id="cpassword">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" name="submit" value="Sign up">
        </div>
        <a href="<?=BASE_URL?>/login">Already have an account?</a>
    </form>
</div>