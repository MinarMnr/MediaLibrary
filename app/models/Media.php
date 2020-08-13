<?php
class Media
{
    public function __construct()
    {
        //echo "media loaded";
    }

    public function upload($tmp_dir, $upload_dir, $coverpic)
    {
        $results = move_uploaded_file($tmp_dir, $upload_dir . $coverpic);
        var_dump($results);
        return $results;
    }
    public function getAllImages()
    {
        $dir_name = "img/";
        $images = glob($dir_name . "*");
        var_dump($images);
        return $images;
    }
}
