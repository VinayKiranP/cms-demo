<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Management | Admin System Log in</title>
  <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_PATH; ?>assets/css/main.css">
</head>

<body>
  <div class="login-container">
    <h3 class="login-title">Login</h3>
    <h2>
      <?php
      $this->load->helper('form');
      $error = $this->session->flashdata('error');
      if ($error) {
      ?>
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $error; ?>
        </div>
      <?php }
      $success = $this->session->flashdata('success');
      if ($success) {
      ?>
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $success; ?>
        </div>
      <?php } ?>
    </h2>
    <form action="<?php echo base_url(); ?>loginMe" method="post">
      <div class="form-group">
        <label>Email Address</label>
        <input type="email" class="form-control" placeholder="Email" name="email" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
      <div class="login-links">
        <p><a href="#">Forgot password?</a></p>
        <hr />
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>

  <script src="<?php echo BASE_PATH; ?>assets/js/jquery-1.12.4.min.js"></script>
  <script src="<?php echo BASE_PATH; ?>assets/js/bootstrap.min.js"></script>
</body>



</html>