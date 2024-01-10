<?php
include("connection.php");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$search = isset($_GET['search']) ? mysqli_real_escape_string($connection, $_GET['search']) : '';

$sql = "SELECT * FROM found_request 
        WHERE pet_name LIKE '%$search%' OR
              pet_type LIKE '%$search%' OR
              pet_description LIKE '%$search%' OR
              found_date LIKE '%$search%'";

$result = $connection->query($sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (!empty($row['found_images_url'])) {
            $imageUrls = explode(',', $row['found_images_url']);
            foreach ($imageUrls as $imageUrl) {}

            $singlePageLink = 'single-lost-pet.php?id=' . $row['id'];
            $limitedDescription = (strlen($row['pet_description']) > 100) ? substr($row['pet_description'], 0, 100) . '...' : $row['pet_description'];

            echo '<a class="item-link" href="' . $singlePageLink . '">';
            echo '<div class="card item">';
            echo '<img loading="lazy" class="data-image" src="image.php?image=' . $imageUrl . '" alt="Pet Image">';
            echo '<div class="card-info">';
            echo '<p class="card-category">'. $row['pet_type'] . '</p>';
            echo '<h2 class="card-title">' . $row['pet_name'] . '</h2>';
            echo '<p class="card-desc">' . $limitedDescription . '</p>';
            echo '<p class="card-detail">Date Found: ' . $row['found_date'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
        } else {
            // Handle cases where "image_url" is undefined, e.g., display a placeholder image or a message.
            echo '<img src="placeholder.jpg" alt="No Image Available">';
        }
    }
} else {
    echo '<p>No results found.</p>';
}

mysqli_close($connection);
?>
