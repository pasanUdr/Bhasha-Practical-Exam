<!DOCTYPE html>
<html>
<head>
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h3>Add New Course</h3>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('/courses/store') ?>">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Department</label>
            <select name="department" class="form-control" required>
                <option value="">Select Department</option>
                <option>Engineering</option>
                <option>Business Management</option>
                <option>English</option>
                <option>Hospitality</option>
                <option>Health</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Fee</label>
            <input type="number" name="fee" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Course</button>
    </form>
</div>
</body>
</html>
