<?php
$target_dir = "/xampp/htdocs/2Website2/admin/include/uploads/";
$target_file_dir="";
$nameoffile ="";
$uploadOk=1;
if(isset($_POST['submit'])) {
    if ($_FILES) {

        if (is_array($_FILES['post_image']['name'])) {
            foreach ($_FILES['post_image']['name'] as $key => $value) {


                // TO check image with valid image format i.e. readable Width, Height, size, mime type.
                //getimagesize($filename) will return false when file a not image or multiple files.




//                $check=getimagesize($_FILES["post_image"]['name'][$key],$_FILES["post_image"]['tmp_name'][$key]);
//                echo $check;
//                exit();
//                if($check!==false){
//                    $uploadOk=1;
//                }
//                else{
//                    $uploadOk = 0;
//                    header("Location: ../add_post.php?Not_an_Image_File");
//                    exit();
//                }


                // TO Check Image size does not exceed the size limit
                if ($_FILES["post_image"]["size"][$key]> 500000) {
                    header("Location: ../add_post.php?File_Too_Large");
                    exit();
                }
                switch ($_FILES['post_image']['type'][$key]){
                    case 'image/jpg':
                        $ext = "jpg";
                        break;
                    case 'image/gif':
                        $ext = "gif";
                        break;
                    case 'image/png':
                        $ext = "png";
                        break;
                    case 'image/webp':
                        $ext = "webp";
                        break;
                    case 'image/svg+xml':
                        $ext = "svg+xml";
                        break;
                    case 'image/x-icon':
                        $ext = "x-icon";
                        break;
                    case 'image/jpeg':
                        $ext = "jpeg";
                        break;
                    case 'image/tiff':
                        $ext = "tif";
                        break;
                    default:
                        $ext = "";
                        break;
                }
                if (!$ext) {
                    header("Location: ../add_post.php?Only_JPG_JPEG_PNG_GIF_TIF_WEBP_files_allowed");
                    exit();
                }
                else{
                        // Her Image is ready to be stored.
                        $i = random_int(PHP_INT_MIN, PHP_INT_MAX);
                        $nameoffile = $_FILES['post_image']['name'][$key];
                        $stored_file_name = "$i" . $nameoffile;

                        //basename function returns the trailing  name of the given path along with extension(if present). // If it has path ending with / ot \ then it will return name bofore / or \.
                        $target_file_dir = $target_dir . "$i" . basename($_FILES["post_image"]["name"][$key]);
                        // Actually $nameoffile and basename($_FILES["post_image"]["name"][$key]) are same when valid file name exits.
                        move_uploaded_file($_FILES['post_image']['tmp_name'][$key], $target_file_dir);
                    }
                }
//            var_dump($nameoffile);
//            echo $nameoffile."   Hihihi   " . "$target_file_dir";
//            exit();
        }
    }
//    else{
//        echo "No Image file has been Uploaded.";
//    }
}






