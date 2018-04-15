<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
<?php if (isset($error)): ?>
    <h1 align="center"><?= $error ?></h1>
    <div align="center">
        <a href="../index.php">Go to start page</a>
    </div>
    <?php exit(); ?>
<?php endif; ?>

<table border="1" align="center">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Email</th>
        <th>Exam Score</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($studentSorter->getStudents() as $student): ?>
        <tr>
            <td><?= $student->getFirstName() ?></td>
            <td><?= $student->getLastName() ?></td>
            <td><?= $student->getEmail() ?></td>
            <td><?= $student->getExamScore() ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="3">Average Score:</td>
        <td><b><?= $studentSorter->calcAverageScore() ?></b></td>
    </tr>
    </tbody>
</table>
<div align="center">
    <a href="../index.php">Go to start page</a>
</div>