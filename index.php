<?php
    $headerImage = "assets/img/cover-wheel.jpg";
    $coverText = "Be prepared for best tires ever!";
    include("assets/models/functions.php");
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

    <section id="ik-why-us">
        <div class="container">
            <div class="row">
                <div class="col-4 mx-auto">
                    <div class="ik-circle mx-auto d-flex align-items-center justify-content-center">
                        <h4 class="ik-color-white">Why Us</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-md-4 text-center mt-4">
                    <div class="ik-circle-x mx-auto d-flex align-items-center justify-content-center">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h4>Free Shipping</h4>
                </div>
                <div class="col-12 col-md-4 text-center mt-4">
                    <div class="ik-circle-x mx-auto d-flex align-items-center justify-content-center">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h4>Fast Delivery</h4>
                </div>
                <div class="col-12 col-md-4 text-center mt-4">
                    <div class="ik-circle-x mx-auto d-flex align-items-center justify-content-center">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Best Quality</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="ik-brands">
        <div class="container py-4">
            <div class="row">
                <div class="col-12 text-center ik-color-red">
                    <h1>Our Brands</h1>
                </div>
            </div>
        </div>
        <?php $data = selectAll("home_section");
        foreach($data as $d):?>
        <div class="<?=$d->background_color;?> py-5">
            <div class="container">
                <div class="row align-items-center align-content-center">
                    <div class="col-12 col-md-6 <?=$d->order_one;?> d-flex">
                        <img src="assets/img/<?=$d->src;?>" alt="<?=$d->name;?>" class="img-fluid d-block">
                    </div>
                    <div class="col-12 col-md-6 ik-color-red <?=$d->order_two;?>">
                        <h3><?=$d->name;?></h3>
                        <p><?=$d->description;?></p>
                    </div>
                </div>
            </div>
            </div>
            <?php endforeach;?>
    </section>

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