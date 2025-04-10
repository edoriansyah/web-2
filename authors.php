<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Authors - Book Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once 'topnav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include_once 'sidenav.php'; ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Authors</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Authors</li>
                    </ol>

                    <div class="row">
                        <div class="col-md-12">
                            <a href="author-create.php" class="btn btn-primary mb-2">New author</a>
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody class="table-group-divider">
                                    <?php
                                    require_once 'models/Author.php';
                                    $authors = models\Author::get();
                                    $no = 1;
                                    if ($authors) {
                                        foreach ($authors as $author) {
                                            echo "<tr>";
                                            echo '<td>' . $no++ . '</td>';
                                            echo "<td>$author->first_name</td>";
                                            echo "<td>$author->middle_name</td>";
                                            echo "<td>$author->last_name</td>";
                                            echo '<td class="text-center">
                                            <a href="author-edit.php?id=' . $author->author_id . '"><i class="fa-regular fa-pen-to-square"></i> Edit</a> | 
                                            <a href="author-delete.php?id=' . $author->author_id . '" class="text-danger delete-confirmation"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                        </td>';
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan=5>No data authors.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once 'footer.php'; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>