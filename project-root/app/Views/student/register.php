<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <<div class="container mt-5 flex align-items-center">
        <h3>Register Student</h3>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/student/store') ?>">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Birthday</label>
                <input type="date" name="birthday" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Address</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Contact Number</label>
                <input type="text" name="contact_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Course</label>
                <select name="course_id" class="form-control" required>
                    <option value="">Select Course</option>
                    <?php foreach ($courses as $course): ?>
                        <option value="<?= $course['id'] ?>"><?= $course['course_name'] ?> (<?= $course['department'] ?>)</option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register Student</button>
        </form>
        </div>

</body>

</html>