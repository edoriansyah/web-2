<?php require_once 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        // Get users by id
        $id = $_GET['id'];
        $user = $pdo->query("SELECT * FROM users WHERE id = $id")->fetch();

        // Update users by id
        if (!empty($_POST)) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $user = $pdo->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname WHERE id = :id");
            $user->execute(compact('firstname', 'lastname', 'id'));
            header('Location: index.php');
        }
        ?>

        <!-- form edit -->
        <form action="update.php?id=<?= $id ?>" method="post">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?= $user['firstname'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?= $user['lastname'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>