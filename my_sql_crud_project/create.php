<?php
    include("./config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project - Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="row m-5">
        <div class="mx-auto col-12 col-md-7 border shadow-sm">
            <div class="d-flex justify-content-between align-items-center py-4">
                <h4>Create User Form </h4>
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
            <form class="mb-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" >
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username =trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if(empty($username) || empty($email) || empty($password)){
        echo "Please fill all fields";
    }else{
        try {
         $sql = "INSERT INTO user_details (username, email, password) VALUES ('$username', '$email', '$password')";
         $result = mysqli_query($conn, $sql);
         if($result){
            echo "User created successfully";
         }else{
            echo "Failed to create user";
         }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}

?>