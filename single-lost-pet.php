<?php
    include("connection.php");
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // Get the pet's ID from the query parameter
        if (isset($_GET['id'])) {
            $petId = $_GET['id'];

            // Define an SQL query to retrieve the pet's information based on the ID
            $sql = "SELECT * FROM found_request WHERE id = " . $petId;
            $result = $connection->query($sql);

            $row = mysqli_fetch_assoc($result);
            $imageUrls = explode(',', $row['found_images_url']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['pet_name'] ?> | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title"><?php echo $row['pet_name'] ?></h2> 
            <p>Home / <?php echo $row['pet_name'] ?>  </p>  
            <table class="styled-table">
    
</table>
        </div>

        
        <?php
                echo '<div class="main-product mob-flex-column">';
                echo '<div class="left-single mob-width-100">';
                echo '<div class="owl-carousel ">';
                foreach ($imageUrls as $imageUrl)
                {
                    echo '<img loading="lazy" class="data-image-full item" src="image.php?image=' . $imageUrl . '" alt="Pet Image">';
                }
                echo '</div>';
                echo '</div>';

                echo '<div class="right-single mob-width-100">';
                    echo '<h4 class="single-category">' . $row['pet_type'] . '</h4>';
                    echo '<h1 class="single-title">' . $row['pet_name'] . '</h1>';
                    echo '<p class="single-desc">' . $row['pet_description'] . '</p>';
                    echo '<a href="#" class="btn-primary"> Request Contact Details</a>';
                    echo '<table class="styled-table">';
                    echo '<tbody>';

                        echo '<tr>';
                        echo '<td>Breed:</td>';
                        echo '<td>'. $row['pet_breed'] .'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Size:</td>';
                        echo '<td>'. $row['pet_size'] .'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Color:</td>';
                        echo '<td>'. $row['pet_color'] .'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Date Found:</td>';
                        echo '<td>'. $row['found_date'] .'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Time Found:</td>';
                        echo '<td>'. $row['found_time'] .'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Time Place:</td>';
                        echo '<td>'. $row['found_address'] .'</td>';
                        echo '</tr>';
                    echo '</tbody>';
                    echo '</table>';
                echo '</div>';
                echo '</div>';
        }
        mysqli_close($connection);
        ?>

    <div id="lost-pet" >
        <h1 class="single-title" style="text-align:center; margin-bottom:20px">Other Lost Pets</h1>
            <div class="d-flex mob-flex-column">
                <?php
                    include("connection.php");
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Define your SQL query
                    $sql = "SELECT * FROM found_request ORDER BY RAND() LIMIT 4";
                    $result = $connection->query($sql);
                    if (mysqli_num_rows($result) > 0) {
                        

                        while ($row = mysqli_fetch_assoc($result)) {
                            if (!empty($row['found_images_url'])) {
                                $imageUrls = explode(',', $row['found_images_url']);
                                foreach ($imageUrls as $imageUrl){}

                                $singlePageLink = 'single-lost-pet.php?id=' . $row['id'];
                                $limitedDescription = (strlen($row['pet_description']) > 100) ? substr($row['pet_description'], 0, 100) . '...' : $row['pet_description'];

                                echo '<a class="item-link" href="' . $singlePageLink . '">';
                                echo '<div class="card item">';
                                echo '<img class="data-image" src="image.php?image=' . $imageUrl . '" alt="Pet Image">';
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
                    }

                    mysqli_close($connection);
                    
                ?>
                </div>
                <a href="all-lost-pet.php" class="btn-primary" style="text-align:center"> See All Lost Pets</a>
        <?php include 'footer.php'; ?>
    </div>

    

    <script>
        var owl = $('.owl-carousel');
                owl.owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:2,
                            nav:false
                        },
                        600:{
                            items:2,
                            nav:false
                        },
                        1000:{
                            items:1,
                            nav:false,
                        }
                    }
                });
                $('.play').on('click',function(){
                    owl.trigger('play.owl.autoplay',[1000])
                })
                $('.stop').on('click',function(){
                    owl.trigger('stop.owl.autoplay')
                })
        </script>
    <script src="./scripts/script.js"></script>
</body>
</html>