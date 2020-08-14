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
        //var_dump("upload", $results);
        return $results;
    }
    public function getAllImages()
    {
        $images = array();
        $dir_name = "gallary/";
        $images = glob($dir_name . "*");
        $time = array();
        foreach ($images as $file) {
            $time[] = filemtime($file);
        }

        array_multisort($time,  SORT_DESC, $images);

        return $images;
    }
}
