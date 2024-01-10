<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost Pets | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">Lost Pets</h2> 
            <p>Home / Lost Pets</p>  
        </div>

        <div id="lost-pet" class="d-flex flex-column align-items-center">
            <div class="owl-carousel">
                <?php
                    include("connection.php");
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Define your SQL query
                    $sql = "SELECT * FROM found_request ORDER BY RAND()";
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
                    }

                    mysqli_close($connection);
                    
                ?>
            </div>
        <a href="all-lost-pet.php" class="btn-primary"> See All Lost Pets</a>


        <div class="lost-form">
                <form action="submit_lost_pet.php" method="POST" enctype="multipart/form-data">
                    <div class="contact-details">
                        <h2>Contact Information </h2>
                        <p class="lost-form-para">Your contact details will be kept safe and secure with us. We respect your privacy and will never use your information for any purpose other than reuniting lost pets with their families.</p> 
                        <div class="d-flex gap-15 mob-flex-column">
                            <input type="text" id="name" name="name" placeholder="Your Full Name *" required/>  
                            <input type="email" id="email" name="email" placeholder="Email Address *" required  />
                        </div>
                        <div>
                            <input type="tel" id="tel" name="tel" placeholder="Your Phone Number *" required />  
                            <textarea placeholder="Your Address *"  id="add" name="add" required></textarea>
                        </div>
                    </div>
                    <div class="pet-details">
                        <h2>Pet Information</h2>
                        <p class="lost-form-para"> Please provide as much detail as you can about the lost pet. Every piece of information is a crucial puzzle piece in the reunion process.</p> 
                        <div class="d-flex gap-15 mob-flex-column">
                            <select id="pettype" name="petType" onchange="populateSecondSelect()" required>
                                <option value="">Select a Pet Type *</option>
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                                <option value="rabbit">Rabbit</option>
                                <option value="turtle">Turtle</option>
                                <option value="cow">Cow</option>
                            </select> 
                            <select id="petbreed" name="petBreed" required>
                                <option value="">Select a Breed * (first Choose Type)</option>
                            </select> 
                            <select id="size" name="size" required>
                                <option value="">Select a Pet Size *</option>
                                <option value="large">large</option>
                                <option value="medium">Medium</option>
                                <option value="small">Small</option>
                            </select>  
                            <input type="text" id="pet-name" name="petname" placeholder="Pet's Name" required/> 
                            <input type="text" id="color" name="color" placeholder="Pet's Color *" required/> 
                        </div>
                            <textarea placeholder="A little desciption of pet.. *"  id="desc" name="desc" required></textarea>
                    </div>

                    <div class="lost-details">
                        <h2>Lost Information</h2>
                        <p class="lost-form-para"> Please Fill these Information as accurate as Possible</p>
                            <label for="Date">Lost Date</label>
                            <input type="date" id="date" name="lostdate" placeholder="Date of Found" required/> 
                            <label for="Date">Lost Time</label>
                            <input type="time" id="time" name="losttime" placeholder="Time of Found" required/> 
                            <label for="address">Lost Location</label>
                            <textarea placeholder="Found Location ( Address ) *"  id="lost-add" name="lost-add" required></textarea> 
                            <label for="address">Upload Images</label>
                            <div class="custom-upload">
                                <label for="photo-upload" class="custom-upload-label">
                                <i class="ri-camera-line"></i> <span>Choose photos</span> 
                                    <input type="file" name="images[]" id="photo-upload" multiple accept="image/*" class="custom-upload-input" required>
                                </label>
                                <div id="selected-photos" class="selected-photos">
                                    <p>No photos selected</p>
                                </div>
                                <div id="preview-container" class="preview-container mob-flex-column"></div>
                            </div>
                    </div>
                    <input class="btn-primary found-submit" type="submit" value="Send Information">
                </form>
            </div>

    </div>

    

        <?php include 'footer.php'; ?>
    </div>


    <script>
        var owl = $('.owl-carousel');
                owl.owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:false,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:4,
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



                        