<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $pet_type = $_POST['pet_type'];
    $pet_name = $_POST['pet_name'];
    $pet_description = $_POST['pet_description'];
    $type = $_POST['type']; // Retrieve the pet type from the form
    $table = $_POST['table']; // Add a new input field in your form to pass the table name

    // Define the date field based on the pet type
    $dateField = ($type === 'lost') ? 'lost_date' : 'found_date';
    $found_date = $_POST[$dateField];

    // Perform an UPDATE query to modify the listing
    $updateSql = "UPDATE $table 
                  SET pet_type = '$pet_type', pet_name = '$pet_name', 
                      pet_description = '$pet_description', $dateField = '$found_date' 
                  WHERE id = $id";

    if (mysqli_query($connection, $updateSql)) {
        // Redirect to the referring page
        $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'dashboard.php';
        header("Location: $referrer");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Error updating listing: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request";
}

mysqli_close($connection);
?>
