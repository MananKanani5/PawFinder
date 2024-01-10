<?php
include("connection.php");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Handle contact details
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $address = $_POST['add'];

    // Handle pet details
    $petType = $_POST['petType'];
    $petBreed = $_POST['petBreed'];
    $size = $_POST['size'];
    $petName = $_POST['petname'];
    $color = $_POST['color'];
    $desc = $_POST['desc'];

    // Handle found details
    $foundDate = $_POST['founddate'];
    $foundTime = $_POST['foundtime'];
    $foundLocation = $_POST['found-add'];

    // Handle image uploads
    $imageUrls = [];

    if (isset($_FILES['images']['name'])) {
        $uploadDir = 'image_uploads/'; 

        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            if ($_FILES['images']['name'][$key]) {
                $file_name = $_FILES['images']['name'][$key];
                $file_tmp = $_FILES['images']['tmp_name'][$key];
                $image_url = $uploadDir . uniqid() . "_" . $file_name;
                move_uploaded_file($file_tmp, $image_url);
                $imageUrls[] = str_replace($uploadDir, '', $image_url); // Remove the prefix
            }
        }
    }
    // Store the data and image URLs in the database
    $imageUrlsString = implode(',', $imageUrls); // Convert the array to a comma-separated string

    $sql = "INSERT INTO found_request (name, email, phno, address, pet_type, pet_breed, pet_size, pet_name, pet_color,pet_description, found_date, found_time, found_address, found_images_url) VALUES ('$name', '$email', '$tel', '$address', '$petType', '$petBreed', '$size', '$petName', '$color', '$desc', '$foundDate', '$foundTime', '$foundLocation', '$imageUrlsString')";

    if (mysqli_query($connection, $sql)) {
        // Set a session variable to indicate the form has been submitted
        session_start();
        $_SESSION['form_submitted'] = true;
    
        // Redirect to the "Thank You" page
        header("Location: thank-you.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

}


// Close the database connection
mysqli_close($connection);
?>
