<?php require APPROOT . '/views/includes/header.php'; ?>
<?php flash('register_success'); ?>
<h1 class="display-4">Login to your account</h1>
<p class="lead">Please fill in your credentials to log in</p>
<form action="<?php echo URLROOT; ?>/users/login" method="post">
  <div class="mb-3">
    <label for="email">Email address </label>
    <input type="email" name="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="email@address.com">
    <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
  </div>
  <div class="mb-3">
    <label for="password">Password </label>
    <input type="password" name="password" class="form-control <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="••••••••">
    <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="showPasswordCheck">
    <label class="form-check-label" for="showPasswordCheck">Show password</label>
  </div>
  <button type="submit" value="Login" class="btn btn-dark">Login</button>
  <div id="formHelp" class="form-text">Don't have an account yet? Sign up <a href="<?php echo URLROOT; ?>/users/register">here</a>.</div>
</form>
<?php require APPROOT . '/views/includes/footer.php'; ?>

