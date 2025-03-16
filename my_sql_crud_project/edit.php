<?php
    include("./config.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM user_details WHERE user_id = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
            }
        }
    }
?>

<?php 
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $username =trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $sql = "UPDATE user_details SET username = '$username', email = '$email', password = '$password' WHERE user_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "User updated successfully";
        // header("location: index.php");
    }else{
        echo "Error updating user";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project - Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="row m-5">
        <div class="mx-auto col-12 col-md-7 border shadow-sm">
            <div class="d-flex justify-content-between align-items-center py-4">
                <h4>Update User Form </h4>
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
            <form class="mb-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" value="<?php echo $username; ?>" name="username" id="username" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" id="email" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" id="password" >
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

