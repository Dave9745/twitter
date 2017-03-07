<?php
    require('class.image.php');
?>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="avatar" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php

echo $img_name = Image::randomString(25);

$destination = 'image/'.$img_name.'.png';
move_uploaded_file($_FILE['avatar']['tmp_name'], $destination);

?>
