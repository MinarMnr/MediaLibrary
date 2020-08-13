<?php
class Medias extends CoreController
{
    public function __construct()
    {
        $this->mediaModel = $this->model("Media");
    }
    public function index()
    {

        $images = $this->mediaModel->getAllImages();
        $data = [
            'images' => $images
        ];

        $this->view("medias/index", $data);
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['cover_up'])) {

                $imgFile = $_FILES['coverimg']['name'];
                $tmp_dir = $_FILES['coverimg']['tmp_name'];
                $imgSize = $_FILES['coverimg']['size'];

                if (!empty($imgFile)) {

                    $upload_dir = 'img/'; // upload directory

                    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

                    // valid image extensions
                    $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions

                    // rename uploading image
                    $coverpic = rand(1000, 1000000) . "." . $imgExt;

                    // allow valid image file formats
                    if (in_array($imgExt, $valid_extensions)) {
                        // Check file size '5MB'
                        if ($imgSize < 5000000) {
                            $this->mediaModel->upload($tmp_dir, $upload_dir, $coverpic);

                            echo "uploading Done";
                        } else {
                            // "Sorry, your file is too large.";
                        }
                    } else {
                        // "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    }
                } else {
                    $this->view("medias/add");
                }
            }

            $this->view('medias/index');
        } else {
            $this->view("medias/add");
        }
    }
}
