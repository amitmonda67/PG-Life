<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PG Life | College PG Buddy</title>

    <?php 
        include "includes/head_links.php";
    ?>
    <link href="css/index.css" rel="stylesheet">
</head>

<body>
    <?php 
        include "includes/header.php";
    ?>

    <div class="search-home">
        <div class="row" id="search-box">
            <div class="col-12 text-center justify-content-center" id="search-box-col1">Happiness per Square Foot</div>
            <form id="search_form" action="property_list.php" method="GET">
                <div class="col-12">
                    <div class="input-group mb-3" style="background-color: #4DC7BC; border-radius: 6px;">
                        <input type="text" class="form-control input-city" id="city" name="city" placeholder="Search a city..." aria-label="search-bar"
                            aria-describedby="search-button">
                        <button class="btn btn-outline-secondary" type="submit" id="search-button" style="color: white; border: none;">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="cities-home">
        <div class="row justify-content-center align-items-center" id="cities-box">
            <div class="col-12 text-center justify-content-center" id="cities-box-col1" ,
                style="font-size: x-large; font-weight: bold; padding-bottom: 5%;">Major Cities</div>
            <div class="col-md-2">
                <a href="property_list.php?city=Delhi">
                    <div class="delhi"><img src="img/delhi.png" width="100%" class="rounded float-center" alt="Delhi">
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="property_list.php?city=Bengaluru">
                    <div class="bangalore"><img src="img/bangalore.png" width="100%" class="rounded float-center"
                            alt="Bangalore"></div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="property_list.php?city=Hyderabad">
                    <div class="hyderabad"><img src="img/hyderabad.png" width="100%" class="rounded float-center"
                            alt="Hyderabad"></div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="property_list.php?city=Mumbai">
                    <div class="mumbai"><img src="img/mumbai.png" width="100%" class="rounded float-center"
                            alt="Mumbai"></div>
                </a>
            </div>
        </div>
    </div>

    <?php 
        include "includes/signup_modal.php";
    ?>
    <?php 
        include "includes/login_modal.php";
    ?>
    <?php 
        include "includes/footer.php";
    ?>
</body>

</html>