<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <?php if (isset($error)) : ?>
            <p class="alert alert-danger"><?= $error; ?></p>
        <?php endif;  ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender">
                    <option value="" selected>-Select-</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <h3>List of Courses</h3>
            <div class="form-group">
                <label for="course">Web</label>
                <input type="checkbox" name="course[]" value="Web">
                <label for="course">Digital</label>
                <input type="checkbox" name="course[]" value="Digital">
                <label for="course">Consultancy</label>
                <input type="checkbox" name="course[]" value="Consultancy">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="ADD" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>