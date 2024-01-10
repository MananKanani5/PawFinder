<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">About Us</h2> 
            <p>Home / About Us</p>  
        </div>

        <div id="about-page">
            <div class="left-abt">
            <h1 class="bg-text">Pets</h1>
                <img src="./images/abt-section.png" alt="about" class="abt-img">
            </div>
            <div class="right-abt">
                <h3 class="sub-title">A Little About PawFinder</h3>  
                <h2 class="main-title">The Heart Behind PawFinder</h2> 
                <p class="abt-content">Welcome to PawFinder, a heartwarming initiative led by Manan Kanani. PawFinder's core mission is to reunite every lost pet with its loving family, ensuring that pets find their way back to their rightful homes and into the warm embrace of their owners. Our growing community of pet lovers is dedicated to this heartwarming mission, rekindling the bonds of love and companionship that define our pets as cherished family members. <br><br>
                At PawFinder, we believe in the power of compassion, community, and pet safety. Our platform offers a place where pet owners can connect, share their stories, and find support during those challenging times when a pet is lost. It's more than just a website; it's a haven for pet lovers, a source of hope, and a catalyst for joyful reunions. <br><br>
                Join us on this journey, where wagging tails and joyful hearts are our measure of success. PawFinder is more than just a project; it's a testament to the enduring love between pets and their owners, where every reunion is a celebration of family and happiness.</p>
                <div class="btn-grp">
                    <a href="./lost-pet.php" class="btn-primary hero-btn-1">I Lost Pet</a>
                    <a href="./found-pet.php" class="btn-primary hero-btn-2">I Found Pet</a>
            </div>

            </div>
        </div>
        <div id="about">  
            <div class="right-abt">
                <h3 class="sub-title">Discover the Core of PawFinder</h3>  
                <h2 class="main-title">Our Heartfelt Mission</h2> 
                <p class="abt-content">At PawFinder, our unwavering mission is to reunite every lost pet with their loving family. We believe that pets are more than just animals; they are cherished family members, and their safety and happiness matter deeply. Our platform is a haven for pet lovers, a place where compassion and community come together. We are committed to creating happiness by ensuring that pets find their way back to where they belong – in the loving embrace of their owners.
                <br><br>
                PawFinder is not just a project; it's a heartwarming journey that rekindles the bonds of love and companionship between pets and their families. Our measure of success is the joy in every reunion, the wagging tails, and the rekindling of those cherished moments that define the special relationship between pets and their owners. Join us in this mission, and let's make more tails wag and hearts smile together.</p>
            </div>
            <div class="left-abt">
                <img src="./images/mission_img.jpg" alt="mission" style="margin-bottom:65px">
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


        <div id="faq-container">
            <div class="uper-faq">
                <h1 class="main-title">Frequently Asked Questions</h1>
                <p class="sub-title">Your Questions, Our Answers.</p>
            </div>
            <div class="lowerfaq">
                <div class="lower-left-faq">
                    <div class="faq">
                        <button class="accordion">1. What is PawFinder?</button>
                        <div class="panel">
                            <p>PawFinder is a community-driven platform dedicated to reuniting lost pets with their families.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">2. How does PawFinder work?</button>
                        <div class="panel">
                            <p>If you've lost a pet, you can create a 'Lost Pet' listing with details about your pet. If you've found a pet, you can create a 'Found Pet' listing. PawFinder's community then helps connect lost pets with their owners.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">3. Is PawFinder free to use?</button>
                        <div class="panel">
                            <p>Yes, PawFinder is free to use. Our primary goal is to bring pets back home, and we believe in the power of community support and compassion.</p>
                        </div>
                    </div>
                </div>
                <div class="lower-right-faq">
                    <div class="faq">
                        <button class="accordion">4. How can I post a lost or found pet listing?</button>
                        <div class="panel">
                            <p>To post a listing, simply click on 'Lost a Pet' or 'Found a Pet' on our website. Fill out the necessary details, including a description and a photo if possible. Your listing will then be visible to our community.</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">5. How can I support PawFinder's mission?</button>
                        <div class="panel">
                            <p>You can support us by being an active member of our community, sharing your stories, helping reunite lost pets, and promoting responsible pet ownership. Every action counts!</p>
                        </div>
                    </div>
                    <div class="faq">
                        <button class="accordion">6. Is my personal information safe on PawFinder?</button>
                        <div class="panel">
                            <p>We take user privacy seriously. Personal information is kept secure and is only shared with those who need it to facilitate the reunion process.</p>
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