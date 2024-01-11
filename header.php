<?php 
            // function to get the current page name
        function PageName() {
            return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
        }
        
        $current_page = PageName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="manifest" href="manifest.json" />
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    

    <!-- A2HS -->

    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Manan Kanani">
    <meta name="apple-mobile-web-app-title" content="Manan Kanani">
    <meta name="theme-color" content="#202020">
    <meta name="msapplication-navbutton-color" content="#202020">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/index.html">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="images/favicons/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
</head>
<body>
<nav >
        <div class="left-nav">
            <a href="index.php" class="logo"><img src="images/logos/PawFinder Logo_black_transparent.png" alt=""></a>
        </div>
        <div class="menu menu-close">
            <i class="ri-close-fill hide-pc" id="button-close"></i>
            <ul id="navMenus" class="w-nav-link">
                <li><a class="<?php echo $current_page == 'index.php' ? 'active':NULL ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo $current_page == 'about-us.php' ? 'active':NULL ?>" href="about-us.php">About Us</a></li>
                <li><a class="<?php echo $current_page == 'lost-pet.php' ? 'active':NULL ?>" href="lost-pet.php">I lost a Pet</a></li>
                <li><a class="<?php echo $current_page == 'found-pet.php' ? 'active':NULL ?>" href="found-pet.php">I Found a Pet</a></li>
                <li><a class="<?php echo $current_page == 'contact-us.php' ? 'active':NULL ?>" href="contact-us.php">Contact Us</a></li>
                <!-- <li><a href="./admin">Admin</a></li> -->
            </ul>

            <div class="menu-bottom-mobile hide-pc">
                <!-- <p>Donate Us</p> -->
                <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_N4LecIZmHvesul" async> </script> </form>
                
            </div>
        </div>

        <div class="right-nav">
            <!-- <a href="#" id="pop-open" class="btn-primary ">Donate</a> -->
            <form class="hide-mob"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_N4LecIZmHvesul" async> </script> </form>

            <!-- <i class="fa fa-bars " "></i> -->
            <i class="ri-menu-2-line hide-pc" id="button-open"></i>
        </div>
    </nav>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/scripts/script.js"></script>
    <script>
        $("#button-open").click(function(){
            $(".menu-close").toggleClass("menu-open");
        });

        $("#button-close").click(function(){
            $(".menu-close").toggleClass("menu-open");
        });
    </script>
</body>
</html>