<?php
include 'model/Db.php';
$db = new Db();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/head.php'; ?>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <?php include 'components/diatasnavbar.php'; ?>

  <!-- ======= Header ======= -->
  <?php include 'components/navbar.php'; ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php include 'content.php'; ?>
  </main><!-- End #main -->

  <?php include 'components/footer.php'; ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include 'components/script.php'; ?>

</body>

</html>