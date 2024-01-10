<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | PawFinder</title>
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
                    <li><a href="dashboard.php" class="active">Dashboard</a></li>
                    <li><a href="found-pets.php">Found Pets</a></li>
                    <li><a href="lost-pets.php">Lost Pets</a></li>
                </ul>
                <a href="logout.php " class="btn-primary">Logout</a>
            </div>
            <div class="dash-right">
                <h1 class="single-title">Dashboard</h1>
                <div class="dash-nums">
                    <div class="item">
                        <h3>Lost Pets</h3>
                        <?php
                        $sqlLostPetsCount = "SELECT COUNT(*) AS lost_pets_count FROM lost_request";
                        $resultLostPetsCount = $connection->query($sqlLostPetsCount);

                        if ($resultLostPetsCount) {
                            $rowLostPetsCount = mysqli_fetch_assoc($resultLostPetsCount);
                            echo '<h1>' . $rowLostPetsCount['lost_pets_count'] . '</h1>';
                        } else {
                            echo '<p>Error retrieving count.</p>';
                        }
                        ?>
                    </div>
                    <div class="item">
                        <h3>Found Pets</h3>
                        <?php
                        $sqlFoundPetsCount = "SELECT COUNT(*) AS found_pets_count FROM found_request";
                        $resultFoundPetsCount = $connection->query($sqlFoundPetsCount);

                        if ($resultFoundPetsCount) {
                            $rowFoundPetsCount = mysqli_fetch_assoc($resultFoundPetsCount);
                            echo '<h1>' . $rowFoundPetsCount['found_pets_count'] . '</h1>';
                        } else {
                            echo '<p>Error retrieving count.</p>';
                        }
                        ?>
                    </div>
                    <div class="item">
                        <h3>Happy Lost Pets</h3>
                        <?php
                        $sqlhappylost = "SELECT COUNT(*) AS happy_lost_count FROM happy_lost_pets";
                        $resulthappylost = $connection->query($sqlhappylost);

                        if ($resulthappylost) {
                            $rowhappylost = mysqli_fetch_assoc($resulthappylost);
                            echo '<h1>' . $rowhappylost['happy_lost_count'] . '</h1>';
                        } else {
                            echo '<p>Error retrieving count.</p>';
                        }
                        ?>
                    </div>
                    <div class="item">
                        <h3>Happy Found Pets</h3>
                        <?php
                        $sqlhappyfound = "SELECT COUNT(*) AS happy_found_count FROM happy_found_pets";
                        $resulthappyfound = $connection->query($sqlhappyfound);

                        if ($resulthappyfound) {
                            $rowhappyfound = mysqli_fetch_assoc($resulthappyfound);
                            echo '<h1>' . $rowhappyfound['happy_found_count'] . '</h1>';
                        } else {
                            echo '<p>Error retrieving count.</p>';
                        }
                        ?>
                    </div>
                </div>
                <div class="dash-item text-center">
                    <h3 class="text-center">Found Pets</h3>
                    <div>
                    <?php
                        // Define your SQL query
                        $sql = "SELECT * FROM found_request LIMIT 3";
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
                            echo '<th>Got back to home</th>'; 
                            echo '</tr>';

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['pet_type'] . '</td>';
                                echo '<td>' . $row['pet_name'] . '</td>';
                                echo '<td>' . $row['pet_breed'] . '</td>';
                                echo '<td>' . $row['pet_description'] . '</td>';
                                echo '<td>' . $row['found_date'] . '</td>';

                                // Add Delete Listing and Edit Listing links or buttons
                                echo '<td><a href="delete-listing.php?id=' . $row['id'] . '">Delete</a></td>';
                                echo '<td><a href="edit-listing.php?id=' . $row['id'] . '&type=found">Edit</a></td>';
                                echo '<td><button onclick="moveToHappyPets(' . $row['id'] . ')">Got back to home</button></td>';

                                echo '</tr>';
                            }

                            echo '</table>';
                        } else {
                            echo '<p style="margin:30px">No results found.</p>';
                        }
                        ?>

                    </div>
                    <a href="found-pets.php" class="btn-small " >Load More</a>
                </div>
                <div class="dash-item text-center">
                    <h3 class="text-center">Lost Pets</h3>
                    <div>
                        <?php
                            $sql1 = "SELECT * FROM lost_request LIMIT 3";
                            $result1 = $connection->query($sql1);

                            if (mysqli_num_rows($result1) > 0) {
                                echo '<table>';
                                echo '<tr>';
                                echo '<th>Type</th>';
                                echo '<th>Name</th>';
                                echo '<th>Breed</th>';
                                echo '<th>Description</th>';
                                echo '<th>Date Lost</th>';
                                echo '<th>Delete Listing</th>';
                                echo '<th>Edit Listing</th>';
                                echo '<th>Got back to home</th>';
                                echo '</tr>';

                                while ($row = mysqli_fetch_assoc($result1)) {
                                    echo '<tr>';
                                    echo '<td>' . $row['pet_type'] . '</td>';
                                    echo '<td>' . $row['pet_name'] . '</td>';
                                    echo '<td>' . $row['pet_breed'] . '</td>';
                                    echo '<td>' . $row['pet_description'] . '</td>';
                                    echo '<td>' . $row['lost_date'] . '</td>';

                                    // Add Delete Listing and Edit Listing links or buttons
                                    echo '<td><a href="delete-listing.php?id=' . $row['id'] . '">Delete</a></td>';
                                    echo '<td><a href="edit-listing.php?id=' . $row['id'] . '&type=lost">Edit</a></td>';
                                    echo '<td><button onclick="moveToHappyPets(' . $row['id'] . ')">Got back to home</button></td>';
                                    echo '</tr>';
                                }

                                echo '</table>';
                            } else {
                                echo '<p style="margin:30px">No results found.</p>';
                            }

                            mysqli_close($connection);
                        ?>
                    </div>
                    <a href="lost-pets.php" class="btn-small " >Load More</a>
                </div>
                
            </div>
        </div>
    
        
    </div>

    <script>
    function moveToHappyPets(id) {
        // Redirect to delete-listing.php?id=id
        window.location.href = 'delete-listing.php?id=' + id;
    }
</script>
    <script src="../scripts/script.js"></script>
</body>
</html>