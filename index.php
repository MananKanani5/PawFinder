<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PawFinder - Reuniting Hearts, One Paw at a Time </title>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="hero" class="nav-animate">
            <h3 class="sub-title animate__animated animate__fadeInUp">Welcome to PawFinder</h3>  
            <h2 class="main-title animate__animated animate__fadeInUp">Committed to Reuniting Lost Pets with Their Families</h2> 
            <div class="btn-grp">
                <a href="./lost-pet.php" class="btn-primary hero-btn-1 animate__animated animate__fadeInUp">I Lost Pet</a>
                <a href="./found-pet.php" class="btn-primary hero-btn-2 animate__animated animate__fadeInUp">I Found Pet</a>
            </div> 
            <img src="./images/hero-bg.png" alt="pet-image" class="pet-image animate__animated animate__fadeInUp">
            <h1 class="bg-text animate__animated animate__fadeInUp">Pets</h1>
        </div>

        <div id="about">
            <div class="left-abt">
            <h1 class="bg-text">Love</h1>
                <img src="./images/abt-section.png" alt="about" class="abt-img">
            </div>
            <div class="right-abt">
                <h3 class="sub-title">A Little About PawFinder</h3>  
                <h2 class="main-title">The Heart Behind PawFinder</h2> 
                <p class="abt-content">Welcome to PawFinder, a warm-hearted project driven by Manan Kanani. At PawFinder, we're deeply committed to reuniting every lost pet with its loving family. Our journey is all about creating happiness by ensuring that pets find their way back to where they belong in the loving embrace of their owners. Join our growing community of pet lovers and be part of a heartwarming mission that not only makes tails wag but also rekindles the bonds of love and companionship that define our pets as cherished family members.</p>
                <a href="about-us.php" class="btn-primary">Read More</a>
            </div>
        </div>


        <div id="testimonial">
            <div class="uper-testi">
                <h1 class="main-title">Testimonials</h1>
                <p class="sub-title">Real experiences from our community of pet lovers.</p>
            </div>
            <div class="lower-testi">
                <div class="owl-carousel">
                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">"PawFinder was a godsend when Rocky went missing. Mumbai is a big city, and I was terrified. The support and encouragement I received from the PawFinder community were heartwarming. Within a day of posting a 'Lost Pet' listing, Rocky was found! PawFinder, you're a true friend to pet owners."</p>
                                <div>
                                    <h3>Ananya Gupta.</h3>
                                    <h3>Mumbai, Maharashtra</h3>
                                </div>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                            </div>
                        </div>

                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">"PawFinder changed the game for us! Whiskey had been missing, and I was anxious. Posting on PawFinder not only connected me with other pet lovers but also provided valuable tips. The 'Lost Pet' community supported me, and now, with Whiskey back home, I'm immensely grateful to PawFinder!"</p>
                                <div>
                                    <h3>Rajesh Sharma.</h3>
                                    <h3>Delhi, NCR</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testi-content">
                                <p class="text-justify">"PawFinder was a savior when Golu went missing. In the vast city of Delhi, I was filled with worry. The 'Found Pet' section on PawFinder quickly connected me with Golu's owner. Now, Golu is back with his family, and I owe it all to PawFinder. Thank you!"</p>
                                <div>
                                    <h3>Priya Malik.</h3>
                                    <h3>Bengaluru, Karnataka</h3>
                                <img src="./paw-40.svg" alt="paw-bg" class="testi-bg">

                                </div>
                            </div>
                        </div>
 
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>


    <script src="./scripts/script.js"></script>
    <script>
            // Testimonials

        var owl = $('.owl-carousel');
                owl.owlCarousel({
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:2000,
                    autoplayHoverPause:true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:2,
                            nav:false
                        },
                        1000:{
                            items:3,
                            nav:true,
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
</body>
</html>