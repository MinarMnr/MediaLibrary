<?php require APPROOT1 . '/views/inc/header.php'; ?>

<div class="row mb-3">
  <div class="col-md-6">
    <h1>Media Library</h1>
  </div>
  <div class="col-md-6">
    <a class="btn btn-primary pull-right" href="<?php echo URLROOT1; ?>/medias/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Photo</a>
  </div>

  <?php foreach ($data['images'] as $image) : ?>
    <div class="card card-body mb-3">

      <?php echo '<img src="' . $image . '" /><br />'; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php require APPROOT1 . '/views/inc/footer.php'; ?>