<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4">Registered Students</h3>

    <?php if (count($students) > 0): ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Course</th>
                    <th>Registered On</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= esc($student['first_name']) ?></td>
                        <td><?= esc($student['last_name']) ?></td>
                        <td><?= esc($student['birthday']) ?></td>
                        <td><?= esc($student['address']) ?></td>
                        <td><?= esc($student['contact_number']) ?></td>
                        <td><?= esc($student['course_name']) ?></td>
                        <td><?= date('Y-m-d', strtotime($student['created_at'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-info">No students found.</div>
    <?php endif; ?>
</div>
</body>
</html>
