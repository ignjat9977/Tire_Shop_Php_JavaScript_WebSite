<?php
    $headerImage = "assets/img/car-cover.jpg";
    $coverText = "More Information about us!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("assets/includes/head.php");
    ?>
</head>
<body>

    <!-- Start header -->
    <?php
        include("assets/includes/header.php");
    ?>
    <!-- End -->

    <!-- Start Login -->
    <?php
        include("assets/includes/login.php");
    ?>
    <!-- End -->

    <!-- Start Register -->
    <?php
        include("assets/includes/register.php");
    ?>
    <!-- End -->

    <!-- Start cover -->
    <?php
        include("assets/includes/cover.php");
    ?>
    <!-- End -->
    <?php include("assets/includes/modal.php"); ?>


    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <p>
                    The Tire Store was founded in 1978. Current owners Dave 
                    and Nick purchased the business in 1989 and have been running
                     the operation since. There are three The Tire Store locations 
                     today, two of which have been in the same spot for the last 30 
                     years. The first location is at 43923 N. Sierra Highway Lancaster,
                      California. The second is at 21011 Santa Barbra Drive Tehachapi, CA.
                       The third shop is at 1816 Rosamond Blvd. Rosamond, CA.
                    It’s our mission to get customers in and out of the shop as quickly as 
                    possible, while keeping prices as low as possible. Contact us online for more
                     information. Prices are born at The Tire Store, but they are raised elsewhere!
                     For over 30 years, customers who live or work in the communities of Tehachapi, Lancaster 
                     and Palmdale, California have been receiving great automotive service. Now, we offer a ti
                     re size finder on our website, for customers to use from the convenience of home. By ente
                     ring the make, model and year of a vehicle, customers are taken to a world of brand name t
                     ires that are perfect for their vehicle. New tire sales are not all we do at The Tire Store
                     . We offer tire rotations, low profile installations, flat repairs and computerized spin bal
                     ancing.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Start Footer -->
    <?php
        include("assets/includes/footer.php");
    ?>
    <!-- End -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
     crossorigin="anonymous"></script>
     <!-- End -->
     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.js" 
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
     crossorigin="anonymous"></script>
     <!-- End -->
     <!-- my JS -->
     <script type="text/javascript" src="assets/js/main.js"></script>
     <!-- End -->
</body>
</html>