<!DOCTYPE html>
<html>
<head>
  <?php include '../../global/script.php'; ?>
</head>
<body>
  <?php include '../../global/menu.php' ?>
  <form action="summary.php" method="POST">
    <div class="form-group">
      <label for="formGroupExampleInput">Mid</label>
      <input type="text" class="form-control" name="mid" placeholder="input score">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Final</label>
      <input type="text" class="form-control" name="final" placeholder="input score">
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>
  <?php include '../../global/footer.php' ?>
</body>
</html>