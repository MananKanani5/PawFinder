<?php 
    $error="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Found Pets | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">    
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">Found Pets</h2> 
            <p>Home / Lost Pets</p>  
        </div>
        <div id="found-pet">
            <div class="found-content mob-flex-column">
                <div class="found-content-left mob-width-100">
                    <img src="./images/found_image.jpg" alt="found-image" class="found-img">
                </div>
                <div class="found-content-right mob-width-100">
                    <img src="./images/comma.svg" alt="comma" class="comma">
                    <p>Every day, countless pets go missing, leaving their families in distress. You have the power to make a difference. By filling out this simple form, you're taking the first step toward reuniting a found pet with its loving family. Your support means the world to us and to the pets you're helping. Please provide as much detail as you can about the found pet. Every piece of information is a crucial puzzle piece in the reunion process.</p>
                    <div>
                        <h4 style="margin-bottom:15px"> Why Your Contribution Matters:</h4>
                        <ul style="list-style:none;">
                            <li><i class="ri-checkbox-circle-fill"></i> Reuniting families: Your help can lead a lost pet back to its loving family's arms.</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Creating happiness: Your efforts can bring joy and relief to both pets and their owners.</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Strengthening communities: Together, we're building a compassionate community that cares deeply for its furry friends.</li>
                        </ul>
                    </div>
                </div>              
            </div>
            <div class="found-form">
                <form action="submit_found_pet.php" method="POST" enctype="multipart/form-data">
                    <div class="contact-details">
                        <h2>Contact Information </h2>
                        <p class="found-form-para">Your contact details will be kept safe and secure with us. We respect your privacy and will never use your information for any purpose other than reuniting lost pets with their families.</p> 
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
                        <p class="found-form-para"> Please provide as much detail as you can about the found pet. Every piece of information is a crucial puzzle piece in the reunion process.</p> 
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
                            <input type="text" id="pet-name" name="petname" placeholder="Pet's Name (If any)" required/> 
                            <input type="text" id="color" name="color" placeholder="Pet's Color *" required/> 
                        </div>
                            <textarea placeholder="A little desciption of pet.. *"  id="desc" name="desc" required></textarea>
                    </div>
                    <div class="found-details">
                        <h2>Found Information</h2>
                        <p class="found-form-para"> Please Fill these Information as accurate as Possible</p>
                            <label for="Date">Found Date</label>
                            <input type="date" id="date" name="founddate" placeholder="Date of Found" required/> 
                            <label for="Date">Found Time</label>
                            <input type="time" id="time" name="foundtime" placeholder="Time of Found" required/> 
                            <label for="address">Found Location</label>
                            <textarea placeholder="Found Location ( Address ) *"  id="found-add" name="found-add" required></textarea> 
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
    <script src="./scripts/script.js"></script>
</body>
</html>