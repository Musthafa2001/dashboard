<?php include "libs/load.php";?>

<?php

if(Session::isauthenticated()){
  header('Location: index.php');
  die();
}
?>


<?php Session::load('head');?>

<body>

<?php Session::load("__header");?>

    <!-- Main Centered Login Section -->
  <?php  Session::load('__login')?>

    <!-- Minimal Footer -->
<?php Session::load('__footer')?>
