<link rel="stylesheet" href="<?=BASE_URL?>/css/bootstrap.css">
<div class="container">
    <form action="<?=BASE_URL?>/login/sign" method="post">
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group mb-3">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
        <a href="<?=BASE_URL?>/register">Don't have an account?</a>
    </form>
</div>