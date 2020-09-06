<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="uploaded_file" id="uploaded_file">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php 
if(isset($_FILES['uploaded_file'])) {
    $errors     = array();
    $maxsize    = 1048576;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );

    if(($_FILES['uploaded_file']['size'] >= $maxsize) || ($_FILES["uploaded_file"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
    }

    if((!in_array($_FILES['uploaded_file']['type'], $acceptable)) && (!empty($_FILES["uploaded_file"]["type"]))) {
        $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }

    if(count($errors) === 0) {
        move_uploaded_file($_FILES['uploaded_file']['tmpname'], '/store/to/location.file');
    } else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
        }

        die(); 
    }
}
