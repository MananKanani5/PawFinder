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
    $lostDate = $_POST['lostdate'];
    $lostTime = $_POST['losttime'];
    $lostLocation = $_POST['lost-add'];

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

    $sql = "INSERT INTO lost_request (name, email, phno, address, pet_type, pet_breed, pet_size, pet_name, pet_color,pet_description, lost_date, lost_time, lost_address, lost_images_url) VALUES ('$name', '$email', '$tel', '$address', '$petType', '$petBreed', '$size', '$petName', '$color', '$desc', '$lostDate', '$lostTime', '$lostLocation', '$imageUrlsString')";

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
