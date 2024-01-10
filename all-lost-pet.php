<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Lost Pets | PawFinder</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="./images/logos/icon.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadAllListings() {
                $.ajax({
                    type: 'GET',
                    url: 'search.php', // Create a separate PHP file (search.php) for handling the search
                    success: function(response) {
                        $('#lost-pet .card-container').html(response);
                    }
                });
            }

            // Load all listings by default
            loadAllListings();

            // Handle real-time search
            $('#search-form input').on('input', function() {
                var searchQuery = $(this).val();

                if (searchQuery === '') {
                    // If the search query is empty, load all listings
                    loadAllListings();
                } else {
                    // Otherwise, perform the search
                    $.ajax({
                        type: 'GET',
                        url: 'search.php', // Create a separate PHP file (search.php) for handling the search
                        data: { search: searchQuery },
                        success: function(response) {
                            $('#lost-pet .card-container').html(response);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body onload="myFunction()">
    <div class="load" id="loader"><hr/><hr/><hr/><hr/></div>
    <div id="main" style="display:none;" class="animate-bottom">
        <?php include 'header.php'; ?>

        <div id="bread">
            <h2 class="main-title">All Lost Pets</h2> 
            <p>Home / All Lost Pets</p>  
        </div>

        


        <div id="lost-pet" class="">
            <div id="search-form" class="">
                <form>
                    <input type="text" class="search-input" name="search" id="search" placeholder="Search by name, type, color,etc...">
                    <i class="ri-search-line search-icon"></i>
                </form>
            </div>
            <div class="card-container">
                <!-- Results will be dynamically updated here -->
            </div>
        </div>

        <hr>
        <?php include 'footer.php'; ?>
    </div>
    <script src="./scripts/script.js"></script>
</body>
</html>
