<?php require APPROOT . '/views/includes/header.php'; ?>
<div class="container">
  <h1 class="display-3"><?php echo $data['title']; ?></h1>
  <p class="lead"><?php echo $data['description']; ?></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>