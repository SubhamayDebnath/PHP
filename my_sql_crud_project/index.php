<?php
    include("./config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="row m-5">
        <div class="mx-auto col-12 col-md-7 border shadow-sm">
            <div class="d-flex justify-content-between align-items-center py-4">
                <h4>User List</h4>
                <a href="create.php" class="btn btn-primary">
                    Add user
                </a>
            </div>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        $sql = "SELECT * FROM user_details";
                        $result = mysqli_query($conn, $sql);
                        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

                        if (count($users) > 0) {
                            foreach ($users as $user) {
                                echo "<tr>  
                                    <td>{$user['user_id']}</td>
                                    <td>{$user['username']}</td>
                                    <td>{$user['email']}</td>
                                    <td>{$user['password']}</td>
                                    <td>
                                        <a href='edit.php?id={$user['user_id']}' class='btn btn-success'>Edit</a>
                                        <a href='delete.php?id={$user['user_id']}' class='btn btn-danger'>Delete</a>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>No users found in the database</td></tr>";
                        }
                ?>
            </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>