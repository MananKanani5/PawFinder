<?php
include("connection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the listing is in found_request or lost_request
    $checkSql = "SELECT * FROM found_request WHERE id = $id";
    $result = mysqli_query($connection, $checkSql);

    if ($result && mysqli_num_rows($result) > 0) {
        // The listing is in found_request, move it to happy_found_pets
        $moveSql = "INSERT INTO happy_found_pets SELECT * FROM found_request WHERE id = $id";
        $deleteSql = "DELETE FROM found_request WHERE id = $id";
    } else {
        // The listing is in lost_request, move it to happy_lost_pets
        $moveSql = "INSERT INTO happy_lost_pets SELECT * FROM lost_request WHERE id = $id";
        $deleteSql = "DELETE FROM lost_request WHERE id = $id";
    }

    // Perform the move query
    if (mysqli_query($connection, $moveSql)) {
        // Move successful, now perform the delete query
        if (mysqli_query($connection, $deleteSql)) {
            // Redirect to the referring page
            $referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'dashboard.php';
            header("Location: $referrer");
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            echo "Error deleting listing: " . mysqli_error($connection);
        }
    } else {
        echo "Error moving listing: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request";
}

mysqli_close($connection);
?>
