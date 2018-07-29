<?php
  session_start();
  session_destroy();
  if(isset($_SESSION['registed_email'])) {
  ?>
    <div class="RegisterPage_Alert">
      <div class="alert alert-danger" role="alert">
        Two passwords that you enter is inconsistent!
      </div>
    </div>
<?php
  }
?>
<form action="../../functional/register/isRegisterComplete.php" method="post">
  <div class="offset-md-3 col-md-6">
    <div class="form-group">
      <label for="emailInput">Email address</label>
      <input 
        type="email" 
        class="form-control" 
        name="email" 
        placeholder="Enter email" 
        value="<?php echo $_SESSION['registed_email']?>"
        required
      >
    </div>
    <div class="form-group">
      <label for="passwordInput">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>    
    </div>
    <div class="form-group">
      <label for="confirmPasswordInput">Confirm Password</label>
      <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
  </div>
</form>