<?php
    require "vendor/autoload.php";
    require "cloudnary/config.php";
    use Cloudinary\Api\Upload\UploadApi;

    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        print_r($file);
        $filename = $_FILES['file']['tmp_name'];
        (new UploadApi())->upload("$filename");
    }
 
?>