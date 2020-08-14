<?php require APPROOT1 . '/views/inc/header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <form enctype="multipart/form-data" action="<?php echo URLROOT1; ?>/medias/add" method="post">
        <input type="file" name="coverimg" required="required" />
        <input type="submit" name="cover_up" class="btn btn-primary" value="Upload" />
      </form>

    </div>
  </div>
</div>

<div class="container gallary">
  <div class="card-group">
    <div class="row">
      <?php foreach ($data['images'] as $image) : ?>
        <div class="card col-md-4">
          <a href="<?php echo URLROOT1; ?>/medias/edit/<?php echo basename($image) ?>"><?php echo '<img class="card-img-top" src="' . $image . '" /><br /></a>'; ?>
        </div>

      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php require APPROOT1 . '/views/inc/footer.php'; ?>