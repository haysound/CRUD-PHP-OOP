<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="index.php?controller=student&action=add" class="btn btn-primary">ADD</a>

        <table class="table">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Courses</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php foreach ($data as $student) :?>
                <tr>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['phone'] ?></td>
                    <td><?= $student['gender'] ?></td>
                    <td><?= $student['course'] ?></td>
                    <td>
                        <a href="index.php?controller=student&action=edit&id=<?=$student['id'] ?>" class="btn btn-danger">EDIT</a>
                        <a href="index.php?controller=student&action=delete&id=<?=$student['id'] ?>" class="btn btn-primary">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</body>
</html>