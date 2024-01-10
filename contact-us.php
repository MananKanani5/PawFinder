<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
</head>
<body onload="myFunction()">
<div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">Contact Us</h2> 
            <p>Home / Contact Us</p>  
        </div>

        
        <div id="contact-container">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>If you have any questions or feedback, please reach out to us. We're here to assist you.</p>
            <p>Email: contact@pawfinder.com</p>
            <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="contact-form">
            <h3>Send a Message</h3>
            <form>
                <input type="text" placeholder="Your Name" id="name">
                <input type="email" placeholder="Your Email" id="email">
                <textarea placeholder="Your Message" id="message"></textarea>
                <button type="submit" class="btn-primary">Send</button>
            </form>
        </div>
    </div>



        <?php include 'footer.php'; ?>
    </div>


    <script src="./scripts/script.js"></script>
</body>
</html>