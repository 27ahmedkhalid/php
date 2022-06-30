<!DOCTYPE html>
<html>
<body>
<?php
$target_dir = "uploads/";
$files= $_FILES["pic"]["name"];
$TmpName= $_FILES["pic"]["tmp_name"];
$target_file = $target_dir . basename($files);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image


if(isset($_POST["submit"])) {
  $check = getimagesize($TmpName);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["pic"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
if ($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif"){
  echo "sorry only allow the format JPG,PNG,JPEG,GIF";
  $uploadOk =0;
}
if($uploadOk == 0){
  echo "sorry your file faild to upload";
}
else {
  if (move_uploaded_file($TmpName, $target_file)) {
    echo "The file ". htmlspecialchars( basename($files)). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
echo $target_file;
?>
<form action="File Upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="pic" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
