<?php require APPROOT1 . '/views/inc/header.php'; ?>
<form enctype="multipart/form-data" action="<?php echo URLROOT1; ?>/medias/add" method="post">
    <p><input type="file" name="coverimg" required="required" /></p>
    <p><input type="submit" name="cover_up" style="background-color: rgb(255, 102, 0);" class="btn btn-warning" value="Upload" /></p>
</form>
<?php require APPROOT1 . '/views/inc/footer.php'; ?>