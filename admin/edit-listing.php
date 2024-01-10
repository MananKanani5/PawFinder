<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit item</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
    <div id="dash">
            <div class="dash-left">
                <img src="../images/logos/PawFinder Logo_black.png" alt="logo" class="dash-logo">
                <ul class="nav">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="found-pets.php">Found Pets</a></li>
                    <li><a href="lost-pets.php">Lost Pets</a></li>
                </ul>
                <a href="logout.php " class="btn-primary">Logout</a>
            </div>
            <div class="dash-right">
            <h1 class="single-title">Edit <?php echo $row['pet_name'] ?></h1>
            <div class="edit-item-form">
            <?php
            include("connection.php");

            if (isset($_GET['id']) && isset($_GET['type'])) {
                $id = $_GET['id'];
                $type = $_GET['type'];

                // Determine the table based on whether it's a lost or found pet
                $tableName = ($type === 'lost') ? 'lost_request' : 'found_request';

                // Fetch the listing details based on the ID and table
                $selectSql = "SELECT * FROM $tableName WHERE id = $id";
                $result = mysqli_query($connection, $selectSql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

                    echo '<form class="edit-form" method="post" action="update-listing.php">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<input type="hidden" name="type" value="' . $type . '">'; // Add a new input field to pass the type
                    echo '<input type="hidden" name="table" value="' . $tableName . '">';

                    echo 'Type: <input type="text" name="pet_type" value="' . $row['pet_type'] . '"><br>';
                    echo 'Name: <input type="text" name="pet_name" value="' . $row['pet_name'] . '"><br>';
                    echo 'Description: <textarea name="pet_description">' . $row['pet_description'] . '</textarea><br>';
                    
                    // Check the type and use the corresponding date field
                    echo 'Date ' . ucfirst($type) . ': <input type="date" name="' . $type . '_date" value="' . $row[$type . '_date'] . '"><br>';

                    echo '<input class="btn-primary" type="submit" value="Update Listing">';
                    echo '</form>';
                } else {
                    echo "Listing not found";
                }
            } else {
                echo "Invalid request";
            }

            mysqli_close($connection);
            ?>


            </div>
        
            </div>
    </div>
    
    <script src="../scripts/script.js"></script>
</body>
</html>




    