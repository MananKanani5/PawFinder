<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost Pets | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        
        <!-- <a href="logout.php">Logout</a> -->
        <div id="dash">
            <div class="dash-left">
                <img src="../images/logos/PawFinder Logo_black.png" alt="logo" class="dash-logo">
                <ul class="nav">
                    <li><a href="dashboard.php" >Dashboard</a></li>
                    <li><a href="found-pets.php">Found Pets</a></li>
                    <li><a href="lost-pets.php" class="active">Lost Pets</a></li>
                </ul>
                <a href="logout.php " class="btn-primary">Logout</a>
            </div>
            <div class="dash-right">
                <h1 class="single-title">Lost Pets</h1>
                
                <div class="dash-item">
                    <div>
                    <?php
                        // Define your SQL query
                        $sql = "SELECT * FROM lost_request";
                        $result = $connection->query($sql);

                        if (mysqli_num_rows($result) > 0) {
                            echo '<table>';
                            echo '<tr>';
                            echo '<th>Type</th>';
                            echo '<th>Name</th>';
                            echo '<th>Breed</th>';
                            echo '<th>Description</th>';
                            echo '<th>Date Found</th>';
                            echo '<th>Delete Listing</th>';
                            echo '<th>Edit Listing</th>';
                            echo '</tr>';

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['pet_type'] . '</td>';
                                echo '<td>' . $row['pet_name'] . '</td>';
                                echo '<td>' . $row['pet_breed'] . '</td>';
                                echo '<td>' . $row['pet_description'] . '</td>';
                                echo '<td>' . $row['lost_date'] . '</td>';

                                // Add Delete Listing and Edit Listing links or buttons
                                echo '<td><a href="delete-listing.php?id=' . $row['id'] . '">Delete</a></td>';
                                echo '<td><a href="edit-listing.php?id=' . $row['id'] . '">Edit</a></td>';

                                echo '</tr>';
                            }

                            echo '</table>';
                        } else {
                            echo '<p>No results found.</p>';
                        }

                        mysqli_close($connection);
                        ?>


                    </div>
                </div>
            </div>
        </div>
    
        
    </div>


    <script src="../scripts/script.js"></script>
</body>
</html>