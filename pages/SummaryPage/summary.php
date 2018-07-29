<?php 
  include './functional/calc.php'; 
  $mid = $_POST['mid'];
  $final = $_POST['final'];
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'script.php'; ?>
</head>
<body>
  <?php include 'menu.php' ?>
  <label>Grade A </label> <?php echo $_SESSION['A']; $?> คน
  <label> Grade B 
  <?php include 'footer.php' ?>
</body>
</html>