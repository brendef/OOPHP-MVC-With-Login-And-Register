<?php require APPROOT . '/views/includes/header.php'; ?>
<h1 class="display-4">Create An Account</h1>
<p class="lead">Please fill out this form to register</p>
<form action="<?php echo URLROOT; ?>/users/register" method="post">
  <div class="mb-3">
    <label for="name">Full name</label>
    <input type="text" name="name" class="form-control <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>" placeholder="Your ful name">
    <span class="invalid-feedback"><?php echo $data['name_error']; ?></span>
  </div>
  <div class="mb-3">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="email@address.com">
    <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
  </div>
  <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="••••••••">
    <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
  </div>
  <div class="mb-3">
    <label for="confirm_password">Confirm password</label>
    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>" placeholder="••••••••">
    <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="showPasswordCheck">
    <label class="form-check-label" for="showPasswordCheck">Show password</label>
  </div>
  <button type="submit" value="Register" class="btn btn-dark">Register</button>
  <div id="formHelp" class="form-text">Already have an account yet? Login <a href="<?php echo URLROOT; ?>/users/login">here</a>.</div>
</form>
<?php require APPROOT . '/views/includes/footer.php'; ?>