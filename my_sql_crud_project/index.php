<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Project</title>
</head>
<body>
    <?php
        $getData = "SELECT * FROM user_details";
        $result = mysqli_query($conn, $getData);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo $row["user_id"] . " " . $row["username"] . " " .
                $row["email"] . " " . $row["password"] . "<br>";}
        }
    ?>
</body>
</html>
