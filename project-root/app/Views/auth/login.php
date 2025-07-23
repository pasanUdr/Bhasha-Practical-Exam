<!DOCTYPE html>
<html>
<head>
    <title>Login - X Institute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Admin Login</h3>

            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('/login') ?>">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="mt-3 text-center">
                    <a href="#">Forgot password?</a> |
                    <a href="#">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
