<?php
    require_once("db.php");
    require "vendor/autoload.php";
    require_once("cloudnary/config.php");
    use Cloudinary\Configuration\Configuration;
    use Cloudinary\Api\Upload\UploadApi;

    $email = $_COOKIE['auth_token'];
    $nameuser = "SELECT * FROM users WHERE email='$email'";
    $res = $conn->query($nameuser);
    if($res->num_rows){
        while($result = $res->fetch_object()){
            $name = $result->name;
            
        }
    }

    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        // print_r($file);
        $filename = $_FILES['file']['tmp_name'];
        $data = (new UploadApi())->upload("$filename", ['public_id' => "$name".'photo']);
        $img = $data['secure_url'];
        // header('Location: settingProfile.php');
        $cld = (new ImageTag('@felpsphoto.jpg'))
                ->resize(Resize::crop()->width(400)
                ->height(400)
                ->gravity(
                Gravity::focusOn(
                FocusOn::face()))
                )
                ->roundCorners(RoundCorners::max())
                ->resize(Resize::scale()->width(200));
        echo "$cld";
    }
 
?>