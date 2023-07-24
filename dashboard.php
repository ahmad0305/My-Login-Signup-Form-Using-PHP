<?php
$con = mysqli_connect("localhost","root","","login_register");

session_start();
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE id = '$id' && email = '$email'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $row['name'] ?></title>
</head>
<body>

    <div>
        <table border="1" cellspacing="10px" cellpadding="10px">
            <tr>
                <td>Name</td>
                <td>Email</td>
            </tr>

            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
            </tr>
        </table>

        <a href="logout.php">Logout</a>
    </div>
    
</body>
</html>