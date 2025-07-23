<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column align-items-center">

        <div class="container text-center mt-5 d-flex justify-content-between align-items-center">
            <h3>Welcome to Admin Dashboard, <?= session('username') ?></h3>
            <a href="<?= base_url('/logout') ?>" class="btn btn-danger">Logout</a>
        </div>

        <a class="btn btn-primary mt-5" href="<?= base_url('/student/list') ?>">View All Students</a>
        <a class="btn btn-primary mt-5" href="<?= base_url('/courses/create') ?>">Add New Course</a>
        <a class="btn btn-primary mt-5" href="<?= base_url('/student/register') ?>">Register New Student</a>
        
    </div>

</body>

</html>