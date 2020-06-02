<?php
include '../model/Db.php';
$db = new Db();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->login($_POST);
}
if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
} else {
    $admin = 0;
}

if ($admin != 0) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Restoran Tepi Laut</title>
    <?php include 'components/head.php'; ?>


</head>

<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Admin Restoran Tepi Laut</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="username" class="form-control" required="required" autofocus="autofocus">
                            <label>Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" name="password" class="form-control" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>

                    <button class="btn btn-warning btn-block" type="submit" name="login">Login</button>
                </form>



            </div>
        </div>
    </div>



</body>

<?php include 'components/script.php' ?>

</html>