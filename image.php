<?php
if (isset($_GET['image'])) {
    $imageFilename = $_GET['image'];

    $imagePath = 'image_uploads/' . $imageFilename;

    if (file_exists($imagePath)) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $imagePath);
        finfo_close($finfo);
        header('Content-Type: ' . $mimeType);

        readfile($imagePath);
    } else {
        echo 'Image not found.';
    }
} else {
    echo 'Image parameter missing.';
}
?>
